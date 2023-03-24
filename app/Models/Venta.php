<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    public $timestamps = false;
    //relacion entre venta y sus detalles
    //detalles
    public function detalle(){
        return $this->hasMany(detalle::class);
    }
}
