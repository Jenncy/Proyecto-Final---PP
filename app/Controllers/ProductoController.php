<?php

namespace App\Controllers;
use App\Models\ProductoModel;
use CodeIgniter\Controller;

class ProductoController extends Controller
{
    public function index()
    {
        $model = new ProductoModel();
        $data['productos'] = $model->findAll();
        return view('productos/index', $data);
    }

    public function crear()
    {
        return view('productos/crear');
    }

    public function guardar()
    {
        $model = new ProductoModel();
        $model->save([
            'nombre' => $this->request->getPost('nombre'),
            'descripcion' => $this->request->getPost('descripcion'),
            'precio' => $this->request->getPost('precio'),
            'stock' => $this->request->getPost('stock'),
            'categoria' => $this->request->getPost('categoria'),
            'proveedor' => $this->request->getPost('proveedor'),
            'estado' => $this->request->getPost('estado')
        ]);
        return redirect()->to('/productos');
    }

    public function editar($id)
    {
        $model = new ProductoModel();
        $data['producto'] = $model->find($id);
        return view('productos/editar', $data);
    }

    public function actualizar($id)
    {
        $model = new ProductoModel();
        $model->update($id, [
            'nombre' => $this->request->getPost('nombre'),
            'descripcion' => $this->request->getPost('descripcion'),
            'precio' => $this->request->getPost('precio'),
            'stock' => $this->request->getPost('stock'),
            'categoria' => $this->request->getPost('categoria'),
            'proveedor' => $this->request->getPost('proveedor'),
            'estado' => $this->request->getPost('estado')
        ]);
        return redirect()->to('/productos');
    }

    public function eliminar($id)
    {
        $model = new ProductoModel();
        $model->delete($id);
        return redirect()->to('/productos');
    }
}
