<?php

namespace cdn\Models;

use Illuminate\Database\Eloquent\Model;

class Root extends Model
{
    protected $table = 'orderitems';
    protected $fillable = [
    	'orderid',
    	'ordernumber',
    	'staffname',
    	'staffid',
    	'ponumber',
    	'branchnumber',
    	'branchname',
        'urgent',
        'slug',
        'status',
        'totalqty',
        'totalprice',
        'created_at',
        'updated_at'
    ];   
/* MTM - belongsToMany */


    public function user(User $idnumber)
    {
        return $this->idnumber;
    }
    public function users()
    {
        return $this->belongsToMany('cdn\User', 'idnumber');
    }

    public function orders()
    {
        return $this->belongsTo('cdn\User', 'idnumber');
    }





    /* MTO - belongTo */


    public function userOrders(User $idnumber)
    {
        return $this->belogTo('cdn\User', 'idnumber');
    }

    public function orderItems()
    {
        return $this->order;
    }

    /* OTM  - hasMany*/

    public function staffOrder()
    {
        return $this->hasMany('cdn\Models\Order', 'ponumber');
    }



    /* OTO hasOne / belongsTo*/
}