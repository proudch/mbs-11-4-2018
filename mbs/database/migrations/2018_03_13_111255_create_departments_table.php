<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       if (Schema::hasTable('departments')) //check if table exists
        {
            Schema::table('departments', function ($table)
            {
                 //$table->string('name1');
            });
        } else
        {
        Schema::create('departments', function (Blueprint $table) {
            $table->increments('id');

            $table->char('name', 50); //ตำแหน่ง

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
        Schema::dropIfExists('departments');
    }
}
