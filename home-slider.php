<section id="slideshow">
  <ul class="slides">
    <?php 
      $posts= query_posts(array(
        'post_type' => 'slides',
        'posts_per_page' => '8',
        'order'=>'ASC'));
      foreach ($posts as $post) :  setup_postdata($post); 
    ?>
      <?php
        $post_thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
        $custom = get_post_custom($post->ID);
        $link = $custom["website"][0];
      ?>
             
    <li class="slide" style="background:url(<?php echo $post_thumbnail_url; ?>) no-repeat center center; background-size:cover;">
    <?php if (isset($link)) {?>
      <a href="<?php echo $link ?>">
    <?php } ?>
        <div class="slide-content">
            <?php if (empty($link)) { ?>
            <?php } else{?>
              <p class='slide-title'><?php the_title(); ?></p>
              <p class='slide-description'><?php echo get_the_content($post); ?></p>
            <?php } ?>
        </div>
    <?php if (isset($link)) {?>
      </a>
    <?php } ?>
    </li>
    
    <?php endforeach;  
    wp_reset_postdata(); ?>
  </ul>
</section>