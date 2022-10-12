<?php 
    include './conexion.php';
    $conexion = conexion();
    $nombre = $_POST['nombre'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $sql = "INSERT INTO hardware (
                        nombre,
                        marca,
                        modelo) 
        VALUES ('$nombre',
                '$marca',
                '$modelo')";
    //Ejecutamos el sql
    $result = mysqli_query($conexion,$sql);
    if ($result){
        header ('location:../index.php');
    }else{
        echo 'No se pudo :(';
    }
?>