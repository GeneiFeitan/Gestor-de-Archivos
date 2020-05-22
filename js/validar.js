function validar(){

	var IdEvento,ubicacion,fecha,area,expresion;

	IdEvento = document.getElementById('IdEvento').value;
	ubicacion = document.getElementById('ubicacion').value;
	fecha = document.getElementById('fecha').value;
	area = document.getElementById('area').value;
	expresion = document.getElementById('expresion').value;
	var RegExPattern = /^\d{1,2}\/\d{1,2}\/\d{2,4}$/;

	if (IdEvento === "" || ubicacion === "" || area === ""){
		alert("Todos los Campos son Obligatorios");
		return false;
	}
	if ((fecha.match(RegExPattern)) && (fecha != '')){
		return true;
	}else {
		return false;
	}

	return true;
}