<!DOCTYPE html>
<html>
<head>
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); //HOOK. required for the admin bar and plugins to work ?>
</head>
<body <?php body_class(); ?>>
    <header role="banner" id="header">
        <?php the_custom_logo(); ?>
        <h1 class="site-title"><a href="<?php echo home_url(); ?>">
            <?php bloginfo('name'); ?>
        </a></h1>
        <h2><?php bloginfo( 'description' ); ?></h2>

        <nav>
            <ul class="nav">
                <?php wp_list_pages( array(
                    'title_li'  => '', //no "pages" title
                    'depth'     => 1, //only top level pages
                ) ); ?>
            </ul>
        </nav>

    <?php get_search_form(); ?>
</header>