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
				@if ($orderitem->askedprice >= $orderitem->itemnewprice)
				<td style="text-align:center">{{ number_format($orderitem->itemoldprice) }}.00 SAR</td>
				<td style="text-align:center">{{ number_format($orderitem->itemnewprice) }}.00 SAR</td>
				<td style="text-align:center;color:red">0.00 SAR</td>
				@elseif ($orderitem->askedprice == 0)
				<td style="text-align:center">{{ number_format($orderitem->itemoldprice) }}.00 SAR </td>
				<td style="text-align:center">{{ number_format($orderitem->itemnewprice) }}.00 SAR </td>
				<td style="text-align:center">{{ number_format($orderitem->askedprice) }}.00 SAR</td>
				
				@elseif ($orderitem->askedprice < $orderitem->itemnewprice)
				<td style="text-align:center;color:green">{{ number_format($orderitem->itemoldprice) }}.00 SAR  <span style="" class="badge completed">{{ - number_format($orderitem->itemoldprice - $orderitem->askedprice) }}.00</span></td>
				<td style="text-align:center;color:green">{{ number_format($orderitem->itemnewprice) }}.00 SAR  <span style="" class="badge completed">{{ - number_format($orderitem->itemnewprice - $orderitem->askedprice) }}.00</span></td>
				<td style="text-align:center;color:green">{{ number_format($orderitem->askedprice) }}.00 SAR</td>

				@else
				<td style="text-align:center">{{ number_format($orderitem->itemoldprice) }}.00 SAR </td>
				<td style="text-align:center">{{ number_format($orderitem->itemnewprice) }}.00 SAR </td>
				<td style="text-align:center">{{ number_format($orderitem->askedprice) }}.00 SAR</td>
								@endif


				@if ($orderitem->askedprice >= $orderitem->itemnewprice)

				<td style="text-align:center">{{ number_format($orderitem->itemqty * $orderitem->itemnewprice) }}.00 SAR</td>
				@elseif ($orderitem->askedprice == 0)
				<td style="text-align:center">{{ number_format($orderitem->itemqty * $orderitem->itemnewprice) }}.00 SAR</td>
				@elseif ($orderitem->askedprice < $orderitem->itemnewprice)

				<td style="text-align:center"><span style="" class="badge badge-light">{{ number_format($orderitem->itemqty * $orderitem->itemnewprice) }}.00</span> <span style="" class="badge completed">-{{ number_format(($orderitem->itemqty * $orderitem->itemnewprice) - ($orderitem->itemqty * $orderitem->askedprice)) }}.00</span> <span  class="badge badge-danger"> {{ number_format($orderitem->itemqty * $orderitem->askedprice) }}.00 SAR </span></td>
				@endif
				
				@if ( $orderitem->orderstatus == 'Submitted')

				@elseif ( $orderitem->orderstatus == 'Completed' )

				@elseif ( $orderitem->orderstatus == 'Reviewing' )

				@elseif ( $orderitem->orderstatus == 'Editing' )
				<td style="text-align:center"><span><form action="{{ route('orders.remove', ['slug' => $orderitem->slug, 'itemnumber' => $orderitem->itemnumber]) }}" method="POST">@csrf<center><input  class="close" aria-label="Close"  value="&#x2716;" style=" outline: none;padding-top: 0px;background-color:red;color:white;padding-right: 0px;text-align:center;border: 1px solid white;padding: 4px 4px 4px 4px;font-size: 10px;border-radius:30%" type="submit"></center></form></span></td>
				@else

				@endif
				<!--<td><pre style="color:white">{{ $orderitem->orderstatus }}</pre></td>-->
				</tr>                                            
			</tbody>
		@endif
