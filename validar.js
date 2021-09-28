const validar = () => {
    let nombre, fecha, correo;
    let regexCorreo = /[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z]+/;
    let regexNombre =  /\d/;

    nombre = document.getElementById("nombre").value;
    fecha = document.getElementById("fecha").value;
    correo = document.getElementById("correo").value;
    

    if(!nombre || !fecha || !correo){
        alert("Todos los campos son obligatorios");
        return false;
    }else if(nombre.length >= 30){
        alert("El nombre es muy largo");
        return false;
    }else if(!regexCorreo.test(correo)){
        alert("Correo invalido");
        return false;
    }else if(regexNombre.test(nombre)){
        alert("Nombre invalido");
        return false;
    }
    
}

const validarmodificar = () => {
    let nombre, fecha, correo;
    let regexCorreo = /[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z]+/;
    let regexNombre =  /\d/;

    nombre = document.getElementById("nombre").value;
    fecha = document.getElementById("fecha").value;
    correo = document.getElementById("correo").value;
    
    if(!nombre || !fecha || !correo){
        alert("Todos los campos son obligatorios");
        return false;
    }else if(nombre.length >= 15){
        alert("El nombre es muy largo");
        return false;
    }else if(!regexCorreo.test(correo)){
        alert("Correo invalido");
        return false;
    }else if(regexNombre.test(nombre)){
        alert("Nombre invalido");
        return false;
    }

}
