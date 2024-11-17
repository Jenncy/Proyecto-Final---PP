<?php

namespace App\Controllers;

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
}
