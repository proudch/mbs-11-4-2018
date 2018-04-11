<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('event_images')) //check if table exists
        {
            Schema::table('event_images', function ($table)
            {
                 //$table->string('name1');
            });
        } else
        {
        Schema::create('event_images', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name', 100); //ชื่องาน
            $table->string('file', 100); //ชื่องาน
            $table->string('description', 100); //ชื่องาน

            $table->timestamps();
        });
    }
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_images');
    }
}
