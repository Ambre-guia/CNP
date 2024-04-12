<section id="partners" class="bg-lightgrey">
    <div class="section-title font-title">Composition du CNP</div>
    <div class="logo-gallery">
    <?php
        // Check rows existexists.
        if( have_rows('image_repeater') ):
            // Loop through rows.
            while( have_rows('image_repeater') ) : the_row();
                // Load sub field value.
                $image = get_sub_field('image_repeater_img');
                $link = "#";
                if(get_sub_field('image_repeater_url'))
                $link = get_sub_field('image_repeater_url');
                $target = "";

                if($link){
                    $link = $link['url'];
                    $target = "_blank";
                  
                }
                else
                $link="#";
                
                // Do something...
                ?>
        <span class="logo-item">
            <a href="<?= $link;?>" target="<?= $target;?>">
                <img src="<?= $image['url'];?>" alt="<?= $image['alt'];?>" class="item-icon" >
            </a>
        </span>
        <?php
            endwhile;
        endif;
        ?>
    </div>
</section>