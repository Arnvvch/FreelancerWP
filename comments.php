<?php
if(post_password_required()){
    return;
}
?>
<!-- Comment Section -->
<section id="post-comments">
    <div class="container">
        <div class="post-bg">
            <!-- Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-white">Comments</h2>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <div class="com">
<?php if(have_comments()){ ?>
                <ol class="comment-list">
<?php
wp_list_comments([
    'style'       => 'ol',
    'short_ping'  => true,
    'avatar_size' => 70,
]);
?>
                </ol>
<?php if(get_comment_pages_count() > 1 && get_option('page_comments')){ ?>
                <nav class="navigation comment-navigation" role="navigation">
                    <h1 class="screen-reader-text section-heading"><?php _e('Comment navigation', 'textdomain'); ?></h1>
                    <div class="nav-previous"><?php previous_comments_link(__('&larr; Older Comments', 'textdomain')); ?></div>
                    <div class="nav-next"><?php next_comments_link(__('Newer Comments &rarr;', 'textdomain')); ?></div>
                </nav>
<?php } ?>
<?php if (!comments_open() && get_comments_number()){?>
                <p class="no-comments"><?php _e('Comments are closed.' , 'textdomain'); ?></p>
<?php } ?>

<?php } ?>

<?php comment_form(); ?>

            </div>
        </div>
    </div>
</section>
