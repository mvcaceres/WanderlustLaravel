window.onload = function(){
    fetch("https://dev.digitalhouse.com/api/getProvincias")
    .then(function(response){
        return response.json();
    })
    .then(function(respuesta){
        //console.log(respuesta.data);
        var select = document.querySelector('select.provincia');

        for(var i = 0; i < respuesta.data.length; i++){
            //console.log(respuesta.data[i]);
            var nombreProvincia = respuesta.data[i].state;
            var option = document.createElement('option');
            option.innerText = nombreProvincia;
            option.setAttribute('value',nombreProvincia);
            select.append(option);
        }
    })
    .catch(function(error){
        console.log(error);
    });




}
