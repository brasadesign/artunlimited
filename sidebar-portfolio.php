<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package artunlimited
 */
?>
<div class="fixed-sidebar">
	<div id="menu-items">
		<div class="menu-items-content">
			<h2 class="fonte-branca"><?php echo __('[:pb]Navegue pelo conteúdo[:en]Browse content[:]'); ?></h2>
			<ul class="sections">
				<li>
					<a href="#slider-portfolio">
						<?php echo __('[:en]Photos[:pb]Fotos[:]');?>
					</a>
				</li>
				<li>
					<a href="#the-content">
						<?php echo __('[:en]About[:pb]Sobre[:]');?>
					</a>
				</li>

			</ul><!-- .sections -->
		</div>
	</div><!-- #menu-items -->

	<div id="linguas">
	    <h2 class="fonte-roxa"><?php echo __('[:en]Choose language[:pb]Escolha o Idioma[:]'); ?></h2>
	    <?php
	    	if (function_exists('dynamic_sidebar')) {
				dynamic_sidebar('Widget no menu');
			}
		?>
	</div><!-- #linguas -->

	<div class="outros-projetos">

			<h2 class="fonte-roxa"><?php echo __('[:en]Other projects:[:pb]Outros projetos:[:]'); ?></h2>
			<div class="setas-outros">
			<a id="prev3" href="#"><div class="seta-outros-anteriores">
			</div></a>
			<!-- .seta-outros-anteriores -->
			<a id="next3" href="#"><div class="seta-outros-posteriores">
			</div></a><!-- .seta-outros-posteriores -->
			</div><!-- setas-outros -->

		<div class="outros-slider">

			<div class="list_carousel">
				<ul id="foo3">
					<?php
					$esse_id = array(get_the_ID());
					$query = new WP_Query( array( 'post_type' => 'portfolio', 'orderby' => 'rand', 'post__not_in' => $esse_id ) );

					if ( $query->have_posts() ) : ?>
						   <?php while ( $query->have_posts() ) : $query->the_post(); ?>
					<li>
                    <a class="a-outro" href="<?php the_permalink(); ?>">
					<div class="cada-outro-projeto">

						<?php if ( has_post_thumbnail() ) {
						the_post_thumbnail( 'thumb-outros-projetos' );
						} else { ?>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/default-outros-<?php echo mt_rand(1,3); ?>.jpg" alt="<?php the_title(); ?>" />
						<?php } ?>

					</div><!-- .cada-outro-projeto -->
					<div class="titulo-outros-projetos">
					 <?php the_title(); ?><br />
								<?php
								// Pega os dados e salva em variáveis
								$metaportfolio_2alinhatitulo = get_post_meta($post->ID,'metaportfolio_2alinhatitulo',TRUE);
								?>
								<?php if (empty($metaportfolio_2alinhatitulo)) {
								} else { ?>
									  <?php echo $metaportfolio_2alinhatitulo; ?>
								<?php }	?>
					<span class="data-cada-outro-projeto"><?php the_time( 'Y' ); ?></span>
					</div><!-- .titulo-outros-projetos -->
                    </a><!-- .a-outro  -->
					</li>
				   <?php endwhile; wp_reset_postdata(); ?>
				   <!-- show pagination here -->
					<?php else : ?>
						   <!-- show 404 error here -->
					<?php endif; ?>
				</ul>

				<?php wp_reset_query(); // reset query ?>
				<div class="clearfix"></div>

			</div> <!-- .list_carrousel -->


		</div><!-- .outros-slider -->

	</div><!-- .outros-projetos -->

</div>
