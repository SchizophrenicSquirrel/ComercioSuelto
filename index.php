<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

	//funciones
	function crearselect($vector)
	{
		echo '<select name="',$vector[$i],'" id="',$vector[$i],'">';
		for($i=0;$i<count($vector);$i++)
		{
			
			echo '<option value="',$vector[$i],'">',$vector[$i],'</option>';
		}
		echo "</select>";
	}
	function crearcheckbox($vector)
	{
		while(list($clave,$valor) = each($vector))
		{
			echo "<input type='checkbox' name='",$valor,"' id='",$valor,"' value='",$clave,"'>",$valor;
		}
	}
	function crearradio($vector,$name)
	{
		$check = "checked";
		while(list($clave,$valor) = each($vector))
		{
			echo "<input type='radio' name='",$name,"' id='",$valor,"' value='",$clave,"' ",$check,">",$valor;
			$check = "";
		}
	}
	$genero = array("Hombre","Mujer");
	$dia = array();
	for($i=1;$i<32;$i++)
	{
		$dia[] = $i;
	}
	$mes = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
	$year = array();
	for($i=1900;$i<2018;$i++)
	{
		$year[] = $i;
	}

	//vectores
	$escolaridad = array("Primaria","Secundaria","Preparatoria","Licenciatura","Especialidad","Maestría","Doctorado");
	$pasatiempos = array("Leer","Estudiar","Televisión","Deportes");
	$puestos = array("Director de proyecto","Supervisor","Contador","Secretaria","Achichincle","Arquitecto de proyecto");
	$sucursales = array("Distrito Federal","Culiacan","Navolato","Chihuahua","Buenos Aires, Arg. ","Merida","Hermosillo");
	$descansos = array("Lunes","Martes","Miercoles","Jueves","Viernes","Sabado","Domingo");
	
	//formulario
	echo '<form name="datos" method="get" action="" style="width: 560px">
	<fieldset>
		<legend>Datos del empleado</legend>
		<div style = "margin-bottom:3px">
			<label style="display: inline-block;width: 33%" for="nombres">Nombres:</label>
			<label style="display: inline-block;width: 33%" for="apellidopaterno">Apellido Paterno:</label>
			<label style="display: inline-block;width: 32%" for="apellidomaterno">Apellido Materno:</label>
		</div>
		<div style = "margin-bottom:3px">
			<input type="text" name="nombres">
			<input type="text" name="apellidopaterno">
			<input type="text" name="apellidomaterno">
		</div>
		<div style = "margin-bottom:3px">
			<label style="display: inline-block;width: 32%" for="genero">Sexo:</label>',
			crearradio($genero,"Sexo"),
		'</div>
		<div style = "margin-bottom:5px">
			<label style="display: inline-block;width: 32%" for="fechadenacimiento">Fecha de nacimiento:</label>',
			crearselect($dia),crearselect($mes),crearselect($year),
		'</div>
		<div style = "margin-bottom:6px">
			<label style="display: inline-block;width: 32%" for="Escolaridad">Escolaridad:</label>',
			crearselect($escolaridad),
		'</div>
		<div style = "margin-bottom:6px">
			<label style="display: inline-block;width: 32%" for="Pasatiempo">Pasatiempo:</label>',
			crearcheckbox($pasatiempos),
		'</div>
		<div style = "margin-bottom:3px">
			<label style="display: inline-block;width: 32%" for="Puesto">Puesto:</label>
			<label style="display: inline-block;width: 33%" for="Sucursal">Sucursal para laboral:</label>
			<label style="display: inline-block;width: 32%" for="Descanso">Día de descanso:</label>
		</div>
				<div style="display: inline-block;width: 33%">',
					crearselect($puestos),
				'</div>',
				'<div style="display: inline-block;width: 33%">',
					crearselect($sucursales),
				'</div>',
				'<div style="display: inline-block;width: 33%">',
					crearselect($descansos),
				'</div>
			<div style = "margin-top:14px">
				<input type="Submit" value = "Enviar">
				<input type="reset" value = "Limpiar">
			</div>
		</fieldset>
	</form>';
?>
</body>

</html>
