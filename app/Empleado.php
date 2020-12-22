<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
   protected $table='empleados';

   protected $fillable = [
       'nombres',
       'apellidos',
       'cedula',
       'celular',
       'correo',
       'cargo',
       'user_id'
   ];
}
