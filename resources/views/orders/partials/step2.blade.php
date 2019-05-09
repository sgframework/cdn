@extends('layouts.app')
@section('content')    

<meta http-equiv="refresh" content="1;url=/orders/order/{{ (Session::has('slug') ? Session::get('slug') : '' ) }}/edit">
<div class="container">
    <div class="row justify-content-center">
    @if ($errors->has('alert'))
    				<span class="help-block">{{ $errors->first('alert') }}</span>
    			@endif
        <div class="col-md-12">

            @if (Route::has('login'))
            <!--<div class="top-left">
	<a href="{{ url('/') }}">SunbulahGroup</a>
	</div>-->

            <!-- If user loggedIn show below content until endShow part 
            //
            //
            //
            // endShow -->


            <style>
                th tr td {
                    /**padding-right:20px;**/
                    text-align: left;
                    width:20px;
                }
            </style>
                <div class="table-responsive">
                @if (Session::has('info'))
                    <div class="alert alert-success"><i class="fas fa-check"></i> {{ Session::get('info') }}</div>
                    @endif

                    <table class="table table-striped table-sm">
                        
                        <thead>
                                    <th style="padding-left:20px;padding-top:5px;background-color:black; color:white">@markdown ### Order# **{{ (Session::has('ordernumber') ? Session::get('ordernumber') : '' ) }}** @endmarkdown</th>
                                    <th style="background-color:black; color:white">@markdown @endmarkdown</th>
                                <tr>
            <!--<span style="color:green" class="help-block"><script>
                var msg = '{{Session::get('alert')}}';
                var exist = '{{Session::has('alert')}}';
                if(exist){
                alert(msg);
                }
            </script></span>-->

                                    <th>Name</th>
                                    <th>ID#</th>
                                </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td><pre>{{ Auth::user()->name }}</pre></td>
                                    <td><pre>{{ (Session::has('staffid') ? Session::get('staffid') : '' ) }}</pre></td>
                                </tr>
                        </tbody>
                        <thead>
                                <tr>
                                    <th>PO#</th>
                                    <th>Time Stamp</th>
                                </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td><pre>{{ (Session::has('ponumber') ? Session::get('ponumber') : '' ) }}</pre></td>
                                    <td><pre><code><span style="font-size:10px">{{ (Session::has('created_at') ? Session::get('created_at') : '' ) }}</span></code></pre></td>
                                </tr>
                        </tbody>

                        <thead>
                                <tr>
                                <th>Branch</th>
                                <th>Status</th>
                                </tr>
                        </thead>
                        <tbody>
                                <tr>
                                <td><pre>{{ (Session::has('branchnumber') ? Session::get('branchnumber') : '' ) }}</pre></td>
                                <td class="{{ strtolower((Session::has('status') ? Session::get('status') : '' )) }}">{{ (Session::has('status') ? Session::get('status') : '' ) }}</td>
                                </tr>
                        </tbody>
                    </table>
                </div>                            
                <hr />

@markdown

#### Your order has been created successfully.

##### You can proceed adding items to your order.

```

Order# {{ (Session::has('ordernumber') ? Session::get('ordernumber') : '' ) }} ===> PO# {{ (Session::has('ponumber') ? Session::get('ponumber') : '' ) }}

```

----------------------------

@endmarkdown
                
@php 

@endphp
                
                @if (Session::has('message'))
                    <span style="color:green">{!! session('message') !!}</span>
                @endif
                    <form action="/orders/order/{{ (Session::has('slug') ? Session::get('slug') : '' ) }}/edit" method="GET">
                    <input class="btn btn-primary" style="float:right" value="Proceed to insert items &rarr;" type="submit" />           
                    @else








                    @endif



@if ( $order->urgent == 'on' )

<img src="{{ asset('images/assests/urgent.png') }}" width="220px" height="120px" />

@else
@endif

            <!-- If user loggedOut show below content until endShow part -->            

            
                <!-- endShow -->
                </div>
                </div>

@endsection


