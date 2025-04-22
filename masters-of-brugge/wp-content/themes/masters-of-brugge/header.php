<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <!-- Bootstrap Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <!-- Site Title -->
                <a class="navbar-brand" href="<?php echo home_url(); ?>">
                    <?php bloginfo('name'); ?>
                </a>
                <!-- Mobile Toggle Button -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Navigation Menu -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary',
                            'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0',
                            'container' => false,
                            'walker' => new WP_Bootstrap_Navwalker(), // Optional: Use a custom walker for Bootstrap compatibility
                            'fallback_cb' => '__return_false',
                            'depth' => 2,
                        ));
                    ?>
                </div>
            </div>
        </nav>
    </header>