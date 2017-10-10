<?php
/**
 *
 * Loop Name: AperturaHome
 *
 * @package WordPress
 * @subpackage AroseDesign
 * @license AroseDesign 1.0
 */
?>
<?php if ( have_posts() ) : ?>

    <?php while ( have_posts() ) : the_post(); ?>

    <script type="text/javascript">
        function Socialpopup(url) {
            var w = 500;
            var h = 360
            var left = (window.innerWidth / 2) - (w/2);
            var top =  (window.innerHeight / 2) - (h/2);
            window.open( url, "Condividi", "status = 1, height = " + h + ", width = " + w + ", top=" + top + ", left=" + left + ", resizable = 0" )
        }
    </script>

    <div id="apertura">

        <h1><a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <div class="apertura"><?php the_post_thumbnail(); ?></div>
        <p class="abstract"><?php the_excerpt(); ?></p>

        <?php
        $posttags = get_the_tags();
        if ($posttags) {
            foreach($posttags as $tag) {
                $array[] = $tag->name;
            }
        }
        $taglist = implode(",", $array);

        ?>


        <div class="sharer">
            <a title="Facebook" href="javascript:Socialpopup('https://www.facebook.com/sharer/sharer.php?u=<?php urlencode(the_permalink()); ?>')"><i class="fa fa-facebook"></i></a>
            <a title="Facebook" href="javascript:Socialpopup('http://twitter.com/share?text=<?php the_title(); ?>&url=<?php urlencode(the_permalink()); ?>')"><i class="fa fa-twitter"></i></a>
        </div>
        <div class="tags"><?php the_tags('',', ',''); ?></div>

    </div>

    <?php endwhile; ?>

<?php endif ?>