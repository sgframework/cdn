<?php
namespace cdn\Models;
use cdn\User;
use cdn\Models\Item;
use cdn\Models\Order;
use cdn\Models\Branch;
use Illuminate\Database\Eloquent\Model;
class OrderItems extends Model
{
    protected $table = 'orderitems';
    protected $fillable = [
        'orderid',
    	'ordernumber',
    	'staffname',
    	'staffid',
        'ponumber',
        'branchname',
    	'branchnumber',
    	'itemnumber',
        'orderitems',
        'itemqty',
        'freeitem',
        'itemprice',
        'orderstatus',
        'slug',
        'totalqty',
        'totalfree',
        'totalprice',

    ];   

    public function name()
	{
		return $this->belongsTo('cdn\User', 'idnumber');
    }

    public function getItemsPerOrder(OrderItems $slug)
    {
        return $this->hasMany('cdn\Models\Order', 'itemnumber', 'slug');
    }

    public function items()
    {
    return $this->belongsToMany('cdn\Models\Item')->withPivot('orderitems', 'itemnumber','itemprice');
    }

    public function scopeOrders($query)
    {
        return $query->whereNotNull('ponumber');
    }
    public function orderNumber()
	{
		return $this->belongsTo('cdn\Models\Order', 'ponumber');
    }
    

    public function Orders(OrderItems $slug)
    {
        return $this->belongsTo('cdn\User', 'idnumber', 'ordernumber', 'slug');
    }

  
    public function getOrders(OrderItems $slug)
    {
        return $this->hasMany('cdn\User', 'idnumber', 'ordernumber', 'slug');
    }
    
    public function orderstatus(Request $request)
    {
		return $this->hasMany('cdn\Models\Order', 'slug');
    }



    public function getOrderNumber(Order $slug)
    {
        return $this->ordernumber;
    }

    public function getOrderIdNumber(Order $slug)
    {
        return $this->orderid;
    }

    public function getOrderSlug(Order $slug)
    {
        return $this->slug;
    }

    public function getOrderStatus(getOrderItems $request)
    {
		return $this->hasMany('cdn\Models\OrderItems', 'orderstatus');
    }

    public function ordersCount(User $name)
	{
    	return $this->hasMany('cdn\Models\Order', 'orderid');
   }

   public function getOrdersPerUser(User $name)
   {
       return $this->hasMany('cdn\Models\Order', 'orderid');
   }

   public function getUserOrders(OrderItems $orderid)
   {
    return $this->belongsTo('cdn\User', 'idnumber');
    }

    public function getOrderItems(Orders $ponumber)
    {
        return $this->belongsTo('cdn\Models\OrderItems', 'orderid');
    }

}