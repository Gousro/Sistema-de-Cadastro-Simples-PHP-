<!-- 
    Criado por Rodrigo [Gousro] 
    Github https://github.com/Gousro
-->

<meta charset="UTF-8">
<link rel="stylesheet" href="css/style.css">
<title>Sistema Simples de Cadastro</title>
<?

//PEGA OS DADOS ENVIADOS PELO FORMULÁRIO
$nome = $_POST["c_nome"];
$email = $_POST["c_email"];
$idade = $_POST["c_idade"];
$endereco = $_POST["c_endereco"];

//PREPARA O CONTEÚDO A SER GRAVADO
$conteudo = " 
<div class='infor-usuarios'>
<h1>Usuario: </h1>
<div class='centro'>
<div>
    <span>Nome:</span><span class='c-gravado'> $nome </span>
</div>
<div>
    <span>Idade:</span><span class='c-gravado'>$idade</span>
</div>
<div>
    <span>Email:</span><span class='c-gravado'>$email</span>
</div>
<div>
    <span>Endereço:</span><span class='c-gravado'>$endereco</span>
</div>
</div>
</div> 
";

// SALVARA EM UM ARQUIVO HTML
$arquivo = 'registro.html';

// TENTA ABRIR O ARQUIVO HTML
if (!$abrir = fopen($arquivo, "a")) {
        echo  "<h2 class='c-sucesso'>Erro ao abrir banco de dados.</h2>";
        exit;
   }

// ESCREVE NO ARQUIVO HTML
if (!fwrite($abrir, $conteudo)) {
       print "<h2 class='c-sucesso'>Erro ao cadastrar no banco de dados.</h2>";
       exit;
   }

echo "<h2 class='c-sucesso'>Cadastro realizado com Sucesso!!</h2>";

// FECHA O ARQUIVO HTML
fclose($abrir);
?>