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
        <?php $terms = get_terms("product-type"); ?>
        <?php if ($terms): ?>
          <ul class="product-type">
            <?php foreach($terms as $term): ?>
            <li class="product">
              <img src="<?php echo get_template_directory_uri() ?>/images/<?php echo $term->slug ?>.png" alt="<?php echo $term->slug ?>">
              <h3><?php echo $term->name ?></h3>
              <p><?php echo $term->description;?>
							  <a href="<?php echo get_term_link( $term ); ?>">See More...</a>
							</p>
            </li>
					<?php endforeach ?>
				  </ul>
     		<?php endif ?>

        <!-- "See Our Products" button -->
				<div class="our-products">
					<span>All our products are made fresh daily from locally-sourced ingredients. Our menu is updated frequently.
					<button type="button" class="">See Our Products</button> </span>
				</div>

        <!-- Blog Content (Our Latest News) -->
				<div class="news-container">
					<h2>our latest news</h2>
					<ul class="news">
					<?php
					$args = array( 'posts_per_page' => 4 );
					$myposts = get_posts( $args );
					foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
						<li class="news-item">
							<?php the_post_thumbnail(); ?>
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<!-- Functions called from template-tags.php -->
							<?php red_starter_posted_on(); ?>
							<?php red_starter_comment_count(); ?>
						</li>
					<?php endforeach;
					wp_reset_postdata();?>
					</ul>
			  </div>

<?php get_footer(); ?>
