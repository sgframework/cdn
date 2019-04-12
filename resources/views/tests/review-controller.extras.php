

            /*
            $items = Item::all();
            $branches = Branch::all();
            //$orders = Order::all()->where('ordernumber', '=', $ordernumber)->first();
            $currentuser = \Auth::user();

            
            $orderid = DB::table('orders')
            ->where('staffid', '=', $currentuser->idnumber)
            ->get();
            dump($orderid);
            
            $orders = Order::where('staffid', '=', $currentuser->idnumber)
            ->get();
            $ordernumber = OrderItems::select()->where('staffid', '=', $currentuser->idnumber)->get();
            dump($ordernumber);
            $ponumber = OrderItems::select('ponumber')->where('staffid', '=', $currentuser->idnumber)->get();
            dump($ponumber);
            $slug = OrderItems::select('slug')->where('staffid', '=', $currentuser->idnumber)->get();
            dump($slug);

                       
            $orderitems = OrderItems::where('staffid', '=', $currentuser->idnumber)
            ->get();
            //$order = Order::where('slug', '=', $slug)->get();            
            //dump($order);
            $reviewitems = $slug;
            dump($orders);
            return view('orders.review')->with('orders', $orders)->with('orderitems', $orderitems)->with('items', $items)->with('branches', $branches)->with('ordernumber', $ordernumber)->with('ponumber', $ponumber)->with('slug', $slug);



*/






                        //$currentuser = \Auth::user();
                        //$order = OrderItems::where('slug', '=', $slug)->first();
                        //$ordernumber = $order;
                        //$orderitemslug = OrderItems::where('slug', $slug)->first(); 
                        //$orderitems = OrderItems::whereNotNull('orderitems')->get();
                        //dump($order);
                        //dump($orders);
                        //dump($split);
                        //dump($ordernumber);
                        //dump($orderitemslug);
                        //dump($orderitems);
                        //$order = OrderItems::where('slug', $slug)->first();           
                        //$staffid = \Auth::user()->idnumber;
                        //$staffname = \Auth::user()->name;
                        //$branchnumber = Order::select('branchnumber')->where('slug', '=', $slug)->first();
                        //dump($branchnumber);
            
                        //$branchname = Order::select('branchname')->where('slug', '=', $slug)->get();
                        //dump($branchname);
                        //$status = Order::select('status')->where('slug', '=', $slug)->get();
                        //dump($status);
                        //$items = Item::select('itemnumber', 'itemname', 'itemprice', 'itemsku', 'plant', 'instock', 'link', 'type')->orderBy('created_at', 'desc')->paginate(10);
                        //dump($items);










                        //dump($order);
            //$ponumber = Order::select('ponumber')->where('staffid', '=', $currentuser->idnumber)->where('slug', '=', $slug)->get();
            //$ponumber = OrderItems::select('ponumber')->where('staffid', '=', $currentuser->idnumber)->where('slug', '=', $slug)->count();
            //dump($ponumber);
            //dump($ponumber);
            //dump($order);








            //dump($slug);
            //$order = OrderItems::where('slug', '=', $slug)->get();
            //$order = OrderItems::where('slug', '=', $slug)->get();
            //dump($branchnumber);
            //dump($branchname);
            //$reviewitems = OrderItems::where('staffid', '=', $currentuser->idnumber)->get();
            //dump($table);
            //dump($reviewitems);
            //$branchname = implode("-",$split);
            //$branchnumber = implode("-",$split);
            //$ponumber = OrderItems::select()->where('slug', '=', $slug)->first();

            //dump($ponumber);
            //dump($branchname);
            //dump($branchnumber);


            //$orderid = DB::table('orderitems')
            //->where('staffid', '=', $currentuser->idnumber)
            //->get();
            //dump($orderid);
            // HEREEEEEEEEEEEEEEEEEE




            //dump($orders);
            //$ponumber = OrderItems::where('slug', '=', $slug)->get();
            //dump($ponumber);
            
            // ** NotUrgent Orders Scope ** //
            $noturgent = Order::NotUrgent()->get();
            //dump($noturgent);
            // ** NotUrgent Orders Scope ** //

            // ** Urgent Orders Scope ** //
            $urgent = Order::Urgent()->get();
            //dump($urgent);
            // ** Urgent Orders Scope ** //


            //$ordernumber = OrderItems::select()->where('staffid', '=', $currentuser->idnumber)->get();
            //dump($ordernumber);
            //$ponumber = OrderItems::select('ponumber')->where('staffid', '=', $currentuser->idnumber)->get();
            //dump($ponumber);
            //dump($slug);





            <a style="color:black" href="{{ route('orders.backedit', ['orderId' => $order->slug]) }}">