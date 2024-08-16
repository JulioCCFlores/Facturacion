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
        Schema::create('facturacion', function (Blueprint $table) {
            $table->id();

            // Campos de la tabla 'facturacion'
            $table->string('folio');
            $table->string('serie');
            $table->date('fecha')->nullable();
            $table->string('forma_pago_id'); // Relación con formas_pago
            $table->string('metodo_pago_id'); // Relación con metodos_pago
            $table->string('moneda_id'); // Relación con monedas
            $table->string('exportacion_id'); // Relación con exportaciones
            $table->string('uso_cfdi_id'); // Relación con usos_cfdi
            $table->string('descuento'); 
            $table->string('total'); 

            // Campos de la tabla 'miempresa'
            $table->unsignedBigInteger('id_miempresa');
            // // Campos de la tabla 'cfdi_40_productos'
            $table->unsignedBigInteger('id_producto');
            // // Campos de la tabla 'empresas'
            $table->unsignedBigInteger('id_empresas');
            // // Campos de la tabla 'impuestos'
            $table->unsignedBigInteger('id_impuestos');
           
            
            // $table->timestamps();

            // Claves foráneas
             $table->foreign('id_miempresa')->references('id')->on('miempresa');
             $table->foreign('id_producto')->references('id')->on('cfdi_40_productos');
             $table->foreign('id_empresas')->references('id')->on('empresas');
             $table->foreign('id_impuestos')->references('id')->on('impuestos');

           
            

           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facturacion');
    }
};
