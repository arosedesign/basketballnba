<?php
//Register scripts and styles for admin pages
function stm_startup_styles()
{
	wp_enqueue_style('stm-startup_css', get_template_directory_uri() . '/admin/includes/style_registration.css', null, REVIJA_THEME_VERSION, 'all');
	
	$check_token = stm_check_token();
	if (!$check_token) {
	wp_enqueue_style('stm-registration_no_css', get_template_directory_uri() . '/admin/includes/style_registration_no.css', null, REVIJA_THEME_VERSION, 'all');
	}
	
}

add_action('admin_enqueue_scripts', 'stm_startup_styles');

//Register Startup page in admin menu
function stm_register_startup_screen()
{
	$theme = stm_get_theme_info();
	$theme_name = $theme['name'];
	$theme_name_sanitized = 'revija_activation';
	
	// Work around for theme check.
	$stm_admin_menu_page_creation_method = 'add_theme_page';
	
	/*Item Registration*/
	$stm_admin_menu_page_creation_method(
		'Revija',
		'Revija',
		'edit_theme_options',
		$theme_name_sanitized,
		'stm_theme_admin_page_functions'
	);

}

add_action('admin_menu', 'stm_register_startup_screen', 10);

function stm_startup_templates($path)
{
	$path = 'admin/includes/' . $path . '.php';
	
	$located = locate_template($path);
	
	if ($located) {
		load_template($located);
	}
}

//Startup screen menu page welcome
function stm_theme_admin_page_functions()
{
	stm_startup_templates('startup');
}



//Admin tabs
function stm_get_admin_tabs($screen = 'revija_activation')
{
	$theme = stm_get_theme_info();
	$theme_name = $theme['name'];
	$theme_name_sanitized = 'revija_activation';
	if (empty($screen)) {
		$screen = $theme_name_sanitized;
	}
	?>
	<div class="clearfix">
		<div class="stm_theme_info">
			<div class="stm_theme_version"><?php echo substr($theme['v'], 0, 3); ?></div>
		</div>
		<div class="stm-about-text-wrap">
			<h1><?php printf(esc_html__('Welcome to %s', 'revija'), $theme_name); ?></h1>
			<div class="stm-about-text about-text">
				<p class="about-description">
				<?php printf( __('We would like to thank you for purchasing Revija WordPress + eCommerce Theme! We are very pleased you have chosen Revija WordPress for your website, you will be never disappointed! Before you get started, please be sure to always check out this documentation. We outline all kinds of good information, and provide you with all the details you need to use Revija WordPress Theme. Revija WordPress can only be used with WordPress and we assume that you already have WordPress installed and ready to go.', 'revija') ); ?>
			</p>
			<p class="about-description">
				<?php printf( __('If you are unable to find your answer here in our documentation, we encourage you to contact us through <a href="%s" target="_blank">support page</a> or themeforest item support page with your site CPanel (or FTP) and WordPress admin details. We\'re very happy to help you and you will get reply from us more faster than you expected.', 'revija'), 'https://velikorodnov.ticksy.com') ?>
			</p>
			</div>
		</div>
	</div>
	<h2 class="nav-tab-wrapper">
		<a href="<?php echo ('revija_activation' === $screen) ? '#' : esc_url_raw(admin_url('admin.php?page=' . $theme_name_sanitized)); ?>"
		   class="<?php echo ('revija_activation' === $screen) ? 'nav-tab-active' : ''; ?> nav-tab"><?php esc_attr_e('Product Registration', 'revija'); ?></a>
		<a href="<?php echo esc_url_raw(admin_url('admin.php?page=revija')); ?>" class="nav-tab" ><?php esc_attr_e('Revija Options', 'revija'); ?></a>
	</h2>
	<?php
}