<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       if (Schema::hasTable('authens')) //check if table exists
        {
            Schema::table('authens', function ($table)
            {
                 //$table->string('name1');
            });
        } else
        {
        Schema::create('authens', function (Blueprint $table) {
            $table->increments('id');
            //authens 13/3/2018 proud
            $table->string('code',10);//code
            $table->integer('exhibitor_id'); //FK exhibitor_id
            $table->integer('user_id'); //FK user_id  
            $table->integer('admin_id'); //FK admin_id   
            $table->char('is_enable', 2); //กำหนดสิทธิการเข้าสู่ระบบ
            $table->string('create_by',50);//ใครสร้าง
            $table->string('update_by',50);//ใครupdate           

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
        Schema::dropIfExists('authens');
    }
}
