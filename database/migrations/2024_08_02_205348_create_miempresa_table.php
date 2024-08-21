<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMiempresaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('miempresa', function (Blueprint $table) {
            $table->id();
            $table->string('razon_social');
            $table->string('regimen_fiscal_id');
            $table->string('rfc')->unique();
            $table->string('logotipo')->nullable();
            $table->string('archivo_cer')->nullable();
            $table->string('archivo_key')->nullable();
            $table->string('calle');
            $table->string('municipio');
            $table->string('estado');
            $table->string('codigo_postal');
            $table->timestamps();
        
            $table->foreign(['municipio', 'estado'])->references(['municipio', 'estado'])->on('cfdi_400_municipios')->onDelete('cascade');
            $table->foreign('estado')->references('estado')->on('cfdi_400_estados')->onDelete('cascade');
            $table->foreign('regimen_fiscal_id')->references('id')->on('regimenes_fiscales')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('miempresa');
    }
}

