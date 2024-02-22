<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class departamentos extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nombre_departamento',
        'puesto',
        'created_at',
        'updated_at'
];
}
