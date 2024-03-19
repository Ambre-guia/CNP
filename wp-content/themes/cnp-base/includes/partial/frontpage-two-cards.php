<section id="espace" class="bg-lightgrey">
    <div class="container d-flex block_grid">
    <?php
            // Check rows existexists.
            if( have_rows('block_grid_card') ):
                // Loop through rows.
                while( have_rows('block_grid_card') ) : the_row();
                // Load sub field value.
                $image = get_sub_field('block_grid_card_img');
                $title = get_sub_field('block_grid_card__title');
                $text = get_sub_field('block_grid_card__text');
                $cta_text = get_sub_field('block_grid_card_cta_text');
                $cta_url = get_sub_field('block_grid_card_cta_url');
                // Do something...
    ?>
        <div class="block_grid_card d-flex align-center shadow">
            <img class="item-image" src="<?= $image['url'];?>" alt="">
            <div class="item-content">
                <h3 class="item-title"><?= $title; ?></h3>
                <p class="item-text"><?= $text; ?></p>
                <p class="right">                
                    <a href="<?= $cta_url; ?>" class="btn btn-orange"><?= $cta_text; ?></a>
                </p>
            </div>
        </div>
        <?php
            endwhile;
        endif;
        ?>             
    </div>
</section>