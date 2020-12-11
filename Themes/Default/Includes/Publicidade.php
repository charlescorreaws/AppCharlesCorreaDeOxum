<?php
	
	$Publicidades = array(
	array("Nome_Anunciante" => "Banco Inter", "URL_Banner" => "http://blog.charlesdeoxum.com.br/wp-content/uploads/2020/12/BancoInter_970-369_CharlesCorreaDeOxum_CharlesCorreaSolucoesWeb_Afiliados.jpg", "URL_Link" => "http://click.charlescorrea.com.br/Banco-Inter"),
	array("Nome_Anunciante" => "Hostinger Brasil", "URL_Banner" => "http://blog.charlesdeoxum.com.br/wp-content/uploads/2020/12/Banner_Hostinger_90Off__CharlesCorreaDeOxum_CharlesCorreaSolucoesWeb_Afiliados.jpg", "URL_Link" => "http://click.charlescorrea.com.br/hostinger"),
	array("Nome_Anunciante" => "Hostinger Brasil", "URL_Banner" => "http://blog.charlesdeoxum.com.br/wp-content/uploads/2020/12/Banner_Hostinger_970-369_CharlesCorreaDeOxum_CharlesCorreaSolucoesWeb_Afiliados.jpg", "URL_Link" => "http://click.charlescorrea.com.br/hostinger"),
	array("Nome_Anunciante" => "C6 Bank", "URL_Banner" => "http://blog.charlesdeoxum.com.br/wp-content/uploads/2020/12/C6_970-369_CharlesCorreaDeOxum_CharlesCorreaSolucoesWeb_Afiliados.jpg", "URL_Link" => "http://click.charlesdeoxum.com.br/c6bank"),
	array("Nome_Anunciante" => "Natura", "URL_Banner" => "http://blog.charlesdeoxum.com.br/wp-content/uploads/2020/12/NATURA_970-369_CharlesCorreaDeOxum_CharlesCorreaSolucoesWeb_Afiliados.jpg", "URL_Link" => "http://click.charlescorrea.com.br/natura"),
	array("Nome_Anunciante" => "Natura", "URL_Banner" => "http://blog.charlesdeoxum.com.br/wp-content/uploads/2020/12/NATURA2_970-369_CharlesCorreaDeOxum_CharlesCorreaSolucoesWeb_Afiliados.jpg", "URL_Link" => "http://click.charlescorrea.com.br/natura"),
	array("Nome_Anunciante" => "Nubank", "URL_Banner" => "http://blog.charlesdeoxum.com.br/wp-content/uploads/2020/12/Nubank_970-369_CharlesCorreaDeOxum_CharlesCorreaSolucoesWeb_Afiliados.jpg", "URL_Link" => "http://click.charlescorrea.com.br/nubank"),
	array("Nome_Anunciante" => "NuBank", "URL_Banner" => "http://blog.charlesdeoxum.com.br/wp-content/uploads/2020/12/Nubank2_970-369_CharlesCorreaDeOxum_CharlesCorreaSolucoesWeb_Afiliados.jpg", "URL_Link" => "http://click.charlescorrea.com.br/nubank"),
	array("Nome_Anunciante" => "Moderninha PagSeguro", "URL_Banner" => "http://blog.charlesdeoxum.com.br/wp-content/uploads/2020/12/PAGSEGURO_970-369_CharlesCorreaDeOxum_CharlesCorreaSolucoesWeb_Afiliados.jpg", "URL_Link" => "http://click.charlescorrea.com.br/PagSeguro-Maquineta"),
	array("Nome_Anunciante" => "PagSeguro Moderninha", "URL_Banner" => "http://blog.charlesdeoxum.com.br/wp-content/uploads/2020/12/PAGSEGURO2_970-369_CharlesCorreaDeOxum_CharlesCorreaSolucoesWeb_Afiliados.jpg", "URL_Link" => "http://click.charlescorrea.com.br/PagSeguro-Maquineta"),
	array("Nome_Anunciante" => "PicPay", "URL_Banner" => "http://blog.charlesdeoxum.com.br/wp-content/uploads/2020/12/PICPAY_970-369_CharlesCorreaDeOxum_CharlesCorreaSolucoesWeb_Afiliados.jpg", "URL_Link" => "http://click.charlescorrea.com.br/picpay"),
	array("Nome_Anunciante" => "StreamYard - Lives Simultâneas", "URL_Banner" => "http://blog.charlesdeoxum.com.br/wp-content/uploads/2020/12/StreamYard_970-369_CharlesCorreaDeOxum_CharlesCorreaSolucoesWeb_Afiliados.jpg", "URL_Link" => "http://click.charlescorrea.com.br/StreamYard"),
	array("Nome_Anunciante" => "StreamYard - Lives Simultâneas", "URL_Banner" => "http://blog.charlesdeoxum.com.br/wp-content/uploads/2020/12/StreamYard2_970-369_CharlesCorreaDeOxum_CharlesCorreaSolucoesWeb_Afiliados.jpg", "URL_Link" => "http://click.charlescorrea.com.br/StreamYard"),
	);
	
	$ValorRandom_Array = array_rand($Publicidades);
	
	
	$Nome_Anunciante = $Publicidades[$ValorRandom_Array]['Nome_Anunciante'];
	$URL_Banner_Anunciante = $Publicidades[$ValorRandom_Array]['URL_Banner'];
	$URL_Link_Anunciante = $Publicidades[$ValorRandom_Array]['URL_Link'];
	
	echo "
	<a target='_Publicidade_$Nome_Anunciante' href='$URL_Link_Anunciante'>
		<img src='$URL_Banner_Anunciante' title='$Nome_Anunciante' alt='$Nome_Anunciante' class='img-fluid' name='$Nome_Anunciante' id='$Nome_Anunciante'>
	</a>";
	
?>