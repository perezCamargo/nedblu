<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<title>NedBLU | Creando tu mundo</title>
	<link rel="shortcut icon" href="img/favicon.ico">
	<link rel="stylesheet" href="css/estilo.css">
	<script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/jquery.autosize.min.js"></script>
	<!-- // <script src="js/cssrefresh.js"></script> -->
</head>
<body>
	{{-- FB --}}
	<div id="fb-root"></div>
	<script>
		(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=381649361967994";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>
	<script>
		!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
	</script>
	{{-- END FB --}}

	{{-- NAVIGATION ... --}}
	<nav class="nav-bar">
		<div class="nav-hold">
			<a href="#nedblu"><h1 class="nav-logo fs0" data-icon="&#xe002;"> Ned<span class="bluTitle">BLU</span></h1></a>
			<div id="nav-menu" class="nav-menu">
				<div class="fs1" aria-hidden="true" data-icon="&#xe000;"></div>
			</div>
			<ul id="nav" class="nav-list">
				{{-- <li><a href="">Home</a></li> --}}
				<li><a href="#nedblu">Servicios</a></li>
				<li><a href="#portafolio">Portafolio</a></li>
				<li><a href="#equipo">Equipo</a></li>
				<li><a href="#contacto">Contacto</a></li>
				{{-- <li><a href="">Blog</a></li> --}}
			</ul>
		</div>
	</nav>
	{{-- END NAVIGATION ... --}}

	{{-- CONTAINER --}}
	<section id="container">
		
	{{-- ARTICLES --}}
		<article id="home"></article>

		{{-- SERVICIOS --}}
		<div id="bg_servicios">
			<h2 class="sec-title" id="nedblu">Servicios</h2>
			<!-- <article id="nedblu"> -->
			<article class="nedblu">
				<figure>
					<img src="img/flat.png" height="750" width="1000" alt="">
					<figcaption>
						Completo Desarrollo de Software
					</figcaption>
				</figure>
				<div id="flex-container">
					<!-- TESTING THIS... -->
					<section class="service-item">
						<div class="img_box">
							<img src="img/cloud.png" alt="" class="img_1">
						</div><!--
						--><div class="data_box">
							<h3>Web Sites & Web Apps</h3>
							<p>Desarrollamos tu sitio web y tu sistema de información en la nube, para que esté siempre disponible.</p>
						</div>						
					</section>

					<section class="service-item self">
						<div class="data_box">
							<h3>Mobile Apps</h3>
							<p>Creamos la aplicación de tu sitio o servicio para tu Smartphone o Tablet Android, iOS o Windows Phone.</p>
						</div><!--
						--><div class="img_box">
							<img src="img/nexus.png" alt="" class="img_2">
						</div>
					</section>
					<section class="service-item">
						<div class="img_box">
							<img src="img/imac.png" alt="" class="img_3">
						</div><!--
						--><div class="data_box">
							<h3>Desktop Systems</h3>
							<p>Desarrollamos la solución para tu oficina, trabajo y cualquier tarea que desees automatizar.</p>
						</div>
					</section>
					<section class="service-item self">
						<div class="data_box">
							<h3>Consultoría</h3>
							<p>Te asesoramos y te ayudamos a administrar tu negocio, con técnicas de Business Analytics, SEO, SEM, Inbound & Outbound Marketing.</p>
						</div><!--
						--><div class="img_box">
							<img src="img/chart.png" alt="" class="img_4">
						</div>
					</section>
				</div>
			</article>
			<div id="social_networks">
				<div class="fb-like" data-href="https://www.facebook.com/NedBlu" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
				{{-- <div class="fb-like" data-href="https://www.facebook.com/NedBlu" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div> --}}

				<a href="https://twitter.com/NedBlu" class="twitter-follow-button" data-show-count="true" data-lang="en">@NedBlu</a>
			</div>
		</div>
		{{-- END SERVICIOS --}}
		
		{{-- PORTAFOLIO --}}
		<div id="bg_portafolio">
			<h2 class="sec-title" id="portafolio">Portafolio</h2>
			<article class="portafolio">
				<div class="client_item">
					<figure>
						<img src="img/salad.png" alt="">
					</figure>
					<p>{{ HTML::link("http://saladmichelfresh.com", "Salad Michel Fresh", ['target'=>'_blank'])}}</p>
				</div>
			</article>
		</div>
		{{-- END PORTAFOLIO --}}

		{{-- EQUIPO --}}
		<div id="bg_equipo">
			<h2 class="sec-title" id="equipo">Equipo</h2>
			<article class="equipo">
				<div class="member s1">
					<figure>
						<img src="img/emilmdos.png" alt="" class="member-img">
					</figure>
					<div class="member-data">
						<p class="member-name">Emilio Alberto Ojeda Mendoza</p>
						<p class="member-job">Developer</p>
						<p class="member-twitter"><a target="_blank" href="{{ url('https://twitter.com/emilMdOS') }}"><span class="arroba">@</span>emilMdOS</a></p>
					</div>
				</div>

				<div class="member s2">
					<figure>
						<img src="img/carlosdavidar.png" alt="" class="member-img">
					</figure>
					<div class="member-data">
						<p class="member-name">Carlos David Aguilar Ruiz</p>
						<p class="member-job">Developer</p>
						<p class="member-twitter"><a target="_blank" href="{{ url('https://twitter.com/carlosdavidar') }}"><span class="arroba">@</span>carlosaguilarnet</a></p>
					</div>
				</div>

				<div class="member">
					<figure>
						<img src="img/perez_camargo.png" alt="" class="member-img">
					</figure>
					<div class="member-data">
						<p class="member-name">Felipe Arturo Perez Camargo</p>
						<p class="member-job">Developer</p>
						<p class="member-twitter"><a target="_blank" href="{{ url('https://twitter.com/Perez_Camargo') }}"><span class="arroba">@</span>Perez_Camargo</a></p>
					</div>
				</div>
			</article>
		</div>
		{{-- END EQUIPO --}}

		{{-- CONTACTO --}}
		<div id="bg_contacto">
			<h2 class="sec-title" id="contacto">Contacto</h2>
			<article class="contacto">
				<div id="box-contact">
				{{Form::open( array('url' => 'email'));}}
					<div class="box-contact-email">
						<div class="fs2" aria-hidden="true" data-icon="&#xe003;"></div><!--
						-->
						{{ Form::email('email', '', array(
							'class' => 'email',
							'placeholder' => 'Tu correo...'
						)) }}
					</div>
					<div class="box-contact-message">
						{{ Form::textarea('mensaje', '', array(
							'class' => 'animated',
							'placeholder' => 'Escribenos tu mensaje...',
							'cols' => '0',
							'rows' => '0'
						)) }}
					</div>
					<div class="box-button-align">
						{{ Form::submit('Comentanos', array(
							'class' => 'box-contact-button'
						)) }}
					</div>
				{{ Form::close() }}
				</div>
			</article>
		</div>
		{{-- END CONTACTO --}}
	{{-- END ARTICLES --}}

	</section>
	{{-- END CONTAINER --}}
	<script src="js/navigation.js"></script>
</body>
</html>