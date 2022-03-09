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
            $table->integer('numeroContrato')->nullable(true);
            $table->integer('numeroFactura')->nullable(true);
            $table->string('referenciaPago')->nullable(true);
            $table->date('fechaPago')->nullable(true);
            $table->date('fechaVencimiento')->nullable(true);
            $table->date('fechaPagoReal')->nullable(true);
            $table->string('pdf')->nullable(true);
            $table->double('energia')->nullable(true);
            $table->double('acueducto')->nullable(true);
            $table->double('gas')->nullable(true);
            $table->double('otros')->nullable(true);
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
