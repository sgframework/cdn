<?php
namespace cdn\Models;
use cdn\Models\OrderItems;
use Illuminate\Database\Eloquent\Model;
class Itemv2 extends Model
{
    protected $table = 'itemsv2';
    protected $fillable = [
    	'itemnumber',
    	'itemname',
    	'itemoldprice',
    	'itemnewprice',
    	'itemsku',
    	'plant',
    	'instock',
        'link',
        'type',
        'itemgroup',
        'itempic',
    ];   

    public function user()
	{
		return $this->belongsTo('cdn\User', 'id');
    }
    
    public function orders()
{
    return $this->belongsToMany('cdn\Models\OrderItems')->withPivot('orderitems', 'itemnumber','itemoldprice','itemnewprice');
}


    public function item()
	{
		return $this->belongsTo('cdn\Models\Item', 'itemnumber');
    }
    public function itemPrice()
	{
		return $this->belongsToMany('cdn\Models\OrderItems', 'itemnumber', 'orderitems');
    }
    public function Price()
	{
		return $this->belongsToMany('cdn\Models\Item', 'itemname');
    }


	

    public function getPrice()
	{
		return $this->itemPrice()->Price();
    }
    public function scopeNotNull($query)
	{
		return $query->whereNotNull('itemprice');
	}
    public function itemName()
	{
		return $this->belongsTo('cdn\Models\OrderItems', 'itemname');
    }

    public function itemNumber()
	{
		return $this->belongsTo('cdn\Models\OrderItems', 'itemnumber');
    }

	public function items(Item $itemname)
	{
    		return $this->hasMany('cdn\Models\OrderItems', 'itemnumber');
   	}

    
    public function getItem()
    {
    	if ($this->itemnumber && $this->itemname) {
    		return "{$this->itemname} {$this->itemname}";
    	}
    	
    	if ($this->itemname) {
    		return $this->itemname;
    	}
    	return null;
    }
    
    public function getItemName()
    {
    	return $this->getItem() ?: $this->itemname;
    }


    public function getItemNumber()
    {
    	return $this->getItemName() ?: $this->itemnumber;
    }
  

    public function getItemPrice()
    {
    	//if ($this->itemnumber && $this->itemname) {
    	//	return "{$this->itemprice} {$this->itemprice}";
    	//}
    	
    	if ($this->itemnewprice) {
    		return $this->itemnewprice;
    	}
    	return null;
    }
    

    public function getItemSku()
    {
    	return $this->getItemPrice() ?: $this->itemsku;
    }


    public function getPlant()
    {
    	return $this->getItemSku() ?: $this->plant;
    }

    public function getInStock()
    {
    	return $this->getItemSku() ?: $this->instock;
    }    
    
    public function getLink()
    {
    	return $this->getItemSku() ?: $this->link;
    }

        public function fileToUpload()
    {
    	return $this->itempic();
    }
    

    public function getItemPic()
    {
    	return $this->itempic();
    }    
}
