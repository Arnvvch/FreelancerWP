        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Location</h4>
                        <p class="lead mb-0">
                        <?php if(get_theme_mod('location-footer')){echo get_theme_mod('location-footer');}else{echo 'Miami <br/> Florida, U.S.A.';} ?>
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Around the Web</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="<?php if(get_theme_mod('facebook')){echo get_theme_mod('facebook');}else{echo '##';} ?>"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="<?php if(get_theme_mod('twitter')){echo get_theme_mod('twitter');}else{echo '##';} ?>"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="<?php if(get_theme_mod('youtube')){echo get_theme_mod('youtube');}else{echo '##';} ?>"><i class="fab fa-fw fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="<?php if(get_theme_mod('dribble')){echo get_theme_mod('dribble');}else{echo '##';} ?>"><i class="fab fa-fw fa-dribbble"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">About Us</h4>
                        <p class="lead mb-0">
                            <?php if(get_theme_mod('about-footer')){echo get_theme_mod('about-footer');}else{echo 'FreelanceWP is a free to use, MIT licensed Wordpress theme created for <a href="http://arnav.wbnt.xyz">Arnav' . "'" . 's Blog</a>.';} ?>
                        </p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; <?php if(get_theme_mod('copyright')){echo get_theme_mod('copyright');}else{echo "FreelancerWP made by OmegaLolBro for Arnav's blog";} ?></small></div>
        </div>

        <?php wp_footer(); ?>