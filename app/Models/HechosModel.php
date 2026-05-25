<?php 

namespace App\Models;
use CodeIgniter\Model;

class HechosModel extends Model 
{
    protected $table = 'hechos';
    protected $primaryKey = 'id_hecho';
    protected $allowedFields = ['hecho'];
}