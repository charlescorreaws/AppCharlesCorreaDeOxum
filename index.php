<?php
require "./Themes/Default/Includes/Header.php";
require "./Themes/Default/Includes/Cabecalho.php";

setcookie('Acesso', false, time() + (360 * 30), "/"); // 86400 = 1 day
?>


<div class="row">
	
    <!--                    
    <div class="col-sm-8 col-lg-6">
        <div class="BoxApp">
            <div class="icon" data-toggle="tooltip" data-placement="top" title="Consulte seu Orixá de Cabeça">
                <i class="fa fa-user"></i>
            </div>
            <div class="BoxAppConteudo">
                <h5>Consulte seu Orixá de Cabeça</h5>
                <p>Saiba qual o seu Orixá regente dentro da tradição do Batuque do RS.</p>
                <br/>
                <a href="Registro.php?Servico=OrixaDeCabeca">
                    <button type="button" class="btn btn-light" data-toggle="tooltip" data-placement="top" title="Acessar Serviço">Acessar Serviço</button>
                </a>
            </div>
        </div>
    </div>
    <!-- 
                      
    <div class="col-sm-8 col-lg-6">
        <div class="BoxApp">
            <div class="icon" data-toggle="tooltip" data-placement="top" title="Consulte o Orixá do Dia">
                <i class="fa fa-calendar-check"></i>
            </div>            
            <div class="BoxAppConteudo">
                <h5>Orixá do Dia</h5>
                <p>Saiba qual o Orixá que rege o dia de hoje dentro da tradição do Batuque do RS.</p>
                <br/>
                <a href="Registro.php?Servico=OrixaDoDia">
                    <button type="button" class="btn btn-light" data-toggle="tooltip" data-placement="top" title="Acessar Serviço">Acessar Serviço</button>
                </a>
            </div>
        </div>
    </div>
     -->
    <!-- BoxApp -->
    <div class="col-sm-8 col-lg-6">
        <div class="BoxApp">
            <div class="icon" data-toggle="tooltip" data-placement="top" title="Consulte a Carta do Dia">
                <i class="fa fa-star-and-crescent"></i>
            </div>
            <div class="BoxAppConteudo">
                <h5>Carta do Dia</h5>
                <p>Saiba qual carta do Baralho Cigano (Lenormand) lhe espera no dia de hoje e qual seu significado.</p>
                <br/>
                <a href="Registro.php?Servico=CartaDoDia">
                    <button type="button" class="btn btn-light" data-toggle="tooltip" data-placement="top" title="Acessar Serviço">Acessar Serviço</button>
                </a>
            </div>
        </div>
    </div>
    <!-- / -->

</div>
<?php
require "./Themes/Default/Includes/Footer.php";
?>