<?php
/* Template Name: Page Organisation */
?>
<?php get_header();
global $post;
?>
<div class="bg-darkblue breadcrumbs-wrapper">
    <ul class="breadcrumbs container">
        <?php
        if (function_exists('yoast_breadcrumb')) {
            yoast_breadcrumb('', '');
        }
        ?>
    </ul>
</div>
<div class="layout layout-2-col container">
    <div class="nav-wrapper">
        <?php $keyv = get_field('site_key_visual', 'option'); ?>
        <img src="<?= $keyv['url']; ?>" alt="">
        <div style="margin-top:2em;"></div>
        <?php
        wp_nav_menu(array(
            'theme_location' => 'menu-lateral-1',
            'items_wrap' => '<nav class="sidebar-nav"><ul>%3$s</ul></nav>',
        )); ?>
    </div>
    <article>
        <header class="page-header">
            <h1 class="page-title"><?php the_title(); ?></h1>
            <div class="page-subtitle">
                <?php the_field('page_excerpt'); ?>
            </div>
        </header>
        <div class=""><?php the_content(); ?></div>

        <?php
        echo ' <div class="page-content members-grid">';
        include "includes/loops/loop-member-picture.php";
        echo '</div>';
        ?>

        <?php
        if (have_rows('related_links')) :
            echo '<div class="card card-links">';
            echo '<div class="item-title"><i class="fa-solid fa-file"></i> Pour aller plus loin</div>';
            echo '  <ul class="list-arrow">';
            while (have_rows('related_links')) : the_row();
                $related_link_text = get_sub_field('related_link_text');
                $related_link_url = get_sub_field('related_link_url');
                $is_blank =  get_sub_field('is_blank');
                $target;
                if ($is_blank == 1)
                    $target = 'target="_blank"';
                echo '<li><a href="' . $related_link_url . '" ' . $target . '>' . $related_link_text . '</a></li>';
            endwhile;
            echo '</ul>';
            echo '</div>';
        endif;
        ?>
    </article>
</div>
<?php get_footer(); ?>