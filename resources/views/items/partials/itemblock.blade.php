	@if ($item->itemname)
	<tbody>
		<tr>
			<td style="text-align:center;">{{ $item->itemid }}</td>
			<td style="text-align:center;"><img class="media-object" alt="{{ $item->getItem() }}" src="{{ asset('image/sgimg.png') }}" style="width:15px; height:15px; border-radius:50%"></td>
			<td style="padding-left:14px">{{ $item->itemname }}</td>
			<td style="padding-left:14px">{{ $item->itemnumber }}</td>
			<td style="padding-left:14px">{{ $item->itemoldprice }} SR</td>
			<td style="padding-left:14px">{{ $item->getItemPrice() }} SR</td>
			<td style="padding-left:14px">{{ $item->itemsku }}</td>
			<td style="padding-left:14px">{{ $item->plant }}</td>
			<td style="padding-left:14px">{{ $item->instock }}</td>
			<td style="padding-left:14px">{{ $item->type }}</td>
			<td style="padding-left:14px">{{ $item->itempic }}</td>
    </tr>
  </tbody>
	@endif