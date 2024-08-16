<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImpuestoFactor extends Model
{
    use HasFactory;
    protected $table = 'impuesto_factor';
    protected $fillable = ['nombre'];
    
}
