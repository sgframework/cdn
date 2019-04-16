<div class="media">
	<a class="pull-left" href="">
	</a>
	<div class="media-body">
		@if ($todaysjustcreatedorder->ordernumber)
			<tbody style="font-size:12px">
				<tr>
					<td>{{ $todaysjustcreatedorder->staffname }} #{{ $todaysjustcreatedorder->idnumber }}</td>
					<td><a style= "float:left" href="/orders/order/{{ $todaysjustcreatedorder->slug }}">{{ $todaysjustcreatedorder->ponumber }}</a></td>
					<td>{{ $todaysjustcreatedorder->branchname }}</td>
					<!--<td>{{ $todaysjustcreatedorder->totalitems }}</td>
					<td>{{ $todaysjustcreatedorder->totalqty }}</td>
					<td>{{ $todaysjustcreatedorder->totalprice }}</td>-->
					<td class="{{ strtolower($todaysjustcreatedorder->status) }}">{{ $todaysjustcreatedorder->status }}</td>
					<td>{{ $todaysjustcreatedorder->created_at->diffForHumans() }}</td>
					<td>{{ $todaysjustcreatedorder->updated_at->diffForHumans() }}</td>
					<!--<td><pre><a style= "" href="/orders/order/{{ $todaysjustcreatedorder->slug }}">{{ $todaysjustcreatedorder->slug }}</a></pre></td>-->
				</tr>                            
			</tbody>
		@endif
	</div>
</div>

           
