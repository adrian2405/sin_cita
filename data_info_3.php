<?php

    include "conexion.php";

    $query = "SELECT * FROM horarios_info_3";
    $result = mysqli_query($conn, $query);
    echo json_encode(
    mysqli_fetch_all($result, MYSQLI_ASSOC)
    );