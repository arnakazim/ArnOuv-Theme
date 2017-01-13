<div class="col-sm-3 col-sm-offset-1">
	<div class="sidebar-module sidebar-module-inset">
	<h4><?php _e('About', 'arnouv-theme'); ?></h4>
	<?php $about_text = get_theme_mod( 'about_text' ); if(empty($about_text)) $about_text = __('Oups... No information have been given for this section...', 'arnouv-theme'); ?>
	<p><?php echo $about_text;?></p>
	</div>
	<div class="sidebar-module">
		<h4><?php _e('Archives', 'arnouv-theme'); ?></h4>
		<ol class="list-unstyled">
			<?php wp_get_archives( 'type=monthly' ); ?>
		</ol>
	  </div>
	  <?php if(get_theme_mod('facebook_url') || get_theme_mod('instagram_url') || get_theme_mod('twitter_url') || get_theme_mod('youtube_url')): ?>
	  <div class="sidebar-module">
		<h4><?php _e('Also on...', 'arnouv-theme'); ?></h4>
		<ol class="list-unstyled">
			<?php if(get_theme_mod('facebook_url')): ?>
				<li><a href="<?php echo htmlspecialchars(get_theme_mod('facebook_url')); ?>">Facebook</a></li>
			<?php endif; ?>
			<?php if(get_theme_mod('instagram_url')): ?>
				<li><a href="<?php echo htmlspecialchars(get_theme_mod('instagram_url')); ?>">Instagram</a></li>
			<?php endif; ?>
			<?php if(get_theme_mod('youtube_url')): ?>
				<li><a href="<?php echo htmlspecialchars(get_theme_mod('youtube_url')); ?>">YouTube</a></li>
			<?php endif; ?>
			<?php if(get_theme_mod('twitter_url')): ?>
				<li><a href="<?php echo htmlspecialchars(get_theme_mod('twitter_url')); ?>">Twitter</a></li>
			<?php endif; ?>
		</ol>
	  </div>
	  <?php endif; ?>
</div>
</div>