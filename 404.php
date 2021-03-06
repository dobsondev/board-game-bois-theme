<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package bgb
 */

get_header(); ?>

  <div id="404-primary" class="site-primary">
    <div class="grid-container">
      <div class="grid-x grid-padding-x">

        <main id="404-main" class="site-main small-12 large-8 cell" role="main">

          <section class="error-404 not-found">
            <header class="page-header">
              <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'bgb' ); ?></h1>
            </header><!-- .page-header -->

            <div class="page-content">
              <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'bgb' ); ?></p>

              <?php get_search_form(); ?>

              <?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

              <?php if ( is_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
              <div class="widget widget_categories">
                <h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'bgb' ); ?></h2>
                <ul>
                <?php
                  wp_list_categories( array(
                    'orderby'    => 'count',
                    'order'      => 'DESC',
                    'show_count' => 1,
                    'title_li'   => '',
                    'number'     => 10,
                  ) );
                ?>
                </ul>
              </div><!-- .widget -->
              <?php endif; ?>

              <?php
                /* translators: %1$s: smiley */
                $archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'bgb' ), convert_smilies( ':)' ) ) . '</p>';
                the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
              ?>

              <?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>

            </div><!-- .page-content -->
          </section><!-- .error-404 -->

        </main><!-- #404-main -->
        <?php get_sidebar(); ?>

      </div><!-- .grid-x grid-padding-x -->
    </div><!-- .grid-container -->
  </div><!-- #404-primary -->

<?php get_footer(); ?>
