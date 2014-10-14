@extends('layout')
@section('content')

	<div class="hero-unit">
		<h1>This is a demo application, all rights are protected by SoftBot™</h1>
		<h2>Only demo features are available</h2>
	</div>
	<div>
		<h2>Use this menu to control remote site at Badda Link road</h2>
	</div>
	<div align="center" style="margin-top: 50px;">		
		@if ($status == 0)
			<a href="turnOn">
				<button class="btn btn-success" type="button">Open Door</button>
			</a>
		@else
			<a href="turnOff">
				<button class="btn btn-warning" type="button">Close Door</button>
			</a>
		@endif
	</div>
@stop