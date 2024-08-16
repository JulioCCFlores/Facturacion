<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClaveProducto extends Model
{
    use HasFactory;
    protected $table = 'cfdi_40_productos_servicios';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'id',
        'texto',
    ];
    public function productos()
    {
        return $this->hasMany(Producto::class, 'clave_producto_servicio');
    }

}
