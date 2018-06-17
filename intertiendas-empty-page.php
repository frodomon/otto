<?php //Template Name: Intertiendas Empty Page
get_header();  ?>
<div id="main" class="group">
	<section id="intertiendas">
		<h1 class="page-title"><?php the_title(); ?></h1>
		<div class="liga-content">
			<p class="text">Este espacio ha sido creado por todas las tiendas asociadas a fin de brindarle a la comunidad la oportunidad de mejorar su experiencia de juego, conociendo otros jugadores y participando de eventos cada vez más grandes.</p>
		</div>
		<div class="liga-content" style="text-align:justify;">
			<?php the_content(); ?>
		</div>
		<div class="liga-images">
			<div class="liga-content">
				<h2>Equipos Participantes</h2>
				<img src="<?php print IMAGES.'/Intertiendas 2 - Equipos.png' ?>" alt="Equipos" />
			</div>
			<div class="liga-content">
				<h2>Resultados - Singles</h2>
				<img src="<?php print IMAGES.'/Intertiendas 2 - Resultados Singles.png' ?>" alt="Top 16 Singles" />
			</div>
			<div class="liga-content">
				<h2>Resultados - Teams</h2>
				<img src="<?php print IMAGES.'/Intertiendas 2 - Resultados Teams.png' ?>" alt="Top4 Teams" />
			</div>
		</div>
	</section>
</div>
<?php get_footer(); ?>