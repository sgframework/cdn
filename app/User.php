<?php

namespace cdn;

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
        'name', 'email', 'idnumber', 'password', 'phonenumber', 'photo',
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
        return $this->getUser() ?: $this->user;
    }


}