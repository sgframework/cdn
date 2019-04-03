@extends('layouts.app')

@section('content')    

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Orders List</div>
                <div class="card-body">
                    @if (!$orders->count())
                        <p>No results found, sorry</p> <span>&larr; <a href="/">Back</a></span><span style="float:right"><hr />
                    @else
        <div class="table-responsive">
            <table class="table-dark table-responsive-sm dark" id="myTable">
                <thead style="font-size:14px">
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
                        @foreach ($orders as $order)
                            @include('orders/partials/orderblock')
                        @endforeach	
            </table></div>					
                    @endif
                    </div>  
                </div>
            </div>
            </div><br /><hr />
    <center>{!! $orders->render() !!}</center>
    </div>

    
</div>
@endsection


