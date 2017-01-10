<div class="col-sm-3 col-sm-offset-1">
	<div class="sidebar-module sidebar-module-inset">
	<h4><?php _e('À propos', 'arnouv-theme'); ?></h4>
	<p><?php if(get_option('about_text')): ?>
			<?php echo htmlspecialchars(get_option('about_text'));?>
		<?php else: ?>
			<?php _e('Huhu... Aucune information n\'a été renseignée pour cette section...', 'arnouv-theme'); ?>
		<?php endif; ?></p>
	</div>
	<div class="sidebar-module">
		<h4><?php _e('Archives', 'arnouv-theme'); ?></h4>
		<ol class="list-unstyled">
			<?php wp_get_archives( 'type=monthly' ); ?>
		</ol>
	  </div>
	  <div class="sidebar-module">
		<h4><?php _e('Aussi sur...', 'arnouv-theme'); ?></h4>
		<ol class="list-unstyled">
			<?php if(get_option('facebook_url')): ?>
				<li><a href="<?php echo htmlspecialchars(get_option('facebook_url')); ?>">Facebook</a></li>
			<?php endif; ?>
			<?php if(get_option('instagram_url')): ?>
				<li><a href="<?php echo htmlspecialchars(get_option('instagram_url')); ?>">Instagram</a></li>
			<?php endif; ?>
			<?php if(get_option('youtube_url')): ?>
				<li><a href="<?php echo htmlspecialchars(get_option('youtube_url')); ?>">YouTube</a></li>
			<?php endif; ?>
			<?php if(get_option('twitter_url')): ?>
				<li><a href="<?php echo htmlspecialchars(get_option('twitter_url')); ?>">Twitter</a></li>
			<?php endif; ?>
		</ol>
	  </div>
</div>
</div>