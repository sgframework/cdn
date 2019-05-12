@extends('layouts.review')

@section('content')    

@markdown

# Order Review

## Order# {{ $order->ordernumber }}

@endmarkdown
@if($errors->any())
<h4>{{$errors->first()}}</h4>
@endif
<div class="alert alert-light" role="alert">
  This is a light alert—check it out!
</div>
{{ hello }}
<br />
<hr />
    <pre style="font-size:12px"></pre>
@endsection