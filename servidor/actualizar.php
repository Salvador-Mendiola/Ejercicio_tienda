<?php 
    include './conexion.php';
    $conexion = conexion();
    $nombre = $_POST['nombre'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $idPersona = $_POST['id'];
    $sql = "UPDATE hardware SET nombre = '$nombre',
                                    marca = '$marca',
                                    modelo = '$modelo'
            WHERE id = '$idPersona'";
    //Ejecutamos el sql
    $result = mysqli_query($conexion,$sql);
    if ($result){
        header ('location:../');
    }else{
        echo 'No se pudo :(';
    }
?>