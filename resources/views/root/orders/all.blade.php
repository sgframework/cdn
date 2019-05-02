@extends('layouts.root')
@section('content')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SunbulahGroup</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #aaa;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .full-height {
                height: 100vh;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .position-ref {
                position: relative;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .top-left {
                position: absolute;
                left: 10px;
                top: 18px;
            }
            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
<!--<header class="header">
<form class="navbar-form navbar-left" role="search" action="{{ route('search.items') }}">
            <div class="form-group">
                <input type="text" name="query" class="form-control" placeholder="Find People">
            </div>
            <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
        </form>
</header>-->
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


            <!--<div class="top-left">
	<a href="{{ url('/') }}">SunbulahGroup</a>
	</div>-->
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

#### All Submitted Orders

@endmarkdown
            @if (!$submittedorders->count())
                        <p>There are no submitted orders yet!</p>
            @else


            <?php $totalqty = 0; ?>
            <?php $totalitems = 0; ?>
            <?php $totalfree = 0; ?>
            <?php $totalprice = 0; ?>
            <?php $totalqtyprice = 0; ?>   
            <?php $discount = 0; ?>
   
                            <table class="table-responsive-sm processed" id="myTable">
                                <div class="media">
                                <a class="pull-left" href="">
                                </a>
                                <div class="media-body">
                                        <thead style="font-size:12px">
                                    <tr>
                                        <th>By#ID</th>
                                        <th>PO#</th>
                                        <th>BranchName#Number</th>
                                        <th style="text-align:center">Total Items</th>
                                        <th style="text-align:center">Total Qtys</th>
                                        <th style="text-align:center">Total Free</th>
                                        <th style="text-align:center">Total Discount</th>                                                       
                                        <th style="text-align:center">Total Price</th>
                                        <th>Submitted@</th>
                                    </tr>
                                </thead>
                                @foreach ($submittedorders as $submittedorder)
                                        <tbody style="font-size:12px">
                                        <tr>
                                        <td>{{ $submittedorder->staffname }}#{{ $submittedorder->staffid }}</td>
                                        <td><a style= "float:center" href="/root/orders/{{ $submittedorder->staffid }}/{{ $submittedorder->slug }}">{{ $submittedorder->ponumber }}</a></td>
                                        <td>{{ $submittedorder->branchname }}</td>
                                        <td style="text-align:center">{{ $submittedorder->totalitems }}</td>
                                        <td style="text-align:center">{{ $submittedorder->totalqty }}</td>
                                        <th style="text-align:center">{{ $submittedorder->totalfree }}</th>
                                        <th style="text-align:center">{{ number_format($submittedorder->discount) }}.00 SAR</th>
                                        <td style="text-align:center">{{ number_format($submittedorder->totalprice) }}.00 SAR</td>
                                        <td style="text-align:center"><a href="{{ url('/export-orders-csv/submitted/to/completed/now') }}"><span class="{{ strtolower($submittedorder->status) }}" id="status">{{ $submittedorder->updated_at->format('d/m/y g:iA') }}</span></a></td>
                                        </tr>	
                                        </tbody>
                                    <?php $totalqty += $submittedorder->totalqty; ?>
                                    <?php $totalitems += $submittedorder->totalitems; ?>
                                    <?php $totalfree += $submittedorder->totalfree; ?>
                                    <?php $discount += $submittedorder->discount; ?>
                                    <?php $totalprice += $submittedorder->totalprice; ?>
                                    
                                    
                                    @endforeach	
                                    <tfoot>
                                            <tr>
                                            <th style="text-align:center"><b>Totals</b></th>
                                            <th></th>
                                            <th></th>
                                            <td style="text-align:center">{{ $totalitems }}</td>
                                            <td style="text-align:center">{{ $totalqty }}</td>
                                            <td style="text-align:center">{{ $totalfree }}</td>
                                            <th style="text-align:center">{{ number_format($discount) }}.00 SAR</th>
                                            <td style="text-align:center">{{ number_format($totalprice) }}.00 SAR</td>
                                            </tr>
                                        </tfoot>
                                    </div>
                                </div>
                            </table>


                            @endif










      <div class="row">



      
<!-- Firas Team --> 

<div class="col-md-4" >
      <!-- FIRAS SECTION -->
      <div class="my-3 p-3 bg-white rounded box-shadow">
        <strong><h3 class="border-bottom border-gray pb-2 mb-0">Firas Team</h3></strong>
        <div class="newspaper media text-muted pt-3">
          <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 32px; height: 32px;" src="{{ asset('images/uploads/avatars') }}/{{ $firas->photo }}" data-holder-rendered="true">
          <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
          <strong><h5 class="border-bottom border-gray pb-2 mb-0"> <strong class="d-block text-gray-dark">{{ $firas->name }} <span class="badge badge-danger">SUPERVISOR</span></strong></h5></strong>
          </p>
        </div>
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
        
        <!-- Wail SECTION --><!--
        <div class="media text-muted pt-3">
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
      <!-- Hazem SECTION -->
      <div class="my-3 p-3 bg-white rounded box-shadow">
        <strong><h3 class="border-bottom border-gray pb-2 mb-0">Hazim Team</h3></strong>
        <div class="newspaper media text-muted pt-3">
          <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 32px; height: 32px;" src="{{ asset('images/uploads/avatars') }}/{{ $hazim->photo }}" data-holder-rendered="true">
          <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
          <strong><h5 class="border-bottom border-gray pb-2 mb-0"> <strong class="d-block text-gray-dark">{{ $hazim->name }} <span class="badge badge-danger">SUPERVISOR</span></strong></h5></strong>
          </p>
        </div>


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
      <div class="my-3 p-3 bg-white rounded box-shadow">
        <strong><h3 class="border-bottom border-gray pb-2 mb-0">Awaden Team</h3></strong>
        <div class="newspaper media text-muted pt-3">
          <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 32px; height: 32px;" src="{{ asset('images/uploads/avatars') }}/{{ $awaden->photo }}" data-holder-rendered="true">
          <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
          <strong><h5 class="border-bottom border-gray pb-2 mb-0"> <strong class="d-block text-gray-dark">{{ $awaden->name }} <span class="badge badge-danger">SUPERVISOR</span></strong></h5></strong>
          </p>
        </div>







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
        <div class="col-md-12">
        <center>
        <p class="badge badge-dark"><span class="badge completed">Today's Total Completed Orders</span> <span class="badge badge-danger">{{ $todaysmakkiprocessedorders->count() + $todaysahmedsulaimaniprocessedorders->count()  }}</span>
            <span class="badge badge-dark">Today's Total Items $old</span> <span class="badge badge-danger">{{ $todaysmakkiprocessedorders->sum('totalitems')  + $todaysahmedsulaimaniprocessedorders->sum('totalitems')   }}</span>
            <span class="badge badge-dark">Today's Total Cases Qtys</span> <span class="badge badge-danger">{{ $todaysmakkiprocessedorders->sum('totalqty')  + $todaysahmedsulaimaniprocessedorders->sum('totalqty')   }}</span>
        <span class="badge badge-dark">Today's Total Free Cases</span> <span class="badge badge-danger">{{ $todaysmakkiprocessedorders->sum('totalfree')  + $todaysahmedsulaimaniprocessedorders->sum('totalfree')   }}</span>
        <span class="badge badge-dark">Today's Total Cases %Discounts%</span> <span class="badge badge-danger">{{ number_format($todaysmakkiprocessedorders->sum('discount')  + $todaysahmedsulaimaniprocessedorders->sum('discount')) }}.00 SAR</span>
        <span class="badge badge-dark">Today's Total Grand</span> <span class="badge badge-danger">{{ number_format($todaysmakkiprocessedorders->sum('totalprice')  + $todaysahmedsulaimaniprocessedorders->sum('totalprice')) }}.00 SAR</span>  </p>
    </center>
        <center>
        <p class="badge badge-dark"><span class="badge completed">Total Of All Completed Orders</span> <span class="badge badge-danger">{{ $sumomapo + $sumoasapo  }}</span>
            <span class="badge badge-dark">Total Of All Items $old</span> <span class="badge badge-danger">{{ $sumomapoi + $sumoasapoi  }}</span>
            <span class="badge badge-dark">Total Of All Cases Qtys</span> <span class="badge badge-danger">{{ $sumomapoq + $sumoasapoq  }}</span>
        <span class="badge badge-dark">Total Of All Free Cases</span> <span class="badge badge-danger">{{ $sumomapof + $sumoasapof  }}</span>
        <span class="badge badge-dark">Total Of All Cases %Discounts%</span> <span class="badge badge-danger">{{ number_format( $sumomapof + $sumoasapod) }}.00 SAR</span>
        <span class="badge badge-dark">All Orders Total Grand</span> <span class="badge badge-danger">{{ number_format( $sumomapof + $sumoasapop) }}.00 SAR</span>  </p>
    </center>
            
        </div>
    </div>


 

        <!--<small class="d-block text-right mt-3">
          <a href="#">Extract ALL</a>
        </small>-->








<br /><hr />                                     
@markdown

#### 

@endmarkdown

<span style="font-size:18px"> <i class="fas fa-list"></i> ALL Completed Orders</span>
                <?php $totalitems = 0; ?>
                <?php $totalqty = 0; ?>
                <?php $totalfree = 0; ?>
                <?php $totaldiscount = 0; ?>     
                <?php $totalprice = 0; ?>     
                    @if (!$completedorders->count())
                        <p>You haven't created any order recently.</p>
                    @else
                            <table class="table-responsive-sm processed" id="myTable">
                                <div class="media">
                                    <a class="pull-left" href="">
                                    </a>
                                    <div class="media-body">
                                        <thead style="font-size:12px">
                                    <tr>
                                        <th>By#ID</th>
                                        <th>PO#</th>
                                        <th>BranchName#Number</th>
                                        <th>Total Items</th>
                                        <th>Total Qtys</th>
                                        <th>Total Free</th>
                                        <th>Total Discount</th>
                                        <th>Total Price</th>
                                        <th>Completed@</th>
                                    </tr>
                                </thead>
                                @foreach ($completedorders as $completedorder)

                                <tbody style="font-size:12px">
                                    <tr>
                                        <td>{{ $completedorder->staffname }}#{{ $completedorder->staffid }}</td>
                                        <td><a style= "float:center" href="/root/orders/{{ $completedorder->staffid }}/{{ $completedorder->slug }}">{{ $completedorder->ponumber }}</a></td>
                                        <td>{{ $completedorder->branchname }}</td>
                                        <td style="text-align:center">{{ $completedorder->totalitems }}</td>
                                        <td style="text-align:center">{{ $completedorder->totalqty }}</td>     
                                       @if ($completedorder->totalfree == 0)
                                        <td></td>                            
                                        @else
                                        <td style="color:red;;text-align:center">{{ $completedorder->totalfree }}</td>

                                        @endif
                                        @if  ($completedorder->discount == 0)
                                        <td></td>
                                        @else
                                        <td style="color:green;;text-align:center">{{ number_format($completedorder->discount) }}.00 SAR</td>
                                        @endif    
                                        <td style="text-align:center">{{ number_format($completedorder->totalprice) }}.00 SAR</td>
                                        <td style="text-align:center"><span class="{{ strtolower($completedorder->status) }}">{{ $completedorder->updated_at->format('d/m/y g:iA') }}</span></td>
                                    </tr>
                                </tbody> 

                                <?php $totalitems += $completedorder->totalitems; ?>
                                <?php $totalqty += $completedorder->totalqty; ?>
                                <?php $totalfree += $completedorder->totalfree; ?>
                                <?php $totaldiscount += $completedorder->discount; ?>
                                <?php $totalprice += $completedorder->totalprice; ?>
                                    @endforeach	

                                    <tfoot>
                                        <tr>
                                        <th style="text-align:center"><strong>Totals</strong></th>
                                        <th></th>
                                        <th></th>
                                        <td style="text-align:center"><strong>{{ $totalitems }} Items</strong></td>
                                        <td style="text-align:center"><strong>{{ $totalqty }} Items Qtys</strong></td>
                                        <td style="color:red;text-align:center"><strong>{{ $totalfree }} Free Case</strong></td>
                                        <td style="color:green;text-align:center"><strong>{{ number_format($totaldiscount) }}.00 SAR</strong></td>
                                        <td style="text-align:center"><strong>{{ number_format($totalprice) }}</strong>.00 SAR</td>
                                        </tr>
                                    </tfoot>            
                                    </div>
                                </div>
                            </table>

@markdown

Total Completed Orders: <strong>{{ $completedorders->count() }}</strong>

@endmarkdown
       <br /><br />
                
                <!--<h2>Users Timline</h2>-->


@endif


                    @else

            <!-- If user loggedOut show below content until endShow part -->          
            <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">{{ __('Login') }}</div>
                <div class="card-body">                 
                    <form method="POST" class="form-vertical" action="{{ route('login') }}">
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
                        <!--@if (Route::has('register'))
                            <a style="float:right" href="{{ route('register') }}">Register</a>
                        @endif-->
                        
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
