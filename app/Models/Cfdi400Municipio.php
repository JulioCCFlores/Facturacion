<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cfdi400Municipio extends Model
{
    use HasFactory;

    protected $table = 'cfdi_400_municipios';
    protected $primaryKey = ['municipio', 'estado'];
    public $incrementing = false;
    protected $keyType = ['string', 'string'];
    protected $fillable = ['municipio', 'estado'];

    public function estado()
    {
        return $this->belongsTo(Cfdi400Estado::class, 'estado', 'estado');
    }
}
