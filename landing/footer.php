<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper p-0" id="wrapper-footer">
	<footer class="site-footer" id="colophon">
		<div class="container">
			<div class="row social">
				<div class="col-12 text-center">
					<p class="big"><?php _e( 'Sígueme', 'understrap-master' ); ?></p>
					<ul class="m-0 list-unstyled list-inline">
						<li class="list-inline-item">
							<a href="https://www.facebook.com/LuCocinayAlma/" target="_blank" title="<?php _e( 'Lu Cocina Facebook', 'understrap-master' ); ?>">
								<img src='<?php echo get_site_url();?>/img/facebook_icon.svg' alt='<?php _e( 'Lu Cocina Facebook', 'understrap-master' ); ?>' class="img-responsive icon">
							</a>
						</li>
						<li class="list-inline-item">
							<a href="https://www.instagram.com/lucocinayalma" target="_blank" title="<?php _e( 'Lu Cocina Instagram', 'understrap-master' ); ?>">
								<img src='<?php echo get_site_url();?>/img/instagram_icon.svg' alt='<?php _e( 'Lu Cocina Instagram', 'understrap-master' ); ?>' class="img-responsive icon">
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="row bordered">
				<div class="col-12 col-sm-6 col-lg-6">
					<h3><a href="<?php echo get_site_url();?>/contacto" title="<?php _e( 'Consultoría', 'understrap-master' ); ?>"><?php _e( 'Consultoría', 'understrap-master' ); ?></a></h3>
					<h3><a href="<?php echo get_site_url();?>/contacto" title="<?php _e( 'Catering y Eventos', 'understrap-master' ); ?>"><?php _e( 'Catering y Eventos', 'understrap-master' ); ?></a></h3>
					<h3><a href="<?php echo get_site_url();?>/contacto" title="<?php _e( 'Formación', 'understrap-master' ); ?>"><?php _e( 'Formación', 'understrap-master' ); ?></a></h3>
					<h3><a href="<?php echo get_site_url();?>/contacto" title="<?php _e( 'Colaboración', 'understrap-master' ); ?>"><?php _e( 'Colaboración', 'understrap-master' ); ?></a></h3>
				</div>
				<div class="col-12 col-sm-6 col-lg-6">
					<h3><a href="<?php echo get_site_url();?>/contacto" title="<?php _e( 'Contacto', 'understrap-master' ); ?>"><?php _e( 'Contacto ', 'understrap-master' ); ?></a></h3>
					<div class="row mt-4 mt-sm-0">
						<div class="col-12 col-md-6 col-xl-4">
							<p><span class="uppercase"><?php _e( 'Email: ', 'understrap-master' ); ?></span><a href="mailto:info@binabar.com" target="_blank"><?php _e( 'info@binabar.com', 'understrap-master' ); ?></a></p>
						</div>	
						<div class="col-12 col-md-6 col-xl-8">
							<p><span class="uppercase"><?php _e( 'Ubicación: ', 'understrap-master' ); ?></span><a href="https://maps.app.goo.gl/5hSNTgJdJ64i3cX67" target="_blank"><?php _e( 'C/Jose Cádiz Salvatierra, 7', 'understrap-master' ); ?></a><span class="separate-left"><?php _e( 'Jerez De La Frontera', 'understrap-master' ); ?></span></p>
						</div>
					</div>
				</div>
			</div>
			<div class="row site-info">
				<div class="col-12 col-sm-10 col-lg-6">
					<ul class="m-0 list-unstyled list-inline float-md-left">
						<li class="list-inline-item"><a href="<?php echo get_site_url();?>/aviso-legal" title="<?php _e( 'Aviso legal', 'understrap-master' ); ?>"><?php _e( 'Aviso legal ', 'understrap-master' ); ?></a></li>
						<li class="list-inline-item"><a href="<?php echo get_site_url();?>/politica-de-privacidad" title="<?php _e( 'Política de privacidad', 'understrap-master' ); ?>"><?php _e( 'Política de privacidad', 'understrap-master' ); ?></a></li>
						<li class="list-inline-item"><a href="<?php echo get_site_url();?>/politica-de-cookies" title="<?php _e( 'Política de cookies', 'understrap-master' ); ?>"><?php _e( 'Política de cookies', 'understrap-master' ); ?></a></li>
					</ul>
				</div>
				<div class="col-12 col-sm-2 col-lg-6 text-right-sm">
					<p><?php _e( 'Juanlu Fernández ', 'understrap-master' ); ?><?php echo date("Y"); ?></p>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #wrapper-footer -->

<?php // Closing div#page from header.php. ?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>

