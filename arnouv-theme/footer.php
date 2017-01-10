	</div>
	<footer class="container">
		<p class="text-center"><small>&copy; <?php echo date('Y'); ?> <?php echo get_bloginfo( 'name' ); ?> &ndash; <?php _e('Thème développé par', 'arnouv-theme'); ?> <a href="http://www.arnaudouvrier.fr/">Arnaud Ouvrier</a></small></p>
	</footer>


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
	<?php wp_footer(); ?> 
</body>
</html>