
@extends('layouts.app')
@section('content')    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            @if (Route::has('login'))
                    @auth
                <div class="top-right links">
                    <div class="card-header"><b>+Create New Order</b></div>
                        <div class="card-body">
                    <!-- If user loggedIn show below content until endShow part 
                    //
                    //
                    //
                    // endShow -->
            @if (Session::has('deleted'))
                            <div class="alert alert-success"><i class="fas fa-check"></i> {{ Session::get('deleted') }}</div>
            @endif

@markdown

## Create a new order form ##

#### Steps Overview ####

+ Step One
    - Insert PO Number and Branch Number, can't be empty.
+ Step Two
    - Insert items for that same entered PO Number.

### Step 1 ###

**Type in PO Number and select a Branch.**

---------------------------------------

##### **{{ Auth::user()->name }}#&nbsp;{{ Auth::user()->idnumber }}**


@endmarkdown

<span id="submittedd"></span>
@if (Session::has('alert'))
<div class="alert alert-success">{{ Session::get('alert') }}</div>
@endif

@markdown

```

    User PO Sequence: {{ $sequence }}0 - {{ $sequence }}999999

```

@endmarkdown

    @if (!$lastorder)
    @else
    <div id="Success!"></div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <span>Last created order: </span>
        <span class="badge badge-dark"><a style= "" href="/orders/order/{{ $lastorder->slug }}">{{ $lastorder->ponumber }}</a></span> <span class="badge badge-dark"> {{ $lastorder->branchname }}</span>
        @if( $lastorder->urgent === 'on' )
            <span class="badge badge-danger">URGENT</span> 
        @else
            <span class="badge badge-secondary">REGULAR</span> 
        @endif
        @if( $lastorder->status === 'Submitted' )
            <span class="badge submitted">{{ number_format($lastorder->totalprice) }}.00 SAR</span> 
        @elseif( $lastorder->status === 'Completed' )
            <span class="badge completed">{{ number_format($lastorder->totalprice) }}.00 SAR</span> 
        @endif
    @endif
        <script type="text/javascript">  
            function movetoNext(current, nextFieldID) {  
            if (current.value.length >= current.maxLength) {  
            document.getElementById(nextFieldID).focus();  
                }  
            }  
        </script>
        <script>
            document.addpo.ponumber.focus();
        </script>
            <body onload='if(!document.addpo.ponumber.my_no_focus){document.addpo.ponumber.focus();}' >
                @if($errors->any())
                <span style="font-size:9px;color:red">* <h4>{{$errors->first()}}</h4>
                </span>
                @endif
                <form class="form-inline" name="addpo" method="POST" action="{{ route('orders.insert.step1') }}">
                @csrf
                    <label hidden style="padding-left:20px" for="staffname">Name:</label>
                        <input hidden class="form-control" type="text" class="input" name="staffname" value="{{ Auth::user()->name }}" />
                    </label>
                        <input hidden class="form-control" type="text" class="input" name="created_at" value="{{ $timestamp = now() }}" />&nbsp;&nbsp;&nbsp;
                        <input hidden class="form-control" type="number" class="input" name="ordernumber" value="0000{{ mt_rand(7000000, 8888000) }}" />&nbsp;&nbsp;&nbsp;
                    <label hidden for="staffid">ID#</label>
                        <input hidden class="form-control" type="number" class="input" name="staffid" value="{{ Auth::user()->idnumber }}" />&nbsp;&nbsp;&nbsp;
                    </label>
                        <input autofocus="true" onkeydown="this.my_no_focus = true;" id="first" size="20" onkeyup="movetoNext(this, 'second')" maxlength="14" class="form-control" width="20px" type="text" value="{{ Request::old('ponumber') ?: ++ $lastorder->ponumber }}"  placeholder="PO#" name="ponumber" required>&nbsp;&nbsp;&nbsp;
                        @if (!$branches_list)
                        @else                                
                        <input  id="second" size="38" onkeyup="movetoNext(this, 'third')" maxlength="50" name="branchnumber" class="form-control1" list="{{ $branch->branchnumber }}-{{ $branch->branchname }}">
                        <input hidden name="branchname" class="form-control" list="{{ $branch->branchnumber }}-{{ $branch->branchname }}">
                            <datalist id="{{ $branch->branchnumber }}-{{ $branch->branchname }}" class="">
                                @foreach($branches_list as $branch)
                                <option name="branchname" value="{{ $branch->branchnumber }}-{{ $branch->branchname }}"></option>
                                @endforeach 
                            </datalist>
                         @endif
                        <script>
                        $(document).ready(function(){
                            load_json_data('branches_list')
                            function load_json_data(id, parent_id)
                            {
                                var php_code = '';
                                $.getJSON('requst.json', function(data){
                                    $.each(data, function(key, value){
                                        if(id == 'branchname')
                                        {
                                            if(value.parent_id  == '0')
                                            {
                                                php_code += '<option value="'+value.id+'">'+value.name+'</option>';
                                            }
                                        }
                                        else
                                        {
                                            if(value.parent_id == parent_id)
                                            {
                                                php_code += '<option value="'+value.id+'">'+value.name+'</option>';
                                            }
                                        }
                                    });
                                    $('#'+id).php(php_code);
                                });
                            }
                            $(document).on(change, '#branchname', function(){
                                var branch_name = $(this).val();
                                if(branch_name != '')
                                {
                                    load_json_data('branchnumber', branch_name);
                                }
                                else
                                {
                                    $('#branchnumber').php('<option value="">-- Select an option --</option>');
                                }
                            }); 
                        });
                        </script>
                        <input hidden class="form-control" type="text" class="form-control" name="slug" value="api" />
                        <span style="color:red">&nbsp;&nbsp;&nbsp; Urgent</span>&nbsp;&nbsp;&nbsp;<input  id="third" type="checkbox" name="urgent">
                    <div style="float:right; padding-left:4px">&nbsp;&nbsp; <span style="font-size:10px"><kbd>⌘  Alt+a</kbd></span> &nbsp;&nbsp;<input accesskey="a" style="padding:5px 20px;background-color:#227dc7" class="btn btn-primary" value="Next" type="submit" /></div>
                </form>
                        <script>
                            $(document).ready(function(){
                            $("input").click(function(){
                                    $(this).next().show();
                                    
                                });

                            });
                        </script>
                    <br /><hr />
                        <script>
                        $(document).ready(function(){
                            $('.dynamic').change(function(){
                                if($(this).val() != '')
                                {
                                    var select = $(this).attr("id");
                                    var value = $(this).val();
                                    var dependent = $(this).data('dependent');
                                    var _token = $('input[name="_token"]').val();
                                    $.ajax({
                                        url:{{ route('orders.insert.step1') }}
                                        method:"POST";
                                        data:{select:select, value:value, _token:_token, dependent:dependent},
                                        success:function(result)
                                        {
                                            $('#'+dependent).php(result);
                                        }
                                    })
                                }
                            });
                        });
                        </script>
@markdown
`You can see full documentation` [here][docs].

[docs]: http://ipool.remotewebaccess.com/root/readme#manual
@endmarkdown
            <pre style="float:right">{{ now() }}</pre>
            @else
            <!-- If user loggedOut show below content until endShow part -->            
            <div class="card-header">{{ __('Login') }}</div>
                <div class="card-body">                 
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                        @if (Route::has('register'))
                            <a style="float:right" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
                <!-- endShow -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection








