
<header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
            <?php
            // Header Logo
                echo safariotravel_theme_logo( 'navbar-brand logo_h' );
            ?>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                <?php
                //
                if( has_nav_menu( 'primary-menu' ) ) {
                    $args = array(
                        'theme_location' => 'primary-menu',
                        'container'      => '',
                        'depth'          => 2,
                        'menu_class'     => 'nav navbar-nav menu_nav justify-content-end',
                        'fallback_cb'    => 'safariotravel_bootstrap_navwalker::fallback',
                        'walker'         => new safariotravel_bootstrap_navwalker(),
                    );  
                    wp_nav_menu( $args );
                }
                ?>
                <?php
                // Call To Action Button
                $cta = safariotravel_opt( 'safariotravel_cta_toggle_settings' );
                if( $cta ){ ?>
                    <div class="nav-right text-center text-lg-right py-4 py-lg-0">
                        <a href="<?php echo esc_url( safariotravel_opt( 'safariotravel_cta_url' ) ); ?>" class="button"><?php echo esc_html( safariotravel_opt( 'safariotravel_cta_label' ) ); ?></a>
                    </div>
                    <?php
                }
                ?>
            </div> 
        </div>
      </nav>
    </div>
</header>

<!-- #header -->
