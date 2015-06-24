<?php
/*
Template Name: Katten
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
												    <span><a name="1" href="#1"><h4>>&nbsp;Vaccinatie</h4></a></span>
												</div>
												<div class="accContent fiscaal">
												    <p>	Enten is tegenwoordig maatwerk. De entingen zijn beter geworden waardoor minder vaak ingeënt moet worden. Regelmatig bekijken wij of het ent-schema aangepast moet worden. Op dit moment geldt voor katten het volgende ent-schema:

														&nbsp;
														<table border="1" cellspacing="0" cellpadding="0">
														<tbody>
														<tr>
														<td align="center">leeftijd</td>
														<td align="center"> 9 weken</td>
														<td align="center"> 12 weken</td>
														<td align="center"> 1 jaar</td>
														<td align="center"> 2 jaar</td>
														<td align="center"> 3 jaar</td>
														<td align="center"> 4 jaar</td>
														<td align="center"> enz</td>
														</tr>
														<tr>
														<td align="center">katten/niesziekte</td>
														<td align="center"> +</td>
														<td align="center"> +</td>
														<td align="center"> +</td>
														<td align="center"></td>
														<td align="center"></td>
														<td align="center">+</td>
														<td align="center"></td>
														</tr>
														<tr>
														<td align="center">niesziekte</td>
														<td align="center"></td>
														<td align="center"></td>
														<td align="center"></td>
														<td align="center"> +</td>
														<td align="center">+</td>
														<td align="center"></td>
														<td align="center"></td>
														</tr>
														<tr>
														<td align="center">bordetella</td>
														<td align="center"></td>
														<td align="center"> pension</td>
														<td align="center"> pension</td>
														<td align="center"> pension</td>
														<td align="center"> pension</td>
														<td align="center"> pension</td>
														<td align="center"></td>
														</tr>
														</tbody>
														</table>
													</p>
												</div>
												<div class="accordion">
												    <span><a name="2" href="#2"><h4>>&nbsp;Ontwormen</h4></a></span>
												</div>
												<div class="accContent financieel">
												    <p>	vanaf de leeftijd van 4 weken moet een kitten in de eerste periode zeer regelmatig ontwormd worden. Hoe vaak hangt af van het product dat u gebruikt. Wij bekijken met u wat voor uw situatie het beste zou zijn.
												</div>

												<div class="accordion">
												    <span><a name="3" href="#3"><h4>>&nbsp;Castratie kater</h4></a></span>
												</div>
												<div class="accContent salaris">
												    <p>	een kater kan vanaf de leeftijd van 4 maanden gecastreerd worden. Vroeger dachten we dat voor een castratie tenminste gewacht moest worden tot hij 6 maanden oud was. Inmiddels heeft onderzoek uitgewezen dat dit niet waar is. De narcosemiddelen die tegenwoordig worden gebruikt zijn veiliger dan oude middelen. Vaak herstellen de katers juist sneller als ze jong gecastreerd worden. Van belang is dat u niet wacht tot hij zo oud is dat hij in huis gaat sproeien want dan loopt u de kans dat de castratie niet meer helpt tegen onzindelijkheid. Is een kater inmiddels geslachtsrijp, dan kan hij na de castratie nog zeker 3 tot 6 weken een poes succesvol dekken. Dit is van belang als u een poes in huis heeft die niet gesteriliseerd is.
													</p>
												</div>
												<div class="accordion">
												    <span><a name="4" href="#4"><h4>>&nbsp;Steriliseren poes</h4></a></span>
												</div>
												<div class="accContent salaris">
												    <p>	vanaf de leeftijd van 6 maanden moet u er rekening mee houden dat uw poes krols en dus zwanger kan worden. We steriliseren poezen vanaf de leeftijd van 5 maanden. Hiervoor worden ze
														's middags tussen 11.00 en 13:00 uur opgenomen. U kunt haar dan tegen het einde van de middag of 's avonds weer ophalen. Ze zal dan nog een beetje suf zijn maar de volgende ochtend voelt ze zich meestal weer redelijk goed. Na 10 dagen worden de hechtingen verwijderd.
													</p>
												</div>
												<div class="accordion">
												    <span><a name="5" href="#5"><h4>>&nbsp;Poezenpil</h4></a></span>
												</div>
												<div class="accContent salaris">
												    <p>	soms willen eigenaren de poes eerst een tijd de poezepil geven omdat ze niet zeker weten of ze nog een nestje willen. Het is belangrijk te weten dat dit nooit langere tijd mag worden gegeven. Er zijn vele bijwerkingen bekend, zoals baarmoederontstekingen, melkkliergezwellen, etc. Ook de kans op suikerziekte neemt toe bij het gebruik van de poezenpil. En geef nooit de poezenpil aan een poes die krols is of mogelijk zwanger is, dit kan complicaties geven
													</p>
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
