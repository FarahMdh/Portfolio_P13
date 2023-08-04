<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <script src="https://kit.fontawesome.com/94712dee56.js" crossorigin="anonymous"></script>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <header class="site-header">

        <div class="container">

            <div class="site-logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/logoFpoint.svg" alt="Logo">
                </a>
            </div>

            <nav class="site-navigation">

                <button class="menu-toggle" aria-label="Menu Toggle" aria-controls="primary-menu" aria-expanded="false">
                    <div class="burger">
                        <span class="line"></span>
                    </div>
                </button>

                <ul class="menu">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_class' => 'main-menu',
                    ));
                    ?>
                </ul>
            </nav>

        </div>
    </header>
