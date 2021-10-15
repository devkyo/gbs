<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participantes', function (Blueprint $table) {
            $table->id();

            $table->string('nombres')->nullable();
            $table->string('dni')->nullable();
            $table->string('edad')->nullable();
            $table->string('departamento')->nullable();
            $table->string('direccion')->nullable();
            $table->string('distrito')->nullable();
            $table->string('provincia')->nullable();
            $table->string('correo')->nullable();
            $table->string('celular')->nullable();
            $table->string('anolavadora')->nullable();
            $table->string('modelo')->nullable();
            $table->string('foto')->nullable();

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
        Schema::dropIfExists('participantes');
    }
}
