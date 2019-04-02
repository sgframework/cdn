<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <select class="form-control" name="item_id">
                        @foreach($branches as $branch)
                            <option value="{{$item->item_id}}">{{ $branch->branchname }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>
</section>