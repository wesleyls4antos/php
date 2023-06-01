<?php
session_start();


?>
<html>
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
        <a href = "sair.php">sair</a><br>
        <a href = "listar.php">listar</a><br>
        <a href = "alterar">alterar senha</a>
        <?php } ?>
</center>

</body>
</html>

    <html>
    <head>
    <meta>
    <meta>
     <link rel = "stylesheet" type = "text/css" href = "estilo.css">

    </head>
    <body>
    


    </body>
    </html>