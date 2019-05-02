
		@if ($reviewitem->ponumber)
			<tbody style="font-size:12px">
				<tr>
					<td>{{ $reviewitem->orderitems }}</td>
					<td style="text-align:center">{{ $reviewitem->itemnumber }}</td>
					<td style="text-align:center">{{ $reviewitem->itemqty }}</td>
					<td style="text-align:center">{{ $reviewitem->freeitem }}</td>
					<td style="text-align:center">{{ number_format($reviewitem->itemprice) }}.00 SAR</td>
					<td style="text-align:center">{{ number_format($reviewitem->askedprice * $reviewitem->itemqty ) }}.00 SAR</td>
				@if ($reviewitem->askedprice == 0)
				<td style="text-align:center">{{ number_format($reviewitem->itemqty * $reviewitem->itemprice) }}.00 SAR</td>
				@else
				<td style="text-align:center">{{ number_format($reviewitem->itemqty * $reviewitem->askedprice) }}.00 SAR</td>
				@endif
				</tr>                                            
			</tbody>
		@endif
