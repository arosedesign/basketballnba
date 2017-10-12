<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ArosedesignTemplate
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

    <div class="wrap">

        <?php if ( have_posts() ) : ?>
            <header class="page-header">
                <?php
                the_archive_title( '<h1 class="page-title">', '</h1>' );
                the_archive_description( '<div class="taxonomy-description">', '</div>' );
                ?>
            </header><!-- .page-header -->
        <?php endif; ?>

        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">

                <?php
                if ( have_posts() ) : ?>
                    <?php
                    /* Start the Loop */
                    while ( have_posts() ) : the_post(); ?>

                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                            <div class="thumb">
                                <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail(); ?>
                                </a>
                            </div>

                            <div class="spiega">
                                <header class="entry-header">
                                    <?php if ( 'post' === get_post_type() ) : ?>
                                        <div class="entry-meta">
                                            <?php
                                            echo twentyseventeen_time_link();
                                            twentyseventeen_edit_link();
                                            ?>
                                        </div><!-- .entry-meta -->
                                    <?php elseif ( 'page' === get_post_type() && get_edit_post_link() ) : ?>
                                        <div class="entry-meta">
                                            <?php twentyseventeen_edit_link(); ?>
                                        </div><!-- .entry-meta -->
                                    <?php endif; ?>

                                    <?php if ( is_front_page() && ! is_home() ) {

                                        // The excerpt is being displayed within a front page section, so it's a lower hierarchy than h2.
                                        the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' );
                                    } else {
                                        the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
                                    } ?>
                                </header><!-- .entry-header -->

                                <div class="entry-summary">
                                    <?php the_excerpt(); ?>
                                </div><!-- .entry-summary -->
                            </div>


                        </article><!-- #post-## -->

                    <?php endwhile;

                    the_posts_pagination( array(
                        'prev_text' => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
                        'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
                    ) );

                else : ?>

                    <section class="no-results not-found">
                        <header class="page-header">
                            <h1 class="page-title"><?php _e( 'Nothing Found', 'twentyseventeen' ); ?></h1>
                        </header>
                        <div class="page-content">
                            <?php
                            if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

                                <p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'twentyseventeen' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

                            <?php else : ?>

                                <p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'twentyseventeen' ); ?></p>
                                <?php
                                get_search_form();

                            endif; ?>
                        </div><!-- .page-content -->
                    </section><!-- .no-results -->


                <?php endif; ?>

            </main><!-- #main -->
        </div><!-- #primary -->
        <?php get_sidebar(); ?>
    </div><!-- .wrap -->

<?php get_footer();
