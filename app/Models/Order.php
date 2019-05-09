<?php
namespace cdn\Models;
use Illuminate\Database\Eloquent\Model;
class Order extends Model
{
    protected $table = 'orders';
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
        'totalitems',
        'totalqty',
        'totalfree',
        'discount',
        'totalprice',
        'created_at',
        'updated_at',
        'attachedpo',
        'processedby',
        'totaloriginal'
        
    ];   


    /* MTM - belongsToMany */


    /*public function orderId()
    {
        return $this->belongsToMany('cdn\User', 'ponumber', 'idnumber', 'orderid');
    }*/

    
    /* MTO - belongTo */
    public function orders()
    {
        return $this->belongTo('cdn\User', 'idnumber');
    }
    /*public function ordersOfMine()
    {
        return $this->belongTo('cdn\User', 'idnumber');
    }*/ 
    public function getOrderItems(OrderItems $itemnumber)
    {
        return $this->belongTo('cdn\Models\Order', 'slug');
    }
 
    /* OTM  - hasMany*/

    public function ordersOfMine()
    {
        return $this->belongTo('cdn\User', 'idnumber')->hasMany('cdn\Models\Order', 'ponumber');
    }

    public function orderId()
	{
    	return $this->hasMany('cdn\Models\Order', 'staffid');
   	}


    public function getOrderItemsById(User $name)
    {
        return $this->hasMany('cdn\Models\Order', 'orderid');
    }
    public function items()
	{
		return $this->hasMany('cdn\Models\OrderItems', 'slug');
    }
    public function orderItems()
	{
		return $this->hasMany('cdn\Models\OrderItems', 'orderid');
    }
    /*public function orders($id)
	{
        return $this->hasMany('cdn\Models\Order', 'ponumber');
    }*/

    /* OTO hasOne / belongsTo*/


    public function user()
	{
		return $this->belongsTo('cdn\User', 'idnumber');
    }
    public function customer()
	{
		return $this->belongsTo('cdn\Models\Branch', 'branchnumber');
    }
    
    public function branchname()
	{
		return $this->belongsTo('cdn\Models\Branch', 'branchnumber');
    }
    public function staffName()
	{
		return $this->belongsTo('cdn\User', 'name');
	}
    public function staffId()
	{
		return $this->belongsTo('cdn\User', 'idnumber');
    } 
    public function orderNumber()
	{
		return $this->belongsTo('cdn\Models\Order', 'ponumber');
    }
    public function poNumber()
	{
		return $this->belongsTo('cdn\User', 'idnumber');
    }

    public function orderByName()
    {
        return $this->belongsTo('cdn\User', 'name');
    }
    public function getOrdersbyUser()
    {
        return $this->belongsTo('cdn\User', 'name');
    }
    public function getOrderNumber(Request $request)
    {
        return $this->belongsTo('cdn\Models\Order', 'orderid');
    }
    public function staffOrders(Order $orders)
    {
        return $this->belongsTo('cdn\User', 'idnumber');
    }
    public function item()
	{
		return $this->belongsTo('cdn\Models\Item', 'itemnumber');
    }
    public function itemNumber()
	{
		return $this->belongsTo('cdn\Models\Order', 'ponumber');
    }
    
    



    /* Scoopes */
    public function scopeOrder($query)
    {
        return $query->whereNotNull('ordernumber');
    }

    public function scopeNotUrgent($query)
	{
		return $query->whereNull('urgent');
    }

    public function scopeUrgent($query)
	{
		return $query->whereNotNull('urgent');
    }
    
    public function getOrderByStaff()
    {
    	if ($this->ordernumber && $this->ponumber) {
    		return "{$this->staffname} {$this->ponumber}";
    	}
    	
    	if ($this->staffname) {
    		return $this->ponumber;
    	}
    	return null;
    }
    public function getOrderByDate()
    {
    	return $this->created_at;
    }

    public function getOrderByPo()
    {
    	return $this->poNumber() ?: $this->ordernumber;
    }
    public function getBranchNumber()
    {
    	return $this->getBranchName() ?: $this->branchnumber;
    }

    public function getBranchName()
    {
    	return $this->getBranchNumber() ?: $this->branchname;
    }
    public function getOrderByBranchNumber()
    {
    	//if ($this->itemnumber && $this->itemname) {
    	//	return "{$this->itemprice} {$this->itemprice}";
    	//}
    	
    	if ($this->branchnumber) {
    		return $this->ordernumber;
    	}
    	return null;
    }
    public function getOrderByBranchName()
    {
    	//if ($this->itemnumber && $this->itemname) {
    	//	return "{$this->itemprice} {$this->itemprice}";
    	//}
    	
    	if ($this->branchname) {
    		return $this->ordernumber;
    	}
    	return null;
    }
    public function getItemsPerOrder()
    {
    	//if ($this->itemnumber && $this->itemname) {
    	//	return "{$this->itemprice} {$this->itemprice}";
    	//}
    	
    	if ($this->orderNumber) {
    		return $this->item;
    	}
    	return null;
    }

    public function getOrderList()
    {    	
    	if ($this->poNumber && $this->itemNumber) {
    		return $this->getOrderItems;
    	}
    	return null;
    }
    public function getItemsQty()
    {
    	return $this->itemNumber() ?: $this->itemqty;
    }
    public function getOrderQty()
    {    	
    	if ($this->getOrderItems) {
    		return $this->getItemsQty;
    	}
    	return null;
    }

    public function getFreeItems()
    {
    	return $this->getOrderItems() ?: $this->freeitem;
    }

    public function getItemPrice()
	{
		return $this->belongsTo('cdn\Models\Item', 'itemprice');
    }
    public function getPrice()
	{
    	return $this->getItemPrice() ?: $this->itemprice;
    }
    public function getTimeStamp()
    {
    	return $this->orderNumber() ?: $this->created_at;
    }

    public function getOrderStep1()
    {
    	return $this->orderNumber() ?: $this->created_at;
    }


}



class Connection
{
    protected $link;
    private $idnumber, $name, $password;
    
    public function __construct($idnumber, $name, $password)
    {
        $this->idnumber = $idnumber;
        $this->name = $name;
        $this->password = $password;
        $this->connect();
    }
    
    private function connect()
    {
        $this->link = new PDO($this->idnumber, $this->name, $this->password);
    }
    
    public function __sleep()
    {
        return array('idnumber', 'name', 'password');
    }
    
    public function __wakeup()
    {
        $this->connect();
    }
}

