@extends('layouts.skeleton')

@section('skeleton.content')
	
	<div class="container">
		
		<div class="row">
			<div class="col-md-12 text-center">
				<h1 class="head-icon">
					<span class="glyphicon glyphicon-star-empty"></span>
					<span class="glyphicon glyphicon-star-empty"></span>
					<span class="glyphicon glyphicon-star-empty"></span>
				</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6">
				<h2 class="text-center">Männer - {{ $menAdult->count() }}</h2>
				@foreach ($menAdult as $man)
					@include('points.partials.best-row-member', ['member' => $man])
				@endforeach
			</div>
			<div class="col-md-6">
				<h2 class="text-center">Frauen - {{ $womenAdult->count() }}</h2>
				@foreach ($womenAdult as $woman)
					@include('points.partials.best-row-member', ['member' => $woman])
				@endforeach
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<h2 class="text-center">Jungen - {{ $menYouth->count() }}</h2>
				@foreach ($menYouth as $man)
					@include('points.partials.best-row-member', ['member' => $man])
				@endforeach
				
			</div>
			<div class="col-md-6">
				<h2 class="text-center">Mädchen - {{ $womenYouth->count() }}</h2>
				@foreach ($womenYouth as $woman)
					@include('points.partials.best-row-member', ['member' => $woman])
				@endforeach
			</div>
		</div>

	</div>

@stop