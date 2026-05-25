<?php

namespace App\Models;
use CodeIgniter\Model;

class Hecho_ConocimientoModel extends Model
{
    protected $table = 'hecho_conocimiento';
    protected $allowedFields = [
        'id_hecho',
        'id_conocimiento',
        'peso',
    ];
}