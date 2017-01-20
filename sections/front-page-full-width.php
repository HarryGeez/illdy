<?php
/**
 *	The template for displaying about section in front page.
 *
 *	@package WordPress
 *	@subpackage illdy
 */
?>
<?php

$general_title = get_theme_mod( 'illdy_full_width_general_title' );
$general_entry = get_theme_mod( 'illdy_full_width_general_entry' );

?>

<?php if ( $general_title != '' || $general_entry != '' || is_active_sidebar( 'front-page-full-width-sidebar' ) ) { ?>

<section id="full-width" class="front-page-section">
	<?php if( $general_title || $general_entry ): ?>
		<div class="section-header">
			<div class="container">
				<div class="row">
					<?php if( $general_title ): ?>
						<div class="col-sm-12">
							<h3><?php echo illdy_sanitize_html( $general_title ); ?></h3>
						</div><!--/.col-sm-12-->
					<?php endif; ?>
					<?php if( $general_entry ): ?>
						<div class="col-sm-10 col-sm-offset-1">
							<p><?php echo illdy_sanitize_html( $general_entry ); ?></p>
						</div><!--/.col-sm-10.col-sm-offset-1-->
					<?php endif; ?>
				</div><!--/.row-->
			</div><!--/.container-->
		</div><!--/.section-header-->
	<?php endif; ?>
	<div class="section-content">
		<?php
		if( is_active_sidebar( 'front-page-full-width-sidebar' ) ){
				dynamic_sidebar( 'front-page-full-width-sidebar' );
		}
		?>
	</div><!--/.section-content-->
</section><!--/#about.front-page-section-->

<?php } ?>