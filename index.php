<?php get_header(); ?>

<nav id="site-navigation" class="main-navigation">
    <div class="close_open_btn">
        <div class="close_open btn_close active">
            <ion-icon name="close-outline"></ion-icon>
        </div>
        <div class="close_open btn_open">
            <ion-icon name="menu-outline"></ion-icon>
        </div>
        <p class="menu_text">
            MENU
        </p>
    </div>
    <div class="menu_container">
        <div class="menu_1">
        <?php
    wp_nav_menu(array(
        'theme_location' => 'primary-menu',
        'menu_id' => 'primary-menu',
        'container' => false, // Remove the menu container
    ));
    ?>
        </div>
        <div class="menu_2">
        <?php
    wp_nav_menu(array(
        'theme_location' => 'second_main_menu',
        'menu_id' => 'second_main_menu',
    ));
    ?>
        </div>
    </div>
</nav>

<?php get_footer(); ?>