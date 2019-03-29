@extends('layouts.app')

@section('content')    

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Products List</div>
                <div class="card-body">
                    @if (!$items->count())
                        <p>No results found, sorry</p> <span>&larr; <a href="/">Back</a></span><span style="float:right"><hr />
                    @else
                        @foreach ($items as $item)
                            @include('items/partials/itemblock')
                        @endforeach			
                    @endif
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


