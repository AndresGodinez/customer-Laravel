@extends('layouts.app')
@section('content')
<div class="container">
	<div class="col-md-8 col-md-offset-2">
		<div class="panel panel-default">
			<div class="panel-heading">
				Pacientes
			</div>
			<div class="panel-body">
				<img src="{{ $patient->photo }}" class="img img-rounded">
				<p><strong>id</strong></p>
				<p>{{ $patient->id }}</p>
				<p><strong>Nombre</strong></p>
				<p>{{ $patient->name }}</p>
				<p><strong>Dirección</strong></p>
				<p>{{ $patient->address }}</p>
				<p><strong>Telefóno</strong></p>
				<p>{{ $patient->telephone }}</p>
				<p><strong>Tipo Sanguineo</strong></p>
				<p>{{ $patient->bloodType }}</p>
				<p><strong>Alergías</strong></p>
				<p>{{ $patient->alergy }}</p>

			</div>
		</div>
	</div>
</div>
@endsection