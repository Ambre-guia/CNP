<?php get_header(); ?>

    <!-- HERO -->
    <?php 
    get_template_part("includes/partial/hero.php");
    ?>
  
    <!-- END HERO -->

    <!-- EVENTS -->
    <?php 
    $events = tribe_get_events( [
        'posts_per_page' => 5,
        'start_date'     => 'now',
    ] );
    if ( !empty( $events ) ) :
        get_template_part("includes/partial/events-cards.php");
    endif;
    ?>
    <!-- END EVENTS -->

    <!-- MISSION GRID -->
    <?php 
    get_template_part("includes/partial/mission-grid.php");
    ?>
    <!-- END MISSION GRID -->

    <!-- BANNIERE -->
    <?php 
    get_template_part("includes/partial/cta-banner.php");
    ?>
        <!-- END BANNIERE -->

    <!-- CTA -->
    <?php 
    get_template_part("includes/partial/cta-big.php");
    ?>

    <!-- 2 blocks -->
    <?php 
    get_template_part("includes/partial/frontpage-two-cards.php");
    ?>

    <!-- Actualités -->
    <?php 
    get_template_part("includes/partial/news-cards-feed.php");
    ?>

    <!-- Composition -->
    <?php 
    get_template_part("includes/partial/partners-feed.php");
    ?>

<?php get_footer(); ?>
