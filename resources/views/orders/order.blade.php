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

                                                            @if ( $order->urgent == 'on' )
                                                            <strong><td style="text-align:center;padding-left:2px;padding-right:2px" class="badge badge-danger">URGENT</td></strong>
                                                            @else
                                                            <strong><td style="text-align:center;padding-left:2px;padding-right:2px" class="badge badge-dark">Regular</td></strong>
                                                            @endif
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
                                    @if (!$orderitems->count())
                                        <p>No results found, sorry</p> <span>&larr; <a href="/">Back</a></span><span style="float:right"></span><hr />
                                    @else
                                    <?php $totalitems = 0; ?>
                                    <?php $totalqty = 0; ?>
                                    <?php $totalfree = 0; ?>
                                    <?php $oldprice = 0; ?>
                                    <?php $newprice = 0; ?>
                                    <?php $totalqtyprice = 0; ?>
                                    <?php $askedprice = 0; ?>
                                    <?php $totaldiscount = 0; ?>
                                    <?php $totaloriginal = 0; ?>
                                    <?php $itemprice = 0; ?>
                                    
                                    <div style="padding-left:8px;padding-top:8px" class="col-sm-12">
                                    @if (Session::has('submitted'))
                                        <div class="alert alert-danger">{{ Session::get('submitted') }}</div>
                                    @endif
                                        <table width="100%" class="table-responsive-sm" id="myTable">
                                            @foreach ($orderitems as $orderitem)
                                            <?php $totalqty += $orderitem->itemqty; ?>
                                            <?php $totalfree += $orderitem->freeitem; ?>
                                            <?php $oldprice += $orderitem->itemoldprice; ?>
                                            <?php $newprice += $orderitem->itemnewprice; ?>
                                            @if ($orderitem->askedprice == 0)
                                            <?php $totalqtyprice += $orderitem->itemqty * $orderitem->itemnewprice; ?>
                                            @else
                                            <?php $totalqtyprice += $orderitem->itemqty * $orderitem->askedprice; ?>
                                            @endif
                                            <?php $askedprice += $orderitem->askedprice  ?>
                                            @if ($orderitem->askedprice == 0)
                                            <?php $totaldiscount += "0"; ?>
                                            @else
                                            <?php $totaldiscount -= ($orderitem->itemnewprice * $orderitem->itemqty) - ($orderitem->askedprice * $orderitem->itemqty); ?>
                                            @endif
                                            <?php $totaloriginal += $orderitem->itemnewprice * $orderitem->itemqty; ?>
                                                @include('dashboard/partials/orderitemsblock')
                                            @endforeach	
                                            <tfoot>
                                                <tr>
                                                    <td><b>Total</b></td>
                                                    <th style="text-align:center">{{ $totalqty }}</th>
                                                    <th style="text-align:center">{{ $totalfree }}</th>
                                                    <th style="text-align:center">{{ number_format($oldprice) }}.00 SAR</th>
                                                    <th style="text-align:center">{{ number_format($newprice) }}.00 SAR</th>
                                                    <th style="text-align:center">{{ number_format($askedprice) }}.00 SAR</th>
                                                    <th style="text-align:center">{{ number_format($totalqtyprice) }}.00 SAR</th>
                                                </tr>
                                                </tr>
                                                <tr>
                                                    <th>Item# - Desc.</th>
                                                    <th style="text-align:center">Qty</th>
                                                    <th style="text-align:center">Free</th>
                                                    <th style="text-align:center">Old Price</th>
                                                    <th style="text-align:center">New Price</th>
                                                    <th style="text-align:center">Asked Price</th>
                                                    <th style="text-align:center">Qty * Price</th>
                                                    <!--<th>Delete</th>-->
                                                </tr>
                                            </tfoot>
                                        </table>
                                    @if ($totalfree == 0)
                                        <br />
                                        <span style="float:right" class="badge badge-info">No Free Cases</span>
                                        @else
                                        <br />
                                        <span style="float:right;color:black" class="badge badge-success">Total Of {{ $totalfree }} Free Cases</span>
                                        @endif
                                        @if ($askedprice == 0)
                                        <br />
                                        <span style="float:right" class="badge badge-secondary">No Discount</span>
                                        @else
                                        <br />
                                        <span style="float:right" class="badge badge-danger">Total price {{ number_format($totalqtyprice) }}.00 SAR</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span style="float:right" class="badge completed">Total Discount {{ number_format($totaldiscount) }}.00 SAR</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span style="float:right" class="badge badge-light">Original Total price {{ number_format($totaloriginal) }}.00 SAR</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                        @endif
                                    @endif
                                    <br /><hr />
                        <a href="{{ url('/orders/order/' . $order->slug . '/review') }}"><i class="{{ strtolower($order->status) }}"> Finish review your order and submit it</i></a>
                        @elseif ($order->status == 'Editing')
                            @if (!$orderitems->count())
                                <p>No results found, sorry</p> <span>&larr; <a href="/">Back</a></span><span style="float:right"></span><hr />
                            @else
                                    <?php $totalitems = 0; ?>
                                    <?php $totalqty = 0; ?>
                                    <?php $totalfree = 0; ?>
                                    <?php $oldprice = 0; ?>
                                    <?php $newprice = 0; ?>
                                    <?php $totalqtyprice = 0; ?>
                                    <?php $askedprice = 0; ?>
                                    <?php $totaldiscount = 0; ?>
                                    <?php $totaloriginal = 0; ?>
                                    <?php $itemprice = 0; ?>
                                    <div style="padding-left:8px;padding-top:8px" class="col-sm-12">
                                    @if (Session::has('submitted'))
                                        <div class="alert alert-danger">{{ Session::get('submitted') }}</div>
                                    @endif
                                    <table width="100%" class="table-responsive-sm" id="myTable">
                                        @foreach ($orderitems as $orderitem)
                                        <?php $totalqty += $orderitem->itemqty; ?>
                                        <?php $totalfree += $orderitem->freeitem; ?>
                                        <?php $oldprice += $orderitem->itemoldprice; ?>
                                        <?php $newprice += $orderitem->itemnewprice; ?>
                                        @if ($orderitem->askedprice == 0)
                                        <?php $totalqtyprice += $orderitem->itemqty * $orderitem->itemnewprice; ?>
                                        @else
                                        <?php $totalqtyprice += $orderitem->itemqty * $orderitem->askedprice; ?>
                                        @endif
                                        <?php $askedprice += $orderitem->askedprice  ?>
                                        @if ($orderitem->askedprice == 0)
                                        <?php $totaldiscount += "0"; ?>
                                        @else
                                        <?php $totaldiscount -= ($orderitem->itemnewprice * $orderitem->itemqty) - ($orderitem->askedprice * $orderitem->itemqty); ?>
                                        @endif
                                        <?php $totaloriginal += $orderitem->itemnewprice * $orderitem->itemqty; ?>
                                            @include('dashboard/partials/orderitemsblock')
                                        @endforeach	
                                        <tfoot>
                                            <tr>
                                                <td><b>Total</b></td>
                                                <th style="text-align:center">{{ $totalqty }}</th>
                                                <th style="text-align:center">{{ $totalfree }}</th>
                                                <th style="text-align:center">{{ number_format($oldprice) }}.00 SAR</th>
                                                <th style="text-align:center">{{ number_format($newprice) }}.00 SAR</th>
                                                <th style="text-align:center">{{ number_format($askedprice) }}.00 SAR</th>
                                                <th style="text-align:center">{{ number_format($totalqtyprice) }}.00 SAR</th>
                                            </tr>
                                            </tr>
                                            <tr>
                                                <th>Item# - Desc.</th>
                                                <th style="text-align:center">Qty</th>
                                                <th style="text-align:center">Free</th>
                                                <th style="text-align:center">Old Price</th>
                                                <th style="text-align:center">New Price</th>
                                                <th style="text-align:center">Asked Price</th>
                                                <th style="text-align:center">Qty * Price</th>
                                                <!--<th>Delete</th>-->
                                            </tr>
                                        </tfoot>
                                    </table>
                                    @if ($totalfree == 0)
                                        <br />
                                        <span style="float:right" class="badge badge-info">No Free Cases</span>
                                        @else
                                        <br />
                                        <span style="float:right;color:black" class="badge badge-success">Total Of {{ $totalfree }} Free Cases</span>
                                        @endif
                                        @if ($askedprice == 0)
                                        <br />
                                        <span style="float:right" class="badge badge-secondary">No Discount</span>
                                        @else
                                        <br />
                                        <span style="float:right" class="badge badge-danger">Total price {{ number_format($totalqtyprice) }}.00 SAR</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span style="float:right" class="badge completed">Total Discount {{ number_format($totaldiscount) }}.00 SAR</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span style="float:right" class="badge badge-light">Original Total price {{ number_format($totaloriginal) }}.00 SAR</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                        @endif                                    
                                    @endif
                                    <br /><hr />
                        <a href="{{ url('/orders/order/' . $order->slug . '/edit') }}"><i class="fas fa-edit"> Finish <span class="editing">editing</span> your order for <span class="reviewing">review</span> and <span class="submitted"> submittion.</span></i></a>
                        @elseif ($order->status == 'Submitted')
                            @if (!$orderitems->count())
                                <p>No results found, sorry</p> <span>&larr; <a href="/">Back</a></span><span style="float:right"></span><hr />
                            @else
                                    <?php $totalitems = 0; ?>
                                    <?php $totalqty = 0; ?>
                                    <?php $totalfree = 0; ?>
                                    <?php $oldprice = 0; ?>
                                    <?php $newprice = 0; ?>
                                    <?php $totalqtyprice = 0; ?>
                                    <?php $askedprice = 0; ?>
                                    <?php $totaldiscount = 0; ?>
                                    <?php $totaloriginal = 0; ?>
                                    <?php $itemprice = 0; ?>
                                    <div style="padding-left:8px;padding-top:8px" class="col-sm-12">
                                    @if (Session::has('submitted'))
                                        <div class="alert alert-danger">{{ Session::get('submitted') }}</div>
                                    @endif
                                    <table width="100%" class="table-responsive-sm" id="myTable">
                                        @foreach ($orderitems as $orderitem)
                                        <?php $totalqty += $orderitem->itemqty; ?>
                                        <?php $totalfree += $orderitem->freeitem; ?>
                                        <?php $oldprice += $orderitem->itemoldprice; ?>
                                        <?php $newprice += $orderitem->itemnewprice; ?>
                                        @if ($orderitem->askedprice == 0)
                                        <?php $totalqtyprice += $orderitem->itemqty * $orderitem->itemnewprice; ?>
                                        @else
                                        <?php $totalqtyprice += $orderitem->itemqty * $orderitem->askedprice; ?>
                                        @endif
                                        <?php $askedprice += $orderitem->askedprice  ?>
                                        @if ($orderitem->askedprice == 0)
                                        <?php $totaldiscount += "0"; ?>
                                        @else
                                        <?php $totaldiscount -= ($orderitem->itemnewprice * $orderitem->itemqty) - ($orderitem->askedprice * $orderitem->itemqty); ?>
                                        @endif
                                        <?php $totaloriginal += $orderitem->itemnewprice * $orderitem->itemqty; ?>
                                            @include('dashboard/partials/orderitemsblock')
                                        @endforeach	
                                        <tfoot>
                                            <tr>
                                                <td><b>Total</b></td>
                                                <th style="text-align:center">{{ $totalqty }}</th>
                                                <th style="text-align:center">{{ $totalfree }}</th>
                                                <th style="text-align:center">{{ number_format($oldprice) }}.00 SAR</th>
                                                <th style="text-align:center">{{ number_format($newprice) }}.00 SAR</th>
                                                <th style="text-align:center">{{ number_format($askedprice) }}.00 SAR</th>
                                                <th style="text-align:center">{{ number_format($totalqtyprice) }}.00 SAR</th>
                                            </tr>
                                            </tr>
                                            <tr>
                                                <th>Item# - Desc.</th>
                                                <th style="text-align:center">Qty</th>
                                                <th style="text-align:center">Free</th>
                                                <th style="text-align:center">Old Price</th>
                                                <th style="text-align:center">New Price</th>
                                                <th style="text-align:center">Asked Price</th>
                                                <th style="text-align:center">Qty * Price</th>
                                                <!--<th>Delete</th>-->
                                            </tr>
                                        </tfoot>
                                    </table>
                                        @if ($totalfree == 0)
                                        <br />
                                        <span style="float:right" class="badge badge-info">No Free Cases</span>
                                        @else
                                        <br />
                                        <span style="float:right;color:black" class="badge badge-success">Total Of {{ $totalfree }} Free Cases</span>
                                        @endif
                                        @if ($askedprice == 0)
                                        <br />
                                        <span style="float:right" class="badge badge-secondary">No Discount</span>
                                        @else
                                        <br />
                                        <span style="float:right" class="badge badge-danger">Total price {{ number_format($totalqtyprice) }}.00 SAR</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span style="float:right" class="badge completed">Total Discount {{ number_format($totaldiscount) }}.00 SAR</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span style="float:right" class="badge badge-light">Original Total price {{ number_format($totaloriginal) }}.00 SAR</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                        @endif
                                    @endif
                                    <br /><hr />
                                    @if ( $order->attachedpo == null )
                                    @else
                                    <embed src="{{ asset('attachments/pos') }}/{{ $order->slug }}-{{ $order->attachedpo }}" width="500" height="400" alt="pdf" />
                                    @endif
                                    <br /><hr />
                        <i class="fas fa-exclamation-triangle"></i> You Cannot <span class="editing">edit</span> or <span class="reviewing">review</span> <span class="submitted">submitted</span> or <span class="completed">completed</span> orders
                        @elseif ($order->status == 'Completed')
                            @if (!$orderitems->count())
                                <p>No results found, sorry</p> <span>&larr; <a href="/">Back</a></span><span style="float:right"></span><hr />
                            @else
                                    <?php $totalqty = 0; ?>
                                    <?php $totalfree = 0; ?>
                                    <?php $oldprice = 0; ?>
                                    <?php $newprice = 0; ?>
                                    <?php $totalqtyprice = 0; ?>
                                    <?php $askedprice = 0; ?>
                                    <?php $totaldiscount = 0; ?>
                                    <?php $totaloriginal = 0; ?>
                                    <?php $itemprice = 0; ?>
                                    <div style="padding-left:8px;padding-top:8px" class="col-sm-12">
                                    @if (Session::has('submitted'))
                                        <div class="alert alert-danger">{{ Session::get('submitted') }}</div>
                                    @endif
                                    <table width="100%" class="table-responsive-sm" id="myTable">
                                        <thead>
                                            <tr>
                                                <th>Item# - Desc.</th>
                                                <th style="text-align:center">Qty</th>
                                                <th style="text-align:center">Free</th>
                                                <th style="text-align:center">Old Price</th>
                                                <th style="text-align:center">New Price</th>
                                                <th style="text-align:center">Total Discount</th>
                                                <th style="text-align:center">Total Price</th>
                                                <!--<th>Delete</th>-->
                                            </tr>
                                        </thead>
                                        @foreach ($orderitems as $orderitem)
                                        <?php $totalqty += $orderitem->itemqty; ?>
                                        <?php $totalfree += $orderitem->freeitem; ?>
                                        <?php $oldprice += $orderitem->itemoldprice; ?>
                                        <?php $newprice += $orderitem->itemnewprice; ?>
                                        @if ($orderitem->askedprice == 0)
                                        <?php $totalqtyprice += $orderitem->itemqty * $orderitem->itemnewprice; ?>
                                        @else
                                        <?php $totalqtyprice += $orderitem->itemqty * $orderitem->askedprice; ?>
                                        @endif
                                        <?php $askedprice += $orderitem->askedprice  ?>
                                        @if ($orderitem->askedprice == 0)
                                        <?php $totaldiscount += "0"; ?>
                                        @else
                                        <?php $totaldiscount -= ($orderitem->itemnewprice * $orderitem->itemqty) - ($orderitem->askedprice * $orderitem->itemqty); ?>
                                        @endif
                                        <?php $totaloriginal += $orderitem->itemnewprice * $orderitem->itemqty; ?>
                                        @include('dashboard/partials/orderitemsblock')
                                        @endforeach	
                                        <tfoot>
                                            <tr>
                                                <td><b>Total</b></td>
                                                <th style="text-align:center">{{ $totalqty }}</th>
                                                <th style="text-align:center">{{ $totalfree }}</th>
                                                <th style="text-align:center">{{ number_format($oldprice) }}.00 SAR</th>
                                                <th style="text-align:center">{{ number_format($newprice) }}.00 SAR</th>
                                                <th style="text-align:center">{{ number_format($askedprice) }}.00 SAR</th>
                                                <th style="text-align:center">{{ number_format($totalqtyprice) }}.00 SAR</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    @if ($totalfree == 0)
                                        <br />
                                        <span style="float:right" class="badge badge-info">No Free Cases</span>
                                        @else
                                        <br />
                                        <span style="float:right;color:black" class="badge badge-success">Total Of {{ $totalfree }} Free Cases</span>
                                        @endif
                                        @if ($askedprice == 0)
                                        <br />
                                        <span style="float:right" class="badge badge-secondary">No Discount</span>
                                        @else
                                        <br />
                                        <span style="float:right" class="badge badge-danger">Total price {{ number_format($totalqtyprice) }}.00 SAR</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span style="float:right" class="badge completed">Total Discount {{ number_format($totaldiscount) }}.00 SAR</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span style="float:right" class="badge badge-light">Original Total price {{ number_format($totaloriginal) }}.00 SAR</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                        @endif
                                    @endif
                                @if ( $order->attachedpo == null )

                                @else
                                <embed src="{{ asset('attachments/pos') }}/{{ $order->slug }}-{{ $order->attachedpo }}" width="500" height="400" alt="pdf" />
                                @endif
                                <br /><hr />
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