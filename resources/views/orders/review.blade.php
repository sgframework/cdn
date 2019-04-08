@extends('layouts.review')

@section('content')    

@markdown

# Order Review

## Order# {{ $ordernumber }}

@endmarkdown


@if($errors->any())
<h4>{{$errors->first()}}</h4>
@endif
        @if (!$orderitems->count())
            <p>No results found, sorry</p> <span>&larr; <a href="/">Back</a></span><span style="float:right"></span><hr />
        @else
        </div>
<table>

    <thead>
        
        <tr>
            <th>Order# </th>
            <th>Ipsum</th>
            <th>Dolor</th>
            <th>Sit</th>
        </tr>        
        <tr>
            <th>Material Code</th>
            <th>Mat. Description(Optional)</th>
            <th>Qty</th>
            <th>Free</th>
            <th>Price</th>
        </tr>
    </thead>
    @foreach ($orderitems as $orderitem)
        @include('dashboard/partials/orderitemsblock')
    @endforeach
</table>
<hr /><br />
    <form class="form-inline" action="" method="POST">
    @csrf
        <hr /><br />
        <input type="submit" class="btn btn-primary" /> 
    </form>


    <hr /><br />
    <hr /><br />
    <hr /><br />
    <hr /><br />
    <hr /><br />
    <hr /><br />
    <hr /><br />
    <hr /><br />
    <hr /><br />

    <p style="font-size:10px">{{ dump($table) }}</p>
    <p style="font-size:10px">{{ dump($orderitems) }}</p>



    @endif

    

@endsection