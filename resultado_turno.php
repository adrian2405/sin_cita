
<?php
session_start(); 

if (!isset($_SESSION["turno"])){
    $_SESSION["turno"] = 1;
}else{
    $_SESSION["turno"]++;
}

date_default_timezone_set("America/New York");

if(date('G') == 8){

    $_SESSION["turno"] = 1;

}

?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<title>Turnos</title>
</head>

<body>

<div class="container min-vh-100 d-flex justify-content-center align-items-center">

<div class="container text-center">
<h1>Su turno</h1>

<ul class="list-group">

  <li class="list-group-item"><?php echo "Nombre $nombre: " . $_POST["nombre"] . "<br>"; ?></li>
  <li class="list-group-item"><?php echo "Apellidos $apellidos:  " . $_POST["apellidos"] . "<br>"; ?></li>
  <li class="list-group-item"><?php echo "Email $email:  " . $_POST["email"] . "<br>"; ?></li>
  <li class="list-group-item"><?php echo "Su turno: " . $_SESSION["turno"]; ?></li>

</ul>

    </div>
</div>

<script>


    /*var d = new Date();
    var t = d.toLocaleTimeString('es-ES');
    var clock = document.querySelector("#hora");
    clock.innerHTML = 'Hora: ' + t;*/


</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
        integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
        integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous">
</script>
</body>

</html> 