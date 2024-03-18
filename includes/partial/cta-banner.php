<?php
        $banner = get_field('banner_img');
        $banner_square = get_field('banner_img_square');
        if( $banner ) :
            if( !($banner_square) ) {
                $banner_square = $banner;
            }
        ?>
        <section id="banner" class="bg-lightgrey">
        <div class="container">
            <a href="#">
                <picture >
                    <source srcset="<?=$banner['url']?>" media="(min-width:768px)">
                    <img src="<?=$banner_square['url']?>" alt="" >
                </picture>
            </a>
        </section>  
        <?php
        endif;
        ?>
        </div>