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
    	'branchnumber',
    	'itemnumber',
        'orderitems',
        'itemqty',
        'freeitem',
        'itemprice',
        'orderstatus',
    ];   


}
