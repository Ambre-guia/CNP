<?php $events = tribe_get_events([
    'posts_per_page' => 5,
    'start_date' => 'now',
]); ?>
<section class="bg-lightgrey nopadding">
    <div class="agenda-ticker-wrapper">
        <div class="agenda-ticker-controls">
            <button class="agenda-ticker-prev">
                <i class="fa-solid fa-arrow-left"></i>
            </button>
            <button class="agenda-ticker-next">
                <i class="fa-solid fa-arrow-right"></i>
            </button>
        </div>
        <div class="container nopadding">
            <div class="agenda-slider">
                <?php foreach ($events as $event) :  ?>
                    <div class="agenda-slider-item-wrapper ">
                        <article class="agenda-slider-item shadow">
                            <span class="item-date font-cond orange center">
                                <span class="item-date-day"><?= tribe_get_start_date($event, false, 'j'); ?></span>
                                <span class="item-date-month"><?= tribe_get_start_date($event, false, 'M'); ?></span>
                                <span class="item-date-year"><?= tribe_get_start_date($event, false, 'Y'); ?></span>
                            </span>
                            <div class="item-content">
                                <div class="detail-info">
                                    <h3 class="item-title font-cond"><?= $event->post_title; ?></h3>
                                    <p class=""><?= $event->post_excerpt; ?></p>
                                </div>
                            </div>
                            <a href="<?= tribe_get_event_link($event->ID, false); ?>" class="item-cta btn btn-orange-secondary">En savoir plus</a>
                        </article>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>