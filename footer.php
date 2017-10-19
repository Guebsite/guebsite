<footer id="pie">
      
			<div class="flex control">
                
                <div class="item footer1">
					<h5>Guebsite</h5>
					<?php wp_nav_menu(array(
                
                        'theme_location'=> 'footer1',         
                                        
                ));           
            ?>	
					
				</div>
				<div class="item footer2">
					<h5>Marketing</h5>
					<?php wp_nav_menu(array(
                
                        'theme_location'=> 'footer2',         
                                        
                ));           
            ?>	
					
				</div>
				<div class="item footer3">
					<h5>Síguenos</h5>
				  <div class="footer-social-links">
  <a href="https://www.facebook.com/Guebsite/" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
  <a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
  <a href="#" title="Google+" target="_blank"><i class="fa fa-google-plus"></i></a>
  <a href="#" title="Youtube" target="_blank"><i class="fa fa-youtube"></i></a>
                </div>

				</div>
				<div class="item footer4">
					<img src="<?php bloginfo('template_url') ?>/img/Logo_G.png" alt="Guebsite Latinoamérica">
					
				</div></div>
     
      </footer>
      <span class="copy">Derechos reservados de concepto y forma de este sitio web. Power by: <a href="http://www.guebsite.com.mx" target="_blank">Guebsite Latinoamérica</a></span>	
	</div>
	<?php wp_footer(); ?>
</body>
</html>
