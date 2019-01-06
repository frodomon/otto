<?php //Template Name: Products Page
get_header();  ?>
<section id="products">
		<div class="products-top">
			<h1 class="page-title">PRODUCTOS</h1>
		</div>
		<div class="gameline-products group">
			<?php $url = home_url( '/' ); ?>
			<div class="gameline-category">
				<a href="<?php echo $url.'productos/pokemon' ?>" title="Pokémon">
					<img src="<?php print IMAGES.'/Pokemon TCG.png' ?>" alt="Pokémon"/>
				</a>
			</div>
			<div class="gameline-category">
				<a href="<?php echo $url.'productos/magic' ?>" title="Magic">
					<img src="<?php print IMAGES.'/Magic.png' ?>" alt="Magic"/>
				</a>
			</div>
			<div class="gameline-category">
				<a href="<?php echo $url.'productos/juegos-de-mesa' ?>" title="Juegos de Mesa">
					<img src="<?php print IMAGES.'/JuegosdeMesa.png' ?>" alt="Juegos de Mesa"/>
				</a>
			</div>
			<div class="gameline-category">
				<a href="<?php echo $url.'productos/accesorios' ?>" title="Accesorios">
					<img src="<?php print IMAGES.'/Accesorios.png' ?>" alt="Accesorios"/>
				</a>
			</div>
		</div>
</section>
<?php get_footer(); ?>