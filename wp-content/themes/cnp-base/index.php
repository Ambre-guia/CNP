<?php get_header();?>
<div class="bg-darkblue breadcrumbs-wrapper">
    <ul class="breadcrumbs container">
            <?php
            if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb( '','' );
            }
            ?>
    </ul>
</div>
<div class=" container">
    <h1 class="page-title left">Toute l'actualité du CNP</h1>
    <div class="layout-archive">
    <?php 
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post(); 
                include "includes/loops/loop-post-archive.php";
            } // end while

        } // end if
        ?>           
    </div>
    <div class="pagination">
        <?php  the_posts_pagination( array(
        'mid_size' => 2,
        'prev_text' => __( 'Page précédente', 'textdomain' ),
        'next_text' => __( 'Page suivante', 'textdomain' ),
        ) );
        ?>
    </div>
</div>
<?php get_footer();?>