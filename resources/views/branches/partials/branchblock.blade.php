<div class="media">
	<a class="pull-left" href="">
	<img class="media-object" alt="{{ $branch->branchname }}" src="{{ asset('image/sgimg.png') }}" style="width:40px; height:40px; float:left; border-radius:50%; margin-right:25px;">
	</a>
	<div class="media-body">
	@if ($branch->branchname)
	</thead>
		</tr>
			<strong><span style="" class="media-heading">{{ $branch->branchname }}<a href=""><!----></a></span></strong>	<span style="padding-left:30px;font-size:14px; color: gray;">Branch# {{ $branch->branchnumber }}</span>
		@endif
	</div>
</div>	