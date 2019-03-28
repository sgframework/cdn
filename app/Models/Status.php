<?php

namespace cdn\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
	protected $table = 'statuses';
	
	protected $fillable = [
		'title',
		'body',
		'slug',
	];
	
	public function user()
	{
		return $this->belongsTo('cdn\Models\User', 'user_id');
	}
	
	public function statusId(User $user)
	{
    		return $this->hasMany('cdn\Models\Status', 'user_id');
   	}
   	
   		public function getStatusById(User $user)
	{
    		return $this->hasMany('cdn\Models\Status', 'user_id');
   	}
   	
   	
   	    public function friendRequests()
	    {
	    	return $this->friendsOfMine()->wherePivot('accepted', false)->get();
	    }

	
	public function scopeNotReply($query)
	{
		return $query->whereNull('parent_id');
	}
	
		public function replies()
	{
		return $this->hasMany('cdn\Models\Status', 'parent_id');
	}
	
		public function likes()
	{
		return $this->morphMany('cdn\Models\Like', 'likeable');
	}
	
	    public function  uploads() 
	{
    		return $this->hasMany('cdn\Models\Upload', 'user_id');
   	}

	
}