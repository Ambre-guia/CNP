<section id="actualites" class="bg-lightgrey">
    <div class="section-title font-title">Dernières actualités</div>
    <div class="container slider-container">
        <div class="news-slider">
            <?php
            // the query
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 6
            );
            $the_query = new WP_Query($args); ?>

            <?php if ($the_query->have_posts()) : ?>

                <!-- pagination here -->

                <!-- the loop -->
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div>
                        <article class="card card-news d-flex justify-between shadow">
                            <?php the_post_thumbnail(); ?>
                            <div class="item-content">
                                <span class="item-meta">Le <?php echo get_the_date('d F Y'); ?> dans <span class=""><?php the_category('&bull;'); ?></span></span>
                                <h3 class="item-title font-cond"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <div class="item-excerpt">
                                    <?php the_excerpt(); ?>
                                </div>
                                <div class="d-flex justify-end">
                                    <a href="<?php the_permalink(); ?>" class="readmorelink">Lire la suite</a>
                                </div>
                            </div>
                        </article>
                    </div>
                <?php endwhile; ?>
                <!-- end of the loop -->

                <!-- pagination here -->

                <?php wp_reset_postdata(); ?>

            <?php else : ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>





        </div>
    </div>
</section>