<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php
         $nome = $_GET['name'] ?? ""; 
         $Horas = date("r");
            if($Horas<=12){
                echo "Olá, Sr. $nome, a data de hoje é $Horas da manhã, <strong>Bom dia!</strong>";
            }elseif($Horas<=18){
                echo "Olá,Sr. $nome, a data de hoje é $Horas da tarde, <strong>Boa Tarde!</strong>";
            }else{
                echo "Olá,Sr. $nome, a data de hoje é $Horas, desejo-lhe uma <strong>Boa Noite!</strong>";
            }
        ?>

        <p><a href="javascript:history.go(-1)">Voltar para a página anterior...</a></p>
    </main>
</body>
</html>