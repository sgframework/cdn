<div class="media">
	<a class="pull-left" href="">
	</a>
	<div class="media-body">
	@if ($branch->branchname)
        <tbody>
            <tr>
                <td><img class="media-object" alt="{{ $branch->logo }}" src="{{ asset('/images/assests') }}/{{ $branch->logo }}" style="width:40px; height:40px; float:left; border-radius:50%; margin-right:25px;"></td>
                <td><strong><span style="" class="media-heading">{{ $branch->branchname }}<a href=""><!----></a></span></strong></td>
                <td><span style="padding-left:30px;font-size:14px; color: gray;">{{ $branch->branchnumber }}</span></td>
            </tr>
        </tbody>
				
		@endif
	</div>
</div>	