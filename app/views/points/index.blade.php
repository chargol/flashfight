@extends('layouts.skeleton')

@section('skeleton.content')
	
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center  text-uppercase">
				<h1 class="head-icon bounceIn">
					<span class="glyphicon glyphicon-star-empty"></span>
				</h1>
			</div>
		</div>
	
		<div class="row">
			<div class="col-md-6">
				<h2 class="text-center">Männer <small>({{ $men->count() }})</small></h2>
				@foreach ($men as $man)
					@include('points.partials.row-member', ['member' => $man])
				@endforeach
			</div>
			<div class="col-md-6">
				<h2 class="text-center">Frauen <small>({{ $women->count() }})</small></h2>
				@foreach ($women as $woman)
					@include('points.partials.row-member', ['member' => $woman])
				@endforeach
			</div>
		</div>
	</div>

@stop