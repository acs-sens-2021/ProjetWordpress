<?php
/**
 * Template Name:Page with Right Sidebar
 */
get_header(); ?>

<?php do_action( 'ultimate_ecommerce_shop_pageright_header' ); ?>

<div class="container">
    <main id="main" role="main" class="wrapper row">
		<div class="col-lg-8 col-md-8" class="main-content">
			<?php while ( have_posts() ) : the_post(); ?>                
                <h1><?php the_title();?></h1>
                <?php the_post_thumbnail(); ?>
                <div class="entry-content"><?php the_content();?></div>
                <?php
                    if ( comments_open() || '0' != get_comments_number() )
                	   comments_template();
                ?>
            <?php endwhile; // end of the loop. ?>            
        </div>
        <div id="sidebar" class="col-lg-4 col-md-4">
			<?php dynamic_sidebar('sidebar-2'); ?>
		</div>
        <div class="clearfix"></div>    
    </main>
</div>

<?php do_action( 'ultimate_ecommerce_shop_pageright_header' ); ?>

<?php get_footer(); ?>