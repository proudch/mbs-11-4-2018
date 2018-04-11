<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    protected $table = 'events';
    protected $fillable = [
    	'ev_name', 'ev_caption','ev_dateS','ev_dateF','ev_dateRS','ev_dateRF','document_id','image_id','plan_id','booth_id','zone_id','create_by','update_by'];
    protected $hidden = [
         '_token',
    ]; 
}
