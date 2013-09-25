<?php
/*
Template Name: Yes Move Initiative
*/

 get_header(); ?>
			
			
			<div class='row-fluid'>
			    
    			    <?php $attachments = new Attachments( 'attachments' ); /* pass the instance name */ ?>

    		        <?php while( $attachments->get() ) : ?>
                
                   
                            <img class='attached_image ymi_image ' src='<?php echo $attachments->url(); ?>' alt='<?php echo $attachments->field( 'title' ); ?>' />     
                    
                          
                     
                 
                            
         

                            <div class='carousel_caption'>
             			        <h4 class='carousel_caption_text'><?php echo strip_tags($attachments->field( 'caption' )); ?></h4>
             			    </div>
                    
               

			    
			    <?php endwhile; ?>
            </div>    
			
			<div id="content" class="clearfix row-fluid">
			
				<div id="main" class="span8 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
						<header>
							
							<div class="page-header"><h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1></div>
						
						</header> <!-- end article header -->
					
						<section class="post_content clearfix" itemprop="articleBody">
							<?php the_content(); ?>
					
						</section> <!-- end article section -->

					    
					</article> <!-- end article -->
					
					
					
					<?php endwhile; ?>		
					
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
                

			
    
			</div> <!-- end #content -->

<?php get_footer(); ?>