@extends('layouts.app')
@section('content')
<div class="container">
	<div class="col-md-8 col-md-offset-2">
		<div class="panel panel-default">
			<div class="panel-heading">
				Nuevo Tratamiento
			</div>
			<div class="panel-body">
				{{ Form::open(['route' => 'treatments.store']) }}
				@include('treatments.elements.formulario')
				{{ Form::close() }}
			</div>
		</div>
	</div>
</div>
@endsection