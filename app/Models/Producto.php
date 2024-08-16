<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table = 'cfdi_40_productos';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'clave_producto_servicio',
        'descripcion',
        'clave_unidad',
        'precio',
        'unidad',
    ];
    public function ClaveUnidad()
    {
        return $this->belongsTo(ClaveUnidad::class, 'clave_unidad');
    }
    public function ClaveProducto()
    {
        return $this->belongsTo(ClaveProducto::class, 'clave_producto_servicio');
    }
    public function facturaciones()
    {
        return $this->hasMany(Facturacion::class, 'id_producto');
    }
    
}
