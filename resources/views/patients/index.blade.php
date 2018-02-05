@extends('layouts.app')
@section('content')
<div class="container">
	<div class="col-md-8 col-md-offset-2">
		<div class="panel panel-default">
			<div class="panel-heading">
				Pacientes
				<a href="{{ route('patients.create') }}" class="btn btn-sm btn-primary pull-right">Nuevo Paciente</a>
			</div>
			<div class="panel-body">
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th width="10px">id</th>
							<th>Nombre</th>
							<th>Telephone</th>
							<th>Foto</th>
							<th colspan="3">Acciones</th>
						</tr>
					</thead>
					<tbody>						
						@foreach ($patients as $patient)
						<tr>
							<td>{{ $patient->id }}</td>
							<td>{{ $patient->name }}</td>
							<td>{{ $patient->telephone }}</td>
							<td><img src="{{ $patient->photo }}" class="img img-thumbnail"></td>
							<td><a href="{{ route('patients.show', $patient->id) }}" class="btn btn-info">Detalles</a></td>
							<td><button class="btn btn-info">Actualizar</button></td>
							<td>
								{!! Form::open(['route'=> ['patients.destroy', $patient->id], 'method'=>'DELETE']) !!}
								<input type="submit" value="Eliminar", class="btn btn-danger">
								{!! Form::close() !!}
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				{{ $patients->render() }}
			</div>
		</div>
	</div>
</div>
@endsection