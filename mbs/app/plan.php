<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class plan extends Model
{
     protected $table = 'plans';
    protected $fillable = [
    	'name', 'lname', 'size', 'type','path','description','extention'];
    protected $hidden = [
         '_token',
    ];
}
