<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiciosPublicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios_publicos', function (Blueprint $table) {
            $table->id();
            $table->integer('numeroContratos');
            $table->integer('numeroFactura');
            $table->string('referenciaPago');
            $table->date('fechaPago');
            $table->date('fechaVencimiento');
            $table->date('fechaPagoReal');
            $table->double('energia');
            $table->double('acueducto');
            $table->double('gas');
            $table->double('otros');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicios_publicos');
    }
}
