<?php
/*
    Template Name: Page de recherche
    */
?>
<?php get_header(); ?>
<div class="breadcrumbs-wrapper">
    <ul class="breadcrumbs container">
        <?php
        if (function_exists('yoast_breadcrumb')) {
            yoast_breadcrumb('', '');
        }
        ?>
    </ul>
</div>
<div class="layout layout-3-col container">
    <div class="nav-wrapper">
        <?php $keyv = get_field('site_key_visual', 'option'); ?>
        <img src="<?= $keyv['url']; ?>" alt="">
        <?php get_sidebar('left'); ?>
    </div>
    <article>
        <header class="page-header">
            <h1 class="page-title"><?php the_title(); ?></h1>
        </header>
        <div class="page-content">
            <?php get_search_form(); ?>
        </div>

    </article>
    <aside class="sidebar">
        <?php get_sidebar(); ?>
    </aside>
</div>
<?php get_footer(); ?>