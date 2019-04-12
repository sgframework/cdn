<?php

namespace cdn;

use Root;
use Order;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'idnumber', 'password', 'phonenumber', 'photo'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function user()
    {
    	return $this->idnumber;
    }


    public function idnumber()
    {
        return $this->idnumber;
    }

// Orders

    /* MTO - belongTo */

    public function ordersOfMine()
    {
        return $this->belongsTo('cdn\Models\Order', 'staffid');
    }

    



    /* OTM  - hasMany*/



    public function orders()  {
    	return $this->hasMany('cdn\Models\Order', 'staffid');
    
    }

    public function orderCount()
    {
        return $this->user()->orders();
    }
    public function urgentOrders() 
    {
    	return $this->user()->hasMany('cdn\Models\Order', 'urgent')->wherePivot('urgent', on)->get();
    }
    
    public function uploads() 
    {
    	return $this->hasMany('cdn\Models\Upload', 'idnumber');
    }

    /* MTM - belongsToMany */



    public function orderId()
    {
        return $this->belongsToMany('cdn\Models\Order', 'orders', 'orderid', 'ponumber', 'slug', 'staffid');
    }
    
     public function orderOf()
    {
    	return $this->belongsToMany('cdn\User', 'orders', 'ordernumber', 'idnumber');
    }
    public function ordersByUser()  {
    	return $this->belongsTo('cdn\Models\Order', 'ordernumber');
    
    }
    

    public function pendingOrders()
    {
    	return $this->friendsOfMine()->wherePivot('status', false)->get();
    }


    public function addOrder(User $user)
    {
    	$this->orderOf()->attach($user->idnumber);
    }







    // Name

    public function name()
    {
        if ($this->name && $this->email) {
            return "{$this->name} {$this->email}";
        }
        
        if ($this->name) {
            return $this->name;
        }
        return null;
    }
    public function getName()
    {
        if ($this->name && $this->email) {
            return "{$this->name} {$this->email}";
        }
        
        if ($this->name) {
            return $this->name;
        }
        return null;
    }

    public function getNameOrUsername()
    {
        return $this->getUser() ?: $this->name;
    }
    public function fileToUpload()
    {
    	return $this->avatar();
    }
    
    public function getUser()
    {
    	return $this->name;
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
    
    public function getNameOrEmail()
    {
      	return $this->name ?: $this->email;
    }
    
    public function getAvatarUrl()
    {
    	return "{{ asset('images/uploads/avatars') }}/{{ Auth::user->photo }}";
    }
    
        public function getAvatar()
    {
    	return $this->photo();
    }
    
    


    

    


}