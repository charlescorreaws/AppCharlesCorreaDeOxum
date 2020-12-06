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

require "./Functions/Dates.php";

$DiaDaSemana = RetornaDiadaSemana(date('Y-m-d', strtotime($Data_Acesso)));



switch ($DiaDaSemana) {
    case 'Domingo':
            require "./Themes/Default/Includes/Orixas/Domingo.php";
        
        break;
    
    case 'Segunda':
            require "./Themes/Default/Includes/Orixas/Segunda-Feira.php";

        break;    
    
    
    case 'Terça':
            require "./Themes/Default/Includes/Orixas/Terca-Feira.php";

        break;
    
    case 'Quarta':
            require "./Themes/Default/Includes/Orixas/Quarta-Feira.php";

        break;
    
    case 'Quinta':
            require "./Themes/Default/Includes/Orixas/Quinta-Feira.php";

        break;
    
    case 'Sexta':
            require "./Themes/Default/Includes/Orixas/Sexta-Feira.php";

        break;
    
    case 'Sábado':
            require "./Themes/Default/Includes/Orixas/Sabado.php";

        break;

    
}





?>

