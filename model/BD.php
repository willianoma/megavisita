<?php

$op = 1;

switch ($op) {
    case 1:

        $banco = "bancohora";
        $usuario = "root";
        $senha = "";
        $hostname = "localhost";

        break;


    default:

        $banco = "";
        $usuario = "";
        $senha = "";
        $hostname = "localhost";
//        $conn = mysql_connect($hostname, $usuario, $senha);
//        mysql_select_db($banco);
        break;
}

$conn = mysql_connect($hostname, $usuario, $senha);
mysql_select_db($banco) or die("Não foi possível conectar ao banco MySQL");
if (!$conn) {
    echo "Não foi possível conectar ao banco MySQL.";
    exit;
} else {
//    echo "Parabéns!! A conexão ao banco de dados ocorreu normalmente!.";
}
?>
