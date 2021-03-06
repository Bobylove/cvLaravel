<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cvinfos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cvinfos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('title');
            $table->string('punchline');
            $table->string('formation');
            $table->string('competence');
            $table->string('experience');
            $table->string('nom');
            $table->string('prenom');
            $table->string('adresse');
            $table->integer('tel');
            $table->string('mail');
            $table->string('loisir');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cvinfos');
    }
}
