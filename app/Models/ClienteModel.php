<?php

namespace App\Models;
use CodeIgniter\Model;

class ClienteModel extends Model
{
    protected $table = 'clientes';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre', 'email', 'telefono', 'password', 'id_rol', 'id_departamento', 'id_municipio'];

    // Verificar credenciales
    public function verificarCredenciales($email, $password)
    {
        $cliente = $this->where('email', $email)->first();

        if ($cliente && password_verify($password, $cliente['password'])) {
            return $cliente; // Devuelve los datos del cliente
        }

        return false; // Credenciales incorrectas
    }
}
