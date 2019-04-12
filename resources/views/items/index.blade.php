@extends('layouts.app')

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
                    <input type="submit" class="form-control btn btn-primary input-group-addon" />
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
                            <th>#</th>
                            <th>Product</th>
                            <th>Material</th>
                            <th>Price</th>
                            <th>SKU</th>
                            <th>Plant</th>
                            <th>InStock</th>
                            <th>Type</th>
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


