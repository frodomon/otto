<?php //Template Name: Product Page
	get_header();  
	$gameline = get_the_title(); 
	$mobile = get_option('dohko_mobile');
?>
<div id="main">
	<section id="products" class="group">
	<div class="products-top">
		<h1 class="page-title">PRODUCTOS - <?php echo $gameline; ?></h1>
	</div>
	<div class="gameline-products group">
				<?php 
	      	$posts= query_posts(array(
	        	'post_type' => 'products',
	        	'order'=>'ASC',
	        	'tax_query' => array(
	        		array(
	        			'taxonomy' => 'gameline',
	        			'field' => 'slug',
	        			'limit' => 30,
	        			'terms' => $gameline
	        		))
	        ));
	      	foreach ($posts as $post) :  setup_postdata($post); 
	    	?>
	      
	      <?php 
	      	$post_thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
	      	$custom = get_post_custom($post->ID);
	    		$shortname = $custom["shortname"][0];
	    		$description = $custom["description"][0];
	    		$preciofull = $custom["preciofull"][0];
	    		$precioprevta = $custom["precioprevta"][0];
	    		$preciooferta = $custom["preciooferta"][0];
	    		$pagolink = $custom["pagolink"][0];
	    		$img_id = $custom["img_id"][0]; 
			    // See if there's a media id already saved as post meta
			    $your_img_id = get_post_meta( $post->ID, '_your_img_id', true );
			    // Get the image src
			    $your_img_src = wp_get_attachment_url( $img_id );
			    // For convenience, see if the array is valid
			    $you_have_img = !empty($your_img_src);  
			    $custom_doc = wp_get_attachment_url( $img_id );
			    $filename = basename( get_attached_file($img_id))
	              

	      ?>

	      <div class="product-resume group">
	      	<div class="product-thumbnail">
	      		<div class="p-thumb">
							<img src="<?php echo $post_thumbnail_url; ?>" /> 
						</div> 
					</div>      		
	    		<div class="product-resume-description">
	    			<h3 class='product-title' style='color:black;'><?php the_title(); ?></h3>
	        	<p class='product-description'><?php echo get_the_content($post); ?></p>
	        	<?php if($preciooferta){ ?> 
	        		<p class='product-description tachadobybestprice'>Precio: <?php echo $preciofull; ?></p>	
	        		<p class='product-description negrita'>Oferta: <?php echo $preciooferta; ?></p>	
	        	<?php } else{ ?> 
		        	<p class='product-description negrita'>Precio: <?php echo $preciofull; ?></p>	
		        <?php } ?> 
		        <p class='product-description'><a class='product-button' href="<?php echo $pagolink; ?>" target="_blank">Comprar</a></p>
		        <p class='product-description'>Todos los productos se recogen en tienda. La coordinación del envío se hace mediante <a href="https://api.whatsapp.com/send?phone=<?php print $mobile; ?>" target="_blank">WhatsApp.</a> despues de comprar.</p>
	    		</div>
	      </div>
	    <?php endforeach;  
	    wp_reset_postdata(); ?>
			</div>
			<p class='back-button'><a class='btn-back' href="https://www.eltablerodeotto.com/productos/">Regresar</a></p>

		</div>
	</section>
</div>
<?php get_footer(); ?>