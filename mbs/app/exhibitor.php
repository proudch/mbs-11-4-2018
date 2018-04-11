<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class exhibitor extends Model
{
    protected $table = 'exhibitors';
    protected $fillable = [
    	'name', 'lname','tel','email','username','password','company','address','role','is_enable'];
    protected $hidden = [
         '_token',
    ]; 
}
