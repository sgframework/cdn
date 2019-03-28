<?php

namespace cdn\Models;

use cdn\Models\Status;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class User extends Model implements AuthenticatableContract                                    
{
    use Authenticatable;

    protected $table = 'users';

    protected $fillable = [
    	'username',
    	'email',
    	'password',
    	'first_name',
    	'last_name',
    	'ipaddr',
    	'location',
    	'avatar',
    ];

    protected $hidden = [
    	'password',
    	'ipaddr',
    	'remember_token',
    ];
    
    public function getName()
    {
    	if ($this->first_name && $this->last_name) {
    		return "{$this->first_name} {$this->last_name}";
    	}
    	
    	if ($this->first_name) {
    		return $this->first_name;
    	}
    	return null;
    }
    
    public function getNameOrUsername()
    {
    	return $this->getUser() ?: $this->username;
    }
    
    
        public function fileToUpload()
    {
    	return $this->avatar();
    }
    
    public function getUser()
    {
    	return $this->username;
    }
           
            public function getUserOrUsername()
    {
    	return $this->getUser();
    }
    
       public function getEmail()
    {
    	return $this->email;
    }
    
        public function getEmailOrEmailAddress()
    {
    	return $this->getEmail() ?: $this->email;
    }
    
    public function getFirstNameOrUsername()
    {
      	return $this->first_name ?: $this->username;
    }
    
    public function getAvatarUrl()
    {
    	return "https://secure.gravatar.com/avatar/{{ md5( strtolower( trim(getEmailOrEmailAddress()))) }}?s=40";
    }
    
        public function getAvatar()
    {
    	return $this->avatar();
    }
    
    
    public function statuses()  {
    	return $this->hasMany('cdn\Models\Status', 'user_id');
    
    }
    
        public function  uploads() {
    	return $this->hasMany('cdn\Models\Upload', 'user_id');
    }
    
    public function  likes() {
    	return $this->hasMany('cdn\Models\Like', 'user_id');
    }
    
    
    public function friendsOfMine()
    {
    	return $this->belongsToMany('cdn\Models\User', 'friends', 'user_id', 'friend_id');
    }
    
     public function friendOf()
    {
    	return $this->belongsToMany('cdn\Models\User', 'friends', 'friend_id', 'user_id');
    }
    
        public function friends()
    {
    	return $this->friendsOfMine()->wherePivot('accepted', true)->get()
    	->merge ($this->friendOf()->wherePivot('accepted', true)->get());
    }
    
         public function friendRequests()
    {
    	return $this->friendsOfMine()->wherePivot('accepted', false)->get();
    }
    
         public function friendRequestsPending()
    {
    	return $this->friendOf()->wherePivot('accepted', false)->get();
    }
    
          public function hasFriendRequestsPending(User $user)
    {
    	return (bool) $this->friendRequestsPending()->where('id', $user->id)->count();
    }
    
    
          public function hasFriendRequestsReceived(User $user)
    {
    	return (bool) $this->friendRequests()->where('id', $user->id)->count();
    }
    
    
        public function addFriend(User $user)
    {
    	$this->friendOf()->attach($user->id);
    }
    
        public function deleteFriend(User $user)
    {
    	$this->friendOf()->detach($user->id);
    	$this->friendsOfMine()->detach($user->id);
    }
    
              public function acceptFriendRequest(User $user)
    {
    	$this->friendRequests()->where('id', $user->id)->first()->pivot->update([
    	
    	'accepted' => true,
    	]);
    }
    
            public function isFriendsWith(User $user)
    {
    	return (bool) $this->friends()->where('id', $user->id)->count();
    }
        
            public function hasLikedStatus(Status $status)
    {
    	return $status->likes->where('user_id', $this->id)->count();
    }
    

    
    
    
    
    
    
}
