@extends('layouts.app')

@section('content')    

<style>

/*!
* My Custom Styles
*
* START
 */




#page-container {
  position: relative;
  min-height: 100vh;
}
#content-wrap {
  padding-bottom: 2.5rem;    /* Footer height */
}
#footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 2.5rem;            /* Footer height */
}



 #myInput {
  background-image: url('./img/searchicon.png'); /* Add a search icon to input */
  background-position: 10px 12px; /* Position the search icon */
  background-repeat: no-repeat; /* Do not repeat the icon image */
  width: 100%; /* Full-width */
  font-size: 16px; /* Increase font-size */
  padding: 6px 6px 6px 8px; /* Add some padding */
  border: 1px solid #ddd; /* Add a grey border */
  margin-bottom: 12px; /* Add some space below the input */
}

#myTable {
  border-collapse: collapse; /* Collapse borders */
  width: 100%; /* Full-width */
  border: 2px solid #ddd; /* Add a grey border */
  font-size: 12px; /* Increase font-size */
}

#myTable th, #myTable td {
  text-align: left; /* Left-align text */
  padding: 4px; /* Add padding */
}

#myTable tr {
  /* Add a bottom border to all table rows */
  border-bottom: 1px solid #ddd; 
}

#myTable tr.header, #myTable tr:hover {
  /* Add a grey background color to the table header and on hover */
  background-color: #f1f1f1;
}
  















 .input-merge .col-xs-2,
 .input-merge .col-xs-4,
 .input-merge .col-xs-6 {
   padding-left: 0;
   padding-right: 0;
 }
 .input-merge div:first-child .form-control {
   border-top-right-radius: 0;
   border-bottom-right-radius: 0;
 }
 .input-merge div:last-child .form-control {
   border-top-left-radius: 0;
   border-bottom-left-radius: 0;
 }
 .input-merge div:not(:first-child) {
   margin-left: -1px;
 }
 .input-merge div:not(:first-child):not(:last-child) .form-control {
   border-radius: 0;
 }
 .focus {
   z-index: 2;
 }




 .input-group-addon {
  border-left-width: 0;
  border-right-width: 0;
}
.input-group-addon:first-child {
  border-left-width: 1px;
}
.input-group-addon:last-child {
  border-right-width: 1px;
}

table {
  border-collapse: collapse;
  border: 1px solid black;
} 

th,td {
  border: 1px solid black;
}


 table.a {
  table-layout: auto;
  width: 80%;  
}
.form_error span {
  width: 80%;
  height: 35px;
  margin: 3px 10%;
  font-size: 1.1em;
  color: #D83D5A;
}
.form_error input {
  border: 1px solid #D83D5A;
}
/*!
* My Custom Styles
*
* END
 */
</style>

<div class="container">

<div class="row justify-content-center">


<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <strong>Branches List</strong>
            <div class="input-group">
                <form class="form-inline input" role="search"  action="{{ route('search.branches') }}">
                        <input style="float:right" class="input-group-addon" name="query" type="text" placeholder="Search" />
                    <input type="submit" class="input-group-addon" />
                </form>
            </div>
        </div>
            <div class="card-body">
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
        </div>
    </div>
</div>
@endsection


