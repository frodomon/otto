<?php //Template Name: PKM League Feb19
get_header();  ?>
<div id="main" class="group">
	<section id="intertiendas">
		<h1 class="page-title"><?php the_title(); ?></h1>
		<div class="liga-content">
			<p class="text">Otto Pokemon League busca brindarle a la comunidad de Pokémon TCG en Lima que viven en los distritos de San Miguel, Pueblo Libre, Callao, Magdalena y Jesús Maria la oportunidad de mejorar su experiencia de juego, conociendo otros jugadores y participando de eventos cada vez más grandes.</p>
		</div>
		<div class="liga-content" style="text-align:justify;">
			<?php the_content(); ?>
		</div>
		<div class="liga-images">
			<div class="liga-content">
				<h2>Fechas</h2>
				<img src="<?php print IMAGES.'/Otto Pokémon League Febrero 19 - Calendario.png' ?>" alt="Calendario" />
			</div>
			<div class="liga-content">
				<h2>Resultados</h2>
				<img src="<?php print IMAGES.'/Otto Pokémon League Febrero 19 - Resultados.png' ?>" alt="Resultados de la Liga" />
			</div>
			<div class="liga-content">
				<h2>Brackets Top 8</h2>
				<img src="<?php print IMAGES.'/Otto Pokémon League Febrero 19 - Brackets Top 8.png' ?>" alt="Brackets Top8" />
			</div>
			<div class="liga-content">
				<h2>Ganadores</h2>
				<p class="text">Nuestro Campeón de Noviembre: Alvaro Castañeda</p>
				<img src="<?php print IMAGES.'/Otto Pokémon League Febrero 19 - Campeón.jpg' ?>" alt="Campeón" />
			</div>
		</div>
	</section>
</div>
<?php get_footer(); ?>