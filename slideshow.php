<section id="slideshow">
    <?php // query_posts('category_name=prueba'); ?>
    <?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>

        <div class="slide">
       <div class="thumb">
            <a href="<?php the_permalink(); ?>">
                <?php if ( has_post_thumbnail() ) { the_post_thumbnail('slider_thumbs' ); } ?>
            </a>
        </div>
        <article>
            <hgroup><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></hgroup>
                        <div class="date"><?php the_date(); ?> en <span style="display:inline-block"><?php the_category(); ?></span></div>
                                <div class="extract">
                                    <?php the_excerpt(); ?>
                                </div>
        </article>
        </div>

    <?php endwhile; else: ?>
    <h2>No se encontraron articulos</h2>
    <?php endif; ?>
                    
</section>