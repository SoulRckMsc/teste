<?php
require_once 'Vinho.php';

$vinho1 = new Vinho();
$mensagem = "";
$mensagemPreco = "";
$mostra =  "";

if(isset($_POST['btnCadastrar'])){
    $vinho1->setNome($_POST['nome']);
    $vinho1->setTipo($_POST['tipo']);
    $vinho1->setPreco($_POST['preco']);
    $vinho1->setSafra($_POST['safra']);
    $mensagem = "Vinho cadastrado!";
}

if(isset($_POST['btnVerificaPreco'])){
    $vinho1->setNome($_POST['nome']);
    $vinho1->setTipo($_POST['tipo']);
    $vinho1->setPreco($_POST['preco']);
    $vinho1->setSafra($_POST['safra']);
    $verificaPreco = $vinho1->verificarPreco($_POST['preco']);
    if($verificaPreco === true){
        $mensagemPreco = "Produto em Oferta!";
    } else {
        $mensagemPreco = "Produto com o preço normal!";
    }
}

if(isset($_POST['btnMostraVinho'])){
    $vinho1->setNome($_POST['nome']);
    $vinho1->setTipo($_POST['tipo']);
    $vinho1->setPreco($_POST['preco']);
    $vinho1->setSafra($_POST['safra']);
    $mostra = $vinho1->mostrarVinho();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vinhos</title>
</head>
<link rel="stylesheet" href="css/style.css">
<body>
    <form action="" method="post">
        <fieldset>
        <legend>Cadastro de Vinhos</legend>
            <input type="text" name="nome" id="nome" placeholder="Insira o nome do Vinho:" required></br>
            <input type="text" name="tipo" id="tipo" placeholder="Insira o tipo do Vinho:" required></br>
            <input type="text" name="preco" id="preco" placeholder="Insira o preço do Vinho:" required></br>
            <input type="text" name="safra" id="safra" placeholder="Insira a safra do Vinho:" required></br></br>
            <input type="submit" name="btnCadastrar" id="btnCadastrar" value="Cadastrar">
            <input type="submit" name="btnVerificaPreco" id="btnVerificaPreco" value="Verificar Preço">
            <input type="submit" name="btnMostraVinho" id="btnMostraVinho" value="Mostrar Vinho">
        </fieldset></br>
        <table border="4px">
            <tr>
                <td><?php echo $mensagem; ?></td>
            </tr>
            <tr>
                <td>Preço:</td>
                <td><?php echo $mensagemPreco; ?></td>
            </tr>
            <tr>
                <td>Vinho:</td>
                <td><?php echo $mostra; ?></td>
            </tr>
        </table>
    </form>
</body>
</html>