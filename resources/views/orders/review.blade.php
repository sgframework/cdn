@extends('layouts.review')

@section('content')    

@markdown

# Order Review

## Order# 

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
            <th>PO#</th>
            <th>Dolor</th>
            <th>Sit</th>
        </tr>   
        <br />     
        <tr>
        </thead>
        <tbody>
        <td>@markdown **{{ $ordernumber }}** @endmarkdown</td>
        <td>@markdown ** ** @endmarkdown</td>
        <td>@markdown **{{ $ordernumber }}** @endmarkdown</td>
        <td>@markdown **{{ $ordernumber }}** @endmarkdown</td>
        </tbody>


        <thead>

            <th>Material Code</th>
            <th>Mat. Description(Optional)</th>
            <th>Qty</th>
            <th>Free</th>
            <th>Price</th>
            <th>Status</th>
        </tr>
    </thead>
    @foreach ($reviewitems as $reviewitem)
        @include('dashboard/partials/orderitemsreviewblock')
    @endforeach
</table>
<hr /><br />


</div>
    <hr /><br />
    <form class="form-inline" action="" method="POST">
    @csrf
        <hr /><br />
        <input type="submit" /> 
    </form>
    <hr /><br />


    <pre style="font-size:12px">{{ var_dump($reviewitems) }}</pre>
    @endif
@endsection