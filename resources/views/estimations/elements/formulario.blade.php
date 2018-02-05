<div class="form-group">
	{{ Form::label('name', 'Nombre') }}
	{{ Form::text('name', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('address', 'Dirección') }}
	{{ Form::textarea('address', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('telephone', 'Telefóno') }}
	{{ Form::text('telephone', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('photo', 'Foto') }}
	{{ Form::file('photo') }}
</div>
<div class="form-group">
	{{ Form::label('bloodType', 'Tipo Sanguineo') }}
	{{ Form::select('bloodType', ['A+', 'A-', 'B+', 'B-', 'O+', 'O-'], ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('alergy', 'Alergías') }}
	{{ Form::textarea('alergy', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	<button class="btn btn-primary" type="submit">Crear</button>
</div>
