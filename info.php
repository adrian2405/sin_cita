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

<body id="main" class="parallax">


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    <script>

    var main = document.querySelector('#main');

    main.innerHTML = `

    <h1 class="h1 text-center bg-dark text-white" id="title">Citas ProMac</h1>
    <div id="demo" class="visually-hidden"></div>

    <div class="d-flex justify-content-center parallax">

<div class="card m-3" style="max-width: 540px;">
<div class="row g-0">
<div class="col-md-4">
<img src="https://www.codigos-qr.com/qr/php/qr_img.php?d=http%3A%2F%2Fhorarios.promac.es%2Fschedule%2FProMac%2FCitas_Previa_ProMac&s=6&e=m" width="25" height="150" class="card-img-top" alt="cita">
</div>
<div class="col-md-8">
  <div class="card-body">
  <h5 class="card-title">Solicita cita previa</h5>
  <p class="card-text">Puedes solicitar cita previa escaneando este código QR.</p>
  </div>
</div>
</div>
</div>

</div> 
        
        <div class="container bg-light rounded-3 border border-info p-3">
        <h1 class="text parpadea" id="msg">Espere aqui su turno, le llamaremos enseguida</h1>
        <h2 class="text parpadea" id="msg">Duración de la cita en función de las necesidades del cliente.</h2>
        </div>
    
        <div class="container-fluid d-flex justify-content-center w-100 h-100">

            <div class="container p-5 m-2 bg-dark text-white text-center rounded" id="example"></div>

            <div class="container p-5 m-2 bg-dark text-white text-center rounded" id="example_2"></div>

        </div>
    </div>

    <div class="d-flex justify-content-center">

<div class="card m-3" style="max-width: 540px;">
<div class="row g-0">
<div class="col-md-4">
<img src="https://www.codigos-qr.com/qr/php/qr_img.php?d=https%3A%2F%2Fsupport.apple.com%2Fes-es%2FHT203977&s=6&e=m" width="50" height="150" class="card-img-top" alt="copia">
</div>
<div class="col-md-8">
  <div class="card-body">
  <h5 class="card-title">Cómo hacer una copia de seguridad del iPhone, iPad y iPod touch</h5>
  <p class="card-text">Siga estos pasos para realizar tu copia de seguridad.</p>
  </div>
</div>
</div>
</div>

<div class="card m-3" style="max-width: 540px;">
<div class="row g-0">
<div class="col-md-4">
<img src="https://www.codigos-qr.com/qr/php/qr_img.php?d=https%3A%2F%2Fsupport.apple.com%2Fes-es%2Fmac-backup&s=6&e=m" width="50" height="150" class="card-img-top" alt="copiaMac">
</div>
<div class="col-md-8">
  <div class="card-body">
  <h5 class="card-title">Cómo hacer una copia de seguridad del Mac</h5>
  <p class="card-text">Siga estos pasos para realizar tu copia de seguridad.</p>
  </div>
</div>
</div>
</div>

<div class="card m-3" style="max-width: 540px;">
<div class="row g-0">
<div class="col-md-4">
<img src="https://www.codigos-qr.com/qr/php/qr_img.php?d=https%3A%2F%2Fsupport.apple.com%2Fes-es%2FHT201441&s=6&e=m" width="50" height="150" class="card-img-top" alt="bloqueo">
</div>
<div class="col-md-8">
  <div class="card-body">
  <h5 class="card-title">Cómo eliminar el bloqueo de activación</h5>
  <p class="card-text">Siga estos pasos para desactivar el bloqueo de activación de su equipo.</p>
  </div>
</div>
</div>
</div>

</div>    



    <footer class="footer mt-auto bg-dark text-center text-white fixed-bottom">
        <div class="container">
            <p>&copy; Copyright Servicios Canarios Promac S.L. © 2017. &middot; <a href="#" class="text-decoration-none text-white-50">Política de privacidad</a> &middot; <a href="#" class="text-decoration-none text-white-50">Condiciones generales</a></p>
        </div>
    </footer>
    
    
    `;


    var contenido = document.querySelector('#example');
    var contenido_2 = document.querySelector('#example_2');
    var msg = document.querySelector('#msg');

    var myTimer = window.setInterval(traer, 10000);
    var myTimer_2 = window.setInterval(traer_2, 11000);
    var myVar = setInterval(myTimer_3, 1000);

    function myTimer_3() {
        var d = new Date();
        var t = d.toLocaleTimeString('es-ES');
        var clock = document.querySelector("#demo");
        clock.innerHTML = t;

        if(t == '17:00:00'){

            msg.innerHTML = 'Solo clientes con cita previa';

        }else if(t == '18:00:00'){

            main.innerHTML = `

    <h1 class="h1 text-center bg-dark text-white p-2 mb-4" id="title">Citas ProMac</h1>
    <div id="demo" class="visually-hidden"></div>

    <div class="container-fluid m-2">

        <div class="container bg-light rounded-3 border border-info p-3">
        <h1 class="text parpadea m-2" id="msg">CERRADO</h1>
        <h1 class="text parpadea m-2" id="msg">Abrimos de lunes a viernes de 9:00 a 18:00.</h1>
        </div>
    
        <div class="container-fluid d-flex justify-content-center w-100 h-100 mt-5">

<div class="card mb-3 vh-50 vw-50" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="https://www.codigos-qr.com/qr/php/qr_img.php?d=http%3A%2F%2Fhorarios.promac.es%2Fschedule%2FProMac%2FCitas_Previa_ProMac&s=6&e=m" class="img-fluid rounded-start" alt="Codigo QR">
    </div>
    <div class="col-md-8">
      <div class="card-body">
      <h5 class="mt-0">Cita Previa Promac</h5>
    <p>Puedes solicitar cita previa escaneando este código QR.</p>
    <p>Uso de mascarilla obligatorio.</p>
      </div>
    </div>
  </div>
</div>

        </div>
    </div>

    <div class="d-flex justify-content-center m-2">

    <div class="card m-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
    <img src="./assets/img/logo.png" width="50" height="150" class="card-img-top" alt="Copia">
    </div>
    <div class="col-md-8">
      <div class="card-body">
      <h5 class="card-title">Copia de seguridad</h5>
      <p class="card-text">Recuerda realizar copia de seguridad de su dispositivo antes de entregarlo para reparación.</p>
      </div>
    </div>
  </div>
</div>

<div class="card m-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
    <img src="./assets/img/buscar.jpeg" width="75" height="150" class="card-img-top" alt="Buscar">
    </div>
    <div class="col-md-8">
      <div class="card-body">
      <h5 class="card-title">Bloqueo de activación</h5>
      <p class="card-text">Recuerda desactivar el bloqueo de activación de su dispositivo antes de entregarlo para reparación.</p>
      </div>
    </div>
  </div>
</div>

<div class="card m-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
    <img src="./assets/img/revision.png" width="25" height="150" class="card-img-top" alt="Revision">
    </div>
    <div class="col-md-8">
      <div class="card-body">
      <h5 class="card-title">Revisión</h5>
      <p class="card-text">Recuerda que la revisión del equipo tiene coste, consúltanos para más información.</p>
      </div>
    </div>
  </div>
</div>


</div>

<div class="d-flex justify-content-center m-2">

<div class="card m-3" style="max-width: 540px;">
<div class="row g-0">
<div class="col-md-4">
<img src="https://www.codigos-qr.com/qr/php/qr_img.php?d=https%3A%2F%2Fsupport.apple.com%2Fes-es%2Fguide%2Fiphone%2Fiph3ecf67d29%2Fios&s=6&e=m" width="50" height="150" class="card-img-top" alt="Copia">
</div>
<div class="col-md-8">
  <div class="card-body">
  <h5 class="card-title">Haz tu copia de seguridad</h5>
  <p class="card-text">Siga estos pasos para realizar tu copia de seguridad.</p>
  </div>
</div>
</div>
</div>

<div class="card m-3" style="max-width: 540px;">
<div class="row g-0">
<div class="col-md-4">
<img src="https://www.codigos-qr.com/qr/php/qr_img.php?d=https%3A%2F%2Fsupport.apple.com%2Fes-es%2Fguide%2Ficloud%2Fmmfc0eeddd%2Ficloud&s=6&e=m" width="50" height="150" class="card-img-top" alt="Buscar">
</div>
<div class="col-md-8">
  <div class="card-body">
  <h5 class="card-title">Desactiva el bloqueo de activación</h5>
  <p class="card-text">Siga estos pasos para desactivar el bloqueo de activación de su equipo.</p>
  </div>
</div>
</div>
</div>

<div class="card m-3" style="max-width: 540px;">
<div class="row g-0">
<div class="col-md-4">
<img src="https://www.codigos-qr.com/qr/php/qr_img.php?d=https%3A%2F%2Fwww.serviciospromac.com%2Finformacion-de-contacto.html&s=6&e=m" width="25" height="150" class="card-img-top" alt="Revision">
</div>
<div class="col-md-8">
  <div class="card-body">
  <h5 class="card-title">Consulta tus dudas con nosotros</h5>
  <p class="card-text">Si tienes alguna consulta no dudes en ponerte en contacto con nosotros.</p>
  </div>
</div>
</div>
</div>

</div>

    <footer class="footer mt-auto bg-dark text-center text-white fixed-bottom">
        <div class="container">
            <p>&copy; Copyright Servicios Canarios Promac S.L. © 2017. &middot; <a href="#" class="text-decoration-none text-white-50">Política de privacidad</a> &middot; <a href="#" class="text-decoration-none text-white-50">Condiciones generales</a></p>
        </div>
    </footer>
    
    
    `;


        }else if(t == '9:00:00'){
            location.reload();
        }
    }

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
                    data.forEach(element => speak('Su turno  ' + element.hora.toString()));
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
                    data.forEach(element => speak('Su turno  ' + element.hora.toString()));
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