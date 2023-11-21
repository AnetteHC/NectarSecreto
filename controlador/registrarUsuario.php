<?php
    session_start();
    require("../modelo/conexionPDO.php");
    $pass_nocifrada = $_POST['clave'];
    $pass_cifrada = password_hash($pass_nocifrada, PASSWORD_DEFAULT, array("cost"=>10));
    //echo $pass_nocifrada;
    //echo "   " . " ". $pass_cifrada; 
    if($conn == true){
        $inserta = $conn -> prepare("INSERT INTO t_usuarios(correo,clave,nombreUsuario,aPaterno,aMaterno,direccion,telefono)VALUES (:correo, :clave, :nombre, :apaterno, :amaterno, :direccion, :telefono)");
        $inserta -> bindParam(':correo', $_POST['correo']);
        $inserta -> bindParam(':clave', $pass_cifrada);
        $inserta -> bindParam(':nombre', strtoupper($_POST['nombre']));
        $inserta -> bindParam(':apaterno', strtoupper($_POST['apaterno']));
        $inserta -> bindParam(':amaterno', strtoupper($_POST['amaterno']));
        $inserta -> bindParam(':direccion', strtoupper($_POST['direccion']));
        $inserta -> bindParam(':telefono', $_POST['telefono']);
        
        $inserta -> execute();

        $conn = null;
        header('Location: ../login.php');
    }else {
        echo "Error al procesar recurso";
    }
?>
