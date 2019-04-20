@extends('layouts.app')

@section('content')    

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><i class="fas fa-tachometer-alt"></i> <strong><span style="font-size:18px">Dashboard</span></strong></div>
                <div class="card-body">
                    <center>
                <span class="nav-item"><a style="display: inline-block;" class="inline nav-link" href="{{ route('dashboard.orders', ['idnumber' => Auth::user()->idnumber ]) }}"><i class="fas fa-asterisk"></i> My Orders</a><a style="display: inline-block;" class="inline nav-link" href=""><i class="fas fa-archive"></i> Orders Archive</a><a style="display: inline-block;" class="inline nav-link" href=""><i class="fas fa-search"></i> Search Database</a></span>
                <div class="row justify-content-left">
</center>
                <div style="padding-left:8px" class="row">
                    <div class="card col-lg-4">
                        <div style="padding-top:14px;padding-bottom:8px">
                            <img style="border-radius:50%" width="125px" height="125px" src="{{ asset('images/uploads/avatars') }}/{{ Auth::user()->photo }}" />                    
                        </div>
@markdown

### {{ Auth::user()->name }}

ID# {{ Auth::user()->idnumber }}

Phone Number: {{ Auth::user()->phonenumber }}

Email: {{ Auth::user()->email }}

[Edit Profile]({{ route('profile.edit') }})

-------------------

@endmarkdown




<li style="font-size:12px">Today's Orders: <b>{{ $thisdayorders->count() }}</b></li>
<li style="font-size:12px">Today's Sales: <b>{{ number_format($sumthisdayorders) }}.00 SAR</b></li>

<li style="font-size:12px">Yesterday's Orders: <b>{{ $yesterdaysorders->count() }}</b></li>

<li style="font-size:12px">Yesterday's Sales: <b>{{ number_format($sumyesterdaysales) }}.00 SAR</b></li>

<li style="font-size:12px" class="">All Orders: <b>{{ $orderscount->count() }}</b></li>

<li style="font-size:12px">All Sales: <b>{{ number_format($sumallorders) }}.00 SAR</b></li>

<span style="padding-left:34px" class="justcreated"> - JustCreated Orders {{ $justcreatedorderscount->count() }}</span>
<span style="padding-left:34px" class="editing"> - Editing Orders {{ $editingorderscount->count() }}</span>
<span style="padding-left:34px" class="reviewing"> - Reviewing Orders {{ $reviewingorderscount->count() }}</span>
<span style="padding-left:34px" class="submitted"> - Submitted Orders {{ $submittedorderscount->count() }}</span>
<span style="padding-left:34px" class="completed"> - Completed Orders {{ $completedorderscount->count() }}</span>


</div>
<div style="padding-left:8px;padding-top:8px" class="col-sm-7">

@markdown

##### All archived orders are listed here.

@endmarkdown
<?php $totalqty = 0; ?>
<?php $totalfree = 0; ?>
<?php $totalprice = 0; ?>
        <table id="myTable">
            <thead>
                <tr>
                    <th>PO#</th>
                    <!--<th>Status</th>-->
                    <th>Branch#</th>
                    <th>Items Count</th>
                    <th>Qtys.</th>
                    <th>Tot. Price</th>
                    <th>Completed</th>
                </tr>
            </thead>
           
            @foreach ($yesterdaysorders as $yesterdaysorder)
                @include('dashboard/partials/archivedordersblock')
                <?php $totalqty += $yesterdaysorder->totalitems; ?>
                <?php $totalfree += $yesterdaysorder->totalqty; ?>
                <?php $totalprice += $yesterdaysorder->totalprice; ?>
            @endforeach	
            <tfoot>
                <tr>
                    <th style="font-size:10px;text-align:right"><strong>Tot</strong></th>
                    <th style="font-size:10px;text-align:left;padding-left:0;"><strong>als</strong></th>
                    <td style="font-size:10px;text-align:center"><strong>{{ $totalqty }}</strong></td>
                    <td style="font-size:10px;text-align:center"><strong>{{ $totalfree }}</strong></td>
                    <td style="font-size:10px;text-align:center"><strong>{{ number_format($totalprice) }}.00 SAR</strong></td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>


<a href="#back-top" class="go-top"><i style="font-size: 22px; top: -26px;" class="glyphicon glyphicon-circle-arrow-up"></i></a>


            <b><p style="padding-left:45px"></p></b>
                <div class="col-md-2">

                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div><br />
    </div>
    
</div>
@endsection