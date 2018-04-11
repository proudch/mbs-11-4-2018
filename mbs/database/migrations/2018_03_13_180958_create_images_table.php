<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          if (Schema::hasTable('images')) //check if table exists
        {
            Schema::table('images', function ($table)
            {
                 //$table->string('name1');
            });
        } else
        {
        Schema::create('images', function (Blueprint $table) {
            $table->increments('id');

            //13/03/2018 proud
            $table->string('name', 100); //ชื่องาน
            $table->string('lname', 100); //ชื่องาน
            $table->string('size', 10); //ชื่องาน
            $table->string('type', 100); //ชื่องาน
            $table->string('path', 100); //ชื่องาน
            $table->string('description', 100); //ชื่องาน
            $table->string('extention', 255); //ชื่องาน


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
        Schema::dropIfExists('images');
    }
}
