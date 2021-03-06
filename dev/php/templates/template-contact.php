<?php
/*
Template Name: Contactpage
*/
?>

<?php get_header(); ?>

	<div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="Content Content--fullwidth u-gridContainer" id="post-<?php the_ID(); ?>">
			<div class="Content-entry">
				<h2><?php the_title(); ?></h2>
				<div class="Content-text">

					<div class="u-gridRow">									
						<div class="adress-map u-gridCol12">
							<div id="map_canvas"></div>
						</div>

					</div> <!-- /gridRow -->

					<div class="hr-style super-margin">
						<hr>
					</div>
					<div class="u-gridRow">
						<div class="adress-map u-gridCol8">						
							<p class="contact-page-p">Heeft u nog vragen? Neem dan hieronder contact met ons op. </p>
							<?php the_content(); ?>
						
							<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
						</div>
						<div class="adress u-gridCol4">
							<div class="adress-info">
								<p><b>Dierenkliniek Lunetten</b></p>
								<p>Kampereiland 13-15</p>
								<p>3524 CZ Utrecht Utrecht</p>
								<p>Email: info@dierenklinieklunetten.nl</p>
								<p>Tel: 030 - 289 89 39</p>
							</div>
	
						</div>	
					</div>

				</div> <!-- content-text -->
			</div>
		</article>
	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>

