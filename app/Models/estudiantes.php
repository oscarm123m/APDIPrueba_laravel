<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class estudiantes extends Model
{
    use HasFactory;
    protected $primaryKey='idestudiante';
    protected $fillable=['idestudiante','nombrecompleto','documento','celular'];
}
