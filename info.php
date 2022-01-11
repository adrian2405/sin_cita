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

    <h1 class="h1 text-center bg-dark text-white p-4" id="title">Citas ProMac</h1>
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


            <!--<div class="container p-5 m-2 bg-dark text-white text-center rounded" id="example_3"></div>-->

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

<div class="container d-flex justify-content-center parallax">

<div class="container bg-light rounded-3 border border-info p-3">
        <h1 class="text parpadea" id="msg">Antes de llevarse su equipo, pruébelo sin compromiso.</h1>
        </div>

        <svg version="1.1" id="svg_snowman" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
	 y="0px" width="143px" height="160px" viewBox="0 0 286 380" enable-background="new 0 0 286 380" xml:space="preserve">
         
         <g id="snowman">
	
             <path class="snowman_body" d="M20.302,221.826c-6.899,83.792,106.271,110.246,149.672,47.643
		C236.041,174.189,29.782,107.401,20.302,221.826z"/>
	
             <path class="scarf" d="M62.978,157.992c-5.486,2.424-8.756,6.673-7.191,13.735
		c1.887,8.643,12.927,16.689,20.227,20.237c18.053,8.676,44.348,8.364,61.527-3.758c29.854-21.115-24.191-30.144-37.011-31.832
		C92.905,155.356,73.691,153.215,62.978,157.992z"/>
	
             <path class="scarf_knot" d="M88.509,177.525c-18.559,6.252-29.452,33.552-28.112,51.221
		c0.11,0.106,0.256,0.247,0.365,0.353c8.537-1.302,15,3.198,22.443,6.22c-0.542-15.985,0.146-31.726,13.332-43.214
		c0.143-0.106,0.143-0.106,0,0c-4.759,8.534-6.463,21.221-6.463,30.845c6.247-2.494,13.292-3.97,19.828-1.826
		c-1.124-12.893-1.924-27.72,8.281-37.698c-4.831-2.986-10.494-5.587-16.126-6.641L88.509,177.525z"/>
	
             <path class="snowman_head" d="M145.783,120.573c-2.77-5.274-6.473-9.863-11.039-13.207
		c-2.725-2.003-5.629-3.761-8.606-5.304C72.5,78.667,53.571,129.255,53.534,129.323c-2.471,8.272-2.59,17.065,0.24,25.173
		c1.245,3.568,3.056,7.005,5.499,10.204c16.309,21.327,54.842,28.984,77.794,12.79C153.694,165.722,155.441,138.96,145.783,120.573z
		"/>
	
             <g id="hat">
		
                 <path class="hat-ribbon" d="M45.071,104.135l6.829,12.61c34.1-33.933,65.013-19.442,65.013-19.442l-1.961-14.935
			C90.037,83.282,65.447,89.325,45.071,104.135z"/>
		
                 <path class="hat-top" d="M112.882,63.362c0,0-8.829-9.698-36.575-5.148C37.661,64.555,35.338,85.67,35.338,85.67l9.733,18.465
			c20.376-14.81,44.966-20.853,69.881-21.766L112.882,63.362z"/>
		
                 <path class="hat-bottom" d="M53.534,129.075c0.036-0.068,25.632-34.575,72.603-27.137c2.978,1.543,5.882,3.363,8.606,5.366
			c4.566,3.344,8.269,7.964,11.039,13.238c9.431-9.731,8.321-22.45-4.971-27.139c-20.632-7.306-44.275-2.84-64.322,4.855
			c-16.056,6.149-33.525,18.058-36.938,35.628C37.229,145.866,42.802,151,53.768,154h0.006
			C50.945,146,51.063,137.347,53.534,129.075z"/>
	
             </g>
	
             <path class="nose" d="M104.781,143.55c-1.708,18.2,27.856,10.402,38.028,9.453c7.191-0.669,13.764-1.581,20.483-2.495
		c6.539-0.845,6.792-2.953,0.545-5.095c-7.264-2.53-14.02-5.127-22.008-8.219c-7.048-2.707-21.612-6.956-29.092-5.059
		C108.523,133.19,105.436,136.455,104.781,143.55z"/>
		
                 <path class="mouth-1" d="M84.079,158.94c-0.91,0.492-2.034,0.106-2.506-0.842c-0.439-0.913,0.036-1.932,0.98-2.321
			c0.944-0.421,2.034,0,2.433,0.878C85.422,157.465,84.986,158.519,84.079,158.94z"/>
		
                 <path class="mouth-2" d="M88.292,164.63c-0.691,0.739-2.034,0.881-2.651-0.036c-0.688-0.878-0.582-2.07,0.292-2.633
			c0.834-0.527,1.961-0.457,2.502,0.212C88.874,162.945,88.984,163.893,88.292,164.63z"/>
		
                 <path class="mouth-3" d="M94.43,168.426c-0.472,0.88-1.635,1.263-2.579,0.81c-1.017-0.353-1.236-1.652-0.654-2.462
			c0.581-0.842,1.562-0.984,2.469-0.701C94.54,166.458,94.865,167.513,94.43,168.426z"/>
		
                 <path class="mouth-4" d="M101.222,170.849c-0.256,0.948-1.309,1.511-2.326,1.266c-1.017-0.283-1.559-1.231-1.163-2.215
			c0.329-0.913,1.382-1.475,2.289-1.231C100.967,168.882,101.478,169.866,101.222,170.849z"/>
		
                 <path class="mouth-5" d="M108.376,172.151c-0.109,0.984-1.053,1.72-2.107,1.578c-1.053-0.106-1.741-0.983-1.525-2.002
			c0.18-0.913,1.126-1.649,2.07-1.543C107.795,170.254,108.486,171.167,108.376,172.151z"/>
		
                 <path class="mouth-6" d="M115.64,172.36c0.036,1.019-0.761,1.864-1.814,1.935c-1.053,0.103-1.891-0.739-1.817-1.793
			c0.036-0.948,0.837-1.758,1.817-1.829C114.77,170.602,115.568,171.376,115.64,172.36z"/>
		
                 <path class="mouth-7" d="M122.831,171.412c0.256,0.948-0.399,1.967-1.452,2.212c-1.017,0.318-1.964-0.418-2.107-1.437
			c-0.109-0.983,0.545-1.829,1.452-2.109C121.632,169.83,122.576,170.463,122.831,171.412z"/>
		
                 <path class="mouth-8" d="M129.587,168.953c0.508,0.878,0.146,2.002-0.837,2.494c-0.907,0.598-2.034,0.035-2.393-0.913
			c-0.329-0.948,0.107-1.864,0.871-2.388C128.025,167.722,129.115,168.075,129.587,168.953z"/>
		
                 <path class="mouth-9" d="M135.252,164.665c0.798,0.669,0.834,1.864,0.073,2.671c-0.761,0.81-1.888,0.775-2.542-0.103
			c-0.545-0.739-0.545-1.932,0-2.568C133.402,163.999,134.491,164.035,135.252,164.665z"/>
		
                 <path class="mouth-10" d="M138.994,158.763c0.944,0.318,1.416,1.408,1.017,2.426c-0.399,1.019-1.452,1.369-2.323,0.842
			c-0.874-0.527-1.346-1.617-1.053-2.426C136.961,158.763,138.014,158.413,138.994,158.763z"/>
	
             <path class="eye_left" d="M94.939,125.986c4.396-2.494,0.581-8.746-3.775-6.535
		C86.585,121.769,90.037,128.76,94.939,125.986z"/>
	
             <path class="eye_right" d="M127.663,123.63c4.393-2.456,0.582-8.746-3.778-6.497
		C119.309,119.451,122.758,126.407,127.663,123.63z"/>
	
             <path class="button_top" d="M134.053,227.38c13.039-2.391,12.205-20.626-2.323-18.904
		C116.767,210.306,119.891,229.978,134.053,227.38z"/>
	
             <path class="button_bottom" d="M130.022,262.687c11.696,1.157,17.289-16.336,5.267-19.219
		C123.522,240.659,115.205,261.176,130.022,262.687z"/>

         </g>

</svg>
</div>




    <footer class="footer mt-auto bg-dark text-center text-white fixed-bottom">
        <div class="container">
            <p>&copy; Copyright Servicios Canarios Promac S.L. © 2017. &middot; <a href="#" class="text-decoration-none text-white-50">Política de privacidad</a> &middot; <a href="#" class="text-decoration-none text-white-50">Condiciones generales</a></p>
        </div>
    </footer>
    
    
    `;


    var contenido = document.querySelector('#example');
    var contenido_2 = document.querySelector('#example_2');
    //var contenido_3 = document.querySelector('#example_3');
    var msg = document.querySelector('#msg');
    var fecha = document.querySelector('#fecha');

    var myTimer = window.setInterval(traer, 10000);
    var myTimer_2 = window.setInterval(traer_2, 11000);
    //var myTimer_4 = window.setInterval(traer_3, 12000);
    var myVar = setInterval(myTimer_3, 1000);

    function myTimer_3() {
        var d = new Date();
        var t = d.toLocaleTimeString('es-ES');
        var clock = document.querySelector("#demo");
        clock.innerHTML = t;

        if(t == '17:00:00'){

            msg.classList.add('display-1')
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


        }else if((t == '9:00:00' && dayOfWeek != 'Sabado') && (t == '9:00:00' && dayOfWeek != 'Domingo')){
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
                  contenido.innerHTML = '<h1 class="h1">Recepción 1</h1><br><h2 class="h2">Espere su turno por favor.</h2><br><h3>Recuerde entregar su dispositivo sin información.</h3>';

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
                    contenido_2.innerHTML = '<h1 class="h1">Recepción 2</h1><br><h2 class="h2">Espere su turno por favor.</h2><br><h3>Recuerde entregar su dispositivo sin información.</h3>';

                }
            }

            /*function traer_3(){

fetch('./data_info_3.php')
.then(res => res.json())
.then(data => {alerta_3(data)});

}

function alerta_3 (data){

if(data != ''){
    contenido_3.classList.remove('bg-dark');
    contenido_3.classList.add('efecto_turnos');
    data.forEach(element => contenido_3.innerHTML = '<h1 class="h1 text-white">Recepción 3</h1><h2 class="h2">SU TURNO </h2> <h3 class="h3">Siguiente cita: ' + element.hora.toString() + '</h3><p>Recuerde haber realizado copia de seguridad anteriormente.</p>');
    data.forEach(element => speak('Su turno  ' + element.hora.toString()));
}else{
    contenido_3.classList.remove('efecto_turnos');
    contenido_3.classList.add('bg-dark');
    contenido_3.innerHTML = '<h1 class="h1">Recepción 3</h1><br><h2 class="h2">Espere su turno por favor.</h2><br><h3>Recuerde entregar su dispositivo sin información.</h3>';

}
}*/

traer();

traer_2();

//traer_3();

function speak (message) {
  var msg = new SpeechSynthesisUtterance(message);
  var voices = window.speechSynthesis.getVoices();
  msg.voice = speechSynthesis.getVoices().filter(function(voice) { return voice.name == 'Monica'; })[0];
  msg.rate = 0.8;
  window.speechSynthesis.speak(msg);
}

// Método para filtrar por fecha en formato dd/mm/aaaa

var today = new Date();
var dd = today.getDate();
var mm = today.getMonth() + 1; //January is 0!
var yyyy = today.getFullYear();

if (dd < 10) {
  dd = '0' + dd;
}

if (mm < 10) {
  mm = '0' + mm;
}

today = dd + '/' + mm + '/' + yyyy;
document.write(today);

// Método para filtrar por día de la semana

var objToday = new Date(),
	weekday = new Array('Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'),
	dayOfWeek = weekday[objToday.getDay()],
	domEnder = function() { var a = objToday; if (/1/.test(parseInt((a + "").charAt(0)))) return "th"; a = parseInt((a + "").charAt(1)); return 1 == a ? "st" : 2 == a ? "nd" : 3 == a ? "rd" : "th" }(),
	dayOfMonth = today + ( objToday.getDate() < 10) ? '0' + objToday.getDate() + domEnder : objToday.getDate() + domEnder,
	months = new Array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'),
	curMonth = months[objToday.getMonth()],
	curYear = objToday.getFullYear(),
	curHour = objToday.getHours() > 12 ? objToday.getHours() - 12 : (objToday.getHours() < 10 ? "0" + objToday.getHours() : objToday.getHours()),
	curMinute = objToday.getMinutes() < 10 ? "0" + objToday.getMinutes() : objToday.getMinutes(),
	curSeconds = objToday.getSeconds() < 10 ? "0" + objToday.getSeconds() : objToday.getSeconds(),
	curMeridiem = objToday.getHours() > 12 ? "PM" : "AM";


</script>

    <script type="text/javascript">
    //<![CDATA[
    // Nieve en el blog
    /** @license
    DHTML Snowstorm! JavaScript-based Snow for web pages
    --------------------------------------------------------
    Version 1.42.20111120 (Previous rev: 1.41.20101113)
    Copyright (c) 2007, Scott Schiller. All rights reserved.
    Code provided under the BSD License:
    http://schillmania.com/projects/snowstorm/license.txt
    */
    var snowStorm=function(e,d){function g(a,d){isNaN(d)&&(d=0);return Math.random()*a+d}function o(){e.setTimeout(function(){a.start(true)},20);a.events.remove(i?d:e,"mousemove",o)}function r(){if(!a.excludeMobile||!s)a.freezeOnBlur?a.events.add(i?d:e,"mousemove",o):o();a.events.remove(e,"load",r)}this.flakesMax=128;this.flakesMaxActive=64;this.animationInterval=40;this.excludeMobile=true;this.flakeBottom=null;this.followMouse=true;this.snowColor="#ffffff";this.snowCharacter="•";this.snowStick=true;
    this.targetElement=null;this.useMeltEffect=true;this.usePositionFixed=this.useTwinkleEffect=false;this.freezeOnBlur=true;this.flakeRightOffset=this.flakeLeftOffset=0;this.flakeHeight=this.flakeWidth=8;this.vMaxX=5;this.vMaxY=4;this.zIndex=0;var a=this,y=this,i=navigator.userAgent.match(/msie/i),z=navigator.userAgent.match(/msie 6/i),A=navigator.appVersion.match(/windows 98/i),s=navigator.userAgent.match(/mobile/i),B=i&&d.compatMode==="BackCompat",t=s||B||z,h=null,k=null,j=null,m=null,u=null,v=null,
    p=1,n=false,q;a:{try{d.createElement("div").style.opacity="0.5"}catch(C){q=false;break a}q=true}var w=false,x=d.createDocumentFragment();this.timers=[];this.flakes=[];this.active=this.disabled=false;this.meltFrameCount=20;this.meltFrames=[];this.events=function(){function a(b){var b=f.call(b),c=b.length;l?(b[1]="on"+b[1],c>3&&b.pop()):c===3&&b.push(false);return b}function d(a,c){var e=a.shift(),f=[b[c]];if(l)e[f](a[0],a[1]);else e[f].apply(e,a)}var l=!e.addEventListener&&e.attachEvent,f=Array.prototype.slice,
    b={add:l?"attachEvent":"addEventListener",remove:l?"detachEvent":"removeEventListener"};return{add:function(){d(a(arguments),"add")},remove:function(){d(a(arguments),"remove")}}}();this.randomizeWind=function(){var c;c=g(a.vMaxX,0.2);u=parseInt(g(2),10)===1?c*-1:c;v=g(a.vMaxY,0.2);if(this.flakes)for(c=0;c<this.flakes.length;c++)this.flakes[c].active&&this.flakes[c].setVelocities()};this.scrollHandler=function(){var c;m=a.flakeBottom?0:parseInt(e.scrollY||d.documentElement.scrollTop||d.body.scrollTop,
    10);isNaN(m)&&(m=0);if(!n&&!a.flakeBottom&&a.flakes)for(c=a.flakes.length;c--;)a.flakes[c].active===0&&a.flakes[c].stick()};this.resizeHandler=function(){e.innerWidth||e.innerHeight?(h=e.innerWidth-(!i?16:16)-a.flakeRightOffset,j=a.flakeBottom?a.flakeBottom:e.innerHeight):(h=(d.documentElement.clientWidth||d.body.clientWidth||d.body.scrollWidth)-(!i?8:0)-a.flakeRightOffset,j=a.flakeBottom?a.flakeBottom:d.documentElement.clientHeight||d.body.clientHeight||d.body.scrollHeight);k=parseInt(h/2,10)};this.resizeHandlerAlt=
    function(){h=a.targetElement.offsetLeft+a.targetElement.offsetWidth-a.flakeRightOffset;j=a.flakeBottom?a.flakeBottom:a.targetElement.offsetTop+a.targetElement.offsetHeight;k=parseInt(h/2,10)};this.freeze=function(){var c;if(a.disabled)return false;else a.disabled=1;for(c=a.timers.length;c--;)clearInterval(a.timers[c])};this.resume=function(){if(a.disabled)a.disabled=0;else return false;a.timerInit()};this.toggleSnow=function(){a.flakes.length?(a.active=!a.active,a.active?(a.show(),a.resume()):(a.stop(),
    a.freeze())):a.start()};this.stop=function(){var c;this.freeze();for(c=this.flakes.length;c--;)this.flakes[c].o.style.display="none";a.events.remove(e,"scroll",a.scrollHandler);a.events.remove(e,"resize",a.resizeHandler);a.freezeOnBlur&&(i?(a.events.remove(d,"focusout",a.freeze),a.events.remove(d,"focusin",a.resume)):(a.events.remove(e,"blur",a.freeze),a.events.remove(e,"focus",a.resume)))};this.show=function(){var a;for(a=this.flakes.length;a--;)this.flakes[a].o.style.display="block"};this.SnowFlake=
    function(a,e,l,f){var b=this;this.type=e;this.x=l||parseInt(g(h-20),10);this.y=!isNaN(f)?f:-g(j)-12;this.vY=this.vX=null;this.vAmpTypes=[1,1.2,1.4,1.6,1.8];this.vAmp=this.vAmpTypes[this.type];this.melting=false;this.meltFrameCount=a.meltFrameCount;this.meltFrames=a.meltFrames;this.twinkleFrame=this.meltFrame=0;this.active=1;this.fontSize=10+this.type/5*10;this.o=d.createElement("div");this.o.innerHTML=a.snowCharacter;this.o.style.color=a.snowColor;this.o.style.position=n?"fixed":"absolute";this.o.style.width=
    a.flakeWidth+"px";this.o.style.height=a.flakeHeight+"px";this.o.style.fontFamily="arial,verdana";this.o.style.overflow="hidden";this.o.style.fontWeight="normal";this.o.style.zIndex=a.zIndex;x.appendChild(this.o);this.refresh=function(){if(isNaN(b.x)||isNaN(b.y))return false;b.o.style.left=b.x+"px";b.o.style.top=b.y+"px"};this.stick=function(){t||a.targetElement!==d.documentElement&&a.targetElement!==d.body?b.o.style.top=j+m-a.flakeHeight+"px":a.flakeBottom?b.o.style.top=a.flakeBottom+"px":(b.o.style.display=
    "none",b.o.style.top="auto",b.o.style.bottom="0px",b.o.style.position="fixed",b.o.style.display="block")};this.vCheck=function(){if(b.vX>=0&&b.vX<0.2)b.vX=0.2;else if(b.vX<0&&b.vX>-0.2)b.vX=-0.2;if(b.vY>=0&&b.vY<0.2)b.vY=0.2};this.move=function(){var d=b.vX*p;b.x+=d;b.y+=b.vY*b.vAmp;if(b.x>=h||h-b.x<a.flakeWidth)b.x=0;else if(d<0&&b.x-a.flakeLeftOffset<-a.flakeWidth)b.x=h-a.flakeWidth-1;b.refresh();if(j+m-b.y<a.flakeHeight)b.active=0,a.snowStick?b.stick():b.recycle();else{if(a.useMeltEffect&&b.active&&
    b.type<3&&!b.melting&&Math.random()>0.998)b.melting=true,b.melt();if(a.useTwinkleEffect)if(b.twinkleFrame)b.twinkleFrame--,b.o.style.visibility=b.twinkleFrame&&b.twinkleFrame%2===0?"hidden":"visible";else if(Math.random()>0.9)b.twinkleFrame=parseInt(Math.random()*20,10)}};this.animate=function(){b.move()};this.setVelocities=function(){b.vX=u+g(a.vMaxX*0.12,0.1);b.vY=v+g(a.vMaxY*0.12,0.1)};this.setOpacity=function(a,b){if(!q)return false;a.style.opacity=b};this.melt=function(){!a.useMeltEffect||!b.melting?
    b.recycle():b.meltFrame<b.meltFrameCount?(b.meltFrame++,b.setOpacity(b.o,b.meltFrames[b.meltFrame]),b.o.style.fontSize=b.fontSize-b.fontSize*(b.meltFrame/b.meltFrameCount)+"px",b.o.style.lineHeight=a.flakeHeight+2+a.flakeHeight*0.75*(b.meltFrame/b.meltFrameCount)+"px"):b.recycle()};this.recycle=function(){b.o.style.display="none";b.o.style.position=n?"fixed":"absolute";b.o.style.bottom="auto";b.setVelocities();b.vCheck();b.meltFrame=0;b.melting=false;b.setOpacity(b.o,1);b.o.style.padding="0px";b.o.style.margin=
    "0px";b.o.style.fontSize=b.fontSize+"px";b.o.style.lineHeight=a.flakeHeight+2+"px";b.o.style.textAlign="center";b.o.style.verticalAlign="baseline";b.x=parseInt(g(h-a.flakeWidth-20),10);b.y=parseInt(g(j)*-1,10)-a.flakeHeight;b.refresh();b.o.style.display="block";b.active=1};this.recycle();this.refresh()};this.snow=function(){for(var c=0,d=0,e=0,f=null,f=a.flakes.length;f--;)a.flakes[f].active===1?(a.flakes[f].move(),c++):a.flakes[f].active===0?d++:e++,a.flakes[f].melting&&a.flakes[f].melt();if(c<a.flakesMaxActive&&
    (f=a.flakes[parseInt(g(a.flakes.length),10)],f.active===0))f.melting=true};this.mouseMove=function(c){if(!a.followMouse)return true;c=parseInt(c.clientX,10);c<k?p=-2+c/k*2:(c-=k,p=c/k*2)};this.createSnow=function(c,d){var e;for(e=0;e<c;e++)if(a.flakes[a.flakes.length]=new a.SnowFlake(a,parseInt(g(6),10)),d||e>a.flakesMaxActive)a.flakes[a.flakes.length-1].active=-1;y.targetElement.appendChild(x)};this.timerInit=function(){a.timers=!A?[setInterval(a.snow,a.animationInterval)]:[setInterval(a.snow,a.animationInterval*
    3),setInterval(a.snow,a.animationInterval)]};this.init=function(){var c;for(c=0;c<a.meltFrameCount;c++)a.meltFrames.push(1-c/a.meltFrameCount);a.randomizeWind();a.createSnow(a.flakesMax);a.events.add(e,"resize",a.resizeHandler);a.events.add(e,"scroll",a.scrollHandler);a.freezeOnBlur&&(i?(a.events.add(d,"focusout",a.freeze),a.events.add(d,"focusin",a.resume)):(a.events.add(e,"blur",a.freeze),a.events.add(e,"focus",a.resume)));a.resizeHandler();a.scrollHandler();a.followMouse&&a.events.add(i?d:e,"mousemove",
    a.mouseMove);a.animationInterval=Math.max(20,a.animationInterval);a.timerInit()};this.start=function(c){if(w){if(c)return true}else w=true;if(typeof a.targetElement==="string"&&(c=a.targetElement,a.targetElement=d.getElementById(c),!a.targetElement))throw Error('Snowstorm: Unable to get targetElement "'+c+'"');if(!a.targetElement)a.targetElement=!i?d.documentElement?d.documentElement:d.body:d.body;if(a.targetElement!==d.documentElement&&a.targetElement!==d.body)a.resizeHandler=a.resizeHandlerAlt;
    a.resizeHandler();a.usePositionFixed=a.usePositionFixed&&!t;n=a.usePositionFixed;if(h&&j&&!a.disabled)a.init(),a.active=true};a.events.add(e,"load",r,false);return this}(window,document);
    //]]>
    </script>
</body>

</html>