@extends('layouts.app')

@section('content')    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 ml-sm-12 col-lg-12">

            <div class="card">
                <div style="font-size:20px" class="card-header"><b>Edit Order# {{ $order->ordernumber }}</b></div>
                    <div class="card-body">
                    <a href="{{ url('/orders/order/' . $order->slug) }}">&larr; Go Back To Order Overview</a><hr />
                    <i class="fas fa-plus"><span class="h5"> Insert New Items</span></i>

                        <span style="color:red">
@markdown

##### You are now editing PO# **{{ $order->ponumber }}**

---------------------------------------

@endmarkdown
                        </span>
                        <!-- Page, "data-page" contains page name -->
                        <div class="content-block">
                            <main role="main" class="">
                                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                                        <div class="table-responsive">
                                            <table width="100%" id="myTable" class="table-dark table-responsive-sm dark">
                                                <thead style="font-size:12px">
                                                    <tr>
                                                        <th>Order#</th>
                                                        <th>PO#</th>
                                                        <th>ID#</th>
                                                        <th>Branch#Name</th>
                                                        <th>Status</th>
                                                        <th>Last Updated</th>
                                                    </tr>
                                                </thead>
                                                <div class="media">
                                                <a class="pull-left" href="">
                                                </a>
                                                <div class="media-body">
                                                    @if ($order->ordernumber)
                                                    <tbody style="font-size:10px">
                                                        <tr>
                                                            <td>{{ $order->ordernumber }}</td>
                                                            <td>{{ $order->ponumber }}</td>
                                                            <td>{{ $order->staffid }}</td>
                                                            <td>{{ $order->branchname }}</td>
                                                            <td class="{{ strtolower($order->status) }}">{{ $order->status }}</td>
                                                            <td>{{ $order->updated_at->diffForHumans() }}</td>
                                                        </tr>	
                                                    </tbody>
                                                    @endif
                                            </table>
                                        <!--<form action="{{ route('orders.insert', ['orderId' => $order->slug]) }}" method="POST">
                                            @csrf
                                            <select name='itemnumber' class='form-control'><option>Select one</option><?php foreach($items as $item) {?><option width='60%' value='<?php echo $item->itemnumber; ?>'><?php echo $item->itemnumber; ?> <?php echo $item->itemname; }?></option></select>
                                            <input  width='10%' class='form-control' type='number' name='itemqty' />";
                                            <input width='10%' class='form-control' type='number' name='freeitem' />";
                                            <input width='10%' class='form-control' type='number' name='itemprice' />
                                            <input type="submit" class="btn btn-primary" />
                                        </form>-->
                                        <!--<center><button class="btn btn-default" onclick="myFunction()">ADD <i class="fas fa-plus"></i></button></center><br />-->
                                    <div class="table-responsive">

                                            
                                            @if($errors->any())
                                            <br />
                                            <div padding-top="20px"></div>
                                                <div class="alert alert-danger">{{ $errors->first() }}</div>
                                            @endif
                                            <form class="form-inline" action="{{ route('orders.insert', ['orderId' => $order->slug]) }}" method="POST">
                                                    @csrf
                                                <input  placeholder="Select Item" style="" name="itemnumber" class="form-control1" list="{{ $item->itemnumber }}-{{ $item->itemname }}" autofocus>
                                                <input  hidden name="itemname" class="form-control" list="{{ $item->itemnumber }}-{{ $item->itemname }}">
                                                    <datalist id="{{ $item->itemnumber }}-{{ $item->itemname }}" class="">
                                                        @foreach($items as $item)
                                                        <option name="itemnumber" value="{{ $item->itemnumber }} - {{ $item->itemname }}"></option>
                                                        @endforeach 
                                                    </datalist>                   
                                                <input width="10%" class="form-control2" type="number" name="itemqty" placeholder="Qty." />
                                                <input width="10%" class="form-control2" value="Free" type="number" name="freeitem" placeholder="Free" />
                                                <input hidden id="price" width="20%" class="form-control2" type="number" name="itemprice" placeholder="Price" />
                                                <input id="askedprice" width="10%" class="form-control2" type="number" name="askedprice" placeholder="Price" />
                                                @if ( $order->status == 'Submitted')
                                                        <p>Can't make edits on submitted or completed orders.</p>
                                                    @elseif ( $order->status == 'Completed' )
                                                    <p>Can't make edits on submitted or completed orders.</p>
                                                    @elseif ( $order->status == 'Reviewing' )
                                                    @elseif ( $order->status == 'Editing' )
                                                    <div style="padding-left:20px">
                                                        <input type="submit" value="Insert &darr;" style="background-color:black;color:white;padding: 2px 8px 2px 8px;font-size: 12px" class="form-control" />
                                                    </div>
                                                    @elseif ( $order->status == 'JustCreated' )
                                                    <div style="padding-left:20px">
                                                        <input type="submit" value="Insert &darr;" style="background-color:black;color:white;padding: 2px 8px 2px 8px;font-size: 12px" class="form-control" />
                                                    </div>
                                                    @else
                                                
                                                @endif

                                    @if (!$orderitems->count())
                                        <p>No results found, sorry</p> <span>&larr; <a href="/">Back</a></span><span style="float:right"></span><hr />
                                    @else
                                    </div>
                                    <?php $totalqty = 0; ?>
                                    <?php $totalfree = 0; ?>
                                    <?php $totalprice = 0; ?>
                                    <?php $totalqtyprice = 0; ?>
                                    <?php $askedprice = 0; ?>
                                    <?php $totaldiscount = 0; ?>
                                    <?php $totaloriginal = 0; ?>
                                    <div style="padding-left:8px;padding-top:8px" class="col-sm-12">
                                                <table width="100%" class="table-responsive-sm" id="myTable">
                                                    @foreach ($orderitems as $orderitem)
                                                    <?php $totalqty += $orderitem->itemqty; ?>
                                                    <?php $totalfree += $orderitem->freeitem; ?>
                                                    <?php $totalprice += $orderitem->itemprice; ?>
                                                    @if ($orderitem->askedprice == 0)
                                                    <?php $totalqtyprice += $orderitem->itemqty * $orderitem->itemprice; ?>
                                                    @else
                                                    <?php $totalqtyprice += $orderitem->itemqty * $orderitem->askedprice; ?>
                                                    @endif

                                                    @if ($orderitem->askedprice == 0)
                                                    <?php $askedprice += "0"; ?>

                                                    @else
                                                    <?php $askedprice +=  $orderitem->itemqty * $orderitem->askedprice; ?>



                                                    @endif

                                                    @if ($orderitem->askedprice == 0)
                                                    <?php $totaldiscount += "0"; ?>

                                                    @else
                                                    <?php $totaldiscount -= ($orderitem->itemprice * $orderitem->itemqty) - ($orderitem->askedprice * $orderitem->itemqty); ?>



                                                    @endif
                                                    <?php $totaloriginal += $orderitem->itemprice * $orderitem->itemqty; ?>
                                                    <input hidden width="20%" value="{{ $totalqtyprice }}" class="form-control2" type="number" name="totalqtyprice" />
                                                    <input hidden width="20%" value="{{ $askedprice }}" class="form-control2" type="number" name="askedprice" />
                                                    </form>
                                                        @include('dashboard/partials/orderitemsblock')
                                                        

                                                    @endforeach	

                                            <script>
                                                $(document).ready(function(){
                                                $("input").click(function(){
                                                        $(this).next().show();
                                                    });
                                                });
                                            </script>
                                                    <tfoot>
                                                            <tr>
                                                                <td><b>Total</b></td>
                                                                <th style="text-align:center">{{ $totalqty }}</th>
                                                                <th style="text-align:center">{{ $totalfree }}</th>
                                                                <th style="text-align:center">{{ number_format($totalprice) }}.00 SAR</th>

                                                                <th style="text-align:center">{{ number_format($totaldiscount) }}.00 SAR</th>
                                                                <th style="text-align:center">{{ number_format($totalqtyprice) }}.00 SAR</th>
                                                                <th style="text-align:center;background-color:black;color:white" ></th>
                                                            </tr>
                                                        <tr>
                                                            <th>Item# - Desc.</th>
                                                            <th style="text-align:center">Qty</th>
                                                            <th style="text-align:center">Free</th>
                                                            <th style="text-align:center">Price</th>
                                                            <th style="text-align:center">Total Discount</th>                                                       
                                                            <th style="text-align:center">Qty * Price</th>                                                       
                                                            <th style="text-align:center;background-color:black;color:white">rm</th>
                                                            <!--<th>Delete</th>-->
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                                    @if ($totalfree == 0)
                                                    <br />
                                                    <span style="float:right" class="badge badge-info">No Free Cases</span>
                                                    @else
                                                    <br />
                                                    <span style="float:right;color:black" class="badge badge-success">Total Of {{ $totalfree }} Free Cases</span>
                                                    @endif
                                                    @if ($askedprice == 0)
                                                    <br />
                                                    <span style="float:right" class="badge badge-secondary">No Discount</span>
                                                    @else
                                                    <br />

                                                    <span style="float:right" class="badge badge-danger">Total price {{ number_format($totalqtyprice) }}.00 SAR</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <span style="float:right" class="badge completed">Total Discount {{ number_format($totaldiscount) }}.00 SAR</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <span style="float:right" class="badge badge-light">Original Total price {{ number_format($totaloriginal) }}.00 SAR</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                                    @endif
                                                @endif
                                              <br />
                                              @if ( $order->status == 'Submitted')
                                              <div class="alert alert-alert"><i class="fas fa-exclamation-triangle"></i> Can't make edits on submitted or completed orders.</div>
                                              @elseif ( $order->status == 'Completed' )
                                              <div class="alert alert-alert"><i class="fas fa-exclamation-triangle"></i> Can't make edits on submitted or completed orders.</div>
                                                @elseif ( $order->status == 'Reviewing' )
                                                <form action="{{ route('orders.review', ['orderId' => $order->slug]) }}" method="GET">
                                                    <input style="float:right" type="submit" class="btn btn-primary" value="Review your order &rarr;" />
                                                </form>
                                                @elseif ( $order->status == 'Editing' )
                                                <form action="{{ route('orders.review', ['orderId' => $order->slug]) }}" method="GET">
                                                    <input style="float:right" type="submit" class="btn btn-primary" value="Review your order &rarr;" />
                                                </form>
                                                @elseif ( $order->status == 'JustCreated' )
                                                <div class="alert alert-danger"><i class="fas fa-exclamation-triangle"></i> Can't review & submit an empty order !</div> 
                                                @else
                                                <div class="alert alert-danger"><i class="fas fa-exclamation-triangle"></i> Can't submit JustCreated orders, with no single item! Stop missing arround, how did you get here actually ?</div>
                                            @endif
    	                                </div>
                                    </div>						
                                </div>  
                            </div>
                    @if ($errors->has('alert'))
                        <span class="help-block">{{ $errors->first('alert') }}</span>
                    @endif
                @if (Session::has('alert'))
                <br />
                <div padding-top="20px"></div>
                    <div class="alert alert-success"><i class="fas fa-check"></i> {{ Session::get('alert') }}</div>
                @endif
                @if (Session::has('warning'))
                <br />
                <div padding-top="20px"></div>
                    <div class="badge badge-success"><i class="fas fa-check"></i> {{ Session::get('warning') }}</div>
                @endif
                <br />




                @if ( $order->urgent == 'on' )

                <img src="{{ asset('images/assests/urgent.png') }}" width="220px" height="120px" />

                @else

                @endif


                    </div>
                </div>     
            </div>
        </div> 
    </div> 
@endsection