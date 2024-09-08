<?php 
namespace App\Models;

use CodeIgniter\Model;

class Clientes extends Model{
    protected $table      = 'clientes';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'cliente_id';
    protected $allowedFields = ['cliente_id','nombre','apellido','fecha_nacimiento','fecha_suscripcion','correo_electronico','telefono_movil'];
}