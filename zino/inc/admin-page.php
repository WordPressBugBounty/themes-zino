<?php
/**
 * Admin page for Zino theme.
 *
 * @package Zino
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

add_action( 'admin_menu', function() {
	add_theme_page(
		'Zino',
		'About Zino',
		'manage_options',
		'zino',
		'zino_admin_page'
	);
} );

add_action( 'admin_enqueue_scripts', function() {
	if ( ! isset( $_GET['page'] ) || 'zino' !== sanitize_text_field( wp_unslash( $_GET['page'] ) ) ) {
		return;
	}

	wp_enqueue_style( 'zino-admin-page', ZINO_URI . '/assets/css/admin-page.css', array(), ZINO_VERSION );
} );

function zino_admin_page() {
	$upgrade_url = 'https://zinowp.com/pricing/';
	$demo_url    = 'https://demo.zinowp.com/zino/';

	$features = array(
		array( 'label' => 'No jQuery', 'free' => true, 'pro' => true ),
		array( 'label' => 'Page Speed Optimized', 'free' => true, 'pro' => true ),
		array( 'label' => 'Search Engine Optimized', 'free' => true, 'pro' => true ),
		array( 'label' => 'Full Site Editing', 'free' => true, 'pro' => true ),
		array( 'label' => '6+ Premium Patterns', 'free' => false, 'pro' => true ),
		array( 'label' => '8+ Color Variations', 'free' => false, 'pro' => true ),
		array( 'label' => 'Dynamic Copyright Date', 'free' => false, 'pro' => true ),
		array( 'label' => 'Full WooCommerce Support', 'free' => false, 'pro' => true ),
		array( 'label' => 'Discount in Zino Care plan', 'free' => false, 'pro' => true ),
		array( 'label' => 'Premium Support', 'free' => false, 'pro' => true ),
	);
	?>
	<div class="wrap">
		<h1><?php echo 'Welcome to Zino' . ' - ' . esc_html( ZINO_VERSION ); ?></h1>

		<div class="zino-free-vs-pro">
			<table class="widefat striped free-vs-pro-table">
				<thead>
					<tr>
						<th>Features</th>
						<th>Free</th>
						<th>Pro</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ( $features as $feature ) : ?>
						<tr>
							<td><?php echo esc_html( $feature['label'] ); ?></td>
							<td>
								<?php if ( $feature['free'] ) : ?>
									<span class="dashicons dashicons-yes" aria-label="Included"></span>
								<?php else : ?>
									<span class="dashicons dashicons-no" aria-label="Not included"></span>
								<?php endif; ?>
							</td>
							<td>
								<?php if ( $feature['pro'] ) : ?>
									<span class="dashicons dashicons-yes" aria-label="Included"></span>
								<?php else : ?>
									<span class="dashicons dashicons-no" aria-label="Not included"></span>
								<?php endif; ?>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>

			<div class="buttons">
				<a href="<?php echo esc_url( $demo_url ); ?>" class="button" target="_blank" rel="noopener">
					View Demo
				</a>
				<a href="<?php echo esc_url( $upgrade_url ); ?>" class="button button-primary" target="_blank" rel="noopener">
					Upgrade to Pro
				</a>
			</div>
		</div>
	</div>
	<?php
}
