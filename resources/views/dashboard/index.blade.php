@extends('layouts.app')

@section('content')    

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                

                <div class="card-header"><i class="fas fa-tachometer-alt"></i> <strong><span style="font-size:18px">Dashboard</span></strong></div>
                <div style="float:right;padding-left:20px" class="input-group">
                <form class="form-inline input" role="search" action="{{ route('search.pos') }}">
                    <input class="form-control" width="80%" name="query" type="text" placeholder="Search Orders" />
                    <input style="background-color:black" value="Search" type="submit" class="form-control btn btn-primary" />
                </form>
            </div>
                    <div class="card-body">
                        <center>
                        <span class="nav-item"><a style="display: inline-block;" class="inline nav-link" href="{{ route('dashboard.orders', ['idnumber' => Auth::user()->idnumber ]) }}"><i class="fas fa-asterisk"></i> My Orders</a><a style="display: inline-block;" class="inline nav-link" href="{{ route('dashboard.archive', ['id' => $id->idnumber]) }}"><i class="fas fa-archive"></i> Orders Archive</a><a style="display: inline-block;" class="inline nav-link" href=""><i class="fas fa-search"></i> Search Database</a></span>
                            <div class="row justify-content-left">
                                </center>
                                <div style="padding-left:8px" class="row">
                                    <div class="card col-lg-4">
                                        <div style="padding-top:14px;padding-bottom:8px">
                                            <img style="border-radius:50%" width="125px" height="125px" src="{{ asset('images/uploads/avatars') }}/{{ Auth::user()->photo }}" />                    
                                        </div>
            @if ( Auth::user()->is_permission == '1')


                @include(dashboard.manager)

            @else

            @auth

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
                                                <br />
                                            <form action="{{ url('/export-orders-csv/' . Auth::user()->idnumber . '/completed') }}" method="GET">
                                                <button class="btn btn-sm btn-outline-secondary">Export Today's Report</button>
                                            </div>
                                        <div style="padding-left:8px;padding-top:8px" class="col-sm-8">

                                    <br />
                                    <strong><span><span>JustCeated, Edititng and Reviewing orders are listed here. &darr;</span><br />
                                        <table id="myTable">
                                            <thead>
                                                <tr>
                                                    <th>PO#</th>
                                                    <th>Branch#</th>
                                                    <th>Status</th>
                                                    <th>Created</th>
                                                    <th>Updated</th>
                                                    <th style="text-align:center">Delete PO</th>
                                                </tr>
                                            </thead>
                                            @foreach ($todaysjustcreatedorders as $todaysjustcreatedorder)
                                                @include('dashboard/partials/todaysjustcreatedordersblock')
                                            @endforeach
                                            @foreach ($todayseditingorders as $todayseditingorder)
                                                @include('dashboard/partials/todayseditingordersblock')
                                            @endforeach	
                                            @foreach ($todaysreviewingorders as $todaysreviewingorder)
                                                @include('dashboard/partials/todaysreviewingordersblock')
                                            @endforeach		
                                        </table><br />
                                        <strong><span>Submitted and Completed orders are listed here. &darr;</span><br /> 
                                        <span id="submitted"></span>
                                        @if (Session::has('alert'))
                                        <!--<div class="alert alert-success">{{ Session::get('alert') }}</div>-->
                                        @endif

                                        <?php $totalqty = 0; ?>
                                        <?php $totalfree = 0; ?>
                                        <?php $totalprice = 0; ?>
                                        <?php $totalqtyprice = 0; ?>
                                            <table id="myTable">
                                                    <thead>
                                                        <tr>
                                                            <th>PO#</th>
                                                            <th>Branch#</th>
                                                            <th style="text-align:center">Items Count</th>
                                                            <th style="text-align:center">Qtys.</th>
                                                            <th style="text-align:center">Tot. Price</th>
                                                            <th style="text-align:center">Submitted/Completed@</th>
                                                        </tr>
                                                    </thead>
                                                @foreach ($todayssubmittedorders as $todayssubmittedorder)
                                                    @include('dashboard/partials/todayssubmittedordersblock')
                                                @endforeach	
                                                @foreach ($todayscompletedorders as $todayscompletedorder)
                                                    @include('dashboard/partials/todayscompletedordersblock')
                                                @endforeach	
                                                <tfoot>
                                                    <tr>
                                                        <th style="text-align:center"></th>
                                                        <td style="text-align:center"><b>Totals</b></td>
                                                        <th style="text-align:center">{{ $sumthisdayfreeorders }}</th>
                                                        <th style="text-align:center">{{ $sumthisdayordersqty }}</th>
                                                        <th style="text-align:center">{{ number_format($sumthisdayorders) }}.00 SAR</th>
                                                    </tr>
                                                </tfoot>
                                            </table>               
                                            </div>
                                        </div>
                                        <a href="#back-top" class="go-top"><i style="font-size: 22px; top: -26px;" class="glyphicon glyphicon-circle-arrow-up"></i></a>
                                <b><p style="padding-left:45px"></p></b>
                                <div class="col-md-2">
                                </div>

                                
@markdown

## Sales By Customer

@endmarkdown


                                            <table id="myTable">
                                                    <thead>
                                                        <tr>
                                                            <th>Customer#Name</th>
                                                            <th>SalesGroup</th>
                                                            <th>DC</th>
                                                            <th>Office</th>
                                                            <th>Sales</th>
                                                        </tr>
                                                    </thead>
                                                @foreach ($branches_list as $branch)
                                                    <tbody>
                                                        <tr>
                                                            <td>{{ $branch->branchnumber }} - {{ $branch->branchname }}</td>
                                                            <td>{{ $branch->salesgroup }}</td>
                                                            <td>{{ $branch->dc }}</td>
                                                            <td>{{ $branch->office }}</td>
                                                            <td>N/A .00 SAR</td>
                                                        </tr>
                                                    </tbody>
                                                @endforeach	
                                                <tfoot>
                                                        <tr>
                                                            <th>Totals</th>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>N/A .00 SAR</td>
                                                        </tr>
                                                    </tfoot>
                                            </table>  
                                        </div>
                                    </div>
                                </div>

<br />
<hr />




@endauth
@endif







                </div>
            </div>
        </div><br />
    </div>
</div>
@endsection