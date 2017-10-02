<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeliversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_usuarioHD')->length(10)->unsigned();
            $table->string('foto',255);
            $table->string('descripcion',255);
            $table->enum('estatus',['Recogiendo Pedido', 'En camino', 'Entregado']);
            $table->string('coordenadas_actuales',255);
            $table->integer('id_pedido')->length(11)->unsigned();
            $table->integer('id_restaurante')->length(11)->unsigned();
            $table->string('coordenadas_accidente',100);
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
        Schema::dropIfExists('delivers');
    }
}
