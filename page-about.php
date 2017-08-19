<?php 
/*
Template name: Page About
*/
?>
<?php get_template_part( 'header', 'about' ); ?>

		<div id="cuerpo">
		    <?php include(TEMPLATEPATH.'/mkt-about.php');?>
			
			<main class="contenido">
			
			             
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <article class="articulo">
					<h1><?php the_title(); ?></h1>
					<p><?php the_content() ?></p>					
            </article>     
                
<?php endwhile; ?>
               
               
<?php else: ?>
               

<?php endif; ?>

           
            <?php get_sidebar(); ?>			
			</main>
			<section class="intro">
			<?php include(TEMPLATEPATH.'/empresa.php');?>
				
			</section>		
			
		</div>
<?php get_footer(); ?>