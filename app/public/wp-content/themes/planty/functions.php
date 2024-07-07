<?php

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}

/* shortcodes */

add_shortcode('vignette-titre', 'vignette_titre_func');

function vignette_titre_func($atts){

    $atts = shortcode_atts(array(
        'src' => "",
        'titre' => 'Titre'
    ), $atts, 'vignette-titre');

    ob_start();

    if ($atts['src'] != ""){
        ?>

        <div class="vignette-titre" style="background-image: url(<?= $atts['src'] ?>)">
            <h2 class="titre"><?= $atts['titre'] ?></h2>
    </div>

    <?php

    }

    $output = ob_get_contents();
    ob_end_clean();

    return $output;

}

if (is_user_logged_in()) {
    add_filter('wp_nav_menu_items', 'ajout_element_menu', 10, 2);
}

function ajout_element_menu($items, $args) {
    if ($args->theme_location == 'topbar_menu') {
        $admin = get_admin_url();
        $admin_item = "<li class='menu-item' id='menu-item-21'><a href='{$admin}'>Admin</a></li>";

        // Convertir les éléments de menu en tableau
        $menu_items = explode('</li>', $items);

        // Retirer l'élément vide éventuel à la fin du tableau
        array_pop($menu_items);

        // Insérer l'élément "Admin" à la position souhaitée (par exemple, après le 2ème élément)
        $position = 1; // Changez ce nombre en fonction de la position souhaitée
        array_splice($menu_items, $position, 0, $admin_item);

        // Reconstruire les éléments de menu en chaîne de caractères
        $items = implode('</li>', $menu_items) . '</li>';
    }
    return $items;
}