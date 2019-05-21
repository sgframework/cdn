@extends('layouts.cmd')
@section('content')

{{  shell_exec('node cmd/cmd.js') }}

<div id="terminal">



</div>
      <script>
        var term = new Terminal();
        term.open(document.getElementById('terminal'));
        term.write('Hello from \x1B[1;3;31mxterm.js\x1B[    000m $ ');
        term.read(); 
      </script>
      

@endsection 