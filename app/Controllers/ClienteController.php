<?php

namespace App\Controllers;
use App\Models\ClienteModel;
use CodeIgniter\Controller;

class ClienteController extends Controller
{
    public function index()
    {
        $model = new ClienteModel();
        $data['clientes'] = $model->findAll();
        return view('clientes/index', $data);
    }

    public function crear()
    {
        return view('clientes/crear');
    }

    public function guardar()
    {
        $model = new ClienteModel();
        $model->save([
            'nombre' => $this->request->getPost('nombre'),
            'email' => $this->request->getPost('email'),
            'telefono' => $this->request->getPost('telefono'),
            'rol' => $this->request->getPost('rol'),
            'departamento' => $this->request->getPost('departamento'),
            'municipio' => $this->request->getPost('municipio')
        ]);
        return redirect()->to('/clientes');
    }

    public function editar($id)
    {
        $model = new ClienteModel();
        $data['cliente'] = $model->find($id);
        return view('clientes/editar', $data);
    }

    public function actualizar($id)
    {
        $model = new ClienteModel();
        $model->update($id, [
            'nombre' => $this->request->getPost('nombre'),
            'email' => $this->request->getPost('email'),
            'telefono' => $this->request->getPost('telefono'),
            'rol' => $this->request->getPost('rol'),
            'departamento' => $this->request->getPost('departamento'),
            'municipio' => $this->request->getPost('municipio')
        ]);
        return redirect()->to('/clientes');
    }

    public function eliminar($id)
    {
        $model = new ClienteModel();
        $model->delete($id);
        return redirect()->to('/clientes');
    }
}
