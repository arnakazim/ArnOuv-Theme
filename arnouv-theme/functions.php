<?php

/**
* If more than one page exists, return TRUE.
*/
function show_posts_nav() {
global $wp_query;
return ($wp_query->max_num_pages > 1);
}



if ( is_admin() ){ // admin actions
  add_action( 'admin_menu', 'themeAdminMenu' );
  add_action( 'admin_init', 'themeRegisterSettings' );
} else {
  // non-admin enqueues, actions, and filters
}

function themeRegisterSettings( )
{
	register_setting( 'sboptions-group', 'twitter_url' );	// URL Twitter
	register_setting( 'sboptions-group', 'facebook_url' );	// URL Facebook
	register_setting( 'sboptions-group', 'instagram_url' );	// URL Instagram
	register_setting( 'sboptions-group', 'youtube_url' );	// URL YouTube

	register_setting( 'sboptions-group', 'about_text' );	// Texte "A Propos" sidebar
}


function themeAdminMenu( )
{
	add_theme_page(
		'Options du thème Savoie Bien ?',
		'Options du thème',
		'administrator',
		'sboptions-page',
		'themeSettingsPage'
	);
}


function themeSettingsPage( )
{
?>
	<div class="wrap">
		<h1>Options du thème Savoie Bien ?</h1>
 
		<form method="post" action="options.php">
			<?php
				// cette fonction ajoute plusieurs champs cachés au formulaire
				// pour vous faciliter le travail.
				// elle prend en paramètre le nom du groupe d'options
				// que nous avons défini plus haut.
 
				settings_fields('sboptions-group');
				do_settings_sections('sboptions-group');
			?>

			<h2>Section "A Propos"</h2>
			<table class="form-table">
				<tr valign="top">
					<th scope="row"><label for="about_text">Texte de la section "A propos" de la sidebar</label></th>
					<td>
						<textarea id="about_text" name="about_text" ><?php echo htmlspecialchars(get_option('about_text')); ?></textarea>
					</td>
				</tr>
			</table>

			<h2>Liens sociaux</h2>
			<p><em>Laissez les champs vides si vous n'avez pas de lien sur ces réseaux sociaux.</em></p>
			<table class="form-table">
				<tr valign="top">
					<th scope="row"><label for="twitter_url">Votre URL Twitter</label></th>
					<td><input type="text" id="twitter_url" name="twitter_url" size="50" value="<?php echo get_option('twitter_url'); ?>" /></td>
				</tr>
				<tr valign="top">
					<th scope="row"><label for="facebook_url">Votre URL Facebook</label></th>
					<td><input type="text" id="facebook_url" name="facebook_url" size="50" value="<?php echo get_option('facebook_url'); ?>" /></td>
				</tr>
				<tr valign="top">
					<th scope="row"><label for="instagram_url">Votre URL Instagram</label></th>
					<td><input type="text" id="instagram_url" name="instagram_url" size="50" value="<?php echo get_option('instagram_url'); ?>" /></td>
				</tr>
				<tr valign="top">
					<th scope="row"><label for="youtube_url">Votre URL YouTube</label></th>
					<td><input type="text" id="youtube_url" name="youtube_url" size="50" value="<?php echo get_option('youtube_url'); ?>" /></td>
				</tr>
			</table>
 
			<?php submit_button(); ?>
		</form>
	</div>
<?php
}

?>