<?php

namespace App\Models;
use CodeIgniter\Model;

class ProveedorModel extends Model
{
    protected $table = 'proveedores';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre', 'telefono', 'direccion', 'email'];
}
