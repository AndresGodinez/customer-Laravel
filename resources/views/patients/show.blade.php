{{-- {{ dd($patient->prescriptions) }} --}}
@extends('layouts.app')
@section('content')
<div class="container">
	<div class="col-md-8 col-md-offset-2">
		<div class="panel panel-default">
			<div class="panel-heading">
				Paciente {{ $patient->name }}
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
		@if (count($patient->expedient))
		<div class="panel panel-default">
			<div class="panel-heading">
				Fotos del paciente
			</div>
			<div class="panel-body">
				<div class="row">
					@foreach ($patient->expedient as $expedient)
					<div class="col-md-3">
						<figure>
							<img src="{{ $expedient->photo }}" class="img-rounded img-responsive thumbnail">
							<figcaption>
								{{ $expedient->comment }}
							</figcaption>
						</figure>
					</div>
					@endforeach
				</div>
			</div>
		</div>
		@endif
		@if (count($patient->estimations))
		<div class="panel panel-default">
			<div class="panel-heading">
				Presupuestos
			</div>
			<div class="panel-body">
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th width="10px"> Id </th>
							<th>Fecha</th>
							<th>Estatus</th>
							<th>Subtotal</th>
							<th>Balance</th>
							<th>Total</th>
							<th colspan="3">Acciones</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($patient->estimations as $estimation)
						<tr>
							<td>{{ $estimation->id }}</td>
							<td>{{ $estimation->created_at }}</td>
							<td>{{ $estimation->status }}</td>
							<td>{{ $estimation->subtotal }}</td>
							<td>{{ $estimation->balance }}</td>
							<td>{{ $estimation->total }}</td>
							<td>Detalles</td>
							<td>Actualizar</td>
							<td>Eliminar</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
		@endif
		@if (count($patient->prescriptions))
		<div class="panel panel-default">
			<div class="panel-heading">
				Recetas
			</div>
			<div class="panel-body">
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th width="10px"> Id </th>
							<th>Fecha</th>
							<th>Resumen</th>
							<th colspan="3">Acciones</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($patient->prescriptions as $prescription)
						<tr>
							<td>{{ $prescription->id }}</td>
							<td>{{ $prescription->created_at }}</td>
							<td>{{ $prescription->body }}</td>
							<td>Detalles</td>
							<td>Actualizar</td>
							<td>Eliminar</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
		@endif
		
	</div>
</div>
@endsection