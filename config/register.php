<?php 
include ("./connection.php");

//registrar
if(!empty($_POST["btnRegistro"])){

    if(!empty($_POST["nombre_completo"]) &&  !empty($_POST["direccion"]) && !empty($_POST["telefono"]) && !empty($_POST["email"]) && !empty($_POST["password"])){
        
    $nombre = $_POST["nombre_completo"];
    $direccion = $_POST["direccion"];
    $telefono = $_POST["telefono"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    $query = "INSERT INTO personas(nombre_completo, direccion, telefono, email, password, cuil) VALUES ('$nombre','$direccion','$telefono','$email','$password','null')";
    //verificar datos repetidos
    $check_email = mysqli_query($mysqli, "SELECT * FROM personas WHERE email = '$email'");
if(mysqli_num_rows($check_email) > 0){

mysqli_close($mysqli);

}else{
    
    $resultado = mysqli_query($mysqli, $query);
    if(!$resultado){
        echo('No se puede registrar');
        header('localtion: ../views/register.php');
        
    }else{
        header('location:../views/login.php');
    }
    
    }
    mysqli_close($mysqli);
}
    
}

