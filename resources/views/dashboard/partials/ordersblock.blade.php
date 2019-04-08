<div class="media">
	<a class="pull-left" href="">
	</a>
	<div class="media-body">
		@if ($order->ordernumber)
			<tbody style="font-size:12px">
				<tr>
				<td><a style= "float:right" href="/orders/order/{{ $order->slug }}">{{ $order->ordernumber }}</a></td>
				<td>{{ $order->ponumber }}</td>
				<td><pre>{{ $order->status }}</pre></td>
				<td><pre><a style= "float:right" href="/orders/order/{{ $order->slug }}">{{ $order->slug }}</a></pre></td>
				</tr>                                            
			</tbody>
		@endif
	</div>
</div>

           
