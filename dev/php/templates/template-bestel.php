<?php
/*
Template Name: Bestel
*/
?>

<?php get_header(); ?>
					
	<div class="u-gridContainer">
		<?php get_sidebar(); ?>
		<div class="u-gridRow">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<article class="Content Content--leftsidebar" id="post-<?php the_ID(); ?>">
									<h2><?php the_title(); ?></h2>
								<div class="u-gridCol8">
									<div>
										<?php the_content(); ?>
										<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
									</div>
								</div>
							</article>
						<?php endwhile; endif; ?>
						<div class="u-gridCol4 pictureright">
												<?php if ( has_post_thumbnail() ) { ?>
												    <?php the_post_thumbnail( 'large', array( 'class' => 'left',
												            'alt'   => trim( strip_tags( $wp_postmeta->_wp_attachment_image_alt ) )
												        ) ); ?>
												<?php } ?>
						</div>
		</div>
		
	</div>

<?php get_footer(); ?>
