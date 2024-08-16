<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class miempresa extends Model
{
    use HasFactory;
    protected $table = 'miempresa';
    protected $fillable = [
        'razon_social',
        'nombre_comercial',
        'rfc',
        'logotipo',
        'archivo_cer',
        'archivo_key',
        'calle',
        'codigo_postal',
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
    public function Facturacion()
    {
        return $this->hasMany(Facturacion::class, 'id_miempresa');
    }

    
}
