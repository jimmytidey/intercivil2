<?php get_header(); ?>
			
			<?php
				$blog_hero = of_get_option('blog_hero');
				if ($blog_hero){
			?>
			
			<script>
			    jQuery('.carousel').carousel();
			</script>
			
			<div class="clearfix row-fluid">
			    
                <div id="myCarousel" class="carousel slide">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                    </ol>
                    
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                       
                        <div class="active item">
                            <img src='<?php bloginfo('template_directory'); ?>/images/YMI.jpg' />
                            <div class="carousel-caption"><h4>Work for the young</h4></div>
                        </div>
                        
                        <div class="item">
                            <img src='<?php bloginfo('template_directory'); ?>/images/kids.jpg' />
                            <div class="carousel-caption"><h4>Kids In Diversity</h4></div>
                        </div>
                        
                        <div class="item">
                            <img src='<?php bloginfo('template_directory'); ?>/images/pros.jpg' />
                            <div class="carousel-caption"><h4>Professionals in diversity</h4></div>
                        </div>
                        
                        <div class="item">
                            <img src='<?php bloginfo('template_directory'); ?>/images/food.jpg' />
                            <div class="carousel-caption"><h4>Sharing food</h4></div>
                        </div>
                    </div>
                    <!-- Carousel nav -->
                    <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                    <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
                </div>
            </div>    
             
			<?php
			    }
			?>
			
			<div id="content" class="clearfix row-fluid">
			
				<div id="main" class="span10 clearfix" role="main">
                    
                    <h2>Latest News</h2>    
                    
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php get_template_part( 'content', get_post_format() ); ?>					
					<?php endwhile; ?>	
					
					<?php if (function_exists('page_navi')) { // if expirimental feature is active ?>
						
						<?php page_navi(); // use the page navi function ?>
						
					<?php } else { // if it is disabled, display regular wp prev & next links ?>
						<nav class="wp-prev-next">
							<ul class="clearfix">
								<li class="prev-link"><?php next_posts_link(_e('&laquo; Older Entries', "bonestheme")) ?></li>
								<li class="next-link"><?php previous_posts_link(_e('Newer Entries &raquo;', "bonestheme")) ?></li>
							</ul>
						</nav>
					<?php } ?>		
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "bonestheme"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "bonestheme"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
    
				
				
				<br class='clearfix' />
    
			</div> <!-- end #content -->

<?php get_footer(); ?>