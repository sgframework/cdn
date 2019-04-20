<div class="media">
	<a class="pull-left" href="">
	
	</a>
	<div class="media-body">
	@if ($po->staffid)
	<tbody>
		<tr>
		<th>{{ $po->staffname }} #{{ $po->staffid }}</th>
		<td><a href="{{ url('/orders/order/' . $po->slug) }}">{{ $po->ponumber }}</a><span style="display:block;font-size:12px; color: gray;"></span></td>
		<td>{{ $po->branchname }}</td>
		<td>{{ $po->urgent }}</td>
		<td>{{ $po->totalitems }}</td>
		<td>{{ $po->totalqty }}</td>
		<td>{{ number_format($po->totalprice) }}.00 SAR</td>
		<td><span class="{{ strtolower($po->status) }}">{{ $po->updated_at->format('d/m/y g:iA') }}</span></td>
    </tr>
  </tbody>
	@endif
	</div>
</div>