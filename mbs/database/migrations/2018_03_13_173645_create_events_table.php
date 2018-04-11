<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('events')) //check if table exists
        {
            Schema::table('events', function ($table)
            {
                 //$table->string('name1');
            });
        } else
        {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');

            //13/03/2018 proud
            $table->string('ev_name', 100); //ชื่องาน
            $table->string('ev_caption', 255); //รายละเอียดงาน
            $table->date('ev_dateS'); //วันเริ่มงาน
            $table->date('ev_dateF'); //วันสิ้นสุดงาน
            $table->date('ev_dateRS'); //วันเริ่มจองงาน
            $table->date('ev_dateRF'); //วันสิ้นสุดการจองงาน
            $table->integer('document_id'); //FK เอกสาร
            $table->integer('image_id'); //FK ภาพงาน
            $table->integer('plan_id'); //FK ภาพแปลน
            $table->integer('booth_id'); //FK บูธ
            $table->integer('zone_id'); //FK โซน
            $table->string('create_by',50);//สร้างโดยใคร
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
        Schema::dropIfExists('events');
    }

}