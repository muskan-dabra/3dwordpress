<?php
/**
 * Front page template — 3D consulting single-page design
 */

// Enqueue assets for this template before header output so they appear in head.
function twentytwentyfive_frontpage_enqueue_3d_assets() {
	$css = get_stylesheet_directory_uri() . '/assets/css/3d-home.css';
	$js  = get_stylesheet_directory_uri() . '/assets/js/3d-home.js';

	wp_enqueue_style( 'twentyfive-3d-home', $css, array( 'twentytwentyfive-style' ), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_script( 'twentyfive-3d-home', $js, array(), wp_get_theme()->get( 'Version' ), true );
}
add_action( 'wp_enqueue_scripts', 'twentytwentyfive_frontpage_enqueue_3d_assets' );

get_header();

get_template_part( 'template-parts/header', '3d' );
?>

<main class="site-main-3d">
	<section class="about-3d">
		<div class="container">
			<h2>How we help</h2>
			<p>We run short, focused consulting engagements to clarify goals, align stakeholders, and produce actionable roadmaps.</p>
			<ul class="benefits">
				<li>Discovery & strategy</li>
				<li>Design & prototyping</li>
				<li>Implementation planning</li>
			</ul>
		</div>
	</section>

	<section class="banner-3d">
		<div class="container">
			<div class="banner-inner">
				<div class="banner-content">
					<h2>Immersive Consulting</h2>
					<p>Visualize ideas in 3D to align stakeholders faster.</p>
					<a class="btn" href="#contact">Schedule a demo</a>
				</div>
				<div class="banner-scene" id="bannerScene" aria-hidden="true">
					<div class="layer" data-depth="0.18"></div>
					<div class="layer" data-depth="0.12"></div>
					<div class="layer" data-depth="0.06"></div>
					<div class="layer foreground" data-depth="0.02">3D</div>
				</div>
			</div>
		</div>
	</section>

	<section class="services-3d">
		<div class="container">
			<h2>Approach</h2>
			<div class="cards">
				<div class="card">Workshop</div>
				<div class="card">Prototype</div>
				<div class="card">Roadmap</div>
			</div>
		</div>
	</section>

	<section class="testimonials-3d">
		<div class="container">
			<h2>Clients</h2>
			<p>Small teams, big outcomes — short case studies and quotes go here.</p>
		</div>
	</section>

<?php get_template_part( 'template-parts/footer', '3d' ); ?>

<?php get_footer(); ?>
