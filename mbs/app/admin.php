<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $table = 'admins';
    protected $fillable = [
    	'status', 'name', 'lname','tel','email','username','password','role','is_enable'];
    protected $hidden = [
         '_token',
    ];    
}
