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