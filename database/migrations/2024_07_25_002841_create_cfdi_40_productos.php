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
        Schema::create('cfdi_40_productos', function (Blueprint $table) {
            $table->id();
            $table->string('clave_producto_servicio')->nullable();
            $table->text('descripcion')->nullable();
            $table->string('clave_unidad')->nullable();  // Cambiar a string para que coincida con el tipo de dato de 'id' en la otra tabla
            $table->float('precio')->nullable();
            $table->integer('unidad')->nullable();
        
            // Claves foráneas
            $table->foreign('clave_unidad')->references('id')->on('cfdi_40_claves_unidades')->onDelete('cascade');
            $table->foreign('clave_producto_servicio')->references('id')->on('cfdi_40_productos_servicios')->onDelete('cascade');
        });
        
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cfdi_40_productos');
    }
};
