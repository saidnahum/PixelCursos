<div class="form-group">
  {!! Form::label('name', 'Nombre del rol: ') !!}
  {!! Form::text('name', $value=null, ['class' => ($errors->has('name')? 'form-control is-invalid' : 'form-control'), 'placeholder' => 'Escriba un nombre']) !!}
  @error('name')
      <span class="invalid-feedback">
          <strong>{{ $message }}</strong>
      </span>
  @enderror
</div>

<strong>Permisos:</strong>
<br>
@error('permissions')
  <small class="text-danger">
      <strong>{{ $message }}</strong>
  </small>
  <br>
@enderror

@foreach($permissions as $permission)
  <div>
      <label>
          {!! Form::checkbox('permissions[]', $permission->id, $checked=null, ['class' => 'mr-1']) !!}
          {{ $permission->name }}
      </label>
  </div>
@endforeach