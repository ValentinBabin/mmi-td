<?php 
    get_header();
    the_post();
    
    $postId = get_the_ID(); 
?>

<main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
    <section class="bg-white dark:bg-gray-900">
        <div class="items-center py-8 mx-auto max-w-screen-xl">
            <h1 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white"><?php echo get_the_title(); ?></h1>
            <div class="gap-4 lg:grid lg:grid-cols-12 lg:py-16">
                <div class="col-span-9 font-light text-gray-500 sm:text-lg dark:text-gray-400">
                    <?php echo get_the_content(); ?>
                </div>
                <div class="col-span-3 col-start-10 font-light text-gray-500 sm:text-lg dark:text-gray-400">
                    <div>
                        <?php echo get_the_post_thumbnail($postId); ?>
                    </div>
                    <p>Fonction : <?php echo get_field('function', $postId); ?></p>
                    <div>
                        <p>Compétences : </p>
                        <?php echo get_field('skills', $postId); ?>
                    </div>
                    <p>Linkedin : <?php echo get_field('linkedin_link', $postId); ?></p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
