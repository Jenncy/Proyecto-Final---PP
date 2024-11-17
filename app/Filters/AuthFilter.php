<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Verificar si el usuario está autenticado
        if (!session()->get('id')) {
            return redirect()->to('/login');
        }

        // Verificar si hay argumentos y si coinciden con el rol del usuario
        if ($arguments && is_array($arguments) && isset($arguments[0]) && session()->get('id_rol') != $arguments[0]) {
            return redirect()->to('/login'); // Redirige si no tiene el rol
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // No realizar ninguna acción después
    }
}

