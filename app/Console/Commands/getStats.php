<?php

namespace cdn\Console\Commands;

use Illuminate\Console\Command;
use cdn\Models\OrderItems;

class getStats extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'get:stats';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $headers = ['PO', 'Customer', 'Total Price'];

        $orders = OrderItems::all(['ponumber', 'branchname', 'orderitems', 'totalprice'])->toArray();
        
        $this->table($headers, $orders);
    }
}
