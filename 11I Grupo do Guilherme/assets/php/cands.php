<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once('../../assets/php/config.php');

    function sanitize($conexao, $valor) {
        return isset($valor) ? "'" . mysqli_real_escape_string($conexao, trim($valor)) . "'" : "NULL";
    }

     if (!$conexao) {
        die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
    }

     $discord = sanitize($conexao, $_POST['discord'] ?? null);
    $conhecer = sanitize($conexao, $_POST['como_conheceu'] ?? null);
    $banido = sanitize($conexao, $_POST['banido'] ?? null);
    $tempo = sanitize($conexao, $_POST['tempo_roleplay'] ?? null);
    $idade_ooc = sanitize($conexao, $_POST['idade_ooc'] ?? null);
    $nome_ooc = sanitize($conexao, $_POST['nome_ooc'] ?? null);
    $motivo = sanitize($conexao, $_POST['motivo_candidatura'] ?? null);
    $pontos = sanitize($conexao, $_POST['pontos_roleplay'] ?? null);
    $nome_ic = sanitize($conexao, $_POST['nome_ic'] ?? null);
    $idade_ic = sanitize($conexao, $_POST['idade_ic'] ?? null);
    $objetivos = sanitize($conexao, $_POST['objetivos_ic'] ?? null);
    $historia = sanitize($conexao, $_POST['historia_ic'] ?? null);
    $psicologico = sanitize($conexao, $_POST['tracos_psicologicos'] ?? null);

     $check_sql = "SELECT COUNT(*) as total FROM cands_anno WHERE discord = $discord";
    $result = mysqli_query($conexao, $check_sql);
    $row = mysqli_fetch_assoc($result);

    if ($row['total'] > 0) {
        echo "<script>
                alert('Erro: Já existe uma candidatura com este Discord.');
                window.location.href='cands.html';
              </script>";
        exit();
    }

     $sql = "INSERT IGNORE INTO cands_anno (discord, como_conheceu, banido, tempo_rp, idade_ooc, nome_ooc, motivo, pontos, nome_ic, idade_ic, objetivos, historia, psicologico) 
    VALUES ($discord, $conhecer, $banido, $tempo, $idade_ooc, $nome_ooc, $motivo, $pontos, $nome_ic, $idade_ic, $objetivos, $historia, $psicologico)";

    if (mysqli_query($conexao, $sql)) {
        echo "<script>
                alert('Candidatura enviada com sucesso!');
                window.location.href='../../index.html';
              </script>";
    } else {
        echo "<script>
                alert('Erro ao enviar candidatura: " . mysqli_error($conexao) . "');
              </script>";
    }

     mysqli_close($conexao);
}
?>


<!DOCTYPE html>
<html lang="pt">

<head>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Candidatura</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/cands.css">
    <link rel="stylesheet" href="../../assets/css/navbar.css">
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
            <a href="../../assets/html/cands.html">Candidaturas</a>
        </div>
    </nav>

    <div class="container">
        <h1>CANDIDATURA PARA ALLOWLIST</h1>
        <form method="POST" action="cands.php">
            <div class="allowlist-box" >
                <div class="icon">
                    <img src="../../assets/img/exclamacao.png" alt="">
                </div>
                <div class="content">
                    <p>Ser um membro da whitelist da nossa comunidade exige que tenhas tanto uma conta Steam como uma conta Discord com participação no nosso servidor <span class="highlight">Discord</span></p>
                    <p>Além disso, <span class="highlight">Deves</span> conectar as tuas contas Steam e Discord para futuramente caso sejas aceite conseguires jogar. Caso sejas aprovado, o teu Steam ID será utilizado para te conceder acesso aos nossos servidores. Também verificaremos se és membro do servidor Discord antes de permitir que submetas a tua candidatura.</p>
                    <p>Por fim, deves ter pelo menos <span class="highlight"> 18 anos </span> para fazer parte da comunidade e jogar nos nossos servidores.</p>
                </div>
            </div>

            <div class="section">
                <h2>PERGUNTAS GERAIS</h2>
                <label for="fuso_horario">Seleciona o teu fuso horário:</label>
                <select id="fuso_horario" name="fuso_horario">
                    <option value="">Seleciona o teu fuso horário...</option>
                    <option value="UTC-1">UTC-1</option>
                    <option value="UTC">UTC</option>
                    <option value="UTC+1">UTC+1</option>
                </select>

                <label for="como_conheceu">Coloca aqui o teu nickname do discord.</label>
                <input type="text" id="discord" name="discord">

                <label for="como_conheceu">Como conheceste o ANNO 1901?</label>
                <input type="text" id="como_conheceu" name="como_conheceu">

                <label for="banido">Já foste banido de alguma comunidade? Se sim, porquê?</label>
                <input type="text" id="banido" name="banido">

                <label for="tempo_roleplay">Há quanto tempo fazes RolePlay?</label>
                <input type="text" id="tempo_roleplay" name="tempo_roleplay">
            </div>

            <div class="allowlist-box"style="margin-top: -46%;">
                 <div class="icon">
                    <img src="../../assets/img/exclamacao.png" alt="">
                </div>
                <div class="content">
                    <p>Acabas-te a 1ª Parte da tua candidatura agora irás responder a algumas questões nomeadamente sobre ti, para que nós <span class="highlight">Staff do ANNO 1901</span> possamos saber um pouco mais sobre ti.</p>
                    <p>Além disso, <span class="highlight">Deves</span> responder com a maior sinceridade possivel pois futuramente poderemos confirmar algumas questões que aqui foram respondidas.</p>
                    <p>Por fim, deves ter pelo menos <span class="highlight"> 18 anos </span> para fazer parte da comunidade e jogar nos nossos servidores.</p>
                </div>
            </div>
            <div class="section">
                <h2>INFORMAÇÕES OOC</h2>
                <label for="nome_ooc">Nome e Apelido:</label>
                <input type="text" id="nome_ooc" name="nome_ooc">

                <label for="idade_ooc">Idade:</label>
                <input type="text" id="idade_ooc" name="idade_ooc">

                <label for="motivo_candidatura">O que conheces do ANNO 1901 e por que queres juntar-te?</label>
                <input type="text" id="motivo_candidatura" name="motivo_candidatura">

                <label for="pontos_roleplay">Dois pontos positivos e dois pontos negativos do teu RolePlay:</label>
                <input type="text" id="pontos_roleplay" name="pontos_roleplay">
            </div>
            <div class="allowlist-box"style="margin-top: -46%;">
                 <div class="icon">
                    <img src="../../assets/img/exclamacao.png" alt="">
                </div>
                <div class="content">
                    <p>Acabas-te a 2ª parte da tua candidatura agora irás responder a algumas questões nomeadamente sobre a tua personagem</p>
                    <p>Deves ter , <span class="highlight">atenção</span> ao fazeres esta parte da candidatura pois o futuro da tua personagem está aqui, pensa bem e elabora tudo de forma coerente, não tenhas presa e faz a candidatura com calma.</p>
                    <p>Por fim, deves ter pelo menos <span class="highlight"> 18 anos </span> para fazer parte da comunidade e jogar nos nossos servidores.</p>
                </div>
            </div>
           
            <div class="section">
                <h2>INFORMAÇÕES IC</h2>
                <label for="nome_ic">Nome e Apelido:</label>
                <input type="text" id="nome_ic" name="nome_ic">

                <label for="idade_ic">Idade:</label>
                <input type="text" id="idade_ic" name="idade_ic">

                <label for="historia_ic">História:</label>
                <textarea id="historia_ic" name="historia_ic" style="height: 400px; width: 100%;"></textarea>

                <label for="objetivos_ic">Objetivos a longo prazo:</label>
                <textarea id="objetivos_ic" name="objetivos_ic"></textarea>

                <label for="tracos_psicologicos">Traços psicológicos (medos, traumas...):</label>
                <textarea id="tracos_psicologicos" name="tracos_psicologicos"></textarea>
            </div>

            <button type="submit" class="botao">
                Enviar Candidatura
                <div class="ico"></div>
            </button>
        </form>
    </div>
</body>
</html>
