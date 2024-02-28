<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Emocion;

class Evento extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_evento',
        //'tiempo',
        'emocion', 
        'fecha',
    ];
    
    protected $table = 'evento';

    public function emocion()
    {
        return $this->belongsTo(Emocion::class);
    }
}
