<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class department extends Model
{
    protected $table = 'departments';
    protected $fillable = [
    	'name'];
    protected $hidden = [
         '_token',
    ]; 
}
