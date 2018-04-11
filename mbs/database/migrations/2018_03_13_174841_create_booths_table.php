<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoothsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          if (Schema::hasTable('booths')) //check if table exists
        {
            Schema::table('booths', function ($table)
            {
                 //$table->string('name1');
            });
        } else
        {
        Schema::create('booths', function (Blueprint $table) {
            $table->increments('id');

            //13/03/2018 proud
            $table->string('name', 100); //ชื่องาน
            $table->string('size', 10); //ขนาดบูธ
            $table->string('price', 10); //ราคา

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
        Schema::dropIfExists('booths');
    }
}
