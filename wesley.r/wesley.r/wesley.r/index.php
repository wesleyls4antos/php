<?php
session_start();


?>
<html>
<link rel = "stylesheet" type = "text/css" href = "estile.css">
<body>
<center><h1><br><br><br><br>Ola,
    <?php
        if(isset($_SESSION['nome'])== null){
    ?>  
        visitante<br>
    <a href = "login.php">login</a>
    <?php } else {
        echo $_SESSION['nome']; ?>
        <br><a href = "cadastro.php">cadastrar</a><br>
        <a href = "alterar.php">Alterar Senha</a><br>
        <a href = "sair.php">sair</a>
        <?php } ?>
</center>

</body>
</html>s