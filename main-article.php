<?php query_posts('pagename=metas'); //retrieves the about page only ?>       
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 

         <article class="articulo">
					<h1><?php the_title(); ?></h1>
					<p><?php the_content() ?></p>					
        </article>     
                
<?php endwhile; ?>
               
               
<?php else: ?>
               

<?php endif; ?>




