<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class authen extends Model
{
    protected $table = 'authens';
    protected $fillable = [
    	'code', 'exhibitor_id', 'user_id','admin_id','is_enable','create_by','update_by'];
    protected $hidden = [
         '_token',
    ]; 
}
