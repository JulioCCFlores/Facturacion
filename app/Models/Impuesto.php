<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Impuesto extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nombre',
        'Impuesto',
        'Tipo',
        'Factor',
        'Tasa',
    ];
    // public function facturaciones()
    // {
    //     return $this->hasMany(Facturacion::class, 'id_impuestos');
    // }
}
