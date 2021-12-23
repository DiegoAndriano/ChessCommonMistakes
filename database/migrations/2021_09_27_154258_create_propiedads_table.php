<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropiedadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propiedads', function (Blueprint $table) {
            $table->id();
            $table->foreignId('estado_id');
            $table->foreignId('tipo_transaccion_id');
            $table->foreignId('corredor_id')->nullable();
            $table->string('contacto_nombre')->nullable();
            $table->string('contacto_telefono')->nullable();
            $table->string('barrio')->nullable();
            $table->string('moneda')->nullable();
            $table->string('ubicacion')->nullable();
            $table->string('fotos')->nullable();
            $table->string('orientacion')->nullable();
            $table->text('descripcion')->nullable();
            $table->integer('precio')->nullable();
            $table->integer('m2')->nullable();
            $table->integer('m2_cubiertos')->nullable();
            $table->integer('ambientes')->nullable();
            $table->integer('baños')->nullable();
            $table->integer('antiguedad')->nullable();
            $table->integer('dormitorios')->nullable();
            $table->integer('pisos')->nullable();
            $table->integer('cochera')->nullable();
            $table->integer('terrazas')->nullable();
            $table->integer('balcones')->nullable();
            $table->integer('comedor')->nullable();
            $table->boolean('admite')->nullable();
            $table->boolean('amoblado')->nullable();
            $table->boolean('apto_profesional')->nullable();
            $table->boolean('apto_credito')->nullable();
            $table->boolean('ofrece_financiamiento')->nullable();
            $table->boolean('admite_mascotas')->nullable();
            $table->boolean('admite_niños')->nullable();
            $table->timestamps();
        });

        Schema::create('propiedad_tipo_propiedad', function (Blueprint $table) {
            $table->id();
            $table->foreignId('propiedad_id');
            $table->foreignId('tipo_propiedad_id');
            $table->timestamps();
        });

        Schema::create('propiedad_servicio', function (Blueprint $table) {
            $table->id();
            $table->foreignId('propiedad_id');
            $table->foreignId('servicio_id');
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
        Schema::dropIfExists('propiedads');
    }
}
