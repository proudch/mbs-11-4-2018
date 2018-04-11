<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       if (Schema::hasTable('user_datas')) //check if table exists
        {
            Schema::table('user_datas', function ($table)
            {
                 //$table->string('name1');
            });
        } else
        {
        Schema::create('user_datas', function (Blueprint $table) {
            $table->increments('id');

            //user_datas 13/3/2018 proud
           $table->char('status', 50); //สถานะ
            $table->char('name', 50); //ชื่อ
            $table->char('lname', 50); //สกุล
            $table->integer('tel'); //เบอร์โทรศัพท์
            $table->string('email', 50); //Email
            $table->string('username', 50); //Username
            $table->string('password', 50); //Password
            $table->integer('major_id'); //FK สาขา
            $table->integer('studentID'); //รหัสนักศึกษา
            $table->integer('lv'); //ชั้นปี
            $table->integer('dep_id'); //FK ฝ่าย
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
        Schema::dropIfExists('user_datas');
    }
}
