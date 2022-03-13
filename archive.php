<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
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

        <!-- Content Section -->
        <section id="post-list">
            <div class="rem container">
                <div class="post-bg">
                    <!-- Posts Section Heading-->
                    <?php the_archive_title('<h2 class="page-section-heading text-center text-uppercase text-white">', '</h2>'); ?>
                    <!-- Icon Divider-->
                    <div class="divider-custom divider-light">
                        <div class="divider-custom-line"></div>
                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                        <div class="divider-custom-line"></div>
                    </div>
                    <?php the_archive_description('<h2>', '</h2>'); ?>
                </div>
            </div>
</section>

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