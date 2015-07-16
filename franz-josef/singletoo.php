<?php get_header(); ?>

	<div class="container main">
    	<div class="row">
        	<div class="main col-md-9">
            	<?php do_action( 'franz_singletoo_top' ); ?>
            	<?php
					if ( have_posts() ) {
						the_post();
						get_template_part( 'loop', 'db' );
					}
				?>
                <?php do_action( 'franz_singletoo_top' ); ?>
            </div>
            
            <?php get_sidebar(); ?>
            <?php include ('DB_newspaper.php');
			?>
        </div>
    </div>

<?php get_footer(); ?>