<?php
namespace cdn\Models;
use cdn\User;
use Illuminate\Database\Eloquent\Model;
class Item extends Model
{
    protected $table = 'items';
    protected $fillable = [
    	'itemnumber',
    	'itemname',
    	'itemprice',
    	'itemsku',
    	'plant',
    	'instock',
        'link',
        'itempic',
    ];   

    public function user()
	{
		return $this->belongsTo('cdn\User', 'id');
	}


    public function item()
	{
		return $this->belongsTo('cdn\Models\Item', 'itemnumber');
    }

    public function itemName()
	{
		return $this->belongsTo('cdn\Models\Item', 'itemname');
    }

    public function itemNumber()
	{
		return $this->belongsTo('cdn\Models\Item', 'itemnumber');
    }

	public function items(Item $itemname)
	{
    		return $this->hasMany('cdn\Models\Item', 'itemnumber');
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
    	
    	if ($this->itemprice) {
    		return $this->itemprice;
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
