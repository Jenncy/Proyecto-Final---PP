<?php

namespace App\Controllers;

use App\Models\ClienteModel;

class Login extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function autenticar()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $model = new ClienteModel();
        $cliente = $model->verificarCredenciales($email, $password);

        if ($cliente) {
            // Iniciar sesión
            session()->set('id', $cliente['id']);
            session()->set('nombre', $cliente['nombre']);
            session()->set('id_rol', $cliente['id_rol']);

            // Redirigir según el rol
            if ($cliente['id_rol'] == 1) { // Rol de administrador
                return redirect()->to('/admin');
            } else { // Rol de usuario normal
                return redirect()->to('/usuario');
            }
        } else {
            return redirect()->back()->with('error', 'Credenciales incorrectas.');
        }
    }

    public function logout()
    {
        // Eliminar todos los datos de la sesión
        session()->destroy();

        // Redirigir al usuario a la página de inicio de sesión o a la página principal
        return redirect()->to('/');
    }
}
