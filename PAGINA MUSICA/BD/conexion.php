<?php
$Servidor = "localhost";
$Usuario = "root";
$Pass = "";
$BD = "pag";

$Conection = new MySqli($Servidor, $Usuario, $Pass, $BD);

if($Conection->connect_errno){
    die("Conexion fallida " . $Conection->connect_errno);
    }
    else{
        echo"Conectado";
    }

?>