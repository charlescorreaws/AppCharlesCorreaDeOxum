<?php
require "./Themes/Default/Includes/Header.php";
require "./Themes/Default/Includes/Cabecalho.php";
require "./Functions/Security.php";
require "./Functions/Strings.php";


if ($ServerHost === 'Homologação') {

    $IP_User = MostraIPFake();
    $GeoIP = json_decode(GeoIP($IP_User));
} else {

    $GeoIP = json_decode(GeoIP(MostraRealIP()));
}
$Ip_User = MostraRealIP();



//var_dump($GeoIP_Dados);

if (!$GeoIP->status) {
    echo "<script>alert('Ocorreu um problema junto ao fornecedor de GeoLocalização, comunique o desenvolvedor pelo email contato@charlescorrea.com.br'); </script>";
} else {

    $Cidade_GeoIP = $GeoIP->city;

    $UF_GeoIP = $GeoIP->regionName;

    if (!$UF_GeoIP) {
        $UF_GeoIP = $GeoIP->region;
    }

    $Pais_GeoIP = $GeoIP->country;

    if (!$Pais_GeoIP) {
        $Pais_GeoIP = $GeoIP->countryCode;
    }

    $Latitude_GeoIP = $GeoIP->lat;

    $Longetude_GeoIP = $GeoIP->lon;
}


$Servico = LimpaTagsHTML(AntiSQLInject(getGet('Servico')));


if (($Servico == 'OrixaDeCabeca') || ($Servico == 'OrixaDoDia') || ($Servico == 'CartaDoDia')){



}else{
    echo "<script>alert('O serviço ou pesquisa $Servico parece não ser válido, favor comunicar o desenvolvedor sobre o caso mandando um email pra contato@charlescorrea.com.br');
	location.href='index.php'; </script>";

    exit();
}


?>


<script type="text/javascript">
 $(function(){
     // CONVERTE CARACTERES DO CAMPO EMAIL EM MINUSCULOS
         var campo = $("#Email");
         campo.keyup(function(e){
                 e.preventDefault();
                 campo.val($(this).val().toLowerCase());
         });
 });

</script>

<script type="text/javascript">
        //document.querySelector("#Tela").innerHTML = window.innerWidth;
        document.getElementById('Resolucao_Tela').value = window.innerWidth;

</script>


<script src="https://www.google.com/recaptcha/api.js?render=<?php echo reCAPTCHA_KEY_SITE; ?>&hl=pt-BR"></script>
        <script>
        grecaptcha.ready(function () {
            // do request for recaptcha token
            // response is promise with passed token
            grecaptcha.execute('<?php echo reCAPTCHA_KEY_SITE; ?>', {action: 'submit'})
                .then(function (token) {
                    // add token value to form
                    document.getElementById('g-recaptcha-response').value = token;
                });
        });
        </script>

<div id="formContent" class="fadeInDown border">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
        <h3>Para continuar informe os dados abaixo</h3>
        <p>Os mesmos nos ajudam a ter mais conhecimento das pessoas que usam nosso serviços e a dar uma resposta mais precisa.</p>
        <br/><br/>
    </div>

    <!-- Login Form -->
    <form name="CadastroForm" method="POST" action='VerificaDados.php'>

        <input type="hidden" name="Resolucao_Tela" id='Resolucao_Tela'>

        <input type="hidden" name="Servico" value='<?php echo $Servico; ?>'>

        <input type="hidden" name="GeoIP_Latitude" value='<?php echo $Latitude_GeoIP; ?>'>

        <input type="hidden" name="GeoIP_Longitude" value='<?php echo $Longetude_GeoIP; ?>'>

        <input type="hidden" name="GeoIP_Cidade" value='<?php echo $Cidade_GeoIP; ?>'>

        <input type="hidden" name="GeoIP_Estado" value='<?php echo $UF_GeoIP; ?>'>

        <input type="hidden" name="GeoIP_Pais" value='<?php echo $Pais_GeoIP; ?>'>

        <input type="hidden" name="IP" value='<?php echo MostraRealIP(); ?>'>

        <input type="hidden" name="Data_Acesso" value='<?php echo date('d/m/Y H:i:s'); ?>'>

        <input type="hidden" name="UserAgent" value='<?php echo $_SERVER['HTTP_USER_AGENT']; ?>'>

        <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">

        <input type="text" class="fadeIn second" name="TXT_Nome" placeholder="Nome Completo" autocomplete="off" title="Preencha o campo nome" x-moz-errormessage="Preencha o campo nome" required>

        <input type="email" class="fadeIn second" name="TXT_Email" placeholder="Email" autocomplete="off" title="Preencha o campo email" id='Email' x-moz-errormessage="Preencha o campo email" required>

        <input type="text" class="fadeIn second" name="TXT_WhatsApp" placeholder="Nº WhatsApp com DDD" autocomplete="off" id='WhatsApp' title="Preencha o campo WhatsApp" x-moz-errormessage="Preencha o campo WhatsApp" required>

        <br/>

        <select id="Estado" name='TXT_Estado' required></select>

        <br/>

        <select id="Cidade" name='TXT_Cidade' required></select>

        <br/>

        <script language="JavaScript" type="text/javascript" charset="utf-8">
          new dgCidadesEstados({
            cidade: document.getElementById('Cidade'),
            estado: document.getElementById('Estado')
          })
        </script>

        <input type="text" class="fadeIn second" name="TXT_Nascimento"  value="" placeholder="Data de Nascimento" autocomplete="off" id='DataBR' title="Preencha o campo Data de Nascimento" x-moz-errormessage="Preencha o campo Data de Nascimento" required>

        <br/>

        <select name='Tipo_Pessoa' required>
            <option selected disabled>Você é?</option>
            <option>Simpatizante</option>
            <option>Religioso Iniciado</option>
        </select>

        <select name='Tradicao_Religiosa' required>
            <option selected disabled>Você pertence ou é simpatizante à qual tradição afro?</option>
            <option>Quimbanda</option>
            <option>Umbanda</option>
            <option>Batuque do RS</option>
            <option>Candomblé</option>
            <option>Xangô de Pernambuco</option>
            <option>Babaçuê</option>
            <option>Tambor-de-mina</option>
            <option>Cabula</option>
            <option>Catimbó</option>
            <option>Xambá</option>
            <option>Toré</option>
            <option>Pajelança</option>
            <option>Jurema</option>
            <option>Omolokô</option>
            <option>Terecô</option>
            <option>Nenhuma das Opções Anteriores</option>

        </select>

        <br/><br/><br/><?php echo "Seu IP: ".MostraRealIP();?><br/>

        <input type="submit" name='RegistroParaUso' class="fadeIn fourth" value="Continuar" onclick="Validar_Form()">

    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
        <a class="underlineHover" href="#" >Voltar à Página Inicial</a>
    </div>
</div>



<?php
require "./Themes/Default/Includes/Footer.php";
?>
