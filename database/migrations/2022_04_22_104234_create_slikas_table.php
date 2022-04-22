<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlikasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slikas', function (Blueprint $table) {
            $table->id();
            $table->string('naziv');
            $table->integer('godina');
            $table->double('cena');
            $table->foreignId('slikar_id')->constrained('slikars');
            $table->foreignId('kupac_id')->constrained('kupacs');
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
        Schema::dropIfExists('slikas');
    }
}
