@extends('layouts.app')

@section('content')    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 ml-sm-auto col-lg-12">
            <div class="card">
                <div class="card-header">Orders List</div>
                    <div class="card-body">
                        @if (!$orders->count())
                            <p>No results found, sorry</p> <span>&larr; <a href="/">Back</a></span><span style="float:right"><hr />
                        @else

@markdown

#### Orders byStatus

---------------------------------------

@endmarkdown
                        <!-- Page, "data-page" contains page name -->
                        <div class="content-block">
                            <main role="main" class="">
                                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                                        <div class="table-responsive">
                                            <table class="table-dark table-responsive-sm dark" id="myTable">
                                                <thead style="font-size:12px">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Order#</th>
                                                        <th>By#ID</th>
                                                        <th>BranchName#Number</th>
                                                        <th>PO#</th>
                                                        <th>Urgent</th>
                                                        <th>Slug</th>
                                                        <th>Status</th>
                                                        <th>Created</th>
                                                        <th>Updated</th>
                                                    </tr>
                                                </thead>
                                                    @foreach ($orders as $order)
                                                        @include('orders/partials/orderblock')
                                                    @endforeach	
                                            </table>
                                        </div>					
                                                    @endif
                                    </div>  
                                <center>{!! $orders->render() !!}</center>
                            <br /><hr />
@markdown

#### Recently Created Orders

---------------------------------------

@endmarkdown
                            <button type="button" class="btn btn-default" aria-label="Left Align">
                            <span class="glyphicon glyphicon-align-left" aria-hidden="true"></span>
                            </button>

                            <button type="button" class="btn btn-default btn-lg">
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span> Star
                            </button>
                            <div class="table-responsive">
                                <table class="table table-striped table-sm">
                                    <thead>
                                        <tr>
                                        <th>#</th>
                                        <th>Order#</th>
                                        <th>By#ID</th>
                                        <th>BranchName#Number</th>
                                        <th>PO#</th>
                                        <th>Urgent</th>
                                        <th>Slug</th>
                                        <th>Status</th>
                                        <th>Created</th>
                                        <th>Updated</th>
                                        </tr>
                                    </thead>
                                    @foreach ($orders as $order)
                                        @include('orders/partials/orderblock')
                                    @endforeach                               
                                </table>
                            </div>   
                                 <!-- Scrollable page content -->
                            <hr />
                            <h4 class="h4">Orders Report</h4>
                            <hr />
                            <div class="btn-toolbar mb-2 mb-md-0">
                                <div class="btn-group mr-2">
                                    <button class="btn btn-sm btn-outline-secondary">Share</button>
                                    <button class="btn btn-sm btn-outline-secondary">Export</button>
                                </div>
                                <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                                    <span data-feather="calendar"></span>
                                    This week
                                </button>
                            </div>
                        </div>
                        <canvas class="my-4" id="myChart" width="900" height="380"></canvas>
                        </main>
                    </div>
                </div>
            </div>     
        </div>
        </div> 
        </div> 
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace()
    </script>
    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script>
        var ctx = document.getElementById("myChart");
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                datasets: [{
                    data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
                    lineTension: 0,
                    backgroundColor: 'transparent',
                    borderColor: '#007bff',
                    borderWidth: 4,
                    pointBackgroundColor: '#007bff'
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: false
                        }
                    }]
                },
                legend: {
                    display: false,
                }
            }
        });
    </script>
@endsection


