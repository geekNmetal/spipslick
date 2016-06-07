<?php

/**
 * Utilisations de pipelines par SPIP Slick
 *
 * @plugin     SPIP Slick
 * @copyright  2015
 * @author     Sébastien Leroy
 * @licence    GNU/GPL v3
 * @package    SPIP\Spipslick\Pipelines
 */
if (!defined('_ECRIRE_INC_VERSION'))
    return;


/*
 * Un fichier de pipelines permet de regrouper
 * les fonctions de branchement de votre plugin
 * sur des pipelines existants.
 */

function spipslick_header_prive_css($flux) {
    $flux .= '<link rel="stylesheet" href="' . find_in_path('css/spipslick_admin.css') . '" type="text/css" />';

    return $flux;
}

function spipslick_jqueryui_plugins($flux) {
    $flux[] = "jquery.ui.sortable";
    return $flux;
}

?>
