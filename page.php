<?php 
    get_header();
    the_post();
?>

<main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
    <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
        <article class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
            <header class="mb-4 lg:mb-6 not-format">
                <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white"><?php echo get_the_title(); ?></h1>
            </header>
            <main>
                <?php echo get_the_content(); ?>
            </main>
        </article>
    </div>
</main>

<?php get_footer(); ?>