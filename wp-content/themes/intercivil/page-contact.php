<?php
/*
Template Name: Contact Page
*/

 get_header(); ?>
			
			<div id="content" class="clearfix row-fluid">
			
				<div id="main" class="span6 clearfix" role="main">

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
                <div id="map" class="span6 ">
                    <iframe  width='100%' height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.co.uk/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=80+Haymarket,+London&amp;sll=51.48931,-0.08819&amp;sspn=0.552395,0.937958&amp;ie=UTF8&amp;hq=&amp;hnear=80+Haymarket,+London+SW1Y+4TE,+United+Kingdom&amp;t=m&amp;ll=51.514191,-0.126514&amp;spn=0.016024,0.034246&amp;z=14&amp;output=embed"></iframe><br /><small><a href="http://maps.google.co.uk/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=80+Haymarket,+London&amp;sll=51.48931,-0.08819&amp;sspn=0.552395,0.937958&amp;ie=UTF8&amp;hq=&amp;hnear=80+Haymarket,+London+SW1Y+4TE,+United+Kingdom&amp;t=m&amp;ll=51.514191,-0.126514&amp;spn=0.016024,0.034246&amp;z=14" style="color:#0000FF;text-align:left">View Larger Map</a></small>
                    
                </div>    

			
    
			</div> <!-- end #content -->

<?php get_footer(); ?>