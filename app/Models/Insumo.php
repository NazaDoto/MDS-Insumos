<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Insumo extends Model
{
    protected $fillable = ['id', 'direccion', 'area', 'insumo', 'toner', 'solicitante', 'firma', 'created_at', 'updated_at'];
}
