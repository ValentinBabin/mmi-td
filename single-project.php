<?php 
    get_header();
    the_post();
    
    $postId = get_the_ID(); 
?>

<main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
    <section class="bg-white dark:bg-gray-900">
        <div class="items-center py-8 mx-auto max-w-screen-xl">
            <h1 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white"><?php echo get_the_title(); ?></h1>
            
            <?php $types = get_the_terms($postId,'type'); ?>
            <ul class="flex flex-row gap-2">
                <?php foreach($types as $type): ?>
                    <li class="text-sm leading-6 text-slate-600 md:order-first md:rounded-full md:px-2 md:text-xs md:font-semibold md:leading-7 md:bg-slate-100 md:text-slate-500 md:group-hover:bg-slate-200"><?php echo $type->name; ?></li>
                <?php endforeach; ?>
            </ul>
            
            <div class="py-4">
                <div class="w-20">
                    <?php echo get_the_post_thumbnail($postId); ?>
                </div>
                <div class="pt-4 font-light text-gray-500 sm:text-lg dark:text-gray-400">
                    <?php echo get_the_content(); ?>
                </div>
                
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
