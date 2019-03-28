<?php

namespace cdn\Models;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
	protected $table = 'uploads';
	
	protected $fillable = [

		'file_id',
		'file_name',
		'file_path',
		'url',
		
	];
	
	public function user()
	{
		return $this->belongsTo('cdn\Models\User', 'user_id');
	}
	
	public function uploads()
	{
		return $this->hasMany('cdn\Models\User', 'user_id');
	}
	
	

	

	
}