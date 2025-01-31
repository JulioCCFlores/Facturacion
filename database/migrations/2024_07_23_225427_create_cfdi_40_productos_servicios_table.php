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
        Schema::create('cfdi_40_productos_servicios', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('texto')->nullable();
            $table->string('iva_trasladado')->nullable();
            $table->string('ieps_trasladado')->nullable();
            $table->text('complemento')->nullable();
            $table->string('vigencia_desde')->nullable();
            $table->string('vigencia_hasta')->nullable();
            $table->text('estimulo_frontera')->nullable();
            $table->text('similares')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cfdi_40_productos_servicios');
    }
};
