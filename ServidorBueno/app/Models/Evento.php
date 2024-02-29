<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    protected $fillable = [
        'descripcion',
        'emocion',
        'dia_emocion',
        'id_emocion',
    ];
    
    protected $table = 'evento';
}
