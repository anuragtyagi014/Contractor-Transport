<?php
/**
 * Theme functions related to structure.
 *
 * @package Business_Club
 */

if ( ! function_exists( 'business_club_doctype' ) ) :

	/**
	 * Doctype Declaration.
	 *
	 * @since 1.0.0
	 */
	function business_club_doctype() {
		?><!DOCTYPE html><html <?php language_attributes(); ?>><?php
	}
endif;

add_action( 'business_club_action_doctype', 'business_club_doctype', 10 );

if ( ! function_exists( 'business_club_head' ) ) :

	/**
	 * Header Codes.
	 *
	 * @since 1.0.0
	 */
	function business_club_head() {
		?>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<?php if ( is_singular() && pings_open() ) : ?>
			<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<?php endif;
	}
endif;

add_action( 'business_club_action_head', 'business_club_head', 10 );

if ( ! function_exists( 'business_club_page_start' ) ) :

	/**
	 * Page Start.
	 *
	 * @since 1.0.0
	 */
	function business_club_page_start() {
		?><div id="page" class="hfeed site"><?php
	}
endif;

add_action( 'business_club_action_before', 'business_club_page_start' );

if ( ! function_exists( 'business_club_page_end' ) ) :

	/**
	 * Page End.
	 *
	 * @since 1.0.0
	 */
	function business_club_page_end() {
		?></div><!-- #page --><?php
	}
endif;

add_action( 'business_club_action_after', 'business_club_page_end' );

if ( ! function_exists( 'business_club_content_start' ) ) :

	/**
	 * Content Start.
	 *
	 * @since 1.0.0
	 */
	function business_club_content_start() { ?>
		<div id="content" class="site-content">
		<?php  
		if( !is_page_template('elementor_header_footer') ){ ?>
		    <div class="container">
		    <div class="inner-wrapper">
		    <?php 
		}
	}
endif;

add_action( 'business_club_action_before_content', 'business_club_content_start' );

if ( ! function_exists( 'business_club_content_end' ) ) :

	/**
	 * Content End.
	 *
	 * @since 1.0.0
	 */
	function business_club_content_end() {
		if( !is_page_template('elementor_header_footer') ){ ?>
		    </div><!-- .inner-wrapper -->
		    </div><!-- .container -->
		    <?php 
		} ?>
		</div><!-- #content -->
		<?php
	}
endif;

add_action( 'business_club_action_after_content', 'business_club_content_end' );

if ( ! function_exists( 'business_club_header_start' ) ) :

	/**
	 * Header Start.
	 *
	 * @since 1.0.0
	 */
	function business_club_header_start() {
		?><header id="masthead" class="site-header" role="banner"><div class="container"><?php
	}
endif;

add_action( 'business_club_action_before_header', 'business_club_header_start' );

if ( ! function_exists( 'business_club_header_end' ) ) :

	/**
	 * Header End.
	 *
	 * @since 1.0.0
	 */
	function business_club_header_end() {
		?></div><!-- .container --></header><!-- #masthead --><?php
	}
endif;

add_action( 'business_club_action_after_header', 'business_club_header_end' );

if ( ! function_exists( 'business_club_footer_start' ) ) :

	/**
	 * Footer Start.
	 *
	 * @since 1.0.0
	 */
	function business_club_footer_start() {
		$footer_status = apply_filters( 'business_club_filter_footer_status', true );

		if ( true !== $footer_status ) {
			return;
		}

		?><footer id="colophon" class="site-footer" role="contentinfo"><div class="container"><?php
	}
endif;

add_action( 'business_club_action_before_footer', 'business_club_footer_start' );

if ( ! function_exists( 'business_club_footer_end' ) ) :

	/**
	 * Footer End.
	 *
	 * @since 1.0.0
	 */
	function business_club_footer_end() {
		$footer_status = apply_filters( 'business_club_filter_footer_status', true );

		if ( true !== $footer_status ) {
			return;
		}

		?></div><!-- .container --></footer><!-- #colophon --><?php
	}
endif;

add_action( 'business_club_action_after_footer', 'business_club_footer_end' );
