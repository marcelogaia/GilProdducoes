<?php
	$sent = false;

	$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : "";

	if($action == "submit"){

		require "../includes/phpmailer/PHPMailerAutoload.php";

		$name	= isset($_REQUEST['name']) ? $_REQUEST['name'] : "";
		$email 	= isset($_REQUEST['email']) ? $_REQUEST['email'] : "";
		$phone	= isset($_REQUEST['phone']) ? $_REQUEST['phone'] : "";
		$company= isset($_REQUEST['company']) ? $_REQUEST['company'] : "";
		$message= isset($_REQUEST['message']) ? $_REQUEST['message'] : "";

		if(($name!="")&&($email!="")&&($phone!="")&&($message!="")){

			$subject="Mensagem enviada através do formulário de contato Gil Prodducoes";

			$body = "<b>Nome:</b> {$name}
					<br><b>Email:</b> {$email}
					<br><b>Telefone:</b> {$phone}
					<br><b>Empresa:</b> {$company}
					<br><b>Mensagem:</b> {$message}";

			$altbody = "Nome: {$name} \n\r
						Email: {$email} \n\r
						Telefone: {$phone} \n\r
						Empresa: {$company} \n\r
						Mensagem: {$message}";

			$mail = new PHPMailer;
			$mail->isSMTP();
			$mail->Host = '';
			$mail->SMTPAuth = true;
			$mail->Username = '';
			$mail->Password = '';
			$mail->SMTPSecure = 'tls';
			$mail->Port = 587;
			$mail->CharSet = "UTF-8";

			$mail->setFrom('site@gilprodducoes.com.br', 'Gil Produções - Contato');
			$mail->addAddress('contato@gilproducoes.com.br', 'Gil Produções');
			
			$mail->isHTML(true);

			$mail->Subject = $subject;
			$mail->Body    = $body;
			$mail->AltBody = $altbody;
			$sent = true;

			echo '<!-- ';

			if(!$mail->send()) {
			    echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
			    $sent = false;
			} else {
			    echo 'Message has been sent';
			}

			echo ' -->';
		}
	}
?><!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimum-scale=1, maximum-scale=1">

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
<body role="document" class="contact">
<?php if($sent){ ?>
	<script>alert('Obrigado por entrar em contato. Em breve retornaremos a sua mensagem!');</script>
<?php } ?>
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
                        <li><a href="orcamento">ORÇAMENTO</a></li>
                        <li><a href="agil-locacoes">Ágil LOCAÇÕES</a></li>
                        <li><a href="documentarios">DocumentÁrios</a></li>
                        <li><a href="contato" class="last active">Contato</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
    </header>

	<img id="social-link" src="media/img/social-link-gray.png" data-status="open" usemap="#imgmap">
	<map name="imgmap" id="imgmap">
		<area shape="circle" coords="17,24,15" class="close" href="javascript:void(0)" alt="close">
		<area shape="rect" coords="38,0,156,47" href="../social" alt="Social">
	</map>

    <section id="contato">
        <div class="container">
            <header class="col-md-12">
                <h1 class="col-md-12">Fale Conosco</h1>
                <p class="col-md-12">Venha fazer uma visita ou entre em contato conosco. Teremos um prazer enorme.</p>
            </header>

            <form action="contato" class="col-md-9 col-sm-12">
                <input type="text" name="name" placeholder="Nome" class="col-xs-12">
                <input type="text" name="email" placeholder="Email" class="col-xs-12">
                <input type="text" name="phone" placeholder="Telefone" class="col-xs-12">
                <input type="text" name="company" placeholder="Empresa" class="col-xs-12">
                <textarea name="message" id="" placeholder="Sua mensagem" cols="30" rows="13" class="col-xs-12"></textarea>
                <button type="submit" class="btn">Enviar</button>
            </form>
            <div class="info col-md-3 col-sm-12">
                <article class="col-md-12 col-sm-6 col-xs-12">
                    <h1>Gil Prodduções</h1>
                    <p>Rua Haiti, 115 | Jardim Girassol<br>
                    Americana, SP | CEP 13465-681</p>

                    <p>+19 3461.1244</p>

                    <a class="mailto" target="_blank" href="mailto:atendimento@gilprodducoes.com.br">atendimento@gilprodducoes.com.br</a>
                        
                    <a class="mapa" href="#contato">ver no mapa</a>
                </article>
                <article class="col-md-12 col-sm-6 col-xs-12">
                    <h1>Ágil Locações:</h1>
                    <a class="mailto" target="_blank" href="mailto:locacao@gilprodducoes.com.br">locacao@gilprodducoes.com.br</a>
                </article>
                
            </div>
        </div>
    </section>

    <div id="map"></div>
    
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
	<script src="js/bootstrap.min.js"></script>
    
    <script>

        $(document).ready(function(){

	        $(window).resize(function(){
	        	// Tamanho do video principal
	            var width = $(window).width();
	            var height = (width/16*9) - 50;
	            if(height > 900) height = 900;

	            var playerheight = window.innerHeight - 50;
	            if(playerheight > height) playerheight = height;

	            $('#video .outerplayer').css("height", height);
	            $('#video').css("height", playerheight);

	            // Tamanho do video de sobre nos
	            var innerWidth = $("#sobre-nos .container").width();
	            $("#sobre-nos iframe").attr("height",innerWidth/16*9);

	            // Tabalho do texto em "Serviços"
	            var pMaxHeight = 0;
	            var h1MaxHeight = 0;

	            $('#servicos figcaption p').each(function(){
	                if($(this).parents("li").css('display') != 'none'){
	            		if($(this).height() > pMaxHeight) pMaxHeight = $(this).height();
	                }
	            });

	            $('#servicos figcaption h1').each(function(){
	                if($(this).parents("li").css('display') != 'none'){
	                	if($(this).height() > h1MaxHeight) h1MaxHeight = $(this).height();
	                }
	            });

	            $('#servicos figcaption .p').height(pMaxHeight+27);
	            $('#servicos figcaption .h1f').height(h1MaxHeight);
	        }).trigger('resize');

            $(window).scroll(function(){
            	if($(window).scrollTop() > $('#video').height()){
            		$("#menu").addClass('navbar-fixed-top');
            		$("#contato").css("margin-top",50);

            		$("#social-link").css('position','fixed');
            		$("#social-link").css('top',70);
            	} else {
            		$("#menu").removeClass('navbar-fixed-top');
            		$("#contato").css("margin-top",0);

            		$("#social-link").css('position','absolute');
            		$("#social-link").css('top',$('#video').height() + 70);
            	}
            }).trigger('scroll');

            $('a').click(function(){
            	var href = $(this).attr("href");

            	if(href.substring(0,1) == "#" && href != "#myCarousel"){
        			var id = href.substring(1,href.length);

        			scrollToAnchor(id);

	            	return false;
            	}
            });

            $('#navbar a').click(function(){
            	if($(this).parents('#navbar').hasClass('in'))
	            	$('button.navbar-toggle').click();
            });

			$('map .close').click(function() {

				var img = $('#social-link');
				var status = img.attr("data-status");

				if(status == 'open'){
					img.animate(
	                    {right: -120}, 
	                    {duration: 400,easing:'easeInOutBack',done: function(){
	        				$("#social-link").attr('src',"media/img/social-link2-gray.png");
	                    }});
					status = 'closed';
				} else {
					img.animate(
	                    {right: -10}, 
	                    {duration: 400,easing:'easeInOutBack',done: function(){
			        		$("#social-link").attr('src',"media/img/social-link-gray.png");
	                    }});
					status = 'open';
				}

				$('#social-link').attr("data-status",status);
			}).trigger('click');
        });

        function scrollToAnchor(aid){
		    var aTag = $("#"+ aid);

		    if(aid != "")
			    $('html,body').animate({scrollTop: aTag.offset().top - 50}, 400);
			else
			    $('html,body').animate({scrollTop: 0}, 400);
		}

		// Google Maps
		var map, marker;
		var myLatLng = {lat: -22.7433579, lng: -47.3375659};
		function initMap() {


			var stylez = [
				{
					featureType: "all",
					elementType: "all",
					stylers: [
						{ saturation: -100 } // <-- THIS
					]
				}
			];

			map = new google.maps.Map(document.getElementById('map'), {
				center: myLatLng,
				zoom: 17,	
			    
			    scrollwheel: false,
			    navigationControl: false,
			    mapTypeControl: false,
			    scaleControl: false,
		      	zoomControl: false,
			    draggable: false,
      			streetViewControl: false,
  				disableDoubleClickZoom: true,
			    mapTypeControlOptions: {
			         mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'tehgrayz']
			    }
			});

			var mapType = new google.maps.StyledMapType(stylez, { name:"Grayscale" });    
			map.mapTypes.set('tehgrayz', mapType);
			map.setMapTypeId('tehgrayz');

			marker = new google.maps.Marker({
				position: myLatLng,
				map: map,
				icon: 'media/img/map-marker.png'
			});
		}
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-udQr1p64s6iFRWcN0pjTIbxGBtXeo6Y&callback=initMap" async defer></script>
    
</body>
</html>