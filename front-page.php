<?php get_header(); ?>

    <!-- HERO -->
    <?php 
    require("includes/partial/hero.php");
    ?>
  
    <!-- END HERO -->

    <!-- EVENTS -->
    <?php 
    $events = tribe_get_events( [
        'posts_per_page' => 5,
        'start_date'     => 'now',
    ] );
    if ( !empty( $events ) ) :
        require("includes/partial/events-cards.php");
    endif;
    ?>
    <!-- END EVENTS -->

    <!-- MISSION GRID -->
    <?php 
    require("includes/partial/mission-grid.php");
    ?>
    <!-- END MISSION GRID -->

    <!-- BANNIERE -->
    <?php 
    require("includes/partial/cta-banner.php");
    ?>
        <!-- END BANNIERE -->

    <!-- CTA -->
    <?php 
    require("includes/partial/cta-big.php");
    ?>

    <!-- 2 blocks -->
    <?php 
    require("includes/partial/frontpage-two-cards.php");
    ?>

    <!-- Actualités -->
    <?php 
    require("includes/partial/news-cards-feed.php");
    ?>

    <!-- Composition -->
    <?php 
    require("includes/partial/partners-feed.php");
    ?>

<?php get_footer(); ?>
