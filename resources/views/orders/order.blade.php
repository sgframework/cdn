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
                        <!-- Page, "data-page" contains page name -->
                        <div class="content-block">
                            <main role="main" class="">
                                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                                        <div class="table-responsive">
                                            <table class="table-dark table-responsive-sm dark" id="myTable">
                                                <thead style="font-size:12px">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Order#</th>
                                                        <th>By#ID</th>
                                                        <th>BranchName#Number</th>
                                                        <th>PO#</th>
                                                        <th>Urgent</th>
                                                        <th>Slug</th>
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
                                                    <tbody style="font-size:12px">
                                                        <tr>
                                                            <td><img class="media-object" alt="{{ $order->ordernumber }}" src="{{ asset('images/uploads/avatars') }}/{{ Auth::user()->photo }}" style="width:40px; height:40px; float:center; border-radius:50%;"></td>
                                                            <td>{{ $order->ordernumber }}</td>
                                                            <td>{{ $order->staffname }}#{{ $order->staffid }}</td>
                                                            <td>{{ $order->branchname }}&nbsp;#{{ $order->branchnumber }}</td>
                                                            <td>{{ $order->ponumber }}</td>
                                                            <td>{{ $order->urgent }}</td>
                                                            <td><a href="{{ url('/orders/order/' . $order->slug) }}">{{ url('/orders/order/' . $order->slug) }}</a></td>
                                                            <td>Pending</td>
                                                            <td>{{ $order->created_at->diffForHumans() }}</td>
                                                            <td>{{ $order->updated_at->diffForHumans() }}</td>
                                                        </tr>	
                                                    </tbody>
                                                    @endif
                                                </div>
                                            </div>
                                        </table>
                                    </div>					
                                </div>  
                            <br /><hr />
                        <a href="{{ url('/orders/order/' . $order->slug . '/insert') }}"><i class="fas fa-edit"></i>Edit Order</a>
                    </div>
                </div>
            </div>     
        </div>
    </div> 
</div> 



@endsection