        <!-- About Section-->
        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="<?php if(is_page('about')){echo 'rem';} ?> container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-4 ms-auto"><p class="lead"><?php if(get_theme_mod('about-l1')){echo get_theme_mod('about-l1');}else{echo 'Freelancer is a free and open source Wordpress theme created by OmegaLolBro for Arnav\'s Blog. The download includes the complete source files including HTML, CSS, and JavaScript for easy customization.';} ?></p></div>
                    <div class="col-lg-4 me-auto"><p class="lead"><?php if(get_theme_mod('about-l2')){echo get_theme_mod('about-l2');}else{echo 'You can create your own custom avatar for the masthead, change the icon in the dividers, and add your email address to the contact form to make it fully functional!';} ?></p></div>
                </div>
                <!-- About Section Button-->
                <div class="text-center mt-4">
                    <?php if(get_theme_mod('about-button-url') || get_theme_mod('about-button-txt')){ ?>
                    <a class="btn btn-xl btn-outline-light" href="<?php echo get_theme_mod('about-button-url'); ?>">
                        <i class="fas fa-code me-2"></i> <?php echo get_theme_mod('about-button-txt'); ?>
                    </a>
                    <?php }else{ ?>
                    <a class="btn btn-xl btn-outline-light" href="https://github.com/OmegaLolBro/FreelancerWP/">
                        <i class="fas fa-code me-2"></i> View Source
                    </a>
                    <a class="btn btn-xl btn-outline-light" href="http://arnav.wbnt.xyz/">
                        <i class="fas fa-globe me-2"></i></i> Visit Arnav's Blog
                    </a>
                    <?php } ?>
                </div>
            </div>
        </section>