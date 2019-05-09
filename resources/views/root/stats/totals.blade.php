@extends('layouts.root')
@section('content')


<div class="container">
    <div class="row justify-content-center">

    @if ( Auth::user()->is_permission == '0')
    <div style="padding-top:200px;padding-bottom:200px">
    <h3 class="alert alert-warning"><i class="fas fa-exclamation-triangle"></i> You don't have the right permissions to view this content, sorry!</h3>
        </div>

        @else


                    @auth
    <!--<div class="col-md-12">
    <span style="float:left"><a class="btn btn-primary" href="{{ route('items.add') }}">+ Add Product</a></span>  &nbsp; &nbsp; &nbsp; <span style="float:center"><a class="btn btn-primary" href="{{ route('items.index') }}">List Products</a></span> &nbsp; &nbsp; &nbsp; <span style="float:right"><a class="btn btn-primary" href="/submit-rtv">Submit a RTV Request &rarr;</a></span><br /><hr />

           <form method="get" action="/add-item"><span><button type="submit" class="btn btn-primary">Submit a RTV Request</button></span> </form>   <span><form method="get" action="/items"><button type="submit" class="btn btn-primary">Submit a RTV Request</button></form></span>    <span><form method="get" action="/submit-rtv"><button type="submit" class="btn btn-primary">Submit a RTV Request</button></form></span>
        </div>-->
<div class="col-md-12">
    <div style="background-color:#f8fafc" class="card">
        <div class="top-right links">
        </div>
            <div class="card-header"><span style="font-size:24px"><i class="fas fa-history"></i> All Orders By User Summery.</div></span>
                <div class="card-body">
                <!-- If user loggedIn show below content until endShow part 
                //
                //
                //
                // endShow -->


<?php
$page = 'http://ipool.remotewebaccess.com/root/users/orders/stats#all-stats';
$sec = "912";
//dump($page);
?>
        <head>
            <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
        </head>



                    @if (Session::has('success'))
                            <div class="alert alert-success">{{ Session::get('success') }}</div>
                            <br />
                    @endif









@markdown

#### Stats By Month

@endmarkdown





<!--
#FF0000
#FF3300
#FF6600
#FF9900
#FFCC00
#FFFF00
#009900
#00CC00
#00FF00
-->


<style>

.discount {
    color:white;
    background-color:green;
}
.zero {
    color:black;
    background-color:white;

}
.poor {
    color:white;
    background-color:#FF0000;

}
.meh {
    color:white;
    background-color:#FF3300;

}
.weak {
    color:white;
    background-color:#FF6600;

}
.good {
    color:black;
    background-color:#ff9933;

}
.excellent {
    color:black;
    background-color:#ffcc00;

}
.pro {
    color:black;
    background-color:#ffff00;

}
.ffreak {
    color:black;
    background-color:#ccff33;

}
.super {
    color:black;
    background-color:#99ff33;

}
.master {
    color:black;
    background-color:#66ff33;

}
.alpha {
    color:black;
    background-color:#33cc33;

}
.omega {
    color:black;
    background-color:#00cc00;

}
.elite {
    color:white;
    background-color:#000066;

}

</style>




<script>
$(document).ready(function(){
  
  var mc = {
    '--1'     : 'discount',
    '0'     : 'zero',
    '1-10000'     : 'poor',
    '10001-50000'    : 'meh',
    '50001-100000'   : 'weak',
    '100001-250000'     : 'good',
    '250001-500000'    : 'excellent',
    '500001-1000000'   : 'pro',
    '1000001-1500000'   : 'ffreak',
    '1500001-2000000'   : 'super',
    '2000001-3000000'   : 'master',
    '3000001-4000000'   : 'alpha',
    '4000001-5000000'   : 'omega',
    '5000001-10000000'   : 'elite'
  };
  
function between(x, min, max) {
  return x >= min && x <= max;
}
  

  
  var dc;
  var first; 
  var second;
  var th;
  
  $('td').each(function(index){
    
    th = $(this);
    
    dc = parseInt($(this).attr('data-color'),10);
    
    
      $.each(mc, function(name, value){
        
        
        first = parseInt(name.split('-')[0],10);
        second = parseInt(name.split('-')[1],10);
        
        console.log(between(dc, first, second));
        
        if( between(dc, first, second) ){
          th.addClass(value);
        }

    
    
      });
    
  });
});
</script>

<div class="row">





<div class="col-md-3">
        <div  class="card text-white bg-dark mb-3" style="max-width: 18rem;" >
            <div class="card-head">
                <h4 style="padding-left:8px;padding-top:8px">January</h4>
                    <div class="card-body">
                    <table id="myDarkTable">
                            <thead>
                                <tr>
                                    <th style="color:white;text-align:center">POS</th>
                                    <th style="color:white;text-align:center">Items</th>
                                    <th style="color:white;text-align:center">Qtys</th>
                                    <th style="color:white;text-align:center">Free Cases</th>
                                    <th style="color:white;text-align:center">Discounts</th>
                                    <th style="color:white;text-align:center">Total Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th style="color:white;text-align:center">{{ $countajuneo }}</th>
                                    <td style="color:white;text-align:center">{{ $sumajuneoi }}</td>
                                    <td style="color:white;text-align:center">{{ $sumajuneoq }}</td>
                                    <td style="color:white;text-align:center">{{ $sumajuneof }}</td>
                                    <td style="color:white;text-align:center">{{ number_format($sumajuneod) }}.00 SAR</td>
                                    <td style="color:white;text-align:center">{{ number_format($sumajuneop) }}.00 SAR</td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>            
    </div>
    <div class="col-md-3">
        <div  class="card text-white bg-dark mb-3" style="max-width: 18rem;" >
            <div class="card-head">
                <h4 style="padding-left:8px;padding-top:8px">February</h4>
                    <div class="card-body">
                    <table id="myDarkTable">
                            <thead>
                                <tr>
                                    <th style="color:white;text-align:center">POS</th>
                                    <th style="color:white;text-align:center">Items</th>
                                    <th style="color:white;text-align:center">Qtys</th>
                                    <th style="color:white;text-align:center">Free Cases</th>
                                    <th style="color:white;text-align:center">Discounts</th>
                                    <th style="color:white;text-align:center">Total Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th style="color:white;text-align:center">{{ $countajuneo }}</th>
                                    <td style="color:white;text-align:center">{{ $sumajuneoi }}</td>
                                    <td style="color:white;text-align:center">{{ $sumajuneoq }}</td>
                                    <td style="color:white;text-align:center">{{ $sumajuneof }}</td>
                                    <td style="color:white;text-align:center">{{ number_format($sumajuneod) }}.00 SAR</td>
                                    <td style="color:white;text-align:center">{{ number_format($sumajuneop) }}.00 SAR</td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>            
    </div>
    <div class="col-md-3">
        <div  class="card text-white bg-dark mb-3" style="max-width: 18rem;" >
            <div class="card-head">
                <h4 style="padding-left:8px;padding-top:8px">March</h4>
                    <div class="card-body">
                    <table id="myDarkTable">
                            <thead>
                                <tr>
                                    <th style="color:white;text-align:center">POS</th>
                                    <th style="color:white;text-align:center">Items</th>
                                    <th style="color:white;text-align:center">Qtys</th>
                                    <th style="color:white;text-align:center">Free Cases</th>
                                    <th style="color:white;text-align:center">Discounts</th>
                                    <th style="color:white;text-align:center">Total Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th style="color:white;text-align:center">{{ $countajuneo }}</th>
                                    <td style="color:white;text-align:center">{{ $sumajuneoi }}</td>
                                    <td style="color:white;text-align:center">{{ $sumajuneoq }}</td>
                                    <td style="color:white;text-align:center">{{ $sumajuneof }}</td>
                                    <td style="color:white;text-align:center">{{ number_format($sumajuneod) }}.00 SAR</td>
                                    <td style="color:white;text-align:center">{{ number_format($sumajuneop) }}.00 SAR</td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>            
    </div>

    <div class="col-md-3">
        <div  class="card text-black bg-light mb-3" style="max-width: 18rem;" >
            <div class="card-head">
                <h4 style="padding-left:8px;padding-top:8px">First Quarter</h4>
                    <div class="card-body">
                        <table id="myDarkTable">
                            <thead>
                                <tr>
                                    <th style="color:white;text-align:center">POS</th>
                                    <th style="color:white;text-align:center">Items</th>
                                    <th style="color:white;text-align:center">Qtys</th>
                                    <th style="color:white;text-align:center">Free Cases</th>
                                    <th style="color:white;text-align:center">Discounts</th>
                                    <th style="color:white;text-align:center">Total Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th style="color:white;text-align:center">{{ $countajuneo }}</th>
                                    <td style="color:white;text-align:center">{{ $sumajuneoi }}</td>
                                    <td style="color:white;text-align:center">{{ $sumajuneoq }}</td>
                                    <td style="color:white;text-align:center">{{ $sumajuneof }}</td>
                                    <td style="color:white;text-align:center">{{ number_format($sumajuneod) }}.00 SAR</td>
                                    <td style="color:white;text-align:center">{{ number_format($sumajuneop) }}.00 SAR</td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>            
    </div>



    <div class="col-md-3">
        <div  class="card text-white bg-dark mb-3" style="max-width: 18rem;" >
                <div class="card-header">
                <h4 style="padding-left:8px;padding-top:8px">April</h4>
                    <div class="card-body text-box">
                        <table id="myDarkTable"  >
                            <thead>
                                <tr>
                                    <th style="color:white;text-align:center">POS</th>
                                    <th style="color:white;text-align:center">Items</th>
                                    <th style="color:white;text-align:center">Qtys</th>
                                    <th style="color:white;text-align:center">Free Cases</th>
                                    <th style="color:white;text-align:center">Discounts</th>
                                    <th style="color:white;text-align:center">Total Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th style="color:white;text-align:center">{{ $countaapro }}</th>
                                    <td style="color:white;text-align:center">{{ $sumaaproi }}</td>
                                    <td style="color:white;text-align:center">{{ $sumaaproq }}</td>
                                    <td style="color:white;text-align:center">{{ $sumaaprof }}</td>
                                    <td style="color:white;text-align:center">{{ number_format($sumaaprod) }}.00 SAR</td>
                                    <td style="color:white;text-align:center">{{ number_format($sumaaprop) }}.00 SAR</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>            
        </div>
    <div class="col-md-3">
        <div  class="card text-white bg-dark mb-3" style="max-width: 18rem;" >
            <div class="card-head">
            <h4 style="padding-left:8px;padding-top:8px">May</h4>
                    <div class="card-body">
                        <table id="myDarkTable">
                            <thead>
                                <tr>
                                    <th style="color:white;text-align:center">POS</th>
                                    <th style="color:white;text-align:center">Items</th>
                                    <th style="color:white;text-align:center">Qtys</th>
                                    <th style="color:white;text-align:center">Free Cases</th>
                                    <th style="color:white;text-align:center">Discounts</th>
                                    <th style="color:white;text-align:center">Total Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th style="color:white;text-align:center">{{ $countamo }}</th>
                                    <td style="color:white;text-align:center">{{ $sumamoi }}</td>
                                    <td style="color:white;text-align:center">{{ $sumamoq }}</td>
                                    <td style="color:white;text-align:center">{{ $sumamof }}</td>
                                    <td style="color:white;text-align:center">{{ number_format($sumamod) }}.00 SAR</td>
                                    <td style="color:white;text-align:center">{{ number_format($sumamop) }}.00 SAR</td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>            
    </div>
    <div class="col-md-3">
        <div  class="card text-white bg-dark mb-3" style="max-width: 18rem;" >
            <div class="card-head">
                <h4 style="padding-left:8px;padding-top:8px">June</h4>
                    <div class="card-body">
                    <table id="myDarkTable">
                            <thead>
                                <tr>
                                    <th style="color:white;text-align:center">POS</th>
                                    <th style="color:white;text-align:center">Items</th>
                                    <th style="color:white;text-align:center">Qtys</th>
                                    <th style="color:white;text-align:center">Free Cases</th>
                                    <th style="color:white;text-align:center">Discounts</th>
                                    <th style="color:white;text-align:center">Total Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th style="color:white;text-align:center">{{ $countajuneo }}</th>
                                    <td style="color:white;text-align:center">{{ $sumajuneoi }}</td>
                                    <td style="color:white;text-align:center">{{ $sumajuneoq }}</td>
                                    <td style="color:white;text-align:center">{{ $sumajuneof }}</td>
                                    <td style="color:white;text-align:center">{{ number_format($sumajuneod) }}.00 SAR</td>
                                    <td style="color:white;text-align:center">{{ number_format($sumajuneop) }}.00 SAR</td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>            
    </div>

    <div class="col-md-3">
        <div  class="card text-black bg-light mb-3" style="max-width: 18rem;" >
            <div class="card-head">
                <h4 style="padding-left:8px;padding-top:8px">Second Quarter</h4>
                    <div class="card-body">
                        <table id="myDarkTable">
                            <thead>
                                <tr>
                                    <th style="color:white;text-align:center">POS</th>
                                    <th style="color:white;text-align:center">Items</th>
                                    <th style="color:white;text-align:center">Qtys</th>
                                    <th style="color:white;text-align:center">Free Cases</th>
                                    <th style="color:white;text-align:center">Discounts</th>
                                    <th style="color:white;text-align:center">Total Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th style="color:white;text-align:center">{{ $countasecondquartero }}</th>
                                    <td style="color:white;text-align:center">{{ $sumasecondquarteroi }}</td>
                                    <td style="color:white;text-align:center">{{ $sumasecondquarteroq }}</td>
                                    <td style="color:white;text-align:center">{{ $sumasecondquarterof }}</td>
                                    <td style="color:white;text-align:center">{{ number_format($sumasecondquarterod) }}.00 SAR</td>
                                    <td style="color:white;text-align:center">{{ number_format($sumasecondquarterop) }}.00 SAR</td>
                                </tr>
                            </tbody>
                    </table>
                </div>
            </div>
        </div>            
    </div>

<div class="col-md-3">
    <div  class="card text-white bg-dark mb-3" style="max-width: 18rem;" >
        <div class="card-head">
            <h4 style="padding-left:8px;padding-top:8px">July</h4>
                <div class="card-body">
                <table id="myDarkTable">
                        <thead>
                            <tr>
                                <th style="color:white;text-align:center">POS</th>
                                <th style="color:white;text-align:center">Items</th>
                                <th style="color:white;text-align:center">Qtys</th>
                                <th style="color:white;text-align:center">Free Cases</th>
                                <th style="color:white;text-align:center">Discounts</th>
                                <th style="color:white;text-align:center">Total Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th style="color:white;text-align:center">{{ $countajuneo }}</th>
                                <td style="color:white;text-align:center">{{ $sumajuneoi }}</td>
                                <td style="color:white;text-align:center">{{ $sumajuneoq }}</td>
                                <td style="color:white;text-align:center">{{ $sumajuneof }}</td>
                                <td style="color:white;text-align:center">{{ number_format($sumajuneod) }}.00 SAR</td>
                                <td style="color:white;text-align:center">{{ number_format($sumajuneop) }}.00 SAR</td>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>            
</div>
<div class="col-md-3">
    <div  class="card text-white bg-dark mb-3" style="max-width: 18rem;" >
        <div class="card-head">
            <h4 style="padding-left:8px;padding-top:8px">August</h4>
                <div class="card-body">
                <table id="myDarkTable">
                        <thead>
                            <tr>
                                <th style="color:white;text-align:center">POS</th>
                                <th style="color:white;text-align:center">Items</th>
                                <th style="color:white;text-align:center">Qtys</th>
                                <th style="color:white;text-align:center">Free Cases</th>
                                <th style="color:white;text-align:center">Discounts</th>
                                <th style="color:white;text-align:center">Total Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th style="color:white;text-align:center">{{ $countajuneo }}</th>
                                <td style="color:white;text-align:center">{{ $sumajuneoi }}</td>
                                <td style="color:white;text-align:center">{{ $sumajuneoq }}</td>
                                <td style="color:white;text-align:center">{{ $sumajuneof }}</td>
                                <td style="color:white;text-align:center">{{ number_format($sumajuneod) }}.00 SAR</td>
                                <td style="color:white;text-align:center">{{ number_format($sumajuneop) }}.00 SAR</td>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>            
</div>
<div class="col-md-3">
    <div  class="card text-white bg-dark mb-3" style="max-width: 18rem;" >
        <div class="card-head">
            <h4 style="padding-left:8px;padding-top:8px">September</h4>
                <div class="card-body">
                <table id="myDarkTable">
                        <thead>
                            <tr>
                                <th style="color:white;text-align:center">POS</th>
                                <th style="color:white;text-align:center">Items</th>
                                <th style="color:white;text-align:center">Qtys</th>
                                <th style="color:white;text-align:center">Free Cases</th>
                                <th style="color:white;text-align:center">Discounts</th>
                                <th style="color:white;text-align:center">Total Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th style="color:white;text-align:center">{{ $countajuneo }}</th>
                                <td style="color:white;text-align:center">{{ $sumajuneoi }}</td>
                                <td style="color:white;text-align:center">{{ $sumajuneoq }}</td>
                                <td style="color:white;text-align:center">{{ $sumajuneof }}</td>
                                <td style="color:white;text-align:center">{{ number_format($sumajuneod) }}.00 SAR</td>
                                <td style="color:white;text-align:center">{{ number_format($sumajuneop) }}.00 SAR</td>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>            
</div>

<div class="col-md-3">
    <div  class="card text-black bg-light mb-3" style="max-width: 18rem;" >
        <div class="card-head">
            <h4 style="padding-left:8px;padding-top:8px">Third Quarter</h4>
                <div class="card-body">
                    <table id="myDarkTable">
                        <thead>
                            <tr>
                                <th style="color:white;text-align:center">POS</th>
                                <th style="color:white;text-align:center">Items</th>
                                <th style="color:white;text-align:center">Qtys</th>
                                <th style="color:white;text-align:center">Free Cases</th>
                                <th style="color:white;text-align:center">Discounts</th>
                                <th style="color:white;text-align:center">Total Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th style="color:white;text-align:center">{{ $countajuneo }}</th>
                                <td style="color:white;text-align:center">{{ $sumajuneoi }}</td>
                                <td style="color:white;text-align:center">{{ $sumajuneoq }}</td>
                                <td style="color:white;text-align:center">{{ $sumajuneof }}</td>
                                <td style="color:white;text-align:center">{{ number_format($sumajuneod) }}.00 SAR</td>
                                <td style="color:white;text-align:center">{{ number_format($sumajuneop) }}.00 SAR</td>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>            
</div>



<div class="col-md-3">
        <div  class="card text-white bg-dark mb-3" style="max-width: 18rem;" >
            <div class="card-head">
                <h4 style="padding-left:8px;padding-top:8px">October</h4>
                    <div class="card-body">
                    <table id="myDarkTable">
                            <thead>
                                <tr>
                                    <th style="color:white;text-align:center">POS</th>
                                    <th style="color:white;text-align:center">Items</th>
                                    <th style="color:white;text-align:center">Qtys</th>
                                    <th style="color:white;text-align:center">Free Cases</th>
                                    <th style="color:white;text-align:center">Discounts</th>
                                    <th style="color:white;text-align:center">Total Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th style="color:white;text-align:center">{{ $countajuneo }}</th>
                                    <td style="color:white;text-align:center">{{ $sumajuneoi }}</td>
                                    <td style="color:white;text-align:center">{{ $sumajuneoq }}</td>
                                    <td style="color:white;text-align:center">{{ $sumajuneof }}</td>
                                    <td style="color:white;text-align:center">{{ number_format($sumajuneod) }}.00 SAR</td>
                                    <td style="color:white;text-align:center">{{ number_format($sumajuneop) }}.00 SAR</td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>            
    </div>
    <div class="col-md-3">
        <div  class="card text-white bg-dark mb-3" style="max-width: 18rem;" >
            <div class="card-head">
                <h4 style="padding-left:8px;padding-top:8px">November</h4>
                    <div class="card-body">
                    <table id="myDarkTable">
                            <thead>
                                <tr>
                                    <th style="color:white;text-align:center">POS</th>
                                    <th style="color:white;text-align:center">Items</th>
                                    <th style="color:white;text-align:center">Qtys</th>
                                    <th style="color:white;text-align:center">Free Cases</th>
                                    <th style="color:white;text-align:center">Discounts</th>
                                    <th style="color:white;text-align:center">Total Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th style="color:white;text-align:center">{{ $countajuneo }}</th>
                                    <td style="color:white;text-align:center">{{ $sumajuneoi }}</td>
                                    <td style="color:white;text-align:center">{{ $sumajuneoq }}</td>
                                    <td style="color:white;text-align:center">{{ $sumajuneof }}</td>
                                    <td style="color:white;text-align:center">{{ number_format($sumajuneod) }}.00 SAR</td>
                                    <td style="color:white;text-align:center">{{ number_format($sumajuneop) }}.00 SAR</td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>            
    </div>
    <div class="col-md-3">
        <div  class="card text-white bg-dark mb-3" style="max-width: 18rem;" >
            <div class="card-head">
                <h4 style="padding-left:8px;padding-top:8px">December</h4>
                    <div class="card-body">
                    <table id="myDarkTable">
                            <thead>
                                <tr>
                                    <th style="color:white;text-align:center">POS</th>
                                    <th style="color:white;text-align:center">Items</th>
                                    <th style="color:white;text-align:center">Qtys</th>
                                    <th style="color:white;text-align:center">Free Cases</th>
                                    <th style="color:white;text-align:center">Discounts</th>
                                    <th style="color:white;text-align:center">Total Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th style="color:white;text-align:center">{{ $countajuneo }}</th>
                                    <td style="color:white;text-align:center">{{ $sumajuneoi }}</td>
                                    <td style="color:white;text-align:center">{{ $sumajuneoq }}</td>
                                    <td style="color:white;text-align:center">{{ $sumajuneof }}</td>
                                    <td style="color:white;text-align:center">{{ number_format($sumajuneod) }}.00 SAR</td>
                                    <td style="color:white;text-align:center">{{ number_format($sumajuneop) }}.00 SAR</td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>            
    </div>

    <div class="col-md-3">
        <div  class="card text-black bg-light mb-3" style="max-width: 18rem;" >
            <div class="card-head">
                <h4 style="padding-left:8px;padding-top:8px">Fourth Quarter</h4>
                    <div class="card-body">
                        <table id="myDarkTable">
                            <thead>
                                <tr>
                                    <th style="color:white;text-align:center">POS</th>
                                    <th style="color:white;text-align:center">Items</th>
                                    <th style="color:white;text-align:center">Qtys</th>
                                    <th style="color:white;text-align:center">Free Cases</th>
                                    <th style="color:white;text-align:center">Discounts</th>
                                    <th style="color:white;text-align:center">Total Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th style="color:white;text-align:center">{{ $countajuneo }}</th>
                                    <td style="color:white;text-align:center">{{ $sumajuneoi }}</td>
                                    <td style="color:white;text-align:center">{{ $sumajuneoq }}</td>
                                    <td style="color:white;text-align:center">{{ $sumajuneof }}</td>
                                    <td style="color:white;text-align:center">{{ number_format($sumajuneod) }}.00 SAR</td>
                                    <td style="color:white;text-align:center">{{ number_format($sumajuneop) }}.00 SAR</td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>            
    </div>


</div>


@markdown

#### Stats By Team / Saleman

@endmarkdown




<div class="row">



      
<!-- Firas Team --> 



<!--

    ->with('firas', $firas)
    ->with('ftto', $ftto)
    ->with('countftto', $countftto)
    ->with('sumfttoi', $sumfttoi)
    ->with('sumfttoq', $sumfttoq)
    ->with('sumfttof', $sumfttof)
    ->with('sumfttod', $sumfttod)
    ->with('sumfttop', $sumfttop)

-->











<div class="col-md-4" >
      <!-- FIRAS SECTION -->
      <div class="my-3 p-3 bg-white rounded box-shadow">
        <strong><h3 class="border-bottom border-gray pb-2 mb-0">Firas Team</h3></strong>
        <div class="newspaper media text-muted pt-3">
          <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 64px; height: 64px;" src="{{ asset('images/uploads/avatars') }}/{{ $firas->photo }}" data-holder-rendered="true">
          <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
          <strong><h5 class="border-bottom border-gray pb-2 mb-0"> <strong class="d-block text-gray-dark">{{ $firas->name }} <span class="badge badge-danger">SUPERVISOR</span></strong></h5></strong>
          </p>
        </div>
        <table id="myTable">
    <thead>
        <tr>
            <th style="text-align:center">#</th>
            <th style="text-align:center">Today</th>
            <th style="text-align:center">Yesterday</th>
            <th style="text-align:center">Tow Days Ago</th>
            <th style="text-align:center">Three Days Ago</th>
            <th style="text-align:center">All</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th style="text-align:center">POS</th>
            <td style="text-align:center" data-color="{{ $countftto }}" >{{ $countftto }}</td>
            <td style="text-align:center" data-color="{{ $countftyo }}" >{{ $countftyo }}</td>
            <td style="text-align:center" data-color="{{ $countftbyo }}" >{{ $countftbyo }}</td>
            <td style="text-align:center" data-color="{{ $countftbtdo }}" >{{ $countftbtdo }}</td>
            <td style="text-align:center" data-color="{{ $countftao }}" >{{ $countftao }}</td>
        </tr>
        <tr>
            <th style="text-align:center">I</th>
            <td style="text-align:center">{{ $sumfttoi }}</td>
            <td style="text-align:center">{{ $sumftyoi }}</td>
            <td style="text-align:center">{{ $sumftbyoi }}</td>
            <td style="text-align:center">{{ $sumftbtdoi }}</td>
            <td style="text-align:center">{{ $sumftaoi }}</td>
            </tr>
        <tr>
            <th style="text-align:center">Q</th>
            <td style="text-align:center">{{ $sumfttoq }}</td>
            <td style="text-align:center">{{ $sumftyoq }}</td>
            <td style="text-align:center">{{ $sumftbyoq }}</td>
            <td style="text-align:center">{{ $sumftbtdoq }}</td>
            <td style="text-align:center">{{ $sumftaoq }}</td>
        </tr>
            <tr>
            <th style="text-align:center">F</th>
            <td style="text-align:center">{{ $sumfttof }}</td>
            <td style="text-align:center">{{ $sumftyof }}</td>
            <td style="text-align:center">{{ $sumftbyof }}</td>
            <td style="text-align:center">{{ $sumftbtdof }}</td>
            <td style="text-align:center">{{ $sumftaof }}</td>
        </tr>
        <tr>

            <th style="text-align:center">D</th>
            <td style="text-align:center">{{ number_format($sumfttod) }}.00 SAR</td>
            <td style="text-align:center">{{ number_format($sumftyod) }}.00 SAR</td>
            <td style="text-align:center">{{ number_format($sumftbyod) }}.00 SAR</td>
            <td style="text-align:center">{{ number_format($sumftbtdod) }}.00 SAR</td>
            <td style="text-align:center">{{ number_format($sumftaod) }}.00 SAR</td>
        </tr>
        <tr>
            <th style="text-align:center">TP</th>
            <td style="text-align:center">{{ number_format($sumfttop) }}.00 SAR</td>
            <td style="text-align:center">{{ number_format($sumftyop) }}.00 SAR</td>
            <td style="text-align:center">{{ number_format($sumftbyop) }}.00 SAR</td>
            <td style="text-align:center">{{ number_format($sumftbtdop) }}.00 SAR</td>
            <td style="text-align:center">{{ number_format($sumftaop) }}.00 SAR</td>           
        </tr>
    </tbody>
</table>

<!-- FIRAS STATS SECTION END -->

        <!-- MICHAEL LANES SECTION -->
        <div class="media text-muted pt-3">
        <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 32px; height: 32px;" src="{{ asset('images/uploads/avatars') }}/{{ $michael->photo }}" data-holder-rendered="true">
          <p class="media-body pb-3 mb-0 small lh-125">
            <strong class="d-block text-gray-dark"><span>@</span>{{ $michael->name }}</strong><span class="badge badge-primary">Key Account Saleman</span>
            <!--<a style="padding-left:0;padding-top:0;padding-bottom:0;padding-right:0;color:black;width: 8rem;border-radius:50%" href="{{ url('/export-orders-orderitems-csv') }}/{{ $michael->idnumber }}/submitted/to/completed" class=""><h3 class="badge badge-info">{{ $countmichaelorders->count() }}</h3></a>-->
         </p>
          </div>

          <div class="media text-muted pt-3">
         <table id="myTable">
            <thead>
                <tr>
                    <th style="text-align:center">#</th>
                    <th style="text-align:center">Today</th>
                    <th style="text-align:center">Yesterday</th>
                    <th style="text-align:center">Tow Days Ago</th>
                    <th style="text-align:center">Three Days Ago</th>
                    <th style="text-align:center">All</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th style="text-align:center">POS</th>
                    <td style="text-align:center">{{ $countmichaelto }}</td>
                    <td style="text-align:center">{{ $countmichaelyo }}</td>
                    <td style="text-align:center">{{ $countmichaelbyo }}</td>
                    <td style="text-align:center">{{ $countmichaelbtdo }}</td>
                    <td style="text-align:center">{{ $countmichaelao }}</td>
                </tr>
                <tr>
                    <th style="text-align:center">I</th>
                    <td style="text-align:center">{{ $summichaeltoi }}</td>
                    <td style="text-align:center">{{ $summichaelyoi }}</td>
                    <td style="text-align:center">{{ $summichaelbyoi }}</td>
                    <td style="text-align:center">{{ $summichaelbtdoi }}</td>
                    <td style="text-align:center">{{ $summichaelaoi }}</td>
                    </tr>
                <tr>
                    <th style="text-align:center">Q</th>
                    <td style="text-align:center">{{ $summichaeltoq }}</td>
                    <td style="text-align:center">{{ $summichaelyoq }}</td>
                    <td style="text-align:center">{{ $summichaelbyoq }}</td>
                    <td style="text-align:center">{{ $summichaelbtdoq }}</td>
                    <td style="text-align:center">{{ $summichaelaoq }}</td>
                </tr>
                    <tr>
                    <th style="text-align:center">F</th>
                    <td style="text-align:center">{{ $summichaeltof }}</td>
                    <td style="text-align:center">{{ $summichaelyof }}</td>
                    <td style="text-align:center">{{ $summichaelbyof }}</td>
                    <td style="text-align:center">{{ $summichaelbtdof }}</td>
                    <td style="text-align:center">{{ $summichaelaof }}</td>
                </tr>
                <tr>

                    <th style="text-align:center">D</th>
                    <td style="text-align:center"><p  data-color="{{ $summichaeltod }}" >{{ number_format($summichaeltod) }}.00 SAR</p></td>
                    <td style="text-align:center"><p  data-color="{{ $summichaelyod }}" >{{ number_format($summichaelyod) }}.00 SAR</p></td>
                    <td style="text-align:center"><p  data-color="{{ $summichaelbyod }}" >{{ number_format($summichaelbyod) }}.00 SAR</p></td>
                    <td style="text-align:center"><p  data-color="{{ $summichaelbtdod }}" >{{ number_format($summichaelbtdod) }}.00 SAR</p></td>
                    <td style="text-align:center"><p  data-color="{{ $summichaelaod }}" >{{ number_format($summichaelaod) }}.00 SAR</p></td>
                </tr>
                <tr>
                    <th style="text-align:center">TP</th>
                    <td style="text-align:center"><p  data-color="{{ $summichaeltop }}" >{{ number_format($summichaeltop) }}.00 SAR</p></td>
                    <td style="text-align:center"><p  data-color="{{ $summichaelyop }}" >{{ number_format($summichaelyop) }}.00 SAR</p></td>
                    <td style="text-align:center"><p  data-color="{{ $summichaelbyop }}" >{{ number_format($summichaelbyop) }}.00 SAR</p></td>
                    <td style="text-align:center"><p  data-color="{{ $summichaelbtdop }}" >{{ number_format($summichaelbtdop) }}.00 SAR</p></td>
                    <td style="text-align:center"><p  data-color="{{ $summichaelaop }}" >{{ number_format($summichaelaop) }}.00 SAR</p></td>           
                </tr>
            </tbody>
        </table>
    </div>
    <br />
        <!-- MOHAMMED SAYED SECTION -->
        <div class="media text-muted pt-3">
        <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 32px; height: 32px;" src="{{ asset('images/uploads/avatars') }}/{{ $mohammedsayed->photo }}" data-holder-rendered="true">
          <p class="media-body pb-3 mb-0 small lh-125">
            <strong class="d-block text-gray-dark"><span>@</span>{{ $mohammedsayed->name }}</strong><span class="badge badge-primary">Key Account Saleman</span>
            <!--<a style="padding-left:0;padding-top:0;padding-bottom:0;padding-right:0;color:black;width: 8rem;border-radius:50%" href="{{ url('/export-orders-orderitems-csv') }}/{{ $mohammedsayed->idnumber }}/submitted/to/completed" class=""><h3 class="badge badge-info">{{ $countmohammedsayedorders->count() }}</h3></a>-->
         </p>
        </div>
        <div class="media text-muted pt-3">
          
          

        <table id="myTable">
            <thead>
                <tr>
                    <th style="text-align:center">#</th>
                    <th style="text-align:center">Today</th>
                    <th style="text-align:center">Yesterday</th>
                    <th style="text-align:center">Tow Days Ago</th>
                    <th style="text-align:center">Three Days Ago</th>
                    <th style="text-align:center">All</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th style="text-align:center">POS</th>
                    <td style="text-align:center">{{ $countmohammedsayedto }}</td>
                    <td style="text-align:center">{{ $countmohammedsayedyo }}</td>
                    <td style="text-align:center">{{ $countmohammedsayedbyo }}</td>
                    <td style="text-align:center">{{ $countmohammedsayedbtdo }}</td>
                    <td style="text-align:center">{{ $countmohammedsayedao }}</td>
                </tr>
                <tr>
                    <th style="text-align:center">I</th>
                    <td style="text-align:center">{{ $summohammedsayedtoi }}</td>
                    <td style="text-align:center">{{ $summohammedsayedyoi }}</td>
                    <td style="text-align:center">{{ $summohammedsayedbyoi }}</td>
                    <td style="text-align:center">{{ $summohammedsayedbtdoi }}</td>
                    <td style="text-align:center">{{ $summohammedsayedaoi }}</td>
                    </tr>
                <tr>
                    <th style="text-align:center">Q</th>
                    <td style="text-align:center">{{ $summohammedsayedtoq }}</td>
                    <td style="text-align:center">{{ $summohammedsayedyoq }}</td>
                    <td style="text-align:center">{{ $summohammedsayedbyoq }}</td>
                    <td style="text-align:center">{{ $summohammedsayedbtdoq }}</td>
                    <td style="text-align:center">{{ $summohammedsayedaoq }}</td>
                </tr>
                    <tr>
                    <th style="text-align:center">F</th>
                    <td style="text-align:center">{{ $summohammedsayedtof }}</td>
                    <td style="text-align:center">{{ $summohammedsayedyof }}</td>
                    <td style="text-align:center">{{ $summohammedsayedbyof }}</td>
                    <td style="text-align:center">{{ $summohammedsayedbtdof }}</td>
                    <td style="text-align:center">{{ $summohammedsayedaof }}</td>
                </tr>
                <tr>

                    <th style="text-align:center">D</th>
                    <td style="text-align:center">{{ number_format($summohammedsayedtod) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($summohammedsayedyod) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($summohammedsayedbyod) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($summohammedsayedbtdod) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($summohammedsayedaod) }}.00 SAR</td>
                </tr>
                <tr>
                    <th style="text-align:center">TP</th>
                    <td style="text-align:center">{{ number_format($summohammedsayedtop) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($summohammedsayedyop) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($summohammedsayedbyop) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($summohammedsayedbtdop) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($summohammedsayedaop) }}.00 SAR</td>           
                </tr>
            </tbody>
        </table>
        

        </div>
        <br />
        <!-- Fahad Dahasy SECTION -->
        <div class="media text-muted pt-3">
        <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 32px; height: 32px;" src="{{ asset('images/uploads/avatars') }}/{{ $fahaddahasy->photo }}" data-holder-rendered="true">
          <p class="media-body pb-3 mb-0 small lh-125">
            <strong class="d-block text-gray-dark"><span>@</span>{{ $fahaddahasy->name }}</strong><span class="badge badge-primary">Key Account Saleman</span>
            <!--<a style="padding-left:0;padding-top:0;padding-bottom:0;padding-right:0;color:black;width: 8rem;border-radius:50%" href="{{ url('/export-orders-orderitems-csv') }}/{{ $fahaddahasy->idnumber }}/submitted/to/completed" class=""><h3 class="badge badge-info">{{ $countfahaddahasyorders->count() }}</h3></a>-->
         </p>
          </div>

          <div class="media text-muted pt-3">


          <table id="myTable">
            <thead>
                <tr>
                    <th style="text-align:center">#</th>
                    <th style="text-align:center">Today</th>
                    <th style="text-align:center">Yesterday</th>
                    <th style="text-align:center">Tow Days Ago</th>
                    <th style="text-align:center">Three Days Ago</th>
                    <th style="text-align:center">All</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th style="text-align:center">POS</th>
                    <td style="text-align:center">{{ $countfahaddahasyto }}</td>
                    <td style="text-align:center">{{ $countfahaddahasyyo }}</td>
                    <td style="text-align:center">{{ $countfahaddahasybyo }}</td>
                    <td style="text-align:center">{{ $countfahaddahasybtdo }}</td>
                    <td style="text-align:center">{{ $countfahaddahasyao }}</td>
                </tr>
                <tr>
                    <th style="text-align:center">I</th>
                    <td style="text-align:center">{{ $sumfahaddahasytoi }}</td>
                    <td style="text-align:center">{{ $sumfahaddahasyyoi }}</td>
                    <td style="text-align:center">{{ $sumfahaddahasybyoi }}</td>
                    <td style="text-align:center">{{ $sumfahaddahasybtdoi }}</td>
                    <td style="text-align:center">{{ $sumfahaddahasyaoi }}</td>
                    </tr>
                <tr>
                    <th style="text-align:center">Q</th>
                    <td style="text-align:center">{{ $sumfahaddahasytoq }}</td>
                    <td style="text-align:center">{{ $sumfahaddahasyyoq }}</td>
                    <td style="text-align:center">{{ $sumfahaddahasybyoq }}</td>
                    <td style="text-align:center">{{ $sumfahaddahasybtdoq }}</td>
                    <td style="text-align:center">{{ $sumfahaddahasyaoq }}</td>
                </tr>
                    <tr>
                    <th style="text-align:center">F</th>
                    <td style="text-align:center">{{ $sumfahaddahasytof }}</td>
                    <td style="text-align:center">{{ $sumfahaddahasyyof }}</td>
                    <td style="text-align:center">{{ $sumfahaddahasybyof }}</td>
                    <td style="text-align:center">{{ $sumfahaddahasybtdof }}</td>
                    <td style="text-align:center">{{ $sumfahaddahasyaof }}</td>
                </tr>
                <tr>

                    <th style="text-align:center">D</th>
                    <td style="text-align:center">{{ number_format($sumfahaddahasytod) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumfahaddahasyyod) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumfahaddahasybyod) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumfahaddahasybtdod) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumfahaddahasyaod) }}.00 SAR</td>
                </tr>
                <tr>
                    <th style="text-align:center">TP</th>
                    <td style="text-align:center">{{ number_format($sumfahaddahasytop) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumfahaddahasyyop) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumfahaddahasybyop) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumfahaddahasybtdop) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumfahaddahasyaop) }}.00 SAR</td>           
                </tr>
            </tbody>
        </table>




        </div>
        <br />
        <!-- Abdullah Naseer SECTION -->
        <div class="media text-muted pt-3">
        <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 32px; height: 32px;" src="{{ asset('images/uploads/avatars') }}/{{ $abdullahnaser->photo }}" data-holder-rendered="true">
          <p class="media-body pb-3 mb-0 small lh-125">
            <strong class="d-block text-gray-dark"><span>@</span>{{ $abdullahnaser->name }}</strong><span class="badge badge-primary">Key Account Saleman</span>
            <!--<a style="padding-left:0;padding-top:0;padding-bottom:0;padding-right:0;color:black;width: 8rem;border-radius:50%" href="{{ url('/export-orders-orderitems-csv') }}/{{ $abdullahnaser->idnumber }}/submitted/to/completed" class=""><h3 class="badge badge-info">{{ $countabdullahnaserorders->count() }}</h3></a>-->
         </p>
          </div>
          <div class="media text-muted pt-3">


          <table id="myTable">
            <thead>
                <tr>
                    <th style="text-align:center">#</th>
                    <th style="text-align:center">Today</th>
                    <th style="text-align:center">Yesterday</th>
                    <th style="text-align:center">Tow Days Ago</th>
                    <th style="text-align:center">Three Days Ago</th>
                    <th style="text-align:center">All</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th style="text-align:center">POS</th>
                    <td style="text-align:center">{{ $countabdullahnaserto }}</td>
                    <td style="text-align:center">{{ $countabdullahnaseryo }}</td>
                    <td style="text-align:center">{{ $countabdullahnaserbyo }}</td>
                    <td style="text-align:center">{{ $countabdullahnaserbtdo }}</td>
                    <td style="text-align:center">{{ $countabdullahnaserao }}</td>
                </tr>
                <tr>
                    <th style="text-align:center">I</th>
                    <td style="text-align:center">{{ $sumabdullahnasertoi }}</td>
                    <td style="text-align:center">{{ $sumabdullahnaseryoi }}</td>
                    <td style="text-align:center">{{ $sumabdullahnaserbyoi }}</td>
                    <td style="text-align:center">{{ $sumabdullahnaserbtdoi }}</td>
                    <td style="text-align:center">{{ $sumabdullahnaseraoi }}</td>
                    </tr>
                <tr>
                    <th style="text-align:center">Q</th>
                    <td style="text-align:center">{{ $sumabdullahnasertoq }}</td>
                    <td style="text-align:center">{{ $sumabdullahnaseryoq }}</td>
                    <td style="text-align:center">{{ $sumabdullahnaserbyoq }}</td>
                    <td style="text-align:center">{{ $sumabdullahnaserbtdoq }}</td>
                    <td style="text-align:center">{{ $sumabdullahnaseraoq }}</td>
                </tr>
                    <tr>
                    <th style="text-align:center">F</th>
                    <td style="text-align:center">{{ $sumabdullahnasertof }}</td>
                    <td style="text-align:center">{{ $sumabdullahnaseryof }}</td>
                    <td style="text-align:center">{{ $sumabdullahnaserbyof }}</td>
                    <td style="text-align:center">{{ $sumabdullahnaserbtdof }}</td>
                    <td style="text-align:center">{{ $sumabdullahnaseraof }}</td>
                </tr>
                <tr>

                    <th style="text-align:center">D</th>
                    <td style="text-align:center">{{ number_format($sumabdullahnasertod) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumabdullahnaseryod) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumabdullahnaserbyod) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumabdullahnaserbtdod) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumabdullahnaseraod) }}.00 SAR</td>
                </tr>
                <tr>
                    <th style="text-align:center">TP</th>
                    <td style="text-align:center">{{ number_format($sumabdullahnasertop) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumabdullahnaseryop) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumabdullahnaserbyop) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumabdullahnaserbtdop) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumabdullahnaseraop) }}.00 SAR</td>           
                </tr>
            </tbody>
        </table>

        </div>
        <br />
        <!-- Ahmed Medhat SECTION -->
        <div class="media text-muted pt-3">
        <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 32px; height: 32px;" src="{{ asset('images/uploads/avatars') }}/{{ $ahmedmedhat->photo }}" data-holder-rendered="true">
          <p class="media-body pb-3 mb-0 small lh-125">
            <strong class="d-block text-gray-dark"><span>@</span>{{ $ahmedmedhat->name }}</strong><span class="badge badge-primary">Key Account Saleman</span>
            <!--<a style="padding-left:0;padding-top:0;padding-bottom:0;padding-right:0;color:black;width: 8rem;border-radius:50%" href="{{ url('/export-orders-orderitems-csv') }}/{{ $ahmedmedhat->idnumber }}/submitted/to/completed" class=""><h3 class="badge badge-info">{{ $countahmedmedhatorders->count() }}</h3></a>-->
         </p>
          </div>

          <div class="media text-muted pt-3">

        
          <table id="myTable">
            <thead>
                <tr>
                    <th style="text-align:center">#</th>
                    <th style="text-align:center">Today</th>
                    <th style="text-align:center">Yesterday</th>
                    <th style="text-align:center">Tow Days Ago</th>
                    <th style="text-align:center">Three Days Ago</th>
                    <th style="text-align:center">All</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th style="text-align:center">POS</th>
                    <td style="text-align:center">{{ $countahmedmedhatto }}</td>
                    <td style="text-align:center">{{ $countahmedmedhatyo }}</td>
                    <td style="text-align:center">{{ $countahmedmedhatbyo }}</td>
                    <td style="text-align:center">{{ $countahmedmedhatbtdo }}</td>
                    <td style="text-align:center">{{ $countahmedmedhatao }}</td>
                </tr>
                <tr>
                    <th style="text-align:center">I</th>
                    <td style="text-align:center">{{ $sumahmedmedhattoi }}</td>
                    <td style="text-align:center">{{ $sumahmedmedhatyoi }}</td>
                    <td style="text-align:center">{{ $sumahmedmedhatbyoi }}</td>
                    <td style="text-align:center">{{ $sumahmedmedhatbtdoi }}</td>
                    <td style="text-align:center">{{ $sumahmedmedhataoi }}</td>
                    </tr>
                <tr>
                    <th style="text-align:center">Q</th>
                    <td style="text-align:center">{{ $sumahmedmedhattoq }}</td>
                    <td style="text-align:center">{{ $sumahmedmedhatyoq }}</td>
                    <td style="text-align:center">{{ $sumahmedmedhatbyoq }}</td>
                    <td style="text-align:center">{{ $sumahmedmedhatbtdoq }}</td>
                    <td style="text-align:center">{{ $sumahmedmedhataoq }}</td>
                </tr>
                    <tr>
                    <th style="text-align:center">F</th>
                    <td style="text-align:center">{{ $sumahmedmedhattof }}</td>
                    <td style="text-align:center">{{ $sumahmedmedhatyof }}</td>
                    <td style="text-align:center">{{ $sumahmedmedhatbyof }}</td>
                    <td style="text-align:center">{{ $sumahmedmedhatbtdof }}</td>
                    <td style="text-align:center">{{ $sumahmedmedhataof }}</td>
                </tr>
                <tr>

                    <th style="text-align:center">D</th>
                    <td style="text-align:center">{{ number_format($sumahmedmedhattod) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumahmedmedhatyod) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumahmedmedhatbyod) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumahmedmedhatbtdod) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumahmedmedhataod) }}.00 SAR</td>
                </tr>
                <tr>
                    <th style="text-align:center">TP</th>
                    <td style="text-align:center">{{ number_format($sumahmedmedhattop) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumahmedmedhatyop) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumahmedmedhatbyop) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumahmedmedhatbtdop) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumahmedmedhataop) }}.00 SAR</td>           
                </tr>
            </tbody>
        </table>

        </div>
        <br />
        
      
        <!-- Wail SECTION -->
 <!--         <div class="media text-muted pt-3">
        <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 32px; height: 32px;" src="{{ asset('images/uploads/avatars') }}/{{ $wail->photo }}" data-holder-rendered="true">
          <p class="media-body pb-3 mb-0 small lh-125">
            <strong class="d-block text-gray-dark"><span>@</span>{{ $wail->name }}</strong><span class="badge badge-primary">Key Account Saleman</span>
            <a style="padding-left:0;padding-top:0;padding-bottom:0;padding-right:0;color:black;width: 8rem;border-radius:50%" href="{{ url('/export-orders-orderitems-csv') }}/{{ $wail->idnumber }}/submitted/to/completed" class=""><h3 class="badge badge-info">{{ $countwailorders->count() }}</h3></a>
         </p>
          </div>
          @if($countwailorders->count() == 0)
          @else
          <div class="media text-muted pt-3">
          <table id="myTable">
                <thead>
                    <tr>
                        <th>PO#</th>
                        <th>customer</th>
                        <th style="color:red">F</th>
                        <th style="color:green">Discount</th>
                    </tr>
                </thead>
                @foreach($countwailorders as $countwailorder)
                <tbody>
                    <tr>
                    <td><a style= "float:center" href="/root/orders/{{ $countwailorder->staffid }}/{{ $countwailorder->slug }}">{{ $countwailorder->ponumber }}</a></td>
                    <td>{{ $countwailorder->branchname }}</td>
                    @if ($countwailorder->totalfree == 0)
                    <td></td>

                    @else
                    <td style="color:red">{{ $countwailorder->totalfree }}</td>
                    @endif
                    @if  ($countwailorder->discount == 0)
                    <td></td>

                    @else
                    <td style="color:green">{{ $countwailorder->discount }}</td>
                    @endif    
                </tr>
            </tbody> 
                @endforeach
        </table>
    </div>
    <br />
            @endif

-->
        </div>
</div>   

<!-- END OF FIRAS TEAM SECTION -->

        <!-- Hazem / KA SUPERVISOR  CSL TEAM SECION-->
        
        <div class="col-md-4" >
      <!-- Hazim SECTION -->



      <!-- HAZIM SECTION -->
      <div class="my-3 p-3 bg-white rounded box-shadow">
        <strong><h3 class="border-bottom border-gray pb-2 mb-0">Hazim Team</h3></strong>
        <div class="newspaper media text-muted pt-3">
          <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 64px; height: 64px;" src="{{ asset('images/uploads/avatars') }}/{{ $hazim->photo }}" data-holder-rendered="true">
          <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
          <strong><h5 class="border-bottom border-gray pb-2 mb-0"> <strong class="d-block text-gray-dark">{{ $hazim->name }} <span class="badge badge-danger">SUPERVISOR</span></strong></h5></strong>
          </p>
        </div>
        <table id="myTable">
    <thead>
        <tr>
            <th style="text-align:center">#</th>
            <th style="text-align:center">Today</th>
            <th style="text-align:center">Yesterday</th>
            <th style="text-align:center">Tow Days Ago</th>
            <th style="text-align:center">Three Days Ago</th>
            <th style="text-align:center">All</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th style="text-align:center">POS</th>
            <td style="text-align:center">{{ $counthtto }}</td>
            <td style="text-align:center">{{ $counthtyo }}</td>
            <td style="text-align:center">{{ $counthtbyo }}</td>
            <td style="text-align:center">{{ $counthtbtdo }}</td>
            <td style="text-align:center">{{ $counthtao }}</td>
        </tr>
        <tr>
            <th style="text-align:center">I</th>
            <td style="text-align:center">{{ $sumhttoi }}</td>
            <td style="text-align:center">{{ $sumhtyoi }}</td>
            <td style="text-align:center">{{ $sumhtbyoi }}</td>
            <td style="text-align:center">{{ $sumhtbtdoi }}</td>
            <td style="text-align:center">{{ $sumhtaoi }}</td>
            </tr>
        <tr>
            <th style="text-align:center">Q</th>
            <td style="text-align:center">{{ $sumhttoq }}</td>
            <td style="text-align:center">{{ $sumhtyoq }}</td>
            <td style="text-align:center">{{ $sumhtbyoq }}</td>
            <td style="text-align:center">{{ $sumhtbtdoq }}</td>
            <td style="text-align:center">{{ $sumhtaoq }}</td>
        </tr>
            <tr>
            <th style="text-align:center">F</th>
            <td style="text-align:center">{{ $sumhttof }}</td>
            <td style="text-align:center">{{ $sumhtyof }}</td>
            <td style="text-align:center">{{ $sumhtbyof }}</td>
            <td style="text-align:center">{{ $sumhtbtdof }}</td>
            <td style="text-align:center">{{ $sumhtaof }}</td>
        </tr>
        <tr>

            <th style="text-align:center">D</th>
            <td style="text-align:center">{{ number_format($sumhttod) }}.00 SAR</td>
            <td style="text-align:center">{{ number_format($sumhtyod) }}.00 SAR</td>
            <td style="text-align:center">{{ number_format($sumhtbyod) }}.00 SAR</td>
            <td style="text-align:center">{{ number_format($sumhtbtdod) }}.00 SAR</td>
            <td style="text-align:center">{{ number_format($sumhtaod) }}.00 SAR</td>
        </tr>
        <tr>
            <th style="text-align:center">TP</th>
            <td style="text-align:center">{{ number_format($sumhttop) }}.00 SAR</td>
            <td style="text-align:center">{{ number_format($sumhtyop) }}.00 SAR</td>
            <td style="text-align:center">{{ number_format($sumhtbyop) }}.00 SAR</td>
            <td style="text-align:center">{{ number_format($sumhtbtdop) }}.00 SAR</td>
            <td style="text-align:center">{{ number_format($sumhtaop) }}.00 SAR</td>           
        </tr>
    </tbody>
</table>

<!-- HAZIM STATS SECTION END -->





        <!-- Noufal SECTION -->
        <div class="media text-muted pt-3">
        <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 32px; height: 32px;" src="{{ asset('images/uploads/avatars') }}/{{ $noufal->photo }}" data-holder-rendered="true">
          <p class="media-body pb-3 mb-0 small lh-125">
            <strong class="d-block text-gray-dark"><span>@</span>{{ $noufal->name }}</strong><span class="badge badge-primary">Key Account Saleman</span>
            <!--<a style="padding-left:0;padding-top:0;padding-bottom:0;padding-right:0;color:black;width: 8rem;border-radius:50%" href="{{ url('/export-orders-orderitems-csv') }}/{{ $noufal->idnumber }}/submitted/to/completed" class=""><h3 class="badge badge-info">{{ $countnoufalorders->count() }}</h3></a>-->
         </p>
          </div>

          <div class="media text-muted pt-3">
          <table id="myTable">
            <thead>
                <tr>
                    <th style="text-align:center">#</th>
                    <th style="text-align:center">Today</th>
                    <th style="text-align:center">Yesterday</th>
                    <th style="text-align:center">Tow Days Ago</th>
                    <th style="text-align:center">Three Days Ago</th>
                    <th style="text-align:center">All</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th style="text-align:center">POS</th>
                    <td style="text-align:center">{{ $countnoufalto }}</td>
                    <td style="text-align:center">{{ $countnoufalyo }}</td>
                    <td style="text-align:center">{{ $countnoufalbyo }}</td>
                    <td style="text-align:center">{{ $countnoufalbtdo }}</td>
                    <td style="text-align:center">{{ $countnoufalao }}</td>
                </tr>
                <tr>
                    <th style="text-align:center">I</th>
                    <td style="text-align:center">{{ $sumnoufaltoi }}</td>
                    <td style="text-align:center">{{ $sumnoufalyoi }}</td>
                    <td style="text-align:center">{{ $sumnoufalbyoi }}</td>
                    <td style="text-align:center">{{ $sumnoufalbtdoi }}</td>
                    <td style="text-align:center">{{ $sumnoufalaoi }}</td>
                    </tr>
                <tr>
                    <th style="text-align:center">Q</th>
                    <td style="text-align:center">{{ $sumnoufaltoq }}</td>
                    <td style="text-align:center">{{ $sumnoufalyoq }}</td>
                    <td style="text-align:center">{{ $sumnoufalbyoq }}</td>
                    <td style="text-align:center">{{ $sumnoufalbtdoq }}</td>
                    <td style="text-align:center">{{ $sumnoufalaoq }}</td>
                </tr>
                    <tr>
                    <th style="text-align:center">F</th>
                    <td style="text-align:center">{{ $sumnoufaltof }}</td>
                    <td style="text-align:center">{{ $sumnoufalyof }}</td>
                    <td style="text-align:center">{{ $sumnoufalbyof }}</td>
                    <td style="text-align:center">{{ $sumnoufalbtdof }}</td>
                    <td style="text-align:center">{{ $sumnoufalaof }}</td>
                </tr>
                <tr>

                    <th style="text-align:center">D</th>
                    <td style="text-align:center">{{ number_format($sumnoufaltod) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumnoufalyod) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumnoufalbyod) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumnoufalbtdod) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumnoufalaod) }}.00 SAR</td>
                </tr>
                <tr>
                    <th style="text-align:center">TP</th>
                    <td style="text-align:center">{{ number_format($sumnoufaltop) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumnoufalyop) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumnoufalbyop) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumnoufalbtdop) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumnoufalaop) }}.00 SAR</td>           
                </tr>
            </tbody>
        </table>
        </div>
        <br />
        
        <!-- Ruben SECTION -->
        <div class="media text-muted pt-3">
        <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 32px; height: 32px;" src="{{ asset('images/uploads/avatars') }}/{{ $ruben->photo }}" data-holder-rendered="true">
          <p class="media-body pb-3 mb-0 small lh-125">
            <strong class="d-block text-gray-dark"><span>@</span>{{ $ruben->name }}</strong><span class="badge badge-primary">Key Account Saleman</span>
            <!--<a style="padding-left:0;padding-top:0;padding-bottom:0;padding-right:0;color:black;width: 8rem;border-radius:50%" href="{{ url('/export-orders-orderitems-csv') }}/{{ $ruben->idnumber }}/submitted/to/completed" class=""><h3 class="badge badge-info">{{ $countrubenorders->count() }}</h3></a>-->
         </p>
          </div>

          <div class="media text-muted pt-3">

          <table id="myTable">
            <thead>
                <tr>
                    <th style="text-align:center">#</th>
                    <th style="text-align:center">Today</th>
                    <th style="text-align:center">Yesterday</th>
                    <th style="text-align:center">Tow Days Ago</th>
                    <th style="text-align:center">Three Days Ago</th>
                    <th style="text-align:center">All</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th style="text-align:center">POS</th>
                    <td style="text-align:center">{{ $countrubento }}</td>
                    <td style="text-align:center">{{ $countrubenyo }}</td>
                    <td style="text-align:center">{{ $countrubenbyo }}</td>
                    <td style="text-align:center">{{ $countrubenbtdo }}</td>
                    <td style="text-align:center">{{ $countrubenao }}</td>
                </tr>
                <tr>
                    <th style="text-align:center">I</th>
                    <td style="text-align:center">{{ $sumrubentoi }}</td>
                    <td style="text-align:center">{{ $sumrubenyoi }}</td>
                    <td style="text-align:center">{{ $sumrubenbyoi }}</td>
                    <td style="text-align:center">{{ $sumrubenbtdoi }}</td>
                    <td style="text-align:center">{{ $sumrubenaoi }}</td>
                    </tr>
                <tr>
                    <th style="text-align:center">Q</th>
                    <td style="text-align:center">{{ $sumrubentoq }}</td>
                    <td style="text-align:center">{{ $sumrubenyoq }}</td>
                    <td style="text-align:center">{{ $sumrubenbyoq }}</td>
                    <td style="text-align:center">{{ $sumrubenbtdoq }}</td>
                    <td style="text-align:center">{{ $sumrubenaoq }}</td>
                </tr>
                    <tr>
                    <th style="text-align:center">F</th>
                    <td style="text-align:center">{{ $sumrubentof }}</td>
                    <td style="text-align:center">{{ $sumrubenyof }}</td>
                    <td style="text-align:center">{{ $sumrubenbyof }}</td>
                    <td style="text-align:center">{{ $sumrubenbtdof }}</td>
                    <td style="text-align:center">{{ $sumrubenaof }}</td>
                </tr>
                <tr>

                    <th style="text-align:center">D</th>
                    <td style="text-align:center">{{ number_format($sumrubentod) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumrubenyod) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumrubenbyod) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumrubenbtdod) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumrubenaod) }}.00 SAR</td>
                </tr>
                <tr>
                    <th style="text-align:center">TP</th>
                    <td style="text-align:center">{{ number_format($sumrubentop) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumrubenyop) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumrubenbyop) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumrubenbtdop) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumrubenaop) }}.00 SAR</td>           
                </tr>
            </tbody>
        </table>

        </div>
        <br />
        <!-- Samsudin SECTION -->
        <div class="media text-muted pt-3">
        <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 32px; height: 32px;" src="{{ asset('images/uploads/avatars') }}/{{ $samsudin->photo }}" data-holder-rendered="true">
          <p class="media-body pb-3 mb-0 small lh-125">
            <strong class="d-block text-gray-dark"><span>@</span>{{ $samsudin->name }}</strong><span class="badge badge-primary">Key Account Saleman</span>
            <!--<a style="padding-left:0;padding-top:0;padding-bottom:0;padding-right:0;color:black;width: 8rem;border-radius:50%" href="{{ url('/export-orders-orderitems-csv') }}/{{ $samsudin->idnumber }}/submitted/to/completed" class=""><h3 class="badge badge-info">{{ $countsamsudinorders->count() }}</h3></a>-->
         </p>
          </div>

          <div class="media text-muted pt-3">


          <table id="myTable">
            <thead>
                <tr>
                    <th style="text-align:center">#</th>
                    <th style="text-align:center">Today</th>
                    <th style="text-align:center">Yesterday</th>
                    <th style="text-align:center">Tow Days Ago</th>
                    <th style="text-align:center">Three Days Ago</th>
                    <th style="text-align:center">All</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th style="text-align:center">POS</th>
                    <td style="text-align:center">{{ $countsamsudinto }}</td>
                    <td style="text-align:center">{{ $countsamsudinyo }}</td>
                    <td style="text-align:center">{{ $countsamsudinbyo }}</td>
                    <td style="text-align:center">{{ $countsamsudinbtdo }}</td>
                    <td style="text-align:center">{{ $countsamsudinao }}</td>
                </tr>
                <tr>
                    <th style="text-align:center">I</th>
                    <td style="text-align:center">{{ $sumsamsudintoi }}</td>
                    <td style="text-align:center">{{ $sumsamsudinyoi }}</td>
                    <td style="text-align:center">{{ $sumsamsudinbyoi }}</td>
                    <td style="text-align:center">{{ $sumsamsudinbtdoi }}</td>
                    <td style="text-align:center">{{ $sumsamsudinaoi }}</td>
                    </tr>
                <tr>
                    <th style="text-align:center">Q</th>
                    <td style="text-align:center">{{ $sumsamsudintoq }}</td>
                    <td style="text-align:center">{{ $sumsamsudinyoq }}</td>
                    <td style="text-align:center">{{ $sumsamsudinbyoq }}</td>
                    <td style="text-align:center">{{ $sumsamsudinbtdoq }}</td>
                    <td style="text-align:center">{{ $sumsamsudinaoq }}</td>
                </tr>
                    <tr>
                    <th style="text-align:center">F</th>
                    <td style="text-align:center">{{ $sumsamsudintof }}</td>
                    <td style="text-align:center">{{ $sumsamsudinyof }}</td>
                    <td style="text-align:center">{{ $sumsamsudinbyof }}</td>
                    <td style="text-align:center">{{ $sumsamsudinbtdof }}</td>
                    <td style="text-align:center">{{ $sumsamsudinaof }}</td>
                </tr>
                <tr>

                    <th style="text-align:center">D</th>
                    <td style="text-align:center">{{ number_format($sumsamsudintod) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumsamsudinyod) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumsamsudinbyod) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumsamsudinbtdod) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumsamsudinaod) }}.00 SAR</td>
                </tr>
                <tr>
                    <th style="text-align:center">TP</th>
                    <td style="text-align:center">{{ number_format($sumsamsudintop) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumsamsudinyop) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumsamsudinbyop) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumsamsudinbtdop) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumsamsudinaop) }}.00 SAR</td>           
                </tr>
            </tbody>
        </table>

        </div>
        <br />
         <!-- Osama SECTION -->
         <div class="media text-muted pt-3">
        <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 32px; height: 32px;" src="{{ asset('images/uploads/avatars') }}/{{ $osama->photo }}" data-holder-rendered="true">
          <p class="media-body pb-3 mb-0 small lh-125">
            <strong class="d-block text-gray-dark"><span>@</span>{{ $osama->name }}</strong><span class="badge badge-primary">Key Account Saleman</span>
            <!--<a style="padding-left:0;padding-top:0;padding-bottom:0;padding-right:0;color:black;width: 8rem;border-radius:50%" href="{{ url('/export-orders-orderitems-csv') }}/{{ $osama->idnumber }}/submitted/to/completed" class=""><h3 class="badge badge-info">{{ $countosamaorders->count() }}</h3></a>-->
         </p>
          </div>

          <div class="media text-muted pt-3">

          <table id="myTable">
            <thead>
                <tr>
                    <th style="text-align:center">#</th>
                    <th style="text-align:center">Today</th>
                    <th style="text-align:center">Yesterday</th>
                    <th style="text-align:center">Tow Days Ago</th>
                    <th style="text-align:center">Three Days Ago</th>
                    <th style="text-align:center">All</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th style="text-align:center">POS</th>
                    <td style="text-align:center">{{ $countosamato }}</td>
                    <td style="text-align:center">{{ $countosamayo }}</td>
                    <td style="text-align:center">{{ $countosamabyo }}</td>
                    <td style="text-align:center">{{ $countosamabtdo }}</td>
                    <td style="text-align:center">{{ $countosamaao }}</td>
                </tr>
                <tr>
                    <th style="text-align:center">I</th>
                    <td style="text-align:center">{{ $sumosamatoi }}</td>
                    <td style="text-align:center">{{ $sumosamayoi }}</td>
                    <td style="text-align:center">{{ $sumosamabyoi }}</td>
                    <td style="text-align:center">{{ $sumosamabtdoi }}</td>
                    <td style="text-align:center">{{ $sumosamaaoi }}</td>
                    </tr>
                <tr>
                    <th style="text-align:center">Q</th>
                    <td style="text-align:center">{{ $sumosamatoq }}</td>
                    <td style="text-align:center">{{ $sumosamayoq }}</td>
                    <td style="text-align:center">{{ $sumosamabyoq }}</td>
                    <td style="text-align:center">{{ $sumosamabtdoq }}</td>
                    <td style="text-align:center">{{ $sumosamaaoq }}</td>
                </tr>
                    <tr>
                    <th style="text-align:center">F</th>
                    <td style="text-align:center">{{ $sumosamatof }}</td>
                    <td style="text-align:center">{{ $sumosamayof }}</td>
                    <td style="text-align:center">{{ $sumosamabyof }}</td>
                    <td style="text-align:center">{{ $sumosamabtdof }}</td>
                    <td style="text-align:center">{{ $sumosamaaof }}</td>
                </tr>
                <tr>

                    <th style="text-align:center">D</th>
                    <td style="text-align:center">{{ number_format($sumosamatod) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumosamayod) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumosamabyod) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumosamabtdod) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumosamaaod) }}.00 SAR</td>
                </tr>
                <tr>
                    <th style="text-align:center">TP</th>
                    <td style="text-align:center">{{ number_format($sumosamatop) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumosamayop) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumosamabyop) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumosamabtdop) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumosamaaop) }}.00 SAR</td>           
                </tr>
            </tbody>
        </table>

        </div>
        <br />





        
        </div>
</div>   

<!-- END OF HAZIM TEAM SECTION -->

        <!-- M. Awaden  / KA SUPERVISOR CTK 001040 TEAM SECION-->
        
        <div class="col-md-4" >
      <!-- Awaden SECTION -->


      <!-- AWADEN SECTION -->
      <div class="my-3 p-3 bg-white rounded box-shadow">
        <strong><h3 class="border-bottom border-gray pb-2 mb-0">Awaden Team</h3></strong>
        <div class="newspaper media text-muted pt-3">
          <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 64px; height: 64px;" src="{{ asset('images/uploads/avatars') }}/{{ $awaden->photo }}" data-holder-rendered="true">
          <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
          <strong><h5 class="border-bottom border-gray pb-2 mb-0"> <strong class="d-block text-gray-dark">{{ $awaden->name }} <span class="badge badge-danger">SUPERVISOR</span></strong></h5></strong>
          </p>
        </div>
        <table id="myTable">
    <thead>
        <tr>
            <th style="text-align:center">#</th>
            <th style="text-align:center">Today</th>
            <th style="text-align:center">Yesterday</th>
            <th style="text-align:center">Tow Days Ago</th>
            <th style="text-align:center">Three Days Ago</th>
            <th style="text-align:center">All</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th style="text-align:center">POS</th>
            <td style="text-align:center">{{ $countatto }}</td>
            <td style="text-align:center">{{ $countatyo }}</td>
            <td style="text-align:center">{{ $countatbyo }}</td>
            <td style="text-align:center">{{ $countatbtdo }}</td>
            <td style="text-align:center">{{ $countatao }}</td>
        </tr>
        <tr>
            <th style="text-align:center">I</th>
            <td style="text-align:center">{{ $sumattoi }}</td>
            <td style="text-align:center">{{ $sumatyoi }}</td>
            <td style="text-align:center">{{ $sumatbyoi }}</td>
            <td style="text-align:center">{{ $sumatbtdoi }}</td>
            <td style="text-align:center">{{ $sumataoi }}</td>
            </tr>
        <tr>
            <th style="text-align:center">Q</th>
            <td style="text-align:center">{{ $sumattoq }}</td>
            <td style="text-align:center">{{ $sumatyoq }}</td>
            <td style="text-align:center">{{ $sumatbyoq }}</td>
            <td style="text-align:center">{{ $sumatbtdoq }}</td>
            <td style="text-align:center">{{ $sumataoq }}</td>
        </tr>
            <tr>
            <th style="text-align:center">F</th>
            <td style="text-align:center">{{ $sumattof }}</td>
            <td style="text-align:center">{{ $sumatyof }}</td>
            <td style="text-align:center">{{ $sumatbyof }}</td>
            <td style="text-align:center">{{ $sumatbtdof }}</td>
            <td style="text-align:center">{{ $sumataof }}</td>
        </tr>
        <tr>

            <th style="text-align:center">D</th>
            <td style="text-align:center">{{ number_format($sumattod) }}.00 SAR</td>
            <td style="text-align:center">{{ number_format($sumatyod) }}.00 SAR</td>
            <td style="text-align:center">{{ number_format($sumatbyod) }}.00 SAR</td>
            <td style="text-align:center">{{ number_format($sumatbtdod) }}.00 SAR</td>
            <td style="text-align:center">{{ number_format($sumataod) }}.00 SAR</td>
        </tr>
        <tr>
            <th style="text-align:center">TP</th>
            <td style="text-align:center">{{ number_format($sumattop) }}.00 SAR</td>
            <td style="text-align:center">{{ number_format($sumatyop) }}.00 SAR</td>
            <td style="text-align:center">{{ number_format($sumatbyop) }}.00 SAR</td>
            <td style="text-align:center">{{ number_format($sumatbtdop) }}.00 SAR</td>
            <td style="text-align:center">{{ number_format($sumataop) }}.00 SAR</td>           
        </tr>
    </tbody>
</table>

<!-- AWADEN STATS SECTION END -->





        <!-- Ahmed Shawky SECTION -->
        <div class="media text-muted pt-3">
        <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 32px; height: 32px;" src="{{ asset('images/uploads/avatars') }}/{{ $ahmedshawqy->photo }}" data-holder-rendered="true">
          <p class="media-body pb-3 mb-0 small lh-125">
            <strong class="d-block text-gray-dark"><span>@</span>{{ $ahmedshawqy->name }}</strong><span class="badge badge-primary">Key Account Saleman</span>
            <!--<a style="padding-left:0;padding-top:0;padding-bottom:0;padding-right:0;color:black;width: 8rem;border-radius:50%" href="{{ url('/export-orders-orderitems-csv') }}/{{ $ahmedshawqy->idnumber }}/submitted/to/completed" class=""><h3 class="badge badge-info">{{ $countahmedshawqyorders->count() }}</h3></a>-->
         </p>
          </div>

          <div class="media text-muted pt-3">

          <table id="myTable">
            <thead>
                <tr>
                    <th style="text-align:center">#</th>
                    <th style="text-align:center">Today</th>
                    <th style="text-align:center">Yesterday</th>
                    <th style="text-align:center">Tow Days Ago</th>
                    <th style="text-align:center">Three Days Ago</th>
                    <th style="text-align:center">All</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th style="text-align:center">POS</th>
                    <td style="text-align:center">{{ $countahmedshawqyto }}</td>
                    <td style="text-align:center">{{ $countahmedshawqyyo }}</td>
                    <td style="text-align:center">{{ $countahmedshawqybyo }}</td>
                    <td style="text-align:center">{{ $countahmedshawqybtdo }}</td>
                    <td style="text-align:center">{{ $countahmedshawqyao }}</td>
                </tr>
                <tr>
                    <th style="text-align:center">I</th>
                    <td style="text-align:center">{{ $sumahmedshawqytoi }}</td>
                    <td style="text-align:center">{{ $sumahmedshawqyyoi }}</td>
                    <td style="text-align:center">{{ $sumahmedshawqybyoi }}</td>
                    <td style="text-align:center">{{ $sumahmedshawqybtdoi }}</td>
                    <td style="text-align:center">{{ $sumahmedshawqyaoi }}</td>
                    </tr>
                <tr>
                    <th style="text-align:center">Q</th>
                    <td style="text-align:center">{{ $sumahmedshawqytoq }}</td>
                    <td style="text-align:center">{{ $sumahmedshawqyyoq }}</td>
                    <td style="text-align:center">{{ $sumahmedshawqybyoq }}</td>
                    <td style="text-align:center">{{ $sumahmedshawqybtdoq }}</td>
                    <td style="text-align:center">{{ $sumahmedshawqyaoq }}</td>
                </tr>
                    <tr>
                    <th style="text-align:center">F</th>
                    <td style="text-align:center">{{ $sumahmedshawqytof }}</td>
                    <td style="text-align:center">{{ $sumahmedshawqyyof }}</td>
                    <td style="text-align:center">{{ $sumahmedshawqybyof }}</td>
                    <td style="text-align:center">{{ $sumahmedshawqybtdof }}</td>
                    <td style="text-align:center">{{ $sumahmedshawqyaof }}</td>
                </tr>
                <tr>

                    <th style="text-align:center">D</th>
                    <td style="text-align:center">{{ number_format($sumahmedshawqytod) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumahmedshawqyyod) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumahmedshawqybyod) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumahmedshawqybtdod) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumahmedshawqyaod) }}.00 SAR</td>
                </tr>
                <tr>
                    <th style="text-align:center">TP</th>
                    <td style="text-align:center">{{ number_format($sumahmedshawqytop) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumahmedshawqyyop) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumahmedshawqybyop) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumahmedshawqybtdop) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumahmedshawqyaop) }}.00 SAR</td>           
                </tr>
            </tbody>
        </table>

        </div>
        <br />
        
        <!-- Hassan Fathi SECTION -->
        <div class="media text-muted pt-3">
        <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 32px; height: 32px;" src="{{ asset('images/uploads/avatars') }}/{{ $hassanfathi->photo }}" data-holder-rendered="true">
          <p class="media-body pb-3 mb-0 small lh-125">
            <strong class="d-block text-gray-dark"><span>@</span>{{ $hassanfathi->name }}</strong><span class="badge badge-primary">Key Account Saleman</span>
            <!--<a style="padding-left:0;padding-top:0;padding-bottom:0;padding-right:0;color:black;width: 8rem;border-radius:50%" href="{{ url('/export-orders-orderitems-csv') }}/{{ $hassanfathi->idnumber }}/submitted/to/completed" class=""><h3 class="badge badge-info">{{ $counthassanfathiorders->count() }}</h3></a>-->
         </p>
          </div>

          <div class="media text-muted pt-3">

          <table id="myTable">
            <thead>
                <tr>
                    <th style="text-align:center">#</th>
                    <th style="text-align:center">Today</th>
                    <th style="text-align:center">Yesterday</th>
                    <th style="text-align:center">Tow Days Ago</th>
                    <th style="text-align:center">Three Days Ago</th>
                    <th style="text-align:center">All</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th style="text-align:center">POS</th>
                    <td style="text-align:center">{{ $counthassanfathito }}</td>
                    <td style="text-align:center">{{ $counthassanfathiyo }}</td>
                    <td style="text-align:center">{{ $counthassanfathibyo }}</td>
                    <td style="text-align:center">{{ $counthassanfathibtdo }}</td>
                    <td style="text-align:center">{{ $counthassanfathiao }}</td>
                </tr>
                <tr>
                    <th style="text-align:center">I</th>
                    <td style="text-align:center">{{ $sumhassanfathitoi }}</td>
                    <td style="text-align:center">{{ $sumhassanfathiyoi }}</td>
                    <td style="text-align:center">{{ $sumhassanfathibyoi }}</td>
                    <td style="text-align:center">{{ $sumhassanfathibtdoi }}</td>
                    <td style="text-align:center">{{ $sumhassanfathiaoi }}</td>
                    </tr>
                <tr>
                    <th style="text-align:center">Q</th>
                    <td style="text-align:center">{{ $sumhassanfathitoq }}</td>
                    <td style="text-align:center">{{ $sumhassanfathiyoq }}</td>
                    <td style="text-align:center">{{ $sumhassanfathibyoq }}</td>
                    <td style="text-align:center">{{ $sumhassanfathibtdoq }}</td>
                    <td style="text-align:center">{{ $sumhassanfathiaoq }}</td>
                </tr>
                    <tr>
                    <th style="text-align:center">F</th>
                    <td style="text-align:center">{{ $sumhassanfathitof }}</td>
                    <td style="text-align:center">{{ $sumhassanfathiyof }}</td>
                    <td style="text-align:center">{{ $sumhassanfathibyof }}</td>
                    <td style="text-align:center">{{ $sumhassanfathibtdof }}</td>
                    <td style="text-align:center">{{ $sumhassanfathiaof }}</td>
                </tr>
                <tr>

                    <th style="text-align:center">D</th>
                    <td style="text-align:center">{{ number_format($sumhassanfathitod) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumhassanfathiyod) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumhassanfathibyod) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumhassanfathibtdod) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumhassanfathiaod) }}.00 SAR</td>
                </tr>
                <tr>
                    <th style="text-align:center">TP</th>
                    <td style="text-align:center">{{ number_format($sumhassanfathitop) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumhassanfathiyop) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumhassanfathibyop) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumhassanfathibtdop) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumhassanfathiaop) }}.00 SAR</td>           
                </tr>
            </tbody>
        </table>


        </div>
        <br />
        
        <!-- Hashem SECTION -->
        <div class="media text-muted pt-3">
        <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 32px; height: 32px;" src="{{ asset('images/uploads/avatars') }}/{{ $hashem->photo }}" data-holder-rendered="true">
          <p class="media-body pb-3 mb-0 small lh-125">
            <strong class="d-block text-gray-dark"><span>@</span>{{ $hashem->name }}</strong><span class="badge badge-primary">Key Account Saleman</span>
            <!--<a style="padding-left:0;padding-top:0;padding-bottom:0;padding-right:0;color:black;width: 8rem;border-radius:50%" href="{{ url('/export-orders-orderitems-csv') }}/{{ $hashem->idnumber }}/submitted/to/completed" class=""><h3 class="badge badge-info">{{ $counthashemorders->count() }}</h3></a>-->
         </p>
          </div>

          <div class="media text-muted pt-3">
  

          <table id="myTable">
            <thead>
                <tr>
                    <th style="text-align:center">#</th>
                    <th style="text-align:center">Today</th>
                    <th style="text-align:center">Yesterday</th>
                    <th style="text-align:center">Tow Days Ago</th>
                    <th style="text-align:center">Three Days Ago</th>
                    <th style="text-align:center">All</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th style="text-align:center">POS</th>
                    <td style="text-align:center">{{ $counthashemto }}</td>
                    <td style="text-align:center">{{ $counthashemyo }}</td>
                    <td style="text-align:center">{{ $counthashembyo }}</td>
                    <td style="text-align:center">{{ $counthashembtdo }}</td>
                    <td style="text-align:center">{{ $counthashemao }}</td>
                </tr>
                <tr>
                    <th style="text-align:center">I</th>
                    <td style="text-align:center">{{ $sumhashemtoi }}</td>
                    <td style="text-align:center">{{ $sumhashemyoi }}</td>
                    <td style="text-align:center">{{ $sumhashembyoi }}</td>
                    <td style="text-align:center">{{ $sumhashembtdoi }}</td>
                    <td style="text-align:center">{{ $sumhashemaoi }}</td>
                    </tr>
                <tr>
                    <th style="text-align:center">Q</th>
                    <td style="text-align:center">{{ $sumhashemtoq }}</td>
                    <td style="text-align:center">{{ $sumhashemyoq }}</td>
                    <td style="text-align:center">{{ $sumhashembyoq }}</td>
                    <td style="text-align:center">{{ $sumhashembtdoq }}</td>
                    <td style="text-align:center">{{ $sumhashemaoq }}</td>
                </tr>
                    <tr>
                    <th style="text-align:center">F</th>
                    <td style="text-align:center">{{ $sumhashemtof }}</td>
                    <td style="text-align:center">{{ $sumhashemyof }}</td>
                    <td style="text-align:center">{{ $sumhashembyof }}</td>
                    <td style="text-align:center">{{ $sumhashembtdof }}</td>
                    <td style="text-align:center">{{ $sumhashemaof }}</td>
                </tr>
                <tr>

                    <th style="text-align:center">D</th>
                    <td style="text-align:center">{{ number_format($sumhashemtod) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumhashemyod) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumhashembyod) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumhashembtdod) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumhashemaod) }}.00 SAR</td>
                </tr>
                <tr>
                    <th style="text-align:center">TP</th>
                    <td style="text-align:center">{{ number_format($sumhashemtop) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumhashemyop) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumhashembyop) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumhashembtdop) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumhashemaop) }}.00 SAR</td>           
                </tr>
            </tbody>
        </table>


        </div>
        <br />
        <!-- M. Hassan SECTION -->
        <div class="media text-muted pt-3">
        <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 32px; height: 32px;" src="{{ asset('images/uploads/avatars') }}/{{ $medhathassan->photo }}" data-holder-rendered="true">
          <p class="media-body pb-3 mb-0 small lh-125">
            <strong class="d-block text-gray-dark"><span>@</span>{{ $medhathassan->name }}</strong><span class="badge badge-primary">Key Account Saleman</span>
            <!--<a style="padding-left:0;padding-top:0;padding-bottom:0;padding-right:0;color:black;width: 8rem;border-radius:50%" href="{{ url('/export-orders-orderitems-csv') }}/{{ $medhathassan->idnumber }}/submitted/to/completed" class=""><h3 class="badge badge-info">{{ $countmedhathassanorders->count() }}</h3></a>-->
         </p>
          </div>

          <div class="media text-muted pt-3">



          <table id="myTable">
            <thead>
                <tr>
                    <th style="text-align:center">#</th>
                    <th style="text-align:center">Today</th>
                    <th style="text-align:center">Yesterday</th>
                    <th style="text-align:center">Tow Days Ago</th>
                    <th style="text-align:center">Three Days Ago</th>
                    <th style="text-align:center">All</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th style="text-align:center">POS</th>
                    <td style="text-align:center">{{ $countmedhathassanto }}</td>
                    <td style="text-align:center">{{ $countmedhathassanyo }}</td>
                    <td style="text-align:center">{{ $countmedhathassanbyo }}</td>
                    <td style="text-align:center">{{ $countmedhathassanbtdo }}</td>
                    <td style="text-align:center">{{ $countmedhathassanao }}</td>
                </tr>
                <tr>
                    <th style="text-align:center">I</th>
                    <td style="text-align:center">{{ $summedhathassantoi }}</td>
                    <td style="text-align:center">{{ $summedhathassanyoi }}</td>
                    <td style="text-align:center">{{ $summedhathassanbyoi }}</td>
                    <td style="text-align:center">{{ $summedhathassanbtdoi }}</td>
                    <td style="text-align:center">{{ $summedhathassanaoi }}</td>
                    </tr>
                <tr>
                    <th style="text-align:center">Q</th>
                    <td style="text-align:center">{{ $summedhathassantoq }}</td>
                    <td style="text-align:center">{{ $summedhathassanyoq }}</td>
                    <td style="text-align:center">{{ $summedhathassanbyoq }}</td>
                    <td style="text-align:center">{{ $summedhathassanbtdoq }}</td>
                    <td style="text-align:center">{{ $summedhathassanaoq }}</td>
                </tr>
                    <tr>
                    <th style="text-align:center">F</th>
                    <td style="text-align:center">{{ $summedhathassantof }}</td>
                    <td style="text-align:center">{{ $summedhathassanyof }}</td>
                    <td style="text-align:center">{{ $summedhathassanbyof }}</td>
                    <td style="text-align:center">{{ $summedhathassanbtdof }}</td>
                    <td style="text-align:center">{{ $summedhathassanaof }}</td>
                </tr>
                <tr>

                    <th style="text-align:center">D</th>
                    <td style="text-align:center">{{ number_format($summedhathassantod) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($summedhathassanyod) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($summedhathassanbyod) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($summedhathassanbtdod) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($summedhathassanaod) }}.00 SAR</td>
                </tr>
                <tr>
                    <th style="text-align:center">TP</th>
                    <td style="text-align:center">{{ number_format($summedhathassantop) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($summedhathassanyop) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($summedhathassanbyop) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($summedhathassanbtdop) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($summedhathassanaop) }}.00 SAR</td>           
                </tr>
            </tbody>
        </table>




        </div>
        <br />
        </div>
    </div>   
</div>  



        <!-- QASSIM SECTION -->

        <div class="row">      
    <!-- Qassim Team --> 



    <div class="col-md-4" >
        <!-- SUPERVISOR SECTION -->
        <div class="my-3 p-3 bg-white rounded box-shadow">
            <strong><h3 class="border-bottom border-gray pb-2 mb-0">QASSIM Team</h3></strong>
            <div class="newspaper media text-muted pt-3">
            <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 64px; height: 64px;" src="{{ asset('images/uploads/avatars') }}/{{ $wail->photo }}" data-holder-rendered="true">
            <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <strong><h5 class="border-bottom border-gray pb-2 mb-0"> <strong class="d-block text-gray-dark">{{ $wail->name }} <span class="badge badge-danger">SUPERVISOR</span></strong></h5></strong>
            </p>
            </div>



<!-- Qassim STATS SECTION START -->

            <table id="myTable">
    <thead>
        <tr>
            <th style="text-align:center">#</th>
            <th style="text-align:center">Today</th>
            <th style="text-align:center">Yesterday</th>
            <th style="text-align:center">Tow Days Ago</th>
            <th style="text-align:center">Three Days Ago</th>
            <th style="text-align:center">All</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th style="text-align:center">POS</th>
            <td style="text-align:center">{{ $countqtto }}</td>
            <td style="text-align:center">{{ $countqtyo }}</td>
            <td style="text-align:center">{{ $countqtbyo }}</td>
            <td style="text-align:center">{{ $countqtbtdo }}</td>
            <td style="text-align:center">{{ $countqtao }}</td>
        </tr>
        <tr>
            <th style="text-align:center">I</th>
            <td style="text-align:center">{{ $sumqttoi }}</td>
            <td style="text-align:center">{{ $sumqtyoi }}</td>
            <td style="text-align:center">{{ $sumqtbyoi }}</td>
            <td style="text-align:center">{{ $sumqtbtdoi }}</td>
            <td style="text-align:center">{{ $sumqtaoi }}</td>
            </tr>
        <tr>
            <th style="text-align:center">Q</th>
            <td style="text-align:center">{{ $sumqttoq }}</td>
            <td style="text-align:center">{{ $sumqtyoq }}</td>
            <td style="text-align:center">{{ $sumqtbyoq }}</td>
            <td style="text-align:center">{{ $sumqtbtdoq }}</td>
            <td style="text-align:center">{{ $sumqtaoq }}</td>
        </tr>
            <tr>
            <th style="text-align:center">F</th>
            <td style="text-align:center">{{ $sumqttof }}</td>
            <td style="text-align:center">{{ $sumqtyof }}</td>
            <td style="text-align:center">{{ $sumqtbyof }}</td>
            <td style="text-align:center">{{ $sumqtbtdof }}</td>
            <td style="text-align:center">{{ $sumqtaof }}</td>
        </tr>
        <tr>

            <th style="text-align:center">D</th>
            <td style="text-align:center">{{ number_format($sumqttod) }}.00 SAR</td>
            <td style="text-align:center">{{ number_format($sumqtyod) }}.00 SAR</td>
            <td style="text-align:center">{{ number_format($sumqtbyod) }}.00 SAR</td>
            <td style="text-align:center">{{ number_format($sumqtbtdod) }}.00 SAR</td>
            <td style="text-align:center">{{ number_format($sumqtaod) }}.00 SAR</td>
        </tr>
        <tr>
            <th style="text-align:center">TP</th>
            <td style="text-align:center">{{ number_format($sumqttop) }}.00 SAR</td>
            <td style="text-align:center">{{ number_format($sumqtyop) }}.00 SAR</td>
            <td style="text-align:center">{{ number_format($sumqtbyop) }}.00 SAR</td>
            <td style="text-align:center">{{ number_format($sumqtbtdop) }}.00 SAR</td>
            <td style="text-align:center">{{ number_format($sumqtaop) }}.00 SAR</td>           
        </tr>
    </tbody>
</table>

<!-- Qassim STATS SECTION END -->






            <!-- Suneer SECTION - msn@sunbulahgroup.com  / 466 - 554946096 -->
            <div class="media text-muted pt-3">
            <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 32px; height: 32px;" src="{{ asset('images/uploads/avatars') }}/{{ $suneer->photo }}" data-holder-rendered="true">
            <p class="media-body pb-3 mb-0 small lh-125">
                <strong class="d-block text-gray-dark"><span>@</span>{{ $suneer->name }}</strong><span class="badge badge-primary">Key Account Saleman</span>
                <!--<a style="padding-left:0;padding-top:0;padding-bottom:0;padding-right:0;color:black;width: 8rem;border-radius:50%" href="{{ url('/export-orders-orderitems-csv') }}/{{ $suneer->idnumber }}/submitted/to/completed" class=""><h3 class="badge badge-info">{{ $countsuneerorders->count() }}</h3></a>-->
            </p>
            </div>

            <div class="media text-muted pt-3">


            <table id="myTable">
            <thead>
                <tr>
                    <th style="text-align:center">#</th>
                    <th style="text-align:center">Today</th>
                    <th style="text-align:center">Yesterday</th>
                    <th style="text-align:center">Tow Days Ago</th>
                    <th style="text-align:center">Three Days Ago</th>
                    <th style="text-align:center">All</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th style="text-align:center">POS</th>
                    <td style="text-align:center">{{ $countsuneerto }}</td>
                    <td style="text-align:center">{{ $countsuneeryo }}</td>
                    <td style="text-align:center">{{ $countsuneerbyo }}</td>
                    <td style="text-align:center">{{ $countsuneerbtdo }}</td>
                    <td style="text-align:center">{{ $countsuneerao }}</td>
                </tr>
                <tr>
                    <th style="text-align:center">I</th>
                    <td style="text-align:center">{{ $sumsuneertoi }}</td>
                    <td style="text-align:center">{{ $sumsuneeryoi }}</td>
                    <td style="text-align:center">{{ $sumsuneerbyoi }}</td>
                    <td style="text-align:center">{{ $sumsuneerbtdoi }}</td>
                    <td style="text-align:center">{{ $sumsuneeraoi }}</td>
                    </tr>
                <tr>
                    <th style="text-align:center">Q</th>
                    <td style="text-align:center">{{ $sumsuneertoq }}</td>
                    <td style="text-align:center">{{ $sumsuneeryoq }}</td>
                    <td style="text-align:center">{{ $sumsuneerbyoq }}</td>
                    <td style="text-align:center">{{ $sumsuneerbtdoq }}</td>
                    <td style="text-align:center">{{ $sumsuneeraoq }}</td>
                </tr>
                    <tr>
                    <th style="text-align:center">F</th>
                    <td style="text-align:center">{{ $sumsuneertof }}</td>
                    <td style="text-align:center">{{ $sumsuneeryof }}</td>
                    <td style="text-align:center">{{ $sumsuneerbyof }}</td>
                    <td style="text-align:center">{{ $sumsuneerbtdof }}</td>
                    <td style="text-align:center">{{ $sumsuneeraof }}</td>
                </tr>
                <tr>

                    <th style="text-align:center">D</th>
                    <td style="text-align:center">{{ number_format($sumsuneertod) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumsuneeryod) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumsuneerbyod) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumsuneerbtdod) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumsuneeraod) }}.00 SAR</td>
                </tr>
                <tr>
                    <th style="text-align:center">TP</th>
                    <td style="text-align:center">{{ number_format($sumsuneertop) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumsuneeryop) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumsuneerbyop) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumsuneerbtdop) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumsuneeraop) }}.00 SAR</td>           
                </tr>
            </tbody>
        </table>




            </div>
            <br />

            <!-- Fahad Hussein SECTION -> fahadhussein-->
            <div class="media text-muted pt-3">
            <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 32px; height: 32px;" src="{{ asset('images/uploads/avatars') }}/{{ $fahadhussein->photo }}" data-holder-rendered="true">
            <p class="media-body pb-3 mb-0 small lh-125">
                <strong class="d-block text-gray-dark"><span>@</span>{{ $fahadhussein->name }}</strong><span class="badge badge-primary">Key Account Saleman</span>
                <!--<a style="padding-left:0;padding-top:0;padding-bottom:0;padding-right:0;color:black;width: 8rem;border-radius:50%" href="{{ url('/export-orders-orderitems-csv') }}/{{ $fahadhussein->idnumber }}/submitted/to/completed" class=""><h3 class="badge badge-info">{{ $countfahadhusseinorders->count() }}</h3></a>-->
            </p>
            </div>

            <div class="media text-muted pt-3">



            <table id="myTable">
            <thead>
                <tr>
                    <th style="text-align:center">#</th>
                    <th style="text-align:center">Today</th>
                    <th style="text-align:center">Yesterday</th>
                    <th style="text-align:center">Tow Days Ago</th>
                    <th style="text-align:center">Three Days Ago</th>
                    <th style="text-align:center">All</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th style="text-align:center">POS</th>
                    <td style="text-align:center">{{ $countfahadhusseinto }}</td>
                    <td style="text-align:center">{{ $countfahadhusseinyo }}</td>
                    <td style="text-align:center">{{ $countfahadhusseinbyo }}</td>
                    <td style="text-align:center">{{ $countfahadhusseinbtdo }}</td>
                    <td style="text-align:center">{{ $countfahadhusseinao }}</td>
                </tr>
                <tr>
                    <th style="text-align:center">I</th>
                    <td style="text-align:center">{{ $sumfahadhusseintoi }}</td>
                    <td style="text-align:center">{{ $sumfahadhusseinyoi }}</td>
                    <td style="text-align:center">{{ $sumfahadhusseinbyoi }}</td>
                    <td style="text-align:center">{{ $sumfahadhusseinbtdoi }}</td>
                    <td style="text-align:center">{{ $sumfahadhusseinaoi }}</td>
                    </tr>
                <tr>
                    <th style="text-align:center">Q</th>
                    <td style="text-align:center">{{ $sumfahadhusseintoq }}</td>
                    <td style="text-align:center">{{ $sumfahadhusseinyoq }}</td>
                    <td style="text-align:center">{{ $sumfahadhusseinbyoq }}</td>
                    <td style="text-align:center">{{ $sumfahadhusseinbtdoq }}</td>
                    <td style="text-align:center">{{ $sumfahadhusseinaoq }}</td>
                </tr>
                    <tr>
                    <th style="text-align:center">F</th>
                    <td style="text-align:center">{{ $sumfahadhusseintof }}</td>
                    <td style="text-align:center">{{ $sumfahadhusseinyof }}</td>
                    <td style="text-align:center">{{ $sumfahadhusseinbyof }}</td>
                    <td style="text-align:center">{{ $sumfahadhusseinbtdof }}</td>
                    <td style="text-align:center">{{ $sumfahadhusseinaof }}</td>
                </tr>
                <tr>

                    <th style="text-align:center">D</th>
                    <td style="text-align:center">{{ number_format($sumfahadhusseintod) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumfahadhusseinyod) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumfahadhusseinbyod) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumfahadhusseinbtdod) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumfahadhusseinaod) }}.00 SAR</td>
                </tr>
                <tr>
                    <th style="text-align:center">TP</th>
                    <td style="text-align:center">{{ number_format($sumfahadhusseintop) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumfahadhusseinyop) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumfahadhusseinbyop) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumfahadhusseinbtdop) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumfahadhusseinaop) }}.00 SAR</td>           
                </tr>
            </tbody>
        </table>




            </div>
            <br />

            <!-- SULTAN SALMAN SECTION -->
            <div class="media text-muted pt-3">
            <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 32px; height: 32px;" src="{{ asset('images/uploads/avatars') }}/{{ $sultansalman->photo }}" data-holder-rendered="true">
            <p class="media-body pb-3 mb-0 small lh-125">
                <strong class="d-block text-gray-dark"><span>@</span>{{ $sultansalman->name }}</strong><span class="badge badge-primary">Key Account Saleman</span>
                <!--<a style="padding-left:0;padding-top:0;padding-bottom:0;padding-right:0;color:black;width: 8rem;border-radius:50%" href="{{ url('/export-orders-orderitems-csv') }}/{{ $sultansalman->idnumber }}/submitted/to/completed" class=""><h3 class="badge badge-info">{{ $countsultansalmanorders->count() }}</h3></a>-->
            </p>
            </div>

            <div class="media text-muted pt-3">
             

            <table id="myTable">
            <thead>
                <tr>
                    <th style="text-align:center">#</th>
                    <th style="text-align:center">Today</th>
                    <th style="text-align:center">Yesterday</th>
                    <th style="text-align:center">Tow Days Ago</th>
                    <th style="text-align:center">Three Days Ago</th>
                    <th style="text-align:center">All</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th style="text-align:center">POS</th>
                    <td style="text-align:center">{{ $countsultansalmanto }}</td>
                    <td style="text-align:center">{{ $countsultansalmanyo }}</td>
                    <td style="text-align:center">{{ $countsultansalmanbyo }}</td>
                    <td style="text-align:center">{{ $countsultansalmanbtdo }}</td>
                    <td style="text-align:center">{{ $countsultansalmanao }}</td>
                </tr>
                <tr>
                    <th style="text-align:center">I</th>
                    <td style="text-align:center">{{ $sumsultansalmantoi }}</td>
                    <td style="text-align:center">{{ $sumsultansalmanyoi }}</td>
                    <td style="text-align:center">{{ $sumsultansalmanbyoi }}</td>
                    <td style="text-align:center">{{ $sumsultansalmanbtdoi }}</td>
                    <td style="text-align:center">{{ $sumsultansalmanaoi }}</td>
                    </tr>
                <tr>
                    <th style="text-align:center">Q</th>
                    <td style="text-align:center">{{ $sumsultansalmantoq }}</td>
                    <td style="text-align:center">{{ $sumsultansalmanyoq }}</td>
                    <td style="text-align:center">{{ $sumsultansalmanbyoq }}</td>
                    <td style="text-align:center">{{ $sumsultansalmanbtdoq }}</td>
                    <td style="text-align:center">{{ $sumsultansalmanaoq }}</td>
                </tr>
                    <tr>
                    <th style="text-align:center">F</th>
                    <td style="text-align:center">{{ $sumsultansalmantof }}</td>
                    <td style="text-align:center">{{ $sumsultansalmanyof }}</td>
                    <td style="text-align:center">{{ $sumsultansalmanbyof }}</td>
                    <td style="text-align:center">{{ $sumsultansalmanbtdof }}</td>
                    <td style="text-align:center">{{ $sumsultansalmanaof }}</td>
                </tr>
                <tr>

                    <th style="text-align:center">D</th>
                    <td style="text-align:center">{{ number_format($sumsultansalmantod) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumsultansalmanyod) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumsultansalmanbyod) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumsultansalmanbtdod) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumsultansalmanaod) }}.00 SAR</td>
                </tr>
                <tr>
                    <th style="text-align:center">TP</th>
                    <td style="text-align:center">{{ number_format($sumsultansalmantop) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumsultansalmanyop) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumsultansalmanbyop) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumsultansalmanbtdop) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($sumsultansalmanaop) }}.00 SAR</td>           
                </tr>
            </tbody>
        </table>


            </div>
            <br />


            <!-- Medhat SECTION -> medhat -->
            <div class="media text-muted pt-3">
            <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 32px; height: 32px;" src="{{ asset('images/uploads/avatars') }}/{{ $medhat->photo }}" data-holder-rendered="true">
            <p class="media-body pb-3 mb-0 small lh-125">
                <strong class="d-block text-gray-dark"><span>@</span>{{ $medhat->name }}</strong><span class="badge badge-primary">Key Account Saleman</span>
                <!--<a style="padding-left:0;padding-top:0;padding-bottom:0;padding-right:0;color:black;width: 8rem;border-radius:50%" href="{{ url('/export-orders-orderitems-csv') }}/{{ $medhat->idnumber }}/submitted/to/completed" class=""><h3 class="badge badge-info">{{ $countmedhatorders->count() }}</h3></a>-->
            </p>
            </div>

            <div class="media text-muted pt-3">



            <table id="myTable">
            <thead>
                <tr>
                    <th style="text-align:center">#</th>
                    <th style="text-align:center">Today</th>
                    <th style="text-align:center">Yesterday</th>
                    <th style="text-align:center">Tow Days Ago</th>
                    <th style="text-align:center">Three Days Ago</th>
                    <th style="text-align:center">All</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th style="text-align:center">POS</th>
                    <td style="text-align:center">{{ $countmedhatto }}</td>
                    <td style="text-align:center">{{ $countmedhatyo }}</td>
                    <td style="text-align:center">{{ $countmedhatbyo }}</td>
                    <td style="text-align:center">{{ $countmedhatbtdo }}</td>
                    <td style="text-align:center">{{ $countmedhatao }}</td>
                </tr>
                <tr>
                    <th style="text-align:center">I</th>
                    <td style="text-align:center">{{ $summedhattoi }}</td>
                    <td style="text-align:center">{{ $summedhatyoi }}</td>
                    <td style="text-align:center">{{ $summedhatbyoi }}</td>
                    <td style="text-align:center">{{ $summedhatbtdoi }}</td>
                    <td style="text-align:center">{{ $summedhataoi }}</td>
                    </tr>
                <tr>
                    <th style="text-align:center">Q</th>
                    <td style="text-align:center">{{ $summedhattoq }}</td>
                    <td style="text-align:center">{{ $summedhatyoq }}</td>
                    <td style="text-align:center">{{ $summedhatbyoq }}</td>
                    <td style="text-align:center">{{ $summedhatbtdoq }}</td>
                    <td style="text-align:center">{{ $summedhataoq }}</td>
                </tr>
                    <tr>
                    <th style="text-align:center">F</th>
                    <td style="text-align:center">{{ $summedhattof }}</td>
                    <td style="text-align:center">{{ $summedhatyof }}</td>
                    <td style="text-align:center">{{ $summedhatbyof }}</td>
                    <td style="text-align:center">{{ $summedhatbtdof }}</td>
                    <td style="text-align:center">{{ $summedhataof }}</td>
                </tr>
                <tr>

                    <th style="text-align:center">D</th>
                    <td style="text-align:center">{{ number_format($summedhattod) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($summedhatyod) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($summedhatbyod) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($summedhatbtdod) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($summedhataod) }}.00 SAR</td>
                </tr>
                <tr>
                    <th style="text-align:center">TP</th>
                    <td style="text-align:center">{{ number_format($summedhattop) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($summedhatyop) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($summedhatbyop) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($summedhatbtdop) }}.00 SAR</td>
                    <td style="text-align:center">{{ number_format($summedhataop) }}.00 SAR</td>           
                </tr>
            </tbody>
        </table>





            </div>
            <br />



        </div>
    </div>   

 
</div>  
  <!-- END QASSIM -->


<div id="all-stats" style="padding-top:20px;">
<a class="header-link" href="#all-stats"></a>


<article class="markdown-body">



</article>

</div>
          
<!--
    .discount {
    color:white;
    background-color:green;
}
.poor {
    color:white;
    background-color:#FF0000;

}
.meh {
    color:white;
    background-color:#FF3300;

}
.weak {
    color:white;
    background-color:#FF6600;

}
.good {
    color:black;
    background-color:#ff9933;

}
.excellent {
    color:black;
    background-color:#ffcc00;

}
.pro {
    color:black;
    background-color:#ffff00;

}
.ffreak {
    color:black;
    background-color:#ccff33;

}
.super {
    color:black;
    background-color:#99ff33;

}
.master {
    color:black;
    background-color:#66ff33;

}
.alpha {
    color:black;
    background-color:#33cc33;

}
.omega {
    color:black;
    background-color:#00cc00;

}
.elite {
    color:white;
    background-color:#000066;

}


    '--1'     : 'discount',
    '0-10000'     : 'poor',
    '10001-50000'    : 'meh',
    '50001-100000'   : 'weak',
    '100001-250000'     : 'good',
    '250001-500000'    : 'excellent',
    '500001-1000000'   : 'pro',
    '1000001-1500000'   : 'ffreak',
    '1500001-2000000'   : 'super',
    '2000001-3000000'   : 'master',
    '3000001-4000000'   : 'alpha',
    '4000001-5000000'   : 'omega',
    '5000001-10000000'   : 'elite'

-->



@markdown

#### All Stats

@endmarkdown


<pre>
<span class="poor">>= 10K</span> <span class="meh">>= 50K</span> <span class="weak">>= 100K</span> <span class="good">>= 250K</span> <span class="excellent">>= 500K</span> <span class="pro">>= 1M</span> <span class="ffreak">>= 1.5M</span> <span class="super">>= 2M</span> <span class="master">>= 3M</span> <span class="alpha">>= 4M</span> <span class="omega">>= 5M</span> <span class="elite">>= 10M</span> 
</pre>
<!-- ALL TOGETHER IN ONE TABLE START -->



<br />
<br />





        <table id="myTable">
            <thead>

                <tr>
                    <th style="text-align:center"></th>
                    <th style="text-align:center" colspan="6">Today</th>
                    <th style="text-align:center" colspan="6">Yesterday</th>
                    <th style="text-align:center"colspan="6">All</th>

                </tr>
                <tr>
                    <th style="text-align:center"><b>Firas Team</b></th>
                    <th style="text-align:center">POS</th>
                    <th style="text-align:center">I</th>
                    <th style="text-align:center">Q</th>
                    <th style="text-align:center">F</th>
                    <th style="text-align:center">D</th>
                    <th style="text-align:center">TP</th>

                    <th style="text-align:center">POS</th>
                    <th style="text-align:center">I</th>
                    <th style="text-align:center">Q</th>
                    <th style="text-align:center">F</th>
                    <th style="text-align:center">D</th>
                    <th style="text-align:center">TP</th>

                    <th style="text-align:center">POS</th>
                    <th style="text-align:center">I</th>
                    <th style="text-align:center">Q</th>
                    <th style="text-align:center">F</th>
                    <th style="text-align:center">D</th>
                    <th style="text-align:center">TP</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th style="text-align:center">{{ $michael->name }}</th>
                    <td style="text-align:center">{{ $countmichaelto }}</td>
                    <td style="text-align:center">{{ $summichaeltoi }}</td>
                    <td style="text-align:center">{{ $summichaeltoq }}</td>
                    <td style="text-align:center">{{ $summichaeltof }}</td>
                    <td style="text-align:center" data-color="{{ $summichaeltod }}">{{ number_format($summichaeltod) }}.00 SAR</td>
                    <td style="text-align:center" data-color="{{ $summichaeltop }}">{{ number_format($summichaeltop) }}.00 SAR</td>

                    <td style="text-align:center">{{ $countmichaelyo }}</td>
                    <td style="text-align:center">{{ $summichaelyoi }}</td>
                    <td style="text-align:center">{{ $summichaelyoq }}</td>
                    <td style="text-align:center">{{ $summichaelyof }}</td>
                    <td style="text-align:center" data-color="{{ $summichaelyod }}">{{ number_format($summichaelyod) }}.00 SAR</td>
                    <td style="text-align:center" data-color="{{ $summichaelyop }}">{{ number_format($summichaelyop) }}.00 SAR</td>

                    <td style="text-align:center">{{ $countmichaelao }}</td>
                    <td style="text-align:center">{{ $summichaelaoi }}</td>
                    <td style="text-align:center">{{ $summichaelaoq }}</td>
                    <td style="text-align:center">{{ $summichaelaof }}</td>
                    <td style="text-align:center" data-color="{{ $summichaelaod }}">{{ number_format($summichaelaod) }}.00 SAR</td>
                    <td style="text-align:center" data-color="{{ $summichaelaop }}">{{ number_format($summichaelaop) }}.00 SAR</td>   
                </tr>

                <tr>
                    <th style="text-align:center">{{ $mohammedsayed->name }}</th>
                    <td style="text-align:center">{{ $countmohammedsayedto }}</td>
                    <td style="text-align:center">{{ $summohammedsayedtoi }}</td>
                    <td style="text-align:center">{{ $summohammedsayedtoq }}</td>
                    <td style="text-align:center">{{ $summohammedsayedtof }}</td>
                    <td style="text-align:center" data-color="{{ $summohammedsayedtod }}">{{ number_format($summohammedsayedtod) }}.00 SAR</td>
                    <td style="text-align:center" data-color="{{ $summohammedsayedtop }}">{{ number_format($summohammedsayedtop) }}.00 SAR</td>

                    <td style="text-align:center">{{ $countmohammedsayedyo }}</td>
                    <td style="text-align:center">{{ $summohammedsayedyoi }}</td>
                    <td style="text-align:center">{{ $summohammedsayedyoq }}</td>
                    <td style="text-align:center">{{ $summohammedsayedyof }}</td>
                    <td style="text-align:center" data-color="{{ $summohammedsayedyod }}">{{ number_format($summohammedsayedyod) }}.00 SAR</td>
                    <td style="text-align:center" data-color="{{ $summohammedsayedyop }}">{{ number_format($summohammedsayedyop) }}.00 SAR</td>

                    <td style="text-align:center">{{ $countmohammedsayedao }}</td>
                    <td style="text-align:center">{{ $summohammedsayedaoi }}</td>
                    <td style="text-align:center">{{ $summohammedsayedaoq }}</td>
                    <td style="text-align:center">{{ $summohammedsayedaof }}</td>
                    <td style="text-align:center" data-color="{{ $summohammedsayedaod }}">{{ number_format($summohammedsayedaod) }}.00 SAR</td>
                    <td style="text-align:center" data-color="{{ $summohammedsayedaop }}">{{ number_format($summohammedsayedaop) }}.00 SAR</td>   
                </tr>


                <tr>
                    <th style="text-align:center">{{ $fahaddahasy->name }}</th>
                    <td style="text-align:center">{{ $countfahaddahasyto }}</td>
                    <td style="text-align:center">{{ $sumfahaddahasytoi }}</td>
                    <td style="text-align:center">{{ $sumfahaddahasytoq }}</td>
                    <td style="text-align:center">{{ $sumfahaddahasytof }}</td>
                    <td style="text-align:center" data-color="{{ $sumfahaddahasytod }}">{{ number_format($sumfahaddahasytod) }}.00 SAR</td>
                    <td style="text-align:center" data-color="{{ $sumfahaddahasytop }}">{{ number_format($sumfahaddahasytop) }}.00 SAR</td>

                    <td style="text-align:center">{{ $countfahaddahasyyo }}</td>
                    <td style="text-align:center">{{ $sumfahaddahasyyoi }}</td>
                    <td style="text-align:center">{{ $sumfahaddahasyyoq }}</td>
                    <td style="text-align:center">{{ $sumfahaddahasyyof }}</td>
                    <td style="text-align:center" data-color="{{ $sumfahaddahasyyod }}">{{ number_format($sumfahaddahasyyod) }}.00 SAR</td>
                    <td style="text-align:center" data-color="{{ $sumfahaddahasyyop }}">{{ number_format($sumfahaddahasyyop) }}.00 SAR</td>

                    <td style="text-align:center">{{ $countfahaddahasyao }}</td>
                    <td style="text-align:center">{{ $sumfahaddahasyaoi }}</td>
                    <td style="text-align:center">{{ $sumfahaddahasyaoq }}</td>
                    <td style="text-align:center">{{ $sumfahaddahasyaof }}</td>
                    <td style="text-align:center" data-color="{{ $sumfahaddahasyaod }}">{{ number_format($sumfahaddahasyaod) }}.00 SAR</td>
                    <td style="text-align:center" data-color="{{ $sumfahaddahasyaop }}">{{ number_format($sumfahaddahasyaop) }}.00 SAR</td>   
                </tr>


                <tr>
                    <th style="text-align:center">{{ $abdullahnaser->name }}</th>
                    <td style="text-align:center">{{ $countabdullahnaserto }}</td>
                    <td style="text-align:center">{{ $sumabdullahnasertoi }}</td>
                    <td style="text-align:center">{{ $sumabdullahnasertoq }}</td>
                    <td style="text-align:center">{{ $sumabdullahnasertof }}</td>
                    <td style="text-align:center" data-color="{{ $sumabdullahnasertod }}">{{ number_format($sumabdullahnasertod) }}.00 SAR</td>
                    <td style="text-align:center" data-color="{{ $sumabdullahnasertop }}">{{ number_format($sumabdullahnasertop) }}.00 SAR</td>

                    <td style="text-align:center">{{ $countabdullahnaseryo }}</td>
                    <td style="text-align:center">{{ $sumabdullahnaseryoi }}</td>
                    <td style="text-align:center">{{ $sumabdullahnaseryoq }}</td>
                    <td style="text-align:center">{{ $sumabdullahnaseryof }}</td>
                    <td style="text-align:center" data-color="{{ $sumabdullahnaseryod }}">{{ number_format($sumabdullahnaseryod) }}.00 SAR</td>
                    <td style="text-align:center" data-color="{{ $sumabdullahnaseryop }}">{{ number_format($sumabdullahnaseryop) }}.00 SAR</td>

                    <td style="text-align:center">{{ $countabdullahnaserao }}</td>
                    <td style="text-align:center">{{ $sumabdullahnaseraoi }}</td>
                    <td style="text-align:center">{{ $sumabdullahnaseraoq }}</td>
                    <td style="text-align:center">{{ $sumabdullahnaseraof }}</td>
                    <td style="text-align:center" data-color="{{ $sumabdullahnaseraod }}">{{ number_format($sumabdullahnaseraod) }}.00 SAR</td>
                    <td style="text-align:center" data-color="{{ $sumabdullahnaseraop }}">{{ number_format($sumabdullahnaseraop) }}.00 SAR</td>   
                </tr>


                <tr>
                    <th style="text-align:center">{{ $ahmedmedhat->name }}</th>
                    <td style="text-align:center">{{ $countahmedmedhatto }}</td>
                    <td style="text-align:center">{{ $sumahmedmedhattoi }}</td>
                    <td style="text-align:center">{{ $sumahmedmedhattoq }}</td>
                    <td style="text-align:center">{{ $sumahmedmedhattof }}</td>
                    <td style="text-align:center" data-color="{{ $sumahmedmedhattod }}">{{ number_format($sumahmedmedhattod) }}.00 SAR</td>
                    <td style="text-align:center" data-color="{{ $sumahmedmedhattop }}">{{ number_format($sumahmedmedhattop) }}.00 SAR</td>

                    <td style="text-align:center">{{ $countahmedmedhatyo }}</td>
                    <td style="text-align:center">{{ $sumahmedmedhatyoi }}</td>
                    <td style="text-align:center">{{ $sumahmedmedhatyoq }}</td>
                    <td style="text-align:center">{{ $sumahmedmedhatyof }}</td>
                    <td style="text-align:center" data-color="{{ $sumahmedmedhatyod }}">{{ number_format($sumahmedmedhatyod) }}.00 SAR</td>
                    <td style="text-align:center" data-color="{{ $sumahmedmedhatyop }}">{{ number_format($sumahmedmedhatyop) }}.00 SAR</td>

                    <td style="text-align:center">{{ $countahmedmedhatao }}</td>
                    <td style="text-align:center">{{ $sumahmedmedhataoi }}</td>
                    <td style="text-align:center">{{ $sumahmedmedhataoq }}</td>
                    <td style="text-align:center">{{ $sumahmedmedhataof }}</td>
                    <td style="text-align:center" data-color="{{ $sumahmedmedhataod }}">{{ number_format($sumahmedmedhataod) }}.00 SAR</td>
                    <td style="text-align:center" data-color="{{ $sumahmedmedhataop }}">{{ number_format($sumahmedmedhataop) }}.00 SAR</td>   
                </tr>

                    <tr>
                        <th style="text-align:center">Totals</th>    
                        <td style="text-align:center">{{ $countftto }}</td>
                        <td style="text-align:center">{{ $sumfttoi }}</td>
                        <td style="text-align:center">{{ $sumfttoq }}</td>
                        <td style="text-align:center">{{ $sumfttof }}</td>
                        <td style="text-align:center" data-color="{{ $sumfttod }}">{{ number_format($sumfttod) }}.00 SAR</td>
                        <td style="text-align:center" data-color="{{ $sumfttop }}">{{ number_format($sumfttop) }}.00 SAR</td>
                        <td style="text-align:center">{{ $countftyo }}</td>
                        <td style="text-align:center">{{ $sumftyoi }}</td>
                        <td style="text-align:center">{{ $sumftyoq }}</td>
                        <td style="text-align:center">{{ $sumftyof }}</td>
                        <td style="text-align:center" data-color="{{ $sumftyod }}">{{ number_format($sumftyod) }}.00 SAR</td>
                        <td style="text-align:center" data-color="{{ $sumftyop }}">{{ number_format($sumftyop) }}.00 SAR</td> 
                        <td style="text-align:center">{{ $countftao }}</td>
                        <td style="text-align:center">{{ $sumftaoi }}</td>
                        <td style="text-align:center">{{ $sumftaoq }}</td>
                        <td style="text-align:center">{{ $sumftaof }}</td>
                        <td style="text-align:center" data-color="{{ $sumftaod }}">{{ number_format($sumftaod) }}.00 SAR</td>
                        <td style="text-align:center" data-color="{{ $sumftaop }}">{{ number_format($sumftaop) }}.00 SAR</td>  
                    </tr>


<thead>

<tr>
    <th style="text-align:center"></th>
    <th style="text-align:center" colspan="6">Today</th>
    <th style="text-align:center" colspan="6">Yesterday</th>
    <th style="text-align:center"colspan="6">All</th>

</tr>
<tr>
    <th style="text-align:center"><b>Hazim Team</b></th>
    <th style="text-align:center">POS</th>
    <th style="text-align:center">I</th>
    <th style="text-align:center">Q</th>
    <th style="text-align:center">F</th>
    <th style="text-align:center">D</th>
    <th style="text-align:center">TP</th>

    <th style="text-align:center">POS</th>
    <th style="text-align:center">I</th>
    <th style="text-align:center">Q</th>
    <th style="text-align:center">F</th>
    <th style="text-align:center">D</th>
    <th style="text-align:center">TP</th>

    <th style="text-align:center">POS</th>
    <th style="text-align:center">I</th>
    <th style="text-align:center">Q</th>
    <th style="text-align:center">F</th>
    <th style="text-align:center">D</th>
    <th style="text-align:center">TP</th>
</tr>
</thead>


                <tr>
                    <th style="text-align:center">{{ $noufal->name }}</th>
                    <td style="text-align:center">{{ $countnoufalto }}</td>
                    <td style="text-align:center">{{ $sumnoufaltoi }}</td>
                    <td style="text-align:center">{{ $sumnoufaltoq }}</td>
                    <td style="text-align:center">{{ $sumnoufaltof }}</td>
                    <td style="text-align:center" data-color="{{ $sumnoufaltod }}">{{ number_format($sumnoufaltod) }}.00 SAR</td>
                    <td style="text-align:center" data-color="{{ $sumnoufaltop }}">{{ number_format($sumnoufaltop) }}.00 SAR</td>

                    <td style="text-align:center">{{ $countnoufalyo }}</td>
                    <td style="text-align:center">{{ $sumnoufalyoi }}</td>
                    <td style="text-align:center">{{ $sumnoufalyoq }}</td>
                    <td style="text-align:center">{{ $sumnoufalyof }}</td>
                    <td style="text-align:center" data-color="{{ $sumnoufalyod }}">{{ number_format($sumnoufalyod) }}.00 SAR</td>
                    <td style="text-align:center" data-color="{{ $sumnoufalyop }}">{{ number_format($sumnoufalyop) }}.00 SAR</td>

                    <td style="text-align:center">{{ $countnoufalao }}</td>
                    <td style="text-align:center">{{ $sumnoufalaoi }}</td>
                    <td style="text-align:center">{{ $sumnoufalaoq }}</td>
                    <td style="text-align:center">{{ $sumnoufalaof }}</td>
                    <td style="text-align:center" data-color="{{ $sumnoufalaod }}">{{ number_format($sumnoufalaod) }}.00 SAR</td>
                    <td style="text-align:center" data-color="{{ $sumnoufalaop }}">{{ number_format($sumnoufalaop) }}.00 SAR</td>   
                </tr>

                
                <tr>
                    <th style="text-align:center">{{ $ruben->name }}</th>
                    <td style="text-align:center">{{ $countrubento }}</td>
                    <td style="text-align:center">{{ $sumrubentoi }}</td>
                    <td style="text-align:center">{{ $sumrubentoq }}</td>
                    <td style="text-align:center">{{ $sumrubentof }}</td>
                    <td style="text-align:center" data-color="{{ $sumrubentod }}">{{ number_format($sumrubentod) }}.00 SAR</td>
                    <td style="text-align:center" data-color="{{ $sumrubentop }}">{{ number_format($sumrubentop) }}.00 SAR</td>

                    <td style="text-align:center">{{ $countrubenyo }}</td>
                    <td style="text-align:center">{{ $sumrubenyoi }}</td>
                    <td style="text-align:center">{{ $sumrubenyoq }}</td>
                    <td style="text-align:center">{{ $sumrubenyof }}</td>
                    <td style="text-align:center" data-color="{{ $sumrubenyod }}">{{ number_format($sumrubenyod) }}.00 SAR</td>
                    <td style="text-align:center" data-color="{{ $sumrubenyop }}">{{ number_format($sumrubenyop) }}.00 SAR</td>

                    <td style="text-align:center">{{ $countrubenao }}</td>
                    <td style="text-align:center">{{ $sumrubenaoi }}</td>
                    <td style="text-align:center">{{ $sumrubenaoq }}</td>
                    <td style="text-align:center">{{ $sumrubenaof }}</td>
                    <td style="text-align:center" data-color="{{ $sumrubenaod }}">{{ number_format($sumrubenaod) }}.00 SAR</td>
                    <td style="text-align:center" data-color="{{ $sumrubenaop }}">{{ number_format($sumrubenaop) }}.00 SAR</td>   
                </tr>



                <tr>
                    <th style="text-align:center">{{ $samsudin->name }}</th>
                    <td style="text-align:center">{{ $countsamsudinto }}</td>
                    <td style="text-align:center">{{ $sumsamsudintoi }}</td>
                    <td style="text-align:center">{{ $sumsamsudintoq }}</td>
                    <td style="text-align:center">{{ $sumsamsudintof }}</td>
                    <td style="text-align:center" data-color="{{ $sumsamsudintod }}">{{ number_format($sumsamsudintod) }}.00 SAR</td>
                    <td style="text-align:center" data-color="{{ $sumsamsudintop }}">{{ number_format($sumsamsudintop) }}.00 SAR</td>

                    <td style="text-align:center">{{ $countsamsudinyo }}</td>
                    <td style="text-align:center">{{ $sumsamsudinyoi }}</td>
                    <td style="text-align:center">{{ $sumsamsudinyoq }}</td>
                    <td style="text-align:center">{{ $sumsamsudinyof }}</td>
                    <td style="text-align:center" data-color="{{ $sumsamsudinyod }}">{{ number_format($sumsamsudinyod) }}.00 SAR</td>
                    <td style="text-align:center" data-color="{{ $sumsamsudinyop }}">{{ number_format($sumsamsudinyop) }}.00 SAR</td>

                    <td style="text-align:center">{{ $countsamsudinao }}</td>
                    <td style="text-align:center">{{ $sumsamsudinaoi }}</td>
                    <td style="text-align:center">{{ $sumsamsudinaoq }}</td>
                    <td style="text-align:center">{{ $sumsamsudinaof }}</td>
                    <td style="text-align:center" data-color="{{ $sumsamsudinaod }}">{{ number_format($sumsamsudinaod) }}.00 SAR</td>
                    <td style="text-align:center" data-color="{{ $sumsamsudinaop }}">{{ number_format($sumsamsudinaop) }}.00 SAR</td>   
                </tr>



                <tr>
                    <th style="text-align:center">{{ $osama->name }}</th>
                    <td style="text-align:center">{{ $countosamato }}</td>
                    <td style="text-align:center">{{ $sumosamatoi }}</td>
                    <td style="text-align:center">{{ $sumosamatoq }}</td>
                    <td style="text-align:center">{{ $sumosamatof }}</td>
                    <td style="text-align:center" data-color="{{ $sumosamatod }}">{{ number_format($sumosamatod) }}.00 SAR</td>
                    <td style="text-align:center" data-color="{{ $sumosamatop }}">{{ number_format($sumosamatop) }}.00 SAR</td>

                    <td style="text-align:center">{{ $countosamayo }}</td>
                    <td style="text-align:center">{{ $sumosamayoi }}</td>
                    <td style="text-align:center">{{ $sumosamayoq }}</td>
                    <td style="text-align:center">{{ $sumosamayof }}</td>
                    <td style="text-align:center" data-color="{{ $sumosamayod }}">{{ number_format($sumosamayod) }}.00 SAR</td>
                    <td style="text-align:center" data-color="{{ $sumosamayop }}">{{ number_format($sumosamayop) }}.00 SAR</td>

                    <td style="text-align:center">{{ $countosamaao }}</td>
                    <td style="text-align:center">{{ $sumosamaaoi }}</td>
                    <td style="text-align:center">{{ $sumosamaaoq }}</td>
                    <td style="text-align:center">{{ $sumosamaaof }}</td>
                    <td style="text-align:center" data-color="{{ $sumosamaaod }}">{{ number_format($sumosamaaod) }}.00 SAR</td>
                    <td style="text-align:center" data-color="{{ $sumosamaaop }}">{{ number_format($sumosamaaop) }}.00 SAR</td>   
                </tr>



                <tr>
                        <th style="text-align:center">Totals</th>    
                        <td style="text-align:center">{{ $counthtto }}</td>
                        <td style="text-align:center">{{ $sumhttoi }}</td>
                        <td style="text-align:center">{{ $sumhttoq }}</td>
                        <td style="text-align:center">{{ $sumhttof }}</td>
                        <td style="text-align:center" data-color="{{ $sumhttod }}">{{ number_format($sumhttod) }}.00 SAR</td>
                        <td style="text-align:center" data-color="{{ $sumhttop }}">{{ number_format($sumhttop) }}.00 SAR</td>
                        <td style="text-align:center">{{ $counthtyo }}</td>
                        <td style="text-align:center">{{ $sumhtyoi }}</td>
                        <td style="text-align:center">{{ $sumhtyoq }}</td>
                        <td style="text-align:center">{{ $sumhtyof }}</td>
                        <td style="text-align:center" data-color="{{ $sumhtyod }}">{{ number_format($sumhtyod) }}.00 SAR</td>
                        <td style="text-align:center" data-color="{{ $sumhtyop }}">{{ number_format($sumhtyop) }}.00 SAR</td> 
                        <td style="text-align:center">{{ $counthtao }}</td>
                        <td style="text-align:center">{{ $sumhtaoi }}</td>
                        <td style="text-align:center">{{ $sumhtaoq }}</td>
                        <td style="text-align:center">{{ $sumhtaof }}</td>
                        <td style="text-align:center" data-color="{{ $sumhtaod }}">{{ number_format($sumhtaod) }}.00 SAR</td>
                        <td style="text-align:center" data-color="{{ $sumhtaop }}">{{ number_format($sumhtaop) }}.00 SAR</td>  
                    </tr>   


















                <thead>
                <tr>
                    <th style="text-align:center"></th>
                    <th style="text-align:center" colspan="6">Today</th>
                    <th style="text-align:center" colspan="6">Yesterday</th>
                    <th style="text-align:center"colspan="6">All</th>

                </tr>
                <tr>
                    <th style="text-align:center"><b>Awadin Team</b></th>
                    <th style="text-align:center">POS</th>
                    <th style="text-align:center">I</th>
                    <th style="text-align:center">Q</th>
                    <th style="text-align:center">F</th>
                    <th style="text-align:center">D</th>
                    <th style="text-align:center">TP</th>

                    <th style="text-align:center">POS</th>
                    <th style="text-align:center">I</th>
                    <th style="text-align:center">Q</th>
                    <th style="text-align:center">F</th>
                    <th style="text-align:center">D</th>
                    <th style="text-align:center">TP</th>

                    <th style="text-align:center">POS</th>
                    <th style="text-align:center">I</th>
                    <th style="text-align:center">Q</th>
                    <th style="text-align:center">F</th>
                    <th style="text-align:center">D</th>
                    <th style="text-align:center">TP</th>
                </tr>
                </thead>


                <tr>
                    <th style="text-align:center">{{ $ahmedshawqy->name }}</th>
                    <td style="text-align:center">{{ $countahmedshawqyto }}</td>
                    <td style="text-align:center">{{ $sumahmedshawqytoi }}</td>
                    <td style="text-align:center">{{ $sumahmedshawqytoq }}</td>
                    <td style="text-align:center">{{ $sumahmedshawqytof }}</td>
                    <td style="text-align:center" data-color="{{ $sumahmedshawqytod }}">{{ number_format($sumahmedshawqytod) }}.00 SAR</td>
                    <td style="text-align:center" data-color="{{ $sumahmedshawqytop }}">{{ number_format($sumahmedshawqytop) }}.00 SAR</td>

                    <td style="text-align:center">{{ $countahmedshawqyyo }}</td>
                    <td style="text-align:center">{{ $sumahmedshawqyyoi }}</td>
                    <td style="text-align:center">{{ $sumahmedshawqyyoq }}</td>
                    <td style="text-align:center">{{ $sumahmedshawqyyof }}</td>
                    <td style="text-align:center" data-color="{{ $sumahmedshawqyyod }}">{{ number_format($sumahmedshawqyyod) }}.00 SAR</td>
                    <td style="text-align:center" data-color="{{ $sumahmedshawqyyop }}">{{ number_format($sumahmedshawqyyop) }}.00 SAR</td>

                    <td style="text-align:center">{{ $countahmedshawqyao }}</td>
                    <td style="text-align:center">{{ $sumahmedshawqyaoi }}</td>
                    <td style="text-align:center">{{ $sumahmedshawqyaoq }}</td>
                    <td style="text-align:center">{{ $sumahmedshawqyaof }}</td>
                    <td style="text-align:center" data-color="{{ $sumahmedshawqyaod }}">{{ number_format($sumahmedshawqyaod) }}.00 SAR</td>
                    <td style="text-align:center" data-color="{{ $sumahmedshawqyaop }}">{{ number_format($sumahmedshawqyaop) }}.00 SAR</td>   
                </tr>

                


                <tr>
                    <th style="text-align:center">{{ $hassanfathi->name }}</th>
                    <td style="text-align:center">{{ $counthassanfathito }}</td>
                    <td style="text-align:center">{{ $sumhassanfathitoi }}</td>
                    <td style="text-align:center">{{ $sumhassanfathitoq }}</td>
                    <td style="text-align:center">{{ $sumhassanfathitof }}</td>
                    <td style="text-align:center" data-color="{{ $sumhassanfathitod }}">{{ number_format($sumhassanfathitod) }}.00 SAR</td>
                    <td style="text-align:center" data-color="{{ $sumhassanfathitop }}">{{ number_format($sumhassanfathitop) }}.00 SAR</td>

                    <td style="text-align:center">{{ $counthassanfathiyo }}</td>
                    <td style="text-align:center">{{ $sumhassanfathiyoi }}</td>
                    <td style="text-align:center">{{ $sumhassanfathiyoq }}</td>
                    <td style="text-align:center">{{ $sumhassanfathiyof }}</td>
                    <td style="text-align:center" data-color="{{ $sumhassanfathiyod }}">{{ number_format($sumhassanfathiyod) }}.00 SAR</td>
                    <td style="text-align:center" data-color="{{ $sumhassanfathiyop }}">{{ number_format($sumhassanfathiyop) }}.00 SAR</td>

                    <td style="text-align:center">{{ $counthassanfathiao }}</td>
                    <td style="text-align:center">{{ $sumhassanfathiaoi }}</td>
                    <td style="text-align:center">{{ $sumhassanfathiaoq }}</td>
                    <td style="text-align:center">{{ $sumhassanfathiaof }}</td>
                    <td style="text-align:center" data-color="{{ $sumhassanfathiaod }}">{{ number_format($sumhassanfathiaod) }}.00 SAR</td>
                    <td style="text-align:center" data-color="{{ $sumhassanfathiaop }}">{{ number_format($sumhassanfathiaop) }}.00 SAR</td>   
                </tr>

                

                <tr>
                    <th style="text-align:center">{{ $hashem->name }}</th>
                    <td style="text-align:center">{{ $counthashemto }}</td>
                    <td style="text-align:center">{{ $sumhashemtoi }}</td>
                    <td style="text-align:center">{{ $sumhashemtoq }}</td>
                    <td style="text-align:center">{{ $sumhashemtof }}</td>
                    <td style="text-align:center"data-color="{{ $sumhashemtod }}">{{ number_format($sumhashemtod) }}.00 SAR</td>
                    <td style="text-align:center"data-color="{{ $sumhashemtop }}">{{ number_format($sumhashemtop) }}.00 SAR</td>

                    <td style="text-align:center">{{ $counthashemyo }}</td>
                    <td style="text-align:center">{{ $sumhashemyoi }}</td>
                    <td style="text-align:center">{{ $sumhashemyoq }}</td>
                    <td style="text-align:center">{{ $sumhashemyof }}</td>
                    <td style="text-align:center"data-color="{{ $sumhashemyod }}">{{ number_format($sumhashemyod) }}.00 SAR</td>
                    <td style="text-align:center"data-color="{{ $sumhashemyop }}">{{ number_format($sumhashemyop) }}.00 SAR</td>

                    <td style="text-align:center">{{ $counthashemao }}</td>
                    <td style="text-align:center">{{ $sumhashemaoi }}</td>
                    <td style="text-align:center">{{ $sumhashemaoq }}</td>
                    <td style="text-align:center">{{ $sumhashemaof }}</td>
                    <td style="text-align:center"data-color="{{ $sumhashemaod }}">{{ number_format($sumhashemaod) }}.00 SAR</td>
                    <td style="text-align:center"data-color="{{ $sumhashemaop }}">{{ number_format($sumhashemaop) }}.00 SAR</td>   
                </tr>

                

                <tr>
                    <th style="text-align:center">{{ $medhathassan->name }}</th>
                    <td style="text-align:center">{{ $countmedhathassanto }}</td>
                    <td style="text-align:center">{{ $summedhathassantoi }}</td>
                    <td style="text-align:center">{{ $summedhathassantoq }}</td>
                    <td style="text-align:center">{{ $summedhathassantof }}</td>
                    <td style="text-align:center"data-color="{{ $summedhathassantod }}">{{ number_format($summedhathassantod) }}.00 SAR</td>
                    <td style="text-align:center"data-color="{{ $summedhathassantop }}">{{ number_format($summedhathassantop) }}.00 SAR</td>

                    <td style="text-align:center">{{ $countmedhathassanyo }}</td>
                    <td style="text-align:center">{{ $summedhathassanyoi }}</td>
                    <td style="text-align:center">{{ $summedhathassanyoq }}</td>
                    <td style="text-align:center">{{ $summedhathassanyof }}</td>
                    <td style="text-align:center"data-color="{{ $summedhathassanyod }}">{{ number_format($summedhathassanyod) }}.00 SAR</td>
                    <td style="text-align:center"data-color="{{ $summedhathassanyop }}">{{ number_format($summedhathassanyop) }}.00 SAR</td>

                    <td style="text-align:center">{{ $countmedhathassanao }}</td>
                    <td style="text-align:center">{{ $summedhathassanaoi }}</td>
                    <td style="text-align:center">{{ $summedhathassanaoq }}</td>
                    <td style="text-align:center">{{ $summedhathassanaof }}</td>
                    <td style="text-align:center"data-color="{{ $summedhathassanaod }}">{{ number_format($summedhathassanaod) }}.00 SAR</td>
                    <td style="text-align:center"data-color="{{ $summedhathassanaop }}">{{ number_format($summedhathassanaop) }}.00 SAR</td>   
                </tr>

                


                <tr>
                        <th style="text-align:center">Totals</th>    
                        <td style="text-align:center">{{ $countatto }}</td>
                        <td style="text-align:center">{{ $sumattoi }}</td>
                        <td style="text-align:center">{{ $sumattoq }}</td>
                        <td style="text-align:center">{{ $sumattof }}</td>
                        <td style="text-align:center" data-color="{{ $sumattod }}">{{ number_format($sumattod) }}.00 SAR</td>
                        <td style="text-align:center" data-color="{{ $sumattop }}">{{ number_format($sumattop) }}.00 SAR</td>
                        <td style="text-align:center">{{ $countatyo }}</td>
                        <td style="text-align:center">{{ $sumatyoi }}</td>
                        <td style="text-align:center">{{ $sumatyoq }}</td>
                        <td style="text-align:center">{{ $sumatyof }}</td>
                        <td style="text-align:center" data-color="{{ $sumatyod }}">{{ number_format($sumatyod) }}.00 SAR</td>
                        <td style="text-align:center" data-color="{{ $sumatyop }}">{{ number_format($sumatyop) }}.00 SAR</td> 
                        <td style="text-align:center">{{ $countatao }}</td>
                        <td style="text-align:center">{{ $sumataoi }}</td>
                        <td style="text-align:center">{{ $sumataoq }}</td>
                        <td style="text-align:center">{{ $sumataof }}</td>
                        <td style="text-align:center" data-color="{{ $sumataod }}">{{ number_format($sumataod) }}.00 SAR</td>
                        <td style="text-align:center" data-color="{{ $sumataop }}">{{ number_format($sumataop) }}.00 SAR</td>  
                    </tr>   




                    <thead>

<tr>
    <th style="text-align:center"></th>
    <th style="text-align:center" colspan="6">Today</th>
    <th style="text-align:center" colspan="6">Yesterday</th>
    <th style="text-align:center"colspan="6">All</th>

</tr>
<tr>
    <th style="text-align:center"><b>Wail Team</b></th>
    <th style="text-align:center">POS</th>
    <th style="text-align:center">I</th>
    <th style="text-align:center">Q</th>
    <th style="text-align:center">F</th>
    <th style="text-align:center">D</th>
    <th style="text-align:center">TP</th>

    <th style="text-align:center">POS</th>
    <th style="text-align:center">I</th>
    <th style="text-align:center">Q</th>
    <th style="text-align:center">F</th>
    <th style="text-align:center">D</th>
    <th style="text-align:center">TP</th>

    <th style="text-align:center">POS</th>
    <th style="text-align:center">I</th>
    <th style="text-align:center">Q</th>
    <th style="text-align:center">F</th>
    <th style="text-align:center">D</th>
    <th style="text-align:center">TP</th>
</tr>
</thead>
<tbody>
<tr>
    <th style="text-align:center">{{ $suneer->name }}</th>
    <td style="text-align:center">{{ $countsuneerto }}</td>
    <td style="text-align:center">{{ $sumsuneertoi }}</td>
    <td style="text-align:center">{{ $sumsuneertoq }}</td>
    <td style="text-align:center">{{ $sumsuneertof }}</td>
    <td style="text-align:center" data-color="{{ $sumsuneertod }}">{{ number_format($sumsuneertod) }}.00 SAR</td>
    <td style="text-align:center" data-color="{{ $sumsuneertop }}">{{ number_format($sumsuneertop) }}.00 SAR</td>

    <td style="text-align:center">{{ $countsuneeryo }}</td>
    <td style="text-align:center">{{ $sumsuneeryoi }}</td>
    <td style="text-align:center">{{ $sumsuneeryoq }}</td>
    <td style="text-align:center">{{ $sumsuneeryof }}</td>
    <td style="text-align:center" data-color="{{ $sumsuneeryod }}">{{ number_format($sumsuneeryod) }}.00 SAR</td>
    <td style="text-align:center" data-color="{{ $sumsuneeryop }}">{{ number_format($sumsuneeryop) }}.00 SAR</td>

    <td style="text-align:center">{{ $countsuneerao }}</td>
    <td style="text-align:center">{{ $sumsuneeraoi }}</td>
    <td style="text-align:center">{{ $sumsuneeraoq }}</td>
    <td style="text-align:center">{{ $sumsuneeraof }}</td>
    <td style="text-align:center" data-color="{{ $sumsuneeraod }}">{{ number_format($sumsuneeraod) }}.00 SAR</td>
    <td style="text-align:center" data-color="{{ $sumsuneeraop }}">{{ number_format($sumsuneeraop) }}.00 SAR</td>   
</tr>

<tr>
    <th style="text-align:center">{{ $fahadhussein->name }}</th>
    <td style="text-align:center">{{ $countfahadhusseinto }}</td>
    <td style="text-align:center">{{ $sumfahadhusseintoi }}</td>
    <td style="text-align:center">{{ $sumfahadhusseintoq }}</td>
    <td style="text-align:center">{{ $sumfahadhusseintof }}</td>
    <td style="text-align:center" data-color="{{ $sumfahadhusseintod }}">{{ number_format($sumfahadhusseintod) }}.00 SAR</td>
    <td style="text-align:center" data-color="{{ $sumfahadhusseintop }}">{{ number_format($sumfahadhusseintop) }}.00 SAR</td>

    <td style="text-align:center">{{ $countfahadhusseinyo }}</td>
    <td style="text-align:center">{{ $sumfahadhusseinyoi }}</td>
    <td style="text-align:center">{{ $sumfahadhusseinyoq }}</td>
    <td style="text-align:center">{{ $sumfahadhusseinyof }}</td>
    <td style="text-align:center" data-color="{{ $sumfahadhusseinyod }}">{{ number_format($sumfahadhusseinyod) }}.00 SAR</td>
    <td style="text-align:center" data-color="{{ $sumfahadhusseinyop }}">{{ number_format($sumfahadhusseinyop) }}.00 SAR</td>

    <td style="text-align:center">{{ $countfahadhusseinao }}</td>
    <td style="text-align:center">{{ $sumfahadhusseinaoi }}</td>
    <td style="text-align:center">{{ $sumfahadhusseinaoq }}</td>
    <td style="text-align:center">{{ $sumfahadhusseinaof }}</td>
    <td style="text-align:center" data-color="{{ $sumfahadhusseinaod }}">{{ number_format($sumfahadhusseinaod) }}.00 SAR</td>
    <td style="text-align:center" data-color="{{ $sumfahadhusseinaop }}">{{ number_format($sumfahadhusseinaop) }}.00 SAR</td>   
</tr>

<tr>
    <th style="text-align:center">{{ $sultansalman->name }}</th>
    <td style="text-align:center">{{ $countsultansalmanto }}</td>
    <td style="text-align:center">{{ $sumsultansalmantoi }}</td>
    <td style="text-align:center">{{ $sumsultansalmantoq }}</td>
    <td style="text-align:center">{{ $sumsultansalmantof }}</td>
    <td style="text-align:center" data-color="{{ $sumsultansalmantod }}">{{ number_format($sumsultansalmantod) }}.00 SAR</td>
    <td style="text-align:center" data-color="{{ $sumsultansalmantop }}">{{ number_format($sumsultansalmantop) }}.00 SAR</td>

    <td style="text-align:center">{{ $countsultansalmanyo }}</td>
    <td style="text-align:center">{{ $sumsultansalmanyoi }}</td>
    <td style="text-align:center">{{ $sumsultansalmanyoq }}</td>
    <td style="text-align:center">{{ $sumsultansalmanyof }}</td>
    <td style="text-align:center" data-color="{{ $sumsultansalmanyod }}">{{ number_format($sumsultansalmanyod) }}.00 SAR</td>
    <td style="text-align:center" data-color="{{ $sumsultansalmanyop }}">{{ number_format($sumsultansalmanyop) }}.00 SAR</td>

    <td style="text-align:center">{{ $countsultansalmanao }}</td>
    <td style="text-align:center">{{ $sumsultansalmanaoi }}</td>
    <td style="text-align:center">{{ $sumsultansalmanaoq }}</td>
    <td style="text-align:center">{{ $sumsultansalmanaof }}</td>
    <td style="text-align:center" data-color="{{ $sumsultansalmanaod }}">{{ number_format($sumsultansalmanaod) }}.00 SAR</td>
    <td style="text-align:center" data-color="{{ $sumsultansalmanaop }}">{{ number_format($sumsultansalmanaop) }}.00 SAR</td>   
</tr>

<tr>
    <th style="text-align:center">{{ $medhat->name }}</th>
    <td style="text-align:center">{{ $countmedhatto }}</td>
    <td style="text-align:center">{{ $summedhattoi }}</td>
    <td style="text-align:center">{{ $summedhattoq }}</td>
    <td style="text-align:center">{{ $summedhattof }}</td>
    <td style="text-align:center" data-color="{{ $summedhattod }}">{{ number_format($summedhattod) }}.00 SAR</td>
    <td style="text-align:center" data-color="{{ $summedhattop }}">{{ number_format($summedhattop) }}.00 SAR</td>

    <td style="text-align:center">{{ $countmedhatyo }}</td>
    <td style="text-align:center">{{ $summedhatyoi }}</td>
    <td style="text-align:center">{{ $summedhatyoq }}</td>
    <td style="text-align:center">{{ $summedhatyof }}</td>
    <td style="text-align:center" data-color="{{ $summedhatyod }}">{{ number_format($summedhatyod) }}.00 SAR</td>
    <td style="text-align:center" data-color="{{ $summedhatyop }}">{{ number_format($summedhatyop) }}.00 SAR</td>

    <td style="text-align:center">{{ $countmedhatao }}</td>
    <td style="text-align:center">{{ $summedhataoi }}</td>
    <td style="text-align:center">{{ $summedhataoq }}</td>
    <td style="text-align:center">{{ $summedhataof }}</td>
    <td style="text-align:center" data-color="{{ $summedhataod }}">{{ number_format($summedhataod) }}.00 SAR</td>
    <td style="text-align:center" data-color="{{ $summedhataop }}">{{ number_format($summedhataop) }}.00 SAR</td>   
</tr>

<tr>
                        <th style="text-align:center">Totals</th>    
                        <td style="text-align:center">{{ $countqtto }}</td>
                        <td style="text-align:center">{{ $sumqttoi }}</td>
                        <td style="text-align:center">{{ $sumqttoq }}</td>
                        <td style="text-align:center">{{ $sumqttof }}</td>
                        <td style="text-align:center" data-color="{{ $sumqttod }}">{{ number_format($sumqttod) }}.00 SAR</td>
                        <td style="text-align:center" data-color="{{ $sumqttop }}">{{ number_format($sumqttop) }}.00 SAR</td>
                        <td style="text-align:center">{{ $countqtyo }}</td>
                        <td style="text-align:center">{{ $sumqtyoi }}</td>
                        <td style="text-align:center">{{ $sumqtyoq }}</td>
                        <td style="text-align:center">{{ $sumqtyof }}</td>
                        <td style="text-align:center" data-color="{{ $sumqtyod }}">{{ number_format($sumqtyod) }}.00 SAR</td>
                        <td style="text-align:center" data-color="{{ $sumqtyop }}">{{ number_format($sumqtyop) }}.00 SAR</td> 
                        <td style="text-align:center">{{ $countqtao }}</td>
                        <td style="text-align:center">{{ $sumqtaoi }}</td>
                        <td style="text-align:center">{{ $sumqtaoq }}</td>
                        <td style="text-align:center">{{ $sumqtaof }}</td>
                        <td style="text-align:center" data-color="{{ $sumqtaod }}">{{ number_format($sumqtaod) }}.00 SAR</td>
                        <td style="text-align:center" data-color="{{ $sumqtaop }}">{{ number_format($sumqtaop) }}.00 SAR</td>  
                    </tr>   
            </tbody>

            <tfoot>

                <tr>
                    <th style="text-align:center">All</th>    
                    <th style="text-align:center">{{ $countftto + $counthtto + $countatto + $countqtto }}</th>
                    <th style="text-align:center">{{ $sumfttoi + $sumhttoi + $sumattoi + $sumqttoi}}</th>
                    <th style="text-align:center">{{ $sumfttoq + $sumhttoq + $sumattoq + $sumqttoq}}</th>
                    <th style="text-align:center">{{ $sumfttof + $sumhttof + $sumattof + $sumqttof }}</th>
                    <td style="text-align:center" data-color="{{ $sumtodaydiscounts }}">{{ number_format($sumfttod + $sumhttod + $sumattod + $sumqttod) }}.00 SAR</td>
                    <td style="text-align:center" data-color="{{ $sumtodaytotalprice }}">{{ number_format($sumfttop + $sumhttop + $sumattop + $sumqttop) }}.00 SAR</td>
                    <th style="text-align:center">{{ $countftyo + $counthtyo + $countatyo + $countqtyo }}</th>
                    <th style="text-align:center">{{ $sumftyoi + $sumhtyoi + $sumatyoi + $sumqtyoi }}</th>
                    <th style="text-align:center">{{ $sumftyoq + $sumhtyoq + $sumatyoq + $sumqtyoq }}</th>
                    <th style="text-align:center">{{ $sumftyof + $sumhtyof + $sumatyof + $sumqtyof }}</th>
                    <td style="text-align:center" data-color="{{ $sumyestedaydiscounts }}">{{ number_format($sumftyod + $sumhtyod + $sumatyod + $sumqtyod) }}.00 SAR</td>
                    <td style="text-align:center" data-color="{{ $sumyestedaytotalprice }}">{{ number_format($sumftyop + $sumhtyop + $sumatyop + $sumqtyop) }}.00 SAR</td> 
                    <th style="text-align:center">{{ $countftao + $counthtao + $countatao + $countqtao}}</th>
                    <th style="text-align:center">{{ $sumftaoi + $sumhtaoi + $sumataoi + $sumqtaoi}}</th>
                    <th style="text-align:center">{{ $sumftaoq + $sumhtaoq + $sumataoq + $sumqtaoq}}</th>
                    <th style="text-align:center">{{ $sumftaof + $sumhtaof + $sumataof + $sumqtaof }}</th>
                    <td style="text-align:center" data-color="{{ $sumalldiscounts }}">{{ number_format($sumftaod + $sumhtaod + $sumataod + $sumqtaod) }}.00 SAR</td>
                    <td style="text-align:center" data-color="{{ $sumalltotalprice }}">{{ number_format($sumftaop + $sumhtaop + $sumataop + $sumqtaop) }}.00 SAR</td>  
                </tr>   
            </tfoot>
        </table>
        <br />

<!-- ALL TOGETHER IN ONE TABLE END -->


<!-- Best Preformance Sales Stats & Averages START -->
        <!--

                ->with('maxordersownername', $maxordersownername)
                ->with('maxordersownerid', $maxordersownerid)
                ->with('maxordersownertotalgrand', $maxordersownertotalgrand)
                ->with('totalofo', $totalofo)
                
                ->with('totalofoi', $totalofoi)
                ->with('totalofoq', $totalofoq)
                ->with('totalofof', $totalofof)
                ->with('totalofod', $totalofod)
                ->with('totalofop', $totalofop)
                ->with('averageoi'. $averageoi)
                ->with('averageoq', $averageoq)
                ->with('averageof', $averageof)
                ->with('averageod', $averageod)
                ->with('averageop', $averageop)


        -->



@markdown

#### 

@endmarkdown


<!--
<div class="row">
  <div class="col-2">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Michael Lance</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Profile</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Messages</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings</a>
    </div>
  </div>
  <div class="col-10">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">...</div>
      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">...</div>
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>
      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">...</div>
    </div>
  </div>
</div>
-->

<!--
+--------------+------------------+------+-----+-----------+----------------+
| Field        | Type             | Null | Key | Default   | Extra          |
+--------------+------------------+------+-----+-----------+----------------+
| id           | int(10) unsigned | NO   | PRI | NULL      | auto_increment |
| branchnumber | int(11)          | NO   |     | NULL      |                |
| branchname   | varchar(255)     | NO   |     | NULL      |                |
| salesgroup   | varchar(255)     | YES  |     | NULL      |                |
| dc           | varchar(255)     | YES  |     | NULL      |                |
| office       | varchar(255)     | YES  |     | NULL      |                |
| logo         | varchar(255)     | NO   |     | sgimg.png |                |
| created_at   | timestamp        | YES  |     | NULL      |                |
| updated_at   | timestamp        | YES  |     | NULL      |                |
+--------------+------------------+------+-----+-----------+----------------+
-->






    <div class="accordion" id="accordion">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFour" aria-controls="collapseFour">
        <h4 style="padding-left:0;padding-top:0"><div class="badge badge-dark"><i class="far fa-chart-bar"></i> Stats By Customer</div></h4>
        </button>
      </h2>





    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
        <table id="myTable">
            <thead>
                <tr>
                    <th style="text-align:center" colspan="20">Michael Customers</th>
                </tr>
    </div>
                <tr>
                    <th style="text-align:center">Customer Logo</th>
                    <th style="text-align:center">Customer Name</th>
                    <th style="text-align:center"><b>Sales Group</b></th>
                    <th style="text-align:center">DC</th>
                    <th style="text-align:center">Office</th>
                    <th style="text-align:center">Q</th>
                    <th style="text-align:center">F</th>
                    <th style="text-align:center">D</th>
                    <th style="text-align:center">TP</th>

                    <th style="text-align:center">POS</th>
                    <th style="text-align:center">I</th>
                    <th style="text-align:center">Q</th>
                    <th style="text-align:center">F</th>
                    <th style="text-align:center">D</th>
                    <th style="text-align:center">TP</th>

                    <th style="text-align:center">POS</th>
                    <th style="text-align:center">I</th>
                    <th style="text-align:center">Q</th>
                    <th style="text-align:center">F</th>
                    <th style="text-align:center">D</th>
                    <th style="text-align:center">TP</th>
                </tr>
            </thead>
            <thead>            
                <tr>
                    <th style="text-align:center" colspan="20">Michael Customers</th>
                </tr>
                <tr>
                <th style="text-align:center">Customer Logo</th>
                <th style="text-align:center">Customer Name</th>
                    <th style="text-align:center"><b>Sales Group</b></th>
                    <th style="text-align:center">DC</th>
                    <th style="text-align:center">Office</th>
                    <th style="text-align:center">Q</th>
                    <th style="text-align:center">F</th>
                    <th style="text-align:center">D</th>
                    <th style="text-align:center">TP</th>
                    <th style="text-align:center">POS</th>
                    <th style="text-align:center">I</th>
                    <th style="text-align:center">Q</th>
                    <th style="text-align:center">F</th>
                    <th style="text-align:center">D</th>
                    <th style="text-align:center">TP</th>
                    <th style="text-align:center">POS</th>
                    <th style="text-align:center">I</th>
                    <th style="text-align:center">Q</th>
                    <th style="text-align:center">F</th>
                    <th style="text-align:center">D</th>
                    <th style="text-align:center">TP</th>
                </tr>
            </thead>


            @foreach($michaelcustomers as $customer)
            <tbody>
                <tr>
                    <td style="text-align:center"><img class="media-object" alt="{{ $customer->logo }}" src="{{ asset('images/assests') }}/{{ $customer->logo }}" style="width:20px; height:20px; float:center; border-radius:50%;"></td>
                    <td style="text-align:left">{{ $customer->branchnumber }} - {{ $customer->branchname }}</td>
                    <th style="text-align:center">{{ $customer->salesgroup }}</th>
                    <th style="text-align:center">{{ $customer->dc }}</th>
                    <th style="text-align:center">{{ $customer->office }}</th>
                    <td style="text-align:center">{{ $summichaeltoq }}</td>
                    <td style="text-align:center">{{ $summichaeltof }}</td>
                    <td style="text-align:center" data-color="{{ $summichaeltod }}">{{ number_format($summichaeltod) }}.00 SAR</td>
                    <td style="text-align:center" data-color="{{ $summichaeltop }}">{{ number_format($summichaeltop) }}.00 SAR</td>
                    <td style="text-align:center">{{ $countmichaelyo }}</td>
                    <td style="text-align:center">{{ $summichaelyoi }}</td>
                    <td style="text-align:center">{{ $summichaelyoq }}</td>
                    <td style="text-align:center">{{ $summichaelyof }}</td>
                    <td style="text-align:center" data-color="{{ $summichaelyod }}">{{ number_format($summichaelyod) }}.00 SAR</td>
                    <td style="text-align:center" data-color="{{ $summichaelyop }}">{{ number_format($summichaelyop) }}.00 SAR</td>
                    <td style="text-align:center">{{ $countmichaelao }}</td>
                    <td style="text-align:center">{{ $summichaelaoi }}</td>
                    <td style="text-align:center">{{ $summichaelaoq }}</td>
                    <td style="text-align:center">{{ $summichaelaof }}</td>
                    <td style="text-align:center" data-color="{{ $summichaelaod }}">{{ number_format($summichaelaod) }}.00 SAR</td>
                    <td style="text-align:center" data-color="{{ $summichaelaop }}">{{ number_format($summichaelaop) }}.00 SAR</td>   
                </tr>
            </tbody>
            @endforeach
        </table>


</div>









<hr />
<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <h4 style="padding-left:8px;padding-top:8px"><div class="badge badge-danger"><i class="fas fa-star"></i> Saleman of the month</div></h4>
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">

      
<div class="row">
    <div class="col-md-12">
        <div  class="card text-white bg-dark" style="max-width: 100%;" >
                
            <div class="card-head">
            <img style="padding-left:20px" width="125px" height="125px" data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="rounded" style="width: 64px; height: 64px;" src="{{ asset('images/uploads/avatars') }}/{{ $maxordersownerphoto }}" data-holder-rendered="true">
                <span style="padding-left:20px;padding-top:18px" class="">{{ $maxordersownername }} # {{ $maxordersownerid }}</span>


                <div class="card-body">
                <div class="col-md-12">
                    <center><span class="alert submitted" style="padding-left:8px;padding-top:8px;font-size:9px" >Total of <strong>{{ $totalofo }}</strong> PO's created</span> | <span class="alert submitted" style="padding-left:8px;padding-top:8px;font-size:9px" >Total of <strong>{{ $totalofoi }}</strong> items ordered</span> | <span class="alert submitted" style="padding-left:8px;padding-top:8px;font-size:9px" >Total of <strong>{{ $totalofoq }}</strong> cases ordered</span>
                    | <span class="alert submitted" style="padding-left:8px;padding-top:8px;font-size:9px" >Total of <strong>{{ $totalofof }}</strong> free cases ordered</span> | <span class="alert submitted" style="padding-left:8px;padding-top:8px;font-size:9px" >Total Discount <strong>{{ number_format($totalofod) }}.00 SAR</strong></span> | <span class="alert submitted" style="padding-left:8px;padding-top:8px;font-size:9px" >Total Grand <strong>{{ number_format($totalofop) }}.00 SAR</strong></span></center>
                    </div>
                    <br />
                    <div class="col-md-12">

                    <center><span class="alert completed" style="padding-left:8px;padding-top:8px;font-size:9px" >Average of <strong>{{ $totalofoi / $totalofo }}</strong> items per PO</span> | <span class="alert completed" style="padding-left:8px;padding-top:8px;font-size:9px" >Average of <strong>{{ $averageoq }}</strong> cases per PO</span>
                    | <span class="alert completed" style="padding-left:8px;padding-top:8px;font-size:9px" >Average of <strong>{{ $averageof }}</strong> free cases per PO</span> | <span class="alert completed" style="padding-left:8px;padding-top:8px;font-size:9px" >Average of <strong>{{ number_format($averageod) }}.00 SAR</strong> total discount per PO</span></center>
                    </div>
                    <br />

                    <div class="col-md-12">

                    <center><span class="alert completed" style="padding-left:8px;padding-top:8px;font-size:9px" >Average of <strong>{{ number_format($averageop) }}.00 SAR</strong> total price per PO</span></center>

                    </div>
  
  
                </div>
            </div>
        </div>
    </div>



    </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <h4 style="padding-left:8px;padding-top:8px"><div class="badge badge-danger"><i class="fas fa-star"></i> Today's best sales by</div></h4>
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">

      <div class="row">
    <div class="col-md-12">
        <div  class="card text-white bg-dark" style="max-width: 100%;" >
                
            <div class="card-head">
            <img width="125px" height="125px" style="padding-left:20px" data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="rounded" style="width: 64px; height: 64px;" src="{{ asset('images/uploads/avatars') }}/{{ $maxtodayordersownerphoto }}" data-holder-rendered="true">
                <span style="padding-left:20px;padding-top:18px" class="">{{ $maxtodayordersownername }} # {{ $maxtodayordersownerid }}</span>


                <div class="card-body">
                <div class="col-md-12">
                    <center><span class="alert submitted" style="padding-left:8px;padding-top:8px;font-size:9px" >Total of <strong>{{ $totalofyo }}</strong> PO's created</span> | <span class="alert submitted" style="padding-left:8px;padding-top:8px;font-size:9px" >Total of <strong>{{ $totalofyoi }}</strong> items ordered</span> | <span class="alert submitted" style="padding-left:8px;padding-top:8px;font-size:9px" >Total of <strong>{{ $totalofyoq }}</strong> cases ordered</span>
                    | <span class="alert submitted" style="padding-left:8px;padding-top:8px;font-size:9px" >Total of <strong>{{ $totalofyof }}</strong> free cases ordered</span> | <span class="alert submitted" style="padding-left:8px;padding-top:8px;font-size:9px" >Total Discount <strong>{{ number_format($totalofyod) }}.00 SAR</strong></span> | <span class="alert submitted" style="padding-left:8px;padding-top:8px;font-size:9px" >Total Grand <strong>{{ number_format($totalofyop) }}.00 SAR</strong></span></center>
                    </div>
                    <br />
                    <div class="col-md-12">

                    <center><span class="alert completed" style="padding-left:8px;padding-top:8px;font-size:9px" >Average of <strong>{{ $totalofyoi / $totalofyo }}</strong> items per PO</span> | <span class="alert completed" style="padding-left:8px;padding-top:8px;font-size:9px" >Average of <strong>{{ $averageoyq }}</strong> cases per PO</span>
                    | <span class="alert completed" style="padding-left:8px;padding-top:8px;font-size:9px" >Average of <strong>{{ $averageoyf }}</strong> free cases per PO</span> | <span class="alert completed" style="padding-left:8px;padding-top:8px;font-size:9px" >Average of <strong>{{ number_format($averageoyd) }}.00 SAR</strong> total discount per PO</span></center>
                    </div>
                    <br />

                    <div class="col-md-12">

                    <center><span class="alert completed" style="padding-left:8px;padding-top:8px;font-size:9px" >Average of <strong>{{ number_format($averageoyp) }}.00 SAR</strong> total price per PO</span></center>

                    </div>
  
  
                </div>
            </div>
        </div>
    </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        <h4 style="padding-left:8px;padding-top:8px"><div class="badge badge-danger"><i class="fas fa-star"></i> Today's best team sales</div></h4>
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">

      <div class="row">
    <div class="col-md-12">
        <div  class="card text-white bg-dark" style="max-width: 100%;" >
                
            <div class="card-head">
            <img width="125px" height="125px" style="padding-left:20px" data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="rounded" style="width: 64px; height: 64px;" src="{{ asset('images/uploads/avatars') }}/{{ $maxtodayteamordersownerphoto }}" data-holder-rendered="true">
                <span style="padding-left:20px;padding-top:18px" class="">{{ $maxtodayteamordersownername }} # {{ $maxtodayteamordersownerid }}</span>


                <div class="card-body">
                <div class="col-md-12">
                    <center><span class="alert submitted" style="padding-left:8px;padding-top:8px;font-size:9px" >Total of <strong>{{ $totalofteamo }}</strong> PO's created</span> | <span class="alert submitted" style="padding-left:8px;padding-top:8px;font-size:9px" >Total of <strong>{{ $totalofteamoi }}</strong> items ordered</span> | <span class="alert submitted" style="padding-left:8px;padding-top:8px;font-size:9px" >Total of <strong>{{ $totalofteamoq }}</strong> cases ordered</span>
                    | <span class="alert submitted" style="padding-left:8px;padding-top:8px;font-size:9px" >Total of <strong>{{ $totalofteamof }}</strong> free cases ordered</span> | <span class="alert submitted" style="padding-left:8px;padding-top:8px;font-size:9px" >Total Discount <strong>{{ number_format($totalofteamod) }}.00 SAR</strong></span> | <span class="alert submitted" style="padding-left:8px;padding-top:8px;font-size:9px" >Total Grand <strong>{{ number_format($totalofteamop) }}.00 SAR</strong></span></center>
                    </div>
                    <br />
                    <div class="col-md-12">

                    <center><span class="alert completed" style="padding-left:8px;padding-top:8px;font-size:9px" >Average of <strong>{{ $totalofteamoi / $totalofteamo }}</strong> items per PO</span> | <span class="alert completed" style="padding-left:8px;padding-top:8px;font-size:9px" >Average of <strong>{{ $averageoteamq }}</strong> cases per PO</span>
                    | <span class="alert completed" style="padding-left:8px;padding-top:8px;font-size:9px" >Average of <strong>{{ $averageoteamf }}</strong> free cases per PO</span> | <span class="alert completed" style="padding-left:8px;padding-top:8px;font-size:9px" >Average of <strong>{{ number_format($averageoteamd) }}.00 SAR</strong> total discount per PO</span></center>
                    </div>
                    <br />

                    <div class="col-md-12">

                    <center><span class="alert completed" style="padding-left:8px;padding-top:8px;font-size:9px" >Average of <strong>{{ number_format($averageoteamp) }}.00 SAR</strong> total price per PO</span></center>

                    </div>
  
  
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
    </div>
  </div>
</div>




<!--

<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img width="125px" height="125px" src="{{ asset('images/uploads/avatars') }}/{{ $maxtodayordersownerphoto }}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img width="125px" height="125px" src="{{ asset('images/uploads/avatars') }}/{{ $maxtodayordersownerphoto }}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img width="125px" height="125px" src="{{ asset('images/uploads/avatars') }}/{{ $maxordersownerphoto }}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
    <div class="carousel-item">
        <img width="125px" height="125px" src="{{ asset('images/uploads/avatars') }}/{{ $maxordersownerphoto }}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
    </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


-->

    <!-- DATA PROCESSING Team --> 

    <!-- Style tables -->


<!--<div class="row">      
    <div class="col-md-6" >
       Ahmed Sulaimani SECTION 
        <div class="my-3 p-3 bg-white rounded box-shadow">
            <div class="row">
                <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="rounded" style="width: 32px; height: 32px;" src="{{ asset('images/uploads/avatars') }}/{{ $ahmedsulaimani->photo }}" data-holder-rendered="true">
                <strong><h6  style="padding-left:8px;padding-top:8px" class="pb-2 mb-0">Processed By {{ $ahmedsulaimani->name }} <span class="badge badge-dark">DATA ENTRY SPECIALIST</span></h6></strong>
            </div>
            <h5 class="border-bottom border-gray pb-2 mb-0"> <strong class="d-block text-gray-dark"></strong></h5>
                <div class="newspaper media text-muted ">
                <?php $totalitems = 0; ?>
                <?php $totalqty = 0; ?>
                <?php $totalfree = 0; ?>
                <?php $totaldiscount = 0; ?>     
                <?php $totalprice = 0; ?>     
                    @if($processedbyahmedsulaimani->count() == 0)
                    @else
                    <div style="font-size:8px;width: -webkit-fill-available;" class="media text-muted pt-3">
                        <table style="padding-left: 0px;" id="myTable">
                            <thead>
                                <tr>
                                    <th>By#</th>
                                    <th>PO#</th>
                                    <th>customer</th>
                                    <th style="text-align:center">U/R</th>
                                    <th style="text-align:center">I</th>
                                    <th style="text-align:center">Q</th>
                                    <th style="color:red;text-align:center">F</th>
                                    <th style="color:green;text-align:center">Discount</th>
                                    <th style="text-align:center">Total Grand</th>

                                </tr>
                            </thead>
                            @foreach($processedbyahmedsulaimani as $completedorder)
                            <?php $totalitems += $completedorder->totalitems; ?>
                            <?php $totalqty += $completedorder->totalqty; ?>
                            <?php $totalfree += $completedorder->totalfree; ?>
                            <?php $totaldiscount += $completedorder->discount; ?>
                            <?php $totalprice += $completedorder->totalprice; ?>
                            <tbody>
                                <tr>
                                    <td style="text-align:center">{{ $completedorder->staffid }}</td>
                                    <td><a style= "float:center" href="/root/orders/{{ $completedorder->staffid }}/{{ $completedorder->slug }}">{{ $completedorder->ponumber }}</a></td>
                                    <td>{{ $completedorder->branchname }}</td>
                                    <td style="text-align:center">{{ $completedorder->urgent }}</td>
                                    <td style="text-align:center">{{ $completedorder->totalitems }}</td>
                                    <td style="text-align:center">{{ $completedorder->totalqty }}</td>
                            @if ($completedorder->totalfree == 0)
                                    <td></td>                            
                            @else
                            <td style="color:red;text-align:center">{{ $completedorder->totalfree }}</td>
                            @endif
                            @if  ($completedorder->discount == 0)
                            <td></td>
                            @else
                            <td style="color:green;text-align:center">{{ number_format($completedorder->discount) }}.00</td>
                            @endif    
                            <td style="text-align:center">{{ number_format($completedorder->totalprice) }}.00 SAR</td>
                        </tr>
                    </tbody> 
                    @endforeach
                    <tfoot>
                        <tr>
                        <th style="text-align:center"><strong>Totals</strong></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <td style="text-align:center"><strong>{{ $totalitems }}</strong></td>
                        <td style="text-align:center"><strong>{{ $totalqty }}</strong></td>
                        <td style="color:red;text-align:center"><strong>{{ $totalfree }}</strong></td>
                        <td style="color:green;text-align:center"><strong>{{ number_format($totaldiscount) }}.00 SAR</strong></td>
                        <td style="text-align:center"><strong>{{ number_format($totalprice) }}</strong>.00 SAR</td>
                        </tr>
                    </tfoot> 
                </table>
            </div>

            @endif

            </div>
        </div> 
            <p class="badge badge-dark"><span class="badge completed">Today's Total Completed Orders</span> <span class="badge badge-danger">{{ $todaysahmedsulaimaniprocessedorders->count() }}</span>
            <span class="badge badge-dark">Today's Total Items $old</span> <span class="badge badge-danger">{{ $todaysahmedsulaimaniprocessedorders->sum('totalitems') }}</span>
            <span class="badge badge-dark">Today's Total Items Qtys</span> <span class="badge badge-danger">{{ $todaysahmedsulaimaniprocessedorders->sum('totalqty') }}</span>
        </p><p class="badge badge-dark"><span class="badge badge-dark">Today's Total Free Items</span> <span class="badge badge-danger">{{ $todaysahmedsulaimaniprocessedorders->sum('totalfree') }}</span>
        <span class="badge badge-dark">Today's Total Items %Discounts%</span> <span class="badge badge-danger">{{ number_format($todaysahmedsulaimaniprocessedorders->sum('discount')) }}.00 SAR</span>
        <span class="badge badge-dark">Today's Total Grand</span> <span class="badge badge-danger">{{ number_format($todaysahmedsulaimaniprocessedorders->sum('totalprice')) }}.00 SAR</span>  </p>
        <p style="float:right" class="badge badge-dark"> <span  style="float:right" class="badge badge-danger">{{ $sumoasapo }}</span> <span  style="float:right" class="badge completed">Total Of All Completed Orders</span>
            <span  style="float:right" class="badge badge-danger">{{ $sumoasapoi }}</span> <span  style="float:right" class="badge badge-dark">Total Of All Items $old</span>
            <span  style="float:right" class="badge badge-danger">{{ $sumoasapoq }}</span> <span  style="float:right" class="badge badge-dark">Total Of All Cases Qtys</span>
        </p>
        <p  style="float:right" class="badge badge-dark"><span  style="float:right" class="badge badge-danger">{{ $sumoasapof }}</span> <span  style="float:right" class="badge badge-dark">Total Of All Free Cases</span>
        <span  style="float:right" class="badge badge-danger">{{ number_format($sumoasapod) }}.00 SAR</span> <span  style="float:right" class="badge badge-dark">Total Of All Cases %Discounts%</span>
        <span  style="float:right" class="badge badge-danger">{{ number_format($sumoasapop) }}.00 SAR</span>  <span  style="float:right" class="badge badge-dark">All Orders Total Grand</span>  </p>
        

</div>
        <div class="col-md-6" >
       Mohammed Makki SECTION 
        <div class="my-3 p-3 bg-white rounded box-shadow">
            <div class="row">
                <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="rounded" style="width: 32px; height: 32px;" src="{{ asset('images/uploads/avatars') }}/{{ $makki->photo }}" data-holder-rendered="true">
                <strong><h6  style="padding-left:8px;padding-top:8px" class="pb-2 mb-0">Processed By {{ $makki->name }} <span class="badge badge-dark">Sales Coordinator</span></h6></strong>
                </div>
            <h5 class="border-bottom border-gray pb-2 mb-0"> <strong class="d-block text-gray-dark"></strong></h5>
                <div class="newspaper media text-muted ">
                <?php $totalitems = 0; ?>
                <?php $totalqty = 0; ?>
                <?php $totalfree = 0; ?>
                <?php $totaldiscount = 0; ?>     
                <?php $totalprice = 0; ?>     
                    @if($processedbymakki->count() == 0)
                    @else
                    <div style="font-size:8px;width: -webkit-fill-available;" class="media text-muted pt-3">
                        <table style="padding-left: 0px;" id="myTable">
                            <thead>
                                <tr>
                                    <th>By#</th>
                                    <th>PO#</th>
                                    <th>customer</th>
                                    <th style="text-align:center">U/R</th>
                                    <th style="text-align:center">I</th>
                                    <th style="text-align:center">Q</th>
                                    <th style="color:red;text-align:center">F</th>
                                    <th style="color:green;text-align:center">Discount</th>
                                    <th style="text-align:center">Total Grand</th>

                                </tr>
                            </thead>
                            @foreach($processedbymakki as $completedorder)
                            <?php $totalitems += $completedorder->totalitems; ?>
                            <?php $totalqty += $completedorder->totalqty; ?>
                            <?php $totalfree += $completedorder->totalfree; ?>
                            <?php $totaldiscount += $completedorder->discount; ?>
                            <?php $totalprice += $completedorder->totalprice; ?>
                            <tbody>
                                <tr>
                                    <td style="text-align:center">{{ $completedorder->staffid }}</td>
                                    <td><a style= "float:center" href="/root/orders/{{ $completedorder->staffid }}/{{ $completedorder->slug }}">{{ $completedorder->ponumber }}</a></td>
                                    <td>{{ $completedorder->branchname }}</td>
                                    <td style="text-align:center">{{ $completedorder->urgent }}</td>
                                    <td style="text-align:center">{{ $completedorder->totalitems }}</td>
                                    <td style="text-align:center">{{ $completedorder->totalqty }}</td>
                            @if ($completedorder->totalfree == 0)
                                    <td></td>                            
                            @else
                            <td style="color:red;text-align:center">{{ $completedorder->totalfree }}</td>
                            @endif
                            @if  ($completedorder->discount == 0)
                            <td></td>
                            @else
                            <td style="color:green;text-align:center">{{ number_format($completedorder->discount) }}.00</td>
                            @endif    
                            <td style="text-align:center">{{ number_format($completedorder->totalprice) }}.00 SAR</td>
                        </tr>
                    </tbody> 
                    @endforeach
                    <tfoot>
                        <tr>
                        <th style="text-align:center"><strong>Totals</strong></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <td style="text-align:center"><strong>{{ $totalitems }}</strong></td>
                        <td style="text-align:center"><strong>{{ $totalqty }}</strong></td>
                        <td style="color:red;text-align:center"><strong>{{ $totalfree }}</strong></td>
                        <td style="color:green;text-align:center"><strong>{{ number_format($totaldiscount) }}.00 SAR</strong></td>
                        <td style="text-align:center"><strong>{{ number_format($totalprice) }}</strong>.00 SAR</td>
                        </tr>
                    </tfoot> 
                </table>
            </div>

            @endif
            

            </div>
        </div>   
            
            <p style="float:right" class="badge badge-dark"> <span  style="float:right" class="badge badge-danger">{{ $todaysmakkiprocessedorders->count() }}</span> <span  style="float:right" class="badge completed">Today's Total Completed Orders</span>
            <span  style="float:right" class="badge badge-danger">{{ $todaysmakkiprocessedorders->sum('totalitems') }}</span> <span  style="float:right" class="badge badge-dark">Today's Total Items $old</span>
            <span  style="float:right" class="badge badge-danger">{{ $todaysmakkiprocessedorders->sum('totalqty') }}</span> <span  style="float:right" class="badge badge-dark">Today's Total Items Qtys</span>
        </p> <p  style="float:right" class="badge badge-dark"><span  style="float:right" class="badge badge-danger">{{ $todaysmakkiprocessedorders->sum('totalfree') }}</span> <span  style="float:right" class="badge badge-dark">Today's Total Free Items</span>
        <span  style="float:right" class="badge badge-danger">{{ number_format($todaysmakkiprocessedorders->sum('discount')) }}.00 SAR</span> <span  style="float:right" class="badge badge-dark">Today's Total Items %Discounts%</span>
        <span  style="float:right" class="badge badge-danger">{{ number_format($todaysmakkiprocessedorders->sum('totalprice')) }}.00 SAR</span>  <span  style="float:right" class="badge badge-dark">Today's Total Grand</span>  </p>
        <p class="badge badge-dark"><span class="badge completed">Total Of All Completed Orders</span> <span class="badge badge-danger">{{ $sumomapo }}</span>
            <span class="badge badge-dark">Total Of All Items $old</span> <span class="badge badge-danger">{{ $sumomapoi }}</span>
            <span class="badge badge-dark">Total Of All Cases Qtys</span> <span class="badge badge-danger">{{ $sumomapoq }}</span>
        </p><p class="badge badge-dark"><span class="badge badge-dark">Total Of All Free Cases</span> <span class="badge badge-danger">{{ $sumomapof }}</span>
        <span class="badge badge-dark">Total Of All Cases %Discounts%</span> <span class="badge badge-danger">{{ number_format($sumomapod) }}.00 SAR</span>
        <span class="badge badge-dark">All Orders Total Grand</span> <span class="badge badge-danger">{{ number_format($sumomapop) }}.00 SAR</span>  </p>
    
    </div>
        </div>



-->












<div class="row">
<div class="col-md-12" >


<br />
<hr />

@markdown

### Search Terms:

- By Staff Name or ID

        +---------------+---------+
        | staffname     | staffid |
        +---------------+---------+
        | Micheal Lanes |    1275 |
        +---------------+---------+

- 2019-04-20 by date search format or time 11:22:07

        +---------------------+
        | created_at          |
        +---------------------+
        | 2019-04-20 11:22:07 |
        +---------------------+

- Processed by:  5303 | 

        +-------------+
        | processedby |
        +-------------+
        | 5303        |
        +-------------+

- Any part of a slug: randomly generated 8 digits number starts with 00008 or 00007 combined with PO number seperated by hyphin - 

        +----------------------+
        | slug                 |
        +----------------------+
        | 00008439484-11639587 |
        +----------------------+


- By Customer name or number

        +------------------------------------------+
        | branchname                               |
        +------------------------------------------+
        | 302863-Danube Co. Limited - 125 Panorama |
        +------------------------------------------+

- By Order status

        +-------------+
        | status      |
        +-------------+
        | Completed   |
        +-------------+
        | Submitted   |
        +-------------+
        | Reviewing   |
        +-------------+
        | Editing     |
        +-------------+
        | JustCreated |
        +-------------+


@endmarkdown



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
