<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <!-- Site Tile -->
        <title><?php bloginfo('name'); ?></title>

<!-- Global Styles -->
<?php 
if(get_theme_mod('style')){
    echo get_theme_mod('style');
}
?>
        <!-- Stylesheet Files -->
        <?php wp_head(); ?>


    </head>
    <body id="page-top">

<?php get_header(); ?>

<?php get_template_part('hero'); ?>

<?php 
if(get_theme_mod('portfolio')){ 
    get_template_part('pf');
} 
?>

<?php get_template_part('about'); ?>

<?php 
if(get_theme_mod('contactform')){
    get_template_part('contact');
}
?>

<?php get_footer(); ?>

    </body>
</html>
