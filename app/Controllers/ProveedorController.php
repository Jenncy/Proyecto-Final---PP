<?php

namespace App\Controllers;
use App\Models\ProveedorModel;
use CodeIgniter\Controller;

class ProveedorController extends Controller
{
    public function index()
    {
        $model = new ProveedorModel();
        $data['proveedores'] = $model->findAll();
        return view('proveedores/index', $data);
    }

    public function crear()
    {
        return view('proveedores/crear');
    }

    public function guardar()
    {
        $model = new ProveedorModel();
        $model->save([
            'nombre' => $this->request->getPost('nombre'),
            'telefono' => $this->request->getPost('telefono'),
            'direccion' => $this->request->getPost('direccion'),
            'email' => $this->request->getPost('email')
        ]);
        return redirect()->to('/proveedores');
    }

    public function editar($id)
    {
        $model = new ProveedorModel();
        $data['proveedor'] = $model->find($id);
        return view('proveedores/editar', $data);
    }

    public function actualizar($id)
    {
        $model = new ProveedorModel();
        $model->update($id, [
            'nombre' => $this->request->getPost('nombre'),
            'telefono' => $this->request->getPost('telefono'),
            'direccion' => $this->request->getPost('direccion'),
            'email' => $this->request->getPost('email')
        ]);
        return redirect()->to('/proveedores');
    }

    public function eliminar($id)
    {
        $model = new ProveedorModel();
        $model->delete($id);
        return redirect()->to('/proveedores');
    }
}
