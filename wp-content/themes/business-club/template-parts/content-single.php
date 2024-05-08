<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Business_Club
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post-header">
		<div class="container">
			<header class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

				<div class="entry-meta">
					<?php business_club_posted_on(); ?>
				</div><!-- .entry-meta -->
			</header><!-- .entry-header -->
		</div>
	</div>
	
	<div class="post-content">
		<div class="container">
			<div class="post-img">
				<?php
				  /**
				   * Hook - business_club_single_image.
				   *
				   * @hooked business_club_add_image_in_single_display - 10
				   */
				  do_action( 'business_club_single_image' );
				?>
			</div>
			<div class="entry-content">
				<?php the_content(); ?>
				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'business-club' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->
		</div>
	</div>
</article><!-- #post-## -->

