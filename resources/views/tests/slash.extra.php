            //$orderitems = OrderItems::whereNotNull('orderitems')->get();
            //dump($order);
            //dump($orders);
            //dump($split);
            //dump($ordernumber);
            //dump($orderitemslug);





              <!--<table id="items" class="table table-striped table-sm">

                                                <tbody style="font-size:10px">

                                        </div>
                                            <script>
                                                function myFunction() {
                                                var table = document.getElementById("items");
                                                var row = table.insertRow(0);
                                                var cell1 = row.insertCell(0);
                                                var cell2 = row.insertCell(1);
                                                var cell3 = row.insertCell(2);
                                                var cell4 = row.insertCell(3);
                                                cell1.innerHTML = "<select name='itemnumber' class='form-control'><option>Select one</option><?php foreach($items as $item) {?><option width='60%' value='<?php echo $item->itemnumber; ?>'><?php echo $item->itemnumber; ?> <?php echo $item->itemname; }?></option></select>";
                                                cell2.innerHTML = "<input  width='10%' class='form-control' type='number' name='itemqty' />";
                                                cell3.innerHTML = "<input width='10%' class='form-control' type='number' name='freeitem' />";
                                                cell4.innerHTML = "<input width='10%' class='form-control' type='number' name='itemprice' />";
                                                }
                                                
                                            </script>

                                                </tbody>
                                                <input type="submit" class="btn btn-primary" />
                                            
                                            </table>-->










                                            <!--<form action="{{ route('orders.insert', ['orderId' => $order->slug]) }}" method="POST">
    @csrf
    <select name='itemnumber' class='form-control'><option>Select one</option><?php foreach($items as $item) {?><option width='60%' value='<?php echo $item->itemnumber; ?>'><?php echo $item->itemnumber; ?> <?php echo $item->itemname; }?></option></select>
    <input  width='10%' class='form-control' type='number' name='itemqty' />";
    <input width='10%' class='form-control' type='number' name='freeitem' />";
    <input width='10%' class='form-control' type='number' name='itemprice' />
    <input type="submit" class="btn btn-primary" />

</form>-->



<td><a href="{{ url('/orders/order/' . $order->slug) }}">{{ url('/orders/order/' . $order->slug) }}</a></td>

<td><img class="media-object" alt="{{ $order->ordernumber }}" src="{{ asset('images/uploads/avatars') }}/{{ Auth::user()->photo }}" style="width:40px; height:40px; float:center; border-radius:50%;"></td>




//$orders = Order::where('slug', '=', $slug)->get('ordernumber');



<td><a href="{{ route('orders.remove') }}"><i style="color:red" class="fas fa-trash-alt"></i></a></td>


Order::where('slug', '=', $slug)->update(['updated_at' => now(), 'status' => 'Editing']);
        



//$reviewitems = OrderItems::select()->where('slug', '=', $slug)->orderBy('created_at', 'desc')->get();
/*
            Mail::send('orders.review', [], function($message) {
                $message
                ->to('root@ipool.remotewebaccess.com')
                ->subject('New Order Just Submitted');
            });
  */    