<?php 
    get_header();
?>

<main>
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6 ">
            <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
                <h1 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Projets</h1>
            </div> 
            <div class="grid gap-8 mb-6 lg:mb-16 md:grid-cols-2">
                <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : ?>
                        <?php the_post(); ?>
                        <?php 
                            $postId = get_the_ID(); 
                        ?>
                        <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                            <a href="<?php echo get_the_permalink(); ?>">
                                <div class="w-40">
                                    <?php echo get_the_post_thumbnail($postId, 'post-thumbnail', ['class' => 'rounded-lg sm:rounded-none sm:rounded-l-lg']); ?>
                                </div>
                            </a>
                            <div class="p-5">
                                <h2 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    <a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a>
                                </h2>
                                <?php $types = get_the_terms($postId,'type'); ?>
                                <ul class="flex flex-row gap-2">
                                    <?php foreach($types as $type): ?>
                                        <li class="text-sm leading-6 text-slate-600 md:order-first md:rounded-full md:px-2 md:text-xs md:font-semibold md:leading-7 md:bg-slate-100 md:text-slate-500 md:group-hover:bg-slate-200"><?php echo $type->name; ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>    
                    <?php endwhile; ?>
                <?php endif; ?> 
            </div>  
        </div>
    </section>
</main>

<?php get_footer(); ?>
