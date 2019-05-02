@extends('layouts.root')

@section('content')    

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                

                <div class="card-header"><i class="fas fa-tachometer-alt"></i> <strong><span style="font-size:18px">Dashboard</span></strong></div>
                <div style="float:right;padding-left:20px" class="input-group">
                <form class="form-inline input" role="search" action="{{ route('search.pos') }}">
                    <input class="form-control" width="80%" name="query" type="text" placeholder="Search Orders" />
                    <input style="background-color:black" value="Search" type="submit" class="form-control btn btn-primary" />
                </form>
            </div>
                    <div class="card-body">
                        <center>
                        <span class="nav-item"><a style="display: inline-block;" class="inline nav-link" href="{{ route('dashboard.orders', ['idnumber' => Auth::user()->idnumber ]) }}"><i class="fas fa-asterisk"></i> My Team</a><a style="display: inline-block;" class="inline nav-link" href="{{ route('dashboard.archive', ['id' => $id->idnumber]) }}"><i class="fas fa-archive"></i> Orders Archive</a><a style="display: inline-block;" class="inline nav-link" href=""><i class="fas fa-search"></i> Search Database</a></span>
                            <div class="row justify-content-left">
                                </center>
                                <div style="padding-left:8px" class="row">
                                    <div class="card col-lg-4">
                                        <div style="padding-top:14px;padding-bottom:8px">
                                            <img style="border-radius:50%" width="125px" height="125px" src="{{ asset('images/uploads/avatars') }}/{{ Auth::user()->photo }}" />                    
                                        </div>






@markdown

### {{ Auth::user()->name }}

ID# {{ Auth::user()->idnumber }}

Phone Number: 0{{ Auth::user()->phonenumber }}

Email: {{ Auth::user()->email }}

[Edit Profile]({{ route('profile.edit') }})

-------------------

@endmarkdown


                                                <br />
                                            <form action="{{ url('/export-orders-csv/' . Auth::user()->idnumber . '/completed') }}" method="GET">
                                                <button class="btn btn-sm btn-outline-secondary">Export Today's Report</button>
                                            </div>
                                        <div style="padding-left:8px;padding-top:8px" class="col-sm-8">





<!-- FIRAS SECTION START -->

@if ( \Auth::user()->dc == '001020' )



@markdown

### Sales by Team Members 

@endmarkdown






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
        
        <!-- Wail SECTION -->
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


        </div>
</div>   

<!-- END OF FIRAS TEAM SECTION -->











<div class="col-md-12">

<div class="" style="padding-top:14px;padding-bottom:8px">

                               
<span style="font-size:10px"><img style="border-radius:50%" width="40px" height="40px" src="{{ asset('images/uploads/avatars') }}/{{ $member->photo }}" /> <b>{{ $member->name }} #{{ $member->idnumber }}</b> | <i class="fa fa-phone"></i> <tel href="0{{ $member->phonenumber }}">0{{ $member->phonenumber }}</tel> |<i class="fa fa-money"></i> <b>Total Sales: {{ number_format($member->totalgrand) }} SAR</b> </span>
    
</div>   

</div>


<h5>Today's Team Total Sales: {{ number_format($sumfirasteamsales) }}.00 SAR</h5>
</div>







<!-- FIRAS SECTION END -->





















<!-- HAZEM SECTION START -->

@elseif (  \Auth::user()->dc == '001030'  )



@markdown

### Sales by Team Members 

@endmarkdown

@foreach ($hazemteam as $member)
<div class="col-md-12">

<div class="" style="padding-top:14px;padding-bottom:8px">

                               
<span style="font-size:10px"><img style="border-radius:50%" width="40px" height="40px" src="{{ asset('images/uploads/avatars') }}/{{ $member->photo }}" /> <b>{{ $member->name }} #{{ $member->idnumber }}</b> | <i class="fa fa-phone"></i> <tel href="0{{ $member->phonenumber }}">0{{ $member->phonenumber }}</tel> |<i class="fa fa-money"></i> <b>Total Sales: {{ number_format($member->totalgrand) }} SAR</b> </span>
   
</div>   

</div>

@endforeach
<h5>Today's Team Total Sales: {{ number_format($sumhazemteamsales) }}.00 SAR</h5>
</div>








<!-- HAZEM SECTION END -->





<!-- AWADEN SECTION START -->

@elseif (  \Auth::user()->dc == '001040'  )


@markdown

### Sales by Team Members 

@endmarkdown

@foreach ($awadenteam as $member)
<div class="col-md-12">

<div class="" style="padding-top:14px;padding-bottom:8px">

                               
<span style="font-size:10px"><img style="border-radius:50%" width="40px" height="40px" src="{{ asset('images/uploads/avatars') }}/{{ $member->photo }}" /> <b>{{ $member->name }} #{{ $member->idnumber }}</b> | <i class="fa fa-phone"></i> <tel href="0{{ $member->phonenumber }}">0{{ $member->phonenumber }}</tel> |<i class="fa fa-money"></i> <b>Total Sales: {{ number_format($member->totalgrand) }} SAR</b> </span>

</div>   
</div>

@endforeach

<br />
<h6>Today's Team Total Sales: <b>{{ number_format($sumawadenteamsales) }}.00 SAR</b></h6>


</div>




<!-- AWADEN SECTION END -->





<!-- ODEH SECTION START -->

@elseif (  \Auth::user()->dc == '002010'  )



@markdown

### Sales by Team Members 

@endmarkdown

@foreach ($odehteam as $member)
<div class="col-md-12">

<div class="" style="padding-top:14px;padding-bottom:8px">

                               
<span style="font-size:10px"><img style="border-radius:50%" width="40px" height="40px" src="{{ asset('images/uploads/avatars') }}/{{ $member->photo }}" /> <b>{{ $member->name }} #{{ $member->idnumber }}</b> | <i class="fa fa-phone"></i> <tel href="0{{ $member->phonenumber }}">0{{ $member->phonenumber }}</tel> |<i class="fa fa-money"></i> <b>Total Sales: {{ number_format($member->totalgrand) }} SAR</b> </span>

@endforeach

<h5>Today's Team Total Sales: {{ number_format($sumodehteamsales) }}.00 SAR</h5>
</div>






<!-- ODEH SECTION END -->








@endif















                 <br />

</div>


@markdown

## Sales By Customer

@endmarkdown


                                            <table id="myTable">
                                                    <thead>
                                                        <tr>
                                                            <th>Customer#Name</th>
                                                            <th>SalesGroup</th>
                                                            <th>DC</th>
                                                            <th>Office</th>
                                                            <th>Sales</th>
                                                        </tr>
                                                    </thead>
                                                @foreach ($branches_list as $branch)
                                                    <tbody>
                                                        <tr>
                                                            <td>{{ $branch->branchnumber }} - {{ $branch->branchname }}</td>
                                                            <td>{{ $branch->salesgroup }}</td>
                                                            <td>{{ $branch->dc }}</td>
                                                            <td>{{ $branch->office }}</td>
                                                            <td>N/A .00 SAR</td>
                                                        </tr>
                                                    </tbody>
                                                @endforeach	
                                                <tfoot>
                                                        <tr>
                                                            <th>Totals</th>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>N/A .00 SAR</td>
                                                        </tr>
                                                    </tfoot>
                                            </table>  
                                        </div>
                                    </div>
                                </div>

<br />
<hr />




</div>
</div>


        </div><br />
    </div>
</div>
@endsection