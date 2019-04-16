
@extends('layouts.review')
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
            table {
                border-collapse: inherit;
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
        <div class="card-header"><span style="font-size:18px"><i class="fas fa-history"></i> Order#{{ $belongordernumber->slug }} Submition Form.</div></span>
            <div class="card-body">
            <!-- If user loggedIn show below content until endShow part 
            //
            //
            //
            // endShow -->
            <a href="{{ url('/root/users/orders/all') }}">&larr; Back to all orders</a>

            @if ( $order->status == "Completed")
            <div style="font-size:22px;padding-top:50px; padding-bottom:50px; padding-left:280px"  class="alert alert-danger"><i class="fas fa-times"></i> <span style="color:green;background-color:black">'completed',</span> 'This order is completed, CONNOT be modefied. {{ Session::get('completed') }}
            </div>
<table class="table-responsive-sm processed" id="myTable">
                    

                    <div class="media">
                    <a class="pull-left" href="">
                    </a>
                    <div class="media-body">
                            <thead style="font-size:12px">
                        <tr>
                            <th>By#ID</th>
                            <th>Order#</th>
                            <th>PO#</th>
                            <th>BranchName#Number</th>
                            <th>Total Items</th>
                            <th>Total Qtys</th>
                            <th>Total Price</th>
                            <th>Created@</th>
                            <th>Submitted@</th>
                        </tr>

                        
                    </thead>
                            <tbody style="font-size:12px">
                            <tr>
                                <td>{{ $belongordernumber->staffname }}#{{ $belongstaffid->staffid }}</td>
                                <td>{{ $belongordernumber->ordernumber }}</td>
                                <td>{{ $belongordernumber->ponumber }}</td>
                                <td>{{ $belongbranch->branchname }}</td>
                                <td>{{ $belongordernumber->totalitems }}</td>
                                <td>{{ $belongordernumber->totalqty }}</td>
                                <td>{{ number_format($belongordernumber->totalprice) }}.00 SAR</td>
                                <td>{{ $belongcreateddate->created_at }}</td>
                                <td>{{ $belongcreateddate->updated_at }}</td>
                            </tr>	
                            </tbody>
</table>

        <table class="table-responsive-sm processed"> 
                                <thead style="font-size:12px">
                                    <tr>
                                        <th>Mat. Description</th>
                                        <th>material code</th>
                                        <th>Qty.</th>
                                        <th>ZTTO</th>
                                        <th>Price</th>
                                        <!--<th>Qty * Price</th>-->
                                        <th>Created</th>
                                    </tr>
                                </thead>
                                <?php $totalqty = 0; ?>
                                <?php $totalfree = 0; ?>
                                <?php $totalprice = 0; ?>
                                <?php $totalqtyprice = 0; ?>
                                @foreach ($completedprofiles as $completedprofile)
                                        <tbody style="font-size:12px">
                                        <tr>
                                        <td>{{ $completedprofile->orderitems }}</td>
                                        <td style="text-align:center">{{ $completedprofile->itemnumber }}</td>
                                        <td style="text-align:center">{{ $completedprofile->itemqty }}</td>
                                        <td style="text-align:center">{{ $completedprofile->freeitem }}</td>
                                        <td style="text-align:center">{{ number_format($completedprofile->itemprice) }}.00 SAR</td>
                                        <!--<td style="text-align:center">{{ $completedprofile->itemqty * $completedprofile->itemprice }} SAR</td>-->
                                        <!--<td><a style= "float:center" href="/orders/order/{{ $completedprofile->slug }}">{{ $completedprofile->slug }}</a></td>-->
                                        <td><a style= "float:center" href="/orders/order/{{ $completedprofile->slug }}">{{ $completedprofile->updated_at->diffForHumans() }}</a></td>
                                        </tr>	
                                        </tbody>
                                        @endforeach	
                                            <?php $totalqty += $belongordernumber->itemqty; ?>
                                            <?php $totalfree += $completedprofile->freeitem; ?>
                                            <?php $totalprice += $completedprofile->itemprice; ?>
                                            <?php $totalqtyprice += $belongordernumber->totalqty + $belongordernumber->totalprice; ?>
                                        <tfoot>
                                            <tr>
                                                <th style="text-align:center">Totals</th>
                                                <th></th>
                                                <th style="text-align:center">{{ $belongordernumber->totalqty }}</th>
                                                <th style="text-align:center">{{ $totalfree }}</th>
                                                <th style="text-align:center">{{ number_format($belongordernumber->totalprice) }}.00 SAR</th>
                                                <!--<td style="text-align:center">{{ $totalqtyprice }} SAR</td>-->
                                                <th></th>
                                            </tr>

                                        </tfoot>

                                </div>
                            </div>
                        </table>
                
                @if (Session::has('completed'))
                        <div class="alert alert-danger"><i class="fas fa-times"></i> 'completed', 'This order is completed, CONNOT be modefied. {{ Session::get('completed') }}</div>
                @endif
            @else
<br />

@markdown

#### * **Copy & paste to excelsheet.**

@endmarkdown
                        <table class="table-responsive-sm processed" id="myTable">
                        
                        <tr>
                            <td style="text-align:center">{{ $belongordernumber->ponumber }}</td>
                            <td></td>
                            <td style="text-align:center">{{ $belongordernumber->branchnumber }}</td>
                            <td></td>
                            <td></td>
                        </tr>
                        @foreach ($profiles as $profile)
                                        <tbody style="font-size:12px">
                                        <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td style="text-align:center">{{ $profile->itemnumber }}</td>
                                        <td></td>
                                        <td></td>
                                        <td style="text-align:center">{{ $profile->itemqty }}</td>

                                        </tr>	
                                        </tbody>
                                        @endforeach	
                        
                    </table>
                    <br />
                    
                    <form action="{{ route('orders.complete', ['staffid' => $order->staffid, 'orderId' => $order->slug]) }}" method="POST">
                                @csrf
                            <input width="20px" value="Complete Order" type="submit" class="btn btn-primary" />
                        </form>
<br />


<embed src="{{ asset('attachments/pos') }}/{{ $order->slug }}-{{ $order->attachedpo }}" width="420" height="300" alt="pdf" />
<img  width="420" height="300" src="{{ asset('attachments/pos') }}/{{ $order->slug }}-{{ $order->attachedpo }}" />

<br />

                            <table class="table-responsive-sm processed" id="myTable">
                    

                                <div class="media">
                                <a class="pull-left" href="">
                                </a>
                                <div class="media-body">
                                        <thead style="font-size:12px">
                                    <tr>
                                        <th>By#ID</th>
                                        <th>Order#</th>
                                        <th>PO#</th>
                                        <th>BranchName#Number</th>
                                        <th>Total Items</th>
                                        <th>Total Qtys</th>
                                        <th>Total Price</th>
                                        <th>Created@</th>
                                        <th>Submitted@</th>
                                    </tr>

                                    
                                </thead>
                                        <tbody style="font-size:12px">
                                        <tr>
                                            <td>{{ $belongordernumber->staffname }}#{{ $belongstaffid->staffid }}</td>
                                            <td>{{ $belongordernumber->ordernumber }}</td>
                                            <td>{{ $belongordernumber->ponumber }}</td>
                                            <td>{{ $belongbranch->branchname }}</td>
                                            <td>{{ $belongordernumber->totalitems }}</td>
                                            <td>{{ $belongordernumber->totalqty }}</td>
                                            <td>{{ number_format($belongordernumber->totalprice) }}.00 SAR</td>
                                            <td>{{ $belongcreateddate->created_at }}</td>
                                            <td>{{ $belongcreateddate->updated_at }}</td>
                                        </tr>	
                                        </tbody>
        </table>
        <table class="table-responsive-sm processed"> 
                                <thead style="font-size:12px">
                                    <tr>
                                        <th>Mat. Description</th>
                                        <th>material code</th>
                                        <th>Qty.</th>
                                        <th>ZTTO</th>
                                        <th>Item Price</th>
                                        <th>Total Price</th>
                                        <!--<th>Qty * Price</th>-->
                                        <th>Created</th>
                                    </tr>
                                </thead>
                                <?php $totalqty = 0; ?>
                                <?php $totalfree = 0; ?>
                                <?php $totalprice = 0; ?>
                                <?php $totalqtyprice = 0; ?>
                                @foreach ($profiles as $profile)
                                        <tbody style="font-size:12px">
                                        <tr>
                                        <td>{{ $profile->orderitems }}</td>
                                        <td style="text-align:center">{{ $profile->itemnumber }}</td>
                                        <td style="text-align:center">{{ $profile->itemqty }}</td>
                                        <td style="text-align:center">{{ $profile->freeitem }}</td>
                                        <td style="text-align:center">{{ number_format($profile->itemprice) }}.00 SAR</td>
                                        <td style="text-align:center">{{ number_format($profile->itemqty * $profile->itemprice) }}.00 SAR</td>
                                        <!--<td style="text-align:center">{{ $profile->itemqty * $profile->itemprice }} SAR</td>-->
                                        <!--<td><a style= "float:center" href="/orders/order/{{ $profile->slug }}">{{ $profile->slug }}</a></td>-->
                                        <td><a style= "float:center" href="/orders/order/{{ $profile->slug }}">{{ $profile->updated_at->diffForHumans() }}</a></td>
                                        </tr>	
                                        </tbody>
                                        @endforeach	
                                            <?php $totalqty += $profile->itemqty; ?>
                                            <?php $totalfree += $profile->freeitem; ?>
                                            <?php $totalprice += $profile->itemprice; ?>
                                            <?php $totalqtyprice += $belongordernumber->totalqty + $belongordernumber->totalprice; ?>
                                        <tfoot>
                                            <tr>
                                                <th style="text-align:center">Totals</th>
                                                <th></th>
                                                <th style="text-align:center">{{ $belongordernumber->totalqty }}</th>
                                                <th style="text-align:center">{{ $totalfree }}</th>
                                                <th style="text-align:center">{{ number_format($belongordernumber->itemprice) }}.00 SAR</th>
                                                <th style="text-align:center">{{ number_format($belongordernumber->totalprice) }}.00 SAR</th>
                                                <!--<td style="text-align:center">{{ $totalqtyprice }} SAR</td>-->
                                                <th></th>
                                            </tr>

                                        </tfoot>

                                </div>
                            </div>
                        </table>
                        
                        <br />


<br /><br />



<br />
<br /><hr />                                     


@endif


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
