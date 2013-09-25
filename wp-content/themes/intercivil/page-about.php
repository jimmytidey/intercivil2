<?php
/*
Template Name: About Page
*/

 get_header(); ?>
			
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
			        
			        <?php $attachments = new Attachments( 'attachments' ); /* pass the instance name */ ?>

    		        <?php while( $attachments->get() ) : ?>
                    
                       
                        <div class='row-fluid about-row'>
                            <div class='span3'>
                                <img class='attached_image ' src='<?php echo $attachments->url(); ?>' alt='<?php echo $attachments->field( 'title' ); ?>' />     
                            </div>
                        
                            <div class='span9'>
                                <?php echo $attachments->field( 'caption' ); ?>
                            </div>
                           
                          
                            
                    </div>
                    <?php endwhile; ?>
			        
				</div> <!-- end #main -->
                

			
    
			</div> <!-- end #content -->

<?php get_footer(); ?>