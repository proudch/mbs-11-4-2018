<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          if (Schema::hasTable('zones')) //check if table exists
        {
            Schema::table('zones', function ($table)
            {
                 //$table->string('name1');
            });
        } else
        {
        Schema::create('zones', function (Blueprint $table) {
            $table->increments('id');

            //13/03/2018 proud
            $table->string('name', 100); //ชื่องาน
            $table->integer('booth_id'); //ขนาดบูธ


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
        Schema::dropIfExists('zones');
    }
}
