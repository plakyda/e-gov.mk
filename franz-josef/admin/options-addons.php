<?php function franz_options_addons() { global $franz_settings; $plugins = get_plugins(); ?>               
	
    <h2><?php _e( 'Premium Add-ons', 'franz-josef' ); ?></h2>
    
    <!-- Graphene Shortcodes -->
    <?php $active = ( function_exists( 'grsc_pullquote' ) ) ? true : false; ?>
    <div class="addon plugin <?php if ( $active ) echo 'active'; ?>">
    	<div class="addon-details clearfix">
            <span class="addon-icon addon-icon-shortcodes"></span>
            <h4>Graphene Shortcodes</h4>
            <p><?php _e( 'Add message blocks and pullquote shortcodes you can use in your content.', 'franz-josef' ); ?></p>
        </div>
        <div class="addon-cta clearfix">
        	<?php if ( ! $active ) : ?>
                <?php franz_activate_plugin_link( '', 'graphene-shortcodes/graphene-shortcodes.php', $plugins ); ?>
                <a href="http://www.graphene-theme.com/?ddownload=3403" class="button alignright"><?php _e( 'Download', 'franz-josef' ); ?></a>
            <?php else : ?>
            	<i class="fa fa-check-circle"></i> <span class="price"><?php _e( 'Installed', 'franz-josef' ); ?></span>
            <?php endif; ?>
        </div>
    </div>
    
    <!-- Infinite Scroll -->
    <?php $active = ( function_exists( 'fjis_load_textdomain' ) ) ? true : false; ?>
    <div class="addon plugin <?php if ( $active ) echo 'active'; ?>">
    	<div class="addon-details clearfix">
            <span class="addon-icon addon-icon-infinite-scroll"></span>
            <h4>Infinite Scroll</h4>
            <p><?php _e( 'Retain visitors better by seamlessly loading content without refreshing the page.', 'franz-josef' ); ?></p>
        </div>
        <div class="addon-cta clearfix">
        	<?php if ( ! $active ) : ?>
                <?php 
					// franz_activate_plugin_link( '$ 4.50', 'franz-infinite-scroll/franz-infinite-scroll.php', $plugins );
					franz_activate_plugin_link( 'Coming soon!', 'franz-infinite-scroll/franz-infinite-scroll.php', $plugins ); 
				?>
                <!--<a href="" class="button alignright"><?php _e( 'Learn more', 'franz-josef' ); ?></a>-->
            <?php else : ?>
            	<i class="fa fa-check-circle"></i> <span class="price"><?php _e( 'Installed', 'franz-josef' ); ?></span>
            <?php endif; ?>
        </div>
    </div>
    
    
    <!-- Hooks Widgets -->
    <?php $active = ( function_exists( 'fjhw_get_action_hooks' ) ) ? true : false; ?>
    <div class="addon plugin <?php if ( $active ) echo 'active'; ?>">
    	<div class="addon-details clearfix">
            <span class="addon-icon addon-icon-hooks-widgets"></span>
            <h4>Hooks Widgets</h4>
            <p><?php _e( 'Place any content anywhere with easy-to-use action hooks widget areas.', 'franz-josef' ); ?></p>
        </div>
        <div class="addon-cta clearfix">
        	<?php if ( ! $active ) : ?>
                <?php 
					// franz_activate_plugin_link( '$ 4.50', 'franz-hooks-widgets/franz-hooks-widgets.php', $plugins );
					franz_activate_plugin_link( 'Coming soon!', 'franz-hooks-widgets/franz-hooks-widgets.php', $plugins );
				?>
                <!--<a href="" class="button alignright"><?php _e( 'Learn more', 'franz-josef' ); ?></a>-->
            <?php else : ?>
            	<i class="fa fa-check-circle"></i> <span class="price"><?php _e( 'Installed', 'franz-josef' ); ?></span>
            <?php endif; ?>
        </div>
    </div>
    
    
    <!-- Stacks -->
    <?php $active = ( function_exists( 'franz_stacks' ) ) ? true : false; ?>
    <div class="addon plugin <?php if ( $active ) echo 'active'; ?>">
    	<div class="addon-details clearfix">
            <span class="addon-icon addon-icon-stacks"></span>
            <h4>Stacks</h4>
            <p><?php _e( 'Create custom page templates with drag-and-drop Stacks.', 'franz-josef' ); ?></p>
        </div>
        <div class="addon-cta clearfix">
        	<?php if ( ! $active ) : ?>
                <?php franz_activate_plugin_link( __( 'Coming soon!', 'franz-josef' ), 'franz-stacks/franz-stacks.php', $plugins ); ?>
                <!-- <a href="" class="button alignright"><?php _e( 'Learn more', 'franz-josef' ); ?></a> -->
            <?php else : ?>
            	<i class="fa fa-check-circle"></i> <span class="price"><?php _e( 'Installed', 'franz-josef' ); ?></span>
            <?php endif; ?>
        </div>
    </div>
    
    
    <!-- Custom Colours -->
    <?php $active = ( function_exists( 'franz_colours' ) ) ? true : false; ?>
    <div class="addon plugin <?php if ( $active ) echo 'active'; ?>">
    	<div class="addon-details clearfix">
            <span class="addon-icon addon-icon-colours"></span>
            <h4>Custom Colours</h4>
            <p><?php _e( 'Customise Franz Josef\'s colour scheme to suit your style and audience.', 'franz-josef' ); ?></p>
        </div>
        <div class="addon-cta clearfix">
        	<?php if ( ! $active ) : ?>
                <?php franz_activate_plugin_link( __( 'Coming soon!', 'franz-josef' ), 'franz-colours/franz-colours.php', $plugins ); ?>
                <!-- <a href="" class="button alignright"><?php _e( 'Learn more', 'franz-josef' ); ?></a> -->
            <?php else : ?>
            	<i class="fa fa-check-circle"></i> <span class="price"><?php _e( 'Installed', 'franz-josef' ); ?></span>
            <?php endif; ?>
        </div>
    </div>
    
    
    <!-- Additional Options -->
    <?php $active = ( function_exists( 'fjao_load_textdomain' ) ) ? true : false; ?>
    <div class="addon plugin <?php if ( $active ) echo 'active'; ?>">
    	<div class="addon-details clearfix">
            <span class="addon-icon addon-additional-options"></span>
            <h4>Additional Options</h4>
            <p><?php _e( 'Adds additional plugin-territory options for the Franz Josef theme.', 'franz-josef' ); ?></p>
        </div>
        <div class="addon-cta clearfix">
        	<?php if ( ! $active ) : ?>
                <?php franz_activate_plugin_link( __( 'Coming soon!', 'franz-josef' ), 'franz-additional-options/franz-additional-options.php', $plugins ); ?>
                <!-- <a href="" class="button alignright"><?php _e( 'Learn more', 'franz-josef' ); ?></a> -->
            <?php else : ?>
            	<i class="fa fa-check-circle"></i> <span class="price"><?php _e( 'Installed', 'franz-josef' ); ?></span>
            <?php endif; ?>
        </div>
    </div>
    
    
    
    
    <h2 style="margin-top:40px"><?php _e( 'Natively Supported Plugins', 'franz-josef' ); ?></h2>
    
    <!-- YARPP -->
    <?php $active = ( function_exists( 'yarpp_related' ) ) ? true : false; ?>
    <div class="addon plugin <?php if ( $active ) echo 'active'; ?>">
    	<div class="addon-details clearfix">
            <i class="addon-icon fa fa-plug"></i>
            <h4>Yet Another Related Posts Plugin</h4>
            <p><?php _e( 'Automatically display related posts on your posts and pages.', 'franz-josef' ); ?></p>
        </div>
        <div class="addon-cta clearfix">
        	<?php if ( ! $active ) : ?>
                <?php franz_activate_plugin_link( '', 'yet-another-related-posts-plugin/yarpp.php', $plugins ); ?>
                <a href="<?php echo admin_url( 'plugin-install.php?tab=search&s=yarpp' ); ?>" class="button alignright"><?php _e( 'Install', 'franz-josef' ); ?></a>
            <?php else : ?>
            	<i class="fa fa-check-circle"></i> <span class="price"><?php _e( 'Installed', 'franz-josef' ); ?></span>
            <?php endif; ?>
        </div>
    </div>
    
    <!-- Breadcrumb NavXT -->
    <?php $active = ( class_exists( 'breadcrumb_navxt' ) ) ? true : false; ?>
    <div class="addon plugin <?php if ( $active ) echo 'active'; ?>">
    	<div class="addon-details clearfix">
            <img class="addon-icon" src="http://ps.w.org/breadcrumb-navxt/assets/icon.svg?rev=971477" alt="" width="100" height="100" />
            <h4>Breadcrumb NavXT</h4>
            <p><?php _e( 'Add navigational breadcrumbs for your site for better navigation and improved SEO.', 'franz-josef' ); ?></p>
        </div>
        <div class="addon-cta clearfix">
        	<?php if ( ! $active ) : ?>
                <?php franz_activate_plugin_link( '', 'breadcrumb-navxt/breadcrumb-navxt.php', $plugins ); ?>
                <a href="<?php echo admin_url( 'plugin-install.php?tab=search&s=yarpp' ); ?>" class="button alignright"><?php _e( 'Install', 'franz-josef' ); ?></a>
            <?php else : ?>
            	<i class="fa fa-check-circle"></i> <span class="price"><?php _e( 'Installed', 'franz-josef' ); ?></span>
            <?php endif; ?>
        </div>
    </div>
<?php }


/**
 * Link to activate plugin page
 */
function franz_activate_plugin_link( $price = '', $plugin, $plugins ){
	if ( ! $price ) $price = __( 'Free', 'franz-josef' );
	
	if ( array_key_exists( $plugin, $plugins ) ) : 	?>
    	<a href="<?php echo esc_url( admin_url( 'plugins.php' ) ); ?>" class="button-primary button-activate"><?php _e( 'Activate', 'franz-josef' ); ?></a>
    <?php else : ?>
    	<span class="price"><?php echo $price; ?></span>
    <?php endif;
}