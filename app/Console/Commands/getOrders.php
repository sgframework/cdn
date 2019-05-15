<?php

namespace cdn\Console\Commands;

use Illuminate\Console\Command;
use cdn\Models\Order;

class getOrders extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:orders';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get All Orders...';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $headers = ['CreatedBy', 'PO', 'Customer', 'TotalItems', 'TotalCases', 'TotalFree', 'TotalDiscount', 'Total Price', 'ProcessedBy'];

        $orders = Order::all(['staffname', 'ponumber', 'branchname', 'totalitems', 'totalfree', 'totalprice', 'totalprice', 'processedby'])->toArray();
        
        $this->table($headers, $orders);


        
    }
}
