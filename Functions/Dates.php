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



function IdadeUser($DataNascimento) {

    // Separa em dia, mês e ano
    list($dia, $mes, $ano) = explode('/', $DataNascimento);

    // Descobre que dia é hoje e retorna a unix timestamp
    $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
    // Descobre a unix timestamp da data de nascimento do fulano
    $nascimento = mktime(0, 0, 0, $mes, $dia, $ano);

    // Depois apenas fazemos o cálculo já citado :)
    $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);

    return $idade;
}

function FormataDataSQL($Date) {

    $DataSQL = explode("/", $Date);
    $DataSQL = $DataSQL[2] . '-' . $DataSQL[1] . '-' . $DataSQL[0];

    return $DataSQL;
}

function FormataDataBR($Date) {

    $DataSQL = date('d/m/Y', strtotime($Date));

    return $DataSQL;
}

function FormataDatetimeBR($Date) {

    $DataBR = date('d/m/Y H:i:s', strtotime($Date));

    return $DataBR;
}

function RetornaDiadaSemana($Data) {

    $DiasDaSemana = array('Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado');

    $NumeroDiaDaSemana = date('w', strtotime($Data));

    return $DiasDaSemana[$NumeroDiaDaSemana];
}
