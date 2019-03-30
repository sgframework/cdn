<div class="media">
	<a class="pull-left" href="">
	<img class="media-object" alt="{{ $item->getItem() }}" src="{{ asset('image/sgimg.png') }}" style="width:40px; height:40px; float:left; border-radius:50%; margin-right:25px;">
	</a>
	<div class="media-body">
	@if ($item->itemname)
		<h6 class="media-heading">{{ $item->itemname }}<a href=""><!----></a> <span style="display:block;font-size:12px; color: gray;"></span></h6>
		<span>Material# {{ $item->itemnumber }}</span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<span>Price: {{ $item->getItemPrice() }} SAR</span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<span>SKU# {{ $item->itemsku }}</span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<span>Plant: {{ $item->plant }}</span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<span>InStock: {{ $item->instock }}</span>|&nbsp;&nbsp;&nbsp;<span>Picture: {{ $item->itempic }}</span>
    @endif
	</div>
</div>