<?php

namespace cdn\Mail;

use DB;
use cdn\User;
use cdn\Models\Branch;
use cdn\Models\Order;
use cdn\Models\OrderItems;
use cdn\Models\Item;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The order instance.
     *
     * @var Order
     */
    public $order;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->order = $order;
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */



    public function build()
    {
        return $this->from('root@ies.com')
        ->view('orders.review', ['orderId' => $order->slug]);
        /*->attach('/', [
            'as' => 'name.pdf',
            'mime' => 'application/pdf',
        ])*/
    }

    /*
    public function orderitems(OrderItems $items)
    {
        return $this->items = $orderitems;
    }
*/
}