<div class="media">
	<a class="pull-left" href="">
	</a>
	<div class="media-body">
		@if ($todayssubmittedorder->ordernumber)
			<tbody style="font-size:12px">
				<tr>
					<td><a style= "float:left" href="/orders/order/{{ $todayssubmittedorder->slug }}">{{ $todayssubmittedorder->ponumber }}</a></td>
					<td>{{ $todayssubmittedorder->branchname }}</td>
					<td style="text-align:center">{{ $todayssubmittedorder->totalitems }}</td>
					<td style="text-align:center">{{ $todayssubmittedorder->totalqty }}</td>
					<td style="text-align:center">{{ number_format($todayssubmittedorder->totalprice) }}.00 SAR</td>
					<!--<td>{{ $todayssubmittedorder->updated_at->diffForHumans() }}</td>-->
					<td style="text-align:center" class="{{ strtolower($todayssubmittedorder->status) }}">{{ $todayssubmittedorder->updated_at->format('d/m/y g:iA') }}</td>
					<!--<td><pre><a style= "" href="/orders/order/{{ $todayssubmittedorder->slug }}">{{ $todayssubmittedorder->slug }}</a></pre></td>-->
				</tr>                            
			</tbody>
		@endif
	</div>
</div>

           
