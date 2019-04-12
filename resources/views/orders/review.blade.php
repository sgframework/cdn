@extends('layouts.review')

@section('content')    


        @if (!$reviewitems->count())
            <p>No results found, sorry</p> <span>&larr; <a href="/">Back</a></span><span style="float:right"></span><hr />
        @else

@markdown

# Order Review

## Order# {{ $order->ordernumber }}

@endmarkdown


@if($errors->any())
<h4>{{$errors->first()}}</h4>
@endif

        </div>
        
<table class="ExcelTable2007">

    <thead>
        <tr>
            <th>By#ID </th>
            <th>PO#</th>
            <th>Branch</th>
        </tr>  
    </thead>
    <tbody>
        <tr>
            <td>{{ $order->staffname }} #{{ $order->staffid }}</td>
            <td>{{ $order->ponumber }}</td>
            <td>{{ $order->branchname }}</td>
        </tr>
    </tbody>
    </table>
    <table class="ExcelTable2007">

    <thead>
        <tr>
            <th>Order#</th>
            <th>URL</th>
            <th>Date - Time</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $order->ordernumber }}</td>
            <td><a href="{{ url('/orders/order') }}/{{ $order->slug }}/review">{{ $order->slug }}</a></td>
            <td>{{ $order->created_at }}</td>
        </tr>
    </tbody>
@if (!$order->count())
    <p>You have no processed orders.</p>
@else
        <tbody>
        </tbody>
    </table>           <br />
@endif
            <?php $totalqty = 0; ?>
            <?php $totalfree = 0; ?>
            <?php $totalprice = 0; ?>
    <table  class="style31 ExcelTable2007">
            <thead>
                <th>Mat. Description(Optional)</th>
                <th style="text-align:center">Material Code</th>
                <th style="text-align:center">Qty</th>
                <th style="text-align:center">Free</th>
                <th style="text-align:center">Price</th>
            </tr>
        </thead>
        @foreach ($reviewitems as $reviewitem)
        <?php $totalqty += $reviewitem->itemqty; ?>
        <?php $totalfree += $reviewitem->itemfree; ?>
        <?php $totalprice += $reviewitem->itemprice; ?>
            @include('dashboard/partials/orderitemsreviewblock')
        @endforeach
        <tfoot>
            <tr>
                <th style="text-align:center"><b>Totals</b></th>
                <th></th>
                <td style="text-align:center">{{ $totalqty }}</td>
                <td style="text-align:center">{{ $totalfree }}</td>
                <td style="text-align:center">{{ $totalprice }}.00 SAR</td>
            </tr>
        </tfoot>
    </table>
</div>

<br />
    <form action="{{ route('orders.submit', ['orderId' => $order->slug]) }}" method="POST">
    @csrf
    <input hidden name="orderid" value="{{ url('/root/orders') }}/{{ $order->staffid }}/{{ $order->slug }}">
    <input hidden name="ponumber" value="{{ $order->ponumber }}">
    <input hidden name="branchnumber" value="{{ $order->branchnumber }}">
    <input hidden name="branchname" value="{{ $order->branchname }}">
    <input hidden name="totalqty" value="{{ $totalqty }}">
    <input hidden name="totalfree" value="{{ $totalfree }}">
    <input hidden name="totalprice" value="{{ $totalprice }}">


    <button style="font-size:20px;padding-right:8px;padding-left:8px;padding-bottom:8px;padding-top:8px;" class="btn btn-primary" type="submit"> Submit </button>

    </form>
<br />
<br />
<br />
<hr />
    <pre style="font-size:12px"></pre>
    @endif
@endsection