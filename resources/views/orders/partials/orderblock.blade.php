<div class="media">
	<a class="pull-left" href="">
	</a>
	<div class="media-body">
		@if ($order->ordernumber)
		<tbody style="font-size:12px">
			<tr>
				<td><img class="media-object" alt="{{ $order->ordernumber }}" src="{{ asset('images/uploads/avatars') }}/{{ Auth::user()->photo }}" style="width:40px; height:40px; float:center; border-radius:50%;"></td>
				<td>{{ $order->ordernumber }}</td>
				<td>{{ $order->staffname }}#{{ $order->staffid }}</td>
				<td>{{ $order->branchname }}&nbsp;#{{ $order->branchnumber }}</td>
				<td>{{ $order->ponumber }}</td>
				<td>{{ $order->urgent }}</td>
				<td>{{ $order->slug }}</td>
				<td>Pending</td>
				<td>{{ $order->created_at->diffForHumans() }}</td>
				<td>{{ $order->updated_at->diffForHumans() }}</td>
			</tr>	
		</tbody>
		@endif
	</div>
</div>