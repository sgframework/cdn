
		@if ($todayscompletedorder->ordernumber)
			<tbody style="font-size:12px">
				<tr>
					<td><a style= "float:left" href="/orders/order/{{ $todayscompletedorder->slug }}">{{ $todayscompletedorder->ponumber }}</a></td>
					<td>{{ $todayscompletedorder->branchname }}</td>
					<td style="text-align:center">{{ $todayscompletedorder->totalitems }}</td>
					<td style="text-align:center">{{ $todayscompletedorder->totalqty }}</td>
					<td style="text-align:center">{{ number_format($todayscompletedorder->totalprice) }}.00 SAR</td>
					<!--<td>{{ $todayscompletedorder->updated_at->diffForHumans() }}</td>-->
					<td style="text-align:center" class="{{ strtolower($todayscompletedorder->status) }}">{{ $todayscompletedorder->updated_at->format('d/m/y g:iA') }}</td>
					<!--<td><pre><a style= "" href="/orders/order/{{ $todayscompletedorder->slug }}">{{ $todayscompletedorder->slug }}</a></pre></td>-->
				</tr>                            
			</tbody>
		@endif


           
