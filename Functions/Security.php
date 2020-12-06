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









/**
 * AntiSQLInject() Verifica os dados enviados por formulários e limpa ocorrências de SQLInjetion nos dados
 * @param Qualquer um
 * @return Valor do $_POST ou $_GET Informados
 * @author Charles Corrêa <charlescorreaweb@gmail.com>
 * @version 0.1
 */
function AntiSQLInject($VariavelParaverificar) {
    //$VariavelParaverificar = (int) $VariavelParaverificar; // VERIFICA SE O VALOR É UM
    // NÚMERO INTEIRO USAR SOMENTE AO PEGAR NÚMEROS VIA
    // GET
    $VariavelParaverificar = trim($VariavelParaverificar);
    // REMOVE ESPAÇOS EM BRANCO
    $VariavelParaverificar = strip_tags($VariavelParaverificar);
    // strip_tags = Elimina as etiquetas HTML e PHP de um
    // texto e convertê-las em cadeias simples, sem essas
    // etiquetas, só com o texto normal.
    // REMOVE TAGS
    $VariavelParaverificar = addslashes($VariavelParaverificar);
    // addslashes = adiciona barra invertida antes de
    // alguns caracteres que precisa ser escapados em queries aos bancos de dados
    // $VariavelParaverificar = mysql_real_escape_string($VariavelParaverificar);
    // mysql_real_escape_string = Escapa uma string para
    // usar em uma consulta MySQL
    // $VariavelParaverificar = mysql_escape_string($VariavelParaverificar);
    $VariavelParaverificar = htmlspecialchars($VariavelParaverificar);
    // htmlspecialchars = converte alguns caracteres
    // pré-definidos para entidades HTML Use a função
    //htmlspecialchars sempre que precisar visualizar
    // esses caracteres no conteúdo da página.
    // Abaixo excluimos algumas palavras e comandos que são usados para SQL Injection
    $VariavelParaverificar = addslashes($VariavelParaverificar);

    $VariavelParaverificar = filter_var($VariavelParaverificar, FILTER_SANITIZE_STRING);

    $Retorno = str_replace("SELECT", "****Palavra $VariavelParaverificar Bloqueada Pelo Sistema****", $VariavelParaverificar);
    $Retorno = str_replace("select", "****Palavra $Retorno Pelo Sistema****", $Retorno);
    $Retorno = str_replace("FROM", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("from", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace(".txt", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace(".TXT", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("INNER", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("inner", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("JOIN", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("join", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("VARCHAR", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("varchar", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("UNION", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("union", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("ORDER", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("order", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("VERSION", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("version", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("CONVERT", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("convert", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("USING", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("using", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("LATIN1", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("latin1", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("unex", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("CONCAT", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("concat", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("PASSWORD", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("password", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("USERNAME", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("username", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("mysql.user/*", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("information_schema.tables/*", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("information_schema.tables", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("information_schema.columns", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("WHERE", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("where", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("Where", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("INSERT", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("insert", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("UPDATE", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("update", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("DELETE", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("delete", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("DROP", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("drop", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("DATABASE", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("database", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("USE ", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("&#49&#39&#32&#79&#82&#32&#39&#49&#39&#61&#39&#49", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("1 AND ASCII(LOWER(SUBSTRING((SELECT TOP 1 name FROM sysobjects WHERE xtype='U'), 1, 1))) > 116", "****Palavra $VariavelParaverificar Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("' OR username IS NOT NULL OR username = '", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("1' AND non_existant_table = '1", "", $Retorno);
    $Retorno = str_replace("%31%27%20%4F%52%20%27%31%27%3D%27%31", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("&#x31;&#x27;&#x20;&#x4F;&#x52;&#x20;&#x27;&#x31;&#x27;&#x3D;&#x27;&#x31;", "****Palavra $VariavelParaverificar Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("1'1", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("'; DESC users; --", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("1 AND USER_NAME() = 'dbo'", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("1' AND 1=(SELECT COUNT(*) FROM tablenames); --", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("1 AND 1=1", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("1 EXEC XP_", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("1'1", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("1 UNI/**/ON SELECT ALL FROM WHERE", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("1' OR '1'='1", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("1 OR 1=1", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("1 UNION ALL SELECT 1,2,3,4,5,6,name FROM sysObjects WHERE xtype = 'U' --", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("1 UNI/**/ON SELECT ALL FROM WHERE", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("'OR1'", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace(" AND ", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace(" AND", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("AND ", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    //$VariavelParaverificar = str_replace(":", "****Palavra $VariavelParaverificar Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("/**/", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("concat_ws", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("/*", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("union all", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("union", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("<", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace(">", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("&", "e", $Retorno);
    $Retorno = str_replace("$", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("@@version", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    //$VariavelParaverificar = str_replace(",", "****Palavra $VariavelParaverificar Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("0x3a", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("Count(*)", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("length", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("substring", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("ascii", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("limit", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("cmd", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("task=plugin", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("imgmanager", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("CAST", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("cast", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("GROUP BY", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("kWQY", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("com_jce", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("group_concat", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("IFNULL", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("database()--", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("column_name", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("table_name", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("#", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("gpl-log", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("database()", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);
    $Retorno = str_replace("/**/", "****Palavra $Retorno Bloqueada Pelo Sistema****", $Retorno);


    return $Retorno;
}

function LimpaTagsHTML($String) {

    $String = filter_var($String, FILTER_SANITIZE_STRING); //Limpa tags html da string

    return $String;
}

/**
 * ValidaEmail() Valida email antes de salvar no banco de dados
 * @param = (String) Text
 * @return = Bool
 * @author Charles Corrêa <charlescorreaweb@gmail.com>
 * @version 0.1
 * @copyright Copyright © 2016, Charles Corrêa - Soluções Web & SMS Marketing.
 */
function ValidaEmail($String) {

    $String = filter_var($String, FILTER_SANITIZE_EMAIL);

    if (preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $String)) {
        if ((!isset($String) || !filter_var($String, FILTER_VALIDATE_EMAIL))) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function VerificaVariaveisNulas($VariavelNula, $nome = null) {

    if ($VariavelNula == NULL) {

        echo "<script>alert('O campo $nome não foi informado no formulário, retorne e tente novamente!');location.href='index.php';</script>";

        exit();
    }
    return $VariavelNula;
}

/**
 * VerificaEnvioInfo() Verifica de qual forma foi enviado os dados de um formulário
 * @param Nenhum
 * @version 0.1
 * @author Charles Corrêa <charlescorreaweb@gmail.com>
 */
function VerificaEnvioInfo() {

    // Verifica se a variável $_POST não é vazia...
    // ou seja: houve um submit no formulário
    // Verifica se o POST tem algum valor
    //Captura o metodo de envio POS ou GET
    $MetodoEnvio = getenv('REQUEST_METHOD');
    if (isset($MetodoEnvio)) {
        //echo "Variavel $MetodoEnvio passadas por Post ou GET EXISTE com o isset";
    } elseif (empty($MetodoEnvio)) {

        //echo "Variavel $MetodoEnvio passadas por Post ou GET ESTÁ EM BRANCO OU NULA com
        // o empty";
    } else {
        die('<script>alert("Os valores passados não foram passados por um formulário com submit ou estão em branco, retorne e tente novamente.\n\nCaso o erro continue informe o desenvolvedor pelo link \n\nhttp://helpdesk.charlescorrea.com.br ");location.href="index.php";</script>');
    }


    if ((!$MetodoEnvio == 'GET') || (!$MetodoEnvio == 'POST')) {
        echo "<script>alert('Os valores passados por $MetodoEnvio não estão corretos, retorne e tente novamente. Caso o erro continue informe o desenvolvedor.')location.href='index.php';;</script>";
        exit();
    }


    return;
}

/**
 * VerificaPOSTForm() Verifica se os dados forem enviados por um sibmit de um formulário
 * @param = Nenhum
 * @return = String Hash.
 * @author Charles Corrêa <charlescorreaweb@gmail.com>
 * @version 1.0
 * @copyright Copyright © 2018, Charles Corrêa - Soluções Web & SMS Marketing.
 */
function VerificaPOSTForm() {
    if (getenv('REQUEST_METHOD') != 'POST') {
        echo "<script>alert('Os valores passados por $MetodoEnvio não estão corretos, retorne e tente novamente. Caso o erro continue informe o desenvolvedor.')location.href='index.php';;</script>";
        exit();
    }

    //var_dump($_POST);

    return;
}

/**
 * VariavelExiste() Verifica se os dados do formulário estão em branco ou não
 * @param Nenhum
 * @return Valor do $_POST
 * @author Charles Corrêa <charlescorreaweb@gmail.com>
 * @version 0.1
 */
function VariavelExiste($VariavelParaAnalisar, $POST = "null") {

    if ($POST == FALSE) {

        $POST = "VALOR NÃO INFORMADO PELO DESENVOLVEDOR NA FUNÇÃO VerificaVariaveisExistentes";
    }


    if (empty($VariavelParaAnalisar)) {
        echo "<script>alert('A recebida variável para analise não foi preenchida pelo usuário ou retornou com valor NULO (empty $POST), retorne e tente novamente. Caso o erro continue informe o desenvolvedor');</script>";
        exit("<script>history.go(-1);</script>");
    }

    return $VariavelParaAnalisar;
}

function VerificaBloqueioIE($Agent) {

    $url = "http://www.useragentstring.com/?getJSON=all&uas=" . urlencode($Agent);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, $Agent);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    $Dados = json_decode(curl_exec($ch));
    curl_close($ch);

    //return json_decode($Dados);

    $Navegador = isset($Dados->agent_name) ? $Dados->agent_name : '';
    // $VersaoNavegador = isset($Dados->agent_version) ? $Dados->agent_version : '';

    if ($Navegador == 'Internet Explorer' OR $Navegador == 'Edge' OR $Navegador == 'Safari') {


        setcookie("UserAgent", "$Agent", time() + 86400);
        setcookie("BloqueiaAcesso", true, time() + 86400);

        return true;
    } else {

        setcookie("UserAgent", "$Agent", time() + 86400);
        setcookie("BloqueiaAcesso", 0, time() + 86400);

        return false;
    }
}

function VerifiqueGoogleRecaptcha($RecaptchaKeySecret, $RecaptchaResponseFormHTML) {


    $DadosRecaptcha = array(
        'secret' => $RecaptchaKeySecret,
        'response' => $RecaptchaResponseFormHTML,
        'remoteip' => $_SERVER['REMOTE_ADDR']
    );


    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($DadosRecaptcha));
    curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_HOST']);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $ResponseGoogle = json_decode(curl_exec($ch), true);

    if (curl_errno($ch)) {
        $error_msg = curl_error($ch);
        die($error_msg);
        $ResponseGoogle = false;
    }

    curl_close($ch);

    return $ResponseGoogle;
}

function MostraIPFake(){

        $ip = '179.178.26.72';
    return $ip;
}

//Verifica o Proxy e retorna o ip real
function MostraRealIP() {

	return isset($_SERVER['HTTP_CLIENT_IP']) ? $_SERVER['HTTP_CLIENT_IP'] : isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];
 }

/**
 * GeraToken() Esta função gera uma string hash criptografada para ser usada pelo sistema.
 * @author Charles Corrêa <charlescorreaweb@gmail.com>
 * @version 1.0
 * @param = Nenhum
 * @return = String Hash.
 * @copyright Copyright © 2014, Charles Corrêa - Soluções Web & SMS Marketing.
 */
function GeraToken() {
    $Token = hash('sha512', uniqid(mt_rand()));
    // geramos um número unico e codificamos este com sha512

    $Token = hash('whirlpool', $Token);

    return $Token;
}

/**
 * GeraSenhaCriptografada()
 * Esta função gera uma string hash criptografada para a senha afim de dificultar a apresentação da mesma no banco de dados.
 * @author Charles Corrêa <charlescorreaweb@gmail.com>
 * @version 1.0
 * @param = String
 * @return = String Hash.
 * @copyright Copyright © 2015, Charles Corrêa - Soluções Web & SMS Marketing.
 */
function GeraSenhaCriptografada($Senha) {
    $Salt = "~oj[SW/e8]v@GeI;8h[+iW4^qkG?L&^R|]<h76P]O,u`MAure9QHlg0QTU[_zKc-'";
    // criamos um hash padrão para todos os usuários

    $Salt = hash('whirlpool', $Salt);
    //Criptografamos o salt em whirlpool

    $Senha = hash('whirlpool', $Senha);
    //Por garantia codificamos a senha do usuario em whirlpool afim de dificultarmos a
    // descoberta da senha

    $SenhaParaCriptograr = md5($Senha . $Salt);
    // passamos pelo md5 a senha do usuário ja códificada juntamente com o salt

    $SenhaCriptografada = hash('whirlpool', $SenhaParaCriptograr);
    //criptografamos a senha padrão (salt) e a do usuário movamente em whirlpool

    for ($i = 0; $i < 10; $i++) {
        // executamos a codificação em md5 10 vezes
        $SenhaCriptografada = md5($SenhaCriptografada);
    }

    return $SenhaCriptografada;
}

function GeraPasswordHash($String) {
    $OpcoesForcaSenha = [
        'cost' => 12 // the default cost is 10
    ];

    $Hash_Senha = password_hash(GeraSenhaCriptografada($String), PASSWORD_BCRYPT, $OpcoesForcaSenha);

    return $Hash_Senha;
}


Function GeoIP($IP) {

    if (!filter_var($IP, FILTER_VALIDATE_IP)) {
        echo "<script>alert('Seu endereço de IP $IP parece não ser válido, favor comunicar o desenvolvedor sobre o caso mandando um email pra contato@charlescorrea.com.br'); </script>";
    }

    $API = "http://ip-api.com/json/$IP";

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $API);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);
    curl_setopt($curl, CURLOPT_HEADER, false);

    $Resultado = curl_exec($curl);

    curl_close($curl);

    return $Resultado;
}




?>
