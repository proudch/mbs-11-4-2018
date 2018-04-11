<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class zone extends Model
{
    protected $table = 'zones';
    protected $fillable = [
    	'name', 'remark'];
    protected $hidden = [
         '_token',
    ];
}
