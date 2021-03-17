<?php


    include "conexion.php";
    include "funciones.php";

    $query = "SELECT * FROM horarios";
    $result = mysqli_query($conn, $query);

    //Función resetear que borra la tabla y la vuelve a crear insertando de nuevo los valores

    if(isset($_POST['reset'])){

            $delete = "DROP TABLE horarios";
            $result = mysqli_query($conn, $delete);

        $create = "CREATE TABLE horarios (id INT PRIMARY KEY AUTO_INCREMENT, hora VARCHAR(20))";

        $result = mysqli_query($conn, $create);

        $sql = "INSERT INTO horarios (hora) VALUES ('9:00'),('9:15'),('9:30'),('9:45'),('10:00'),('10:15'),('10:30'),('10:45'),
        ('11:00'),('11:15'),('11:30'),('11:45'),('12:00'),('12:15'),('12:30'),('12:45'),('13:00'),('13:15'),('13:30'),('13:45'),
        ('14:00'),('14:15'),('14:30'),('14:45'),('15:00'),('15:15'),('15:30'),('15:45'),('16:00'),('16:15'),('16:30'),('16:45'),
        ('17:00'),('17:15'),('17:30'),('17:45'),('18:00');";

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
</head>

<body>

    <div class="container-lg">

    <div class="row justify-content-center">

    <div class="col-12">

        <h1 class="h1 text-center bg-dark text-white p-4" id="title">Citas ProMac</h1>

        <!-- Botones resetear, ir a info y refrescar -->

        <form method="POST" action="" class="text-center m-3">
        <input type="submit" name="reset" value="Resetear" class="btn btn-outline-primary" />
        <a class="btn btn-outline-info" href="info.php"> Ir a info</a>
        </form>

    </div>






        <div class="col-4">
        <table class="table table-bordered table-hover border-dark text-center" id="example">





        </table>

        </div>

        <div class="col-8">

        <table class="table table-bordered table-hover border-dark text-center" id="example_2">

        <?php

        //Función que recorre la tabla de la base de datos y lo muestra en una tabla html

        while($row = mysqli_fetch_array($result))
        {
        ?>
            <tr>

            <!-- Pendiente modificar botones para que envíen las variables a info.php -->

            <td><button type='button' class='btn btn-outline-secondary'>Atender</button></td>
            <td><button type='button' class='btn btn-outline-secondary'>Sin cita</button></td>
            <td><a class="btn btn-outline-danger" href="borrar.php? id=<?php echo $row["id"];?>"> Eliminar</a></td>
            </tr>
        <?php
        }

        ?>



        </table>

        </div>


        </div>












    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>







</body>












<script>
    
    var contenido = document.querySelector('#example');


    var myTimer = window.setInterval(traer, 10000);


            function traer(){

                fetch('./data.php')
                .then(res => res.json())
                .then(data => {tabla(data)});

            
            }


            function tabla (data){

                console.log('hola');

                contenido.innerHTML = ''
                for(let valor of data){

                        contenido.innerHTML += `

                        <tr>
                        <th scope="col">  <button type='button' class='btn btn-light'>${valor.hora}  </button></th>
                        </tr>

                        `
                }

            }





traer();


</script>



</html>