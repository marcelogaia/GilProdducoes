<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come in the head; any other head content must come *after* these tags -->
    <meta name="description" content"=">
    <meta name="author" content="">
    <link rel="icon" type="image/ico" href="http://gilprodducoes.com.br/favicon.ico?v=2">
    <link rel="shortcut icon" href="http://gilprodducoes.com.br/favicon.ico?v=2">

	<title>Gil Produções</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/corporativo.css" rel="stylesheet">

    <!-- fonts -->
    <!-- Open sans -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    </head>
<body role="document" class="budget">
    <header class="top">
        <nav id="menu" class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1 class="logo"><a class="navbar-brand" href="./">Gil Produções</a></h1>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="row">
                        <li><a href="trabalhos">Trabalhos</a></li>
                        <li><a href="quem-somos">Quem somos</a></li>
                        <li><a href="servicos">Serviços</a></li>
                        <li><a href="orcamento" class="active">ORÇAMENTO</a></li>
                        <li><a href="agil-locacoes">Ágil LOCAÇÕES</a></li>
                        <li><a href="documentarios">DocumentÁrios</a></li>
                        <li><a href="contato" class="last">Contato</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
    </header>

	<img id="social-link" src="media/img/social-link.png" data-status="open" usemap="#map">
	<map name="map" id="map">
		<area shape="circle" coords="17,24,15" class="close" href="javascript:void(0)" alt="close">
		<area shape="rect" coords="38,0,156,47" href="../social" alt="Social">
	</map>
	
	<section id="title">
		<div class="container">
			<header>
				<h2>Solicitação de Orçamento</h2>
				<p>Utilize este formulário para fazer um resumo rápido do seu projeto.</p>
			</header>

			<p class="legend">
				<strong>Dúvidas?</strong> Entre em <a href="contato">contato</a>.<br>
				<strong>Privacidade</strong>: Nenhum dado deste, ou qualquer formulário, será divulgado ou usado para outros fins.
			</p>
		</div>
	</section>
	<section id="form">
		<form action="#" method="post" enctype="multipart/form-data" id="budget">
			<fieldset id="details" form="budget">
				<div class="container">
					<legend><h3>Detalhes de Contato</h3></legend>
					<div class="row">
						<div class="col-sm-12">
							<label for="name">Seu nome completo</label>
							<input type="text" id="name" name="name">
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<label for="email">Seu email</label>
							<input type="text" id="email" name="email">
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<label for="phone">Telefone</label>
							<input type="text" id="phone" name="phone">
						</div>
						<div class="col-sm-6">
							<label for="company">Empresa / Cargo</label>
							<input type="text" id="company" name="company">
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<label for="howfind">Como nos encontrou?</label>
							<input type="text" id="howfind" name="howfind">
						</div>
					</div>
				</div>
			</fieldset>
			<div class="container">
				<p class="type-choice">Escolha uma das opções abaixo, preencha os dados e envie o formulário.</p>
			</div>
			
			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

				<fieldset id="recording" class="panel" form="budget" disabled>
					<div class="container">
	    				<legend role="tab" id="headingRecording">
	    					<h3>
	    						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseRecording" aria-expanded="false" aria-controls="collapseRecording" class="collapsed">
		    						Gravação de evento
		    						<span class="glyphicon glyphicon-menu-down"></span>
		    						<span class="glyphicon glyphicon-menu-up"></span>
								</a>
	    					</h3>
	    				</legend>
	    				<div id="collapseRecording" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingRecording">
							<div class="row">
								<div class="col-sm-12">
									<label for="recording-when">Quando será a data do evento?</label>
									<input type="text" id="recording-when" name="recording-when">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<label for="recording-where">Onde será o local do evento?</label>
									<input type="text" id="recording-where" name="recording-where">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<label for="recording-transmition">Transmissão simultânea?</label>
								</div>
								<div class="col-sm-6">
									<input type="radio" name="recording-transmition" value="Sim" id="recording-transmition-yes"><label for="recording-transmition-yes">Sim</label>
								</div>
								<div class="col-sm-6">
									<input type="radio" name="recording-transmition" value="Não" id="recording-transmition-no"><label for="recording-transmition-no">Não</label>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<label for="recording-delivery">Como deseja que seja feita a entrega do material?</label>
								</div>
								<div class="col-sm-6">
									<input type="radio" name="recording-delirery" value="Bruto" id="recording-delirery-raw"><label for="recording-delirery-raw">Bruto</label>
								</div>
								<div class="col-sm-6">
									<input type="radio" name="recording-delirery" value="Editado" id="recording-delirery-edited"><label for="recording-delirery-edited">Editado</label>
								</div>
							</div>
	    				</div>
    				</div>
				</fieldset>
				<fieldset id="production" class="panel" form="budget" disabled>
					<div class="container">
	    				<legend role="tab" id="headingProduction">
	    					<h3>
	    						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseProduction" aria-expanded="false" aria-controls="collapseProduction" class="collapsed">
		    						Produção de vídeos
		    						<span class="glyphicon glyphicon-menu-down"></span>
		    						<span class="glyphicon glyphicon-menu-up"></span>
								</a>
	    					</h3>
	    				</legend>
	    				<div id="collapseProduction" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingProduction">
							<div class="row">
								<div class="col-sm-12">
									<label for="production-worktype">Qual tipo de trabalho procura?</label>
								</div>
								<div class="col-sm-6">
									<input type="radio" name="production-worktype" value="Institucional" id="production-worktype-institucional"><label for="production-worktype-institucional">Institucional</label>
								</div>
								<div class="col-sm-6">
									<input type="radio" name="production-worktype" value="Promocional" id="production-worktype-promotional"><label for="production-worktype-promotional">Promocional</label>
								</div>
								<div class="col-sm-6">
									<input type="radio" name="production-worktype" value="VT Comercial" id="production-worktype-vt"><label for="production-worktype-vt">VT Comercial</label>
								</div>
								<div class="col-sm-6">
									<input type="radio" name="production-worktype" value="Treinamento" id="production-worktype-training"><label for="production-worktype-training">Treinamento</label>
								</div>
								<div class="col-sm-6">
									<input type="radio" name="production-worktype" value="Time Lapse" id="production-worktype-timelapse"><label for="production-worktype-timelapse">Time Lapse</label>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<label for="production-duration">Duração do Vídeo (em minutos):</label>
									<input type="number" id="production-duration" name="production-duration">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<label for="production-script">Nós iremos desenvolver o roteiro?</label>
								</div>
								<div class="col-xs-6">
									<input type="radio" name="production-script" value="Sim" id="production-script-yes"><label for="production-script-yes">Sim</label>
								</div>
								<div class="col-xs-6">
									<input type="radio" name="production-script" value="Não" id="production-script-no"><label for="production-script-no">Não</label>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<label for="production-fees">Haverão diárias de gravação?</label>
								</div>
								<div class="col-xs-6">
									<input type="radio" name="production-fees" value="Sim" id="production-fees-yes"><label for="production-fees-yes">Sim</label>
								</div>
								<div class="col-xs-6">
									<input type="radio" name="production-fees" value="Não" id="production-fees-no"><label for="production-fees-no">Não</label>
								</div>
								<div class="col-sm-12">
									<input type="text" id="production-fees-which" name="production-fees-which" placeholder="Se sim, quais locais?">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<label for="production-fees">Havera locução?</label>
								</div>
								<div class="col-xs-6">
									<input type="radio" name="production-fees" value="Sim" id="production-fees-yes"><label for="production-fees-yes">Sim</label>
								</div>
								<div class="col-xs-6">
									<input type="radio" name="production-fees" value="Não" id="production-fees-no"><label for="production-fees-no">Não</label>
								</div>
								<div class="col-sm-12">
									<input type="text" id="production-fees-which" name="production-fees-which" placeholder="Se sim, quais idiomas?">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<label for="production-fees">Qual o deadline?</label>
								</div>
								<div class="col-sm-12">
									<input type="text" id="production-fees-which" name="production-fees-which">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<label for="production-fees">O projeto requer animações?</label>
								</div>
								<div class="col-xs-6">
									<input type="radio" name="production-fees" value="Sim" id="production-fees-yes"><label for="production-fees-yes">Sim</label>
								</div>
								<div class="col-xs-6">
									<input type="radio" name="production-fees" value="Não" id="production-fees-no"><label for="production-fees-no">Não</label>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<label for="production-fees">Serão necessárias gravações aéreas?</label>
								</div>
								<div class="col-xs-6">
									<input type="radio" name="production-fees" value="Sim" id="production-fees-yes"><label for="production-fees-yes">Sim</label>
								</div>
								<div class="col-xs-6">
									<input type="radio" name="production-fees" value="Não" id="production-fees-no"><label for="production-fees-no">Não</label>
								</div>
								<div class="col-sm-12">
									<input type="text" id="production-fees-which" name="production-fees-which" placeholder="Se sim, quais locais?">
								</div>
							</div>
	    				</div>
    				</div>
				</fieldset>
				
			</div>
			<button type="submit" class="enviar"><!-- --></button>
		</form>
	</section>
    <footer>
        <a href="#">Voltar ao topo</a>
        <ul class="social">
            <li><a href="https://www.facebook.com/Gil-Produ%C3%A7%C3%B5es-1485454868436485/?fref=ts" target="_blank" class="btn facebook">facebook</a></li
            ><li><a href="https://www.instagram.com/gilprodducoes_/" target="_blank" class="btn instagram">instagram</a></li
            ><li><a href="https://vimeo.com/gilproducoes/videos" target="_blank" class="btn vimeo">vimeo</a></li
            ><li><a href="https://www.youtube.com/channel/UCE8CGgt9Hf_nPuUNLrDJI3g" target="_blank" class="btn youtube">youtube</a></li
            ><li><a href="https://plus.google.com/111242501011637553447/posts" target="_blank" class="btn google">google+</a></li>
        </ul>
        <div class="container">
            <p>©2016. <a href="#">Gil prodduções S.A.</a> Todos os direitos reservados </p>
            <a href="#">MP</a>
        </div>
    </footer>

    <script src="js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/jquery-ui.min.js"></script>
	
    <!-- Latest compiled and minified JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script> -->
    
    <script>
    $(function() {
	    (function($) {

	        $(document).ready(function(){

	            $(window).resize(function(){
	            	// Tamanho do video principal
	                var width = $(window).width();
	            }).trigger('resize');

	            $('#navbar a').click(function(){
	            	if($(this).parents('#navbar').hasClass('in'))
		            	$('button.navbar-toggle').click();
	            });

		        $(window).scroll(function(){
		        	if($(window).scrollTop() > $('#video').height()){
		        		$("#menu").addClass('navbar-fixed-top');
		        		$("body").css("padding-top",70);

		        		$("#social-link").css('position','fixed');
		        		$("#social-link").css('top',70);
		        	} else {
		        		$("#menu").removeClass('navbar-fixed-top');
		        		$("body").css("padding-top",0);

		        		$("#social-link").css('position','absolute');
		        		$("#social-link").css('top',$('#video').height() + 70);
		        	}
		        }).trigger('scroll');

				$('map .close').click(function() {

					var img = $('#social-link');
					var status = img.attr("data-status");

					if(status == 'open'){
						img.animate(
		                    {right: -120}, 
		                    {duration:400,easing:'easeInOutBack',done:function(){
		        				$("#social-link").attr('src',"media/img/social-link2.png");
		                    }});
						status = 'closed';
					} else {
						img.animate(
		                    {right: -10}, 
		                    {duration:400,easing:'easeInOutBack',done:function(){
				        		$("#social-link").attr('src',"media/img/social-link.png");
		                    }});
						status = 'open';
					}

					$('#social-link').attr("data-status",status);
				});

		        var MutationObserver = window.MutationObserver || window.WebKitMutationObserver || window.MozMutationObserver;

		        $.fn.attrchange = function(callback) {
		            if (MutationObserver) {
		                var options = {
		                    subtree: false,
		                    attributes: true
		                };

		                var observer = new MutationObserver(function(mutations) {
		                    mutations.forEach(function(e) {
		                        callback.call(e.target, e.attributeName);
		                    });
		                });

		                return this.each(function() {
		                    observer.observe(this, options);
		                });

		            }
		        }

		        $('#accordion legend h3 a').attrchange(function(attrName) {
		        	var curElement = $(this);
		        	var fieldset = curElement.parents('fieldset');
				    if(attrName=='aria-expanded'){
		        		if(curElement.attr('aria-expanded') == 'true'){
		        			fieldset.removeAttr('disabled');
		        		} else {
		        			fieldset.attr('disabled',true);
		        		}
				    }
				});
	        });

	    })(jQuery);
	});
    </script>
</body>
</html>