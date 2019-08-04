//https://datosgobar.github.io/georef-ar-api/ API gobierno

const ciudad = document.getElementById('ciudad').value;

const provincia = document.getElementById('provincia').value;

let url= '';
url += 'https://apis.datos.gob.ar/georef/api/?';
//Si hay algo agregar a la url

if(provincia != ''){
    url += `?provincias?nombre=${provincia}`;
}

if(ciudad !=  ''){
    url +=`?municipios?provincia=${provincia}&nombre=${ciudad}`;
}



let datosFormulario = {

    mailRegistro: document.getElementById('email').value,

    nombre: document.getElementById('nombre').value,

    apellido: document.getElementById('apellido').value,

    calle: document.getElementById('calle').value,

    codigoPostal: document.getElementById('codigoPostal').value,

}




//asignacion de los listeners que chequean
mailRegistro = document.getElementById('email');
mailRegistro.addEventListener('change', () => {
    validarDatos(mailRegistro.value);
});

nombre = document.getElementById('name');
nombre.addEventListener('change', () => {
    validarDatos(nombre.value);
});

apellido = document.getElementById('apellido');
apellido.addEventListener('change', () => {
    validarDatos(apellido.value);
});

calle = document.getElementById('direccion');
calle.addEventListener('change', () => {
    validarDatos(calle.value);
});

codigoPostal = document.getElementById('codigoPostal');
codigoPostal.addEventListener('change', () => {
    validarDatos(codigoPostal.value);
});





/**
 * función que envía los datos al server
 * 
 */

function submitDatosAdicionales() {


    let xhr = new XMLHttpRequest();
    //defino lo que sucede cuando obtengo una respuesta
    xhr.onload = () => {
        if (xhr.status === 200) {
            //si está todo ok procedo a redirección 
            window.location.href = xhr.responseURL;

        } else if (xhr.status === 403) {
            //muestro error en pantalla
            let divErr = document.getElementById('error-message');
            divErr.innerHTML = '';
            errText = document.createTextNode(xhr.responseText);
            divErr.appendChild(errText);
            divErr.style.display = 'flex';

        }
    }


    //defino el método y endpoint
    xhr.open("POST", "/home");

    console.log(datosFormulario);

    //encabezado
    xhr.setRequestHeader('Content-type', 'application/json');

    //envío de la info
    xhr.send(JSON.stringify(datosFormulario));
}




function validarDatos(campo) {
    // Primero obtengo el valor del campo que estoy validando
    const valor = document.getElementById(campo).value;
    // Creo la variable del error para ambos casos, tanto para usuario registrado como para nuevo registro.
    let errorMessageDiv = document.getElementById('error-message');
    let crearErrorMessageDiv = document.getElementById('crear-error-message');
    // Valida los 3 inputs que vamos a manejar y en caso de dar error, rellena el respectivo campo de error.
    switch (campo) {
        case 'email':
            if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(valor)) {
                errorMessageDiv.textContent = '';
                break;
            } else {
                errorMessageDiv.textContent = 'Email inválido';
                break;
            }
        case 'nombre':
            if (/^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/.test(valor)) {
                crearErrorMessageDiv.textContent = '';
                break;
            } else {
                crearErrorMessageDiv.textContent = 'Ingrese un valor real';
                break;
            }
        case 'apellido':
            if (/^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/.test(valor)) {
                crearErrorMessageDiv.textContent = '';
                break;
            } else {
                crearErrorMessageDiv.textContent = 'Ingrese un valor real';
                break;
            }
        case 'nacimiento':
            if (/^(?:(?:(0?[1-9]|1\d|2[0-8])[/](0?[1-9]|1[0-2])|(29|30)[/](0?[13-9]|1[0-2])|(31)[/](0?[13578]|1[02]))[/](0{2,3}[1-9]|0{1,2}[1-9]\d|0?[1-9]\d{2}|[1-9]\d{3})|(29)[/](0?2)[/](\d{1,2}(?:0[48]|[2468][048]|[13579][26])|(?:0?[48]|[13579][26]|[2468][048])00))$/.test(valor)) {
                crearErrorMessageDiv.textContent = '';
                break;
            } else {
                crearErrorMessageDiv.textContent = 'ingrese formato dd/mm/aaaa';
                break;
            }
        case 'dni':
            if (!isNaN(campo)) {
                crearErrorMessageDiv.textContent = '';
                break;
            } else {
                crearErrorMessageDiv.textContent = 'Ingrese un numero real';
                break;
            }
        case 'calle':
            if (/^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/.test(valor)) {
                crearErrorMessageDiv.textContent = '';
                break;
            } else {
                crearErrorMessageDiv.textContent = 'Ingrese correctamente su calle';
                break;
            }
     
        case 'codigoPostal':
            if (!isNaN(campo)) {
                crearErrorMessageDiv.textContent = '';
                break;
            } else {
                crearErrorMessageDiv.textContent = 'Ingrese bien su código postal';
                break;
            }
        
    }
}