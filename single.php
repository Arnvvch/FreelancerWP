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

        <!-- Content Section -->
        <section id="post-list">
            <div class="container">
                <div class="rem post-bg">
                <!-- Posts Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">Post</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
<?php
if(have_posts()){
    while(have_posts()){
            the_post();
            echo '<div class="col post-l">';

            $img_src = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');

            echo '<a href="' . get_permalink() . '"><div class="post-thumb" style="background-image: url(\'' . $img_src[0] . '\');" alt="..."></div></a>';

            //echo '<div>';
            echo '<div>';
            the_title('<h2>', '</h2>'); 

            echo '<div>';
            printf(__('<i class="fa fa-user"></i> %s', 'textdomain'), get_the_author_posts_link());
            echo '</div>';

            echo '<div>';
            _e('<i class="fa fa-calendar"></i> ', 'textdomain'); the_time('F j, Y');
            echo '</div>';

            echo '<div>';
            _e('<i class="fa fa-list"></i> ', 'textdomain'); the_category(', ');
            echo '</div>'; 

            echo '</div></a>';

            echo '</div>';
    }
}else{
    _e('Sorry, no posts matched your criteria.', 'textdomain');
}
?>
                </div>
            </div>
        </section>


        <section id="post">
            <div class="container">
                <div class="post-container">
<?php
if(have_posts()){ 
    while(have_posts()){ the_post(); 
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
