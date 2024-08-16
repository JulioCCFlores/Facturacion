<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cfdi_40_claves_unidades', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->text('texto')->nullable();
            $table->text('descripcion')->nullable();
            $table->text('notas')->nullable();
            $table->string('vigencia_desde')->nullable();
            $table->string('vigencia_hasta')->nullable();
            $table->string('simbolo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cfdi_40_claves_unidades');
    }
};
