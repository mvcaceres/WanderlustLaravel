
    var txtNombre = document.querySelector('input[name=name]');
    var txtApellido = document.querySelector('input[name=apellido]');
    var txtTelefono = document.querySelector('input[name=telefono]');
    var txtCorreo = document.querySelector('input[name=email]');
    var txtProvincia = document.querySelector('select[name=provincia]');
    var txtPassword = document.querySelector('input[name=password]');
    var txtPasswordConfirmation = document.querySelector('input[name=password_confirmation]');
    var formulario = document.querySelector('.theForm');

//VALIDACION FORMULARIO

    //Test nombre obligatorio
txtNombre.onblur = function() {
    if(this.value.trim() == ''){
        alert('El campo de Nombre no puede estar vacio');
        name.style.borderColor = "red";
        lblname.style.color = "red";

    } else if(this.value.length <= 3){
        alert('El campo Nombre debe tener un minimo de 3 letras');

    }
}

 //Test apellido obligatorio
 txtApellido.onblur = function () {
    if(this.value.trim() == ''){
        alert('El campo de Apellido no puede estar vacio');
        apellido.style.borderColor = "red";
        lblapellido.style.color = "red";
    } else if(this.value.length <= 3){
        alert('El campo Apellido debe tener un minimo de 3 letras');

    }
}


//Validacion corre electronico
var regexMail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

txtCorreo.onblur = function (){
    if (this.value.trim() == ''){
        alert("El campo email no puede estar vacio");

    } else if(!regexMail.test(this.value)){
        alert ("El campo email no tiene un formato de email valido");

    }
}



function validar(){
    if(document.getElementById('name').value.length < 2 ){
        todo_correcto = false;
    }
    if(document.getElementById('apellido').value.length < 2 ){
        todo_correcto = false;
    }

    if(document.getElementById('direccion').value.length < 10 ){
        todo_correcto = false;
    }

    var expresion = /^[a-z][\w.-]+@\w[\w.-]+\.[\w.-]*[a-z][a-z]$/i;
    var email = document.txtCorreo.value;
    if (!expresion.test(email)){
        todo_correcto = false;
    }

}
