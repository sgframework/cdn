@extends('layouts.app')

@section('content')    

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><i class="fas fa-tachometer-alt"></i> <strong><span style="font-size:18px">Dashboard</span></strong></div>
                <div class="card-body">
                    <center>
                <span class="nav-item"><a style="display: inline-block;" class="inline nav-link" href="{{ route('dashboard.orders') }}"><i class="fas fa-asterisk"></i> My Orders</a><a style="display: inline-block;" class="inline nav-link" href=""><i class="fas fa-search"></i> Search Database</a></span>
                <div class="row justify-content-left">
</center>
                <div style="padding-left:8px" class="row">
                    <div class="card col-lg-5">@markdown

![{{ asset('images/uploads/avatars') }}/{{ Auth::user()->photo }}]({{ asset('images/uploads/avatars') }}/{{ Auth::user()->photo }})

### {{ Auth::user()->name }}

ID# {{ Auth::user()->idnumber }}

Phone Number: {{ Auth::user()->phonenumber }}

Email: {{ Auth::user()->email }}

[Edit Profile]({{ route('profile.edit') }})

-------------------

@endmarkdown
<li  class="">Total Orders {{ $orderscount->count() }}</li>
<span style="padding-left:34px" class="justcreated"> - JustCreated Orders {{ $justcreatedorderscount->count() }}</span>
<span style="padding-left:34px" class="editing"> - Editing Orders {{ $editingorderscount->count() }}</span>
<span style="padding-left:34px" class="reviewing"> - Reviewing Orders {{ $reviewingorderscount->count() }}</span>
<span style="padding-left:34px" class="submitted"> - Submitted Orders {{ $submittedorderscount->count() }}</span>
<span style="padding-left:34px" class="completed"> - Completed Orders {{ $completedorderscount->count() }}</span>



</div>
<div style="padding-left:8px;padding-top:8px" class="col-sm-7">


<table id="myTable">
    <thead>
        <tr>
            <th>PO#</th>
            <th>Status</th>
            <th>Created</th>
            <th>Updated</th>
        </tr>
    </thead>
           
            @foreach ($orders as $order)
                @include('dashboard/partials/dashboardindexblock')
            @endforeach	

</table>
<center>{!! $orders->render() !!}</center>
</div>
</div>


<a href="#back-top" class="go-top"><i style="font-size: 22px; top: -26px;" class="glyphicon glyphicon-circle-arrow-up"></i></a>


            <b><p style="padding-left:45px"></p></b>
                <div class="col-md-2">

                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div><br /><hr />
    </div>
    
</div>
@endsection