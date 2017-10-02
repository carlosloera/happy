<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserHDsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_h_ds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username',100);
            $table->string('password',100);
            $table->string('remember_token',100);
            $table->integer('id_restaurante')->length(11)->unsigned();
            $table->integer('id_restaurante2')->length(11)->unsigned();
            $table->string('nombre',150);
            $table->string('apellidoM',150);
            $table->string('apellidoP',150);
            $table->string('correo',100);
            $table->date('fecha_nacimiento');
            $table->enum('sexo',['Hombre','Mujer']);
            $table->string('direccion',100);
            $table->string('codigo_postal',20);
            $table->integer('id_nivel2')->length(10)->unsigned();
            $table->string('celular',100);
            $table->string('motocicleta',50);
            $table->string('anio_moto',4);
            $table->date('fecha_reparacion');
            $table->integer('ife')->length(1)->unsigned();
            $table->integer('licencia')->length(1)->unsigned();
            $table->integer('examen_medico')->length(4)->unsigned();
            $table->string('imagen',200);
            $table->enum('estatus_u',['online','offline']);
            $table->string('reg_id',255);
            $table->enum('estatus', ['Aceptado','Rechazado']);
            $table->integer('niveles_id')->length(11)->unsigned();
            $table->integer('envios_id')->length(10)->unsigned();
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
        Schema::dropIfExists('user_h_ds');
    }
}
