@extends('layouts.app')
@section('content')    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            @if (Route::has('login'))
                    @auth
            <!--<div class="top-left">
	<a href="{{ url('/') }}">SunbulahGroup</a>
	</div>-->
    <div class="top-right links">
        <div class="card-header">+Create New Order</div>
            <div class="card-body">
            <!-- If user loggedIn show below content until endShow part 
            //
            //
            //
            // endShow -->
            <span>&larr; <a href="/">Back</a></span><span style="float:right"><a href="{{ route('items.index') }}">Products List</a> &rarr;</span><br /><hr />
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <div class="table-responsive">
    <table class="table table-bordered" id="crud_table">
     <tr>
      <th width="30%">Name</th>
      <th width="10%">ID#</th>
      <th width="20%">PO#</th>
      <th width="40%">Branch#</th>
     </tr>
     <tr>
      <td contenteditable="false" class="item_name">{{ Auth::user()->name }} </td>
      <td contenteditable="false" class="item_code">{{ Auth::user()->idnumber }}</td>
      <td contenteditable="true" class="item_desc"></td>
            <td contenteditable="true" class="item_price">
            <select class="form-control">
                <option name="" value=""></option>
                <option name="ordernumber" style="color:black" value="Vanilla Pound Cake 300 g" />Vanilla Pound Cake 300 g</option>
                <option></option>
            </select>
            </td>
         </tr>
    </table>

   </div>
                       <form method="POST" action="{{ route('orders.insert') }}">
                        @csrf     
                        <input hidden class="form-control" type="text" class="input" name="staffname" value="{{ Auth::user()->name }}" />
                            <input hidden class="form-control" type="number" class="input" name="staffid" value="{{ Auth::user()->idnumber }}" />
                            <input class="form-control" type="number" class="input" name="ponumber" placeholder="PO#" />
                            <input hidden class="form-control" type="number" class="input" name="branchnumber" placeholder="Branch#" />
                            <input hidden class="form-control" type="name" class="input" name="branchname" value="Al-Othaim Co. 23" placeholder="Al-Othaim Co. 23" />                  
                            <select class="form-control">
                                <option name="" value="">Select Branch</option>
                                <option name="ordernumber" style="color:black" value="Vanilla Pound Cake 300 g" />Vanilla Pound Cake 300 g</option>
                                <option></option>
                                <option></option>
                            </select>
                            <br />
                            <select class="form-control">
                                <option name="" value="">Select an item</option>
                                <option name="ordernumber" style="color:black" value="Vanilla Pound Cake 300 g" />Vanilla Pound Cake 300 g</option>
                                <option></option>
                                <option></option>
                            </select>
                            <br />
                            <input class="form-control" type="number" class="input" name="itemnumber" placeholder="Item Number" />
                            <input class="form-control" type="text" class="input" name="orderitems" value="item.png" placeholder="Item Name" />
                            <input class="form-control" type="number" class="input" name="itemqty" placeholder="Qty" />
                            <input class="form-control" type="number" class="input" name="freeitem" value="" placeholder="Free" />
                            <input class="form-control" type="number" class="input" name="itemprice" value="" placeholder="Price" />
                            <input class="btn btn-primary" type="submit" value="Create Order" />
                        </form>
                    </div>
                </div>
        </section>

                        @else
            <!-- If user loggedOut show below content until endShow part -->            
            <div class="card-header">{{ __('Login') }}</div>
                <div class="card-body">                 
                    <form method="POST" action="{{ route('login') }}">
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
                        @if (Route::has('register'))
                            <a style="float:right" href="{{ route('register') }}">Register</a>
                        @endif
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


