<?php dynamic_sidebar( 'sidebar_blog' ); ?>
<div class="post-feed">
    <p class="block-title">Toute l’actualité du CNP</p>
    <?php 
    $_posts = new WP_Query( array(
        'post_type'         => 'post',
        'posts_per_page'    => 4,
        'post__not_in'           => [get_the_ID()]
    ));
    if( $_posts->have_posts() ) :
        while ( $_posts->have_posts() ) : $_posts->the_post();
        include 'includes/loops/loop-post-sidebar.php';
        endwhile; 
        wp_reset_postdata(); 
    endif; 
    ?>
</div>