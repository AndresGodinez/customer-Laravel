@extends('layouts.app')
@section('content')
<div class="container">
	<div class="col-md-8 col-md-offset-2">
		<div class="panel panel-default">
			<div class="panel-heading">
				Tratamiento
			</div>
			<div class="panel-body">
				<p><strong>Nombre</strong></p>
				<p>{{ $treatment->name }}</p>
				<p><strong>Costo</strong></p>
				<p>{{ $treatment->amount }}</p>
				

			</div>
		</div>
	</div>
</div>
@endsection