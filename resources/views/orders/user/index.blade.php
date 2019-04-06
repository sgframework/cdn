@extends('layouts.app')

@section('content')    

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Orders List</div>
                <div class="card-body">

            <table id="myTable">
                <thead style="font-size:14px">
                    <tr>
                        <th>#</th>
                        <th>By</th>
                        <th>ID#</th>
                        <th>Branch Name</th>
                        <th>Branch#</th>
                        <th>PO#</th>
                        <th>Item#</th>
                        <th>Description</th>
                        <th>Qtys.</th>
                        <th>Free Items</th>
                        <th>Item Price</th>
                        <th>Created</th>
                        <th>Updated</th>
                    </tr>

            </table>					
                    </div>  
                </div>
            </div>
            </div><br /><hr />
    <center></center>
    </div>
</div>
@endsection


