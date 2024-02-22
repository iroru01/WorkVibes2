<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class eventos extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nombre_evento',
        'tiempo',
        'fecha',
        'created_at',
        'updated_at',
];
}
