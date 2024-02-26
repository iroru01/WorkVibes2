<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class evento extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_estado',
        'id_usuario',
        'id_actividad',
        'franja_horaria',
        'fecha',
    ];

    //esto es para las relaciones entre las tablas
    public function estado()
    {
        return $this->belongsTo(Estado::class, 'id_estado');
    }

    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }

    public function actividad()
    {
        return $this->belongsTo(Actividad::class, 'id_actividad');
    }
}
