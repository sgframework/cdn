
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
        <div class="card-header">Title</div>
            <div class="card-body">
            <!-- If user loggedIn show below content until endShow part 
            //
            //
            //
            // endShow -->



            <select name="branchname" id="branchname" class="form-control dynamic" data-dependent="branchname">
                                    <option value="empty">Select Branch</option>
                                            @foreach($branches as $branch)
                                            <option value="{{ $branch->branchnumber }}-{{ $branch->branchname }}">&nbsp;{{ $branch->branchnumber }}&nbsp;{{ $branch->branchname }}</option>
                                            @endforeach      
                                </select>&nbsp;&nbsp;&nbsp;

                    @else
            <!-- If user loggedOut show below content until endShow part -->            
                    

                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                     @endif
                <!-- endShow -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
