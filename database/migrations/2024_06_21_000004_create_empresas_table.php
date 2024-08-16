<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('empresas', function (Blueprint $table) {
        $table->id();
        $table->string('razon_social');
        $table->string('nombre_comercial')->nullable();
        $table->string('rfc')->unique();
        $table->string('calle');
        $table->string('numero_exterior');
        $table->string('numero_interior')->nullable();
        $table->string('codigo_postal');
        $table->string('correo_electronico')->unique();
        $table->string('estado'); // Tipo string
        $table->string('municipio'); // Tipo string
        $table->string('regimen_fiscal_id'); // Tipo string
        $table->timestamps();

        // Claves foráneas
        $table->foreign('estado')->references('estado')->on('cfdi_400_estados');
        $table->foreign('municipio')->references('municipio')->on('cfdi_400_municipios')->onDelete('cascade');
        $table->foreign('regimen_fiscal_id')->references('id')->on('regimenes_fiscales')->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresas');
    }
};
