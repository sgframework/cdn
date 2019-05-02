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
        





<table class="">

    <thead>
        <tr>
            <th>By#ID </th>
            <th>PO#</th>
            <th>Branch</th>
            <th>Order#</th>
            <th>URL</th>
            <th>Date - Time</th>
        </tr>  
    </thead>
    <tbody>
        <tr>
            <td>{{ $order->staffname }} #{{ $order->staffid }}</td>
            <td>{{ $order->ponumber }}</td>
            <td>{{ $order->branchname }}</td>
            <td>{{ $order->ordernumber }}</td>
            <td><a href="{{ url('/orders/order') }}/{{ $order->slug }}/review">{{ $order->slug }}</a></td>
            <td>{{ $order->created_at }}</td>
        </tr>
    </tbody>
    </table>

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
            <?php $totalqtyprice = 0; ?>
            <?php $askedprice = 0; ?>
    <table  class="style31">
            <thead>
                <th>Mat. Description(Optional)</th>
                <th style="text-align:center">Material Code</th>
                <th style="text-align:center">Qty</th>
                <th style="text-align:center">Free</th>
                <th style="text-align:center">Price</th>
                <th style="text-align:center">Total Discount</th>
                <th style="text-align:center">Qty * Price</th>
            </tr>
        </thead>
        @foreach ($reviewitems as $reviewitem)
        <?php $totalqty += $reviewitem->itemqty; ?>
        <?php $totalfree += $reviewitem->freeitem; ?>
        <?php $totalprice += $reviewitem->itemprice; ?>

        <?php $askedprice += $reviewitem->itemqty * $reviewitem->askedprice; ?>
        
        @if ($reviewitem->askedprice == 0)
        <?php $totalqtyprice += $reviewitem->itemqty * $reviewitem->itemprice; ?>
        @else
        <?php $totalqtyprice += $reviewitem->itemqty * $reviewitem->askedprice; ?>
        @endif
            @include('dashboard/partials/orderitemsreviewblock')
        @endforeach
        <tfoot>
            <tr>
                <th style="text-align:center"><b>Totals</b></th>
                <th></th>
                <td style="text-align:center">{{ $totalqty }}</td>
                <td style="text-align:center">{{ $totalfree }}</td>
                <td style="text-align:center">{{ number_format($totalprice) }}.00 SAR</td>
                <th style="text-align:center">{{ number_format($askedprice) }}.00 SAR</th>
                <th style="text-align:center">{{ number_format($totalqtyprice) }}.00 SAR</th>
            </tr>
        </tfoot>
    </table>
</div>
<br />



<main class="header-link py-4 hljs">
    </main>

    


    <form  enctype="multipart/form-data" action="{{ route('orders.submit', ['orderId' => $order->slug]) }}" method="POST">
    @csrf
    <input hidden name="orderid" value="{{ url('/root/orders') }}/{{ $order->staffid }}/{{ $order->slug }}">
    <input hidden name="ponumber" value="{{ $order->ponumber }}">
    <input hidden name="branchnumber" value="{{ $order->branchnumber }}">
    <input hidden name="branchname" value="{{ $order->branchname }}">
    <input hidden name="totalqty" value="{{ $totalqty }}">
    <input hidden name="totalprice" value="{{ $totalprice }}">
    <input hidden name="totalqtyprice" value="{{ $totalqtyprice }}">
    <input hidden name="totalitems" value="{{ $orderitems->count() - 1 }}">
    <input hidden name="totalfree" value="{{ $totalfree }}">
    <input hidden name="discount" value="{{ $askedprice }}">
    
<div style="padding-left:20px">
<h2>Uplaod PO Attachment <span style="color:red">*</span></h2>
<p>Allowed Formats:</p> <span><pre>JPG, JPEG, PNG, GIF and PDF</pre> </span>
</div>
<div style="float:right;padding-right:20px">
    <button style="font-size:16px;padding-right:6px;padding-left:6px;padding-bottom:6px;padding-top:6px;" class="btn btn-primary" type="submit"> Submit </button>
</div>
    </form>
    <form enctype="multipart/form-data" action="{{ route('orders.attachpo', ['orderId' => $order->slug]) }}" method="POST">

        <div style="float:left;padding-left:20px">
        @if (Session::has('success'))
                <br />
                    <div padding-top="20px"></div>
                    <div style="font-size:12px;color:green;" class="alert alert-success">{{ Session::get('success') }}</div>
                <br />
    @endif
            <input type="file" name="fileToUpload" id="fileToUpload"><br /><br />
            <input style="background-color:red;color:white" class="btn btn-info" type="submit" value="Upload PO" name="submit">
            <input type="hidden" name="_token" value="{{ Session::token() }}">
    </form>  
    <br /><br />

    
</div>
</div>
</div>

    <center><embed src="{{ asset('attachments/pos') }}/{{ $order->slug }}-{{ $order->attachedpo }}" width="300" height="400" alt="pdf" /></center>


<br />

<!--<img src="{{ asset('attachments/pos') }}/{{ $order->slug }}-{{ $order->attachedpo }}" />-->

<br />

<br />
<br />
<hr />

    <pre style="font-size:12px"></pre>
    @endif
@endsection