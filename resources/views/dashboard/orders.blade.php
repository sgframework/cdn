@extends('layouts.app')

@section('content')    

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>
.dot {
  height: 25px;
  width: 25px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
}
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header" style="font-size:12px;float:right;padding-top:15px;padding-bottom:15px; text-align:center">
                        <a href="{{ route('orders.add') }}"><i class="fas fa-plus"></i> <span>New Order</span></a>&nbsp;&nbsp;&nbsp;
                        <a href="{{ route('orders.index') }}"><i class="fas fa-edit"></i> <span>Edit Orders</span></a>
                    </div>
                <button onclick="fun('orders')" class="w3-btn w3-block w3-black w3-left-align"><i class="fas fa-eye"></i> <span style="padding-left:10ox;">Orders Overview</span></button>
                <div id="orders" class="w3-container w3-hide">

                <div style="padding-left:8px" class="row">
                    <div class="card col-lg-5">
@markdown


### {{ Auth::user()->name }}

ID# **{{ Auth::user()->idnumber }}**

-------------------


Last Order Created

```json_decode

- Order# {{ (Session::has('ordernumber') ? Session::get('ordernumber') : '' ) }} 

    - PO# {{ (Session::has('ponumber') ? Session::get('ponumber') : '' ) }}
    - Branch#

@ {{ (Session::has('created_at') ? Session::get('created_at') : '' ) }}

Total orders: $count(orders);

```

__Order Status:__ 


[Order URL](http://localhost) [Order URL](http://localhost)


-----------------------

@endmarkdown


                                </div>
                                <hr />
                                <div style="padding-left:8px;padding-top:8px" class="col-sm-6">
                                    <span class="h5"><i class="fas fa-history"></i> Orders Summery</span>
                                            <table class="table table-striped table-lg">
                                                <thead>
                                                    <tr>
                                                        <th>Order#</th>
                                                        <th>PO#</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>{{ (Session::has('ordernumber') ? Session::get('ordernumber') : '' ) }}</td>
                                                        <td>{{ (Session::has('ponumber') ? Session::get('ponumber') : '' ) }}</td>
                                                        <td><pre>Just created</pre></td>
                                                    </tr>
                                                    <tr>
                                                        <td>{{ (Session::has('ordernumber') ? Session::get('ordernumber') : '' ) }}</td>
                                                        <td>{{ (Session::has('ponumber') ? Session::get('ponumber') : '' ) }}</td>
                                                        <td><pre>Just created<i style="color:red" class="dot"></i></pre></td>
                                                    </tr>
                                                    <tr>
                                                        <td>{{ (Session::has('ordernumber') ? Session::get('ordernumber') : '' ) }}</td>
                                                        <td>{{ (Session::has('ponumber') ? Session::get('ponumber') : '' ) }}</td>
                                                        <td><pre>Just created</pre></td>
                                                    </tr>
                                                    <tr>
                                                        <td>{{ (Session::has('ordernumber') ? Session::get('ordernumber') : '' ) }}</td>
                                                        <td>{{ (Session::has('ponumber') ? Session::get('ponumber') : '' ) }}</td>
                                                        <td><pre>Just created</pre></td>
                                                    </tr>
                                                    <tr>
                                                        <td>{{ (Session::has('ordernumber') ? Session::get('ordernumber') : '' ) }}</td>
                                                        <td>{{ (Session::has('ponumber') ? Session::get('ponumber') : '' ) }}</td>
                                                        <td><pre>Just created</pre></td>
                                                    </tr>
                                                    <tr>
                                                        <td>{{ (Session::has('ordernumber') ? Session::get('ordernumber') : '' ) }}</td>
                                                        <td>{{ (Session::has('ponumber') ? Session::get('ponumber') : '' ) }}</td>
                                                        <td><pre>Just created</pre></td>
                                                    </tr>                                            
                                                    </table>
                                                </tbody>
                                            </div>
                                        </div>
                                        <hr />
                                    <div class="">
                                    <span class="h5"><i class="fas fa-list"></i> Orders List</span>
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
                                                </tbody>
                                            </table>
                                        <hr />
                                        <span class="h5"><i class="fas fa-chart-line"></i> Stats</span>
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
                                </div>
                            </div>
                        </div>
                        <script>
                            function fun(id) {
                            var x = document.getElementById(id);
                            if (x.className.indexOf("w3-show") == -1) {
                                x.className += " w3-show";
                            } else { 
                                x.className = x.className.replace(" w3-show", "");
                            }
                            }
                        </script>
                    </div>
                <div class="col-md-4 header" style="">
                    <div class="pre">
                    </div>
                </div>
                <div class="row justify-content-left">
                                <b><p style="padding-left:45px"></p></b>
                                <div class="col-md-2">

                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection