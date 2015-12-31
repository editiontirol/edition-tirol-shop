<?php
/**
 * Welcome screen contribute template
 */
?>
<?php

?>
<div class="col two-col" style="overflow: hidden;">
	<div class="col boxed contribute">
		<h2><?php esc_html_e( 'Contribute to Edition Tirol Shopdesign', 'et_shop' ); ?></h2>
		<p><?php printf( esc_html__( 'Found a bug? Want to contribute a patch or create a new feature? %sGitHub is the place to go!%s Or would you like to translate %s into your language? %sGet involved on WordPress.org%s.', 'et_shop' ), '<a href="https://github.com/woothemes/et_shop">', '</a>', 'Edition Tirol Shopdesign', '<a href="https://translate.wordpress.org/projects/wp-themes/et_shop">', '</a>' ); ?></p>
	</div>

	<div class="col boxed suggest">
		<h2><?php esc_html_e( 'Suggest a feature', 'et_shop' ); ?></h2>
		<p><?php printf( esc_html__( 'Please suggest and vote on ideas at the %s%s Ideasboard%s. The most popular ideas will see prioritised development.', 'et_shop' ), '<a href="http://ideas.woothemes.com/forums/275029-et_shop">', 'Edition Tirol Shopdesign', '</a>' ); ?></p>
	</div>

	<div class="automattic">
		<p>
		<?php printf( esc_html__( 'An %s project', 'et_shop' ), '<a href="https://automattic.com/"><img src="' . esc_url( get_template_directory_uri() ) . '/inc/admin/welcome-screen/img/automattic.png' . '" alt="Automattic" /></a>' ); ?>
		</p>
	</div>
</div>