<?php 

namespace App\Models;
use CodeIgniter\Model;

class ConocimientoModel extends Model
{
    protected $table = 'conocimientos';
    protected $primaryKey = 'id_conocimiento';
    protected $allowedFields = [
        'conocimiento',
        'umbral',
        'img_producto',
        'img_planta',
        'nombre_cientifico',
        'cantidad',
        'frase',
        'descripcion',
        'dosis',
    ];
}