<?php

/**
* If more than one page exists, return TRUE.
*/
function show_posts_nav() {
global $wp_query;
return ($wp_query->max_num_pages > 1);
}

function arnouv_customizer_head_styles() {
	$light_color = get_theme_mod( 'light_color' );
	$dark_color = get_theme_mod( 'dark_color' );

	if(empty($light_color)) $light_color = '#43b5fb';
	if(empty($dark_color)) $dark_color = '#1355a9';
	
	if ( $dark_color != '#ff0000' ) :
	?>
		<style type="text/css">
			/* Light color */
			a,
			.navbar-default .navbar-nav>li>a,
			.navbar>.container .navbar-brand,
			.navbar>.container-fluid .navbar-brand,
			.blog-title>h1
			{
				color: <?php echo $light_color; ?>;
			}

			.blog-description>p {
				background-color: <?php echo $light_color; ?>;
			}

			/* Dark color */
			h1, h2, h3, h4, h5, h6,
			a:hover,
			.navbar-default .navbar-nav>li>a:hover,
			.navbar-default .navbar-nav>.current_page_item>a,
			.navbar-default .navbar-nav>.current_page_item>a:hover,
			.blog-post-title a,
			.blog-post-title a:hover
			{
				color: <?php echo $dark_color; ?>;
			}
		</style>
	<?php
	endif;
}
add_action( 'wp_head', 'arnouv_customizer_head_styles' );



if ( is_admin() ){ // admin actions
  add_action( 'admin_menu', 'themeAdminMenu' );
  add_action( 'admin_init', 'themeRegisterSettings' );
} else {
  // non-admin enqueues, actions, and filters
}

function themeRegisterSettings( )
{
	register_setting( 'arnouv-theme-group', 'light_color' );	// Couleur claire
	register_setting( 'arnouv-theme-group', 'dark_color' );		// Couleur foncée
	
	register_setting( 'arnouv-theme-group', 'twitter_url' );	// URL Twitter
	register_setting( 'arnouv-theme-group', 'facebook_url' );	// URL Facebook
	register_setting( 'arnouv-theme-group', 'instagram_url' );	// URL Instagram
	register_setting( 'arnouv-theme-group', 'youtube_url' );	// URL YouTube

	register_setting( 'arnouv-theme-group', 'about_text' );		// Texte "A Propos" sidebar
}


function themeAdminMenu( )
{
	add_theme_page(
		__('Options du thème ArnOuv','arnouv-theme'),
		__('Options du thème','arnouv-theme'),
		'administrator',
		'arnouv-theme-page',
		'themeSettingsPage'
	);
}


function themeSettingsPage( )
{
?>
	<div class="wrap">
		<h1><?php _e('Options du thème ArnOuv', 'arnouv-theme'); ?></h1>
 
		<form method="post" action="options.php">
			<?php
				// cette fonction ajoute plusieurs champs cachés au formulaire
				// pour vous faciliter le travail.
				// elle prend en paramètre le nom du groupe d'options
				// que nous avons défini plus haut.
 
				settings_fields('arnouv-theme-group');
				do_settings_sections('arnouv-theme-group');
			?>

			<h2><?php _e('Couleurs du thème', 'arnouv-theme'); ?></h2>
			<table class="form-table">
				<tr valign="top">
					<th scope="row"><label for="light_color"><?php _e('Couleur claire du thème', 'arnouv-theme'); ?></label></th>
					<td><input type="text" id="light_color" name="light_color" size="50" value="<?php echo get_option('light_color'); ?>" /></td>
				</tr>
				<tr valign="top">
					<th scope="row"><label for="dark_color"><?php _e('Couleur foncée du thème', 'arnouv-theme'); ?></label></th>
					<td><input type="text" id="dark_color" name="dark_color" size="50" value="<?php echo get_option('dark_color'); ?>" /></td>
				</tr>
			</table>

			<h2><?php _e('Section "A Propos"', 'arnouv-theme'); ?></h2>
			<table class="form-table">
				<tr valign="top">
					<th scope="row"><label for="about_text"><?php _e('Texte de la section "A propos" de la sidebar', 'arnouv-theme'); ?></label></th>
					<td>
						<textarea id="about_text" name="about_text" ><?php echo htmlspecialchars(get_option('about_text')); ?></textarea>
					</td>
				</tr>
			</table>

			<h2><?php _e('Liens sociaux', 'arnouv-theme'); ?></h2>
			<p><em><?php _e('Laissez les champs vides si vous n\'avez pas de lien sur ces réseaux sociaux.', 'arnouv-theme'); ?></em></p>
			<table class="form-table">
				<tr valign="top">
					<th scope="row"><label for="twitter_url"><?php _e('Votre URL Twitter', 'arnouv-theme'); ?></label></th>
					<td><input type="text" id="twitter_url" name="twitter_url" size="50" value="<?php echo get_option('twitter_url'); ?>" /></td>
				</tr>
				<tr valign="top">
					<th scope="row"><label for="facebook_url"><?php _e('Votre URL Facebook', 'arnouv-theme'); ?></label></th>
					<td><input type="text" id="facebook_url" name="facebook_url" size="50" value="<?php echo get_option('facebook_url'); ?>" /></td>
				</tr>
				<tr valign="top">
					<th scope="row"><label for="instagram_url"><?php _e('Votre URL Instagram', 'arnouv-theme'); ?></label></th>
					<td><input type="text" id="instagram_url" name="instagram_url" size="50" value="<?php echo get_option('instagram_url'); ?>" /></td>
				</tr>
				<tr valign="top">
					<th scope="row"><label for="youtube_url"><?php _e('Votre URL YouTube', 'arnouv-theme'); ?></label></th>
					<td><input type="text" id="youtube_url" name="youtube_url" size="50" value="<?php echo get_option('youtube_url'); ?>" /></td>
				</tr>
			</table>
 
			<?php submit_button(); ?>
		</form>
	</div>
<?php
}

add_action('after_setup_theme', 'arnouv_theme_setup');
function arnouv_theme_setup(){
	load_theme_textdomain('arnouv-theme', get_template_directory() . '/languages');
}

?>