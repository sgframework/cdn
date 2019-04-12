
@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            @if (Route::has('login'))
                    @auth
            <!--<div class="top-left">
	<a href="{{ url('/') }}">SunbulahGroup</a>
	</div>-->
    <div class="top-right links">
        <div class="card-header">Insert new item</div>
            <div class="card-body">
            <!-- If user loggedIn show below content until endShow part 
            //
            //
            //
            // endShow -->

                    <span>&larr; <a href="/root">Back</a></span><span style="float:right"><a href="{{ route('items.index') }}">Products List</a> &rarr;</span><br /><hr />
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form method="POST" action="{{ route('items.insert') }}">
                        @csrf                
                            <br />
                            <input class="form-control" type="number" class="input" name="itemnumber" placeholder="Material Number" />
                            <input class="form-control" type="text" class="input" name="itemname" placeholder="Product Name" />
                            <input class="form-control" type="decimal" class="input" name="itemprice" placeholder="0.00" />
                            <input class="form-control" type="number" class="input" name="itemsku" placeholder="SKU" />
                            <input class="form-control" type="text" class="input" name="plant" placeholder="Prod. Plant" />
                            <input class="form-control" type="number" class="input" name="instock" placeholder="In Stock" />
                            <input class="form-control" type="url" class="input" name="link" placeholder="http://" />
                            <input class="form-control" type="text" class="input" name="itempic" value="item.png" placeholder="Upload an Image" />
                            <input class="btn btn-primary" type="submit" value="Add Product" />
                        </form>
                    </div>
                </div>
        </section>






        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

        {{ substr(md5('0562204816'), 0, 6) }}
        {{ $ordernumber = mt_rand(7000, 8000) }}






        
<?php
function struuid($entropy)
{
    $s=uniqid("",$entropy);
    $num= hexdec(str_replace(".","",(string)$s));
    $index = '1234567890123456789012345678901234567890';
    $base= strlen($index);
    $out = '';
        for($t = floor(log10($num) / log10($base)); $t >= 0; $t--) {
            $a = floor($num / pow($base,$t));
            $out = $out.substr($index,$a,1);
            $num = $num-($a*pow($base,$t));
        }
    return $out;
}

echo struuid(true); //Return sample: F4518NTQTQ
echo struuid(true);  //Return sample: F451FAHSUCD90N6YNRBQHLZ9E1W

?>


</div>
                    </div>
                </div>
        </section>


                    @if (!$items->count())
                        <p>No results found, sorry</p> <span>&larr; <a href="/">Back</a></span><span style="float:right"><hr />
                    @else
        <div class="card-header"><h4>Items List<h4></div>
            <div class="card-body">
                <div class="table-responsive">
                        <table  id="table" class="table table-bordered" id="crud_table">
                            <tr>
                                <th width="5%">#</th>
                                <th width="24%">Product</th>
                                <th width="15%">Item#</th>
                                <th width="10%">Price</th>
                                <th width="10%">SKU</th>
                                <th width="10%">Plant</th>
                                <th width="10%">InStock</th>
                                <th width="30%">Type</th>
                            </tr>                            
                        <tr>
                            <td contenteditable="false" class=""> </td>
                                <form action="{{ route('items.insert') }}" method="POST">
                                        <td contenteditable="false" name="itemname" class=""><input class="form-control" type="text" class="input" name="itemname" placeholder="Product Name" /></td>
                                        <td contenteditable="false" name="itemnumber" class=""><input class="form-control" type="number" class="input" name="itemnumber" placeholder="Material Number" /></td>
                                        <td contenteditable="false" name="itemprice" class=""><input class="form-control" type="decimal" class="input" name="itemprice" placeholder="0.00" /></td>
                                        <td contenteditable="false" name="itemsku" class=""><input class="form-control" type="number" class="input" name="itemsku" placeholder="SKU" /></td>
                                        <td contenteditable="false" name="plant" class=""><input class="form-control" type="text" class="input" name="plant" placeholder="Prod. Plant" /></td>
                                        <td contenteditable="false" name="instock" class=""><input class="form-control" type="number" class="input" name="instock" placeholder="In Stock" /></td>
                                        <td contenteditable="false" name="itempic" class="">
                                    <select name="type" class="form-control">
                                        <option name="" value="">select one</option>
                                        <option style="color:black" value="Vegetables">Vegetables</option>
                                        <option style="color:black" value="Vegetables">Sea Food</option>
                                        <option style="color:black" value="Vegetables">Canned</option>
                                        <option style="color:black" value="Vegetables">Bread</option>
                                        <option style="color:black" value="Vegetables">Chease</option>
                                        <option></option>
                                    </select>
                                    <center><input class="btn btn-primary" type="submit" value="Insert" /></center><hr />
                                </form>
                            </td>
                        </tr>
                    </table>
                </div>

                    <table id="myTable">
                        

                      
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
    </div>

    <form class="form-inline" action="/action_page.php">
  <label for="email">Email:</label>
  <input type="email" id="email" placeholder="Enter email" name="email">
  <label for="pwd">Password:</label>
  <input type="password" id="pwd" placeholder="Enter password" name="pswd">
  <label>
    <input type="checkbox" name="remember"> Remember me
  </label>
  <button type="submit">Submit</button>
</form>

    <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">   		
                                <label for="location" class="control-label">Choose your location</label>
                                <input type="text" name="location" class="form-control" id="location" value="{{ Request::old('location') ?: Auth::user()->location }}">
                                @if ($errors->has('location'))
                                    <span class="help-block">{{ $errors->first('location') }}</span>
                                @endif
                        </div>
                    </div>
                </div>
        </section>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <form class="form-inline" action="{{ route('orders.partials.step1') }}">
                            <label style="padding-left:20px" for="staffname">Name:</label>
                                <input hidden class="form-control" type="text" class="input" name="staffname" value="{{ Auth::user()->name }}" />{{ Auth::user()->name }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </label>
                            <label for="staffid">ID#</label>
                                <input hidden class="form-control" type="number" class="input" name="staffid" value="{{ Auth::user()->idnumber }}" />{{ Auth::user()->idnumber }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </label>
                                <input type="number" id="ponumber" placeholder="PO#" name="ponumber">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                      <select name="type" class="form-control">
                                        <option name="" value="">Select Branch</option>
                                        @foreach($branches as $branch)
                                        <option value="{{$branch->branchnumber}}">{{ $branch->branchnumber }}&nbsp;&nbsp;{{ $branch->branchname }}</option>
                                        @endforeach
                                    </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span style="color:red"> Urgent</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="urgent">
                    <div style="float:right; padding-left:90px"><button type="submit">Next</button></div>
                </form>
            </div>
        </div>
    </div>
</div>

                            </div>       

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @if (!$branches->count())
                        <p>No results found, sorry</p> <span>&larr; <a href="/">Back</a></span><span style="float:right"><hr />
                    @else
                        @foreach ($branches as $branch)
                                @include('branches/partials/branchblock')
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>



<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <select class="form-control" name="item_id">
                        @foreach($branches as $branch)
                            <option value="{{$item->item_id}}">{{ $branch->branchname }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>
</section>







<a href="#table">upTable</a>













                    <div class="pages navbar-through toolbar-through">
                        <!-- Page, "data-page" contains page name -->
                        <div data-page="index" class="page">
                            <!-- Scrollable page content -->
                            <div class="page-content">
                                <div class="content-block">
                                    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                                        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                                            <h1 class="h2">Dashboard</h1>
                                            <div class="btn-toolbar mb-2 mb-md-0">
                                                <div class="btn-group mr-2">
                                                    <button class="btn btn-sm btn-outline-secondary">Share</button>
                                                    <button class="btn btn-sm btn-outline-secondary">Export</button>
                                                </div>
                                                <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                                                    <span data-feather="calendar"></span>
                                                    This week
                                                </button>
                                            </div>
                                        </div>
                                        <canvas class="my-4" id="myChart" width="900" height="380"></canvas>
                                        <h2>Section title</h2>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-sm">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Header</th>
                                                        <th>Header</th>
                                                        <th>Header</th>
                                                        <th>Header</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1,001</td>
                                                        <td>Lorem</td>
                                                        <td>ipsum</td>
                                                        <td>dolor</td>
                                                        <td>sit</td>
                                                    </tr>
                                                    <tr>
                                                        <td>1,002</td>
                                                        <td>amet</td>
                                                        <td>consectetur</td>
                                                        <td>adipiscing</td>
                                                        <td>elit</td>
                                                    </tr>
                                                    <tr>
                                                        <td>1,003</td>
                                                        <td>Integer</td>
                                                        <td>nec</td>
                                                        <td>odio</td>
                                                        <td>Praesent</td>
                                                    </tr>
                                                    <tr>
                                                        <td>1,003</td>
                                                        <td>libero</td>
                                                        <td>Sed</td>
                                                        <td>cursus</td>
                                                        <td>ante</td>
                                                    </tr>
                                                    <tr>
                                                        <td>1,004</td>
                                                        <td>dapibus</td>
                                                        <td>diam</td>
                                                        <td>Sed</td>
                                                        <td>nisi</td>
                                                    </tr>
                                                    <tr>
                                                        <td>1,005</td>
                                                        <td>Nulla</td>
                                                        <td>quis</td>
                                                        <td>sem</td>
                                                        <td>at</td>
                                                    </tr>
                                                    <tr>
                                                        <td>1,006</td>
                                                        <td>nibh</td>
                                                        <td>elementum</td>
                                                        <td>imperdiet</td>
                                                        <td>Duis</td>
                                                    </tr>
                                                    <tr>
                                                        <td>1,007</td>
                                                        <td>sagittis</td>
                                                        <td>ipsum</td>
                                                        <td>Praesent</td>
                                                        <td>mauris</td>
                                                    </tr>
                                                    <tr>
                                                        <td>1,008</td>
                                                        <td>Fusce</td>
                                                        <td>nec</td>
                                                        <td>tellus</td>
                                                        <td>sed</td>
                                                    </tr>
                                                    <tr>
                                                        <td>1,009</td>
                                                        <td>augue</td>
                                                        <td>semper</td>
                                                        <td>porta</td>
                                                        <td>Mauris</td>
                                                    </tr>
                                                    <tr>
                                                        <td>1,010</td>
                                                        <td>massa</td>
                                                        <td>Vestibulum</td>
                                                        <td>lacinia</td>
                                                        <td>arcu</td>
                                                    </tr>
                                                    <tr>
                                                        <td>1,011</td>
                                                        <td>eget</td>
                                                        <td>nulla</td>
                                                        <td>Class</td>
                                                        <td>aptent</td>
                                                    </tr>
                                                    <tr>
                                                        <td>1,012</td>
                                                        <td>taciti</td>
                                                        <td>sociosqu</td>
                                                        <td>ad</td>
                                                        <td>litora</td>
                                                    </tr>
                                                    <tr>
                                                        <td>1,013</td>
                                                        <td>torquent</td>
                                                        <td>per</td>
                                                        <td>conubia</td>
                                                        <td>nostra</td>
                                                    </tr>
                                                    <tr>
                                                        <td>1,014</td>
                                                        <td>per</td>
                                                        <td>inceptos</td>
                                                        <td>himenaeos</td>
                                                        <td>Curabitur</td>
                                                    </tr>
                                                    <tr>
                                                        <td>1,015</td>
                                                        <td>sodales</td>
                                                        <td>ligula</td>
                                                        <td>in</td>
                                                        <td>libero</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </main>
                                </div>
                            </div>
                            <!-- Bootstrap core JavaScript
                            ================================================== -->
                            <!-- Placed at the end of the document so the pages load faster -->
                            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                            <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
                            <script src="../../../../assets/js/vendor/popper.min.js"></script>
                            <script src="../../../../dist/js/bootstrap.min.js"></script>
                            <!-- Icons -->
                            <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
                            <script>
                                feather.replace()
                            </script>
                            <!-- Graphs -->
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
                            <script>
                                var ctx = document.getElementById("myChart");
                                var myChart = new Chart(ctx, {
                                    type: 'line',
                                    data: {
                                        labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                                        datasets: [{
                                            data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
                                            lineTension: 0,
                                            backgroundColor: 'transparent',
                                            borderColor: '#007bff',
                                            borderWidth: 4,
                                            pointBackgroundColor: '#007bff'
                                        }]
                                    },
                                    options: {
                                        scales: {
                                            yAxes: [{
                                                ticks: {
                                                    beginAtZero: false
                                                }
                                            }]
                                        },
                                        legend: {
                                            display: false,
                                        }
                                    }
                                });
                            </script>
























        

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                    @include('tests/markdown')

                    {{ url()->current() }}


                    {{ $user = cdn\User::find(1) }}
      
<br />
<br />
                    {{ $branch = cdn\Models\Branch::find(1) }}

                    <br />
<br />
                     {{ url("/user/{$user->idnumber}") }}

                     <br />

                     <br />

{{ $user = cdn\User::find(2) }}

<br />
<br />
{{ $user->toJson() }}

<br />
<br />

{{ $user->toJson(JSON_PRETTY_PRINT) }}

<br />
<br />

@php 










class TestClass
{
    public $foo;

    public function __construct($foo)
    {
        $this->foo = $foo;
    }

    public function __toString()
    {
        return $this->foo;
    }
}

$class = new TestClass('Hello');
echo $class;










class Connection
{
    protected $link;
    private $dsn, $username, $password;
    
    public function __construct($dsn, $username, $password)
    {
        $this->dsn = $dsn;
        $this->username = $username;
        $this->password = $password;
        $this->connect();
    }
    
    private function connect()
    {
        $this->link = new PDO($this->dsn, $this->username, $this->password);
    }
    
    public function __sleep()
    {
        return array('dsn', 'username', 'password');
    }
    
    public function __wakeup()
    {
        $this->connect();
    }
}







$users = cdn\User::all();

$users->toArray();

print_r($users);

echo '<br />';
echo '<br />';
echo '<br />';

$branches = cdn\Models\Branch::all();

$branches->toArray();

print_r($branches);

echo '<br />';
echo '<br />';
echo '<br />';

$items = cdn\Models\Item::all();

$items->toArray();

print_r($items);

echo '<br />';
echo '<br />';
echo '<br />';

$orders = cdn\Models\Order::all();

$orders->toArray();

print_r($orders);

@endphp

                    </div>
                    </div>
                </div>
        </section>

        

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                    <button onclick="myFunction()">Try it</button>
                    <p id="demo"></p>
                    <script>
                    function myFunction() {
                    var x = document.getElementsByTagName("TITLE")[0].text;
                    document.getElementById("demo").innerHTML = x;
                    }
                    </script>


                    </div>
                    </div>
                </div>
        </section>

        

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">




                    </div>
                    </div>
                </div>
        </section>

        

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                    
<?php
// Given these variables ...
$nameTypes    = array("first", "last", "company");
$name_first   = "John";
$name_last    = "Doe";
$name_company = "PHP.net";

// Then this loop is ...
foreach($nameTypes as $type)
  print ${"name_$type"} . "\n";

// ... equivalent to this print statement.
print "$name_first\n$name_last\n$name_company\n";
?>
                    </div>
                    </div>
                </div>
        </section>

        

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">



                                    <span class="h5"><i class="fas fa-list"></i> Orders List</span>
                                        <div class="table-responsive">
                                        <style type="text/css">
    table{
        width: 100%;
        margin: 20px 0;
        border-collapse: collapse;
    }
    table, th, td{
        border: 1px solid #cdcdcd;
    }
    table th, table td{
        padding: 5px;
        text-align: left;
    }
</style>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $(".add-row").click(function(){
            var name = $("#name").val();
            var email = $("#email").val();
            var markup = "<tr><td><input type='checkbox' name='record'></td><td>" + name + "</td><td>" + email + "</td></tr>";
            $("table tbody").append(markup);
        });
        
        // Find and remove selected table rows
        $(".delete-row").click(function(){
            $("table tbody").find('input[name="record"]').each(function(){
                if($(this).is(":checked")){
                    $(this).parents("tr").remove();
                }
            });
        });
    });    
</script>
</head>


<body>


    <form>
        <input type="text" id="name" placeholder="Name">
        <input type="text" id="email" placeholder="Email Address">
        <input type="button" class="add-row" value="Add Row">


        <table class="table table-striped table-sm">
                <thead>
            <tr>
                <th>Select</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><input type="checkbox" name="record"></td>
                <td>Peter Parker</td>
                <td>peterparker@mail.com</td>
            </tr>
        </tbody>
    </table>

    </form>

    <button type="button" class="delete-row">Delete Row</button>
                                            <table class="table table-striped table-sm">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Header</th>
                                                        <th>Header</th>
                                                        <th>Header</th>
                                                        <th>Header</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1,001</td>
                                                        <td>Lorem</td>
                                                        <td>ipsum</td>
                                                        <td>dolor</td>
                                                        <td>sit</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        <hr />






                    </div>
                    </div>
                </div>
        </section>

        

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">


                    <button id="addContentBtn"> add content to table</button>
<table id="testTbl"></table>
<script>

$(document).ready(function() {

   ("#addContentBtn").click(function(){
        var str="<tr><td>1</td><td><button>button</button></td></tr>" +
         "<tr><td>2</td><td><button>button</button></td></tr>" ;
        $(str).appendTo("#testTbl");
   })

   //this is event delegation
   $("#testTbl").on("click","button",function(){
                alert("clicked");
   })

   </script>


                    </div>
                    </div>
                </div>
        </section>

        

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">









<script>
                    $(document).ready(function(){

var data_fo = $('.partner').html();
var sd = '<div class="btn btn-danger remove-add-more">Remove</div>';
var max_fields = 5; //maximum input boxes allowed
var wrapper = $(".partners"); //Fields wrapper
var add_button = $(".add-more"); //Add button ID

var x = 1; //initlal text box count
$(add_button).click(function(e){ //on add input button click
  e.preventDefault();
  if(x < max_fields){ //max input box allowed
    x++; //text box increment
    var partnerClone = $('.partner').first().clone();
    $(sd).appendTo(partnerClone);
    $(wrapper).append(partnerClone);
  }
});

$(wrapper).on("click",".remove-add-more", function(e){ //user click on remove text
    e.preventDefault();
    $(this).parent('.partner').remove();
    $(this).remove();
    x--;
});
});

</script>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<div class="form-group add-field">
  <div class="partners">  
    <div class="partner">
      <table>
        <tr>
          <td>
            <select name="partnerSelect[]" id="partnerSelect" class="form-control">
            <option disabled selected value> -- select an option -- </option>
            <?php                                       
            ?>
            <option value=""></option>

            </select>  
          </td>
          <td><input type="text" placeholder="Enter description" name="description[]" id="description" class="form-control" /></td>
        </tr>
      </table>
    </div>
  </div>
  <div class="btn btn-warning add-more"><span>+ Add More</span></div>
</div>













                    </div>
                    </div>
                </div>
        </section>

        

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                    <form>
    Fruit:
    <select name="name" id="branchname">
        <option>Apple</option>
        <option>Banana</option>
        <option>Orange</option>
        <option>Pear</option>
    </select>
    Variety:
    <select name="branchnumber" id="branchnumber">
    </select>
</form>











@php


@endphp


                    </div>
                    </div>
                </div>
        </section>

        
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
