<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package MMI_TD
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();
        ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    
                    <h1 class="entry-title text-3xl font-bold underline"><?php echo get_the_title(); ?></h1>

                    <?php  if ( 'post' === get_post_type() ) : ?>
                        <div class="entry-meta">
                            <?php
                            mmi_td_posted_on();
                            mmi_td_posted_by();
                            ?>
                        </div><!-- .entry-meta -->
                    <?php endif; ?>
                </header><!-- .entry-header -->

                <?php mmi_td_post_thumbnail(); ?>

                <div class="entry-content">
                    <?php the_content(); ?>
                </div><!-- .entry-content -->

                <footer class="entry-footer">
                    <?php //mmi_td_entry_footer(); ?>
                </footer><!-- .entry-footer -->
            </article><!-- #post-<?php the_ID(); ?> -->

        <?php endwhile; // End of the loop. ?>

	</main><!-- #main -->

<?php
get_footer();
