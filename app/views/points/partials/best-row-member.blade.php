<div class="row row-member">
	<div class="col-md-9">
		{{ $member->name() ." <i>(". $member->age . "J)</i>"  }}
	</div>
	<div class="col-md-3">
		{{ $member->points or '0' }} P.
	</div>
</div>