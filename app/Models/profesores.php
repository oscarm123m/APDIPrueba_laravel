<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profesores extends Model
{
    use HasFactory;
    protected $primaryKey='idprofesor';
    protected $fillable=['idprofesor','nombrecompleto','documento','celular','direccion'];
}
