
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
     
