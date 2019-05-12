@extends('layouts.root')

@section('content')    

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h4><h4></div>
                <div style="padding-left:20px;padding-top:20px" class="">
            <strong>Products List</strong>
            <div class="input-group">
                <form class="form-inline input" role="search" action="{{ route('search.items') }}">
                    <input class="form-control" width="80%" name="query" type="text" placeholder="Search Products" />
                    <input  style="background-color:black" type="submit" class="form-control btn btn-primary input-group-addon" />
                </form>
                </div>
            </div>
                <div class="card-body">
                    @if (!$items->count())
                        <p>No results found, sorry</p> <span>&larr; <a href="/">Back</a></span><span style="float:right"><hr />
                    @else
                    <table id="myTable">
                    <thead>
                        <tr>
                            <th style="padding-left:14px;font-size:10px">ID</th>
                            <th style="padding-left:14px;font-size:10px">#</th>
                            <th style="padding-left:14px;font-size:10px">Product</th>
                            <th style="padding-left:14px;font-size:10px">Material</th>
                            <th style="padding-left:14px;font-size:10px">Old Price</th>
                            <th style="padding-left:14px;font-size:10px">New Price</th>
                            <th style="padding-left:14px;font-size:10px">Mini Market Price</th>
                            <th style="padding-left:14px;font-size:10px">SKU</th>
                            <th style="padding-left:14px;font-size:10px">Plant</th>
                            <th style="padding-left:14px;font-size:10px">InStock</th>
                            <th style="padding-left:14px;font-size:10px">Type</th>
                        </tr>
                    </thead>
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
@endsection


