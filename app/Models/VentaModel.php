<?php

namespace App\Models;
use CodeIgniter\Model;

class VentaModel extends Model
{
    protected $table = 'ventas';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_cliente', 'fecha', 'total'];
}
