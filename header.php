<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
<header>
    <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <a href="https://flowbite.com" class="flex items-center">
                <img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo" />
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
            </a>
            <div class="flex items-center lg:order-2">
                <?php
                    
                    wp_nav_menu(
                        array(
                            'theme_location' => 'header-secondary-menu',
                            'menu_id' => 'secondary-nav',
                            'container' => 'ul',
                            'menu_class' => 'flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0',
                        )
                    );

                ?>
            </div>
            <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                <?php
                
                    wp_nav_menu(
                        array(
                            'theme_location' => 'header-primary-menu',
                            'menu_id' => 'primary-nav',
                            'container' => 'ul',
                            'menu_class' => 'flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0',
                        )
                    );

                ?>
            </div>
        </div>
    </nav>
</header>

    