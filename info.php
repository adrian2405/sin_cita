<?php

    include "conexion.php";

    $query = "SELECT * FROM horarios_info";
    $result = mysqli_query($conn, $query);

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

<h1 class="h1 text-center bg-dark text-white p-4" id="title">Citas ProMac</h1>

        <div class="container-fluid d-flex justify-content-center">

        <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade w-50 h-50 m-2" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                    <img src="./assets/img/negro.jpeg" class="d-block w-100" alt="fondo_negro">
                        <div class="carousel-caption d-none d-md-block" id="example">
                </div>
            </div>
        </div>
    </div>

        <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade w-50 h-50 m-2" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                    <img src="./assets/img/negro.jpeg" class="d-block w-100" alt="fondo_negro">
                        <div class="carousel-caption d-none d-md-block" id="example_2">
                </div>
            </div>
        </div>
    </div>

    </div>

    <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade w-100 h-50" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./assets/img/imagen_1.png" class="d-block w-100" alt="imagen_1">
        </div>
                <div class="carousel-item">
                    <img src="./assets/img/imagen_2.png" class="d-block w-100" alt="imagen_2">
        </div>
                <div class="carousel-item">
                    <img src="./assets/img/imagen_3.png" class="d-block w-100" alt="imagen_3">
                        </div>
                </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    <script>

var contenido = document.querySelector('#example');
var contenido_2 = document.querySelector('#example_2');

    var myTimer = window.setInterval(traer, 10000);

            function traer(){

                fetch('./data_info.php')
                .then(res => res.json())
                .then(data => {alerta(data)});

            }

            function alerta (data){
                if(data != ''){

                    data.forEach(element => contenido.innerHTML = '<h1 class="h1 text-white">Recepción 1</h1><br><h2 class="h2">SU TURNO: </h2> <br> <h3 class="h3">Atendiendo cita: ' + element.hora.toString() + '</h3><p>Recuerde haber realizado copia de seguridad anteriormente.</p>');

                }else{

                  contenido.innerHTML = '<h1 class="h1">Recepción 1</h1><br><h2 class="h2">Espere su turno por favor.</h2>';

                }
            }

traer();

</script>
</body>

</html>