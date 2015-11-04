<?php
/**
 * The main template file.
 * COPIED FROM INDEX.PHP FOR A STARTER - NEED TO REMOVE SOME OF THIS?
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div id="content" class="site-content">

			  <section class="hero">
			    <span class="hero-text">baked to perfection.</span>
			  </section>

				<!-- Product categories -->
				<ul>
				<?php
				$args = array( 'posts_per_page' => 4 );
				$productTypes = get_posts( $args );
				foreach ( $productTypes as $productType ) : setup_postdata( $productType ); ?>
					<li>
						<?php the_post_thumbnail(); ?>
						<!-- productType -->
					</li>
				<?php endforeach;
				wp_reset_postdata();?>
				</ul>

        <!-- Blog Content (Our Latest News) -->
				<ul>
				<?php
				$args = array( 'posts_per_page' => 4 );
				$myposts = get_posts( $args );
				foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
					<li>
						<?php the_post_thumbnail(); ?>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						<!-- Functions called from template-tags.php -->
						<?php red_starter_posted_on(); ?>
						<?php red_starter_comment_count(); ?>
					</li>
				<?php endforeach;
				wp_reset_postdata();?>
				</ul>

<?php get_footer(); ?>
