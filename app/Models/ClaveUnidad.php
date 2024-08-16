<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClaveUnidad extends Model
{
    use HasFactory;
    protected $table = 'cfdi_40_claves_unidades';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'id',
        'texto',
    ];
    public function productos()
    {
        return $this->hasMany(Producto::class, 'clave_unidad');
    }
}
