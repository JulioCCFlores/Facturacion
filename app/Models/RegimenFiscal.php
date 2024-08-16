<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegimenFiscal extends Model
{
    use HasFactory;

    protected $table = 'regimenes_fiscales';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['id', 'descripcion'];
    public function empresas()
    {
        return $this->hasMany(Empresa::class, 'regimen_fiscal_id');
    }
    public function miempresa()
    {
        return $this->hasMany(miempresa::class, 'regimen_fiscal_id');
    }
}
