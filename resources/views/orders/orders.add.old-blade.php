        <span>&larr; <a href="/">Back</a></span><span style="float:right"><a href="{{ route('items.index') }}">Products List</a> &rarr;</span><br /><hr />
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="crud_table">
                            <tr>
                                <th width="30%">Name</th>
                                <th width="10%">ID#</th>
                                <th width="20%">PO#</th>
                                <th width="40%">Branch#</th>
                            </tr>
                            <tr>
                                <td contenteditable="false" class="item_name">{{ Auth::user()->name }} </td>
                                <td contenteditable="false" class="item_code">{{ Auth::user()->idnumber }}</td>
                                <td contenteditable="true" class="item_desc"></td>
                                <td contenteditable="true" class="item_price">
                                    <select class="form-control">
                                        <option name="" value=""></option>
                                        <option name="ordernumber" style="color:black" value="Vanilla Pound Cake 300 g" />Vanilla Pound Cake 300 g</option>
                                        <option></option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                    </div>
                       <form method="POST" action="{{ route('orders.insert') }}">
                        @csrf     
                        <input hidden class="form-control" type="text" class="input" name="staffname" value="{{ Auth::user()->name }}" />
                            <input hidden class="form-control" type="number" class="input" name="staffid" value="{{ Auth::user()->idnumber }}" />
                            <input class="form-control" type="number" class="input" name="ponumber" placeholder="PO#" />
                            <input hidden class="form-control" type="number" class="input" name="branchnumber" placeholder="Branch#" />
                            <input hidden class="form-control" type="name" class="input" name="branchname" value="Al-Othaim Co. 23" placeholder="Al-Othaim Co. 23" />                  
                            <select class="form-control">
                                <option name="" value="">Select Branch</option>
                                <option name="ordernumber" style="color:black" value="Vanilla Pound Cake 300 g" />Vanilla Pound Cake 300 g</option>
                                <option></option>
                                <option></option>
                            </select>
                            <br />
                            <select class="form-control">
                                <option name="" value="">Select an item</option>
                                <option name="ordernumber" style="color:black" value="Vanilla Pound Cake 300 g" />Vanilla Pound Cake 300 g</option>
                                <option></option>
                                <option></option>
                            </select>
                            <br />
                            <input class="form-control" type="number" class="input" name="itemnumber" placeholder="Item Number" />
                            <input class="form-control" type="text" class="input" name="orderitems" value="item.png" placeholder="Item Name" />
                            <input class="form-control" type="number" class="input" name="itemqty" placeholder="Qty" />
                            <input class="form-control" type="number" class="input" name="freeitem" value="" placeholder="Free" />
                            <input class="form-control" type="number" class="input" name="itemprice" value="" placeholder="Price" />
                            <input class="btn btn-primary" type="submit" value="Create Order" />
                        </form>
                    </div>
                </div>
        </section>