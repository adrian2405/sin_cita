<?php

    include "conexion.php";

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    <title>Información</title>
</head>

<body>

<h1 class="h1 text-center bg-dark text-white p-2 mb-4" id="title">Citas ProMac</h1>

    <div class="container-fluid">

        <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade m-2 mb-4 rounded" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="6000">
                <img src="./assets/img/icloud.png" class="d-block w-100 h-25 rounded" alt="icloud">
                </div>
                <div class="carousel-item" data-bs-interval="7000">
                    <img src="./assets/img/sincita2.png" class="d-block w-100 h-25 rounded" alt="sincita2">
                </div>
                <div class="carousel-item" data-bs-interval="8000">
                    <img src="./assets/img/sincita1.png" class="d-block w-100 h-25 rounded" alt="sincita1">
                </div>
            </div>
        </div>    

        <h2 id="efecto_mensaje">Espere aqui su turno, le llamaremos enseguida.</h2>
    
        <div class="container-fluid d-flex justify-content-center w-100 h-100 mt-5">

            <div class="container p-5 m-2 bg-dark text-white text-center rounded" id="example"></div>

            <div class="container p-5 m-2 bg-dark text-white text-center rounded" id="example_2"></div>

        </div>
    </div>

    <footer class="footer mt-auto bg-dark text-center text-white fixed-bottom">
        <div class="container">
            <p>&copy; Copyright Servicios Canarios Promac S.L. © 2017. &middot; <a href="#" class="text-decoration-none text-white-50">Política de privacidad</a> &middot; <a href="#" class="text-decoration-none text-white-50">Condiciones generales</a></p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    <script>

var contenido = document.querySelector('#example');
var contenido_2 = document.querySelector('#example_2');

    var myTimer = window.setInterval(traer, 10000);
    var myTimer_2 = window.setInterval(traer_2, 11000);

            function traer(){

                fetch('./data_info.php')
                .then(res => res.json())
                .then(data => {alerta(data)});

            }

            function alerta (data){

                if(data != ''){
                    contenido.classList.remove('bg-dark');
                    contenido.classList.add('efecto_turnos');
                    data.forEach(element => contenido.innerHTML = '<h1 class="h1 text-white">Recepción 1</h1><h2 class="h2">SU TURNO </h2> <h3 class="h3">Siguiente cita: ' + element.hora.toString() + '</h3><p>Recuerde haber realizado copia de seguridad anteriormente.</p>');
                    data.forEach(element => speak('Su turno cita de las ' + element.hora.toString()));
                }else{
                    contenido.classList.remove('efecto_turnos');
                    contenido.classList.add('bg-dark');
                  contenido.innerHTML = '<h1 class="h1">Recepción 1</h1><br><h2 class="h2">Espere su turno por favor.</h2><br><p>Recuerde haber realizado copia de seguridad anteriormente.</p>';

                }
            }

function traer_2(){

fetch('./data_info_2.php')
.then(res => res.json())
.then(data => {alerta_2(data)});

}

function alerta_2 (data){

if(data != ''){
    contenido_2.classList.remove('bg-dark');
    contenido_2.classList.add('efecto_turnos');
    data.forEach(element => contenido_2.innerHTML = '<h1 class="h1 text-white">Recepción 2</h1><h2 class="h2">SU TURNO </h2> <h3 class="h3">Siguiente cita: ' + element.hora.toString() + '</h3><p>Recuerde haber realizado copia de seguridad anteriormente.</p>');
    data.forEach(element => speak('Su turno cita de las ' + element.hora.toString()));
}else{
    contenido_2.classList.remove('efecto_turnos');
    contenido_2.classList.add('bg-dark');
  contenido_2.innerHTML = '<h1 class="h1">Recepción 2</h1><br><h2 class="h2">Espere su turno por favor.</h2><br><p>Recuerde haber realizado copia de seguridad anteriormente.</p>';

}
}

traer();

traer_2();

function speak (message) {
  var msg = new SpeechSynthesisUtterance(message);
  var voices = window.speechSynthesis.getVoices();
  msg.voice = speechSynthesis.getVoices().filter(function(voice) { return voice.name == 'Monica'; })[0];
  msg.rate = 0.8;
  window.speechSynthesis.speak(msg);
}

</script>
</body>

</html>