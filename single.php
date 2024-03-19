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
<div class="layout layout-2-col-blog container">
    <article class="main-article">
        <header class="article-header">
            <h1 class="article-title"><?php the_title();?></h1>
            <p class="article-meta"><span class="article-date"><?php echo get_the_date('d M Y'); ?></span> dans<span class="article-category"> <?php the_category( '&bull;' ); ?>
</span></p> 
        </header>
        <div class="article-excerpt">
            <?php the_content();?>
        </div>
    </article>
    <aside class="sidebar">
        <?php get_sidebar();?>
    </aside>
</div>
<?php get_footer();?>