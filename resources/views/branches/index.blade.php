@extends('layouts.app')

@section('content')    
<style>

</style>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-12">
    <div class="card">
    <div class="card-header"><h4><h4></div>
        <div style="padding-left:20px;padding-top:20px" class="">
            <strong>Branches List</strong>
            <div class="input-group">
                <form class="form-inline input" role="search" action="{{ route('search.branches') }}">
                    <input class="form-control" width="80%" name="query" type="text" placeholder="Search Branches" />
                    <input style="background-color:black" type="submit" class="form-control btn btn-primary" />
                </form>
            </div>
        </div>

            <div class="card-body">
            @if($errors->any())
            <h4>{{$errors->first()}}</h4>
            @endif
                    @if (!$branches->count())
                        <p>No results found, sorry</p> <span>&larr; <a href="/">Back</a></span><span style="float:right"></span><hr />
                    @else
                  <table id="myTable">
                      <thead>
                          <tr>
                              <th>#</th>
                              <th>Branch Name</th>
                              <th>Branch Number</th>
                              <th>Sales Group</th>
                              <th>Dist. Channel</th>
                              <th>Office</th>
                          </tr>
                      </thead>
                        @foreach ($branches as $branch)
                            @include('branches/partials/branchblock')
                        @endforeach			
                    @endif
                    </table>
                    </div>  
                </div>
            </div>
        </div>
    <center>{!! $branches->render() !!}</center>
    </div>
</div>
@endsection


