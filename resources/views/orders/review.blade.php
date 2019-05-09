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
        



@if ( $order->urgent == 'on' )

<img src="{{ asset('images/assests/urgent.png') }}" width="220px" height="120px" />

@else

@endif


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
            <?php $oldprice = 0; ?>
            <?php $newprice = 0; ?>
            <?php $totalqtyprice = 0; ?>
            <?php $askedprice = 0; ?>
            <?php $totaldiscount = 0; ?>
            <?php $totaloriginal = 0; ?>
            
    <table  class="style31">
            <thead>
                <th>Mat. Description(Optional)</th>
                <th style="text-align:center">Material Code</th>
                <th style="text-align:center">Qty</th>
                <th style="text-align:center">Free</th>
                <th style="text-align:center">Old Price</th>
                <th style="text-align:center">New Price</th>
                <th style="text-align:center">Total Discount</th>
                <th style="text-align:center">Qty * Price</th>
            </tr>
        </thead>
        @foreach ($reviewitems as $reviewitem)
        <?php $totalqty += $reviewitem->itemqty; ?>
        <?php $totalfree += $reviewitem->freeitem; ?>
        <?php $oldprice += $reviewitem->itemoldprice; ?>
        <?php $newprice += $reviewitem->itemnewprice; ?>

        <?php $askedprice += $reviewitem->itemqty * $reviewitem->askedprice; ?>
        
        @if ($reviewitem->askedprice == 0)
        <?php $totalqtyprice += $reviewitem->itemqty * $reviewitem->itemnewprice; ?>
        @else
        <?php $totalqtyprice += $reviewitem->itemqty * $reviewitem->askedprice; ?>
        @endif



        
        @if ($reviewitem->askedprice == 0)
        <?php $totaldiscount += "0"; ?>

        @else
        <?php $totaldiscount -= ($reviewitem->itemnewprice * $reviewitem->itemqty) - ($reviewitem->askedprice * $reviewitem->itemqty); ?>



        @endif
        <?php $totaloriginal += $reviewitem->itemnewprice * $reviewitem->itemqty; ?>
            @include('dashboard/partials/orderitemsreviewblock')
        @endforeach
        <tfoot>
            <tr>
                <th style="text-align:center"><b>Totals</b></th>
                <th></th>
                <td style="text-align:center">{{ $totalqty }}</td>
                <td style="text-align:center">{{ $totalfree }}</td>
                <td style="text-align:center">{{ number_format($oldprice) }}.00 SAR</td>
                <td style="text-align:center">{{ number_format($newprice) }}.00 SAR</td>
                <th style="text-align:center">{{ number_format($totaldiscount) }}.00 SAR</th>
                <th style="text-align:center">{{ number_format($totalqtyprice) }}.00 SAR</th>
            </tr>
        </tfoot>
    </table>




        @if ($totalfree == 0)
        <br />
        <span style="float:right" class="badge badge-info">No Free Cases</span>
        @else
        <br />
        <div style="font-size:10px">

        <span style="float:right;color:black" class="badge badge-success">Total Of {{ $totalfree }} Free Cases</span>
        </div>
        @endif
        @if ($askedprice == 0)
        <br />
        <span style="float:right" class="badge badge-secondary">No Discount</span>
        @else
        <br />
        <div style="font-size:10px">

        <span style="float:right" class="badge badge-light">Original Total price {{ number_format($totaloriginal) }}.00 SAR</span>&nbsp;&nbsp;&nbsp;&nbsp;        <br />
        <span style="float:right" class="badge badge-info">Total Discount {{ number_format($totaldiscount) }}.00 SAR</span>&nbsp;&nbsp;&nbsp;&nbsp;        <br />
        <span style="float:right" class="badge badge-danger">Total price {{ number_format($totalqtyprice) }}.00 SAR</span>&nbsp;&nbsp;&nbsp;&nbsp;        <br />



        </div>
            @endif


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
    <input hidden name="oldprice" value="{{ $oldprice }}">
    <input hidden name="newprice" value="{{ $newprice }}">
    <input hidden name="totalqtyprice" value="{{ $totalqtyprice }}">
    <input hidden name="totalitems" value="{{ $orderitems->count() - 1 }}">
    <input hidden name="totalfree" value="{{ $totalfree }}">
    @if ( $totaldiscount == '0' )
    <input hidden name="discount" value="0.00">
    @else
    <input hidden name="discount" value="{{ $totaldiscount }}">
    @endif
    <input hidden name="totaloriginal" value="{{ $totaloriginal }}">
    
<div style="padding-left:20px">
<h2>Uplaod PO Attachment <span style="color:red">*</span></h2>
<p>Allowed Formats:</p> <span><pre>JPG, JPEG, PNG, GIF and PDF</pre> </span>
</div>
<div style="float:right;padding-right:20px">
    <button accesskey="a" style="font-size:16px;padding-right:6px;padding-left:6px;padding-bottom:6px;padding-top:6px;" class="btn btn-primary" type="submit"> Submit </button>
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
            <input accesskey="l" style="background-color:red;color:white" class="btn btn-info" type="submit" value="Upload PO" name="submit">
            <input type="hidden" name="_token" value="{{ Session::token() }}">
    </form>  
    <br /><br />

    
</div>
</div>
</div>

@if($order->attachedpo == null)

@else
    <center><embed src="{{ asset('attachments/pos') }}/{{ $order->slug }}-{{ $order->attachedpo }}" width="300" height="400" alt="pdf" /></center>
@endif

<br />

<!--<img src="{{ asset('attachments/pos') }}/{{ $order->slug }}-{{ $order->attachedpo }}" />-->

<br />

<br />
<br />
<hr />

    <pre style="font-size:12px"></pre>
    @endif
@endsection