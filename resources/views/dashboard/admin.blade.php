@extends('layouts.root')

@section('content')    

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">




        @if ( Auth::user()->is_permission == '0')
        <div style="padding-top:200px;padding-bottom:200px">
            <a href="/">&larr; Go Back Home <i class="fas fa-home"></i></a>
<h3 class="alert alert-danger"><i class="fas fa-exclamation-triangle"></i> You don't have the right permissions to view this content, sorry!</h3> 
        </div>

        @else
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






@markdown

### {{ Auth::user()->name }}

ID# {{ Auth::user()->idnumber }}

Phone Number: {{ Auth::user()->phonenumber }}

Email: {{ Auth::user()->email }}

[Edit Profile]({{ route('profile.edit') }})

-------------------

@endmarkdown

Sales Group 



                                                <li style="font-size:12px">Today's Team Orders: <b>{{ $thisdayorders->count() }}</b></li>
                                                <li style="font-size:12px">Today's Team Sales: <b>{{ number_format($sumthisdayorders) }}.00 SAR</b></li>
                                                <li style="font-size:12px">Yesterday's Team Orders: <b>{{ $yesterdaysorders->count() }}</b></li>
                                                <li style="font-size:12px">Yesterday's Team Sales: <b>{{ number_format($sumyesterdaysales) }}.00 SAR</b></li>
                                                <li style="font-size:12px" class="">All Team Orders: <b>{{ $orderscount->count() }}</b></li>
                                                <li style="font-size:12px">All Team Sales: <b>{{ number_format($sumallorders) }}.00 SAR</b></li>
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




<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/series-label.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>

<!-- Additional files for the Highslide popup effect -->
<script src="https://www.highcharts.com/media/com_demo/js/highslide-full.min.js"></script>
<script src="https://www.highcharts.com/media/com_demo/js/highslide.config.js" charset="utf-8"></script>
<link rel="stylesheet" type="text/css" href="https://www.highcharts.com/media/com_demo/css/highslide.css" />
                </div>  
            </div>
        </div>


        <div style="padding-left:8px" class="row">

        <div style="padding-left:8px;padding-top:8px" class="col-sm-12">


    <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
<script>
Highcharts.chart('container', {

chart: {
    scrollablePlotArea: {
        minWidth: 700
    }
},

data: {
    csvURL: '<?php echo asset('csv/analytics.csv'); ?>',
    beforeParse: function (csv) {
        return csv.replace(/\n\n/g, '\n');
    }
},

title: {
    text: 'Yearly Sales Report'
},

subtitle: {
    text: 'Sales Stats'
},

xAxis: {
    tickInterval: 7 * 24 * 3600 * 500, // one week
    tickWidth: 0,
    gridLineWidth: 1,
    labels: {
        align: 'left',
        x: 3,
        y: -3
    }
},

yAxis: [{ // left y axis
    title: {
        text: null
    },
    labels: {
        align: 'left',
        x: 3,
        y: 16,
        format: '{value:.,0f}'
    },
    showFirstLabel: false
}, { // right y axis
    linkedTo: 0,
    gridLineWidth: 0,
    opposite: true,
    title: {
        text: null
    },
    labels: {
        align: 'right',
        x: -3,
        y: 16,
        format: '{value:.,0f}'
    },
    showFirstLabel: false
}],

legend: {
    align: 'left',
    verticalAlign: 'top',
    borderWidth: 0
},

tooltip: {
    shared: true,
    crosshairs: true
},

plotOptions: {
    series: {
        cursor: 'pointer',
        point: {
            events: {
                click: function (e) {
                    hs.htmlExpand(null, {
                        pageOrigin: {
                            x: e.pageX || e.clientX,
                            y: e.pageY || e.clientY
                        },
                        headingText: this.series.name,
                        maincontentText: Highcharts.dateFormat('%A, %b %e, %Y', this.x) + ':<br/> ' +
                            this.y + ' orders',
                        width: 200
                    });
                }
            }
        },
        marker: {
            lineWidth: 1
        }
    }
},

series: [{
    name: 'All orders',
    lineWidth: 4,
    marker: {
        radius: 4
    }
}, {
    name: 'New orders'
}]
});

</script>







<script>
var myLineChart = new Chart(ctx, {
    type: 'line',
    data: data,
    options: options
});
</script>

<canvas id="myChart"></canvas>
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [<?php echo $sumyesterdaysales; ?>, <?php echo $sumthisdayorders; ?>, <?php echo $sumallorders; ?>, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>











</div>
</div>


        </div><br />
    </div>
</div>

@endif

@endsection