<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <?php wp_head(); ?>

    </head>

    <body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <header>
        <div id="plantyHeader">
            <legend id="logoPlanty">
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo home_url(); ?>/wp-content/uploads/2024/07/Logo_Planty.svg" alt="Logo Planty">
                </a>
            </legend>

            <nav class="navBar">
                <?php 
                wp_nav_menu(array('theme_location' => 'topbar_menu'));             
                ?>
            </nav>
        </div>     
    </header>   
