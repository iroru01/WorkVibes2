<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_user',
        'dni',
        'nombre',
        'apellidos',
        'telefono',
        'direccion',
        'contraseña',
        'puesto',
        'incorporacion',
        'id_departamento',
        'id_evento',
        'estado',
    ];

    protected $hidden = [
        'contraseña',
    ];
//Para las relaciones con las otras tablas
    public function departamento()
    {
        return $this->belongsTo(Departamento::class, 'id_departamento');
    }

    public function evento()
    {
        return $this->belongsTo(Evento::class, 'id_evento');
    }
}
