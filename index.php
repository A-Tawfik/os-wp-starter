<?php
/**
 * The main template file
 */

get_header(); ?>

	<div id="root" class="site-content">

		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ): the_post(); ?>

				<article <?php post_class(); ?>>

					<h1 class="entry-title"><?php the_title(); ?></h1>

					<div class="entry-content">
						<?php the_content(); ?>
					</div>

				</article>

			<?php endwhile; ?>
		<?php endif; ?>

		<hr>

	</div>

<?php get_footer();
