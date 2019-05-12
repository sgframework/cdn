@extends('layouts.app')
@section('content')    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Create a new order (Step 1)
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <form method="POST" action="{{ route('orders.insert.step1') }}">    
                            <table class="table table-bordered" id="crud_table">
                                <thead>
                                    <tr>
                                        <th width="50%">Name</th>
                                        <th width="10%">ID#</th>
                                        <th width="40%">PO#</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td contenteditable="false" class="item_name">{{ Auth::user()->name }} </td>
                                        <td contenteditable="false" class="item_code">{{ Auth::user()->idnumber }}</td>
                                        <td contenteditable="true" class="" name="ponumber"></td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table table-bordered" id="crud_table">
                                <thead>
                                    <tr>
                                        <th width="60%">Select Branch</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                    <tr>
                                        <td contenteditable="false" class="item_price">
                                            <select class="form-control">
                                                <option name="" value=""></option>
                                                <option name="ordernumber" style="color:black" value="Vanilla Pound Cake 300 g" />Vanilla Pound Cake 300 g</option>
                                                <option></option>
                                            </select>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        <input class="btn btn-primary" type="submit" style="float:right" value="Next" />
                        </form>
                    </div>
                </div>  
            </div>
        </div>
    </div><br /><hr />
</div>
@endsection


