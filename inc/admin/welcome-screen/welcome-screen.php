<?php
/**
 * Welcome Screen Class
 * Sets up the welcome screen page, hides the menu item
 * and contains the screen content.
 */
class ET_Shop_Welcome {

	/**
	 * Constructor
	 * Sets up the welcome screen
	 */
	public function __construct() {

		add_action( 'admin_menu', array( $this, 'et_shop_welcome_register_menu' ) );
		add_action( 'load-themes.php', array( $this, 'et_shop_activation_admin_notice' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'et_shop_welcome_style' ) );

		add_action( 'et_shop_welcome', array( $this, 'et_shop_welcome_intro' ), 				10 );
		add_action( 'et_shop_welcome', array( $this, 'et_shop_welcome_enhance' ), 			20 );
		add_action( 'et_shop_welcome', array( $this, 'et_shop_welcome_contribute' ), 			30 );

	} // end constructor

	/**
	 * Adds an admin notice upon successful activation.
	 * @since 1.0.3
	 */
	public function et_shop_activation_admin_notice() {
		global $pagenow;

		if ( is_admin() && 'themes.php' == $pagenow && isset( $_GET['activated'] ) ) { // input var okay
			add_action( 'admin_notices', array( $this, 'et_shop_welcome_admin_notice' ), 99 );
		}
	}

	/**
	 * Display an admin notice linking to the welcome screen
	 * @since 1.0.3
	 */
	public function et_shop_welcome_admin_notice() {
		?>
			<div class="updated notice is-dismissible">
				<p><?php echo sprintf( esc_html__( 'Thanks for choosing Edition Tirol Shopdesign! You can read hints and tips on how get the most out of your new theme on the %swelcome screen%s.', 'et_shop' ), '<a href="' . esc_url( admin_url( 'themes.php?page=et_shop-welcome' ) ) . '">', '</a>' ); ?></p>
				<p><a href="<?php echo esc_url( admin_url( 'themes.php?page=et_shop-welcome' ) ); ?>" class="button" style="text-decoration: none;"><?php _e( 'Get started with Edition Tirol Shopdesign', 'et_shop' ); ?></a></p>
			</div>
		<?php
	}

	/**
	 * Load welcome screen css
	 * @return void
	 * @since  1.4.4
	 */
	public function et_shop_welcome_style( $hook_suffix ) {
		global $et_shop_version;

		if ( 'appearance_page_et_shop-welcome' == $hook_suffix ) {
			wp_enqueue_style( 'et_shop-welcome-screen', get_template_directory_uri() . '/inc/admin/welcome-screen/css/welcome.css', $et_shop_version );
			wp_enqueue_style( 'thickbox' );
			wp_enqueue_script( 'thickbox' );
		}
	}

	/**
	 * Creates the dashboard page
	 * @see  add_theme_page()
	 * @since 1.0.0
	 */
	public function et_shop_welcome_register_menu() {
		add_theme_page( 'Edition Tirol Shopdesign', 'Edition Tirol Shopdesign', 'activate_plugins', 'et_shop-welcome', array( $this, 'et_shop_welcome_screen' ) );
	}

	/**
	 * The welcome screen
	 * @since 1.0.0
	 */
	public function et_shop_welcome_screen() {
		require_once( ABSPATH . 'wp-load.php' );
		require_once( ABSPATH . 'wp-admin/admin.php' );
		require_once( ABSPATH . 'wp-admin/admin-header.php' );
		?>
		<div class="wrap about-wrap">

			<?php
			/**
			 * @hooked et_shop_welcome_intro - 10
			 * @hooked et_shop_welcome_enhance - 20
			 * @hooked et_shop_welcome_contribute - 30
			 */
			do_action( 'et_shop_welcome' ); ?>

		</div>
		<?php
	}

	/**
	 * Welcome screen intro
	 * @since 1.0.0
	 */
	public function et_shop_welcome_intro() {
		require_once( get_template_directory() . '/inc/admin/welcome-screen/sections/intro.php' );
	}


	/**
	 * Welcome screen enhance section
	 * @since 1.5.2
	 */
	public function et_shop_welcome_enhance() {
		require_once( get_template_directory() . '/inc/admin/welcome-screen/sections/enhance.php' );
	}

	/**
	 * Welcome screen contribute section
	 * @since 1.5.2
	 */
	public function et_shop_welcome_contribute() {
		require_once( get_template_directory() . '/inc/admin/welcome-screen/sections/contribute.php' );
	}
}

$GLOBALS['ET_Shop_Welcome'] = new ET_Shop_Welcome();
