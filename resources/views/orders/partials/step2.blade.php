@extends('layouts.app')
@section('content')    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            @if (Route::has('login'))
            <!--<div class="top-left">
	<a href="{{ url('/') }}">SunbulahGroup</a>
	</div>-->
    <div class="top-right links">
        <div class="card-header"><b>+Create New Order</b></div>
            <div class="card-body">
            <!-- If user loggedIn show below content until endShow part 
            //
            //
            //
            // endShow -->
@markdown

### Step 2 ###

**Insert Update or delete items to current attached PO Number.**

---------------------------------------

## Order# {{ Auth::user()->phonenumber }}

{{ Auth::user()->name }}#&nbsp;{{ Auth::user()->email }}

0{{ Auth::user()->phonenumber }}


---------------------------------------

@endmarkdown


@if (Session::has('message'))
        <li>{!! session('message') !!}</li>
   @endif

<form class="form-inline" method="get" action="{{ route('orders.insert.step1') }}">
                @csrf
                    <label hidden style="padding-left:20px" for="staffname">Name:</label>
                        <input hidden class="form-control" type="text" class="input" name="staffname" value="{{ Auth::user()->name }}" />
                    </label>
                    <label hidden for="staffid">ID#</label>
                        <input hidden class="form-control" type="number" class="input" name="staffid" value="{{ Auth::user()->idnumber }}" />&nbsp;&nbsp;&nbsp;
                    </label>
                        <input class="form-control" width="20px" type="number" id="ponumber" placeholder="PO#" name="ponumber">&nbsp;&nbsp;&nbsp;
                                <select name="branchnumber" class="form-control">
                                <option value="empty">Select an item</option>
                                @foreach($items as $item)
                                <option value="{{$item->itemnumber}}">{{ $item->itemnumber }}&nbsp;&nbsp;{{ $item->itemname }}&nbsp;{{ $item->itemprice }}SR</option>
                                @endforeach
                            </select>&nbsp;&nbsp;&nbsp;
                        <span style="color:red"> Urgent</span>&nbsp;&nbsp;&nbsp;<input id="zeroone" type="checkbox" name="urgent">
                        <input hidden class="form-control" type="text" class="input" name="slug" value="" />
                    <div style="float:right; padding-left:90px"><button type="submit">Next</button></div>
                </form><br /><hr />





                    @else








                    @endif


            <!-- If user loggedOut show below content until endShow part -->            

            
                <!-- endShow -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


