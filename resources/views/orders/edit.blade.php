@extends('layouts.app')

@section('title', "| Etid {{ $order->ordernumber }}")

@section('content')    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 ml-sm-12 col-lg-12">
        @if ($errors->has('success'))
    				<span class="help-block">{{ $errors->first('success') }}</span>
                @endif
                @if ($errors->has('alert'))
    				<span class="help-block">{{ $errors->first('alert') }}</span>
    			@endif
            <div class="card">
                <div style="font-size:20px" class="card-header"><b>Edit Order# {{ $order->ordernumber }}</b></div>
                    <div class="card-body">


                    <a href="{{ url('/orders/order/' . $order->slug) }}">&larr; Go Back To Order Overview</a><hr />
<span style="color:red">
@markdown

## You are now editing Order# **{{ $order->ordernumber }}**

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
                                                        <th>By#ID</th>
                                                        <th>BranchName#Number</th>
                                                        <th>PO#</th>
                                                        <th>Urgent</th>
                                                        <th>Status</th>
                                                        <th>Created</th>
                                                        <th>Updated</th>
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
                                                            <td>{{ $order->staffname }}#{{ $order->staffid }}</td>
                                                            <td>{{ $branchname }}</td>
                                                            <td>{{ $order->ponumber }}</td>
                                                            <td>{{ $order->urgent }}</td>
                                                            <td>{{ $status }}</td>
                                                            <td>{{ $order->created_at->diffForHumans() }}</td>
                                                            <td>{{ $order->updated_at->diffForHumans() }}</td>
                                                        </tr>	
                                                    </tbody>
                                                    @endif

                                            </table>

@markdown

------------------------

#### Insert New Items

------------------------

@endmarkdown

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
                            <h4>{{$errors->first()}}</h4>
                            @endif
                                    @if (!$orderitems->count())
                                        <p>No results found, sorry</p> <span>&larr; <a href="/">Back</a></span><span style="float:right"></span><hr />
                                    @else
                                    </div>
                                                <hr />
                                                <div style="padding-left:8px;padding-top:8px" class="col-sm-12">
                                                    <span class="h5"><i class="fas fa-history"></i> Orders Summery</span>
                                                            <table width="100%" class="table-dark table-responsive-sm dark" id="myTable">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Item#</th>
                                                                        <th>Desc.</th>
                                                                        <th>Qty</th>
                                                                        <th>Free</th>
                                                                        <th>Price</th>
                                                                        <th>Ststus</th>
                                                                    </tr>
                                                                </thead>
                                                                @foreach ($orderitems as $orderitem)
                                                                    @include('dashboard/partials/orderitemsblock')
                                                                @endforeach	
                                                                <thead>
                                                                    <tr>
                                                                        <th>Item#</th>
                                                                        <th>Desc.</th>
                                                                        <th>Qty</th>
                                                                        <th>Free</th>
                                                                        <th>Price</th>
                                                                        <th>Ststus</th>
                                                                    </tr>
                                                                </thead>
                                                            </table>
                                                            @endif
                                                        <form class="form-inline" action="{{ route('orders.insert', ['orderId' => $order->slug]) }}" method="POST">
                                                                @csrf
                                                            <input autofocus width="60%" name="itemnumber" class="form-control" list="{{ $item->itemnumber }}-{{ $item->itemname }}">
                                                            <input hidden name="itemname" class="form-control" list="{{ $item->itemnumber }}-{{ $item->itemname }}">
                                                                <datalist id="{{ $item->itemnumber }}-{{ $item->itemname }}" class="">
                                                                    @foreach($items as $item)
                                                                        <option name="itemnumber" value="{{ $item->itemnumber }}-{{ $item->itemname }}"></option>
                                                                    @endforeach 
                                                                </datalist>                   
                                                            <input width="10%" class="form-control" type="number" name="itemqty" placeholder="Qty." />
                                                            <input width="10%" class="form-control" type="number" name="freeitem" placeholder="Free" />
                                                            <input width="10%" class="form-control" type="number" name="itemprice" placeholder="Price" />
                                                            <hr /><br />
                                                            <input type="submit" class="btn btn-primary" /> 
                                                        </form>




                                            <script>
                                $(document).ready(function(){
                                    $("input").click(function(){
                                            $(this).next().show();
                                            $(this).next().hide();
                                        });

                                    });
                                </script>





<br /><hr />
    <form class="form-inline" action="{{ route('orders.review', ['orderId' => $order->slug]) }}" method="GET">
    @csrf
        <input type="submit" value="Review" class="btn btn-info" /> 
</form>




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