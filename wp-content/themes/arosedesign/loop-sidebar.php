<?php
/**
 *
 * Loop Name: LoopSidebar
 *
 * @package WordPress
 * @subpackage AroseDesign
 * @license AroseDesign 1.0
 */
?>
<?php if ( have_posts() ) : ?>


    <?php while ( have_posts() ) : the_post(); ?>

        <div class="loop bloccoloop">

            <div class="sidebarloop">
                <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>">
                    <div class="thumb"><?php the_post_thumbnail(); ?></div>
                    <h3 class="title"><?php the_title(); ?></h3>
                </a>
            </div>
        </div>

    <?php endwhile; ?>

<?php endif ?>