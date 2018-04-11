<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExhibitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       if (Schema::hasTable('exhibitors')) //check if table exists
        {
            Schema::table('exhibitors', function ($table)
            {
                 //$table->string('name1');
            });
        } else
        {
        Schema::create('exhibitors', function (Blueprint $table) {
            $table->increments('id');

            //exhibitors 13/3/2018 proud
          
            $table->char('name', 50); //ชื่อ
            $table->char('lname', 50); //สกุล
            $table->integer('tel'); //เบอร์โทรศัพท์
            $table->string('email', 50); //Email
            $table->string('username', 50); //Username
            $table->string('password', 50); //Password
            $table->string('company', 100); //บริษัท
            $table->string('address', 100); //ที่อยู่บริษัท
            $table->char('role', 50); //สถานะ
            $table->char('is_enable', 2); //กำหนดสิทธิการเข้าสู่ระบบ

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
        Schema::dropIfExists('exhibitors');
    }
}
