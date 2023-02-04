<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asignacionmaterias extends Model
{
    use HasFactory;
    protected $primaryKey='idasignacionmateria';
    protected $fillable=['idasignacionmateria','idmateria','idestudiante'];
}
