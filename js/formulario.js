//(funcion)(){
    var usuarios = document.getElementById('usuarios'),
		username = usuarios.username,
		name = usuarios.name,
		correo = usuarios.correo,
		password = usuarios.password,
		rpassword = usuarios.rpassword,
		terminos = usuarios.terminos,
		error = document.getElementById('error');
function validarNombre(e){
    if(username.value == '' || username == null){
        console.log('Completa el Usuario');
        error.style.display = 'block';
        error.innerHTML = error.innerHTML + '<li>Ingresa Un Usuario</li>';
        e.preventDefault();
}else{
    error.style.display='none';
}
}

function validarCorreo(e){
     if(correo.value == '' || correo == null){
        console.log('Completa el correo');
        error.style.display = 'block';
        error.innerHTML = error.innerHTML + '<li>Ingresa Un Email</li>';
        e.preventDefault();
}else{
    error.style.display='none';
}
}
function validarName(e){
    if(name.value == '' || name == null){
        console.log('Introduce un nombre');
        error.style.display = 'block';
        error.innerHTML = error.innerHTML + '<li>Introduce un Nombre</li>';
        e.preventDefault();
    }else{
    error.style.display='none';
}
}
function validarPassword(e){
     if(password.value == '' || password == null){
        console.log('Ingresa una Contrase&ntilde;a');
        error.style.display = 'block';
        error.innerHTML = error.innerHTML + '<li>Ingresa una Contrase&ntilde;a</li>';
        e.preventDefault();
}else{
    error.style.display='none';
}
}
function validarRepetirPassword(e){
     if(rpassword.value == '' || rpassword == null){
        console.log('Repetir Contrase&ntilde;a');
        error.style.display = 'block';
        error.innerHTML = error.innerHTML + '<li>Repetir Contrase&ntilde;a</li>';
        e.preventDefault();
}else{
    error.style.display='none';
}
}
function validarTerminos(e){
    if(terminos.checked == false){
        console.log('Acepta Los Terminos');
        error.style.display = 'block';
        error.innerHTML = error.innerHTML + '<li>Acepta Los Terminos</li>';
        e.preventDefault();
    }else if(username.value == '' || username == null || correo.value == '' || correo == null || name.value == '' || name == null || password.value == '' || password == null || rpassword.value == '' || rpassword == null){
    error.style.display='block';
}
}

function validarForm(e){
   error.innerHTML = '';
   error.style.display = 'block';
   validarNombre(e);
   validarCorreo(e);
   validarName(e);
   validarPassword(e);
   validarRepetirPassword(e);
   validarTerminos(e);
}


usuarios.addEventListener('submit', validarForm);

//}())