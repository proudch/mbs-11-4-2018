<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMajorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          if (Schema::hasTable('majors')) //check if table exists
        {
            Schema::table('majors', function ($table)
            {
                 //$table->string('name1');
            });
        } else
        {
        Schema::create('majors', function (Blueprint $table) {
            $table->increments('id');

            $table->char('name', 50); //สาขา

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
        Schema::dropIfExists('majors');
    }
}
