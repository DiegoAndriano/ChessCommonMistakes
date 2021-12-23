<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorredorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corredors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('franquicia_id')->nullable();
            $table->string('nombre');
            $table->string('email');
            $table->integer('cpi');
            $table->integer('cmcpsi');
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
        Schema::dropIfExists('corredors');
    }
}
