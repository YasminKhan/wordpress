<ul class="blog_post">
    <!-- Start the Loop. -->
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php if ((function_exists('has_post_thumbnail')) && (has_post_thumbnail())) { ?>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('post_thumbnail', array('class' => 'postimg')); ?>
                    </a>
                    <?php
                } else {
                    echo inkthemes_main_image();
                }
                ?>
                <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link till <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                <?php
                printf(
                        _x('Publicerad %1$s i %2$s.', 'Time, Category', 'colorway'), get_the_time(get_option('date_format')), get_the_category_list(', ')
                );
                ?>
                <a href="<?php the_permalink() ?>"><?php the_excerpt("Fortsätt Läsa"); ?></a>
                <div class="clear"></div>
                <div class="tags">
                    <?php the_tags('Taggad i ', ', ', ''); ?>
                </div>
                <div class="clear"></div>
                <?php comments_popup_link('Inga Kommentarer.', '1 Kommentar.', '% Kommentarer.'); ?>
                 </li>
            <!-- End the Loop. -->
        <?php endwhile;
            else: ?>
        <li>
            <p> <?php echo ('Artikeln du sökte efter kan inte hittas.'); ?> </p>
        </li>
    <?php endif; ?>
</ul>
