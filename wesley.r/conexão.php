<?php
$conexão = mysqli_connect ('localhost','root', '', 'bancoa3', "3306");
    
    if (!$conexão) {
        die ('banco de dados em manutenção');
    } else{
       echo "<center><h1>Conectado<br>";
    }
   
?>