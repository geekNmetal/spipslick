<?php

/**
 * Déclarations relatives à la base de données
 *
 * @plugin     SPIP Slick
 * @copyright  2015
 * @author     Sébastien Leroy
 * @licence    GNU/GPL v3
 * @package    SPIP\Spipslick\Pipelines
 */
if (!defined('_ECRIRE_INC_VERSION'))
    return;

/**
 * Déclaration des alias de tables et filtres automatiques de champs
 *
 * @pipeline declarer_tables_interfaces
 * @param array $interfaces
 *     Déclarations d'interface pour le compilateur
 * @return array
 *     Déclarations d'interface pour le compilateur
 */
function spipslick_declarer_tables_interfaces($interfaces) {

    $interfaces['table_des_tables']['sliders'] = 'sliders';

    return $interfaces;
}

/**
 * Déclaration des objets éditoriaux
 *
 * @pipeline declarer_tables_objets_sql
 * @param array $tables
 *     Description des tables
 * @return array
 *     Description complétée des tables
 */
function spipslick_declarer_tables_objets_sql($tables) {

    $tables['spip_sliders'] = ['type' => 'slider',
        'principale' => "oui",
        'field' => array(
            "id_slider" => "bigint(21) NOT NULL",
            "titre" => "text NOT NULL",
            "rubart" => "longtext NOT NULL",
            "selection" => "longtext NOT NULL",
            "largeur" => "int(4) NOT NULL",
            "hauteur" => "int(4) NOT NULL",
            
            "lg_breakpoint" => "int(4) NOT NULL",
            "lg_accessibility" => "varchar(5) NOT NULL",
            "lg_adaptiveheight" => "varchar(5) NOT NULL",
            "lg_autoplay" => "varchar(5) NOT NULL",
            "lg_autoplayspeed" => "int(6) NOT NULL",
            "lg_arrows" => "varchar(5) NOT NULL",
            "lg_centermode" => "varchar(5) NOT NULL",
            "lg_dots" => "varchar(5) NOT NULL",
            "lg_pauseondotshover" => "varchar(5) NOT NULL",
            "lg_fade" => "varchar(5) NOT NULL",
            "lg_infinite" => "varchar(5) NOT NULL",
            "lg_pauseonhover" => "varchar(5) NOT NULL",
            "lg_slidestoshow" => "int(2) NOT NULL",
            "lg_slidestoscroll" => "int(2) NOT NULL",
            "lg_speed" => "int(6) NOT NULL",
            "lg_vertical" => "varchar(5) NOT NULL",
            
            "md_breakpoint" => "int(4) NOT NULL",
            "md_accessibility" => "varchar(5) NOT NULL",
            "md_adaptiveheight" => "varchar(5) NOT NULL",
            "md_autoplay" => "varchar(5) NOT NULL",
            "md_autoplayspeed" => "int(6) NOT NULL",
            "md_arrows" => "varchar(5) NOT NULL",
            "md_centermode" => "varchar(5) NOT NULL",
            "md_dots" => "varchar(5) NOT NULL",
            "md_pauseondotshover" => "varchar(5) NOT NULL",
            "md_fade" => "varchar(5) NOT NULL",
            "md_infinite" => "varchar(5) NOT NULL",
            "md_pauseonhover" => "varchar(5) NOT NULL",
            "md_slidestoshow" => "int(2) NOT NULL",
            "md_slidestoscroll" => "int(2) NOT NULL",
            "md_speed" => "int(6) NOT NULL",
            "md_vertical" => "varchar(5) NOT NULL",
            
            "sm_breakpoint" => "int(4) NOT NULL",
            "sm_accessibility" => "varchar(5) NOT NULL",
            "sm_adaptiveheight" => "varchar(5) NOT NULL",
            "sm_autoplay" => "varchar(5) NOT NULL",
            "sm_autoplayspeed" => "int(6) NOT NULL",
            "sm_arrows" => "varchar(5) NOT NULL",
            "sm_centermode" => "varchar(5) NOT NULL",
            "sm_dots" => "varchar(5) NOT NULL",
            "sm_pauseondotshover" => "varchar(5) NOT NULL",
            "sm_fade" => "varchar(5) NOT NULL",
            "sm_infinite" => "varchar(5) NOT NULL",
            "sm_pauseonhover" => "varchar(5) NOT NULL",
            "sm_slidestoshow" => "int(2) NOT NULL",
            "sm_slidestoscroll" => "int(2) NOT NULL",
            "sm_speed" => "int(6) NOT NULL",
            "sm_vertical" => "varchar(5) NOT NULL",
            
            "xs_accessibility" => "varchar(5) NOT NULL",
            "xs_adaptiveheight" => "varchar(5) NOT NULL",
            "xs_autoplay" => "varchar(5) NOT NULL",
            "xs_autoplayspeed" => "int(6) NOT NULL",
            "xs_arrows" => "varchar(5) NOT NULL",
            "xs_centermode" => "varchar(5) NOT NULL",
            "xs_dots" => "varchar(5) NOT NULL",
            "xs_pauseondotshover" => "varchar(5) NOT NULL",
            "xs_fade" => "varchar(5) NOT NULL",
            "xs_infinite" => "varchar(5) NOT NULL",
            "xs_pauseonhover" => "varchar(5) NOT NULL",
            "xs_slidestoshow" => "int(2) NOT NULL",
            "xs_slidestoscroll" => "int(2) NOT NULL",
            "xs_speed" => "int(6) NOT NULL",
            "xs_vertical" => "varchar(5) NOT NULL",
            
            
            
            "maj" => "TIMESTAMP"
        ),
        'key' => array(
            "PRIMARY KEY" => "id_slider",
        ),
        'titre' => "titre AS titre, '' AS lang",
        #'date' => "",
        'champs_editables' => array(
            'titre',
            'rubart', 
            'selection', 
            'largeur',
            'hauteur',
            
            'lg_breakpoint',
            'lg_accessibility',
            'lg_adaptiveheight',
            'lg_autoplay',
            'lg_autoplayspeed',
            'lg_arrows',
            'lg_centermode',
            'lg_dots',
            'lg_pauseondotshover',
            'lg_fade',
            'lg_infinite',
            'lg_pauseonhover',
            'lg_slidestoshow',
            'lg_slidestoscroll',
            'lg_speed',
            'lg_vertical',
            
            'md_breakpoint',
            'md_accessibility',
            'md_adaptiveheight',
            'md_autoplay',
            'md_autoplayspeed',
            'md_arrows',
            'md_centermode',
            'md_dots',
            'md_pauseondotshover',
            'md_fade',
            'md_infinite',
            'md_pauseonhover',
            'md_slidestoshow',
            'md_slidestoscroll',
            'md_speed',
            'md_vertical',
            
            'sm_breakpoint',
            'sm_accessibility',
            'sm_adaptiveheight',
            'sm_autoplay',
            'sm_autoplayspeed',
            'sm_arrows',
            'sm_centermode',
            'sm_dots',
            'sm_pauseondotshover',
            'sm_fade',
            'sm_infinite',
            'sm_pauseonhover',
            'sm_slidestoshow',
            'sm_slidestoscroll',
            'sm_speed',
            'sm_vertical',
            
            'xs_accessibility',
            'xs_adaptiveheight',
            'xs_autoplay',
            'xs_autoplayspeed',
            'xs_arrows',
            'xs_centermode',
            'xs_dots',
            'xs_pauseondotshover',
            'xs_fade',
            'xs_infinite',
            'xs_pauseonhover',
            'xs_slidestoshow',
            'xs_slidestoscroll',
            'xs_speed',
            'xs_vertical'),
        'champs_versionnes' => array('titre'),
        'rechercher_champs' => array(),
        'tables_jointures' => array(),
        ];

    return $tables;
}

?>