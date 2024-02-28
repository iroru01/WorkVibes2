<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
<<<<<<< HEAD
=======
        'email',
>>>>>>> 6da1508d7cea541e7181fd0473189c415d28feac
        'nombre_user',
        'dni',
        'nombre',
        'apellidos',
        'telefono',
        'direccion',
<<<<<<< HEAD
        'password',
        'puesto',
        'incorporacion',
        'id_departamento',
        'id_evento',
=======
        'contraseña',
        'puesto',
        'incorporacion',
>>>>>>> 6da1508d7cea541e7181fd0473189c415d28feac
        'estado',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];


    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'nombre_user_verified_at' => 'datetime',
    ];
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'usuarios'; // Reemplaza 'usuarios' por el nombre real de tu tabla de usuarios

    // Define relaciones con otras tablas
    public function departamento()
    {
        return $this->belongsTo(Departamento::class, 'id_departamento');
    }

    public function evento()
    {
        return $this->belongsTo(Evento::class, 'id_evento');
    }

    // Indicar que el campo 'nombre_user' se utilizará como el campo de nombre de usuario para autenticación
    public function username()
    {
        return 'nombre_user';
    }
}

