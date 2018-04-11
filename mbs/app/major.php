<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class major extends Model
{
    protected $table = 'majors';
    protected $fillable = [
    	'name'];
    protected $hidden = [
         '_token',
    ]; 
}
