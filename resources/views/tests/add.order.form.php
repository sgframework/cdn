<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <form class="form-inline" action="{{ route('orders.partials.step1') }}">
                            <label style="padding-left:20px" for="staffname">Name:</label>
                                <input hidden class="form-control" type="text" class="input" name="staffname" value="{{ Auth::user()->name }}" />{{ Auth::user()->name }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </label>
                            <label for="staffid">ID#</label>
                                <input hidden class="form-control" type="number" class="input" name="staffid" value="{{ Auth::user()->idnumber }}" />{{ Auth::user()->idnumber }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </label>
                                <input type="number" id="ponumber" placeholder="PO#" name="ponumber">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                      <select name="type" class="form-control">
                                        <option name="" value="">Select Branch</option>
                                        @foreach($branches as $branch)
                                        <option value="{{$branch->branchnumber}}">{{ $branch->branchnumber }}&nbsp;&nbsp;{{ $branch->branchname }}</option>
                                        @endforeach
                                    </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span style="color:red"> Urgent</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="urgent">
                    <div style="float:right; padding-left:90px"><button type="submit">Next</button></div>
                </form>
            </div>
        </div>
    </div>
</div>