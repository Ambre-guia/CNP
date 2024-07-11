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
        get_search_form();
        $s = get_search_query();
        $args = array(
            's' => $s
        );
        // The Query
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) {
            while ($the_query->have_posts()) {
                $the_query->the_post();
        ?>
                <a class="result" href="<?php the_permalink(); ?>">
                    <h2 class="item-title"><?php the_title(); ?></h2>
                </a>
            <?php
            }
        } else {
            ?>
            <header class="page-header">
                <h2 class="page-title">Aucun résultat</h2>
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