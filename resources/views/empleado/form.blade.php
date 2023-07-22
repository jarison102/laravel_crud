formulario que tendra datos en comun

<h1>{{ $modo }} empleado</h1>
<label for="Nombre">Nombre</label>
<input type="text" name="Nombre"  value="{{isset($empleado->Nombre)?$empleado->Nombre:''}}" id="Nombre">
<br>
<label for="ApellidoPaterno">ApellidoPaterno</label>
<input type="text" name="ApellidoPaterno" id="ApellidoPaterno" value="{{isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:''}}">
<br>
<label for="ApellidoMaterno">ApellidoMaterno</label>
<input type="text" name="ApellidoMaterno" id="ApellidoMaterno" value="{{isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:''}}">
<br>
<label for="Correo">Correo</label>
<input type="text" name="Correo" id="Correo" value="{{isset($empleado->Correo)?$empleado->Correo:''}}">
<br>
<label for="Foto">Foto</label>
@if(isset($empleado->Foto))
<img src="{{asset('storage').'/'.$empleado->Foto}}" width="100">
@endif
<input type="file" name="Foto" id="Foto" value="" alt="">
<br>

<input type="submit" value="{{ $modo }} datos">

<a href="{{url('empleado/')}}">Regresar</a>

