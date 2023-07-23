
<h1>{{ $modo }} empleado</h1>

@if(count($errors)>0)

<div class="alert alert-danger" role="alert">
<ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
    </div>

@endif
<div class="form-group">
<label for="Nombre">Nombre</label>
<input type="text" name="Nombre"  class="form-control" value="{{isset($empleado->Nombre)?$empleado->Nombre:old('Nombre')}}" id="Nombre">
<br>
</div>
<div class="form-group">
<label for="ApellidoPaterno">ApellidoPaterno</label>
<input type="text" name="ApellidoPaterno" id="ApellidoPaterno" class="form-control" value="{{isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:old('ApellidoPaterno')}}">
<br>
</div>
<div class="form-group">
<label for="ApellidoMaterno">ApellidoMaterno</label>
<input type="text" name="ApellidoMaterno" id="ApellidoMaterno" class="form-control" value="{{isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:old('ApellidoMaterno')}}">
<br>
</div>
<div class="form-group">
<label for="Correo">Correo</label>
<input type="text" name="Correo" id="Correo" class="form-control" value="{{isset($empleado->Correo)?$empleado->Correo:old('Correo')}}">
</div>
<br>
<div class="form-group">
<label for="Foto">Foto</label>
@if(isset($empleado->Foto))
</div>
<img src="{{asset('storage').'/'.$empleado->Foto}}" class ="img-thumbnail img-fluid" width="100">
@endif
<div class="form-group">
<input type="file" name="Foto" id="Foto" class="form-control" value="" alt="">
<br>
</div>
<input type="submit" value="{{ $modo }} datos" class="btn btn-success">

<a href="{{url('empleado/')}}"class="btn btn-primary">Regresar</a>

