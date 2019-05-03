
		@if ($todayssubmittedorder->ordernumber)
		<tbody style="font-size:8px">
			<tr>
				<!--<td>{{ $todayssubmittedorder->slug }}</td>-->
				<td><a style= "float:left" href="/orders/order/{{ $todayssubmittedorder->slug }}">{{ $todayssubmittedorder->ponumber }}</a></td>
				<td>{{ $todayssubmittedorder->branchname }}</td>
				@if ( $todayssubmittedorder->urgent == 'on' )
				<strong><td style="text-align:center;padding-left:2px;padding-right:2px" class="badge badge-danger">URGENT</td></strong>
				@else
				<strong><td style="text-align:center;padding-left:2px;padding-right:2px" class="badge badge-dark">Regular</td></strong>
				@endif
				<td style="text-align:center">{{ $todayssubmittedorder->totalitems }}</td>
				<td style="text-align:center">{{ $todayssubmittedorder->totalqty }}</td>
				<td style="text-align:center">{{ $todayssubmittedorder->totalfree }}</td>
				<td style="text-align:center">{{ number_format($todayssubmittedorder->totaloriginal) }}.00 SAR</td>
				<td style="text-align:center">{{ number_format($todayssubmittedorder->discount) }}.00 SAR</td>
				<td style="text-align:center">{{ number_format($todayssubmittedorder->totalprice) }}.00 SAR</td>
				<td class="{{ strtolower($todayssubmittedorder->status) }}">{{ $todayssubmittedorder->status }} {{ $todayssubmittedorder->updated_at->format('d/m/y g:iA') }}</td>
			</tr>	
		</tbody>
		@endif


           
