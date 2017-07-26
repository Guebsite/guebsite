<!doctype html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="author" content="R Nuñez Rondón">
<title><?php bloginfo('name') ?></title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link href="<?php bloginfo('stylesheet_url') ?>" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/font-awesome.min.css">
</head>

<body>
	<div id="contenedor">
		<header id="cabecera">
			<div class="logoweb">
				<a href="index.php"><img src="<?php bloginfo('template_url') ?>/img/guebsite-logo2.jpg" alt="Guebsite Latinoamérica" title="<?php bloginfo('description') ?>"></a>
			</div>
			<div class="tels">
			    <span class="now">Llámanos ahora:</span><a class="tel1" href="tel:+526441170372">+52 (644) 117 0372</a><a class="tel2" href="tel:+526441164048">+52 (644) 116-4048</a>			    
			</div>									
		<nav id="ham">
		<div class="logocel">
				<img src="<?php bloginfo('template_url') ?>/img/logocel.png" alt="Logo Guebsite">
        </div>
  <label for="show-menu" class="show-menu">
   <span class="menu-btn"></span>
  </label>
    <input type="checkbox" id="show-menu"><span></span>
        <ul id="menu">
        <li><a href="#" class="homebtn">Home</a></li>
        <li>
            <a href="#">Sitios Web &#8595;</a>
            <ul class="hidden">
                <li><a href="#">Pdf a Html</a></li>
                <li><a href="#">Haslo Tu Mismo FREE</a></li>
                <li><a href="#">Lo hacemos x Ti</a></li>
                <li><a href="#">Sitio Web Wordpress</a></li>
            </ul>
        </li>
        <li>
            <a href="#">Marketing Online &#8595;</a>
            <ul class="hidden">
                <li><a href="#">Redes Sociales</a></li>
                <li><a href="#">Mkt Pago por Click</a></li>
                <li><a href="#">Posicionamiento Web (SEO)</a></li>
                <li><a href="#">Planeación Estratégica</a></li>
            </ul>
        </li>
        <li>
            <a href="#">+ Servicios &#8595;</a>
            <ul class="hidden">
                <li><a href="#">Aojamiento Web</a></li>
                
            </ul>
        </li>
        <li><a href="#">Servicio Global</a></li>
        <li><a href="#">Soporte</a></li>
    </ul> 
   </nav> 
					
		</header>
		<div id="cuerpo">
			<section class="mkt">
				<h3>Construimos y posicionamos tu sitio Web para que alcances tus metas </h3>
				<p>lorem</p>
			</section>
			<main class="contenido">
				<article class="articulo">
					<h4>¿Como alcanzar tus Metas?</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint eum laboriosam quaerat aliquid esse, incidunt assumenda odit asperiores ducimus porro. Et vitae iure quisquam ratione explicabo aliquam saepe illo obcaecati.</p>
					
					<a class="btnart" href="#">Solicitar Información</a>
					
				</article>
				<aside id="sidebar">
					Aqui va el sidebar
					
				</aside>			
			</main>
			<section class="intro">
			<?php include(TEMPLATEPATH.'/empresa.php');?>
				
			</section>		
			
		</div>
	  <footer id="pie" class="flex">
			<div class="item footer1">
					<h5>Sitios Web</h5>
					<ul>
					    <li><a href="#">&#8900; Construye tu sitio Free</a></li>
					    <li><a href="#">&#8900; Lo hacemos x tí</a></li>
					    <li><a href="#">&#8900; Sitio Web Wordpress</a></li>
					    <li><a href="#">&#8900; PSD a HTML</a></li>
					</ul>
				</div>
				<div class="item footer2">
					<h5>Marketing</h5>
					<ul>
					    <li><a href="#">&#8900; Redes Sociales</a></li>
					    <li><a href="#">&#8900; Mkt Pago x Click</a></li>
					    <li><a href="#">&#8900; Posicionamiento Web (SEO)</a></li>
					    <li><a href="#">&#8900; Planeación Estratégica</a></li>
					</ul>
				</div>
				<div class="item footer3">
					<h5>Redes</h5>
				  <div class="footer-social-links">
  <a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
  <a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
  <a href="#" title="Google+" target="_blank"><i class="fa fa-google-plus"></i></a>
  <a href="#" title="Youtube" target="_blank"><i class="fa fa-youtube"></i></a>
                </div>

				</div>
				<div class="item footer4">
					<img src="<?php bloginfo('template_url') ?>/img/Logo_G.png" alt="Guebsite Latinoamérica">
					
				</div>
      </footer>
      <span class="copy">Derechos reservados de concepto y forma de este sitio web. Power by: <a href="http://www.guebsite.com.mx" target="_blank">Guebsite MEXICO</a></span>	
	</div>
</body>
</html>