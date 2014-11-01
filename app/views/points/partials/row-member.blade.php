<div class="row row-member">
	<div class="col-md-2">
		<strong>#{{ $member->id }}</strong>
	</div>
	<div class="col-md-4">
		{{ $member->name() }}
	</div>
	<div class="col-md-6 text-right">
		@if (is_null($member->points))
			{{ Form::open(['method' => 'POST', 'route' => ['point.create', $member->id] ]) }}	
				{{ Form::text('points', '', ['placeholder' => 'Punkte', 'class' => 'form-control input-points text-center']) }}
				
				<button type="submit" class="btn btn-default btn-xs">
					<span class="glyphicon glyphicon-ok"></span>
				</button>
			{{ Form::close() }}
		@else
			<div class="points">
				{{ $member->points }} P. 
				<a href="{{ route('point.destroy', $member->id) }}" class="btn btn-default btn-xs">
					<span class="glyphicon glyphicon-remove"></span>
				</a> 
			</div>
		@endif
	</div>
</div>