<?php

namespace App\Controllers;
use App\Models\DetalleVentaModel;
use CodeIgniter\Controller;

class DetalleVentaController extends Controller
{
    public function index($idVenta)
    {
        $model = new DetalleVentaModel();
        $data['detalleventa'] = $model->where('id_venta', $idVenta)->findAll();
        return view('detalleventa/index', $data);
    }
}
