<?php
/**
 * The Template for displaying all single posts.
 * @package artunlimited
 */

get_header( 'portfolio' ); ?>

	<div id="primary" class="content-single-portfolio">
		<div id="content-interno" class="site-content" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

        
	<div class="esquerda-single-portfolio">

		<header class="entry-header">
			<h1 class="entry-title-interno"><?php the_title(); ?></h1>
			
			    <?php
				// Pega os dados e salva em vari�veis
                $metabrasa_subtitulo = get_post_meta($post->ID,'metabrasa_subtitulo',TRUE);
				?>
				<?php if (empty($metabrasa_subtitulo)) {
                } else { ?>
				<h3 class="entry-sub-title-interno"><?php echo $metabrasa_subtitulo; ?></h3>
				<?php }	?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'artunlimited' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
				
				<?php // artunlimited_content_nav( 'nav-below' ); ?>
				<?php endwhile; // end of the loop. ?>
				
				<?php wp_reset_query(); // reset query ?>
	</div>
			<!-- .esquerda-single-portfolio -->
			<div class="direita-single-portfolio">
			<?php get_sidebar( 'portfolio' ); ?>
			</div><!-- #direita-single-portfolio -->
			
		</div><!-- #content -->
		
			            <div class="clearfix">
						</div>

<?php get_footer( 'portfolio' ); ?>

	</div><!-- #primary -->
	
