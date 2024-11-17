<?php

namespace App\Controllers;
use App\Models\ProductoModel;
use App\Models\CategoriaModel;

class Usuario extends BaseController
{
    public function dashboard()
    {
        // Verificar si el usuario es un usuario normal
        if (session()->get('id_rol') != 2) {
            return redirect()->to('/admin'); // Redirige al panel de administrador si no es usuario normal
        }
        return view('usuario/dashboard');
    }

    public function productos(): string
    {        
        $productosmodel = new ProductoModel();
        $categoriasmodel = new CategoriaModel();

        $data = [
            'productos' => $productosmodel->findAll(),
            'categorias' => $categoriasmodel->findAll(),
        ];


        return view('usuario/productos', $data);
    }
}