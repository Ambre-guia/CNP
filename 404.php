<?php get_header(); ?>
    <div class="layout container" style="padding:3em 0">
            <div class="center">   
                <?php $keyv = get_field('site_key_visual', 'option');?>
                <img src="<?= $keyv['url'];?>" alt="" style="max-width:450px">
            </div>
            <h1 class="page-title center red" style="font-size:5em;margin:0">404</h1>
            <h2 class="section-title center">La page que vous recherchez n'existe plus</h2>
            <div class="font-cond center">
                <a href="/" class="btn btn-orange">Retourner à l'accueil</a>
            </div>
    </div>
<?php get_footer(); ?>