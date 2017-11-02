<?php
/**
 *
 * Loop Name: LoopArticolo
 *
 * @package WordPress
 * @subpackage AroseDesign
 * @license AroseDesign 1.0
 */
?>
<?php if ( have_posts() ) : ?>

    <style>
        .entry-content .loop.bloccoloop {
            width: 48%;
            display: inline-block;
            vertical-align: top;
            margin-right: 2%;
            margin-bottom: 10px;
        }
        .entry-content .loop.bloccoloop:nth-child(odd) {
            margin: 0;
        }
        .entry-content .loop .apertura {
            max-height: 150px;
            overflow: hidden;
            background: #C7152F;
        }
        .entry-content .loop .apertura img:hover {
            opacity: 0.8;
            filter: alpha(opacity=80);
        }
        .entry-content .loop h2.title {
            font-size: 20px;
        }
        .entry-content .loop h2.title {
            font-size: 18px;
            font-family: 'Source Sans Pro',sans-serif;
            font-weight: 900;
            text-transform: uppercase;
        }
        .entry-content .loop.bloccoloop .bloccoinfo h2.title a {
            text-decoration: none !important;
        }
    </style>


    <?php while ( have_posts() ) : the_post(); ?>

        <div class="loop bloccoloop">

            <div class="apertura"><a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
            <div class="bloccoinfo">
                <h2 class="title"><a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            </div>

        </div>

    <?php endwhile; ?>

<?php endif ?>