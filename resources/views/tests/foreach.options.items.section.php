<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <select class="form-control" name="item_id">
                        @foreach($items as $item)
                            <option value="{{$branch->branchname}}">{{ $branch->branchname }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>
</section>