<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    use HasFactory;

    protected $fillable = [
        'empresa',
        'nombre',
        'apellido1',
        'apellido2',
        'tipoDocumento',
        'numDocumento',
        'municipio',
        'provincia',
        'pais',
        'estado',
        'telefono',
        'email'
    ];
}
