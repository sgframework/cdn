<div class="media">
	<a class="pull-left" href="">
	</a>
	<div class="media-body">
		@if ($yesterdaysorder->ordernumber)
			<tbody style="font-size:12px">
				<tr>
					<td><a style= "float:left" href="/orders/order/{{ $yesterdaysorder->slug }}">{{ $yesterdaysorder->ponumber }}</a></td>
					<!--<td class="{{ strtolower($yesterdaysorder->status) }}">{{ $yesterdaysorder->status }}</td>-->
					<td>{{ $yesterdaysorder->branchname }}</td>
					<td>{{ $yesterdaysorder->totalitems }}</td>
					<td>{{ $yesterdaysorder->totalqty }}</td>
					<td>{{ $yesterdaysorder->totalprice }}</td>
					<!--<td>{{ $yesterdaysorder->updated_at->diffForHumans() }}</td>-->
					<!--<td><pre><a style= "" href="/orders/order/{{ $yesterdaysorder->slug }}">{{ $yesterdaysorder->slug }}</a></pre></td>-->
				</tr>                                            
			</tbody>
		@endif
	</div>
</div>

           
