
@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            @if (Route::has('login'))
                    @auth
            <!--<div class="top-left">
	<a href="{{ url('/') }}">SunbulahGroup</a>
	</div>-->
    <div class="top-right links">
        <div class="card-header">Insert new item</div>
            <div class="card-body">
            <!-- If user loggedIn show below content until endShow part 
            //
            //
            //
            // endShow -->

                    <span>&larr; <a href="/root">Back</a></span><span style="float:right"><a href="{{ route('items.index') }}">Products List</a> &rarr;</span><br /><hr />
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form method="POST" action="{{ route('items.insert') }}">
                        @csrf                
                            <br />
                            <input class="form-control" type="number" class="input" name="itemnumber" placeholder="Material Number" />
                            <input class="form-control" type="text" class="input" name="itemname" placeholder="Product Name" />
                            <input class="form-control" type="decimal" class="input" name="itemprice" placeholder="0.00" />
                            <input class="form-control" type="number" class="input" name="itemsku" placeholder="SKU" />
                            <input class="form-control" type="text" class="input" name="plant" placeholder="Prod. Plant" />
                            <input class="form-control" type="number" class="input" name="instock" placeholder="In Stock" />
                            <input class="form-control" type="url" class="input" name="link" placeholder="http://" />
                            <input class="form-control" type="text" class="input" name="itempic" value="item.png" placeholder="Upload an Image" />
                            <input class="btn btn-primary" type="submit" value="Add Product" />
                        </form>
                    </div>
                </div>
        </section>
        {{ substr(md5('http://www.google.com'), 0, 6) }}
        {{ $ordernumber = mt_rand(7000, 8000) }}

                    @if (!$items->count())
                        <p>No results found, sorry</p> <span>&larr; <a href="/">Back</a></span><span style="float:right"><hr />
                    @else
        <div class="card-header"><h4>Items List<h4></div>
            <div class="card-body">
                <div class="table-responsive">
                        <table class="table table-bordered" id="crud_table">
                            <tr>
                                <th width="5%">#</th>
                                <th width="24%">Product</th>
                                <th width="15%">Item#</th>
                                <th width="10%">Price</th>
                                <th width="10%">SKU</th>
                                <th width="10%">Plant</th>
                                <th width="10%">InStock</th>
                                <th width="30%">Type</th>
                            </tr>                            
                        <tr>
                            <td contenteditable="false" class=""> </td>
                                <form action="{{ route('items.insert') }}" method="POST">
                                        <td contenteditable="false" name="itemname" class=""><input class="form-control" type="text" class="input" name="itemname" placeholder="Product Name" /></td>
                                        <td contenteditable="false" name="itemnumber" class=""><input class="form-control" type="number" class="input" name="itemnumber" placeholder="Material Number" /></td>
                                        <td contenteditable="false" name="itemprice" class=""><input class="form-control" type="decimal" class="input" name="itemprice" placeholder="0.00" /></td>
                                        <td contenteditable="false" name="itemsku" class=""><input class="form-control" type="number" class="input" name="itemsku" placeholder="SKU" /></td>
                                        <td contenteditable="false" name="plant" class=""><input class="form-control" type="text" class="input" name="plant" placeholder="Prod. Plant" /></td>
                                        <td contenteditable="false" name="instock" class=""><input class="form-control" type="number" class="input" name="instock" placeholder="In Stock" /></td>
                                        <td contenteditable="false" name="itempic" class="">
                                    <select name="type" class="form-control">
                                        <option name="" value="">select one</option>
                                        <option style="color:black" value="Vegetables">Vegetables</option>
                                        <option style="color:black" value="Vegetables">Sea Food</option>
                                        <option style="color:black" value="Vegetables">Canned</option>
                                        <option style="color:black" value="Vegetables">Bread</option>
                                        <option style="color:black" value="Vegetables">Chease</option>
                                        <option></option>
                                    </select>
                                    <center><input class="btn btn-primary" type="submit" value="Insert" /></center><hr />
                                </form>
                            </td>
                        </tr>
                    </table>
                </div>

                    <table id="myTable">
                        

                      
                        @foreach ($items as $item)
                            @include('items/partials/itemblock')
                        @endforeach
</table>			
                    @endif
                    </div>  
                </div>
            </div>
        </div><br /><hr />
    <center>{!! $items->render() !!}</center>

            </div>
        </div>
    </div>

    <form class="form-inline" action="/action_page.php">
  <label for="email">Email:</label>
  <input type="email" id="email" placeholder="Enter email" name="email">
  <label for="pwd">Password:</label>
  <input type="password" id="pwd" placeholder="Enter password" name="pswd">
  <label>
    <input type="checkbox" name="remember"> Remember me
  </label>
  <button type="submit">Submit</button>
</form>

    <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">   		
                                <label for="location" class="control-label">Choose your location</label>
                                <input type="text" name="location" class="form-control" id="location" value="{{ Request::old('location') ?: Auth::user()->location }}">
                                @if ($errors->has('location'))
                                    <span class="help-block">{{ $errors->first('location') }}</span>
                                @endif
                        </div>
                    </div>
                </div>
        </section>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <form class="form-inline" action="{{ route('orders.partials.step1') }}">
                            <label style="padding-left:20px" for="staffname">Name:</label>
                                <input hidden class="form-control" type="text" class="input" name="staffname" value="{{ Auth::user()->name }}" />{{ Auth::user()->name }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </label>
                            <label for="staffid">ID#</label>
                                <input hidden class="form-control" type="number" class="input" name="staffid" value="{{ Auth::user()->idnumber }}" />{{ Auth::user()->idnumber }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </label>
                                <input type="number" id="ponumber" placeholder="PO#" name="ponumber">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                      <select name="type" class="form-control">
                                        <option name="" value="">Select Branch</option>
                                        @foreach($branches as $branch)
                                        <option value="{{$branch->branchnumber}}">{{ $branch->branchnumber }}&nbsp;&nbsp;{{ $branch->branchname }}</option>
                                        @endforeach
                                    </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span style="color:red"> Urgent</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="urgent">
                    <div style="float:right; padding-left:90px"><button type="submit">Next</button></div>
                </form>
            </div>
        </div>
    </div>
</div>

                            </div>       

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @if (!$branches->count())
                        <p>No results found, sorry</p> <span>&larr; <a href="/">Back</a></span><span style="float:right"><hr />
                    @else
                        @foreach ($branches as $branch)
                                @include('branches/partials/branchblock')
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>



<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <select class="form-control" name="item_id">
                        @foreach($branches as $branch)
                            <option value="{{$item->item_id}}">{{ $branch->branchname }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>
</section>

        

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                    @include('tests/markdown')


                    </div>
                    </div>
                </div>
        </section>

        

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    </div>
                    </div>
                </div>
        </section>

        

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    </div>
                    </div>
                </div>
        </section>

        

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    </div>
                    </div>
                </div>
        </section>

        

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    </div>
                    </div>
                </div>
        </section>

        

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    </div>
                    </div>
                </div>
        </section>

        

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    </div>
                    </div>
                </div>
        </section>

        

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    </div>
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
