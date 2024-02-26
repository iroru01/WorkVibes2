<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class actividad extends Model
{
    use HasFactory; 
    //o este modelo también podría quedar vacío
    //Laravel manejará automáticamente la columna id como la clave primaria y la columna nombre estará disponible para operaciones CRUD básicas
    protected $fillable = [
        'nombre',
    ];
}
