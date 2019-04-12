<div class="media">
	<a class="pull-left" href="">
	</a>
	<div class="media-body">
		@if ($order->ordernumber)
			<tbody style="font-size:12px">
				<tr>
				<td><a style= "float:left" href="/orders/order/{{ $order->slug }}">{{ $order->ordernumber }}</a></td>
				<td>{{ $order->ponumber }}</td>
				<td class="{{ strtolower($order->status) }}">{{ $order->status }}</td>
				<td><pre><a style= "" href="/orders/order/{{ $order->slug }}">{{ $order->slug }}</a></pre></td>
				</tr>                                            
			</tbody>
		@endif
	</div>
</div>

           
