<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_data extends Model
{
    protected $table = 'user_datas';
    protected $fillable = [
    	'status','name', 'lname','tel','email','username','password','major_id','studentID','lv','dep_id','role','is_enable'];
    protected $hidden = [
         '_token',
    ]; 
}
