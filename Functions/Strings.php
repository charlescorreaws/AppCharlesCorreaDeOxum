<?php

//Protegendo Includes contra acesso externo
if (!strcasecmp(basename($_SERVER['SCRIPT_NAME']), basename(__FILE__)))
    die("
	<script Language='javascript'>
	alert('Você não tem permissão suficiente para acessar este arquivo!');
	location.href='../index.php';
</script>
	");

//Protegendo Includes contra acesso externo

/* getGet
 * Verfica o se existe valor 

 * @param $campo var, valor na URL

 */

function getGet($Dados) {

    return isset($_GET["$Dados"]) ? $_GET["$Dados"] : '';
}

/**
  getPost
 * 
 * Verfica o se existe valor 

 * @param $Input var, name do input a ser verificado

 */
function getPost($Input) {

    return isset($_POST["$Input"]) ? $_POST["$Input"] : '';
}

/**
  RetornaValor
 * 
 * Verfica o se existe valor 

 * @param $campo var

 */
function RetornaValor($Valor) {

    $Valor = isset($Valor) ? $Valor : null;

    return $Valor;
}

function ValidaSubmitForm($NomeSubmit, $Mensagem) {
    // $NomeSubmit SERIA O NOME DO BOTÃO DE SUBMIT DO FORMULÁRIO
    if (isset($_POST["$NomeSubmit"])) {

        return true;
    } else {
        echo "<script Language='javascript'>
	alert('$Mensagem');
	location.href='index.php';
</script>";
        return false;
    }
}

function CadastraNewsletters($Dados) {

    $MensagemNewsletters = "";

    $DataOcorrencia['DataCadastro'] = '[' . date('d/m/Y h:i:s A') . '] [IP ' . $_SERVER['REMOTE_ADDR'] . ']';

    if (is_array($Dados)) {

        foreach ($Dados as $msg)
            $MensagemNewsletters .= $DataOcorrencia['DataCadastro'] . " " . $Dados . "\r\n";
    } else {

        $MensagemNewsletters .= $DataOcorrencia['DataCadastro'] . " " . $Dados . "\r\n";
    }

    $CaminhoArquivoNewsletters = 'Databases/Registros_Newsletters.txt';

    $ArquivoNewsletters = fopen($CaminhoArquivoNewsletters, 'a+');

    fwrite($ArquivoNewsletters, $MensagemNewsletters);

    fclose($ArquivoNewsletters);
}
