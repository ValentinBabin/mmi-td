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
                    
                    <h1 class="entry-title text-3xl font-bold underline">Objet: <?php echo get_the_title(); ?></h1>

                    <ul>
                        <?php
                            // Utilisation de get_the_ID() au lieu de the_ID() car get_the_ID() permet d'avoir la valeur sans fait l'affichage 
                            $terms = get_the_terms(get_the_ID(),'main_color');
                            foreach ($terms as $term): ?>
                                <li><?php echo $term->name; ?> </li> 
                            <?php endforeach;
                        ?>
                    </ul> 
                    
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
                    Contenu: <?php the_content(); ?>
                </div><!-- .entry-content -->

                <footer class="entry-footer">
                    <?php //mmi_td_entry_footer(); ?>
                </footer><!-- .entry-footer -->
            </article><!-- #post-<?php the_ID(); ?> -->

        <?php endwhile; // End of the loop. ?>

	</main><!-- #main -->

<?php
get_footer();
