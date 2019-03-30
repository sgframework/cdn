
	<div class="media">
	<a class="pull-left" href="">
	<img class="media-object" alt="{{ $order->ordernumber }}" src="{{ asset('image/sgimg.png') }}" style="width:40px; height:40px; float:left; border-radius:50%; margin-right:25px;">
	</a>
	<div class="media-body">
	@if ($order->ordernumber)
	<table id="myTable">
		<thead>
			<tr>
				<th>
					1
				</th>
				<th>
					2
				</th>
				<th>
					3
				</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>
					1	
				</td>
				<td>
					2
				</td>
				<td>
					3
				</td>
				<td>
				</td>
			</tr>
		</tbody>
	</table>

	<strong>{{ $order->getStaffName }}</strong>
	<p class="media-heading">{{ $order->staffid }}</strong><a href=""><!----></a> <span style="display:block;font-size:12px; color: gray;"></span></h6>
	<p class="media-heading">{{ $order->ponumber }}<a href=""><!----></a> <span style="display:block;font-size:12px; color: gray;"></span></h6>
	<p class="media-heading">{{ $order->branchnumber }}<a href=""><!----></a> <span style="display:block;font-size:12px; color: gray;"></span></h6>
	<p class="media-heading">{{ $order->branchname }}<a href=""><!----></a> <span style="display:block;font-size:12px; color: gray;"></span></h6>

		<span>Item# {{ $order->itemnumber }}</span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<span>Name: {{ $order->orderitems }}</span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<span>Qty {{ $order->itemqty }}</span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<span>Free: {{ $order->freeitem }}</span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<span>Price: {{ $order->itemprice }}</span>

        @endif
	</div>
</div>