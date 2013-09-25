<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
  
  <header>
  
    
      <h3>  <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
      <p class='post_date'><time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_date(); ?></time></p>
    
  
  </header> <!-- end article header -->

  <section class=" clearfix">
    <?php the_content( __("Read more &raquo;","bonestheme") ); ?>
  </section> <!-- end article section -->
  
  <footer>

    <p class="tags"><?php the_tags('<span class="tags-title">' . __("Tags","bonestheme") . ':</span> ', ' ', ''); ?></p>
    
  </footer> <!-- end article footer -->

</article> <!-- end article -->
