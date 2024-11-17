<?php

namespace App\Models;
use CodeIgniter\Model;

class DepartamentoModel extends Model
{
    protected $table = 'departamentos';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre'];
}
