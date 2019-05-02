
		@if ($yesterdaysorder->ordernumber)
			<tbody style="font-size:12px">
				<tr>
					<td style="font-size:10px"><a style= "float:left" href="/orders/order/{{ $yesterdaysorder->slug }}">{{ $yesterdaysorder->ponumber }}</a></td>
					<!--<td class="{{ strtolower($yesterdaysorder->status) }}">{{ $yesterdaysorder->status }}</td>-->
					<td style="font-size:10px">{{ $yesterdaysorder->branchname }}</td>
					<td style="font-size:10px;text-align:center">{{ $yesterdaysorder->totalitems }}</td>
					<td style="font-size:10px;text-align:center">{{ $yesterdaysorder->totalqty }}</td>
					<td style="font-size:10px;text-align:center">{{ number_format($yesterdaysorder->totalprice) }}.00 SAR</td>
					<td style="font-size:8px;"class="{{ strtolower($yesterdaysorder->status) }}">{{ $yesterdaysorder->updated_at->diffForHumans() }}</td>
					<!--<td><pre><a style= "" href="/orders/order/{{ $yesterdaysorder->slug }}">{{ $yesterdaysorder->slug }}</a></pre></td>-->
				</tr>                                            
			</tbody>
		@endif

