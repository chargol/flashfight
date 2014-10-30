@extends('layouts.skeleton')

@section('skeleton.content')
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4 text-center  text-uppercase">
				<h1>
					<span class="glyphicon glyphicon-user"></span>
				</h1>

				{{ Form::open() }}
					<div class="form-group">
						{{ Form::text('firstname', '', ['placesholder' => 'Vorname']) }}
						{{ Form::text('lastname', '', ['placesholder' => 'Nachname']) }}
					</div>

					<div class="form-group">
						{{ Form::text('birthday', '', ['placesholder' => 'Geburtsdatum']) }}
					</div>

					<div class="form-group">
						{{ Form::button('Anmelden') }}
					</div>
				{{ Form::close() }}
			</div>			
		</div>
	</div>
@stop