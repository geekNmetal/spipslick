<?php

/**
 * Gestion du formulaire d'édition de slider
 *
 * @plugin     SPIP Slick
 * @copyright  2015
 * @author     Sébastien Leroy
 * @licence    GNU/GPL v3
 * @package    SPIP\Spipslick\Formulaires
 */
if (!defined('_ECRIRE_INC_VERSION'))
    return;

include_spip('inc/actions');
include_spip('inc/editer');

/**
 * Tableau des saisies
 */
function formulaires_editer_slider_saisies_dist() {
    include_spip('inc/spipslick_saisies');
    return spipslick_saisies();
}

function formulaires_editer_slider_dist() {
//    return lire_config('spipslick');
}

/**
 * Identifier le formulaire en faisant abstraction des paramètres qui ne représentent pas l'objet edité
 *
 * @param int|string $id_slider
 *     Identifiant du slider. 'new' pour un nouveau slider.
 * @param string $retour
 *     URL de redirection après le traitement
 * @param int $lier_trad
 *     Identifiant éventuel d'un slider source d'une traduction
 * @param string $config_fonc
 *     Nom de la fonction ajoutant des configurations particulières au formulaire
 * @param array $row
 *     Valeurs de la ligne SQL du slider, si connu
 * @param string $hidden
 *     Contenu HTML ajouté en même temps que les champs cachés du formulaire.
 * @return string
 *     Hash du formulaire
 */
function formulaires_editer_slider_identifier_dist($id_slider = 'new', $retour = '', $lier_trad = 0, $config_fonc = '', $row = array(), $hidden = '') {
    return serialize(array(intval($id_slider)));
}

/**
 * Chargement du formulaire d'édition de slider
 *
 * Déclarer les champs postés et y intégrer les valeurs par défaut
 *
 * @uses formulaires_editer_objet_charger()
 *
 * @param int|string $id_slider
 *     Identifiant du slider. 'new' pour un nouveau slider.
 * @param string $retour
 *     URL de redirection après le traitement
 * @param int $lier_trad
 *     Identifiant éventuel d'un slider source d'une traduction
 * @param string $config_fonc
 *     Nom de la fonction ajoutant des configurations particulières au formulaire
 * @param array $row
 *     Valeurs de la ligne SQL du slider, si connu
 * @param string $hidden
 *     Contenu HTML ajouté en même temps que les champs cachés du formulaire.
 * @return array
 *     Environnement du formulaire
 */
function formulaires_editer_slider_charger_dist($id_slider = 'new', $retour = '', $lier_trad = 0, $config_fonc = '', $row = array(), $hidden = '') {
    $valeurs = formulaires_editer_objet_charger('slider', $id_slider, '', $lier_trad, $retour, $config_fonc, $row, $hidden);
    return $valeurs;
}

/**
 * Vérifications du formulaire d'édition de slider
 *
 * Vérifier les champs postés et signaler d'éventuelles erreurs
 *
 * @uses formulaires_editer_objet_verifier()
 *
 * @param int|string $id_slider
 *     Identifiant du slider. 'new' pour un nouveau slider.
 * @param string $retour
 *     URL de redirection après le traitement
 * @param int $lier_trad
 *     Identifiant éventuel d'un slider source d'une traduction
 * @param string $config_fonc
 *     Nom de la fonction ajoutant des configurations particulières au formulaire
 * @param array $row
 *     Valeurs de la ligne SQL du slider, si connu
 * @param string $hidden
 *     Contenu HTML ajouté en même temps que les champs cachés du formulaire.
 * @return array
 *     Tableau des erreurs
 */
function formulaires_editer_slider_verifier_dist($id_slider = 'new', $retour = '', $lier_trad = 0, $config_fonc = '', $row = array(), $hidden = '') {

    return formulaires_editer_objet_verifier('slider', $id_slider);
}

/**
 * Traitement du formulaire d'édition de slider
 *
 * Traiter les champs postés
 *
 * @uses formulaires_editer_objet_traiter()
 *
 * @param int|string $id_slider
 *     Identifiant du slider. 'new' pour un nouveau slider.
 * @param string $retour
 *     URL de redirection après le traitement
 * @param int $lier_trad
 *     Identifiant éventuel d'un slider source d'une traduction
 * @param string $config_fonc
 *     Nom de la fonction ajoutant des configurations particulières au formulaire
 * @param array $row
 *     Valeurs de la ligne SQL du slider, si connu
 * @param string $hidden
 *     Contenu HTML ajouté en même temps que les champs cachés du formulaire.
 * @return array
 *     Retours des traitements
 */
function formulaires_editer_slider_traiter_dist($id_slider = 'new', $retour = '', $lier_trad = 0, $config_fonc = '', $row = array(), $hidden = '') {

    return formulaires_editer_objet_traiter('slider', $id_slider, '', $lier_trad, $retour, $config_fonc, $row, $hidden);
}

?>