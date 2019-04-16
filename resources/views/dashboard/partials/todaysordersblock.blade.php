<div class="media">
	<a class="pull-left" href="">
	</a>
	<div class="media-body">
		@if ($thisdayorder->ordernumber)
			<tbody style="font-size:12px">
				<tr>
					<td><a style= "float:left" href="/orders/order/{{ $thisdayorder->slug }}">{{ $thisdayorder->ponumber }}</a></td>
					<td>{{ $thisdayorder->branchname }}</td>
					<td>{{ $thisdayorder->totalitems }}</td>
					<td>{{ $thisdayorder->totalqty }}</td>
					<td>{{ $thisdayorder->totalprice }}</td>
					<!--<td>{{ $thisdayorder->updated_at->diffForHumans() }}</td>-->
					<td class="{{ strtolower($thisdayorder->status) }}">{{ $thisdayorder->status }}</td>
					<!--<td><pre><a style= "" href="/orders/order/{{ $thisdayorder->slug }}">{{ $thisdayorder->slug }}</a></pre></td>-->
				</tr>                            
				<!--{{ $sumthisdayorders }}-->          
			</tbody>
		@endif
	</div>
</div>

           
