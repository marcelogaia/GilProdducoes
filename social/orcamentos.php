<?php
$sent = false;


$action 	= isset($_REQUEST['action']) ? $_REQUEST['action'] : "";

if($action == "submit"){

	require "../includes/phpmailer/PHPMailerAutoload.php";

	$name		= isset($_REQUEST['name']) ? $_REQUEST['name'] : "";
	$email 		= isset($_REQUEST['email']) ? $_REQUEST['email'] : "";
	$phone		= isset($_REQUEST['phone']) ? $_REQUEST['phone'] : "";
	$countrycity= isset($_REQUEST['country-city']) ? $_REQUEST['country-city'] : "";
	$howfoundus	= isset($_REQUEST['howfoundus']) ? $_REQUEST['howfoundus'] : "";
	$eventdate	= isset($_REQUEST['event-date']) ? $_REQUEST['event-date'] : "";
	$eventtype	= isset($_REQUEST['event-type']) ? $_REQUEST['event-type'] : "";
	$eventtypeother	= isset($_REQUEST['event-type-other']) ? $_REQUEST['event-type-other'] : "";

	$equiptext = "<ul>";

	if(isset($_REQUEST['equipment'])) {
		$equipment	=  $_REQUEST['equipment'];

		foreach($equipment as $eq) {
			$equiptext .= "<li>{$eq}</li>";
		}
	}

	$equiptext .= "</ul>";

	if(($name!="")&&($email!="")&&($phone!="")){

		$subject="Mensagem enviada através do formulário de orcamento Gil Prodducoes";

		$body = "<b>Nome:</b> {$name}
				<br><b>Email:</b> {$email}
				<br><b>Telefone:</b> {$phone}
				<br><b>País/Cidade:</b> {$countrycity}
				<br><b>Como nos encontrou?:</b> {$howfoundus}
				<br><b>Quando será a data do evento?:</b> {$eventdate}
				<br><b>Que tipo de evento será realizado?:</b> {$eventtype}
				<br><b>Se escolheu 'outro', descreva qual:</b> {$eventtypeother}
				<br><b>Quais de nossos produtos e serviços gostaria de contar com?:</b><br> {$equiptext}";

		$altbody = "Nome: {$name}
				\r\nEmail: {$email}
				\r\nTelefone: {$phone}
				\r\nPaís/Cidade: {$countrycity}
				\r\nComo nos encontrou?: {$howfoundus}
				\r\nQuando será a data do evento?: {$eventdate}
				\r\nQue tipo de evento será realizado?: {$eventtype}
				\r\nSe escolheu 'outro', descreva qual: {$eventtypeother}
				\r\nQuais de nossos produtos e serviços gostaria de contar com?:\r\n {$equiptext}";


			$mail = new PHPMailer;
			$mail->isSMTP();
			$mail->Host = '';
			$mail->SMTPAuth = true;
			$mail->Username = '';
			$mail->Password = '';
			$mail->SMTPSecure = 'tls';
			$mail->Port = 587;
			$mail->CharSet = "UTF-8";

			$mail->setFrom('site@gilprodducoes.com.br', 'Gil Produções - Orçamentos');
			$mail->addAddress('contato@gilproducoes.com.br', 'Gil Produções');
			
			$mail->isHTML(true);

			$mail->Subject = $subject;
			$mail->Body    = $body;
			$mail->AltBody = $altbody;

			$sent = 0;

			if(!$mail->send()) {
			    echo '<!-- Message could not be sent. Mailer Error: ' . $mail->ErrorInfo . '-->';
			    $sent = 1;
			} else {
			    echo '<!-- Message has been sent -->';
			    $sent = 2;
			}
	}
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimum-scale=1, maximum-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes" />
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" type="image/ico" href="../favicon.ico?v=2"></link>
	<link rel="shortcut icon" href="../favicon.ico?v=2"></link>

	<title>Gil Produções :: Orçamentos</title>

	<!-- Bootstrap core CSS -->
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="css/social.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

	<!-- fonts -->
	<!-- Open sans -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>

	<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
	<!--[if lt IE 9]><script src="../js/ie8-responsive-file-warning.js"></script><![endif]-->
	<script src="../js/ie-emulation-modes-warning.js"></script>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-78306440-1', 'auto');
  ga('send', 'pageview');

</script>
</head>

<body role="document" class="budget">
   <!-- Fixed navbar -->
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="./">Gil Produções</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="quem-somos">Quem Somos</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Serviços <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="servicos-aniversarios">Aniversários</a></li>
							<li><a href="servicos-casamentos">Casamentos</a></li>
							<li><a href="servicos-outros">Outros</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Portfólio <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="portfolio-aniversarios-15-anos">Aniversários</a></li>
							<li><a href="portfolio-casamentos">Casamentos</a></li>
							<li><a href="portfolio-outros">Outros</a></li>
						</ul>
					</li>

					<li><a href="orcamentos">Orçamentos</a></li>
					<li><a href="duvidas">Dúvidas</a></li>
					<li><a href="contato">Contato</a></li>
					<li><a href="agil" class="red">Ágil Locações</a></li>
					<li class="news">
						<form action="#" method="post">
							<img src="img/envelope-icon.png" alt="">
							<input type="text" placeholder="email">
							<button type="submit">OK</button>
						</form>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="corporativo"><a href="../corporativo/">CORPORATIVO</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>

	<div class="container-fluid" role="main">
		<div class="row feature">
			<div class="internal-content">
				<center>
					<h2 class="main-title">
						<div class="red left1">Podemos</div>
						<div class="right1">Ajudar?</div>
					</h2>
				</center>
			</div>
		</div>
		<div class="row contact">
			<div class="col-md-3">&nbsp;</div>
			<div class="col-md-6 main-form">
				<br />
				<br />
				<h3>Formulário de solicitação de orçamento</h3><br />
				<p>Utilize este formulário para fazer um resumo rápido sobre seu projeto</p>
				<p style="font-size: 12px; line-height: 18px;"><em><strong>Dúvidas?</strong> Entre em <a href="contato"><u>contato</u></a>.</em><br />
					<em><strong>Privacidade:</strong> Nenhum dado deste, ou qualquer formulário, será divulgado ou usado para outros fins.</em></p>
					<br />
					<?php if($sent){ ?>
						Enviado com sucesso. <!-- Alterar aqui qualquer coisa que quiser colocar -->
					<?php } ?>

					<form action="" method="POST" enctype="multipart/form-data">
						<input type="hidden" name="action" value="submit" />

						<div>
							<h4>DETALHES DO CONTATO:</h4>
							<br />
							<label class="light">Seu nome completo*</label><br />
							<input type="text" name="name" value="" /><br />
							<label class="light">Seu e-mail*</label><br />
							<input type="text" name="email" value="" /><br />
							<label class="light">Telefone*</label><br />
							<input type="text" name="phone" value="" /><br />
							<label class="light">País/Cidade</label><br />
							<input type="text" name="country-city" value="" /><br />
							<label class="light">Como nos encontrou?</label><br />
							<input type="text" name="howfoundus" value="" />
							<p style="font-size: 10px;"><em>* Campos de preenchimento obrigatório.</em></p>
							<br />
						</div>
						<div>
							<h4>INFORMAÇÕES BÁSICAS:</h4>
							<label>Quando será a data do evento?</label><br />
							<input type="text" name="event-date" value="" /><br />
							<label>Onde será o local do evento (cerimonial e festa)?</label><br />
							<input type="text" name="event-place" value="" /><br />
							<label>Que tipo de evento será realizado?</label><br />
							<div class="radio-items">
								<div>
									<div class="col-xs-6 col-sm-4 col-md-6"><input type="radio" name="event-type" value="Casamento" checked /><label class="bt-radio">Casamento</label></div>
									<div class="col-xs-6 col-sm-4 col-md-6"><input type="radio" name="event-type" value="Batizado" /><label class="bt-radio">Batizado</label></div>
								</div>
								<div>
									<div class="col-xs-6 col-sm-4 col-md-6"><input type="radio" name="event-type" value="Aniversário" /><label class="bt-radio">Aniversário</label></div>
									<div class="col-xs-6 col-sm-4 col-md-6"><input type="radio" name="event-type" value="Outro" /><label class="bt-radio">Outro</label></div>
								</div>
							</div>
							<input type="text" name="event-type-other" value="" placeholder="Se escolheu 'outro', descreva qual:" /><br /><br />
							<label>Quais são os produtos e serviços que gostariam de contratar?</label><br />
							<div class="radio-items">
								<div>
									<div class="col-xs-6 col-sm-4 col-md-6"><input type="checkbox" name="equipment[]" value="Iluminação" checked /><label class="bt-radio">Iluminação</label></div>
									<div class="col-xs-6 col-sm-4 col-md-6"><input type="checkbox" name="equipment[]" value="Boxstruss" /><label class="bt-radio">Boxstruss</label></div>
								</div>
								<div>
									<div class="col-xs-6 col-sm-4 col-md-6"><input type="checkbox" name="equipment[]" value="Painel LED" /><label class="bt-radio">Painel LED</label></div>
									<div class="col-xs-6 col-sm-4 col-md-6"><input type="checkbox" name="equipment[]" value="DJ" /><label class="bt-radio">DJ</label></div>
								</div>
								<div>
									<div class="col-xs-6 col-sm-4 col-md-6"><input type="checkbox" name="equipment[]" value="Vídeo" /><label class="bt-radio">Vídeo</label></div>
									<div class="col-xs-6 col-sm-4 col-md-6"><input type="checkbox" name="equipment[]" value="Som" /><label class="bt-radio">Som</label></div>
								</div>
								<div>
									<div class="col-xs-6 col-sm-4 col-md-6"><input type="checkbox" name="equipment[]" value="Palco" /><label class="bt-radio">Palco</label></div>
									<div class="col-xs-6 col-sm-4 col-md-6"><input type="checkbox" name="equipment[]" value="Outro" /><label class="bt-radio">Outro</label></div>
								</div>
							</div>
							<p>&nbsp;</p>
							<center><input type="submit" class="bt-send" style="float: none !important" value=" " /></center>
							<br />
							<br />
							<br />
							<br />
							<br />
						</div>
					</form>
				</div>
				<div class="col-md-3">&nbsp;</div>
			</div>
		</div> <!-- /container -->

		<footer class="">
		      <ul class="container">
		  			<li class="col-xs-2 col-sm-4">
		  				<a href="javascript:void()" class="bt-news"><img src="img/bt-newsletter.png" /></a>
		  				<div class="news-box" style="display: none;">
		  					<input type="text" placeholder="Digite seu e-mail" class="type-mail" />
		  					<input type="button" value="Ok" class="send-mail" />
		  				</div>
		  			</li>
				<li class="col-xs-3 col-sm-4">
					<center><a href="https://vimeo.com/153258664" class="bt-demo-reel">DEMO REEL</a></center>
				</li>
					<li class="col-xs-7 col-sm-4">
		  				<ul class="social">
		  					<li id="facebook"><a href="https://www.facebook.com/Gil-Produ%C3%A7%C3%B5es-1485454868436485/?fref=ts" target="_blank">Facebook</a></li>
		  					<li id="insta"><a href="https://www.instagram.com/gilprodducoes_/" target="_blank">Twitter</a></li>
		  					<li id="youtube"><a href="https://www.youtube.com/channel/UCE8CGgt9Hf_nPuUNLrDJI3g" target="_blank">Instagram</a></li>
		  					<li id="plus"><a href="https://plus.google.com/111242501011637553447/posts" target="_blank">Google Plus</a></li>
		  					<li id="vimeo"><a href="https://vimeo.com/gilproducoes/videos" target="_blank">Pinterest</a></li>
		  				</ul>
		  			</li>
		  		</ul>
		</footer>
		<div class="modal fade" id="video-modal" tabindex="-1" role="dialog" aria-labelledby="video-modal" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
						<h3></h3>
					</div>
					<div class="modal-body">
						<p></p>
					</div>
				</div>
			</div>
		</div>

<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="../vendor/jquery.min.js"><\/script>')</script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/docs.min.js"></script>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="../js/ie10-viewport-bug-workaround.js"></script>

	<!-- embedly modal -->
	<script type="text/javascript" src="../js/jquery.embedly.js"></script>
	<script>
		$(document).ready(function(){
			$.embedly.defaults = {
				key:'9c06f86546d64da981faf6b760ea4b28',
				query: {
					maxwidth:768,
				},
				display: $.noop
			}

			$('.bt-demo-reel').on('click', function(){
				var url = $(this).attr('href');

// Start the modal and on hide, clear the html out. This removes the embed.
// It's important to do so as if a user starts playing a video, then closes
// the modal the video will still be playing and the user will hear the sound.
$('#video-modal').modal().on('hide', function(){
	$('#video-modal .modal-body').html('');
})

// Call Embedly
$.embedly.oembed(url).progress(function(data){
// Fill the modal header
$('#video-modal .modal-header h3').html(data.title);

// Fill the modal value.
$('#video-modal .modal-body').html(data.html);
});

return false;
});
		});
	</script>

	<!-- news box -->
	<script>
		$(document).ready(function(){
			$(".bt-news").click(function(){
				$(".news-box").animate({width: 'toggle'});
			});
		});
	</script>
</body>
</html>
