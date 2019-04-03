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

## Step 2 ##

Insert Update or delete items to current attached PO Number.

 ------------------------
@endmarkdown

<style>
    td {
        padding-right:20px;
    }
</style>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                                    <th style="padding-left:20px;padding-top:5px;background-color:black; color:white">@markdown ### Order# **{{ (Session::has('ordernumber') ? Session::get('ordernumber') : '' ) }}** @endmarkdown</th>
                                    <th style="background-color:black; color:white">@markdown @endmarkdown</th>
                                <tr>
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
                                    <th>Branch</th>
                                    <th>Branch#</th>
                                </tr>
                        </thead>
                        <tbody>
                                <tr>
                                <td><pre>{{ (Session::has('branchname') ? Session::get('branchname') : '' ) }}</pre></td>
                                    <td><pre>{{ (Session::has('branchnumber') ? Session::get('branchnumber') : '' ) }}</pre></td>
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
                    </table>
                </div>                            
                <hr />











                <form class="form-inline" method="" action="">
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
                @if (Session::has('message'))
                    <span style="color:green">{!! session('message') !!}</span>
                @endif
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


