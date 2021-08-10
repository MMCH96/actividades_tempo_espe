function validar(){
    var nombre, apellido, correo, usuario, contrasena, telefono;
    nombre=document.getElementById('nombre').value;
    apellido=document.getElementById('apellido').value;
    correo=document.getElementById('correo').value;
    usuario=document.getElementById('usuario').value;
    contrasena=document.getElementById('clave').value;
    telefono=document.getElementById('telefono').value;
    if(nombre==""){
      alert("Nombre vacio");
      return false;
    }else if (nombre.length>30) {
        alert("Nombre demasiado largo");
        return false;

    }else if (apellido.length>30) {
       alert("Apellido demasiado largo");
        return false;

    }else if (correo.length>50) {
       alert("Correo invalido");
        return false;

    }else if (expresionR.test(correo)>50) {
       alert("Correo invalido");
        return false;

    }else if (usuario.length>10 || clave.length) {
       alert("Correo invalido");
        return false;
    }else if (clave.>50) {
       alert("Correo invalido");
        return false;

    }
}


/*
function validar(){
    var nombre, apellido, correo, usuario, contrasena, telefono;
    nombre=document.getElementById('nombre').value;
    apellido=document.getElementById('apellido').value;
    correo=document.getElementById('correo').value;
    usuario=document.getElementById('usuario').value;
    contrasena=document.getElementById('clave').value;
    telefono=document.getElementById('telefono').value;

    expresionR=/\w+@\w+\.+[a-z]/;
    
    if(nombre==" "){
      alert("Nombre vacio");
      return false;

    }else if (nombre.length>30) {
        alert("Nombre demasiado largo");
        return false;

    }else if (apellido.length>30) {
       alert("Apellido demasiado largo");
        return false;

    }else if (correo.length>50) {
       alert("Correo invalido");
        return false;

    }else if (expresionR.test(correo)>50) {
       alert("Correo invalido");
        return false;

    }else if (usuario.length>10 || clave.length) {
       alert("Correo invalido");
        return false;
    }else if (clave.>50) {
       alert("Correo invalido");
        return false;

    }

}
+/