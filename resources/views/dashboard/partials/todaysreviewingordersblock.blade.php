
		@if ($todaysreviewingorder->ordernumber)
			<tbody style="font-size:12px">
				<tr>
					<td><a style= "float:left" href="/orders/order/{{ $todaysreviewingorder->slug }}">{{ $todaysreviewingorder->ponumber }}</a></td>
					<td>{{ $todaysreviewingorder->branchname }}</td>
					<!--<td>{{ $todaysreviewingorder->totalitems }}</td>
					<td>{{ $todaysreviewingorder->totalqty }}</td>
					<td>{{ $todaysreviewingorder->totalprice }}</td>-->
					<td class="{{ strtolower($todaysreviewingorder->status) }}">{{ $todaysreviewingorder->status }}</td>
					<td>{{ $todaysreviewingorder->created_at->diffForHumans() }}</td>
					<td>{{ $todaysreviewingorder->updated_at->diffForHumans() }}</td>
					<!--<td style=";background-color:black;color:white;text-align:center"><span><form action="{{ route('orders.destroy', ['slug' => $todaysreviewingorder->slug, 'ponumber' => $todaysreviewingorder->ponumber]) }}" method="POST">@csrf<input class="btn btn-danger" type="submit" value="&#x2716;" style=" outline: none;padding-top: 0px;padding-bottom: 0px;border: 1px solid white;padding: 1px 1px 1px 1px;font-size: 7px;border-radius:30%"></form></span></td>-->
					<!--<td><pre><a style= "" href="/orders/order/{{ $todaysreviewingorder->slug }}">{{ $todaysreviewingorder->slug }}</a></pre></td>-->
				</tr>                            
			</tbody>
		@endif

           
