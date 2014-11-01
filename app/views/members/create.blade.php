@extends('layouts.skeleton')

@section('skeleton.content')
	<div class="container">
		<div class="row form-create-member">
			<div class="col-md-6 col-md-offset-3 text-center  text-uppercase">
				<h1 class="head-icon animated bounceInDown">
					<span class="glyphicon glyphicon-user"></span>
				</h1>

				{{ Form::open(['method' => 'POST', 'route' => 'member.store']) }}
					<div class="form-group">
						{{ Form::text('firstname', '', ['placeholder' => 'Vorname', 'class' => 'form-control text-center']) }}
					</div>

					<div class="form-group">
						{{ Form::text('lastname', '', ['placeholder' => 'Nachname', 'class' => 'form-control text-center']) }}
					</div>

					<div class="form-group">
						{{ Form::text('birthday', '', ['placeholder' => 'Geburtsdatum', 'class' => 'form-control text-center']) }}
					</div>

					<div class="form-group">
						{{ Form::radio('gender', 'm', true, ['id' => 'checkMen']) }} {{ Form::label('checkMen', 'Männlich') }}
						{{ Form::radio('gender', 'w', false, ['id' => 'checkWomen']) }} {{ Form::label('checkWomen', 'Weiblich') }}
					</div>

					<div class="form-group">
						{{ Form::button('Anmelden', ['class' => 'btn btn-default btn-block', 'type' => 'submit']) }}
					</div>
				{{ Form::close() }}
			</div>			
		</div>
	</div>

	<div class="container-fluid info-panel-create-member">
		<div class="row">
			<div class="col-md-3 col-md-offset-3 counter">
				<h2>Teilnehmer</h2>
				<p class="animated bounceInUp">{{ $countMembers }}</p>
			</div>
			<div class="col-md-3">
				<h3>Letzte Anmeldungen</h3>
				@foreach ($lastMembers as $member)
					<div class="row history-member animated fadeIn">
						<div class="col-md-10">
							<p>	{{ $member->name() .' (#'. $member->id .')' }} </p>
						</div>
						<div class="col-md-2">
							{{ Form::open(['method' => 'DELETE', 'route' => ['member.destroy', $member->id]]) }}
								<button type="submit" class="btn btn-danger btn-xs">
									<span class="glyphicon glyphicon-trash"></span>
								</button>
							{{ Form::close() }}			
						</div>
						
					</div>
				
				@endforeach
			</div>
		</div>
	</div>
@stop