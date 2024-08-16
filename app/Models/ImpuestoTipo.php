<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImpuestoTipo extends Model
{
    use HasFactory;
    protected $table = 'impuesto_tipo';
    protected $fillable = ['nombre'];
    

}
