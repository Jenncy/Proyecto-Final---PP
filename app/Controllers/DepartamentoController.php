<?php

namespace App\Controllers;

use App\Models\DepartamentoModel;

class DepartamentoController extends BaseController
{
    public function index()
    {
        // Obtener los departamentos de la base de datos
        $departamentoModel = new DepartamentoModel();
        $data['departamentos'] = $departamentoModel->findAll();

        // Pasar los departamentos a la vista correctamente
        return view('/', $data);
    }
}
