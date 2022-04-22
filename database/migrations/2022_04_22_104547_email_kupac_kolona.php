<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EmailKupacKolona extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kupacs', function (Blueprint $table) {
            $table->after('broj_telefona', function ($table) {
                $table->string('email');
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kupacs', function (Blueprint $table) {
            $table->dropColumn('email');
        });
    }
}
