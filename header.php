<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Site Template">
    <meta name="author" content="https://youtube.com/FollowAndrew">
    <!-- <link rel="shortcut icon" href="/wp-content/themes/first-theme/assets/images/logo.png"> -->

    <!-- stylesheets -->
    <?php
        wp_head();
    ?>
</head>

<body>

    <header class="header text-center">
        <a class="site-title pt-lg-4 mb-0" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>

        <nav class="navbar navbar-expand-lg navbar-dark">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="navigation" class="collapse navbar-collapse flex-column">
                <?php
                    if(function_exists('the_custom_logo')){
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src($custom_logo_id);
                    }
                ?>
                <img class="mb-3 mx-auto logo" src="<?php echo $logo[0] ?>" alt="logo">

                <!-- menu -->
                <?php
                    wp_nav_menu(
                        array(
                            'menu' => 'primary',
                            'container' => '',
                            'theme_location' => 'primary',
                            'items_wrap' => '<ul id="" class="navbar-nav flex-column text-sm-center text-md-left">%3$s</ul>'
                        )
                    );
                ?>

                <hr>

                <!-- sidebar widget -->
                <?php
                    dynamic_sidebar('sidebar-2');
                ?>
            </div>
        </nav>

        <!-- sidebar widget -->
        <?php
            dynamic_sidebar('sidebar-1');
         ?>
    </header>

    <div class="main-wrapper">
        <header class="page-title theme-bg-light text-center gradient py-5">
            <?php
            // check if it is the blog page
            if (is_home()) {
                // This is the blog page, so display the blog page title
                echo '<h1 class="heading">' . get_the_title(get_option('page_for_posts')) . '</h1>';
            } else {
                // This is not the blog page, so display the regular title
                echo '<h1 class="heading">' . get_the_title() . '</h1>';
            }
            ?>
        </header>