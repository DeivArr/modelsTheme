<?php 

	get_header();

	while(have_posts()){
		the_post(); ?>
		<h2> PAGE</h2>
		<?php the_content(); ?>
		<hr>
	<?php }

	get_footer();
?>