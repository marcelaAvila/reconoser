<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $fillable = [
        'cedula',
        'nombre',
        'direccion',
        'ciudad',
        'pais',
        'celular',
        'imagen',
        'latitud',
        'longitud',
        'estadoBT',
        'estadoWF'
    ];
}
