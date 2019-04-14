
@extends('layouts.app')
@section('content')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SunbulahGroup</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .full-height {
                height: 100vh;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .position-ref {
                position: relative;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .top-left {
                position: absolute;
                left: 10px;
                top: 18px;
            }
            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
<!--<header class="header">
<form class="navbar-form navbar-left" role="search" action="{{ route('search.items') }}">
            <div class="form-group">
                <input type="text" name="query" class="form-control" placeholder="Find People">
            </div>
            <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
        </form>
</header>-->
<div class="container">
    <div class="row justify-content-center">

    @if (Route::has('login'))
                    @auth
    <!--<div class="col-md-12">
    <span style="float:left"><a class="btn btn-primary" href="{{ route('items.add') }}">+ Add Product</a></span>  &nbsp; &nbsp; &nbsp; <span style="float:center"><a class="btn btn-primary" href="{{ route('items.index') }}">List Products</a></span> &nbsp; &nbsp; &nbsp; <span style="float:right"><a class="btn btn-primary" href="/submit-rtv">Submit a RTV Request &rarr;</a></span><br /><hr />

           <form method="get" action="/add-item"><span><button type="submit" class="btn btn-primary">Submit a RTV Request</button></span> </form>   <span><form method="get" action="/items"><button type="submit" class="btn btn-primary">Submit a RTV Request</button></form></span>    <span><form method="get" action="/submit-rtv"><button type="submit" class="btn btn-primary">Submit a RTV Request</button></form></span>
        </div>-->
    <div class="col-md-12">
        <div class="card">


            <!--<div class="top-left">
	<a href="{{ url('/') }}">SunbulahGroup</a>
	</div>-->
    <div class="top-right links">
</div>
        <div class="card-header"><span style="font-size:24px"><i class="fas fa-history"></i> Orders Summery.</div></span>
            <div class="card-body">
            <!-- If user loggedIn show below content until endShow part 
            //
            //
            //
            // endShow -->





            @if (!$submittedorders->count())
                        <p>There are no submitted orders yet!</p>
                    @else

                    @if (Session::has('success'))
                            <div class="alert alert-success">{{ Session::get('success') }}</div>
                            <br />
                    @endif

@markdown

#### Just Submitted Orders [0]

@endmarkdown




            <?php $totalqty = 0; ?>
            <?php $totalitems = 0; ?>
            <?php $totalprice = 0; ?>
            <?php $totalqtyprice = 0; ?>      
                            <table class="table-responsive-sm processed" id="myTable">
                    

                                <div class="media">
                                <a class="pull-left" href="">
                                </a>
                                <div class="media-body">
                                        <thead style="font-size:12px">
                                    <tr>
                                        <th>By#ID</th>
                                        <th>PO#</th>
                                        <th>BranchName#Number</th>
                                        <th>Total Items</th>
                                        <th>Total Qtys</th>
                                        <th>Total Price</th>
                                        <th>Qty * Price</th>
                                        <th>Submitted@</th>
                                    </tr>
                                </thead>
                                @foreach ($submittedorders as $submittedorder)

                                        <tbody style="font-size:12px">
                                        <tr>
                                        <td>{{ $submittedorder->staffname }}#{{ $submittedorder->staffid }}</td>
                                        <td><a style= "float:center" href="/root/orders/{{ $submittedorder->staffid }}/{{ $submittedorder->slug }}">{{ $submittedorder->ponumber }}</a></td>
                                        <td>{{ $submittedorder->branchname }}</td>
                                        <td style="text-align:center">{{ $submittedorder->totalitems }}</td>
                                        <td style="text-align:center">{{ $submittedorder->totalqty }}</td>
                                        <td style="text-align:center">{{ $submittedorder->totalprice }} SAR</td>
                                        <td style="text-align:center">{{ $submittedorder->totalqty * $submittedorder->totalprice }}.00 SAR</td>
                                        <td style="text-align:center"><pre class="{{ strtolower($submittedorder->status) }}" id="status">{{ $submittedorder->updated_at->diffForHumans() }}</pre></td>
                                        </tr>	
                                        </tbody>
                                    <?php $totalqty += $submittedorder->totalqty; ?>
                                    <?php $totalitems += $submittedorder->totalitems; ?>
                                    <?php $totalprice += $submittedorder->totalprice; ?>
                                    <?php $totalqtyprice += $submittedorder->totalqty * $submittedorder->totalprice; ?>
                                    @endforeach	

                                    <tfoot>
                                            <tr>
                                            <th style="text-align:center"><b>Totals</b></th>
                                            <th></th>
                                            <th></th>
                                            <td style="text-align:center">{{ $totalitems }}</td>
                                            <td style="text-align:center">{{ $totalqty }}</td>
                                            <td style="text-align:center">{{ $totalprice }}.00 SAR</td>
                                            <td style="text-align:center">{{ $totalqtyprice }}.00 SAR</td>
                                            </tr>
                                        </tfoot>
                                        
                                </div>
                            </div>
                        </table>

@markdown                        
Total Submitted Orders: {{ $header->count() }}

Total Orders Items: {{ $totalqty }}

@endmarkdown

@endif



<br /><hr />                                     
@markdown

#### Just Completed Orders [1]

@endmarkdown
            <?php $totalqty = 0; ?>
            <?php $totalitems = 0; ?>
            <?php $totalprice = 0; ?>
            <?php $totalqtyprice = 0; ?>     



                    @if (!$completedorders->count())
                        <p>You haven't created any order recently.</p>
                    @else
                            <table class="table-responsive-sm processed" id="myTable">
                    

                                <div class="media">
                                <a class="pull-left" href="">
                                </a>
                                <div class="media-body">
                                        <thead style="font-size:12px">
                                    <tr>
                                        <th>By#ID</th>
                                        <th>PO#</th>
                                        <th>BranchName#Number</th>
                                        <th>Total Items</th>
                                        <th>Total Qtys</th>
                                        <th>Total Price</th>
                                        <th>Qty * Price</th>
                                        <th>Completed@</th>
                                    </tr>
                                </thead>
                                @foreach ($completedorders as $completedorder)

                                        <tbody style="font-size:12px">
                                        <tr>
                                        <td>{{ $completedorder->staffname }}#{{ $completedorder->staffid }}</td>
                                        <td><a style= "float:center" href="/root/orders/{{ $completedorder->staffid }}/{{ $completedorder->slug }}">{{ $completedorder->ponumber }}</a></td>
                                        <td>{{ $completedorder->branchname }}</td>
                                        <td style="text-align:center">{{ $completedorder->totalitems }}</td>
                                        <td style="text-align:center">{{ $completedorder->totalqty }}</td>
                                        <td style="text-align:center">{{ $completedorder->totalprice }} SAR</td>
                                        <td style="text-align:center">{{ $completedorder->totalqty * $completedorder->totalprice }}.00 SAR</td>
                                        <td style="text-align:center"><pre class="{{ strtolower($completedorder->status) }}" id="status">{{ $completedorder->updated_at }}</pre></td>
                                        </tr>	
                                        </tbody>
                                    <?php $totalqty += $completedorder->totalqty; ?>
                                    <?php $totalitems += $completedorder->totalitems; ?>
                                    <?php $totalprice += $completedorder->totalprice; ?>
                                    <?php $totalqtyprice += $completedorder->totalqty * $completedorder->totalprice; ?>
                                    @endforeach	

                                    <tfoot>
                                            <tr>
                                            <th style="text-align:center"><b>Totals</b></th>
                                            <th></th>
                                            <th></th>
                                            <td style="text-align:center">{{ $totalitems }}</td>
                                            <td style="text-align:center">{{ $totalqty }}</td>
                                            <td style="text-align:center">{{ $totalprice }}.00 SAR</td>
                                            <td style="text-align:center">{{ $totalqtyprice }}.00 SAR</td>
                                            </tr>
                                        </tfoot>
                                        
                                </div>
                            </div>
                        </table>

                        @markdown

Total Completed Orders: {{ $completedorders->count() }}

Total Orders Items: <td style="text-align:center">{{ $totalitems }}</td>


@endmarkdown
                <br /><hr />         <br /><br />
                
                <h2>Users Timline</h2>


@endif

@markdown

#### Just Created Orders [0]

@endmarkdown
                    @if (!$jcorders->count())
                        <p>You haven't created any order recently.</p>
                    @else
                            <table class="table-responsive-sm processed" id="myTable">
                                <thead style="font-size:12px">
                                    <tr>
                                        <th>Order#</th>
                                        <th>PO#</th>
                                        <th>BranchName#Number</th>
                                        <th>Status</th>
                                        <th>Updated</th>
                                    </tr>
                                </thead>
                                <div class="media">
                                <a class="pull-left" href="">
                                </a>
                                <div class="media-body">
                                        @foreach ($jcorders as $jcorder)
                                        <tbody style="font-size:12px">
                                        <tr>
                                        <td><a style= "float:center" href="/orders/order/{{ $jcorder->slug }}">{{ $jcorder->slug }}</a></td>
                                        <td>{{ $jcorder->ponumber }}</td>
                                        <td>{{ $jcorder->branchname }}</td>
                                        <td class="{{ strtolower($jcorder->status) }}" id="status">{{ $jcorder->status }}</td>
                                        <td>{{ $jcorder->updated_at->diffForHumans() }}</td>
                                        </tr>	
                                        </tbody>
                                        @endforeach	
                                </div>
                            </div>
                        </table>

@endif



<br /><hr />                                     


@markdown

#### Open Orders [1]

@endmarkdown

                            @if (!$orders->count())
                                <p>You haven't created any order yet.</p> <span><a href="{{ route('orders.add') }}">Create New Order +</a></span><span style="float:right"></span>
                            @else
                            <table class="table-responsive-sm" id="myTable">
                                <thead style="font-size:12px">
                                    <tr>
                                        <th>Order#</th>
                                        <th>PO#</th>
                                        <th>BranchName#Number</th>
                                        <th>Status</th>
                                        <th>Updated</th>
                                    </tr>
                                </thead>
                                <div class="media">
                                <a class="pull-left" href="">
                                </a>
                                <div class="media-body">
                                        @foreach ($orders as $order)
                                        <tbody style="font-size:12px">

                                        <tr>
                                        <td><a style= "float:center" href="/orders/order/{{ $order->slug }}">{{ $order->slug }}</a></td>
                                        <td>{{ $order->ponumber }}</td>
                                        <td>{{ $order->branchname }}</td>
                                        <td class="{{ strtolower($order->status) }}">{{ $order->status }}</td>
                                        <td>{{ $order->updated_at->diffForHumans() }}</td>
                                        </tr>	
                                        </tbody>

                                        @endforeach	
                                </div>
                            </div>
                        </table>
                        <br /><hr />                                      


                        @endif
@markdown

#### Reviewing Orders [2]

@endmarkdown
                    @if (!$reviewingorders->count())
                        <p>You are not reviewing any order.</p>
                    @else
                            <table class="table-responsive-sm processed" id="myTable">
                                <thead style="font-size:12px">
                                    <tr>
                                        <th>Order#</th>
                                        <th>PO#</th>
                                        <th>BranchName#Number</th>
                                        <th>Status</th>
                                        <th>Updated</th>
                                    </tr>
                                </thead>
                                <div class="media">
                                <a class="pull-left" href="">
                                </a>
                                <div class="media-body">
                                        @foreach ($reviewingorders as $reviewingorder)
                                        <tbody style="font-size:12px">
                                        <tr>
                                        <td><a style= "float:center" href="/orders/order/{{ $reviewingorder->slug }}">{{ $reviewingorder->slug }}</a></td>
                                        <td>{{ $reviewingorder->ponumber }}</td>
                                        <td>{{ $reviewingorder->branchname }}</td>
                                        <td class="{{ strtolower($reviewingorder->status) }}">{{ $reviewingorder->status }}</td>
                                        <td>{{ $reviewingorder->updated_at->diffForHumans() }}</td>
                                        </tr>	
                                        </tbody>
                                        @endforeach	
                                </div>
                            </div>
                        </table>
@endif

<br /><hr />    
@markdown

#### Submitted Orders [3]

@endmarkdown

                    @if (!$processedorders->count())
                    <span id="submitted"></span>
                    @if (Session::has('alert'))
                    <div class="alert alert-success">{{ Session::get('alert') }}</div>
                    @endif
                        <p>You have no submited orders yet!</p>
                    @else
                    <span id="submitted"></span>
                    @if (Session::has('alert'))
                    <div class="alert alert-success">{{ Session::get('alert') }}</div>
                    @endif
                            <table class="table-responsive-sm processed" id="myTable">
                                <thead style="font-size:12px">
                                    <tr>
                                        <th>Order#</th>
                                        <th>PO#</th>
                                        <th>BranchName#Number</th>
                                        <th>Status</th>
                                        <th>Updated</th>
                                    </tr>
                                </thead>
                                <div class="media">
                                <a class="pull-left" href="">
                                </a>
                                <div class="media-body">
                                        @foreach ($processedorders as $processedorder)
                                        <tbody style="font-size:12px">
                                        <tr>
                                        <td>{{ $processedorder->slug }}</td>
                                        <td>{{ $processedorder->ponumber }}</td>
                                        <td>{{ $processedorder->branchname }}</td>
                                        <td class="{{ strtolower($processedorder->status) }}">{{ $processedorder->status }}</td>
                                        <td>{{ $processedorder->updated_at->diffForHumans() }}</td>
                                        </tr>	
                                        </tbody>
                                        @endforeach	
                                </div>
                            </div>
                        </table>
@endif

<br /><hr />                                     

<div id="#completed"></div>
@markdown

#### Completed Orders [4]

@endmarkdown


                            @if (!$completedorders->count())
                                <p>You have no completed orders.</p>
                            @else

                            <table class="table-responsive-sm processed" id="myTable">
                                <thead style="font-size:12px">
                                    <tr>
                                        <th>Order#</th>
                                        <th>PO#</th>
                                        <th>BranchName#Number</th>
                                        <th>Status</th>
                                        <th>Updated</th>
                                    </tr>
                                </thead>
                                <div class="media">
                                <a class="pull-left" href="">
                                </a>
                                <div class="media-body">
                                        @foreach ($completedorders as $completedorder)
                                        <tbody style="font-size:12px">
                                        <tr>
                                        <td><a style= "float:center" href="/orders/order/{{ $completedorder->slug }}">{{ $completedorder->slug }}</a></td>
                                        <td>{{ $completedorder->ponumber }}</td>
                                        <td>{{ $completedorder->branchname }}</td>
                                        <td class="{{ strtolower($completedorder->status) }}">{{ $completedorder->status }}</td>
                                        <td>{{ $completedorder->updated_at->diffForHumans() }}</td>
                                        </tr>	
                                        </tbody>
                                        @endforeach	
                                </div>
                            </div>
                        </table>
@endif

<br /><hr />                            


@markdown

```

    Order Status Codes:
        [0] -> 'Just Created',
        [1] -> 'Editing',
        [2] -> 'Reviewing',
        [3] -> 'Processing',
        [4] -> 'Completed'


```
@endmarkdown




                    @else
            <!-- If user loggedOut show below content until endShow part -->          
            <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">{{ __('Login') }}</div>
                <div class="card-body">                 
                    <form method="POST" class="form-vertical" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                        <!--@if (Route::has('register'))
                            <a style="float:right" href="{{ route('register') }}">Register</a>
                        @endif-->
                    @endauth
                </div>
            @endif
                <!-- endShow -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
