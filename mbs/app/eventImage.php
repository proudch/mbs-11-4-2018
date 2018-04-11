<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class eventImage extends Model
{
   protected $table = 'event_images';
    protected $fillable = [
    	'name', 'file', 'description'];
    protected $hidden = [
         '_token',
    ];
}
