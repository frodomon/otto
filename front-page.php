<?php get_header(); ?>
<section id="slideshow">
  <ul class="slides">
    <?php 
      $posts= query_posts(array(
        'post_type' => 'slides',
        'posts_per_page' => '3',
        'order'=>'ASC'));
      foreach ($posts as $post) :  setup_postdata($post); 
    ?>      
    <li>
      <?php $post_thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?> 
      <img src="<?php echo $post_thumbnail_url; ?>" /> 
      <div class="slide-content">
        <p class='slide-title'><?php the_title(); ?></p>
        <p class='slide-description'><?php echo get_the_content($post); ?></p>
      </div>
    </li>
    <?php endforeach;  
    wp_reset_postdata(); ?>
  </ul>
</section>
<?php get_template_part( 'home', 'services' ); ?>
<?php get_template_part( 'home', 'clients' ); ?>
<?php get_template_part( 'home', 'blog' ); ?>
<?php get_footer(); ?>

<script type="text/javascript">
  $(window).ready(function(){
    $('#slideshow').flexslider({
      animation: "fade",
      animationLoop: true,
      slideshow: true,
      slideshowSpeed: 7000,
      randomize:false,
      prevText:"",
      nextText:""
    });
  });
</script>