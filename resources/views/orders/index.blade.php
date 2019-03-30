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
                        @foreach ($orders as $order)
                            @include('orders/partials/orderblock')
                        @endforeach			
                    @endif
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


