<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('admins')) //check if table exists
        {
            Schema::table('admins', function ($table)
            {
                 //$table->string('name1');
            });
        } else
        {
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('id');
           
            //admins 13/3/2018 proud
            $table->char('status', 50); //สถานะ
            $table->char('name', 50); //ชื่อ
            $table->char('lname', 50); //สกุล
            $table->integer('tel'); //เบอร์โทรศัพท์
            $table->string('email', 50); //Email
            $table->string('username', 50); //Username
            $table->string('password', 50); //Password
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
        Schema::dropIfExists('admins');
    }
}
