<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facturacion extends Model
{
    use HasFactory;
    // Especificar la tabla si el nombre del modelo no sigue la convención
    protected $table = 'facturacion';

    // Los campos que se pueden asignar en masa
    protected $fillable = [
        'folio',
        'serie',
        'fecha',
        'forma_pago_id',
        'metodo_pago_id',
        'moneda_id',
        'exportacion_id',
        'uso_cfdi_id',
        'descuento',
        'total',
        'id_miempresa',
        'id_producto',
        'id_empresas',
        'id_impuestos'
    ];

    // Definir las relaciones con otras tablas
    public function miempresa()
    {
        return $this->belongsTo(miempresa::class, 'id_miempresa');
    }

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'id_producto');
    }

    public function empresa()
    {
        return $this->belongsTo(Empresa::class, 'id_empresas');
    }

    public function impuesto()
    {
        return $this->belongsTo(Impuesto::class, 'id_impuestos');
    }

}
