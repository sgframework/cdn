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
                <div class="col-md-4">
@markdown

![{{ asset('images/uploads/avatars') }}/{{ Auth::user()->photo }}]({{ asset('images/uploads/avatars') }}/{{ Auth::user()->photo }})

### {{ Auth::user()->name }}

ID# {{ Auth::user()->idnumber }}

Phone Number: {{ Auth::user()->phonenumber }}

Email: {{ Auth::user()->email }}

Total Orders 998


-------------------

@endmarkdown


<a href="#back-top" class="go-top"><i style="font-size: 22px; top: -26px;" class="glyphicon glyphicon-circle-arrow-up"></i></a>


            <b><p style="padding-left:45px"></p></b>
                <div class="col-md-2">
                    <center><a class="btn btn-primary" href="{{ route('profile.edit') }}"><i class="far fa-edit"></i> Edit Profie</a></center>
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