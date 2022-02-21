<?php

    include "conexion.php";

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    <title>Información</title>
</head>

<body id="main" class="parallax">


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
        integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
        integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous">
    </script>
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

        if (t == '17:00:00') {

            msg.classList.add('display-1')
            msg.innerHTML = 'Solo clientes con cita previa';

        } else if (t == '18:00:00') {

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


        } else if (t === '9:00:00' && dayOfWeek === 'Lunes') {
            location.reload(true);
        }else if ((t === '9:00:00' && dayOfWeek !== 'Sabado') && (t === '9:00:00' && dayOfWeek !== 'Domingo')){
            location.reload(true);
        }
    }

    function traer() {

        fetch('./data_info.php')
            .then(res => res.json())
            .then(data => {
                alerta(data)
            });

    }

    function alerta(data) {

        if (data != '') {
            contenido.classList.remove('bg-dark');
            contenido.classList.add('efecto_turnos');
            data.forEach(element => contenido.innerHTML =
                '<h1 class="h1 text-white">Recepción 1</h1><h2 class="h2">SU TURNO </h2> <h3 class="h3">Siguiente cita: ' +
                element.hora.toString() + '</h3><p>Recuerde haber realizado copia de seguridad anteriormente.</p>');
            data.forEach(element => speak('Su turno  ' + element.hora.toString()));
        } else {
            contenido.classList.remove('efecto_turnos');
            contenido.classList.add('bg-dark');
            contenido.innerHTML =
                '<h1 class="h1">Recepción 1</h1><br><h2 class="h2">Espere su turno por favor.</h2><br><h3>Recuerde entregar su dispositivo sin información.</h3>';

        }
    }

    function traer_2() {

        fetch('./data_info_2.php')
            .then(res => res.json())
            .then(data => {
                alerta_2(data)
            });

    }

    function alerta_2(data) {

        if (data != '') {
            contenido_2.classList.remove('bg-dark');
            contenido_2.classList.add('efecto_turnos');
            data.forEach(element => contenido_2.innerHTML =
                '<h1 class="h1 text-white">Recepción 2</h1><h2 class="h2">SU TURNO </h2> <h3 class="h3">Siguiente cita: ' +
                element.hora.toString() + '</h3><p>Recuerde haber realizado copia de seguridad anteriormente.</p>');
            data.forEach(element => speak('Su turno  ' + element.hora.toString()));
        } else {
            contenido_2.classList.remove('efecto_turnos');
            contenido_2.classList.add('bg-dark');
            contenido_2.innerHTML =
                '<h1 class="h1">Recepción 2</h1><br><h2 class="h2">Espere su turno por favor.</h2><br><h3>Recuerde entregar su dispositivo sin información.</h3>';

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

    function speak(message) {
        var msg = new SpeechSynthesisUtterance(message);
        var voices = window.speechSynthesis.getVoices();
        msg.voice = speechSynthesis.getVoices().filter(function(voice) {
            return voice.name == 'Monica';
        })[0];
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
        domEnder = function() {
            var a = objToday;
            if (/1/.test(parseInt((a + "").charAt(0)))) return "th";
            a = parseInt((a + "").charAt(1));
            return 1 == a ? "st" : 2 == a ? "nd" : 3 == a ? "rd" : "th"
        }(),
        dayOfMonth = today + (objToday.getDate() < 10) ? '0' + objToday.getDate() + domEnder : objToday.getDate() +
        domEnder,
        months = new Array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
            'October', 'November', 'December'),
        curMonth = months[objToday.getMonth()],
        curYear = objToday.getFullYear(),
        curHour = objToday.getHours() > 12 ? objToday.getHours() - 12 : (objToday.getHours() < 10 ? "0" + objToday
            .getHours() : objToday.getHours()),
        curMinute = objToday.getMinutes() < 10 ? "0" + objToday.getMinutes() : objToday.getMinutes(),
        curSeconds = objToday.getSeconds() < 10 ? "0" + objToday.getSeconds() : objToday.getSeconds(),
        curMeridiem = objToday.getHours() > 12 ? "PM" : "AM";

    </script>

    <script type="text/javascript">

    // Efecto Nieve

    /*var snowStorm = function(e, d) {
        function g(a, d) {
            isNaN(d) && (d = 0);
            return Math.random() * a + d
        }

        function o() {
            e.setTimeout(function() {
                a.start(true)
            }, 20);
            a.events.remove(i ? d : e, "mousemove", o)
        }

        function r() {
            if (!a.excludeMobile || !s) a.freezeOnBlur ? a.events.add(i ? d : e, "mousemove", o) : o();
            a.events.remove(e, "load", r)
        }
        this.flakesMax = 128;
        this.flakesMaxActive = 64;
        this.animationInterval = 40;
        this.excludeMobile = true;
        this.flakeBottom = null;
        this.followMouse = true;
        this.snowColor = "#ffffff";
        this.snowCharacter = "•";
        this.snowStick = true;
        this.targetElement = null;
        this.useMeltEffect = true;
        this.usePositionFixed = this.useTwinkleEffect = false;
        this.freezeOnBlur = true;
        this.flakeRightOffset = this.flakeLeftOffset = 0;
        this.flakeHeight = this.flakeWidth = 8;
        this.vMaxX = 5;
        this.vMaxY = 4;
        this.zIndex = 0;
        var a = this,
            y = this,
            i = navigator.userAgent.match(/msie/i),
            z = navigator.userAgent.match(/msie 6/i),
            A = navigator.appVersion.match(/windows 98/i),
            s = navigator.userAgent.match(/mobile/i),
            B = i && d.compatMode === "BackCompat",
            t = s || B || z,
            h = null,
            k = null,
            j = null,
            m = null,
            u = null,
            v = null,
            p = 1,
            n = false,
            q;
        a: {
            try {
                d.createElement("div").style.opacity = "0.5"
            } catch (C) {
                q = false;
                break a
            }
            q = true
        }
        var w = false,
            x = d.createDocumentFragment();
        this.timers = [];
        this.flakes = [];
        this.active = this.disabled = false;
        this.meltFrameCount = 20;
        this.meltFrames = [];
        this.events = function() {
            function a(b) {
                var b = f.call(b),
                    c = b.length;
                l ? (b[1] = "on" + b[1], c > 3 && b.pop()) : c === 3 && b.push(false);
                return b
            }

            function d(a, c) {
                var e = a.shift(),
                    f = [b[c]];
                if (l) e[f](a[0], a[1]);
                else e[f].apply(e, a)
            }
            var l = !e.addEventListener && e.attachEvent,
                f = Array.prototype.slice,
                b = {
                    add: l ? "attachEvent" : "addEventListener",
                    remove: l ? "detachEvent" : "removeEventListener"
                };
            return {
                add: function() {
                    d(a(arguments), "add")
                },
                remove: function() {
                    d(a(arguments), "remove")
                }
            }
        }();
        this.randomizeWind = function() {
            var c;
            c = g(a.vMaxX, 0.2);
            u = parseInt(g(2), 10) === 1 ? c * -1 : c;
            v = g(a.vMaxY, 0.2);
            if (this.flakes)
                for (c = 0; c < this.flakes.length; c++) this.flakes[c].active && this.flakes[c].setVelocities()
        };
        this.scrollHandler = function() {
            var c;
            m = a.flakeBottom ? 0 : parseInt(e.scrollY || d.documentElement.scrollTop || d.body.scrollTop,
                10);
            isNaN(m) && (m = 0);
            if (!n && !a.flakeBottom && a.flakes)
                for (c = a.flakes.length; c--;) a.flakes[c].active === 0 && a.flakes[c].stick()
        };
        this.resizeHandler = function() {
            e.innerWidth || e.innerHeight ? (h = e.innerWidth - (!i ? 16 : 16) - a.flakeRightOffset, j = a
                .flakeBottom ? a.flakeBottom : e.innerHeight) : (h = (d.documentElement.clientWidth || d
                    .body.clientWidth || d.body.scrollWidth) - (!i ? 8 : 0) - a.flakeRightOffset, j = a
                .flakeBottom ? a.flakeBottom : d.documentElement.clientHeight || d.body.clientHeight || d
                .body.scrollHeight);
            k = parseInt(h / 2, 10)
        };
        this.resizeHandlerAlt =
            function() {
                h = a.targetElement.offsetLeft + a.targetElement.offsetWidth - a.flakeRightOffset;
                j = a.flakeBottom ? a.flakeBottom : a.targetElement.offsetTop + a.targetElement.offsetHeight;
                k = parseInt(h / 2, 10)
            };
        this.freeze = function() {
            var c;
            if (a.disabled) return false;
            else a.disabled = 1;
            for (c = a.timers.length; c--;) clearInterval(a.timers[c])
        };
        this.resume = function() {
            if (a.disabled) a.disabled = 0;
            else return false;
            a.timerInit()
        };
        this.toggleSnow = function() {
            a.flakes.length ? (a.active = !a.active, a.active ? (a.show(), a.resume()) : (a.stop(),
                a.freeze())) : a.start()
        };
        this.stop = function() {
            var c;
            this.freeze();
            for (c = this.flakes.length; c--;) this.flakes[c].o.style.display = "none";
            a.events.remove(e, "scroll", a.scrollHandler);
            a.events.remove(e, "resize", a.resizeHandler);
            a.freezeOnBlur && (i ? (a.events.remove(d, "focusout", a.freeze), a.events.remove(d, "focusin", a
                .resume)) : (a.events.remove(e, "blur", a.freeze), a.events.remove(e, "focus", a
                .resume)))
        };
        this.show = function() {
            var a;
            for (a = this.flakes.length; a--;) this.flakes[a].o.style.display = "block"
        };
        this.SnowFlake =
            function(a, e, l, f) {
                var b = this;
                this.type = e;
                this.x = l || parseInt(g(h - 20), 10);
                this.y = !isNaN(f) ? f : -g(j) - 12;
                this.vY = this.vX = null;
                this.vAmpTypes = [1, 1.2, 1.4, 1.6, 1.8];
                this.vAmp = this.vAmpTypes[this.type];
                this.melting = false;
                this.meltFrameCount = a.meltFrameCount;
                this.meltFrames = a.meltFrames;
                this.twinkleFrame = this.meltFrame = 0;
                this.active = 1;
                this.fontSize = 10 + this.type / 5 * 10;
                this.o = d.createElement("div");
                this.o.innerHTML = a.snowCharacter;
                this.o.style.color = a.snowColor;
                this.o.style.position = n ? "fixed" : "absolute";
                this.o.style.width =
                    a.flakeWidth + "px";
                this.o.style.height = a.flakeHeight + "px";
                this.o.style.fontFamily = "arial,verdana";
                this.o.style.overflow = "hidden";
                this.o.style.fontWeight = "normal";
                this.o.style.zIndex = a.zIndex;
                x.appendChild(this.o);
                this.refresh = function() {
                    if (isNaN(b.x) || isNaN(b.y)) return false;
                    b.o.style.left = b.x + "px";
                    b.o.style.top = b.y + "px"
                };
                this.stick = function() {
                    t || a.targetElement !== d.documentElement && a.targetElement !== d.body ? b.o.style.top =
                        j + m - a.flakeHeight + "px" : a.flakeBottom ? b.o.style.top = a.flakeBottom + "px" : (b
                            .o.style.display =
                            "none", b.o.style.top = "auto", b.o.style.bottom = "0px", b.o.style.position =
                            "fixed", b.o.style.display = "block")
                };
                this.vCheck = function() {
                    if (b.vX >= 0 && b.vX < 0.2) b.vX = 0.2;
                    else if (b.vX < 0 && b.vX > -0.2) b.vX = -0.2;
                    if (b.vY >= 0 && b.vY < 0.2) b.vY = 0.2
                };
                this.move = function() {
                    var d = b.vX * p;
                    b.x += d;
                    b.y += b.vY * b.vAmp;
                    if (b.x >= h || h - b.x < a.flakeWidth) b.x = 0;
                    else if (d < 0 && b.x - a.flakeLeftOffset < -a.flakeWidth) b.x = h - a.flakeWidth - 1;
                    b.refresh();
                    if (j + m - b.y < a.flakeHeight) b.active = 0, a.snowStick ? b.stick() : b.recycle();
                    else {
                        if (a.useMeltEffect && b.active &&
                            b.type < 3 && !b.melting && Math.random() > 0.998) b.melting = true, b.melt();
                        if (a.useTwinkleEffect)
                            if (b.twinkleFrame) b.twinkleFrame--, b.o.style.visibility = b.twinkleFrame && b
                                .twinkleFrame % 2 === 0 ? "hidden" : "visible";
                            else if (Math.random() > 0.9) b.twinkleFrame = parseInt(Math.random() * 20, 10)
                    }
                };
                this.animate = function() {
                    b.move()
                };
                this.setVelocities = function() {
                    b.vX = u + g(a.vMaxX * 0.12, 0.1);
                    b.vY = v + g(a.vMaxY * 0.12, 0.1)
                };
                this.setOpacity = function(a, b) {
                    if (!q) return false;
                    a.style.opacity = b
                };
                this.melt = function() {
                    !a.useMeltEffect || !b.melting ?
                        b.recycle() : b.meltFrame < b.meltFrameCount ? (b.meltFrame++, b.setOpacity(b.o, b
                                .meltFrames[b.meltFrame]), b.o.style.fontSize = b.fontSize - b.fontSize * (b
                                .meltFrame / b.meltFrameCount) + "px", b.o.style.lineHeight = a.flakeHeight +
                            2 + a.flakeHeight * 0.75 * (b.meltFrame / b.meltFrameCount) + "px") : b.recycle()
                };
                this.recycle = function() {
                    b.o.style.display = "none";
                    b.o.style.position = n ? "fixed" : "absolute";
                    b.o.style.bottom = "auto";
                    b.setVelocities();
                    b.vCheck();
                    b.meltFrame = 0;
                    b.melting = false;
                    b.setOpacity(b.o, 1);
                    b.o.style.padding = "0px";
                    b.o.style.margin =
                        "0px";
                    b.o.style.fontSize = b.fontSize + "px";
                    b.o.style.lineHeight = a.flakeHeight + 2 + "px";
                    b.o.style.textAlign = "center";
                    b.o.style.verticalAlign = "baseline";
                    b.x = parseInt(g(h - a.flakeWidth - 20), 10);
                    b.y = parseInt(g(j) * -1, 10) - a.flakeHeight;
                    b.refresh();
                    b.o.style.display = "block";
                    b.active = 1
                };
                this.recycle();
                this.refresh()
            };
        this.snow = function() {
            for (var c = 0, d = 0, e = 0, f = null, f = a.flakes.length; f--;) a.flakes[f].active === 1 ? (a
                    .flakes[f].move(), c++) : a.flakes[f].active === 0 ? d++ : e++, a.flakes[f].melting && a
                .flakes[f].melt();
            if (c < a.flakesMaxActive &&
                (f = a.flakes[parseInt(g(a.flakes.length), 10)], f.active === 0)) f.melting = true
        };
        this.mouseMove = function(c) {
            if (!a.followMouse) return true;
            c = parseInt(c.clientX, 10);
            c < k ? p = -2 + c / k * 2 : (c -= k, p = c / k * 2)
        };
        this.createSnow = function(c, d) {
            var e;
            for (e = 0; e < c; e++)
                if (a.flakes[a.flakes.length] = new a.SnowFlake(a, parseInt(g(6), 10)), d || e > a
                    .flakesMaxActive) a.flakes[a.flakes.length - 1].active = -1;
            y.targetElement.appendChild(x)
        };
        this.timerInit = function() {
            a.timers = !A ? [setInterval(a.snow, a.animationInterval)] : [setInterval(a.snow, a
                .animationInterval *
                3), setInterval(a.snow, a.animationInterval)]
        };
        this.init = function() {
            var c;
            for (c = 0; c < a.meltFrameCount; c++) a.meltFrames.push(1 - c / a.meltFrameCount);
            a.randomizeWind();
            a.createSnow(a.flakesMax);
            a.events.add(e, "resize", a.resizeHandler);
            a.events.add(e, "scroll", a.scrollHandler);
            a.freezeOnBlur && (i ? (a.events.add(d, "focusout", a.freeze), a.events.add(d, "focusin", a
                .resume)) : (a.events.add(e, "blur", a.freeze), a.events.add(e, "focus", a.resume)));
            a.resizeHandler();
            a.scrollHandler();
            a.followMouse && a.events.add(i ? d : e, "mousemove",
                a.mouseMove);
            a.animationInterval = Math.max(20, a.animationInterval);
            a.timerInit()
        };
        this.start = function(c) {
            if (w) {
                if (c) return true
            } else w = true;
            if (typeof a.targetElement === "string" && (c = a.targetElement, a.targetElement = d.getElementById(
                    c), !a.targetElement)) throw Error('Snowstorm: Unable to get targetElement "' + c + '"');
            if (!a.targetElement) a.targetElement = !i ? d.documentElement ? d.documentElement : d.body : d
            .body;
            if (a.targetElement !== d.documentElement && a.targetElement !== d.body) a.resizeHandler = a
                .resizeHandlerAlt;
            a.resizeHandler();
            a.usePositionFixed = a.usePositionFixed && !t;
            n = a.usePositionFixed;
            if (h && j && !a.disabled) a.init(), a.active = true
        };
        a.events.add(e, "load", r, false);
        return this
    }(window, document);
    //]]>*/
    </script>
</body>

</html>