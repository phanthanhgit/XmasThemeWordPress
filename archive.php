<?php get_header(); ?>
<div class="pt-container">
	<main role="main">
		<section class="pt-row-cate">

			<h1 style="text-align: center; color: #74b5af; text-transform: uppercase;"><?php _e( '', 'html5blank' ); ?> Archives </h1>

			<?php get_template_part('loop-cate'); ?>

		</section>
	</main>
	<?php get_template_part('pagination'); ?>
</div>

<?php get_footer(); ?>