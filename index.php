<?php

//Para saber como reiniciar contador autoincremento de la tabla. Enlace abajo.

//https://es.stackoverflow.com/questions/11331/como-reiniciar-el-auto-increment-de-mysql/11332

    include "conexion.php";

    $query = "SELECT * FROM horarios";
    $result = mysqli_query($conn, $query);

    //Función resetear que borra la tabla y la vuelve a crear insertando de nuevo los valores

    if(isset($_POST['resetTable'])){

        $delete_info = "DROP TABLE horarios_info";
            $result_info = mysqli_query($conn, $delete_info);

        $create_info = "CREATE TABLE horarios_info (id INT PRIMARY KEY AUTO_INCREMENT, hora VARCHAR(20))";

        $result_info = mysqli_query($conn, $create_info);

        $delete_info_2 = "DROP TABLE horarios_info_2";
            $result_info_2 = mysqli_query($conn, $delete_info_2);

        $create_info_2 = "CREATE TABLE horarios_info_2 (id INT PRIMARY KEY AUTO_INCREMENT, hora VARCHAR(20))";

        $result_info_2 = mysqli_query($conn, $create_info_2);

            $delete = "DROP TABLE horarios";
            $result = mysqli_query($conn, $delete);

        $create = "CREATE TABLE horarios (id INT PRIMARY KEY AUTO_INCREMENT, hora VARCHAR(20))";

        $result = mysqli_query($conn, $create);

        $sql = "INSERT INTO horarios (hora) VALUES ('9:00'),('9:05'),('9:15'),('9:20'),('9:30'),('9:35'),('9:45'), ('9:50'),
        ('10:00'),('10:05'),('10:15'),('10:20'),('10:30'),('10:35'),('10:45'),('10:50'),
        ('11:00'),('11:05'),('11:15'),('11:20'),('11:30'),('11:35'),('11:45'),('11:50'),
        ('12:00'),('12:05'),('12:15'),('12:20'),('12:30'),('12:35'),('12:45'),
        ('13:00'),('13:15'),('13:30'),('13:45'),
        ('14:00'),('14:15'),('14:30'),('14:45'),
        ('15:00'),('15:15'),('15:30'),('15:45'),
        ('16:00'),('16:05'),('16:15'),('16:20'),('16:30'),('16:35'),('16:45'),('16:50'),
        ('17:00'),('17:05'),('17:15'),('17:30'),('17:45'),('18:00');";

        $result = mysqli_query($conn, $sql);
        header("location:index.php");
    }

?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    <title>Panel de control</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container">

            <h1 class="h1 text-center bg-dark text-white p-4" id="title">Citas ProMac</h1>

            <div class="container text-center" id="alert_1"></div>
            <div class="container text-center" id="alert_2"></div>

            <!-- Botones resetear, ir a info y refrescar -->

            <form method="POST" action="" class="text-center m-3 p-1">
            <input type="submit" name="resetTable" value="Resetear" class="btn btn-danger m-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Resetea tabla y voces"/>
            <!--<a class="btn btn-outline-info m-2" href="info.php" target="_blank"> Ir a info</a> -->

            </form>

        <table class="table table-bordered table-hover border-dark text-center" id="example"></table>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

</body>

<script>
    

    var contenido = document.querySelector('#example');

        var myTimer = window.setInterval(traer, 3000);
    

            function traer(){

                fetch('./data.php')
                .then(res => res.json())
                .then(data => {tabla(data)});

            }


/***************

AQUI SE CREA LA TABLA

CADA BOTON TIENE UN EVENTO QUE LANZA SU FUNCION CORRESPONDIENTE 

CADA FUNCION OBTIENE LA HORA A LA QUE HACE REFERENCIA ESE BOTON POR EL ATRIBUTO NAME


 */

            function tabla (data){


                contenido.innerHTML = `<thead>
                            <tr>
                            <th scope="col">Citas</th>
                            <th scope="col">Recepción 1</th>
                            <th scope="col">Recepción 2</th>
                            </tr>
                        </thead>`


                for(let valor of data){

                        contenido.innerHTML += `

                        <tbody>
                        <tr>
                        <td scope="col" class="h2" id="mensaje">  ${valor.hora} </td>
                       
                        <td scope="row">

                        <form method="post">
                        <input type="button" onclick="reception_1(this.name), alertSuccess_1(this.name)" name="${valor.hora}" class="btn btn-outline-dark" value="Atender" id="btnRec1">
                        <input type="button" onclick="reception_1(this.name), alertSuccess_1(this.name)" name="Sin cita" class="btn btn-outline-secondary" value="Sin cita" id="btnRec1">
                        <input type="button" onclick="delete_1(this.name), alertDanger_1(this.name)" name="${valor.hora}" class="btn btn-outline-danger" value="Eliminar" id="btnEliminar1">
                        </td>

                        <td scope="row">
                        <input type="button" onclick="reception_2(this.name), alertSuccess_2(this.name)" name="${valor.hora}" class="btn btn-outline-dark" value="Atender" id="btnRec2">
                        <input type="button" onclick="reception_2(this.name), alertSuccess_2(this.name)" name="Sin cita" class="btn btn-outline-secondary" value="Sin cita" id="btnRec2">
                        <input type="button" onclick="delete_2(this.name), alertDanger_2(this.name)" name="${valor.hora}" class="btn btn-outline-danger" value="Eliminar" id="btnEliminar2">

                        </form>

                        </td>
                       
                        </tr>

                        `;

                }//FIN BUCLE

            }//FIN METODO

traer();


function delete_1 (name){


    $(document).ready(function() {

$.ajax({
                url: "borrar.php",
                type: "POST",
                data: {
                    name: name              
                },
                cache: false

            });



});

}

function delete_2 (name){


$(document).ready(function() {

$.ajax({
            url: "borrar_2.php",
            type: "POST",
            data: {
                name: name              
            },
            cache: false

        });



});

}


function reception_2 (name){

    $(document).ready(function() {


$.ajax({
    url: "save_2.php",
    type: "POST",
    data: {
        name: name
    },
    cache: false

});

});

}


function reception_1 (name){


    $(document).ready(function() {


            $.ajax({
                url: "save.php",
                type: "POST",
                data: {
                    name: name
                },
                cache: false

            });

});

}

function alertSuccess_1 (name){
    var scc = document.getElementById('alert_1');
    scc.innerHTML = `
    
    <div class="alert alert-success alert-dismissible fade show fw-bold" role="alert" id="alert1">
        Recepción 1 ha llamado a cita: `+name+`.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    
    `
}

function alertSuccess_2 (name){
    var scc = document.getElementById('alert_2');
    scc.innerHTML = `
    
    <div class="alert alert-success alert-dismissible fade show fw-bold" role="alert" id="alert2">
    Recepción 2 ha llamado a cita: `+name+`.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    
    `
}

function alertDanger_1 (name){
    var scc = document.getElementById('alert_1');
    scc.innerHTML = `
    
    <div class="alert alert-danger alert-dismissible fade show fw-bold" role="alert" id="balert1">
        Recepción 1 ha eliminado a cita: `+name+`.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    
    `
}

function alertDanger_2 (name){
    var scc = document.getElementById('alert_2');
    scc.innerHTML = `
    
    <div class="alert alert-danger alert-dismissible fade show fw-bold" role="alert" id="balert2">
    Recepción 2 ha eliminado a cita: `+name+`.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    
    `
}


</script>

</html>
