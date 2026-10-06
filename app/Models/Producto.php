<?php

namespace App\Models;
use MongoDB\Laravel\Eloquent\Model;
//use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    // Define la colección (equivalente a la tabla en SQL)
    protected $collection = 'productos';

    // Campos que permites llenar masivamente
    protected $fillable = ['nombre', 'precio', 'categoria', 'detalles'];
}
