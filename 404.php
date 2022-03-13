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

        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5" src="<?php if(get_theme_mod('logo_404')){echo wp_get_attachment_url(get_theme_mod('logo_404'));}else{echo get_template_directory_uri() . '/assets/img/404.svg';} ?>" alt="..." />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">ERROR 404</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">Page Not Found</p>
            </div>
        </header>

        <!-- Content Section -->
        <section id="post-list">
            <div class="container">
                <div class="post-bg">
                <!-- Posts Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">Latest Posts</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
<?php
$the_query = new WP_Query(['posts_per_page' => 6]); 

if($the_query->have_posts()){
    while($the_query->have_posts()){
        $the_query->the_post();
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
