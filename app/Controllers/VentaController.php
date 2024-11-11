<?php

namespace App\Controllers;
use App\Models\VentaModel;
use App\Models\DetalleVentaModel;
use CodeIgniter\Controller;

class VentaController extends Controller
{
    public function index()
    {
        $model = new VentaModel();
        $data['ventas'] = $model->findAll();
        return view('ventas/index', $data);
    }

    public function crear()
    {
        return view('ventas/crear');
    }

    public function guardar()
    {
        $ventaModel = new VentaModel();
        $ventaId = $ventaModel->insert([
            'id_cliente' => $this->request->getPost('id_cliente'),
            'fecha' => $this->request->getPost('fecha'),
            'total' => $this->request->getPost('total')
        ]);

        $detalleModel = new DetalleVentaModel();
        foreach ($this->request->getPost('productos') as $producto) {
            $detalleModel->insert([
                'id_venta' => $ventaId,
                'id_producto' => $producto['id_producto'],
                'cantidad' => $producto['cantidad'],
                'precio_unitario' => $producto['precio_unitario']
            ]);
        }

        return redirect()->to('/ventas');
    }

    public function editar($id)
    {
        $model = new VentaModel();
        $data['venta'] = $model->find($id);
        return view('ventas/editar', $data);
    }

    public function eliminar($id)
    {
        $model = new VentaModel();
        $model->delete($id);
        return redirect()->to('/ventas');
    }
}
