<?php
/**
 * Just displays a post loop. Intended to be included in child themes using get_template_part('loop'). Also works with SiteOrigin page builder loop widget.
 *
 * Loop Name: Blog Loop
 *
 * @package WordPress
 * @subpackage AroseDesign
 * @license AroseDesign 1.0
 */
?>
<?php if ( have_posts() ) : ?>

    <?php while ( have_posts() ) : the_post(); ?>

        <h1><a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <div class="apertura"><?php the_post_thumbnail(); ?></div>
        <p class="abstract"><?php the_excerpt(); ?></p>
        <div class="tags"><?php the_tags('',', ',''); ?></div>

    <?php endwhile; ?>

<?php endif ?>