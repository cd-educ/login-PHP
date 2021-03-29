<?php

    session_start();

    if(isset($_POST["username"]) && isset($_POST["password"])){
        
        if($_POST["username"] == "admin" && $_POST["password"] == "admin"){
            
            $_SESSION["username"] = $_POST["username"];
            header("location:home.php");

        } else {

            $_SESSION["error"] = "Credenciales incorrectas";
            header("location:index.php");

        }

    } else {

        header("location:index.php");

    }

?>