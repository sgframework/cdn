@extends('layouts.app')

@section('content')    

<div class="container">
<a href="/add-item">+Add New Procut</a>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Products List</div>
                <div class="card-body">
                    @if (session('status'))



                <p>&larr; <a href="/">Go Back</a>
                <h5>Details</h5>
                <form action="responce.php" method="POST">
                    <div class="form-group">
                        <label for="salemanid">ID#</label>
                        <input class="form-control" max-length="4" min-length="4" type="number" name="salemanid" placeholder="0000" />
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password</label>
                        <input class="form-control" type="password" name="pwd" placeholder="Passphrase" />
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="login" value="Login" />
                </form>



					{{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
