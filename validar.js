function validar() {
	var Usuario,Contraseña;
	var roberto=["gerencia","gerencia"]
	var rodrigo=["informatica","informatica"]
	var juan=["juridico","juridico"]
	var cristian=["recursos","recursos"]
	Usuario = document.getElementById('Usuario').value;
	Contraseña = document.getElementById('Contraseña').value;
	
	if(Usuario==roberto[0]){
		if(Contraseña==roberto[1]){
			alert("bienvenido usuario gerencia");
			return false;
			
		}
	}
	if(Usuario==rodrigo[0]){
		if(Contraseña==rodrigo[1]){
			alert("bienvenido usuario informatica");
			return false;
		}
	}
	if(Usuario==juan[0]){
		if(Contraseña==juan[1]){
			alert("bienvenido usuario juridico");
			return false;
		}
	}
	if(Usuario==cristian[0]){
		if(Contraseña==cristian[1]){
			alert("bienvenido usuario RRHH");
			return false;
		}
	}

	if (Contraseña === "" || Usuario ==="") {
		alert("Todos los campos son obligatorios");
		return false;
	}
	else if (Contraseña.length<8 ) {
		alert("La Contraseña debe tener como minimo 8 caracteres.")
		return false;
	}
}