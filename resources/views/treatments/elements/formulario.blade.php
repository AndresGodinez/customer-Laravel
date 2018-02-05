<div class="form-group">
	{{ Form::label('name', 'Nombre') }}
	{{ Form::text('name', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('amount', 'Costo') }}
	{{ Form::text('amount', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
	<button class="btn btn-primary" type="submit">Crear</button>
</div>
