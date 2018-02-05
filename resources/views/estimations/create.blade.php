@extends('layouts.app')
@section('content')
<div class="container">
	<div class="col-md-8 col-md-offset-2">
		<div class="panel panel-default">
			<div class="panel-heading">
				Nuevo Paciente
			</div>
			<div class="panel-body">
				{{ Form::open(['route' => 'patients.store']) }}
				@include('patients.elements.formulario')
				{{ Form::close() }}
			</div>
		</div>
	</div>
</div>
@endsection