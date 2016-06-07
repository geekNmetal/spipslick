<?php

/**
 * Fichier gérant l'installation et désinstallation du plugin SPIP Slick
 *
 * @plugin     SPIP Slick
 * @copyright  2015
 * @author     Sébastien Leroy
 * @licence    GNU/GPL v3
 * @package    SPIP\Spipslick\Installation
 */
if (!defined('_ECRIRE_INC_VERSION'))
    return;

/**
 * Fonction d'installation et de mise à jour du plugin SPIP Slick.
 *
 * Vous pouvez :
 *
 * - créer la structure SQL,
 * - insérer du pre-contenu,
 * - installer des valeurs de configuration,
 * - mettre à jour la structure SQL 
 *
 * @param string $nom_meta_base_version
 *     Nom de la meta informant de la version du schéma de données du plugin installé dans SPIP
 * @param string $version_cible
 *     Version du schéma de données dans ce plugin (déclaré dans paquet.xml)
 * @return void
 * */
function spipslick_upgrade($nom_meta_base_version, $version_cible) {
    $maj = array();
    # quelques exemples
    # (que vous pouvez supprimer !)
    # 
    # $maj['create'] = array(array('creer_base'));
    #
	# include_spip('inc/config')
    # $maj['create'] = array(
    #	array('maj_tables', array('spip_xx', 'spip_xx_liens')),
    #	array('ecrire_config', array('spipslick', array('exemple' => "Texte de l'exemple")))
    #);
    #
	# $maj['1.1.0']  = array(array('sql_alter','TABLE spip_xx RENAME TO spip_yy'));
    # $maj['1.2.0']  = array(array('sql_alter','TABLE spip_xx DROP COLUMN id_auteur'));
    # $maj['1.3.0']  = array(
    #	array('sql_alter','TABLE spip_xx CHANGE numero numero int(11) default 0 NOT NULL'),
    #	array('sql_alter','TABLE spip_xx CHANGE texte petit_texte mediumtext NOT NULL default \'\''),
    # );
    # ...
    
    
    // On ajoute la saisie selecteur_rubrique_article `Objets éditoriaux` via cextras.
    // Pas trouvé le moyen de faire fonctionner cette saisie correctement directement avec la balise #SAISIE
    $sel_rub_art = array(
        array(
            'options' => array(
                'nom' => 'rubart',
                'label' => 'Objets éditoriaux',
                'explication' => 'Ajouter des articles et/ou des rubriques',
                'multiple' => 'on',
                'restrictions' => array(
                    'voir' => array('auteur' => ''),
                    'modifier' => array('auteur' => '')
                ),
                'sql' => 'text DEFAULT \'\' NOT NULL',
                'rechercher_ponderation' => '0'
            ),
            'identifiant' => '@5619268a8898b',
            'saisie' => 'selecteur_rubrique_article'
        )
    );

    // On définit les paramètres par défaut des sliders
    $config_slider_defaut = array(
        'largeur' => 1200,
        'hauteur' => 600,
        
        'lg_breakpoint' => 1200,
        'lg_accessibility' => 'true',
        'lg_adaptiveheight' => 'false',
        'lg_autoplay' => 'true',
        'lg_autoplayspeed' => 3000,
        'lg_slidestoshow' => 1,
        'lg_slidestoscroll' => 1,
        'lg_centermode' => 'false',
        'lg_fade' => 'false',
        'lg_vertical' => 'false',
        'lg_speed' => 300,
        'lg_arrows' => 'false',
        'lg_dots' => 'true',
        'lg_pauseondotshover' => 'true',

        'md_breakpoint' => 992,
        'md_accessibility' => 'true',
        'md_adaptiveheight' => 'false',
        'md_autoplay' => 'true',
        'md_autoplayspeed' => 3000,
        'md_slidestoshow' => 1,
        'md_slidestoscroll' => 1,
        'md_centermode' => 'false',
        'md_fade' => 'false',
        'md_vertical' => 'false',
        'md_speed' => 300,
        'md_arrows' => 'false',
        'md_dots' => 'true',
        'md_pauseondotshover' => 'true',

        'sm_breakpoint' => 768,
        'sm_accessibility' => 'true',
        'sm_adaptiveheight' => 'false',
        'sm_autoplay' => 'true',
        'sm_autoplayspeed' => 3000,
        'sm_slidestoshow' => 1,
        'sm_slidestoscroll' => 1,
        'sm_centermode' => 'false',
        'sm_fade' => 'false',
        'sm_vertical' => 'false',
        'sm_speed' => 300,
        'sm_arrows' => 'false',
        'sm_dots' => 'true',
        'sm_pauseondotshover' => 'true',

        'xs_accessibility' => 'true',
        'xs_adaptiveheight' => 'false',
        'xs_autoplay' => 'true',
        'xs_autoplayspeed' => 3000,
        'xs_slidestoshow' => 1,
        'xs_slidestoscroll' => 1,
        'xs_centermode' => 'false',
        'xs_fade' => 'false',
        'xs_vertical' => 'false',
        'xs_speed' => 300,
        'xs_arrows' => 'false',
        'xs_dots' => 'true',
        'xs_pauseondotshover' => 'true',
        );


    $maj['create'] = array(
        array('maj_tables', array('spip_sliders')),
        array('ecrire_meta', 'champs_extras_spip_sliders', serialize($sel_rub_art)),
        array('ecrire_meta', 'spipslick', serialize($config_slider_defaut)),
    );
    $maj['1.4.0']  = array(
        array('ecrire_meta', 'spipslick', serialize($config_slider_defaut)),
    );
    include_spip('base/upgrade');
    maj_plugin($nom_meta_base_version, $version_cible, $maj);

}

/**
 * Fonction de désinstallation du plugin SPIP Slick.
 * 
 * Vous devez :
 *
 * - nettoyer toutes les données ajoutées par le plugin et son utilisation
 * - supprimer les tables et les champs créés par le plugin. 
 *
 * @param string $nom_meta_base_version
 *     Nom de la meta informant de la version du schéma de données du plugin installé dans SPIP
 * @return void
 * */
function spipslick_vider_tables($nom_meta_base_version) {
    # quelques exemples
    # (que vous pouvez supprimer !)
    # sql_drop_table("spip_xx");
    # sql_drop_table("spip_xx_liens");

    sql_drop_table("spip_sliders");

    # Nettoyer les versionnages et forums
    sql_delete("spip_versions", sql_in("objet", array('slider')));
    sql_delete("spip_documents_liens", sql_in("objet", array('slider')));
    sql_delete("spip_versions_fragments", sql_in("objet", array('slider')));
    sql_delete("spip_forum", sql_in("objet", array('slider')));

    # Nettoyer les metas
    effacer_meta('spipslick');
    effacer_meta($nom_meta_base_version);
}

?>