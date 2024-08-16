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
    Schema::create('cfdi_400_estados', function (Blueprint $table) {
        $table->string('estado')->primary();
    });

    Schema::create('cfdi_400_municipios', function (Blueprint $table) {
        $table->string('municipio');
        $table->string('estado');
        $table->primary(['municipio', 'estado']);
        $table->foreign('estado')->references('estado')->on('cfdi_400_estados')->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cfdi_400_municipios');
        Schema::dropIfExists('cfdi_400_estados');
    }
};
