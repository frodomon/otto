<?php //Template Name: PKM Liga Intertienda Otto vs Cantu 2
get_header();  ?>
<div id="main" class="group">
	<section id="intertiendas">
		<h1 class="page-title"><?php the_title(); ?></h1>
		<div class="liga-content">
			<p class="text">La Liga Intertiendas Otto vs Cantu es una serie de torneos que busca unir a los jugadores de Pokémon TCG de ambas tiendas en una competencia sana, limpia y sobre todo divertida. Al final de las 8 semanas cada tienda tendrá a sus 4 mejores jugadores y estos se enfrentarán en un torneo de eliminación simple para ver quien se corona campeón de la Liga.</p>
		</div>
		<div class="liga-content" style="text-align:justify;">
			<?php the_content(); ?>
		</div>
		<div class="liga-images">
			<div class="liga-content">
				<h2>Fechas</h2>
				<img src="<?php print IMAGES.'/Intertienda Otto vs Cantu - Noviembre.png' ?>" alt="Calendario Septiembre" />
				<br>
				<img src="<?php print IMAGES.'/Intertienda Otto vs Cantu - Diciembre.png' ?>" alt="Calendario Octubre" />
			</div>
			<div class="liga-content">
				<h2>Resultados</h2>
				<img src="<?php print IMAGES.'/Intertienda Otto vs Cantu 2 - Resultados Otto.png' ?>" alt="Resultados - Otto" />
				<br>
				<img src="<?php print IMAGES.'/Intertienda Otto vs Cantu 2 - Resultados Cantu.png' ?>" alt="Resultados - Cantu" />

			</div>
			<div class="liga-content">
				<h2>Llaves del Top 8</h2>
				<img src="<?php print IMAGES.'/Intertienda Otto vs Cantu - Brackets.png' ?>" alt="Llaves del Top8" />
			</div>
			<div class="liga-content">
				<img src="<?php print IMAGES.'/Intertienda Otto vs Cantu.png' ?>" alt="Liga Intertiendas Otto vs Cantu" />
			</div>

		</div>
	</section>
</div>
<?php get_footer(); ?>