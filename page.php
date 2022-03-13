<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?php
if(have_posts()){ 
    while (have_posts()){ the_post(); 
        the_title(); 
    }
}else{
    _e( 'Sorry, no pages matched your criteria.', 'textdomain' ); 
}
?> | <?php bloginfo('name'); ?></title>

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

        <section id="post">
            <div class="container">
                <div class="rem post-container">
<?php
if(have_posts()){ 
    while (have_posts()){ the_post(); 
        the_title( '<h1>', '</h1>' ); 
        the_content();
    }
}else{
    _e( 'Sorry, no pages matched your criteria.', 'textdomain' ); 
}
?>              
                </div>
            </div>
        </section>

<!-- Comment Section -->
<?php
// If comments are open or we have at least one comment, load up the comment template.
if(comments_open() || get_comments_number()){
    comments_template();
}
?>

<?php 
if(get_theme_mod('contactform')){
    get_template_part('contact');
}
?>

<?php get_footer(); ?>

    </body>
</html>
