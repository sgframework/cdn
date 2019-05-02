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
    <div class="card">
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
$page = 'http://ipool.remotewebaccess.com/root/users/orders/all';
$sec = "90000";
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

#### Spit Numbers HERE

###### Today's Totals By Sales Group 

@endmarkdown










<div class="row">
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
                                    <th style="color:white;text-align:center">POS</th>
                                    <td style="color:white;text-align:center">{{ $countftto }}</td>
                                    <td style="color:white;text-align:center">{{ $countftyo }}</td>
                                    <td style="color:white;text-align:center">{{ $countftbyo }}</td>
                                    <td style="color:white;text-align:center">{{ $countftbtdo }}</td>
                                    <td style="color:white;text-align:center">{{ $countftao }}</td>
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
                                    <th style="color:white;text-align:center">POS</th>
                                    <td style="color:white;text-align:center">{{ $countftto }}</td>
                                    <td style="color:white;text-align:center">{{ $countftyo }}</td>
                                    <td style="color:white;text-align:center">{{ $countftbyo }}</td>
                                    <td style="color:white;text-align:center">{{ $countftbtdo }}</td>
                                    <td style="color:white;text-align:center">{{ $countftao }}</td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>            
    </div>


</div>







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
            <th>Yesterday</th>
            <th>Tow Days Ago</th>
            <th>Three Days Ago</th>
            <th>All</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th style="text-align:center">POS</th>
            <td style="text-align:center">{{ $countftto }}</td>
            <td style="text-align:center">{{ $countftyo }}</td>
            <td style="text-align:center">{{ $countftbyo }}</td>
            <td style="text-align:center">{{ $countftbtdo }}</td>
            <td style="text-align:center">{{ $countftao }}</td>
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
            <a style="padding-left:0;padding-top:0;padding-bottom:0;padding-right:0;color:black;width: 8rem;border-radius:50%" href="{{ url('/export-orders-orderitems-csv') }}/{{ $michael->idnumber }}/submitted/to/completed" class=""><h3 class="badge badge-info">{{ $countmichaelorders->count() }}</h3></a>
         </p>
          </div>
          @if($countmichaelorders->count() == 0)
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
                @foreach($countmichaelorders as $countmichaelorder)
                <tbody>
                    <tr>
                    <td><a style= "float:center" href="/root/orders/{{ $countmichaelorder->staffid }}/{{ $countmichaelorder->slug }}">{{ $countmichaelorder->ponumber }}</a></td>
                    <td>{{ $countmichaelorder->branchname }}</td>
                    @if ($countmichaelorder->totalfree == 0)
                    <td></td>

                    @else
                    <td style="color:red">{{ $countmichaelorder->totalfree }}</td>
                    @endif
                    @if  ($countmichaelorder->discount == 0)
                    <td></td>

                    @else
                    <td style="color:green">{{ $countmichaelorder->discount }}</td>
                    @endif    
                </tr>
            </tbody> 
                @endforeach
        </table>
    </div>
    <br />
            @endif
        <!-- MOHAMMED SAYED SECTION -->
        <div class="media text-muted pt-3">
        <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 32px; height: 32px;" src="{{ asset('images/uploads/avatars') }}/{{ $mohammedsayed->photo }}" data-holder-rendered="true">
          <p class="media-body pb-3 mb-0 small lh-125">
            <strong class="d-block text-gray-dark"><span>@</span>{{ $mohammedsayed->name }}</strong><span class="badge badge-primary">Key Account Saleman</span>
            <a style="padding-left:0;padding-top:0;padding-bottom:0;padding-right:0;color:black;width: 8rem;border-radius:50%" href="{{ url('/export-orders-orderitems-csv') }}/{{ $mohammedsayed->idnumber }}/submitted/to/completed" class=""><h3 class="badge badge-info">{{ $countmohammedsayedorders->count() }}</h3></a>
         </p>
          </div>
          @if($countmohammedsayedorders->count() == 0)
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
                @foreach($countmohammedsayedorders as $countmohammedsayedorder)
                <tbody>
                    <tr>
                    <td><a style= "float:center" href="/root/orders/{{ $countmohammedsayedorder->staffid }}/{{ $countmohammedsayedorder->slug }}">{{ $countmohammedsayedorder->ponumber }}</a></td>
                    <td>{{ $countmohammedsayedorder->branchname }}</td>
                    @if ($countmohammedsayedorder->totalfree == 0)
                    <td></td>

                    @else
                    <td style="color:red">{{ $countmohammedsayedorder->totalfree }}</td>
                    @endif
                    @if  ($countmohammedsayedorder->discount == 0)
                    <td></td>

                    @else
                    <td style="color:green">{{ $countmohammedsayedorder->discount }}</td>
                    @endif    
                </tr>
            </tbody> 
                @endforeach
                </table>
    </div>
    <br />
            @endif

        <!-- Fahad Dahasy SECTION -->
        <div class="media text-muted pt-3">
        <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 32px; height: 32px;" src="{{ asset('images/uploads/avatars') }}/{{ $fahaddahasy->photo }}" data-holder-rendered="true">
          <p class="media-body pb-3 mb-0 small lh-125">
            <strong class="d-block text-gray-dark"><span>@</span>{{ $fahaddahasy->name }}</strong><span class="badge badge-primary">Key Account Saleman</span>
            <a style="padding-left:0;padding-top:0;padding-bottom:0;padding-right:0;color:black;width: 8rem;border-radius:50%" href="{{ url('/export-orders-orderitems-csv') }}/{{ $fahaddahasy->idnumber }}/submitted/to/completed" class=""><h3 class="badge badge-info">{{ $countfahaddahasyorders->count() }}</h3></a>
         </p>
          </div>
          @if($countfahaddahasyorders->count() == 0)
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
                @foreach($countfahaddahasyorders as $countfahaddahasyorder)
                <tbody>
                    <tr>
                    <td><a style= "float:center" href="/root/orders/{{ $countfahaddahasyorder->staffid }}/{{ $countfahaddahasyorder->slug }}">{{ $countfahaddahasyorder->ponumber }}</a></td>
                    <td>{{ $countfahaddahasyorder->branchname }}</td>
                    @if ($countfahaddahasyorder->totalfree == 0)
                    <td></td>

                    @else
                    <td style="color:red">{{ $countfahaddahasyorder->totalfree }}</td>
                    @endif
                    @if  ($countfahaddahasyorder->discount == 0)
                    <td></td>

                    @else
                    <td style="color:green">{{ $countfahaddahasyorder->discount }}</td>
                    @endif    
                </tr>
            </tbody> 
                @endforeach
        </table>
        </div>
        <br />
        @endif
        <!-- Abdullah Naseer SECTION -->
        <div class="media text-muted pt-3">
        <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 32px; height: 32px;" src="{{ asset('images/uploads/avatars') }}/{{ $abdullahnaser->photo }}" data-holder-rendered="true">
          <p class="media-body pb-3 mb-0 small lh-125">
            <strong class="d-block text-gray-dark"><span>@</span>{{ $abdullahnaser->name }}</strong><span class="badge badge-primary">Key Account Saleman</span>
            <a style="padding-left:0;padding-top:0;padding-bottom:0;padding-right:0;color:black;width: 8rem;border-radius:50%" href="{{ url('/export-orders-orderitems-csv') }}/{{ $abdullahnaser->idnumber }}/submitted/to/completed" class=""><h3 class="badge badge-info">{{ $countabdullahnaserorders->count() }}</h3></a>
         </p>
          </div>
          @if($countabdullahnaserorders->count() == 0)
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
                @foreach($countabdullahnaserorders as $countabdullahnaserorder)
                <tbody>
                    <tr>
                    <td><a style= "float:center" href="/root/orders/{{ $countabdullahnaserorder->staffid }}/{{ $countabdullahnaserorder->slug }}">{{ $countabdullahnaserorder->ponumber }}</a></td>
                    <td>{{ $countabdullahnaserorder->branchname }}</td>
                    @if ($countabdullahnaserorder->totalfree == 0)
                    <td></td>

                    @else
                    <td style="color:red">{{ $countabdullahnaserorder->totalfree }}</td>
                    @endif
                    @if  ($countabdullahnaserorder->discount == 0)
                    <td></td>

                    @else
                    <td style="color:green">{{ $countabdullahnaserorder->discount }}</td>
                    @endif    
                </tr>
            </tbody> 
                @endforeach
        </table>
        </div>
        <br />
        @endif
        <!-- Ahmed Medhat SECTION -->
        <div class="media text-muted pt-3">
        <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 32px; height: 32px;" src="{{ asset('images/uploads/avatars') }}/{{ $ahmedmedhat->photo }}" data-holder-rendered="true">
          <p class="media-body pb-3 mb-0 small lh-125">
            <strong class="d-block text-gray-dark"><span>@</span>{{ $ahmedmedhat->name }}</strong><span class="badge badge-primary">Key Account Saleman</span>
            <a style="padding-left:0;padding-top:0;padding-bottom:0;padding-right:0;color:black;width: 8rem;border-radius:50%" href="{{ url('/export-orders-orderitems-csv') }}/{{ $ahmedmedhat->idnumber }}/submitted/to/completed" class=""><h3 class="badge badge-info">{{ $countahmedmedhatorders->count() }}</h3></a>
         </p>
          </div>
          @if($countahmedmedhatorders->count() == 0)
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
                @foreach($countahmedmedhatorders as $countahmedmedhatorder)
                <tbody>
                    <tr>
                    <td><a style= "float:center" href="/root/orders/{{ $countahmedmedhatorder->staffid }}/{{ $countahmedmedhatorder->slug }}">{{ $countahmedmedhatorder->ponumber }}</a></td>
                    <td>{{ $countahmedmedhatorder->branchname }}</td>
                    @if ($countahmedmedhatorder->totalfree == 0)
                    <td></td>

                    @else
                    <td style="color:red">{{ $countahmedmedhatorder->totalfree }}</td>
                    @endif
                    @if  ($countahmedmedhatorder->discount == 0)
                    <td></td>

                    @else
                    <td style="color:green">{{ $countahmedmedhatorder->discount }}</td>
                    @endif    
                </tr>
            </tbody> 
                @endforeach
        </table>
        </div>
        <br />
        @endif
      
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
            <th>Yesterday</th>
            <th>Tow Days Ago</th>
            <th>Three Days Ago</th>
            <th>All</th>
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
            <a style="padding-left:0;padding-top:0;padding-bottom:0;padding-right:0;color:black;width: 8rem;border-radius:50%" href="{{ url('/export-orders-orderitems-csv') }}/{{ $noufal->idnumber }}/submitted/to/completed" class=""><h3 class="badge badge-info">{{ $countnoufalorders->count() }}</h3></a>
         </p>
          </div>
          @if($countnoufalorders->count() == 0)
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
                @foreach($countnoufalorders as $countnoufalorder)
                <tbody>
                    <tr>
                        <td><a style= "float:center" href="/root/orders/{{ $countnoufalorder->staffid }}/{{ $countnoufalorder->slug }}">{{ $countnoufalorder->ponumber }}</a></td>
                        <td>{{ $countnoufalorder->branchname }}</td>
                        @if ($countnoufalorder->totalfree == 0)
                        <td></td>
                        @else
                        <td style="color:red">{{ $countnoufalorder->totalfree }}</td>
                        @endif
                        @if  ($countnoufalorder->discount == 0)
                        <td></td>
                        @else
                        <td style="color:green">{{ $countnoufalorder->discount }}</td>
                        @endif    
                    </tr>
                </tbody> 
                @endforeach
            </table>
        </div>
        <br />
        @endif
        
        <!-- Ruben SECTION -->
        <div class="media text-muted pt-3">
        <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 32px; height: 32px;" src="{{ asset('images/uploads/avatars') }}/{{ $ruben->photo }}" data-holder-rendered="true">
          <p class="media-body pb-3 mb-0 small lh-125">
            <strong class="d-block text-gray-dark"><span>@</span>{{ $ruben->name }}</strong><span class="badge badge-primary">Key Account Saleman</span>
            <a style="padding-left:0;padding-top:0;padding-bottom:0;padding-right:0;color:black;width: 8rem;border-radius:50%" href="{{ url('/export-orders-orderitems-csv') }}/{{ $ruben->idnumber }}/submitted/to/completed" class=""><h3 class="badge badge-info">{{ $countrubenorders->count() }}</h3></a>
         </p>
          </div>
          @if($countrubenorders->count() == 0)
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
                @foreach($countrubenorders as $countrubenorder)
                <tbody>
                    <tr>
                        <td><a style= "float:center" href="/root/orders/{{ $countrubenorder->staffid }}/{{ $countrubenorder->slug }}">{{ $countrubenorder->ponumber }}</a></td>
                        <td>{{ $countrubenorder->branchname }}</td>
                        @if ($countrubenorder->totalfree == 0)
                        <td></td>
                        @else
                        <td style="color:red">{{ $countrubenorder->totalfree }}</td>
                        @endif
                        @if  ($countrubenorder->discount == 0)
                        <td></td>
                        @else
                        <td style="color:green">{{ $countrubenorder->discount }}</td>
                        @endif    
                    </tr>
                </tbody> 
                @endforeach
            </table>
        </div>
        <br />
        @endif
        <!-- Samsudin SECTION -->
        <div class="media text-muted pt-3">
        <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 32px; height: 32px;" src="{{ asset('images/uploads/avatars') }}/{{ $samsudin->photo }}" data-holder-rendered="true">
          <p class="media-body pb-3 mb-0 small lh-125">
            <strong class="d-block text-gray-dark"><span>@</span>{{ $samsudin->name }}</strong><span class="badge badge-primary">Key Account Saleman</span>
            <a style="padding-left:0;padding-top:0;padding-bottom:0;padding-right:0;color:black;width: 8rem;border-radius:50%" href="{{ url('/export-orders-orderitems-csv') }}/{{ $samsudin->idnumber }}/submitted/to/completed" class=""><h3 class="badge badge-info">{{ $countsamsudinorders->count() }}</h3></a>
         </p>
          </div>
          @if($countsamsudinorders->count() == 0)
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
                @foreach($countsamsudinorders as $countsamsudinorder)
                <tbody>
                    <tr>
                        <td><a style= "float:center" href="/root/orders/{{ $countsamsudinorder->staffid }}/{{ $countsamsudinorder->slug }}">{{ $countsamsudinorder->ponumber }}</a></td>
                        <td>{{ $countsamsudinorder->branchname }}</td>
                        @if ($countsamsudinorder->totalfree == 0)
                        <td></td>
                        @else
                        <td style="color:red">{{ $countsamsudinorder->totalfree }}</td>
                        @endif
                        @if  ($countsamsudinorder->discount == 0)
                        <td></td>
                        @else
                        <td style="color:green">{{ $countsamsudinorder->discount }}</td>
                        @endif    
                    </tr>
                </tbody> 
                @endforeach
            </table>
        </div>
        <br />
        @endif
         <!-- Osama SECTION -->
         <div class="media text-muted pt-3">
        <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 32px; height: 32px;" src="{{ asset('images/uploads/avatars') }}/{{ $osama->photo }}" data-holder-rendered="true">
          <p class="media-body pb-3 mb-0 small lh-125">
            <strong class="d-block text-gray-dark"><span>@</span>{{ $osama->name }}</strong><span class="badge badge-primary">Key Account Saleman</span>
            <a style="padding-left:0;padding-top:0;padding-bottom:0;padding-right:0;color:black;width: 8rem;border-radius:50%" href="{{ url('/export-orders-orderitems-csv') }}/{{ $osama->idnumber }}/submitted/to/completed" class=""><h3 class="badge badge-info">{{ $countosamaorders->count() }}</h3></a>
         </p>
          </div>
          @if($countosamaorders->count() == 0)
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
                @foreach($countosamaorders as $countosamaorder)
                <tbody>
                    <tr>
                        <td><a style= "float:center" href="/root/orders/{{ $countosamaorder->staffid }}/{{ $countosamaorder->slug }}">{{ $countosamaorder->ponumber }}</a></td>
                        <td>{{ $countosamaorder->branchname }}</td>
                        @if ($countosamaorder->totalfree == 0)
                        <td></td>
                        @else
                        <td style="color:red">{{ $countosamaorder->totalfree }}</td>
                        @endif
                        @if  ($countosamaorder->discount == 0)
                        <td></td>
                        @else
                        <td style="color:green">{{ $countosamaorder->discount }}</td>
                        @endif    
                    </tr>
                </tbody> 
                @endforeach
            </table>
        </div>
        <br />
        @endif





        
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
            <th>Yesterday</th>
            <th>Tow Days Ago</th>
            <th>Three Days Ago</th>
            <th>All</th>
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
            <a style="padding-left:0;padding-top:0;padding-bottom:0;padding-right:0;color:black;width: 8rem;border-radius:50%" href="{{ url('/export-orders-orderitems-csv') }}/{{ $ahmedshawqy->idnumber }}/submitted/to/completed" class=""><h3 class="badge badge-info">{{ $countahmedshawqyorders->count() }}</h3></a>
         </p>
          </div>
          @if($countahmedshawqyorders->count() == 0)
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
                @foreach($countahmedshawqyorders as $countahmedshawqyorder)
                <tbody>
                    <tr>
                        <td><a style= "float:center" href="/root/orders/{{ $countahmedshawqyorder->staffid }}/{{ $countahmedshawqyorder->slug }}">{{ $countahmedshawqyorder->ponumber }}</a></td>
                        <td>{{ $countahmedshawqyorder->branchname }}</td>
                        @if ($countahmedshawqyorder->totalfree == 0)
                        <td></td>
                        @else
                        <td style="color:red">{{ $countahmedshawqyorder->totalfree }}</td>
                        @endif
                        @if  ($countahmedshawqyorder->discount == 0)
                        <td></td>
                        @else
                        <td style="color:green">{{ $countahmedshawqyorder->discount }}</td>
                        @endif    
                    </tr>
                </tbody> 
                @endforeach
            </table>
        </div>
        <br />
        @endif
        
        <!-- Hassan Fathi SECTION -->
        <div class="media text-muted pt-3">
        <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 32px; height: 32px;" src="{{ asset('images/uploads/avatars') }}/{{ $hassanfathi->photo }}" data-holder-rendered="true">
          <p class="media-body pb-3 mb-0 small lh-125">
            <strong class="d-block text-gray-dark"><span>@</span>{{ $hassanfathi->name }}</strong><span class="badge badge-primary">Key Account Saleman</span>
            <a style="padding-left:0;padding-top:0;padding-bottom:0;padding-right:0;color:black;width: 8rem;border-radius:50%" href="{{ url('/export-orders-orderitems-csv') }}/{{ $hassanfathi->idnumber }}/submitted/to/completed" class=""><h3 class="badge badge-info">{{ $counthassanfathiorders->count() }}</h3></a>
         </p>
          </div>
          @if($counthassanfathiorders->count() == 0)
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
                @foreach($counthassanfathiorders as $counthassanfathiorder)
                <tbody>
                    <tr>
                        <td><a style= "float:center" href="/root/orders/{{ $counthassanfathiorder->staffid }}/{{ $counthassanfathiorder->slug }}">{{ $counthassanfathiorder->ponumber }}</a></td>
                        <td>{{ $counthassanfathiorder->branchname }}</td>
                        @if ($counthassanfathiorder->totalfree == 0)
                        <td></td>
                        @else
                        <td style="color:red">{{ $counthassanfathiorder->totalfree }}</td>
                        @endif
                        @if  ($counthassanfathiorder->discount == 0)
                        <td></td>
                        @else
                        <td style="color:green">{{ $counthassanfathiorder->discount }}</td>
                        @endif    
                    </tr>
                </tbody> 
                @endforeach
            </table>
        </div>
        <br />
        @endif
        
        <!-- Hashem SECTION -->
        <div class="media text-muted pt-3">
        <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 32px; height: 32px;" src="{{ asset('images/uploads/avatars') }}/{{ $hashem->photo }}" data-holder-rendered="true">
          <p class="media-body pb-3 mb-0 small lh-125">
            <strong class="d-block text-gray-dark"><span>@</span>{{ $hashem->name }}</strong><span class="badge badge-primary">Key Account Saleman</span>
            <a style="padding-left:0;padding-top:0;padding-bottom:0;padding-right:0;color:black;width: 8rem;border-radius:50%" href="{{ url('/export-orders-orderitems-csv') }}/{{ $hashem->idnumber }}/submitted/to/completed" class=""><h3 class="badge badge-info">{{ $counthashemorders->count() }}</h3></a>
         </p>
          </div>
          @if($counthashemorders->count() == 0)
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
                @foreach($counthashemorders as $counthashemorder)
                <tbody>
                    <tr>
                        <td><a style= "float:center" href="/root/orders/{{ $counthashemorder->staffid }}/{{ $counthashemorder->slug }}">{{ $counthashemorder->ponumber }}</a></td>
                        <td>{{ $counthashemorder->branchname }}</td>
                        @if ($counthashemorder->totalfree == 0)
                        <td></td>
                        @else
                        <td style="color:red">{{ $counthashemorder->totalfree }}</td>
                        @endif
                        @if  ($counthashemorder->discount == 0)
                        <td></td>
                        @else
                        <td style="color:green">{{ $counthashemorder->discount }}</td>
                        @endif    
                    </tr>
                </tbody> 
                @endforeach
            </table>
        </div>
        <br />
        @endif
        <!-- M. Hassan SECTION -->
        <div class="media text-muted pt-3">
        <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 32px; height: 32px;" src="{{ asset('images/uploads/avatars') }}/{{ $medhathassan->photo }}" data-holder-rendered="true">
          <p class="media-body pb-3 mb-0 small lh-125">
            <strong class="d-block text-gray-dark"><span>@</span>{{ $medhathassan->name }}</strong><span class="badge badge-primary">Key Account Saleman</span>
            <a style="padding-left:0;padding-top:0;padding-bottom:0;padding-right:0;color:black;width: 8rem;border-radius:50%" href="{{ url('/export-orders-orderitems-csv') }}/{{ $medhathassan->idnumber }}/submitted/to/completed" class=""><h3 class="badge badge-info">{{ $countmedhathassanorders->count() }}</h3></a>
         </p>
          </div>
          @if($countmedhathassanorders->count() == 0)
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
                @foreach($countmedhathassanorders as $countmedhathassanorder)
                <tbody>
                    <tr>
                        <td><a style= "float:center" href="/root/orders/{{ $countmedhathassanorder->staffid }}/{{ $countmedhathassanorder->slug }}">{{ $countmedhathassanorder->ponumber }}</a></td>
                        <td>{{ $countmedhathassanorder->branchname }}</td>
                        @if ($countmedhathassanorder->totalfree == 0)
                        <td></td>
                        @else
                        <td style="color:red">{{ $countmedhathassanorder->totalfree }}</td>
                        @endif
                        @if  ($countmedhathassanorder->discount == 0)
                        <td></td>
                        @else
                        <td style="color:green">{{ $countmedhathassanorder->discount }}</td>
                        @endif    
                    </tr>
                </tbody> 
                @endforeach
            </table>
        </div>
        <br />
        @endif
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
            <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 32px; height: 32px;" src="{{ asset('images/uploads/avatars') }}/{{ $wail->photo }}" data-holder-rendered="true">
            <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <strong><h5 class="border-bottom border-gray pb-2 mb-0"> <strong class="d-block text-gray-dark">{{ $wail->name }} <span class="badge badge-danger">SUPERVISOR</span></strong></h5></strong>
            </p>
            </div>
            <!-- Suneer SECTION - msn@sunbulahgroup.com  / 466 - 554946096 -->
            <div class="media text-muted pt-3">
            <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 32px; height: 32px;" src="{{ asset('images/uploads/avatars') }}/{{ $suneer->photo }}" data-holder-rendered="true">
            <p class="media-body pb-3 mb-0 small lh-125">
                <strong class="d-block text-gray-dark"><span>@</span>{{ $suneer->name }}</strong><span class="badge badge-primary">Key Account Saleman</span>
                <a style="padding-left:0;padding-top:0;padding-bottom:0;padding-right:0;color:black;width: 8rem;border-radius:50%" href="{{ url('/export-orders-orderitems-csv') }}/{{ $suneer->idnumber }}/submitted/to/completed" class=""><h3 class="badge badge-info">{{ $countsuneerorders->count() }}</h3></a>
            </p>
            </div>
            @if($countsuneerorders->count() == 0)
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
                        @foreach($countsuneerorders as $countsuneerorder)
                        <tbody>
                            <tr>
                            <td><a style= "float:center" href="/root/orders/{{ $countsuneerorder->staffid }}/{{ $countsuneerorder->slug }}">{{ $countsuneerorder->ponumber }}</a></td>
                            <td>{{ $countsuneerorder->branchname }}</td>
                            @if ($countsuneerorder->totalfree == 0)
                            <td></td>

                            @else
                            <td style="color:red">{{ $countsuneerorder->totalfree }}</td>
                            @endif
                            @if  ($countsuneerorder->discount == 0)
                            <td></td>

                            @else
                            <td style="color:green">{{ $countsuneerorder->discount }}</td>
                            @endif    
                        </tr>
                    </tbody> 
                        @endforeach
                </table>
            </div>
            <br />
                @endif

            <!-- Fahad Hussein SECTION -> fahadhussein-->
            <div class="media text-muted pt-3">
            <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 32px; height: 32px;" src="{{ asset('images/uploads/avatars') }}/{{ $fahadhussein->photo }}" data-holder-rendered="true">
            <p class="media-body pb-3 mb-0 small lh-125">
                <strong class="d-block text-gray-dark"><span>@</span>{{ $fahadhussein->name }}</strong><span class="badge badge-primary">Key Account Saleman</span>
                <a style="padding-left:0;padding-top:0;padding-bottom:0;padding-right:0;color:black;width: 8rem;border-radius:50%" href="{{ url('/export-orders-orderitems-csv') }}/{{ $fahadhussein->idnumber }}/submitted/to/completed" class=""><h3 class="badge badge-info">{{ $countfahadhusseinorders->count() }}</h3></a>
            </p>
            </div>
            @if($countfahadhusseinorders->count() == 0)
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
                        @foreach($countfahadhusseinorders as $countfahadhusseinorder)
                        <tbody>
                            <tr>
                            <td><a style= "float:center" href="/root/orders/{{ $countfahadhusseinorder->staffid }}/{{ $countfahadhusseinorder->slug }}">{{ $countfahadhusseinorder->ponumber }}</a></td>
                            <td>{{ $countfahadhusseinorder->branchname }}</td>
                            @if ($countfahadhusseinorder->totalfree == 0)
                            <td></td>

                            @else
                            <td style="color:red">{{ $countfahadhusseinorder->totalfree }}</td>
                            @endif
                            @if  ($countfahadhusseinorder->discount == 0)
                            <td></td>

                            @else
                            <td style="color:green">{{ $countfahadhusseinorder->discount }}</td>
                            @endif    
                        </tr>
                    </tbody> 
                        @endforeach
                </table>
            </div>
            <br />
                @endif

            <!-- SULTAN SALMAN SECTION -->
            <div class="media text-muted pt-3">
            <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 32px; height: 32px;" src="{{ asset('images/uploads/avatars') }}/{{ $sultansalman->photo }}" data-holder-rendered="true">
            <p class="media-body pb-3 mb-0 small lh-125">
                <strong class="d-block text-gray-dark"><span>@</span>{{ $sultansalman->name }}</strong><span class="badge badge-primary">Key Account Saleman</span>
                <a style="padding-left:0;padding-top:0;padding-bottom:0;padding-right:0;color:black;width: 8rem;border-radius:50%" href="{{ url('/export-orders-orderitems-csv') }}/{{ $sultansalman->idnumber }}/submitted/to/completed" class=""><h3 class="badge badge-info">{{ $countsultansalmanorders->count() }}</h3></a>
            </p>
            </div>
            @if($countsultansalmanorders->count() == 0)
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
                        @foreach($countsultansalmanorders as $countsultansalmanorder)
                        <tbody>
                            <tr>
                            <td><a style= "float:center" href="/root/orders/{{ $countsultansalmanorder->staffid }}/{{ $countsultansalmanorder->slug }}">{{ $countsultansalmanorder->ponumber }}</a></td>
                            <td>{{ $countsultansalmanorder->branchname }}</td>
                            @if ($countsultansalmanorder->totalfree == 0)
                            <td></td>

                            @else
                            <td style="color:red">{{ $countsultansalmanorder->totalfree }}</td>
                            @endif
                            @if  ($countsultansalmanorder->discount == 0)
                            <td></td>

                            @else
                            <td style="color:green">{{ $countsultansalmanorder->discount }}</td>
                            @endif    
                        </tr>
                    </tbody> 
                        @endforeach
                </table>
            </div>
            <br />
                @endif


            <!-- Medhat SECTION -> medhat -->
            <div class="media text-muted pt-3">
            <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 32px; height: 32px;" src="{{ asset('images/uploads/avatars') }}/{{ $medhat->photo }}" data-holder-rendered="true">
            <p class="media-body pb-3 mb-0 small lh-125">
                <strong class="d-block text-gray-dark"><span>@</span>{{ $medhat->name }}</strong><span class="badge badge-primary">Key Account Saleman</span>
                <a style="padding-left:0;padding-top:0;padding-bottom:0;padding-right:0;color:black;width: 8rem;border-radius:50%" href="{{ url('/export-orders-orderitems-csv') }}/{{ $medhat->idnumber }}/submitted/to/completed" class=""><h3 class="badge badge-info">{{ $countmedhatorders->count() }}</h3></a>
            </p>
            </div>
            @if($countmedhatorders->count() == 0)
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
                        @foreach($countmedhatorders as $countmedhatorder)
                        <tbody>
                            <tr>
                            <td><a style= "float:center" href="/root/orders/{{ $countmedhatorder->staffid }}/{{ $countmedhatorder->slug }}">{{ $countmedhatorder->ponumber }}</a></td>
                            <td>{{ $countmedhatorder->branchname }}</td>
                            @if ($countmedhatorder->totalfree == 0)
                            <td></td>

                            @else
                            <td style="color:red">{{ $countmedhatorder->totalfree }}</td>
                            @endif
                            @if  ($countmedhatorder->discount == 0)
                            <td></td>

                            @else
                            <td style="color:green">{{ $countmedhatorder->discount }}</td>
                            @endif    
                        </tr>
                    </tbody> 
                        @endforeach
                </table>
            </div>
            <br />
                @endif



        </div>
    </div>   
</div>  


            <!-- END QASSIM -->



    <!-- DATA PROCESSING Team --> 

    <!-- Style tables -->


<div class="row">      
    <div class="col-md-6" >
        <!-- Ahmed Sulaimani SECTION -->
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
        <!-- Mohammed Makki SECTION -->
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
