<?php
	require "./Themes/Default/Includes/Header.php";
	require "./Themes/Default/Includes/Cabecalho.php";
	
	if (!isset($_COOKIE['Acesso'])) {
		
		echo "
		<script Language='javascript'>
		alert('Seu tempo de acesso ao serviço expirou ou você não preencheu os dados do formulário de informações corretamente, retorne e tente novamente.');
		location.href='index.php';
		</script>
		";
		
		die();
	}
	
	
	if (!isset($_COOKIE['Servico'])) {
		
		echo "
		<script Language='javascript'>
		alert('Não foi encontrado qual acesso ao consulta deseja, iremos lhe redirecionar para a página inicial.');
		location.href='index.php';
		</script>
		";
		die();
	}
	
	$RandCarta_1 = mt_rand(1, 36);
	$RandCarta_2 = mt_rand(1, 36);
	$RandCarta_3 = mt_rand(1, 36);
?>

<div class="row text-center p-5 bg-white rounded">
	
    <h3>Mentalize somente coisas boas em sua mente e abra a carta e leia seu significado:</h3>
	
    <?php
		if ($ServerHost == 'Homologação') {
			
			echo "<div class='row text-center '>Cartas da Vez = $RandCarta_1 - $RandCarta_2 - $RandCarta_3</div>";
		}
	?>
	
    <div class="row text-center mt-2">
        <button onClick="window.location.href=window.location.href" class="text-center btn btn-primary">Embaralhar Cartas</button>
	</div>
	
    <!-- 
        data-backdrop = Não deixa modal fechar sem clicar no botão pra isso
        data-target = Id da Modal que irá abrir na tela ao clicar no botão ou imagem
	-->
	
    <div class="col-sm text-center rounded Baralho-Lenormand m-3">        
        <img data-backdrop="static" data-toggle="modal" data-target="#Carta-<?php echo $RandCarta_1; ?>" class="img-thumbnail rounded mx-auto d-block shadow" src="Themes/Default/Imagens/Lenormand-Baralho-Cigano-Cards/verso_carta_Cigana_CharlesCorreadeOxum.jpg" alt="Selecione uma Carta" title="Selecione uma Carta">
	</div>
	<!--
		<div class="col-sm text-center rounded Baralho-Lenormand m-3">
        <img data-backdrop="static" data-toggle="modal" data-target="#Carta-<?php echo $RandCarta_2; ?>" class="img-thumbnail rounded mx-auto d-block shadow" src="Themes/Default/Imagens/Lenormand-Baralho-Cigano-Cards/verso_carta_Cigana_CharlesCorreadeOxum.jpg" alt="Selecione uma Carta" title="Selecione uma Carta"  >
		</div>
		
		<div class="col-sm text-center rounded Baralho-Lenormand m-3">
        <img data-backdrop="static" data-toggle="modal" data-target="#Carta-<?php echo $RandCarta_3; ?>" class="img-thumbnail rounded mx-auto d-block shadow" src="Themes/Default/Imagens/Lenormand-Baralho-Cigano-Cards/verso_carta_Cigana_CharlesCorreadeOxum.jpg" alt="Selecione uma Carta" title="Selecione uma Carta">
		</div>
		
		<div class="row text-center mt-2">
        <button onClick="window.location.href=window.location.href" class="text-center btn btn-primary">Embaralhar Cartas</button>
		</div>
	-->
	<div class="alert alert-danger mt-5" role="alert">
		<h4>Lembre-se</h4>
		<p>Os significados das cartas aqui apresentadas neste sistema segue o padrão da escola européia Lenormand.</p>
		<p>As demais escolas não foram adicionadas pois foge de meu conhecimento.</p>
	</div>
	
	
    <!--Modal: Carta 01-->
	
    <div id="Carta-<?php echo $RandCarta_1; ?>" role="dialog" class="modal fade rounded">
        <div class="modal-dialog modal-fluid" role="document">
			
            <!--Content-->
            <div class="modal-content">
				
                <!--Body-->
                <div class="modal-body mb-0 p-0 rounded">
					
                    <div class="embed-responsive embed-responsive-21by9 z-depth-1-half">
                        <iframe class="embed-responsive-item" src="Modais/CartasCiganas/<?php echo $RandCarta_1; ?>.php" allowfullscreen></iframe>
					</div>
					
				</div>
				
                <!--Footer-->
                <div class="modal-footer justify-content-center">
                    <span>Compartilhe!</span>
                    <!-- AddToAny BEGIN -->
                    <div class="a2a_kit a2a_kit_size_32 a2a_default_style" id="Button-Share-Addtoany" data-a2a-url="http://app.charlesdeoxum.com.br" data-a2a-title="App Charles Corrêa de Oxum saiba qual orixá rege o dia de hoje, qual seu Orixá à partir de sua data de nascimento ou ainda veja a sua sorte do dia com as cartas do baralho cigano (Lenormand). Acesse e confira">
                        <a class="a2a_button_sms"></a>					
                        <a class="a2a_button_facebook"></a>
                        <a class="a2a_button_whatsapp"></a>
                        <a class="a2a_button_telegram"></a>					
                        <a class="a2a_button_twitter"></a>
						
                        <script>
							var a2a_config = a2a_config || {};
							a2a_config.onclick = 1;
							a2a_config.locale = "pt-BR";
						</script>
                        <script async src="https://static.addtoany.com/menu/page.js"></script>
                        <!-- AddToAny END -->
						
                        <button type="button" class="btn btn-danger btn-rounded btn-md ml-4" data-dismiss="modal">Fechar</button>
						
					</div>
					
				</div>
                <!--/.Content-->
				
			</div>
		</div>
	</div>
    <!--Modal: Carta 01-->
	
	
    <!--Modal: Carta 02-->
    <div id="Carta-<?php echo $RandCarta_2; ?>" role="dialog" class="modal fade rounded">    
        <div class="modal-dialog modal-fluid" role="document">
			
            <!--Content-->
            <div class="modal-content">
				
                <!--Body-->
                <div class="modal-body mb-0 p-0 rounded">
					
                    <div class="embed-responsive embed-responsive-21by9 z-depth-1-half">
                        <iframe class="embed-responsive-item" src="Modais/CartasCiganas/<?php echo $RandCarta_2; ?>.php" allowfullscreen></iframe>
					</div>
					
				</div>
				
                <!--Footer-->
                <div class="modal-footer justify-content-center">
                    <span>Compartilhe!</span>
                    <!-- AddToAny BEGIN -->
                    <div class="a2a_kit a2a_kit_size_32 a2a_default_style" id="Button-Share-Addtoany" data-a2a-url="http://app.charlesdeoxum.com.br" data-a2a-title="App Charles Corrêa de Oxum saiba qual orixá rege o dia de hoje, qual seu Orixá à partir de sua data de nascimento ou ainda veja a sua sorte do dia com as cartas do baralho cigano (Lenormand). Acesse e confira">
                        <a class="a2a_button_sms"></a>					
                        <a class="a2a_button_facebook"></a>
                        <a class="a2a_button_whatsapp"></a>
                        <a class="a2a_button_telegram"></a>					
                        <a class="a2a_button_twitter"></a>
						
                        <script>
							var a2a_config = a2a_config || {};
							a2a_config.onclick = 1;
							a2a_config.locale = "pt-BR";
						</script>
                        <script async src="https://static.addtoany.com/menu/page.js"></script>
                        <!-- AddToAny END -->
						
                        <button type="button" class="btn btn-danger btn-rounded btn-md ml-4" data-dismiss="modal">Fechar</button>
						
					</div>
					
				</div>
                <!--/.Content-->
				
			</div>
		</div>
	</div>
    <!--Modal: Carta 02-->
	
	
    <!--Modal: Carta 03-->
    <div id="Carta-<?php echo $RandCarta_3; ?>" role="dialog" class="modal fade rounded">        
        <div class="modal-dialog modal-fluid" role="document">
			
            <!--Content-->
            <div class="modal-content">
				
                <!--Body-->
                <div class="modal-body mb-0 p-0 rounded">
					
                    <div class="embed-responsive embed-responsive-21by9 z-depth-1-half">
                        <iframe class="embed-responsive-item" src="Modais/CartasCiganas/<?php echo $RandCarta_3; ?>.php" allowfullscreen></iframe>
					</div>
					
				</div>
				
                <!--Footer-->
                <div class="modal-footer justify-content-center">
                    <span>Compartilhe!</span>
                    <!-- AddToAny BEGIN -->
                    <div class="a2a_kit a2a_default_style a2a_default_style" id="Button-Share-Addtoany" data-a2a-url="http://app.charlesdeoxum.com.br" data-a2a-title="App Charles Corrêa de Oxum saiba qual orixá rege o dia de hoje, qual seu Orixá à partir de sua data de nascimento ou ainda veja a sua sorte do dia com as cartas do baralho cigano (Lenormand). Acesse e confira">
                        <a class="a2a_button_sms"></a>					
                        <a class="a2a_button_facebook"></a>
                        <a class="a2a_button_whatsapp"></a>
                        <a class="a2a_button_telegram"></a>					
                        <a class="a2a_button_twitter"></a>
						
                        <script>
							var a2a_config = a2a_config || {};
							a2a_config.onclick = 1;
							a2a_config.locale = "pt-BR";
							a2a_config.orientation = "up";
							a2a_config.delay = 300;
							
							a2a_config.thanks = {
							postShare: true,
							ad: true
							};
							
							a2a_config.templates.twitter = {
							text: "Veja mais: ${title} ${link} by @CharlesDeOxum",
							hashtags: "CharlesCorreaDeOxum,Lenormand,CartaCiganas,BaralhoCigano,CartaDoDia",
							};
							
							a2a_config.templates.sms = {
							body: "Consulte sua sorte no Baralho cigano: http://app.charlesdeoxum.com.br"
						};
						
						a2a_config.templates.whatsapp = {							
							text: "Consulte sua sorte no Baralho cigano agora mesmo, acesse: http://app.charlesdeoxum.com.br"
						};
					</script>
					<script async src="https://static.addtoany.com/menu/page.js"></script>
					<!-- AddToAny END -->
					
					<button type="button" class="btn btn-danger btn-rounded btn-md ml-4" data-dismiss="modal">Fechar</button>
					
				</div>
				
				</div>
				<!--/.Content-->
				
		</div>
	</div>
	<!--Modal: Carta 03-->
	
	
	</div>
	
</div>










<?php
	require "./Themes/Default/Includes/Footer.php";
?>