<section id="missions" class="bg-lightgrey nopadding">
    <header class="section-header container">
        <h3 class="section-title font-title"><?php the_field('block_grid_title');?> </h3>
        <p class="section-subtitle"><?php the_field('block_grid_subtitle');?> </p>
    </header>
    <div class="mission-grid container">
    <?php
    // Check rows existexists.
    if( have_rows('block_grid_item') ):
        // Loop through rows.
        while( have_rows('block_grid_item') ) : the_row();

            // Load sub field value.
            $icon = get_sub_field('blocks_grid_item_icon');
            $title = get_sub_field('block_grid_item_title');
            $text = get_sub_field('block_grid_item_text');
            $cta_text = get_sub_field('block_grid_item_cta_text');
            $cta_url = get_sub_field('block_grid_item_cta_url');
            // Do something...
            ?>
            <div class="card mission-grid-item block-icon-and-text shadow">
                <img src="<?= $icon['url'];?>" alt="<?= $icon['alt'];?>" class="item-icon">
                <h4 class="item-title font-cond"><?= $title; ?> </h4>
                <div class="item-text"><?= $text; ?></div>
            </div>
    <?php
        endwhile;
    endif;
    ?>
    </div>
</section>