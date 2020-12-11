</div>
<div class="col-sm-12 col-lg-12 col-12 align-middle text-center">
	<hr/>
	<h5>Publicidade: </h5>
	<?php require"Themes/Default/Includes/Publicidade.php";?>
	<hr/>
</div>


</section>


<div class="Footer">
    <footer>
        <div class="social">
            <a target='_Instagram' href="<?php echo INSTAGRAM;?>" data-toggle="tooltip" data-placement="top" title="Instagram">
                <i class="fab fa-instagram"></i>
			</a>
            <a target='_Facebook' href="<?php echo FACEBOOK;?>" data-toggle="tooltip" data-placement="top" title="Facebook">
                <i class="fab fa-facebook-square"></i>
			</a>
            <a target='_Youtube' href="<?php echo YOUTUBE;?>" data-toggle="tooltip" data-placement="top" title="Youtube">
                <i class="fab fa-youtube"></i>
			</a>
            <a target='_Telegram' href="<?php echo TELEGRAM;?>" data-toggle="tooltip" data-placement="top" title="Telegram">
                <i class="fab fa-telegram-plane"></i>
			</a>
            <a target='_Feed' href='<?php echo FEED_RSS;?>' data-toggle="tooltip" data-placement="top" title="Feed/RSS">
                <i class="fas fa-rss"></i>
			</a>
		</div>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="index.php">Home</a></li>
            <li class="list-inline-item"><a target='_BatuqueRS' href="http://batuquers.com.br">Batuque RS</a></li>
            <li class="list-inline-item"><a href="http://blog.charlesdeoxum.com.br">Blog Charles de Oxum</a></li>            
			</ul>
			<p class="copyright">Charles Corrêa de Oxum © <?php echo date('Y'); ?><br/>Versão do App <?php echo VERSAO_APP;?></p>
			<p class="DEV" data-toggle="tooltip" data-placement="top" title="Desenvolvido por Charles Corrêa - Soluções Web">
				<a target='DEV' href='http://charlescorrea.com.br'>
		Desenvolvido por Charles Corrêa - Soluções Web
		</a>
		</p>
	</footer>
</div>
<?php require "Themes/Default/Includes/Footer-Final-Scripts.php";?>

