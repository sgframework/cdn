@extends('layouts.app')

@section('title', "| Etid {{ $order->ordernumber }}")

@section('content')    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 ml-sm-12 col-lg-12">
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
                                                            <td>{{ $order->branchname }}&nbsp;#{{ $order->branchnumber }}</td>
                                                            <td>{{ $order->ponumber }}</td>
                                                            <td>{{ $order->urgent }}</td>
                                                            <td>Pending</td>
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
                                    <center><button class="btn btn-default" onclick="myFunction()">ADD <i class="fas fa-plus"></i></button></center><br />
                                         <div class="table-responsive">
                                            <table class="table table-striped table-sm" id="myTable">
                                                <thead style="font-size:12px">
                                                    <tr>
                                                        <th width="60%">Item</th>
                                                        <th width="10%">Qty.</th>
                                                        <th width="10%">Free</th>
                                                        <th width="10%">Price</th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        <form action="" method="POST">
                                            <table id="items" class="table table-striped table-sm">
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
                                                cell2.innerHTML = "<input  width='10%' class='form-control' type='number' name='qty' />";
                                                cell3.innerHTML = "<input width='10%' class='form-control' type='number' name='free' />";
                                                cell4.innerHTML = "<input width='10%' class='form-control' type='number' name='price' />";
                                                }
                                                
                                            </script>
                                                </tbody>
                                            </table>
                                            <hr />
                                                <input type="submit" class="btn btn-success" />
                                            </form>
		                                </div>
                                    </div>						
                                </div>  
                            <br /><hr />
                        </div>
                    </div>
                </div>     
            </div>
        </div> 
    </div> 
@endsection