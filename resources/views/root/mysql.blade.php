@extends('layouts.root')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 ml-sm-12 col-lg-12">
            @if ( Auth::user()->is_permission == '0')
            <div style="padding-top:200px;padding-bottom:200px">
                <span style="font-size:16px" class="alert alert-danger"><i class="fas fa-exclamation-triangle"></i> You don't have the right permissions to view this content, sorry! <a href="/">&larr; Go Back Home</a></span>
            </div>
            @else
            @auth

            @if (Session::has('success'))
                <div class="alert alert-success"><i class="fas fa-check"></i> {{ Session::get('success') }}</div>
            @endif

@markdown

#### Bulk data insertion, updating.

```  
    usage: 
        INSERT INTO `tablename` VALUES ('val1', 'val2', 'val3');
        UPDATE `tablename` SET 'col'=`new_val` WHERE 'col'=`condition`;
        DELETE FROM `tablename` WHERE 'col'=`condition`;

```
@endmarkdown
                    <form class="form-inline" action="{{ route('root.mysql.post') }}" method="POST">
                    @csrf
                        <textarea name="command" class="form-control" rows="10" cols="120"></textarea>
                        <input style="background-color:gray;color:white;padding: 2px 8px 2px 8px;font-size: 12px" class="btn btn-primary" type="submit" />
                    </form>
        @endauth
                </div>
            </div>
        </div> 
    </div>
</div>
    @endif
@endsection