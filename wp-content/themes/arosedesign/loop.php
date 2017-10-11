<?php
/**
 *
 * Loop Name: LoopHome
 *
 * @package WordPress
 * @subpackage AroseDesign
 * @license AroseDesign 1.0
 */
?>
<?php if ( have_posts() ) : ?>

    <script type="text/javascript">
        function Socialpopup(url) {
            var w = 500;
            var h = 360
            var left = (window.innerWidth / 2) - (w/2);
            var top =  (window.innerHeight / 2) - (h/2);
            window.open( url, "Condividi", "status = 1, height = " + h + ", width = " + w + ", top=" + top + ", left=" + left + ", resizable = 0" )
        }
    </script>

    <?php while ( have_posts() ) : the_post(); ?>

        <div class="loop bloccoloop">

            <div class="apertura"><a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
            <div class="bloccoinfo">
                <h1 class="title"><a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                <p class="abstract"><?php the_excerpt(); ?></p>


                <div class="sharer">
                    <a title="Facebook" href="javascript:Socialpopup('https://www.facebook.com/sharer/sharer.php?u=<?php urlencode(the_permalink()); ?>')"><i class="fa fa-facebook"></i></a>
                    <a title="Facebook" href="javascript:Socialpopup('http://twitter.com/share?text=<?php the_title(); ?>&url=<?php urlencode(the_permalink()); ?>moci')"><i class="fa fa-twitter"></i></a>
                </div>
                <div class="tags"><?php the_tags('',', ',''); ?></div>
            </div>

        </div>

    <?php endwhile; ?>

<?php endif ?>