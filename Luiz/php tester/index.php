<?php 

include('config.php');
Mysql::modelo(); //instanciando metodo Estatico


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <title>Crie Sua Conta Gratis</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
<body>
    <form method="post">
        <h1>Cadastro De Usuario</h1>
        <input type="text" name="e-mail" placeholder="E-mail...">
        <input type="text" name="C_e-mail" placeholder="Confirme seu E-mail...">
        <input type="text" name="senha" placeholder="Senha...">
        <input type="text" name="C_senha" placeholder="Confirme sua Senha...">
        <input type="submit" name="acao" value="Cadastrar">
        <input type="hidden" name="cadast" value="c_cadast">
    </form>


</body>
</html>