<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
       Schema::create('logos', function(Blueprint $table)
     {
        $table->increments('id');
        $table->timestamps();

        $table->string('file');
        $table->string('name');
        $table->text('description');

     });
     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::dropIfExists('logos');
     }
}