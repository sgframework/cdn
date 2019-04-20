@extends('layouts.app')
@section('content')
<style>
.form-inline {  
  display: flex;
  flex-flow: row wrap;
  align-items: center;
}

.form-inline label {
  margin: 5px 10px 5px 0;
}

.form-inline input {
  vertical-align: middle;
  margin: 5px 10px 5px 0;
  padding: 10px;
  background-color: #fff;
  border: 1px solid #ddd;
}

.form-inline button {
  padding: 10px 20px;
  background-color: dodgerblue;
  border: 1px solid #ddd;
  color: white;
  cursor: pointer;
}

.form-inline button:hover {
  background-color: royalblue;
}

@media (max-width: 800px) {
  .form-inline input {
    margin: 10px 0;
  }
  
  .form-inline {
    flex-direction: column;
    align-items: stretch;
  }
}
</style>
    <div class="container">
    <div class="row justify-content-center">
<div class="col-md-10">
        <div class="card">
        <div class="card-header"><i class="fas fa-search"></i> Search Console.</div>
		<h4 style="padding-top:25px;padding-left:25px">Your search for "{{ Request::input('query') }}"</h4>
		    <div class="card-body">
                    @if (!$pos->count())
                      <p>No results found, sorry</p>
                    @else
                        <table id="myTable">
                            <thead>
                                <tr>
                                    <th>CreatedBy</th>
                                    <th>PO#</th>
                                    <th>Customer#Name</th>
                                    <th>Urgent</th>
                                    <th>Tot. Items</th>
                                    <th>Tot. Qty</th>
                                    <th>Tot Price</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            @foreach ($pos as $po)
                              @include('orders/partials/poblock')
                            @endforeach			
                          </table>
                          <table id="myTable">
                            <thead>
                                <tr>
                                    <th>Items</th>
                                    <th>Qty.</th>
                                    <th>Free</th>
                                    <th>Price</th>

                                </tr>
                            </thead>
                            @foreach ($poitems as $poitem)
                              @include('orders/partials/poitemsblock')
                            @endforeach			
                          </table>
                    @endif
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>
	@stop
