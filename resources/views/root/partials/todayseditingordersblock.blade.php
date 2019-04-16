<div class="media">
	<a class="pull-left" href="">
	</a>
	<div class="media-body">
		@if ($todayseditingorder->ordernumber)
			<tbody style="font-size:12px">
				<tr>
					<td>{{ $todayseditingorder->staffname }} #{{ $todayseditingorder->idnumber }}</td>
					<td><a style= "float:left" href="/orders/order/{{ $todayseditingorder->slug }}">{{ $todayseditingorder->ponumber }}</a></td>
					<td>{{ $todayseditingorder->branchname }}</td>
					<!--<td>{{ $todayseditingorder->totalitems }}</td>
					<td>{{ $todayseditingorder->totalqty }}</td>
					<td>{{ $todayseditingorder->totalprice }}</td>-->
					<td class="{{ strtolower($todayseditingorder->status) }}">{{ $todayseditingorder->status }}</td>
					<td>{{ $todayseditingorder->created_at->diffForHumans() }}</td>
					<td>{{ $todayseditingorder->updated_at->diffForHumans() }}</td>
					<!--<td><pre><a style= "" href="/orders/order/{{ $todayseditingorder->slug }}">{{ $todayseditingorder->slug }}</a></pre></td>-->
				</tr>                            
			</tbody>
		@endif
	</div>
</div>

           
