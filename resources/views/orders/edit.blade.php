@extends('layouts.app')

@section('content')    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 ml-sm-12 col-lg-12">
                @if ($errors->has('alert'))
    				<span class="help-block">{{ $errors->first('alert') }}</span>
                @endif
                
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
                                            @if (Session::has('alert'))
                                            <br />
                                            <div padding-top="20px"></div>
                                                <div class="alert alert-success">{{ Session::get('alert') }}</div>
                                            @endif
                                            @if (Session::has('warning'))
                                            <br />
                                            <div padding-top="20px"></div>
                                                <div class="alert alert-warning">{{ Session::get('warning') }}</div>
                                            @endif
                                            
                                            @if($errors->any())
                                            <br />
                                            <div padding-top="20px"></div>
                                                <div class="alert alert-danger">{{ $errors->first() }}</div>
                                            @endif
                                            <form class="form-inline" action="{{ route('orders.insert', ['orderId' => $order->slug]) }}" method="POST">
                                                    @csrf
                                                <input  placeholder="Select Item" width="60%" name="itemnumber" class="form-control1" list="{{ $item->itemnumber }}-{{ $item->itemname }}" autofocus>
                                                <input  hidden name="itemname" class="form-control" list="{{ $item->itemnumber }}-{{ $item->itemname }}">
                                                    <datalist id="{{ $item->itemnumber }}-{{ $item->itemname }}" class="">
                                                        @foreach($items as $item)
                                                        <option name="itemnumber" value="{{ $item->itemnumber }} - {{ $item->itemname }}"></option>
                                                        @endforeach 
                                                    </datalist>                   
                                                <input width="10%" class="form-control2" type="number" name="itemqty" placeholder="Qty." />
                                                <input width="10%" class="form-control2" value="0" type="number" name="freeitem" placeholder="Free" />
                                                <input hidden id="price" width="20%" class="form-control2" type="number" name="itemprice" placeholder="Price" />
                                                @if ( $order->status == 'Submitted')
                                                        <p>Can't make edits on submitted or completed orders.</p>
                                                    @elseif ( $order->status == 'Completed' )
                                                    <p>Can't make edits on submitted or completed orders.</p>
                                                    @elseif ( $order->status == 'Reviewing' )
                                                    @elseif ( $order->status == 'Editing' )
                                                    <input type="submit" value="Insert &darr;" style="color:red" class="form-control2" />
                                                    @elseif ( $order->status == 'JustCreated' )
                                                    <input type="submit" value="Insert &darr;" style="color:red" class="form-control2" />
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
                                    <div style="padding-left:8px;padding-top:8px" class="col-sm-12">
                                                <table width="100%" class="table-responsive-sm" id="myTable">
                                                    @foreach ($orderitems as $orderitem)
                                                    <?php $totalqty += $orderitem->itemqty; ?>
                                                    <?php $totalfree += $orderitem->itemfree; ?>
                                                    <?php $totalprice += $orderitem->itemprice; ?>
                                                    <?php $totalqtyprice += $orderitem->itemqty * $orderitem->itemprice; ?>
                                                        @include('dashboard/partials/orderitemsblock')
                                                    @endforeach	
                                                    <input hidden width="20%" value="{{ $totalqtyprice }}" class="form-control2" type="number" name="totalqtyprice" />

                                                    </form>
                                            <script>
                                                $(document).ready(function(){
                                                $("input").click(function(){
                                                        $(this).next().show();
                                                        $(this).next().hide();
                                                    });
                                                });
                                            </script>
                                                    <tfoot>
                                                            <tr>
                                                                <td><b>Total</b></td>
                                                                <th style="text-align:center">{{ $totalqty }}</th>
                                                                <th style="text-align:center">{{ $totalfree }}</th>
                                                                <th style="text-align:center">{{ number_format($totalprice) }}.00 SAR</th>
                                                                <th style="text-align:center">{{ number_format($totalqtyprice) }}.00 SAR</th>
                                                            </tr>
                                                        <tr>
                                                            <th>Item# - Desc.</th>
                                                            <th style="text-align:center">Qty</th>
                                                            <th style="text-align:center">Free</th>
                                                            <th style="text-align:center">Price</th>
                                                            <th style="text-align:center">Qty * Price</th>                                                       
                                                            <th style="text-align:center">rm</th>
                                                            <!--<th>Delete</th>-->
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                                @endif
                                              <br />
                                              @if ( $order->status == 'Submitted')
                                              <div class="alert alert-alert"><i class="fas fa-exclamation-triangle"></i> Can't make edits on submitted or completed orders.</div>
                                              @elseif ( $order->status == 'Completed' )
                                              <div class="alert alert-alert"><i class="fas fa-exclamation-triangle"></i> Can't make edits on submitted or completed orders.</div>
                                                @elseif ( $order->status == 'Reviewing' )
                                                <center><button style="float:right" class="form-inline btn btn-default"><a style="color:black" href="{{ route('orders.review', ['orderId' => $order->slug]) }}">Review your order &rarr;</a></button></center>
                                                @elseif ( $order->status == 'Editing' )
                                                <center><button style="float:right" class="form-inline btn btn-default"><a style="color:black" href="{{ route('orders.review', ['orderId' => $order->slug]) }}">Review your order &rarr;</a></button></center>
                                                @elseif ( $order->status == 'JustCreated' )
                                                <div class="alert alert-danger"><i class="fas fa-exclamation-triangle"></i> Can't review & submit an empty order !</div> 
                                                @else
                                                <div class="alert alert-danger"><i class="fas fa-exclamation-triangle"></i> Can't submit JustCreated orders, with no single item! Stop missing arround, how did you get here actually ?</div>
                                            @endif
    	                                </div>
                                    </div>						
                                </div>  
                            <br />
                        </div>
                    </div>
                </div>     
            </div>
        </div> 
    </div> 
@endsection