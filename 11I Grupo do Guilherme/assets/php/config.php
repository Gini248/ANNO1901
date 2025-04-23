<?php
$servername = "localhost";
$username   = "root";
$password   = "";  
$database   = "anno_cands";
$port       = 3306;  

 $conexao = new mysqli($servername, $username, $password, $database, $port);

 if ($conexao->connect_error) {
    die("Erro na ligação à base de dados: " . $conn->connect_error);
}
?>
