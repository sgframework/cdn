<?php

namespace cdn\Models;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
	
	protected $fillable = array('url', 'code');
	
}