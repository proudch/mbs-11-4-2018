<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class booth extends Model
{
   protected $table = 'booths';
    protected $fillable = [
    	'name','zoneid' ,'size', 'price'];
    protected $hidden = [
         '_token',
    ];
}
