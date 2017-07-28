<!doctype html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title><?php bloginfo('name') ?></title>
<meta name="author" content="R Nuñez Rondón">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link href="<?php bloginfo('stylesheet_url') ?>" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/font-awesome.min.css">
<?php wp_head(); ?>  
</head>

<body>
	<div id="contenedor">
		
		<header id="cabecera">
			<div class="logoweb">
				<a href="<?php bloginfo('url') ?>"><img src="<?php bloginfo('template_url') ?>/img/guebsite-logo2.jpg" alt="Guebsite Latinoamérica" title="<?php bloginfo('description') ?>"></a>
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
        <li><a href="<?php bloginfo('url') ?>" class="homebtn">Home</a></li>
        <li>
            <a href="<?php bloginfo('url') ?>/sitiosweb/">Sitios Web &#8595;</a>
            <ul class="hidden">
                <li><a href="<?php bloginfo('url') ?>/sitiosweb/pdf-html/">Pdf a Html</a></li>
                <li><a href="<?php bloginfo('url') ?>/sitiosweb/haslo-tu-mismo-gratis/">Haslo Tu Mismo FREE</a></li>
                <li><a href="<?php bloginfo('url') ?>/sitiosweb/construimos-tu-sitio-web/">Lo hacemos x Ti</a></li>
                <li><a href="<?php bloginfo('url') ?>/sitiosweb/sitio-web-wordpress/">Sitio Web Wordpress</a></li>
            </ul>
        </li>
        <li>
            <a href="<?php bloginfo('url') ?>/marketing-online/">Marketing Online &#8595;</a>
            <ul class="hidden">
                <li><a href="<?php bloginfo('url') ?>/marketing-online/redes-sociales/">Redes Sociales</a></li>
                <li><a href="<?php bloginfo('url') ?>/marketing-online/pago-por-clicks/">Mkt Pago por Click</a></li>
                <li><a href="<?php bloginfo('url') ?>/marketing-online/posicionamiento-web-seo/">Posicionamiento Web (SEO)</a></li>
                <li><a href="<?php bloginfo('url') ?>/marketing-online/planeacion-estrategica/">Planeación Estratégica</a></li>
            </ul>
        </li>
        <li>
            <a href="<?php bloginfo('url') ?>/servicios/">+ Servicios &#8595;</a>
            <ul class="hidden">
                <li><a href="<?php bloginfo('url') ?>/servicios/alojamiento-web/">Aojamiento Web</a></li>
                
            </ul>
        </li>
        <li><a href="<?php bloginfo('url') ?>/servicio-global/">Servicio Global</a></li>
        <li><a href="<?php bloginfo('url') ?>/contacto/">Contacto</a></li>
    </ul> 
   </nav> 
				
		</header>