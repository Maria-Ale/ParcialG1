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
        Schema::create('Articulo', function (Blueprint $table) {
            $table->string('referencia',5);
            $table->string('nombre',100);
            $table->text('decripcion');
            $table->string('color',100);
            $table->float('precioUnitario');
            $table->text('observacion',5);
            $table->string('foto',10);
            $table->string('marca',5);
            $table->foreign('marca')->references('idMarca')->on('Marca');
            $table->primary('referencia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Articulo');
    }
};
