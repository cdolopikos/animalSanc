<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdoptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adoptions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('animalId');
            $table->string('animalName');
            $table->string('userId');
            $table->enum('Outcome', ['Approved', 'Pending', 'Rejected'])->default('Pending');
            $table->timestamps();

        });
        Schema::table('adoptions', function($table) {
          $table->foreign('animalId')->references('id')->on('animals');
          $table->foreign('userId')->references('id')->on('users');});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adoptions');
    }
}
