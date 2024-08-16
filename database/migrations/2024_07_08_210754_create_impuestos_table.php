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
        Schema::create('Timpuestos', function (Blueprint $table) {
            $table->string('nombre')->primary();;
        });
        Schema::create('Impuesto_tipo', function (Blueprint $table) {
            $table->string('nombre')->primary();;
        });

        Schema::create('Impuesto_factor', function (Blueprint $table) {
            $table->string('nombre')->primary();;
        });


        Schema::create('impuestos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('Impuesto');
            $table->string('Tipo');
            $table->string('Factor');
            $table->double('Tasa');
            $table->timestamps();

            $table->foreign('Impuesto')->references('nombre')->on('Timpuestos')->onDelete('cascade');
            $table->foreign('Tipo')->references('nombre')->on('Impuesto_tipo')->onDelete('cascade');
            $table->foreign('Factor')->references('nombre')->on('Impuesto_factor')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('impuestos');
        Schema::dropIfExists('Timpuestos');
        Schema::dropIfExists('Impuesto_tipo');
        Schema::dropIfExists('Impuesto_factor');
    }
};
