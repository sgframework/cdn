        <div class="card-header"><h4>Items List<h4></div>
            <div class="card-body">
                <div class="table-responsive">
                        <table class="table table-bordered" id="crud_table">
                            <tr>
                                <th width="5%">#</th>
                                <th width="24%">Product</th>
                                <th width="15%">Item#</th>
                                <th width="10%">Price</th>
                                <th width="10%">SKU</th>
                                <th width="10%">Plant</th>
                                <th width="10%">InStock</th>
                                <th width="30%">Type</th>
                            </tr>                            
                        <tr>
                            <td contenteditable="false" class=""> </td>
                                <form action="{{ route('items.insert') }}" method="POST">
                                        <td contenteditable="false" name="itemname" class=""><input class="form-control" type="text" class="input" name="itemname" placeholder="Product Name" /></td>
                                        <td contenteditable="false" name="itemnumber" class=""><input class="form-control" type="number" class="input" name="itemnumber" placeholder="Material Number" /></td>
                                        <td contenteditable="false" name="itemprice" class=""><input class="form-control" type="decimal" class="input" name="itemprice" placeholder="0.00" /></td>
                                        <td contenteditable="false" name="itemsku" class=""><input class="form-control" type="number" class="input" name="itemsku" placeholder="SKU" /></td>
                                        <td contenteditable="false" name="plant" class=""><input class="form-control" type="text" class="input" name="plant" placeholder="Prod. Plant" /></td>
                                        <td contenteditable="false" name="instock" class=""><input class="form-control" type="number" class="input" name="instock" placeholder="In Stock" /></td>
                                        <td contenteditable="false" name="itempic" class="">
                                    <select name="type" class="form-control">
                                        <option name="" value="">select one</option>
                                        <option style="color:black" value="Vegetables">Vegetables</option>
                                        <option style="color:black" value="Vegetables">Sea Food</option>
                                        <option style="color:black" value="Vegetables">Canned</option>
                                        <option style="color:black" value="Vegetables">Bread</option>
                                        <option style="color:black" value="Vegetables">Chease</option>
                                        <option></option>
                                    </select>
                                    <center><input class="btn btn-primary" type="submit" value="Insert" /></center><hr />
                                </form>
                            </td>
                        </tr>
                    </table>
                </div>