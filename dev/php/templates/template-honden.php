<?php
/*
Template Name: Honden
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
												<div class="accordion">
												    <span><a name="1" href="#1"><h4>>&nbsp;Ontwormen</h4></a></span>
												</div>
												<div class="accContent fiscaal">
												    <p>	
												    	een jonge pup moet al vanaf 2 weken ontwormd worden. Hoe vaak u moet ontwormen is afhankelijk van welk middel u gebruikt. Laat ons u hierover informeren.
													</p>
												</div>
												<div class="accordion">
												    <span><a name="2" href="#2"><h4>>&nbsp;Vaccinatie</h4></a></span>
												</div>
												<div class="accContent fiscaal">
												    <p>	
												    	Enten is tegenwoordig maatwerk. De entingen zijn beter geworden waardoor minder vaak ingeënt moet worden. Regelmatig bekijken wij of het ent-schema aangepast moet worden. Op dit moment geldt voor honden het volgende ent schema:
														<table border="1" cellspacing="0" cellpadding="0">
														<tbody>
														<tr>
														<td> <strong>Leeftijd hond</strong></td>
														<td align="center"> 6 weken</td>
														<td align="center"> 9 weken</td>
														<td align="center"> 12 weken</td>
														<td align="center"> 1 jaar</td>
														<td align="center"> 2 jaar</td>
														<td align="center"> 3 jaar</td>
														<td align="center">4 jaar</td>
														<td align="center">enz</td>
														</tr>
														<tr>
														<td> Hondenziekte/parvo</td>
														<td align="center"> +</td>
														<td align="center"></td>
														<td align="center"></td>
														<td align="center"></td>
														<td align="center"></td>
														<td align="center"></td>
														<td align="center"></td>
														<td align="center"></td>
														</tr>
														<tr>
														<td> Parvo/Weil</td>
														<td align="center"></td>
														<td align="center"> +</td>
														<td align="center"></td>
														<td align="center"></td>
														<td align="center"> +</td>
														<td align="center"> +</td>
														<td align="center"></td>
														<td align="center"></td>
														</tr>
														<tr>
														<td> cocktail</td>
														<td align="center"></td>
														<td align="center"></td>
														<td align="center"> +</td>
														<td align="center"> +</td>
														<td align="center"></td>
														<td align="center"></td>
														<td align="center">+</td>
														<td align="center"></td>
														</tr>
														<tr>
														<td> kennelhoest</td>
														<td align="center"></td>
														<td align="center"></td>
														<td align="center"> +</td>
														<td align="center"> +</td>
														<td align="center"> +</td>
														<td align="center"> +</td>
														<td align="center">+</td>
														<td align="center"></td>
														</tr>
														</tbody>
														</table>
														<p>Wij adviseren een extra enting tegen kennelhoest als uw hond naar een puppycursus, een hondententoonstelling , een dierenpension of een uitlaatservice gaat.

														Gaat u met uw hond naar het buitenland, dan moet uw hond ook minimaal 1 maand van te voren tegen hondsdolheid geënt worden en verder gechipt of getatoeëerd zijn (dit laatste gebeurt in Nederland niet meer maar sommige oude honden hebben nog een tatoeage). Bovendien heeft u een officieel dierenpaspoort nodig. Gaat u buiten de EU op vakantie? Bel ons dan even voor de precieze eisen van dat land.</p>
													</p>
												</div>
												<div class="accordion">
												    <span><a name="3" href="#3"><h4>>&nbsp;Sterilisatie hond</h4></a></span>
												</div>
												<div class="accContent fiscaal">
												    <p>	
												    	Een teef kan vanaf de leeftijd van 6 maanden gesteriliseerd worden. In feite is het geen sterilisatie maar een castratie omdat bij de teef (net als bij de poes) de eierstokken verwijderd worden. Afhankelijk van de conditie van de baarmoeder wordt ook een deel of de gehele baarmoeder verwijderd. Het beste tijdstip voor deze operatie is 3 maanden na de eerste loopsheid. Op dat moment is de baarmoeder namelijk het minst actief en zal de operatie met minder bloedverlies verlopen en dus minder risico. De ingreep duurt gemiddeld 2 uur van het moment van toedienen van de narcose tot het hechten. Daarna moet de hond de roes even uitslapen maar kunt u haar aan het einde van de middag weer ophalen. Ze zal wat pijn kunnen hebben gedurende een paar dagen, daarom geven we haar pijnstillers mee. Omdat een hond onstuimig kan zijn, mag ze gedurende 10 dagen alleen aan de lijn uitgelaten worden en niet zwemmen. Dit laatste in verband met infectiegevaar. Om de risico’s van de operatie te verminderen leggen wij een waakinfuus aan en gebruiken we gasnarcose en zuurstof als narcose. Verder gebruiken we hartbewakingsapparatuur om de veiligheid van uw hond te waarborgen. Het blijft natuurlijk altijd een operatie en daarbij zal er altijd een klein risico zijn. Een teef niet steriliseren houdt echter grotere risico’s in. Zo is de kans op een (mogelijk fatale)baarmoederontsteking aanwezig. Door voor de 3e loopsheid te steriliseren verkleint u de risico op melkklier tumoren. Ook heeft de teef minder kans op suikerziekte na sterilisatie.													</p>
												</div>
											</div>
											<div class="u-gridCol4">
												<?php if ( has_post_thumbnail() ) { ?>
												    <?php the_post_thumbnail( 'large', array( 'class' => 'left',
												            'alt'   => trim( strip_tags( $wp_postmeta->_wp_attachment_image_alt ) )
												        ) ); ?>
												<?php } ?>
											</div>
								</div>
							</article>
						<?php endwhile; endif; ?>
				
		</div>
	</div>

<?php get_footer(); ?>
