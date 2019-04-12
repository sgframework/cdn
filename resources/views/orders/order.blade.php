@extends('layouts.app')

@section('title', "| {{ $order->ordernumber }}")

@section('content')    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 ml-sm-auto col-lg-12">
            <div class="card">
                <div class="card-header">Orders List</div>
                    <div class="card-body">

@markdown

### Order# **{{ $order->ordernumber }}**

---------------------------------------

@endmarkdown


                        <div class="content-block">
                            <main role="main" class="">
                                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                                        <div class="table-responsive">
                                            <table class="table-dark table-responsive-sm dark" id="myTable">
                                                <thead style="font-size:12px">
                                                    <tr>
                                                        <th>Order#</th>
                                                        <th>PO#</th>
                                                        <th>By#ID</th>
                                                        <th>Branch#Name</th>
                                                        <th>Urgent</th>
                                                        <th>Status</th>
                                                        <th>Created</th>
                                                    </tr>
                                                </thead>
                                                <div class="media">
                                                <a class="pull-left" href="">
                                                </a>
                                                <div class="media-body">
                                                    @if ($order->ordernumber)
                                                    <tbody style="font-size:12px">
                                                        <tr>
                                                            <td>{{ $order->ordernumber }}</td>
                                                            <td>{{ $order->ponumber }}</td>
                                                            <td>{{ $order->staffname }}#{{ $order->staffid }}</td>
                                                            <td>{{ $order->branchname }}</td>
                                                            <td>{{ $order->urgent }}</td>
                                                            <td class="{{ strtolower($order->status) }}">{{ $order->status }}</td>
                                                            <td>{{ $order->created_at->diffForHumans() }}</td>
                                                        </tr>	
                                                    </tbody>
                                                    @endif
                                                </div>
                                            </div>
                                        </table>
                                    </div>					
                                </div>  
                        @if ($order->status == 'Reviewing')
                        <a href="{{ url('/orders/order/' . $order->slug . '/review') }}"><i class="{{ strtolower($order->status) }}"> Finish review your order and submit it</i></a>
                        @elseif ($order->status == 'Editing')
                        <a href="{{ url('/orders/order/' . $order->slug . '/edit') }}"><i class="fas fa-edit"> Finish <span class="editing">editing</span> your order for <span class="reviewing">review</span> and <span class="submitted"> submittion.</span></i></a>
                        @elseif ($order->status == 'Submitted')
                                    @if (!$orderitems->count())
                                        <p>No results found, sorry</p> <span>&larr; <a href="/">Back</a></span><span style="float:right"></span><hr />
                                    @else
                                    <?php $totalqty = 0; ?>
                                    <?php $totalfree = 0; ?>
                                    <?php $totalprice = 0; ?>
                                    <div style="padding-left:8px;padding-top:8px" class="col-sm-12">
                                    @if (Session::has('submitted'))
                                        <div class="alert alert-danger">{{ Session::get('submitted') }}</div>
                                    @endif
                                    <table width="100%" class="table-responsive-sm" id="myTable">
                                        @foreach ($orderitems as $orderitem)
                                        <?php $totalqty += $orderitem->itemqty; ?>
                                        <?php $totalfree += $orderitem->itemfree; ?>
                                        <?php $totalprice += $orderitem->itemprice; ?>
                                            @include('dashboard/partials/orderitemsblock')
                                        @endforeach	
                                        <tfoot>
                                                <tr>
                                                    <td><b>Total</b></td>
                                                    <th>{{ $totalqty }}</th>
                                                    <th>{{ $totalfree }}</th>
                                                    <th>{{ $totalprice }}.00 SAR</th>
                                                </tr>
                                            <tr>
                                                <th>Item# - Desc.</th>
                                                <th>Qty</th>
                                                <th>Free</th>
                                                <th>Price</th>
                                                <!--<th>Delete</th>-->
                                            </tr>
                                        </tfoot>
                                    </table>
                                    @endif
                                    <br /><hr />
                        <i class="fas fa-exclamation-triangle"></i> You Cannot <span class="editing">edit</span> or <span class="reviewing">review</span> <span class="submitted">submitted</span> or <span class="completed">completed</span> orders
                        @elseif ($order->status == 'Completed')
                        <i class="fas fa-exclamation-triangle"></i> You Cannot <span class="editing">edit</span> or <span class="reviewing">review</span> <span class="submitted">submitted</span> or <span class="completed">completed</span> orders
                        @else 
                            <a href="{{ url('/orders/order/' . $order->slug . '/edit') }}"><i class="fas fa-edit"> <span class="editing">Edit</span> your order.</i></a>
                        @endif
                        </div>
                    </div>  
                </div>  
            </div>  
        </div>
    </div> 
</div> 



@endsection