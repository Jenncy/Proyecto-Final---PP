<?php

namespace App\Controllers;
use App\Models\CategoriaModel;
use CodeIgniter\Controller;

class CategoriaController extends Controller
{
    public function index()
    {
        $model = new CategoriaModel();
        $data['categorias'] = $model->findAll();
        return view('categorias/index', $data);
    }

    public function crear()
    {
        return view('categorias/crear');
    }

    public function guardar()
    {
        $model = new CategoriaModel();
        $model->save([
            'nombre' => $this->request->getPost('nombre'),
            'descripcion' => $this->request->getPost('descripcion')
        ]);
        return redirect()->to('/categorias');
    }

    public function editar($id)
    {
        $model = new CategoriaModel();
        $data['categoria'] = $model->find($id);
        return view('categorias/editar', $data);
    }

    public function actualizar($id)
    {
        $model = new CategoriaModel();
        $model->update($id, [
            'nombre' => $this->request->getPost('nombre'),
            'descripcion' => $this->request->getPost('descripcion')
        ]);
        return redirect()->to('/categorias');
    }

    public function eliminar($id)
    {
        $model = new CategoriaModel();
        $model->delete($id);
        return redirect()->to('/categorias');
    }
}
