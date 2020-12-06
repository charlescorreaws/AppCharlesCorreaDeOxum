<?php

require "./Themes/Default/Includes/Header.php";
require "./Themes/Default/Includes/Cabecalho.php";
require "./Functions/Security.php";
require "./Functions/Strings.php";


VerificaEnvioInfo();
ValidaSubmitForm('RegistroParaUso', 'Os dados enviados parecem não ter sido vindos da aplicação original, verifique e tente novamente!');

//var_dump($_POST);



if ($ServerHost == 'Homologação') {

    setcookie('Acesso', true, time() + (360 * 30), "/"); // 86400 = 1 day
    

    $Nome = VerificaVariaveisNulas(AntiSQLInject(LimpaTagsHTML(getPost('TXT_Nome'))), 'Nome');

    $Email = VerificaVariaveisNulas(AntiSQLInject(LimpaTagsHTML(getPost('TXT_Email'))), 'Email');

    if (ValidaEmail($Email)) {

        echo "<script Language='javascript'>
				alert('O endereço de email $Email parece que não é válido, verifique e tente novamente!');
				location.href='index.php';
			</script>";
    }

    $WhatsApp = VerificaVariaveisNulas(AntiSQLInject(LimpaTagsHTML(getPost('TXT_WhatsApp'))), 'WhatsApp');

    $Estado = VerificaVariaveisNulas(AntiSQLInject(LimpaTagsHTML(getPost('TXT_Estado'))), 'Estado (UF)');

    $Cidade = VerificaVariaveisNulas(AntiSQLInject(LimpaTagsHTML(getPost('TXT_Cidade'))), 'Cidade');

    $DataNascimento = VerificaVariaveisNulas(AntiSQLInject(LimpaTagsHTML(getPost('TXT_Nascimento'))), 'Data de Nascimento');

    $Tipo_Pessoa = VerificaVariaveisNulas(AntiSQLInject(LimpaTagsHTML(getPost('Tipo_Pessoa'))), 'Você é?');

    $Tradicao_Religiosa = VerificaVariaveisNulas(AntiSQLInject(LimpaTagsHTML(getPost('Tradicao_Religiosa'))), 'Tradição Religiosa');

    $Servico = VerificaVariaveisNulas(AntiSQLInject(LimpaTagsHTML(getPost('Servico'))), 'Serviço Escolhido');
    
    setcookie('Servico', $Servico, time() + (360 * 30), "/"); // 86400 = 1 day

    /* DADOS DE SEGURANÇA */

    $GeoIP_Latitude = AntiSQLInject(LimpaTagsHTML(getPost('GeoIP_Latitude')));

    $GeoIP_Longitude = AntiSQLInject(LimpaTagsHTML(getPost('GeoIP_Longitude')));

    $GeoIP_Cidade = AntiSQLInject(LimpaTagsHTML(getPost('GeoIP_Cidade')));

    $GeoIP_Estado = AntiSQLInject(LimpaTagsHTML(getPost('GeoIP_Estado')));

    $GeoIP_Pais = AntiSQLInject(LimpaTagsHTML(getPost('GeoIP_Pais')));

    $IP = AntiSQLInject(LimpaTagsHTML(getPost('IP')));

    $Data_Acesso = AntiSQLInject(LimpaTagsHTML(getPost('Data_Acesso')));

    $UserAgent = AntiSQLInject(LimpaTagsHTML(getPost('UserAgent')));

    


    CadastraNewsletters("DATA DE ACESSO: $Data_Acesso; $Nome; $Email; $WhatsApp; $Cidade; $Estado; $DataNascimento; $Tipo_Pessoa; $Tradicao_Religiosa; $Servico; [DADOS GEOIP]=> IP $IP LATITUDE $GeoIP_Latitude LONGITUDE $GeoIP_Longitude CIDADE $GeoIP_Cidade ESTADO $GeoIP_Estado PAÍS $GeoIP_Pais; $UserAgent");


    switch ($Servico) {
        case 'OrixaDeCabeca':

            header("Location: OrixaDeCabeca.php");

            break;

        case 'OrixaDoDia':

            header("Location: OrixaDoDia.php");
            break;

        case 'CartaDoDia':

            header("Location: CartaDoDia.php");
			
            break;
    }
} else {


    if (isset($_POST['g-recaptcha-response'])) {
        $ValorRecaptchaForm = VariavelExiste(LimpaTagsHTML(AntiSQLInject(getPost('g-recaptcha-response'))), 'Token Recaptcha Google');
    } else {
        echo "<script Language='javascript'>
				alert('Token ReCaptcha não retornado, verificar dados!');
				location.href='index.php';
			</script>";


        die();
    }



    $RespostaRecaptcha = VerifiqueGoogleRecaptcha(reCAPTCHA_KEY_SECRET, $ValorRecaptchaForm);

    if ($RespostaRecaptcha["success"]) {

        setcookie('Acesso', true, time() + (360 * 30), "/"); // 86400 = 1 day

        $Nome = VerificaVariaveisNulas(AntiSQLInject(LimpaTagsHTML(getPost('TXT_Nome'))), 'Nome');

        $Email = VerificaVariaveisNulas(AntiSQLInject(LimpaTagsHTML(getPost('TXT_Email'))), 'Email');

        if (ValidaEmail($Email)) {

            echo "<script Language='javascript'>
					alert('O endereço de email $Email parece que não é válido, verifique e tente novamente!');
					location.href='index.php';
				</script>";
        }

        $WhatsApp = VerificaVariaveisNulas(AntiSQLInject(LimpaTagsHTML(getPost('TXT_WhatsApp'))), 'WhatsApp');

        $Estado = VerificaVariaveisNulas(AntiSQLInject(LimpaTagsHTML(getPost('TXT_Estado'))), 'Estado (UF)');

        $Cidade = VerificaVariaveisNulas(AntiSQLInject(LimpaTagsHTML(getPost('TXT_Cidade'))), 'Cidade');

        $DataNascimento = VerificaVariaveisNulas(AntiSQLInject(LimpaTagsHTML(getPost('TXT_Nascimento'))), 'Data de Nascimento');

        $Tipo_Pessoa = VerificaVariaveisNulas(AntiSQLInject(LimpaTagsHTML(getPost('Tipo_Pessoa'))), 'Você é?');

        $Tradicao_Religiosa = VerificaVariaveisNulas(AntiSQLInject(LimpaTagsHTML(getPost('Tradicao_Religiosa'))), 'Tradição Religiosa');

        $Servico = VerificaVariaveisNulas(AntiSQLInject(LimpaTagsHTML(getPost('Servico'))), 'Serviço Escolhido');

        /* DADOS DE SEGURANÇA */

        $GeoIP_Latitude = AntiSQLInject(LimpaTagsHTML(getPost('GeoIP_Latitude')));

        $GeoIP_Longitude = AntiSQLInject(LimpaTagsHTML(getPost('GeoIP_Longitude')));

        $GeoIP_Cidade = AntiSQLInject(LimpaTagsHTML(getPost('GeoIP_Cidade')));

        $GeoIP_Estado = AntiSQLInject(LimpaTagsHTML(getPost('GeoIP_Estado')));

        $GeoIP_Pais = AntiSQLInject(LimpaTagsHTML(getPost('GeoIP_Pais')));

        $IP = AntiSQLInject(LimpaTagsHTML(getPost('IP')));

        $Data_Acesso = AntiSQLInject(LimpaTagsHTML(getPost('Data_Acesso')));

        $UserAgent = AntiSQLInject(LimpaTagsHTML(getPost('UserAgent')));

        setcookie('Servico', $Servico, time() + (360 * 30), "/"); // 86400 = 1 day


        CadastraNewsletters("DATA DE ACESSO: $Data_Acesso; $Nome; $Email; $WhatsApp; $Cidade; $Estado; $DataNascimento; $Tipo_Pessoa; $Tradicao_Religiosa; $Servico; [DADOS GEOIP]=> IP $IP LATITUDE $GeoIP_Latitude LONGITUDE $GeoIP_Longitude CIDADE $GeoIP_Cidade ESTADO $GeoIP_Estado PAÍS $GeoIP_Pais; $UserAgent");


        switch ($Servico) {
            case 'OrixaDeCabeca':

                header("Location: OrixaDeCabeca.php");

                break;

            case 'OrixaDoDia':

                header("Location: OrixaDoDia.php");

                break;

            case 'CartaDoDia':

                header("Location: CartaDoDia.php");

                break;
        }
    } else {


        $Status = $RespostaRecaptcha["success"];

        //var_dump($RespostaRecaptcha);

        $ErroRetornado = $RespostaRecaptcha["error-codes"]["0"];

        // tratamento pras mensagens de erros https://developers.google.com/recaptcha/docs/verify#error_code_reference
        switch ($ErroRetornado) {

            case 'timeout-or-duplicate':

                $MensagemRetorno = 'A resposta não é mais válida: é muito antiga ou foi usada anteriormente em outra solicitação de acesso.';

                break;

            case 'bad-request':

                $MensagemRetorno = 'A solicitação é inválida ou está incorreta.';

                break;

            case 'invalid-input-response':

                $MensagemRetorno = 'O parâmetro de resposta é inválido ou está incorreto.';

                break;

            case 'invalid-input-secret':

                $MensagemRetorno = 'O parâmetro secreto é inválido ou está incorreto.';

                break;

            case 'missing-input-secret':

                $MensagemRetorno = 'O parâmetro secreto está ausente.';

                break;

            case 'missing-input-response':

                $MensagemRetorno = "O parâmetro de resposta é inválido ou está incorreto. --->$ErroRetornado";

                break;

            default:

                $MensagemRetorno = "Erro sem tratamento no momento Valor retornado do Recaptcha Google ---> $ErroRetornado";

                break;
        }



        echo "<script Language='javascript'>
				alert('Sua solicitação de acesso não passou no teste do Recaptcha Google (Aparentemente o Google acha que você é um robô) --> $MensagemRetorno');
				location.href='index.php';
			</script>";



        die();
    }
}
?>





<?php

require "./Themes/Default/Includes/Footer.php";
?>
