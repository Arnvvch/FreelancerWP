        <div class="preloader"><div class="lds-grid"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div></div>
        
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <img class="navbar-logo" src="<?php if(get_theme_mod('logo')){echo wp_get_attachment_url(get_theme_mod('logo'));}else{echo get_template_directory_uri() . '/assets/img/avataaars.svg';} ?>" alt="...">
                <a class="navbar-brand" href="#page-top"><?php bloginfo('name'); ?></a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fas fa-bars"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
<?php 
wp_nav_menu(
    array(
        'menu_class' => 'navbar-nav ms-auto', 
        'container' => 'ul',
        'menu' => 'primary',
        'link_before' => '<li class="nav-item mx-0 mx-lg-1">',
        'link_after' => '</li>',
    )
);?>
                </div>
            </div>
        </nav>