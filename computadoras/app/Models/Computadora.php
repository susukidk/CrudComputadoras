<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computadora extends Model
{
    use HasFactory;
    protected $table = 'computadora'; //sirve para especificar como se llama mi tabla en SQL
}
