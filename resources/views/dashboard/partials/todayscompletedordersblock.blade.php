
		@if ($todayscompletedorder->ordernumber)
		<tbody style="font-size:8px">
			<tr>
				<!--<td>{{ $todayscompletedorder->slug }}</td>-->
				<td><a style= "float:left" href="/orders/order/{{ $todayscompletedorder->slug }}">{{ $todayscompletedorder->ponumber }}</a></td>
				<td>{{ $todayscompletedorder->branchname }}</td>
				@if ( $todayscompletedorder->urgent == 'on' )
				<strong><td style="text-align:center;padding-left:2px;padding-right:2px" class="badge badge-danger">URGENT</td></strong>
				@else
				<strong><td style="text-align:center;padding-left:2px;padding-right:2px" class="badge badge-dark">Regular</td></strong>
				@endif
				<td style="text-align:center">{{ $todayscompletedorder->totalitems }}</td>
				<td style="text-align:center">{{ $todayscompletedorder->totalqty }}</td>
				<td style="text-align:center">{{ $todayscompletedorder->totalfree }}</td>
				<td style="text-align:center">{{ number_format($todayscompletedorder->totaloriginal) }}.00 SAR</td>
				<td style="text-align:center">{{ number_format($todayscompletedorder->discount) }}.00 SAR</td>
				<td style="text-align:center">{{ number_format($todayscompletedorder->totalprice) }}.00 SAR</td>
				<td class="{{ strtolower($todayscompletedorder->status) }}">{{ $todayscompletedorder->status }} {{ $todayscompletedorder->updated_at->format('d/m/y g:iA') }}</td>

			</tr>	
		</tbody>
		@endif


           
