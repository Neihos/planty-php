<?php

//cette ligne active la fonction pour récupérer les styles des thémes parent et enfant
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

//cette fonction enregistre et charge les styles des thémes parents et enfants
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}


function ajouter_element_menu_admin($items, $args) {
    // Vérifier si l'utilisateur est connecté et si le menu est celui de la topbar
    if (is_user_logged_in() && $args->theme_location == 'topbar_menu') {
        // Créer le nouvel élément de menu "Admin"
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

// Ajouter la fonction au hook wp_nav_menu_items si l'utilisateur est connecté
if (is_user_logged_in()) {
    add_filter('wp_nav_menu_items', 'ajouter_element_menu_admin', 10, 2);
}

/***************************/
/**------shortcodes-------**/
/***************************/

// Ajouter le shortcode 'vignette-titre' et lui associer la fonction 'vignette_titre_func'
add_shortcode('vignette-titre', 'vignette_titre_func');

function vignette_titre_func($atts){
// Définir les attributs par défaut et les fusionner avec les attributs fournis

    $atts = shortcode_atts(array(
        'src' => "",
        'titre' => 'Titre'
    ), $atts, 'vignette-titre');

    //commence la mise en mémoire des informations
    ob_start();

    // Vérifier si l'attribut 'src' n'est pas vide et applique la condition
    if ($atts['src'] != ""){
        ?>

        <div class="vignette-titre" style="background-image: url(<?= $atts['src'] ?>)">
            <h2 class="titre"><?= $atts['titre'] ?></h2>
    </div>

    <?php

    }

    //Récupére les infos mise en mémoire tampon
    $output = ob_get_contents();
    //arrête la mise en mémoire tampon
    ob_end_clean();

    //retourne le html complété
    return $output;

}