formulario que tendra datos en comun


<label for="Nombre">Nombre</label>
<input type="text" name="Nombre"  value="{{$empleado->Nombre}}" id="Nombre">
<br>
<label for="ApellidoPaterno">ApellidoPaterno</label>
<input type="text" name="ApellidoPaterno" id="ApellidoPaterno" value="{{$empleado->ApellidoPaterno}}">
<br>
<label for="ApellidoMaterno">ApellidoMaterno</label>
<input type="text" name="ApellidoMaterno" id="ApellidoMaterno" value="{{$empleado->ApellidoMaterno}}">
<br>
<label for="Correo">Correo</label>
<input type="text" name="Correo" id="Correo" value="{{$empleado->Correo}}">
<br>
<label for="Foto">Foto</label>
<img src="{{asset('storage').'/'.$empleado->Foto}}" width="100">
<input type="file" name="Foto" id="Foto" value="" alt="">
<br>
<input type="submit" value="Enviar">