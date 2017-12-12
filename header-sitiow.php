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
		<div class="branding">
			<div class="logoweb">
				<a href="<?php bloginfo('url') ?>"><img src="<?php bloginfo('template_url') ?>/img/websitelogodesk.svg" alt="Guebsite Latinoamérica" title="<?php bloginfo('description') ?>"></a>
			</div>
			<div class="tels">
			    <span class="now">Llámanos ahora:</span><a class="tel1" href="tel:+526441170372">+52 (644) 117 0372</a><a class="tel2" href="tel:+526441164048">+52 (644) 116-4048</a>			    
			</div>
            </div>	
			<?php get_template_part( 'nav' );           // Navigation bar (nav.php) ?>						
		 
				
		</header>