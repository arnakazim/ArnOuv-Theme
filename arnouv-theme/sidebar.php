<div class="col-sm-3 col-sm-offset-1">
	<div class="sidebar-module sidebar-module-inset">
	<h4>À propos</h4>
	<p><?php if(get_option('about_text')): ?>
			<?php echo htmlspecialchars(get_option('about_text'));?>
		<?php else: ?>
			Huhu... Aucune information n'a été renseignée pour cette section...
		<?php endif; ?></p>
	</div>
	<div class="sidebar-module">
		<h4>Archives</h4>
		<ol class="list-unstyled">
			<?php wp_get_archives( 'type=monthly' ); ?>
		</ol>
	  </div>
	  <div class="sidebar-module">
		<h4>Aussi sur...</h4>
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