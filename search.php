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
<div class="layout layout-blog container">
    <article>
        <?php
        $s = get_search_query();
        echo"<header class='page-header'>
                <h1 class='page-title'>Résultat de recherche pour :". $s ." </h1>
            </header>";
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
                    <h2 class="item-search"><?php the_title(); ?></h2>
                </a>
            <?php
            }
        } else {
            ?>
            <header class="page-header">
                <h1 class="page-title">Aucun résultat</h1>
            </header>
            <div class="alert alert-info">
                <p>Désolé, mais aucun résultat ne convient à vos critères de recherche. Veuillez réessayer avec d'autres mots-clés.</p>
            </div>
        <?php } ?>

    </article>
</div>
<?php get_footer(); ?>