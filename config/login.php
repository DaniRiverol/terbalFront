<?php
include('./connection.php');

session_start();
if(!empty($_POST["btnIngreso"])){

    if(!empty($_POST["email"]) && !empty($_POST["password"])){
        
        $email = $_POST["email"];
        $password = $_POST["password"];
        $query= "SELECT * FROM personas WHERE email = '$email' AND password = '$password'";
        $resultado = mysqli_query($mysqli, $query);
        
        if($data = $resultado->fetch_object()){
            $_SESSION["id"]= $data->id;
            $_SESSION["nombre_completo"]= $data->nombre_completo;
            $_SESSION["direccion"]= $data->direccion;
            $_SESSION["telefono"]= $data->telefono;
            $_SESSION["email"]= $data->email;
            $_SESSION["rol"]= $data->rol;
            switch ($_SESSION['rol']) {
                case "admin":
                    echo'<script>alert("Bienvenido")</script>';
                    header('location: ../admin.php');
                    break;
                case "cliente":
                    echo'<script>alert("Bienvenido")</script>';
                    header('location: ../views/home.php');
                    break;
                case "empleado":
                    echo'<script>alert("Bienvenido")</script>';
                    header('location: ../empleado.php');
                    break;
                case "veterinario":
                    echo'<script>alert("Bienvenido")</script>';
                    header('location: ../profesional.php');
                    break;
            }
        }else{
            echo'<script>alert("No se puede acceder")</script>';
        }
        mysqli_close($mysqli);
    }
    
}

?>