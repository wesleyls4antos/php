<?php
$conexao = mysqli_connect ('localhost','root', '', 'bancoa3', "3306");
    
    if (!$conexao) {
        die ('banco de dados em manutenção');
    } else{
       echo "<center><h1>Conectado<br>";
    }
   
?>