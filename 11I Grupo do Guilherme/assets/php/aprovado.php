<?php
include_once('../../assets/php/config.php');
if (!isset($_SESSION)) {
    session_start();
}
if (!isset($_SESSION['c_aprovados'])) {
    $_SESSION['c_aprovados'] = 0;
}

if (isset($_GET['discord'])) {
    $discord = $_GET['discord'];

    $sql = "DELETE FROM cands_anno WHERE discord = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param('s', $discord);

    if ($stmt->execute()) {
        $_SESSION['c_aprovados']++;
        echo "Registro excluído com sucesso!";



        header("Location: ../../assets/php/dashboard.php"); 
    }

    $stmt->close();
} 
?>
