
    
          <div class="list">
				    <h4 class="bloque1">¿Que hacemos por tu empresa ?</h4>
				    
          </div>  
<?php query_posts('category_name=empresa') ?>              
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 

               <div class="design">
                       <img class="post" src="<?php the_post_thumbnail();?>
                       
				      <h4 class="symbold"><?php the_title() ?></h4>
				      <div class="bloque2d">
				          <article>
				              <p><?php the_excerpt() ?></p>
				              
				          </article>				          
				      </div>			    
				</div>
                
<?php endwhile; ?>
               
               
<?php else: ?>
               

<?php endif; ?>
               <div class="btnempresa">
                   
                   <a class="btnart artcent" href="#">Leer más</a>
                   
               </div>
                
				
				