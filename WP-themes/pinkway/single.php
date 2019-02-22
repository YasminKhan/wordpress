<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Colorway
 * @since Colorway 1.0
 */
get_header();
?>
<!--Start Content Grid-->
<div class="grid_24 content">
    <div  class="grid_16 alpha">
        <div class="content-wrap">
            <div class="content-info">
            <?php if (function_exists('inkthemes_breadcrumbs')) inkthemes_breadcrumbs(); ?>
            </div>
            <!--Start Blog Post-->
            <div class="blog">
                <ul class="single">
            <?php if (have_posts()) while (have_posts()) : the_post(); ?>
                            <li>
                                <h1><?php the_title(); ?></h1>
                                <p><?php
                                printf(
                                        _x('Publicerad %1$s i %2$s.', 'Time, Category', 'colorway'), get_the_time(get_option('date_format')), get_the_category_list(', ')
                                );
                                ?></p>
                                <div class="clear"></div>
                                <?php 
                                    if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                                        the_post_thumbnail();
                                    }
                                    ?>
                                <?php the_content(); ?>
                                <div class="clear"></div>
                                <div class="tags">
                                    <?php the_tags('Taggad i ', ', ', ''); ?>
                                </div>
                                <div class="clear"></div>
                                <?php wp_link_pages(array('before' => '<div class="page-link"><span>' . 'Sidor:' . '</span>', 'after' => '</div>')); ?>
                            <?php endwhile; ?>
                        <nav id="nav-single"> <span class="nav-previous">
                                <?php previous_post_link('%link', '<span class="meta-nav">&larr;</span> Tidigare artikel '); ?>
                            </span> <span class="nav-next">
                                <?php next_post_link('%link', 'Senare artikel <span class="meta-nav">&rarr;</span>'); ?>
                            </span> </nav>
                    </li>
                    <!-- End the Loop. -->          
                </ul>
            </div>
            <div class="hrline"></div>
            <!--End Blog Post-->
            <div class="clear"></div>
            <!--Start Comment Section-->
            <div class="comment_section">
                <!--Start Comment list-->
                <?php comments_template('', true); ?>
                <!--End Comment Form-->
            </div>
            <!--End comment Section-->
        </div>
    </div>
    <?php get_sidebar(); ?>
</div>
<div class="clear"></div>
<!--End Content Grid-->
</div>
<!--End Container Div-->
<?php get_footer(); ?>
