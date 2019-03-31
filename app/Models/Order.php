<?php
namespace cdn\Models;
use cdn\User;
use cdn\Models\Item;
use cdn\Models\Branch;
use Illuminate\Database\Eloquent\Model;
class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = [
    	'ordernumber',
    	'staffname',
    	'staffid',
    	'ponumber',
    	'branchnumber',
    	'branchname',
    	'itemnumber',
        'orderitems',
        'itemqty',
        'freeitem',
        'itemprice',
        'urgent',
    ];   


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
    
    public function getOrderNumber(Request $request)
    {
        return $this->belongsTo('cdn\Models\Order', 'ponumber');
    }

	public function orders(Order $ordernumber)
	{
    		return $this->hasMany('cdn\Models\Order', 'ordernumber');
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
    public function getOrderItems()
    {
    	return $this->poNumber() ?: $this->item;
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
