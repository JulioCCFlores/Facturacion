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
            $table->string('logotipo')->nullable(); // URL or path to the image
            $table->string('archivo_cer')->nullable(); // URL or path to the .cer file
            $table->string('archivo_key')->nullable(); // URL or path to the .key file
            $table->string('calle');
            $table->string('municipio');
            $table->string('estado');
            $table->string('codigo_postal');
            $table->timestamps();
     
        $table->foreign('estado')->references('estado')->on('cfdi_400_estados');
        $table->foreign('municipio')->references('municipio')->on('cfdi_400_municipios')->onDelete('cascade');
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

