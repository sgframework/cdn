@extends('layouts.app')

@section('content')    

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><i class="fas fa-tachometer-alt"></i> <strong><span style="font-size:18px">Dashboard</span></strong></div>
                <div class="card-body">
                    <center>
                <span class="nav-item"><a style="display: inline-block;" class="inline nav-link" href=""><i class="fas fa-asterisk"></i> My Orders</a><a style="display: inline-block;" class="inline nav-link" href=""><i class="fas fa-asterisk"></i> My Orders</a><a style="display: inline-block;" class="inline nav-link" href=""><i class="fas fa-search"></i> Search Database</a></span>
                <div class="row justify-content-left">
</center>
                <div class="col-md-4">
                <h5>{{ Auth::user()->name }}</h5>
                <b><p style="padding-left:45px">ID# {{ Auth::user()->idnumber }}</p></b>


        <div class="col-md-2">
                    <td><img class="media-object" alt="" src="{{ asset('images/uploads/avatars') }}/{{ Auth::user()->photo }}" style="width:120px; height:120px; float:left; border-radius:50%; margin-right:25px;"></td>
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


