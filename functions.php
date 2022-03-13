<?php	
add_action('customize_register','my_customize_register');
function my_customize_register( $wp_customize ) {
    //Global Section
    $wp_customize->add_section('global-section', [
        'title' => 'Global Settings'
    ]);

    //Socails Section
    $wp_customize->add_section('social-section', [
        'title' => 'Socials'
    ]);

    //Header Section
    $wp_customize->add_section('header-section', [
        'title' => 'Header Customisation'
    ]);

    //About Section
    $wp_customize->add_section('about-section', [
        'title' => 'About Page Customisation'
    ]);

    //Poerfolio Section
    $wp_customize->add_section('pf-section', [
        'title' => 'Portfolio Customisation'
    ]);

    //Footer Section
    $wp_customize->add_section('footer-section', [
        'title' => 'Footer Customisation'
    ]);

    //Global Components
    //Global Logo Setting
    $wp_customize->add_setting('logo', [
        'default' => 'http://example.com/logo.png'
    ]);

    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'image-control', [
        'label' => 'Global Logo :',
        'section' => 'global-section',
        'settings' => 'logo',
        'mime_type' => 'image',
    ]));
    
    $wp_customize->add_setting('style', [
        'default' => '<style>
:root {
  --bs-primary: #1abc9c !important;
  --bs-secondary: #2c3e50 !important;
  --bs-success: #198754 !important;
  --bs-info: #0dcaf0 !important;
  --bs-warning: #ffc107 !important;
  --bs-danger: #dc3545 !important;
  --bs-light: #f8f9fa !important;
  --bs-dark: #212529 !important;
  --bs-primary-rgb: 26, 188, 156 !important;
  --bs-secondary-rgb: 44, 62, 80 !important;
  --bs-success-rgb: 25, 135, 84 !important;
  --bs-info-rgb: 13, 202, 240 !important;
  --bs-warning-rgb: 255, 193, 7 !important;
  --bs-danger-rgb: 220, 53, 69 !important;
  --bs-light-rgb: 248, 249, 250 !important;
  --bs-dark-rgb: 33, 37, 41 !important;
  --bs-white-rgb: 255, 255, 255 !important;
  --bs-black-rgb: 0, 0, 0 !important;
  --bs-body-color-rgb: 33, 37, 41 !important;
  --bs-body-bg-rgb: 255, 255, 255 !important;
  --bs-body-font-size: 1rem !important;
  --bs-body-font-weight: 400 !important;
  --bs-body-line-height: 1.5 !important;
  --bs-body-color: #212529 !important;
  --bs-body-bg: #fff !important;
}
</style>'
    ]);

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'style-control', [
        'label' => 'Global Styles :',
        'section' => 'global-section',
        'settings' => 'style',
        'type' => 'textarea'
    ]));

    //Global Usage Contact Form Setting
    $wp_customize->add_setting('contactform', [
        'default' => false
    ]);

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'contactform-control', [
        'label' => 'Use Contact Form on Every Page',
        'section' => 'global-section',
        'settings' => 'contactform',
        'type' => 'checkbox'
    ]));

    //Global Post URL Contact Form Setting
    $wp_customize->add_setting('contactform-url', [
        'default' => ''
    ]);

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'contactform-url-control', [
        'label' => 'Contact Form POST Url :',
        'section' => 'global-section',
        'settings' => 'contactform-url',
        'type' => 'text'
    ]));

    //PF Section
    //PF Usage Portfolio Setting
    $wp_customize->add_setting('portfolio', [
        'default' => false
    ]);

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'portfolio-control', [
        'label' => 'Use Portfolio on Home Page',
        'section' => 'global-section',
        'settings' => 'portfolio',
        'type' => 'checkbox'
    ]));

    //PF 1 Logo Setting
    $wp_customize->add_setting('pf-logo-1', [
        'default' => 'http://example.com/logo.png'
    ]);

    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'pf-logo-1-control', [
        'label' => 'Portfolio 1 Logo :',
        'section' => 'pf-section',
        'settings' => 'pf-logo-1',
        'mime_type' => 'image',
        'width' => 900,
        'height' => 650
    ]));


    //PF 1 Title
    $wp_customize->add_setting('pf-title-1', [
        'default' => 'Portfolio 1'
    ]);

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'pf-title-1-control', [
        'label' => 'Portfolio 1 Title :',
        'section' => 'pf-section',
        'settings' => 'pf-title-1',
        'type' => 'text'
    ]));

    //PF 1 Text
    $wp_customize->add_setting('pf-text-1', [
        'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.'
    ]);

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'pf-text-1-control', [
        'label' => 'Portfolio 1 Text :',
        'section' => 'pf-section',
        'settings' => 'pf-text-1',
        'type' => 'textarea'
    ]));

    //PF 2 Logo Setting
    $wp_customize->add_setting('pf-logo-2', [
        'default' => 'http://example.com/logo.png'
    ]);

    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'pf-logo-2-control', [
        'label' => 'Portfolio 2 Logo :',
        'section' => 'pf-section',
        'settings' => 'pf-logo-2',
        'mime_type' => 'image',
        'width' => 900,
        'height' => 650
    ]));

    //PF 2 Title
    $wp_customize->add_setting('pf-title-2', [
        'default' => 'Portfolio 2'
    ]);

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'pf-title-2-control', [
        'label' => 'Portfolio 2 Title :',
        'section' => 'pf-section',
        'settings' => 'pf-title-2',
        'type' => 'text'
    ]));

    //PF 2 Text
    $wp_customize->add_setting('pf-text-2', [
        'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.'
    ]);

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'pf-text-2-control', [
        'label' => 'Portfolio 2 Text :',
        'section' => 'pf-section',
        'settings' => 'pf-text-2',
        'type' => 'textarea'
    ]));

    //PF 3 Logo Setting
    $wp_customize->add_setting('pf-logo-3', [
        'default' => 'http://example.com/logo.png'
    ]);

    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'pf-logo-3-control', [
        'label' => 'Portfolio 3 Logo :',
        'section' => 'pf-section',
        'settings' => 'pf-logo-3',
        'mime_type' => 'image',
        'width' => 900,
        'height' => 650
    ]));

    //PF 3 Title
    $wp_customize->add_setting('pf-title-3', [
        'default' => 'Portfolio 3'
    ]);

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'pf-title-3-control', [
        'label' => 'Portfolio 3 Title :',
        'section' => 'pf-section',
        'settings' => 'pf-title-3',
        'type' => 'text'
    ]));

    //PF 3 Text
    $wp_customize->add_setting('pf-text-3', [
        'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.'
    ]);

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'pf-text-3-control', [
        'label' => 'Portfolio 3 Text :',
        'section' => 'pf-section',
        'settings' => 'pf-text-3',
        'type' => 'textarea'
    ]));

    //PF 4 Logo Setting
    $wp_customize->add_setting('pf-logo-4', [
        'default' => 'http://example.com/logo.png'
    ]);

    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'pf-logo-4-control', [
        'label' => 'Portfolio 4 Logo :',
        'section' => 'pf-section',
        'settings' => 'pf-logo-4',
        'mime_type' => 'image',
        'width' => 900,
        'height' => 650
    ]));

    //PF 4 Title
    $wp_customize->add_setting('pf-title-4', [
        'default' => 'Portfolio 4'
    ]);

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'pf-title-4-control', [
        'label' => 'Portfolio 4 Title :',
        'section' => 'pf-section',
        'settings' => 'pf-title-4',
        'type' => 'text'
    ]));

    //PF 4 Text
    $wp_customize->add_setting('pf-text-4', [
        'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.'
    ]);

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'pf-text-4-control', [
        'label' => 'Portfolio 4 Text :',
        'section' => 'pf-section',
        'settings' => 'pf-text-4',
        'type' => 'textarea'
    ]));

    //PF 5 Logo Setting
    $wp_customize->add_setting('pf-logo-5', [
        'default' => 'http://example.com/logo.png'
    ]);

    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'pf-logo-5-control', [
        'label' => 'Portfolio 5 Logo :',
        'section' => 'pf-section',
        'settings' => 'pf-logo-5',
        'mime_type' => 'image',
        'width' => 900,
        'height' => 650
    ]));

    //PF 5 Title
    $wp_customize->add_setting('pf-title-5', [
        'default' => 'Portfolio 5'
    ]);

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'pf-title-5-control', [
        'label' => 'Portfolio 5 Title :',
        'section' => 'pf-section',
        'settings' => 'pf-title-5',
        'type' => 'text'
    ]));

    //PF 5 Text
    $wp_customize->add_setting('pf-text-5', [
        'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.'
    ]);

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'pf-text-5-control', [
        'label' => 'Portfolio 5 Text :',
        'section' => 'pf-section',
        'settings' => 'pf-text-5',
        'type' => 'textarea'
    ]));

    //PF 6 Logo Setting
    $wp_customize->add_setting('pf-logo-6', [
        'default' => 'http://example.com/logo.png'
    ]);

    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'pf-logo-6-control', [
        'label' => 'Portfolio 6 Logo :',
        'section' => 'pf-section',
        'settings' => 'pf-logo-6',
        'mime_type' => 'image',
        'width' => 900,
        'height' => 650
    ]));

    //PF 6 Title
    $wp_customize->add_setting('pf-title-6', [
        'default' => 'Portfolio 6'
    ]);

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'pf-title-6-control', [
        'label' => 'Portfolio 6 Title :',
        'section' => 'pf-section',
        'settings' => 'pf-title-6',
        'type' => 'text'
    ]));

    //PF 6 Text
    $wp_customize->add_setting('pf-text-6', [
        'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.'
    ]);

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'pf-text-6-control', [
        'label' => 'Portfolio 6 Text :',
        'section' => 'pf-section',
        'settings' => 'pf-text-6',
        'type' => 'textarea'
    ]));

    //Footer Components
    //Footer Copyright Setting
    $wp_customize->add_setting('copyright', [
        'default' => "FreelancerWP made by OmegaLolBro for Arnav's blog"
    ]);

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'copyright-control', [
        'label' => 'Copyright Text :',
        'section' => 'footer-section',
        'settings' => 'copyright',
        'type' => 'text'
    ]));

    //Footer About Setting
    $wp_customize->add_setting('about-footer', [
        'default' => 'FreelanceWP is a free to use, MIT licensed Wordpress theme created for <a href="http://arnav.wbnt.xyz">Arnav' . "'" . 's Blog</a>.'
    ]);

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'about-footer-control', [
        'label' => 'Footer About Text :',
        'section' => 'footer-section',
        'settings' => 'about-footer',
        'type' => 'textarea'
    ]));

    //Footer Location Setting
    $wp_customize->add_setting('location-footer', [
        'default' => 'Miami </br> Florida, U.S.A.'
    ]);

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'location-footer-control', [
        'label' => 'Footer Location/Address Text :',
        'section' => 'footer-section',
        'settings' => 'location-footer',
        'type' => 'textarea'
    ]));

    //Social Components
    //Socails Facebook Setting
    $wp_customize->add_setting('facebook', [
        'default' => '#'
    ]);

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'facebook-control', [
        'label' => 'Facebook Page URL :',
        'section' => 'social-section',
        'settings' => 'facebook',
        'type' => 'text'
    ]));

    //Socails Twitter Setting
    $wp_customize->add_setting('twitter', [
        'default' => '#'
    ]);

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'twitter-control', [
        'label' => 'Twitter Profile URL :',
        'section' => 'social-section',
        'settings' => 'twitter',
        'type' => 'text'
    ]));

    //Socails Instagram Setting
    $wp_customize->add_setting('youtube', [
        'default' => '#'
    ]);

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'youtube-control', [
        'label' => 'YouTube Channel URL :',
        'section' => 'social-section',
        'settings' => 'youtube',
        'type' => 'text'
    ]));

    //Socails Dribble Setting
    $wp_customize->add_setting('dribble', [
        'default' => '#'
    ]);

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'dribble-control', [
        'label' => 'Dribble Page URL :',
        'section' => 'social-section',
        'settings' => 'dribble',
        'type' => 'text'
    ]));

    //About Components
    //About Text Setting
    $wp_customize->add_setting('about-l1', [
        'default' => 'Freelancer is a free and open source Wordpress theme created by OmegaLolBro for Arnav\'s Blog. The download includes the complete source files including HTML, CSS, and JavaScript for easy customization.'
    ]);

    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'about-l1-control', [
        'label' => 'About Lead 1 :',
        'section' => 'about-section',
        'settings' => 'about-l1',
        'type' => 'textarea',
    ]));

    $wp_customize->add_setting('about-l2', [
        'default' => 'You can create your own custom avatar for the masthead, change the icon in the dividers, and add your email address to the contact form to make it fully functional!'
    ]);

    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'about-l2-control', [
        'label' => 'About Lead 2 :',
        'section' => 'about-section',
        'settings' => 'about-l2',
        'type' => 'textarea',
    ]));

    $wp_customize->add_setting('about-button-txt', [
        'default' => 'Button'
    ]);

    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'about-button-txt-control', [
        'label' => 'About Button Text :',
        'section' => 'about-section',
        'settings' => 'about-button-txt',
        'type' => 'text',
    ]));

    $wp_customize->add_setting('about-button-url', [
        'default' => 'http://example.com/'
    ]);

    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'about-button-url-control', [
        'label' => 'About Button URL :',
        'section' => 'about-section',
        'settings' => 'about-button-url',
        'type' => 'text',
    ]));
}

define('VER', '1.8');

function add_css(){
    wp_register_style('style', get_template_directory_uri() . '/css/styles.css', false, VER, 'all');
    wp_enqueue_style( 'style');
    wp_register_style('font-m', 'https://fonts.googleapis.com/css?family=Montserrat:400,700', false, VER, 'all');
    wp_enqueue_style( 'font-m');
    wp_register_style('style', 'https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic', false, VER, 'all');
    wp_enqueue_style( 'style');
}
add_action('wp_enqueue_scripts', 'add_css');

function add_script(){
    wp_register_script('bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js', array(), 1.2, true);
    wp_enqueue_script( 'bootstrap');
    wp_register_script('script', get_template_directory_uri() . '/js/scripts.js', array(), VER, true);
    wp_enqueue_script( 'script');
    wp_register_script('font', 'https://use.fontawesome.com/releases/v5.15.4/js/all.js', array (), VER, true);
    wp_enqueue_script( 'font');
}
add_action('wp_enqueue_scripts', 'add_script');

add_theme_support('menus');
add_theme_support('post-thumbnails');