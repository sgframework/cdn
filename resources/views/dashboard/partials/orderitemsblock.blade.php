<style>
input.remove {
	padding:0;
		padding-top:0;
		padding-botto:0;

width: 2px;
height:2px;
}
</style>

<div class="media">
	<a class="pull-left" href="">
	</a>
	<div class="media-body">
		@if ($orderitem->itemnumber)
			<tbody style="font-size:12px">
				<tr>
				<!--<td>{{ $orderitem->itemnumber }}</td>-->
				<td>{{ $orderitem->orderitems }}</td>
				<td style="text-align:center">{{ $orderitem->itemqty }}</td>
				<td style="text-align:center">{{ $orderitem->freeitem }}</td>
				<td style="text-align:center">{{ $orderitem->itemprice }} SAR</td>
				<td style="text-align:center">{{ $orderitem->itemqty * $orderitem->itemprice }}.00 SAR</td>
				<td style="text-align:center"><span><form action="{{ route('orders.remove', ['orderId' => $orderitem->slug, 'itemnumber' => $orderitem->itemnumber]) }}" method="POST">@csrf<input class="remove" type="submit" value="x" style="padding:0;padding-top:0;padding-bottom:0;"></form></span></td>
				<!--<td><pre style="color:white">{{ $orderitem->orderstatus }}</pre></td>-->
				</tr>                                            
			</tbody>
		@endif
	</div>
</div>