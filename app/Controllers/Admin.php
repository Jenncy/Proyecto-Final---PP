<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function dashboard()
    {
        // Verificar si el usuario es administrador
        if (session()->get('id_rol') != 1) {
            return redirect()->to('/usuario'); // Redirige al panel de usuario si no es administrador
        }
        return view('admin/dashboard');
    }
}
