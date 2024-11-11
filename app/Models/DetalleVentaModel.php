<?php

namespace App\Models;
use CodeIgniter\Model;

class DetalleVentaModel extends Model
{
    protected $table = 'detalleventa';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_venta', 'id_producto', 'cantidad', 'precio_unitario'];
}
