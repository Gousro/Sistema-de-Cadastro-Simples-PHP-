<!-- 
    Criado por Rodrigo [Gousro] 
    Github https://github.com/Gousro
-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Sistema Simples de Cadastro</title>
</head>
<body>
<main>
    <div class="form-cadastro">
        <form action="gravar.php" method="post">
            <h1>Formulario de Cadastro: </h1>
            <label for="nome"><span>Nome:</span> <input type="text" class="input_txt" name="c_nome" id="nome" require></label>
            <label for="email"><span>Email:</span> <input type="email" class="input_txt" name="c_email" id="email" require></label>
            <label for="idade"><span>Idade:</span> <input type="text" class="input_txt" name="c_idade" id="idade" require></label>
            <label for="endereco"><span>Endereço:</span> <input type="text" class="input_txt" name="c_endereco" id="endereco" require></label>
            <input type="submit" class="submit" value="CADASTRAR">
        </form>
    </div>
</main>
<footer>
    <div class="rodape">
    <p>&copy; Copyright - Rodrigo de Jesus Ribeiro</p>
    <p>GitHub: <a href="https://github.com/Gousro" target="_blank">Gousro</a></p>
    </div>
</footer>
</body>
</html>