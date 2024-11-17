<?php

namespace App\Controllers;
use App\Models\DepartamentoModel;
use App\Models\ProductoModel;
use App\Models\CategoriaModel;

class Home extends BaseController
{
    public function index(): string
    {
        $departamentoModel = new DepartamentoModel();
        $departamentos = $departamentoModel->findAll();

        return view('principal.php', ['departamentos' => $departamentos]);
    }

    public function productos(): string
    {        
        $productosmodel = new ProductoModel();
        $categoriasmodel = new CategoriaModel();
        $departamentomodel = new DepartamentoModel();

        $data = [
            'productos' => $productosmodel->findAll(),
            'categorias' => $categoriasmodel->findAll(),
            'departamentos' => $departamentomodel->findAll(),
        ];

        return view('productosInicio',$data);
    }
}
