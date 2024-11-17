<?php

namespace App\Controllers;
use App\Models\DepartamentoModel;

class Home extends BaseController
{
    public function index(): string
    {
        $departamentoModel = new DepartamentoModel();
        $departamentos = $departamentoModel->findAll();

        return view('principal.php', ['departamentos' => $departamentos]);
    }
}
