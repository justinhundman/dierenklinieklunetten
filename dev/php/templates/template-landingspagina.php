<?php
/*
Template Name: Landingspagina
*/
?>

<?php get_header(); ?> 
	<div class="u-gridContainer">
		<div class="u-gridRow">
			<div class="u-gridCol11">
				<div class="Slider"> <!-- Dit is de slider in de onderkant header -->
					                   <?php

													$args = array(
														'post_type' => 'slides',
														'posts_per_page'=>999
													);
													$slides = new WP_Query( $args );
													$num = count($slides);
													$counter = 0;
													if( $slides->have_posts() ) {
														while( $slides->have_posts() ) {
															$slides->the_post();
															$counter++;
															?>
															<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
																  $image_url = $image[0];
															?>
															<div class="slide">
																<img src="<?php echo $image_url; ?>" >
															</div>
															<?php
														}
													}
												?> 
				</div>
			</div>
			<div class="u-gridCol1 dieren">  
                <a href="/cavias">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cavias.png"> 
                        <p>Cavias</p>
                </a> 
                <a href="/honden">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/honden.png"> 
                        <p>Honden</p>
                </a>
				<a href="/katten">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/katten.png"> 
                        <p>Katten</p>
                </a>  
                  <a href="/konijnen">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/konijnen.png"> 
                        <p>Konijnen</p>
                </a>   
                <a href="/ratten">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ratten.png"> 
                        <p>Ratten</p>
                </a> 
                <a href="/reptielen">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/reptielen.png"> 
                        <p>Reptielen</p>
                </a>  
			</div>
            

		</div>
	</div>

		<div class="u-gridContainer">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="Content Content--home" id="post-<?php the_ID(); ?>">
			<div class="u-gridRow">
				<div class="u-gridCol6">
					<?php the_content(); ?>
					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
				</div>
								<div class="u-gridCol2">
                                    <div class="content-box-herdenk">
                                        <a href="/herdenkplaats">
                                        <div class="orange-header-text">
                                            <p>Herdenkplaats</p>
                                        </div>
                                        <div class="trans-header-text">
                                            <p>Deel wat uw huisdier voor u heeft betekend.</p>
                                        </div>
					                        <img class="next" src="<?php echo get_stylesheet_directory_uri(); ?>/img/next.png"> 
					                    </a>  
                                    </div>
                                </div>
                                <div class="u-gridCol2">
                                    <div class="content-box-spaarkaart">
                                        <a href="/spaarkaart">
                                        <div class="orange-header-text">
                                            <p>Spaarkaart</p>
                                        </div>
                                        <div class="trans-header-text">
                                            <p>Spaar voor €7,50 korting bij uw volgende aankoop.</p>
                                        </div>
                                        <div class="dierenplaatje">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/dieren.png"> 
                                        </div>
					                        <img class="next" src="<?php echo get_stylesheet_directory_uri(); ?>/img/next.png"> 
					                    </a>  
                                    </div> 
                                </div>
                                 <div class="u-gridCol2">
                                 	<div class="content-box-spaarkaart">
                                        <a href="/nieuwsbrief">
                                        <div class="orange-header-text">
                                            <p>Nieuwsbrief</p>
                                        </div>
                                        <div class="trans-header-text">
                                            <p>Meld je hier aan voor onze nieuwsbrief!</p>
                                        </div>
                                        <div class="dierenplaatje">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/dieren.png"> 
                                        </div>
                                            <img class="next" src="<?php echo get_stylesheet_directory_uri(); ?>/img/next.png"> 
                                        </a>  
                                    </div>
                                </div>
			</div>
		</article>
	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>
