<?php
include "ParametrosDB.php";

    $correo=$_POST["mail"];
    $pregunta=$_POST["enun"];
    $respCorr=$_POST["resp"];
    $inc1=$_POST["inc1"];
    $inc2=$_POST["inc2"];
    $inc3=$_POST["inc3"];
    $complej=$_POST["comp"];
    $tema=$_POST["tem"];
    
    
    $link = new mysqli($server, $user, $pass, $basededatos);
    if($link->connect_error){
        die("La conexión falló:" . $link->connect_error);
    }
    
    $sql = "INSERT INTO Preguntas (Email, Enunciado, RespuestaC, Incorrecta1, Incorrecta2, Incorrecta3, Complejidad, Tema) VALUES ('$correo', '$pregunta', '$respCorr', '$inc1', '$inc2', '$inc3', $complej, '$tema')";
  
    if(!mysqli_query($link, $sql)){
        die("Ha ocurrido algo inesperado");
    }else{
        echo "<p>Los datos se han introducido correctamente</p>";
    }
    mysqli_close($link);
    echo "<a href='VerPreguntas.php'>Ver Preguntas</a>"
    ?>
    