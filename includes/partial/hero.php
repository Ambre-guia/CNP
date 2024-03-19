<?php 
    $hero_type = get_field('hero_type');
    $hero_overlay = get_field('hero_overlay');
    $hero_title = get_field('hero_title');
    $hero_subtitle = get_field('hero_subtitle');
    $hero_cta_text = get_field('hero_cta_text');
    $hero_cta_url = get_field('hero_cta_url');
    $hero_image = get_field('hero_image');
    $is_absolute = get_field('is_absolute');
    $hero_background = get_field('hero_bg');

    $classes = "";
    if($hero_overlay)
    $classes=" overlay";
    
   
?>

    <section class="hero hero-jumbo <?=  $hero_type; ?> <?= $classes;?> " style="background-image:url(<?= $hero_background['url'] ?>);">
        <div class="container d-flex align-center">
            <div class="hero-content flex-1">
                <h2 class="hero-title font-title"><?= $hero_title; ?> </span></h2>
                <div class="hero-text">
                    <?= $hero_subtitle; ?>
                </div>
                <div class="hero-cta font-cond">
                    <a href="<?= $hero_cta_url; ?>" class="btn btn-orange"><?= $hero_cta_text; ?></a>
                </div>
            </div>
            <div class="hero-image d-flex">
                <img src="<?= $hero_image['url']; ?>" alt="<?php $hero_title; ?>"/>
            </div>
        </div>
    </section>