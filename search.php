<?php
/*
    Template Name: Résultat de recherche
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
<div class="layout layout-2-col-blog container">
    <article>
        <?php
        $s = get_search_query();
        $args = array(
            's' => $s
        );
        // The Query
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) {
            _e("<header class='page-header'><h1 style='page-title'>Search Results for: " . get_query_var('s') . "</h1></header>");
            while ($the_query->have_posts()) {
                $the_query->the_post();
        ?>
                <li>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </li>
            <?php
            }
        } else {
            ?>
            <header class="page-header">
                <h1 style="page-title">Aucun résultat</h1>
            </header>
            <div class="alert alert-info">
                <p>Désolé, mais aucun résultat ne convient à vos critères de recherche. Veuillez réessayer avec d'autres mots-clés.</p>
            </div>
        <?php } ?>

    </article>
    <aside class="sidebar">
        <?php get_sidebar(); ?>
    </aside>
</div>
<?php get_footer(); ?>