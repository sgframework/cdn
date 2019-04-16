<div class="media">
	<a class="pull-left" href="">
	</a>
	<div class="media-body">
		@if ($todaysreviewingorder->ordernumber)
			<tbody style="font-size:12px">
				<tr>
					<td>{{ $todaysreviewingorder->staffname }} #{{ $todaysreviewingorder->idnumber }}</td>
					<td><a style= "float:left" href="/orders/order/{{ $todaysreviewingorder->slug }}">{{ $todaysreviewingorder->ponumber }}</a></td>
					<td>{{ $todaysreviewingorder->branchname }}</td>
					<!--<td>{{ $todaysreviewingorder->totalitems }}</td>
					<td>{{ $todaysreviewingorder->totalqty }}</td>
					<td>{{ $todaysreviewingorder->totalprice }}</td>-->
					<td class="{{ strtolower($todaysreviewingorder->status) }}">{{ $todaysreviewingorder->status }}</td>
					<td>{{ $todaysreviewingorder->created_at->diffForHumans() }}</td>
					<td>{{ $todaysreviewingorder->updated_at->diffForHumans() }}</td>
					<!--<td><pre><a style= "" href="/orders/order/{{ $todaysreviewingorder->slug }}">{{ $todaysreviewingorder->slug }}</a></pre></td>-->
				</tr>                            
			</tbody>
		@endif
	</div>
</div>

           
