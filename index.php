<?php
date_default_timezone_set('America/Mexico_City');
$created_at = date("y-m-d H:i:s");

    $temperatura = $_GET['temp'];
    $humedad = $_GET['hum'];




    $conexion = new mysqli("localhost", "root", "", "laravel");
    $queryPago = "INSERT INTO `maquinas`(`id`, `temperatura`, `humedad`, `created_at`, `updated_at`, `idCliente`, `deleted_at`) VALUES (NULL,'$temperatura','$humedad','$created_at',NULL,'2',NULL)";
    $pago = mysqli_query($conexion, $queryPago);

    //var_dump($pago);
