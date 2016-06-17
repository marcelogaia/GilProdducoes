<?php
	$sent = false;

	$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : "";

	require "../includes/phpmailer/PHPMailerAutoload.php";

	if($action == "submit"){

		$name	= isset($_REQUEST['name']) ? $_REQUEST['name'] : "";
		$email 	= isset($_REQUEST['email']) ? $_REQUEST['email'] : "";
		$phone	= isset($_REQUEST['phone']) ? $_REQUEST['phone'] : "";
		$company= isset($_REQUEST['company']) ? $_REQUEST['company'] : "";
		$message= isset($_REQUEST['message']) ? $_REQUEST['message'] : "";

		if(($name!="")&&($email!="")&&($phone!="")&&($message!="")){

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

			//$mail->SMTPDebug = 3;               // Enable verbose debug output

			$mail->isSMTP();                      // Set mailer to use SMTP
			$mail->Host = '';  					  // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;               // Enable SMTP authentication
			$mail->Username = '';          		  // SMTP username
			$mail->Password = '';                 // SMTP password
			$mail->SMTPSecure = 'tls';            // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 587;                    // TCP port to connect to
			$mail->CharSet = "UTF-8";

			$mail->setFrom('', 'Gil Produções - Orçamentos');
			$mail->addAddress('contato@gilproducoes.com.br', 'Gil Produções');     // Add a recipient
			$mail->addReplyTo($email,$name);

			// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
			// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
			
			$mail->isHTML(true);                                  // Set email format to HTML

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
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" type="image/ico" href="../favicon.ico?v=2"></link>
	<link rel="shortcut icon" href="../favicon.ico?v=2"></link>

	<title>Gil Produções :: Contato</title>

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

<body role="document" class="contact">

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
				<a class="navbar-brand" href="index.html">Gil Produções</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="quem-somos.html">Quem Somos</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Serviços <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="servicos-aniversarios.html">Aniversários</a></li>
							<li><a href="servicos-casamentos.html">Casamentos</a></li>
							<li><a href="servicos-outros.html">Outros</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Portfólio <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="portfolio-aniversarios-15-anos.html">Aniversários</a></li>
							<li><a href="portfolio-casamentos.html">Casamentos</a></li>
							<li><a href="portfolio-outros.html">Outros</a></li>
						</ul>
					</li>

					<li><a href="orcamentos.php">Orçamentos</a></li>
					<li><a href="duvidas.html">Dúvidas</a></li>
					<li><a href="contato.php">Contato</a></li>
					<li><a href="agil.html" class="red">Ágil Locações</a></li>
					<li class="news">
						<form action="#" method="post">
							<img src="img/envelope-icon.png" alt="">
							<input type="text" placeholder="email">
							<button type="submit">OK</button>
						</form>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="corporativo"><a href="http://gilprodducoes.com.br/em-breve/">CORPORATIVO</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>

	<div class="container-fluid" role="main">
		<div class="row feature">
			<div class="col-sm-12 internal-content">
				<center>
					<h2 class="main-title">
						<div class="red left1">Fale</div>
						<div class="right1">Conosco</div>
					</h2>
				</center>
			</div>
		</div>
		<div class="row contact">
			<div class="col-sm-2 col-md-3">&nbsp;</div>
			<div class="col-sm-8 col-md-6 main-form">
				<?php if($sent){ ?>
					Enviado com sucesso. <!-- Alterar aqui qualquer coisa que quiser colocar -->
				<?php } ?>
				<form action="" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="action" value="submit" />
					<div class="col-sm-6">
						<label>Nome:</label><br />
						<input type="text" name="name" value="" required /><br />
						<label>E-mail:</label><br />
						<input type="text" name="email" value="" required /><br />
						<label>Telefone:</label><br />
						<input type="text" name="phone" value="" required /><br />
						<label>Empresa/Organização:</label><br />
						<input type="text" name="company" value="" />
					</div>
					<div class="col-sm-6">
						<label style="margin-left: 10px;">Mensagem:</label><br />
						<textarea name="message" required></textarea><br />
						<input type="submit" class="bt-send" value=" " />
					</div>
				</form>
			</div>
			<div class="col-sm-2 col-md-3">&nbsp;</div>
		</div>
		<div class="row map">
			<div class="col-sm-3">&nbsp;</div>
			<div class="col-sm-6">
				<div class="info-contact">
					<h4>Faça uma visita <span>e tome um belo </span><br>copo de café conosco.</h4>
					<div class="contact-line">
						<address>
							Gil Prodduções<br />
							Rua Haiti, 115 | Jd Girassol<br />
							Americana, SP 13465-681
						</address>
						<div class="contact">
							<p>
								<a href="tel:+551936411244">(19) 3461.1244</a>
								<a href="mailto:contato@gilproducoes.com.br" style="font-size: 10px;">contato@gilproducoes.com.br</a>
							</p>
						</div>
					</div>
					<a href="https://goo.gl/maps/z1z53fgvSS62" target="_blank" class="bt-directions">OBTER DIREÇÕES</a>
					<img src="img/img-contact.jpg" class="img-contact" border="0" alt="" />
				</div>
			</div>
			<div class="col-sm-3">&nbsp;</div>

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
			<li class="col-xs-5 col-sm-4">
				<a href="https://vimeo.com/153258664" class="bt-demo-reel">DEMO REEL</a>
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
	<script src="js/main.js"></script>
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
