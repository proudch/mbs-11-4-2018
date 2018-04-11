<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class eventImage extends Model
{
    protected $table = 'images';
    protected $fillable = [
    	'name', 'lname', 'size', 'type','path','description','extention'];
    protected $hidden = [
         '_token',
    ];
}
