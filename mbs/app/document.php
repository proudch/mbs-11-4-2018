<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class document extends Model
{
     protected $table = 'documents';
    protected $fillable = [
        	'name', 'lname', 'size', 'type','path','description','extention'];
    protected $hidden = [
         '_token',
    ];
}
