
	<div class="media">
	<a class="pull-left" href="">
	</a>
	<div class="media-body">
	@if ($idnumber->idnumber)
		{{ Auth::user()->idnumber }}
    @endif
	</div>
</div>