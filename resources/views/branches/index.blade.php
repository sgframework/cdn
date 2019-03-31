@extends('layouts.app')

@section('content')    
<style>

</style>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <strong>Branches List</strong>
            <div class="input-group">
                <form class="form-inline input" role="search"  action="{{ route('search.branches') }}">
                    <input class="input-group-addon" name="query" type="text" placeholder="Search" />
                    <input type="submit" class="input-group-addon" />
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


