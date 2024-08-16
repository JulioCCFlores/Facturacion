<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $fillable = [
        'razon_social',
        'nombre_comercial',
        'rfc',
        'calle',
        'numero_exterior',
        'numero_interior',
        'codigo_postal',
        'correo_electronico',
        'estado',
        'municipio',
        'regimen_fiscal_id',
    ];

    public function estado()
    {
        return $this->belongsTo(Cfdi400Estado::class, 'estado', 'estado');
    }

    public function municipio()
    {
        return $this->belongsTo(Cfdi400Municipio::class, 'municipio', 'municipio');
    }

    public function regimenFiscal()
    {
        return $this->belongsTo(RegimenFiscal::class, 'regimen_fiscal_id');
    }
    public function facturaciones()
    {
        return $this->hasMany(Facturacion::class, 'id_empresas');
    }
}
