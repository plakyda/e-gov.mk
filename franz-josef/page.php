<?php //get_header(); ?>

	<div class="container main">
    	<div class="row">
        	<div class="main col-md-9">
            	<?php do_action( 'franz_page_top' ); ?>
            	<?php
					if ( have_posts() ) {
						the_post();
						get_template_part( 'loop', 'page' );
					}
				?>
                <?php do_action( 'franz_page_bottom' ); ?>
            </div>
            
            
			            <?php include ('DB_newspaper.php');?>
			</div>
			</br></br></br></br></br></br></br></br>
			<?php get_footer(); ?>
        </div>
    </div>
</br>
 