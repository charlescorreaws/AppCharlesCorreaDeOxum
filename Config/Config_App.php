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


$ServidorAtual = $_SERVER['HTTP_HOST'];

if (
        ($ServidorAtual == 'localhost') ||
        ($ServidorAtual == 'localhost:8080') ||
        ($ServidorAtual == 'localhost:8087') ||
        ($ServidorAtual == 'localhost:8888') ||
        ($ServidorAtual == '127.0.0.1') ||
        ($ServidorAtual == '127.0.0.1:80') ||
        ($ServidorAtual == '127.0.0.1:8080') ||
        ($ServidorAtual == '127.0.0.1:8087') ||
        ($ServidorAtual == '127.0.0.1:8888') ||
        ($ServidorAtual == '127.0.0.1:80') ||
        ($ServidorAtual == 'server.sys')
)
{
    $ServerHost = 'Homologação';
}else{
    $ServerHost = 'Produção';
}




header('Content-Type: text/html; charset=utf-8');
ini_set('default_charset', 'UTF-8');
ini_set("session.gc_maxlifetime", "604800");
ini_set('session.gc_divisor', 604800);
ini_set('session.cache_limiter', 'nocache');
ini_set('session.cookie_httponly', true);
ini_set("max_input_vars", 100);
ini_set("soap.wsdl_cache_enabled", "0");
ini_set("max_input_vars", 100);
date_default_timezone_set("America/Sao_Paulo");
//mysql_set_charset('utf8');
setlocale(LC_COLLATE, 'pt_BR.UTF-8');
setlocale(LC_ALL, "pt_BR", "pt_BR.iso-8859-1", "pt_BR.utf-8", "portuguese");
setlocale(LC_TIME, 'pt_BR.UTF-8');
setlocale(LC_MONETARY, 'pt_BR');

define('URL_APP', 'http://app.charlesdeoxum.com.br');
define('VERSAO_APP', '1.0.0.0');
################# GOOGLE reCAPTCHA V3 #################
define('reCAPTCHA_KEY_SITE', '6LfiY-QUAAAAAIIZSN7A1oz1El3p7R5HAvMExwca');
define('reCAPTCHA_KEY_SECRET', '6LfiY-QUAAAAAFRwsGcvwKzQBjpXgq-WTB_PWbCo');
################# GOOGLE reCAPTCHA #################

################# GOOGLE Analytics e Optimize #################
define('GoogleAnalytics_Code', 'UA-38421052-4');
define('GoogleTagManager_Code', 'GTM-KZ5VDZ4');
################# GOOGLE reCAPTCHA #################

################# LINK DE REDES SOCIAIS #################
define('INSTAGRAM', 'http://click.charlesdeoxum.com.br/Instagram');
define('FACEBOOK', 'http://click.charlesdeoxum.com.br/Facebook');
define('YOUTUBE', 'http://click.charlesdeoxum.com.br/Youtube');
define('TWITTER', 'http://click.charlesdeoxum.com.br/twitter');
define('SITE', 'http://click.charlesdeoxum.com.br/Site');
define('BLOG', 'http://click.charlesdeoxum.com.br/blog');
define('FEED_RSS', 'http://blog.charlesdeoxum.com.br/feed/');
define('WHATSAPP', 'http://click.charlesdeoxum.com.br/whatsapp');
define('TELEGRAM', 'http://click.charlesdeoxum.com.br/telegram');

################# LINK DE REDES SOCIAIS #################


?>