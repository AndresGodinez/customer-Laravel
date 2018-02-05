@extends('layouts.app')
@section('content')
<div class="container">
	<div class="col-md-8 col-md-offset-2">
		<div class="panel panel-default">
			<div class="panel-heading">
				Tratamientos
				<a href="{{ route('treatments.create') }}" class="btn btn-sm btn-primary pull-right">Nuevo Tratamiento</a>
			</div>
			<div class="panel-body">
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th width="10px">id</th>
							<th>Nombre</th>
							<th>Costo</th>
							<th colspan="3">Acciones</th>
						</tr>
					</thead>
					<tbody>						
						@foreach ($treatments as $treatment)
						<tr>
							<td>{{ $treatment->id }}</td>
							<td>{{ $treatment->name }}</td>
							<td>{{ $treatment->amount }}</td>
							<td><a href="{{ route('treatments.show', $treatment->id) }}" class="btn btn-info">Detalles</a></td>
							<td>
								<a href="{{ route('treatments.edit', $treatment->id) }}" class="btn btn-warning">Actualizar</a>
							</td>
							<td>
								{!! Form::open(['route'=> ['treatments.destroy', $treatment->id], 'method'=>'DELETE']) !!}
								<input type="submit" value="Eliminar", class="btn btn-danger">
								{!! Form::close() !!}
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				{{ $treatments->render() }}
			</div>
		</div>
	</div>
</div>
@endsection