<div class="media">
	<a class="pull-left" href="">
	</a>
	<div class="media-body">
		@if ($reviewitem->ponumber)
			<tbody style="font-size:12px">
				<tr>
					<td>{{ $reviewitem->orderitems }}</td>
					<td style="text-align:center">{{ $reviewitem->itemnumber }}</td>
					<td style="text-align:center">{{ $reviewitem->itemqty }}</td>
					<td style="text-align:center">{{ $reviewitem->freeitem }}</td>
					<td style="text-align:center">{{ $reviewitem->itemprice }}</td>
					<td style="text-align:center">{{ $reviewitem->itemqty * $reviewitem->itemprice }}</td>
				</tr>                                            
			</tbody>
		@endif
	</div>
</div>