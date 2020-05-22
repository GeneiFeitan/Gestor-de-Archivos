

function agregardatos(nombre,apellido,email,telefono){

	cadena="nombre=" + nombre + 
			"&apellido=" + apellido +
			"&email=" + email +
			"&telefono=" + telefono;

	$.ajax({
		type:"POST",
		url:"../php/agregarDatos.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#tabla').load('../componentes/tabla.php');
				 $('#buscador').load('componentes/buscador.php');
				alertify.success("agregado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}

//funcion que muestra los datos del registro en la modal de actualizacion

function agregaform(datos){

	d=datos.split('||');

	$('#idpersona').val(d[0]);
	$('#nombreu').val(d[1]);
	$('#apePatU').val(d[3]);
	$('#apeMatU').val(d[4]);
	$('#fechau').val(d[7]);

	$('#emailu').val(d[6]);
	$('#telefonou').val(d[5]);
	$('#AreaTrabajou').val(d[8]);
	$('#Areau').val(d[8]);
	$('#TipoUsuariou').val(d[9]);
	
	
}

//Funcion que actualiza los datos que se agregan en la modal

function actualizaDatos(){


	id=$('#idpersona').val();
	nombre=$('#nombreu').val();
	apellidoPa=$('#apePatU').val();
	apellidoMa=$('#apeMatU').val();
	fechaNac=$('#fechau').val();

	email=$('#emailu').val();
	telefono=$('#telefonou').val();
	areaTrabajo=$('#AreaTrabajou').val();
	area=$('#Areau').val();
	tipoUsuario=$('#TipoUsuariou').val();

	cadena= "id=" + id +
			"&nombre=" + nombre + 
			"&apellidoPa=" + apellidoPa +
			"&apellidoMa=" + apellidoMa +
			"&fechaNac=" + fechaNac +
			"&email=" + email +
			"&telefono=" + telefono +
			"&areaTrabajo=" + areaTrabajo +
			"&area=" + area +
			"&tipoUsuario=" + tipoUsuario;

	$.ajax({
		type:"POST",
		url:"../php/actualizaDatos.php",
		data:cadena,
		success:function(r){
			
			
				$('#tabla').load('../componentes/tabla.php');
				alertify.success("Actualizado con exito :)");
			
				
			
		}
	});

}
// Funcion que muestra el mensaje de alerta para saber que el usuario esta seguro de eliminar el registro seleccionado
function preguntarSiNo(id){
	alertify.confirm('Eliminar Datos','¿Esta seguro de eliminar este registro?', 
					function(){ eliminarDatos(id) }
                , function(){ alertify.error('Se cancelo')});
}


//funcion que permite eliminar Registros de la tabla que muestra los usuarios
function eliminarDatos(id){

	cadena="id=" + id;

		$.ajax({
			type:"POST",
			url:"../php/eliminarDatos.php",
			data:cadena,
			success:function(r){
				
					$('#tabla').load('../componentes/tabla.php');
					alertify.success("Eliminado con exito!");
				
			}
		});
}


// Funcion que muestra el mensaje de alerta para saber que el usuario esta seguro de eliminar el registro seleccionado
function preguntarSiNoArchivos(id){
	alertify.confirm('Eliminar Datos','¿Esta seguro de eliminar este registro?', 
					function(){ eliminarDatosArchivos(id) }
                , function(){ alertify.error('Se cancelo')});
}


//funcion que permite eliminar Registros de la tabla que muestra los usuarios
function eliminarDatosArchivos(id){

	cadena="id=" + id;

		$.ajax({
			type:"POST",
			url:"../php/eliminarDatosArchivos.php",
			data:cadena,
			success:function(r){
				
				location.href="../Vista/DescargarArchivo.php";
					alertify.success("Eliminado con exito!");
				
			}
		});


		
}

function preguntarSiNoDescarga(id){
	alertify.confirm('Descargar Archivos','¿Esta seguro de descargar este archivo?', 
					function(){ descargadora(id) }
                , function(){ alertify.error('Se cancelo')});
}

function descargadora(id){

	cadena="id=" + id;

	location.href="../Controlador/descarga.php?id="	+id;



}


function preguntarSiNoEventos(id){
	alertify.confirm('Eliminar Datos','¿Esta seguro de eliminar este registro?', 
					function(){ eliminarDatosEventos(id) }
                , function(){ alertify.error('Se cancelo')});
}


//funcion que permite eliminar Registros de la tabla que muestra los usuarios
function eliminarDatosEventos(id){

	cadena="id=" + id;

		$.ajax({
			type:"POST",
			url:"../php/eliminarDatosEventos.php",
			data:cadena,
			success:function(r){
				
				location.href="../Vista/EliminarEvento.php";
					alertify.success("Eliminado con exito!");
				
			}
		});
		
}


function preguntarSiNoMinutas(id){
	alertify.confirm('Eliminar Datos','¿Esta seguro de eliminar este registro?', 
					function(){ eliminarDatosMinutas(id) }
                , function(){ alertify.error('Se cancelo')});
}


//funcion que permite eliminar Registros de la tabla que muestra los usuarios
function eliminarDatosMinutas(id){

	cadena="id=" + id;

		$.ajax({
			type:"POST",
			url:"../php/eliminarDatosMinutas.php",
			data:cadena,
			success:function(r){
				
				location.href="../Vista/EliminarMinuta.php";
					alertify.success("Eliminado con exito!");
				
			}
		});
		
}