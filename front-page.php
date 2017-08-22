<?php get_header(); ?>
<?php get_template_part( 'home', 'slider' ); ?>
<?php get_template_part( 'home', 'services' ); ?>
<?php get_template_part( 'home', 'clients' ); ?>
<?php get_template_part( 'home', 'suppliers' ); ?>
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