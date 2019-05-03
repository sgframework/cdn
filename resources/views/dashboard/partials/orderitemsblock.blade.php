<style>
input.remove {
	padding:0;
		padding-top:0;
		padding-bottom:0;

width: 2px;
height:2px;
}
</style>


		@if ($orderitem->itemnumber)
			<tbody style="font-size:12px">
				<tr>
				<!--<td>{{ $orderitem->itemnumber }}</td>-->
				<td>{{ $orderitem->orderitems }}</td>
				<td style="text-align:center">{{ $orderitem->itemqty }}</td>
				<td style="text-align:center">{{ $orderitem->freeitem }}</td>
				@if ($orderitem->askedprice >= $orderitem->itemprice)
				<td style="text-align:center">{{ number_format($orderitem->itemprice) }}.00 SAR</td>
				<td style="text-align:center;color:red">0.00 SAR</td>
				@elseif ($orderitem->askedprice == 0)
				<td style="text-align:center">{{ number_format($orderitem->itemprice) }}.00 SAR </td>
				<td style="text-align:center">{{ number_format($orderitem->askedprice) }}.00 SAR</td>
				
				@elseif ($orderitem->askedprice < $orderitem->itemprice)
				<td style="text-align:center;color:green">{{ number_format($orderitem->itemprice) }}.00 SAR  <span style="" class="badge completed">{{ - number_format($orderitem->itemprice - $orderitem->askedprice) }}.00</span></td>
				<td style="text-align:center;color:green">{{ number_format($orderitem->askedprice) }}.00 SAR</td>

				@else
				<td style="text-align:center">{{ number_format($orderitem->itemprice) }}.00 SAR </td>
				<td style="text-align:center">{{ number_format($orderitem->askedprice) }}.00 SAR</td>
								@endif


				@if ($orderitem->askedprice >= $orderitem->itemprice)

				<td style="text-align:center">{{ number_format($orderitem->itemqty * $orderitem->itemprice) }}.00 SAR</td>
				@elseif ($orderitem->askedprice == 0)
				<td style="text-align:center">{{ number_format($orderitem->itemqty * $orderitem->itemprice) }}.00 SAR</td>
				@elseif ($orderitem->askedprice < $orderitem->itemprice)

				<td style="text-align:center"><span style="" class="badge badge-light">{{ number_format($orderitem->itemqty * $orderitem->itemprice) }}.00</span> <span style="" class="badge completed">-{{ number_format(($orderitem->itemqty * $orderitem->itemprice) - ($orderitem->itemqty * $orderitem->askedprice)) }}.00</span> <span  class="badge badge-danger"> {{ number_format($orderitem->itemqty * $orderitem->askedprice) }}.00 SAR </span></td>
				@endif
				
				@if ( $orderitem->orderstatus == 'Submitted')

				@elseif ( $orderitem->orderstatus == 'Completed' )

				@elseif ( $orderitem->orderstatus == 'Reviewing' )

				@elseif ( $orderitem->orderstatus == 'Editing' )
				<td style=";background-color:black;color:white;text-align:center"><span><form action="{{ route('orders.remove', ['slug' => $orderitem->slug, 'itemnumber' => $orderitem->itemnumber]) }}" method="POST">@csrf<input class="btn btn-danger" type="submit" value="&#x2716;" style=" outline: none;padding-top: 0px;padding-bottom: 0px;border: 1px solid white;padding: 1px 1px 1px 1px;font-size: 7px;border-radius:30%"></form></span></td>
				@else

				@endif
				<!--<td><pre style="color:white">{{ $orderitem->orderstatus }}</pre></td>-->
				</tr>                                            
			</tbody>
		@endif
