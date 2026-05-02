<?php
    $args = array(
        'post_type' => 'characters',
        'posts_per_page' => -1,
        'meta_key'  => '_main_char_field',
        'orderby'   => 'meta_value_num',

    );
    $characters_query = new WP_Query($args);
?>

<article id="characters">
    <div class="characters">
        <h3 class="reveal-title characters-title">Les personnages</h3>
        
        <?php if ( $characters_query->have_posts() ) : ?>

            <!-- Slider main container -->
            <div class="swiper characters-swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    
                    <?php while ( $characters_query->have_posts() ) :
                        $characters_query->the_post(); ?>
                        <div class="swiper-slide">
                            <?php echo get_the_post_thumbnail( get_the_ID(), 'full' ); ?>
                            <figcaption><?php the_title(); ?></figcaption>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>

        <?php endif; ?>

        <?php wp_reset_postdata(); ?>

    </div>
</article>