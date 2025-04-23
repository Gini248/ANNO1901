<?php
include_once('../../assets/php/config.php');
$sql = "SELECT * FROM cands_anno ORDER BY discord DESC";
$result = $conexao->query($sql);
$sql_count = "SELECT COUNT(discord) as total FROM cands_anno";
$result_count = $conexao->query($sql_count);
if ($result_count->num_rows > 0) {
    $row = $result_count->fetch_assoc();
    $total = $row["total"];
} 
include_once('../../assets/php/apagar.php');
$rejeitados = isset($_SESSION['c_rejeitados']) ? $_SESSION['c_rejeitados'] : 0;

include_once('../../assets/php/aprovado.php');
$aprovados = isset($_SESSION['c_aprovados']) ? $_SESSION['c_aprovados'] : 0;



?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANNO 1901 | DASHBOARD</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <link rel="stylesheet" href="../../assets/css/dashboard.css">
    <link rel="stylesheet" href="../../assets/css/responsivo.css">
    <link rel="stylesheet" href="../../assets/css/navbar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Moon+Dance&display=swap" rel="stylesheet">
    <link rel="icon" href="../../assets/img/logo.png" >

</head>
<body>

<nav class="navbar">
    <div class="nav-left">
        <a href="../../assets/html/wiki.html">Wiki</a>
        <a href="../../assets/html/loja.html">Loja</a>
    </div>
    <a href="../../index.html">
        <div class="logo"><img src="../../assets/img/logo.png" alt="Logo"></div>
    </a>
    <div class="nav-right">
        <a href="../../assets/html/regras.html">Regras</a>
        <a href="../../assets/php/cands.php">Candidaturas</a>
    </div>
</nav>

<h1 class="aprovado_texto" style="position:absolute; margin-top: 17%; margin-left: -60%"><?php echo $aprovados; ?></h1>
<h1 class="rejeitado_texto" style="position:absolute; margin-top: 17% "><?php echo $rejeitados; ?></h1>
<h1 class="analisar_texto" style="position:absolute; margin-top: 17%; margin-left: 60%"><?php echo $total; ?></h1>
<img src="../../assets/img/aprovados.png" class="aprovados" style="position: absolute; margin-left: -60%; margin-top: 8%">
<img src="../../assets/img/rejeitados.png" class="rejeitados" style="position: absolute; margin-left: 0%; margin-top: 8%">
<img src="../../assets/img/analisar.png" class="analisar" style="position: absolute; margin-left: 60%; margin-top: 8%">



<table class="table table-hover table-bordered text-center mt-4" 
style="position: absolute; margin-top: 30%; width: 70%; line-height: 320%;">
    <thead class="table-dark" style=" color: red;">
        <tr>
            <th scope="col" style="border-right: 2px solid rgba(255, 255, 255, 0.3);">Discord</th>
            <th scope="col" style="border-right: 2px solid rgba(255, 255, 255, 0.3);">Idade OOC</th>
            <th scope="col" style="border-right: 2px solid rgba(255, 255, 255, 0.3);">Nome OOC</th>
            <th scope="col" style="border-right: 2px solid rgba(255, 255, 255, 0.3);">Idade IC</th>
            <th scope="col">Nome IC</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php while ($data = mysqli_fetch_assoc($result)) { ?>
            <tr class="align-middle">
                <td style="border-right: 2px solid rgba(255, 255, 255, 0.3);"><?= $data['discord']; ?></td>
                <td style="border-right: 2px solid rgba(255, 255, 255, 0.3);"><?= $data['idade_ooc']; ?></td>
                <td style="border-right: 2px solid rgba(255, 255, 255, 0.3);"><?= $data['nome_ooc']; ?></td>
                <td style="border-right: 2px solid rgba(255, 255, 255, 0.3);"><?= $data['idade_ic']; ?></td>
                <td><?= $data['nome_ic']; ?></td>
                <td>
    <a href="../../assets/php/ver.php?discord=<?= $data['discord']; ?>">
        <button class='btn btn-danger' style='border-radius: 2px; padding: 5px 5px; display: flex; align-items: center; gap: 8px; box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.15); transition: all 0.3s ease; border: none; background: linear-gradient(135deg, #d32f2f, #b71c1c);'>
            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='white' class='bi bi-eye-fill' viewBox='0 0 16 16'>
                <path d='M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0'/>
                <path d='M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7'/>
            </svg>
        </button>
    </a>
</td>

                <td>
    <a href="../../assets/php/apagar.php? discord=<?= $data['discord']; ?>">
        <button class='btn btn-danger' style='border-radius: 2px; padding: 5px 5px; display: flex; align-items: center; gap: 8px; box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.15); transition: all 0.3s ease; border: none; background: linear-gradient(135deg, #d32f2f, #b71c1c);'>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-trash-fill" viewBox="0 0 16 16">
                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
            </svg>
        </button>
    </a>
</td>
<td>
    <a href="../../assets/php/aprovado.php? discord=<?= $data['discord']; ?>">
        <button class='btn btn-danger' style='border-radius: 2px; padding: 5px 5px; display: flex; align-items: center; gap: 8px; box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.15); transition: all 0.3s ease; border: none; background: linear-gradient(135deg, #d32f2f, #b71c1c);'>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-file-earmark-check-fill" viewBox="0 0 16 16">
  <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1m1.354 4.354-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708.708"/>
</svg>
        </button>
    </a>
            </tr>
        <?php } ?>
    </tbody>
</table>


<img src="../../assets/img/teste.png" class="teste" style="margin-top: 26.5%; z-index: -15;">

<div class="espaço"></div>

</body>
</html>
