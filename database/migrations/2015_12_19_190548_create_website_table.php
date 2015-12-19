<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebsiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('websites', function (Blueprint $table) {

      $table->increments('id');
      $table->timestamps();

      $table->string('name');
      $table->string('category');
      $table->string('description');
      $table->string('site_url');
      $table->string('tiny_url');

  });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('websites');
    }
}
