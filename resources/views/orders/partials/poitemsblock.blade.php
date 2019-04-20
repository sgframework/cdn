<div class="media">
	<a class="pull-left" href="">
	
	</a>
	<div class="media-body">
	@if ($poitem->staffid)
	<tbody>
		<tr>
		<td>{{ $poitem->orderitems }}</td>
		<td>{{ $poitem->itemqty }}</td>
		<td>{{ $poitem->itemfree }}</td>
		<td>{{ $poitem->itemprice }}</td>
		

	</tr>
  </tbody>
	@endif
	</div>
</div>