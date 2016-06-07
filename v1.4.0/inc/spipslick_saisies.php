<?php 
function spipslick_saisies(){
	$config = unserialize(lire_metas('meta')['spipslick']);

    $saisies = array(
        // Écran large
        array('saisie' => 'input',
            'options' => array(
                'nom' => 'lg_breakpoint',
                'explication' => _T('slider:champ_lg_breakpoint_explication'),
                'label' => _T('slider:champ_breakpoint_label'),
                'li_class' => 'lg',
                'defaut' => $config['lg_breakpoint']
            )
        ),
        array('saisie' => 'radio',
            'options' => array(
                'nom' => 'lg_accessibility',
                'explication' => _T('slider:champ_accessibility_explication'),
                'label' => _T('slider:champ_accessibility_label'),
                'li_class' => 'lg',
                'datas' => array(
                    'true' => 'oui',
                    'false' => 'non'
                ),
                'defaut' => $config['lg_accessibility']
            )
        ),
        array(
            'saisie' => 'radio',
            'options' => array(
                'nom' => 'lg_adaptiveheight',
                'label' => _T('slick:charger'),
                'explication' => _T('slider:champ_adaptiveheight_explication'),
                'label' => _T('slider:champ_adaptiveheight_label'),
                'li_class' => 'lg',
                'datas' => array(
                    'true' => 'oui',
                    'false' => 'non'
                ),
                'defaut' => $config['lg_adaptiveheight']
            )
        ),
        array(
            'saisie' => 'radio',
            'options' => array(
                'nom' => 'lg_autoplay',
                'explication' => _T('slider:champ_autoplay_explication'),
                'label' => _T('slider:champ_autoplay_label'),
                'li_class' => 'lg',
                'datas' => array(
                    'true' => 'oui',
                    'false' => 'non'
                ),
                'defaut' => $config['lg_autoplay']
            )
        ),
        array(
            'saisie' => 'input',
            'options' => array(
                'nom' => 'lg_autoplayspeed',
                'explication' => _T('slider:champ_autoplayspeed_explication'),
                'label' => _T('slider:champ_autoplayspeed_label'),
                'li_class' => 'lg',
                'defaut' => $config['lg_autoplayspeed'],
                'afficher_si' => '@lg_autoplay@=="true"'
            )
        ),
        array(
            'saisie' => 'input',
            'options' => array(
                'nom' => 'lg_slidestoshow',
                'explication' => _T('slider:champ_slidestoshow_explication'),
                'label' => _T('slider:champ_slidestoshow_label'),
                'li_class' => 'lg',
                'defaut' => $config['lg_slidestoshow']
            )
        ),
        array(
            'saisie' => 'input',
            'options' => array(
                'nom' => 'lg_slidestoscroll',
                'explication' => _T('slider:champ_slidestoscroll_explication'),
                'label' => _T('slider:champ_slidestoscroll_label'),
                'li_class' => 'lg',
                'defaut' => $config['lg_slidestoscroll']
            )
        ),
        array(
            'saisie' => 'radio',
            'options' => array(
                'nom' => 'lg_centermode',
                'explication' => _T('slider:champ_centermode_explication'),
                'label' => _T('slider:champ_centermode_label'),
                'li_class' => 'lg',
                'datas' => array(
                    'true' => 'oui',
                    'false' => 'non'
                ),
                'defaut' => $config['lg_centermode']
            )
        ),
        array(
            'saisie' => 'radio',
            'options' => array(
                'nom' => 'lg_fade',
                'explication' => _T('slider:champ_fade_explication'),
                'label' => _T('slider:champ_fade_label'),
                'li_class' => 'lg',
                'datas' => array(
                    'true' => 'Fondu',
                    'false' => 'Translation'
                ),
                'defaut' => $config['lg_fade'],
                'afficher_si' => '@lg_slidestoshow@=="1"'
            )
        ),
        array(
            'saisie' => 'radio',
            'options' => array(
                'nom' => 'lg_vertical',
                'explication' => _T('slider:champ_vertical_explication'),
                'label' => _T('slider:champ_vertical_label'),
                'li_class' => 'lg',
                'datas' => array(
                    'true' => 'Vertical',
                    'false' => 'Horizontal'
                ),
                'defaut' => $config['lg_vertical'],
                'afficher_si' => '@lg_fade@=="false"'
            )
        ),
        array(
            'saisie' => 'input',
            'options' => array(
                'nom' => 'lg_speed',
                'explication' => _T('slider:champ_speed_explication'),
                'label' => _T('slider:champ_speed_label'),
                'li_class' => 'lg',
                'defaut' => $config['lg_speed']
            )
        ),
        array(
            'saisie' => 'radio',
            'options' => array(
                'nom' => 'lg_arrows',
                'explication' => _T('slider:champ_arrows_explication'),
                'label' => _T('slider:champ_arrows_label'),
                'li_class' => 'lg',
                'datas' => array(
                    'true' => 'oui',
                    'false' => 'non'
                ),
                'defaut' => $config['lg_arrows']
            )
        ),
        array(
            'saisie' => 'radio',
            'options' => array(
                'nom' => 'lg_dots',
                'explication' => _T('slider:champ_dots_explication'),
                'label' => _T('slider:champ_dots_label'),
                'li_class' => 'lg',
                'datas' => array(
                    'true' => 'oui',
                    'false' => 'non'
                ),
                'defaut' => $config['lg_dots']
            )
        ),
        array(
            'saisie' => 'radio',
            'options' => array(
                'nom' => 'lg_pauseondotshover',
                'explication' => _T('slider:champ_pauseondotshover_explication'),
                'label' => _T('slider:champ_pauseondotshover_label'),
                'li_class' => 'lg',
                'datas' => array(
                    'true' => 'oui',
                    'false' => 'non'
                ),
                'defaut' => $config['lg_pauseondotshover']
            )
        ),
        // Écran moyen
        array('saisie' => 'input',
            'options' => array(
                'nom' => 'md_breakpoint',
                'explication' => _T('slider:champ_md_breakpoint_explication'),
                'label' => _T('slider:champ_breakpoint_label'),
                'li_class' => 'md',
                'defaut' => $config['md_breakpoint']
            )
        ),
        array('saisie' => 'radio',
            'options' => array(
                'nom' => 'md_accessibility',
                'explication' => _T('slider:champ_accessibility_explication'),
                'label' => _T('slider:champ_accessibility_label'),
                'li_class' => 'md',
                'datas' => array(
                    'true' => 'oui',
                    'false' => 'non'
                ),
                'defaut' => $config['md_accessibility']
            )
        ),
        array(
            'saisie' => 'radio',
            'options' => array(
                'nom' => 'md_adaptiveheight',
                'label' => _T('slick:charger'),
                'explication' => _T('slider:champ_adaptiveheight_explication'),
                'label' => _T('slider:champ_adaptiveheight_label'),
                'li_class' => 'md',
                'datas' => array(
                    'true' => 'oui',
                    'false' => 'non'
                ),
                'defaut' => $config['md_adaptiveheight']
            )
        ),
        array(
            'saisie' => 'radio',
            'options' => array(
                'nom' => 'md_autoplay',
                'explication' => _T('slider:champ_autoplay_explication'),
                'label' => _T('slider:champ_autoplay_label'),
                'li_class' => 'md',
                'datas' => array(
                    'true' => 'oui',
                    'false' => 'non'
                ),
                'defaut' => $config['md_autoplay']
            )
        ),
        array(
            'saisie' => 'input',
            'options' => array(
                'nom' => 'md_autoplayspeed',
                'explication' => _T('slider:champ_autoplayspeed_explication'),
                'label' => _T('slider:champ_autoplayspeed_label'),
                'li_class' => 'md',
                'defaut' => $config['md_autoplayspeed'],
                'afficher_si' => '@md_autoplay@=="true"'
            )
        ),
        array(
            'saisie' => 'input',
            'options' => array(
                'nom' => 'md_slidestoshow',
                'explication' => _T('slider:champ_slidestoshow_explication'),
                'label' => _T('slider:champ_slidestoshow_label'),
                'li_class' => 'md',
                'defaut' => $config['md_slidestoshow']
            )
        ),
        array(
            'saisie' => 'input',
            'options' => array(
                'nom' => 'md_slidestoscroll',
                'explication' => _T('slider:champ_slidestoscroll_explication'),
                'label' => _T('slider:champ_slidestoscroll_label'),
                'li_class' => 'md',
                'defaut' => $config['md_slidestoscroll']
            )
        ),
        array(
            'saisie' => 'radio',
            'options' => array(
                'nom' => 'md_centermode',
                'explication' => _T('slider:champ_centermode_explication'),
                'label' => _T('slider:champ_centermode_label'),
                'li_class' => 'md',
                'datas' => array(
                    'true' => 'oui',
                    'false' => 'non'
                ),
                'defaut' => $config['md_centermode']
            )
        ),
        array(
            'saisie' => 'radio',
            'options' => array(
                'nom' => 'md_fade',
                'explication' => _T('slider:champ_fade_explication'),
                'label' => _T('slider:champ_fade_label'),
                'li_class' => 'md',
                'datas' => array(
                    'true' => 'Fondu',
                    'false' => 'Translation'
                ),
                'defaut' => $config['md_fade']
            )
        ),
        array(
            'saisie' => 'radio',
            'options' => array(
                'nom' => 'md_vertical',
                'explication' => _T('slider:champ_vertical_explication'),
                'label' => _T('slider:champ_vertical_label'),
                'li_class' => 'md',
                'datas' => array(
                    'true' => 'Vertical',
                    'false' => 'Horizontal'
                ),
                'defaut' => $config['md_vertical'],
                'afficher_si' => '@md_fade@=="false"'
            )
        ),
        array(
            'saisie' => 'input',
            'options' => array(
                'nom' => 'md_speed',
                'explication' => _T('slider:champ_speed_explication'),
                'label' => _T('slider:champ_speed_label'),
                'li_class' => 'md',
                'defaut' => $config['md_speed']
            )
        ),
        array(
            'saisie' => 'radio',
            'options' => array(
                'nom' => 'md_arrows',
                'explication' => _T('slider:champ_arrows_explication'),
                'label' => _T('slider:champ_arrows_label'),
                'li_class' => 'md',
                'datas' => array(
                    'true' => 'oui',
                    'false' => 'non'
                ),
                'defaut' => $config['md_arrows']
            )
        ),
        array(
            'saisie' => 'radio',
            'options' => array(
                'nom' => 'md_dots',
                'explication' => _T('slider:champ_dots_explication'),
                'label' => _T('slider:champ_dots_label'),
                'li_class' => 'md',
                'datas' => array(
                    'true' => 'oui',
                    'false' => 'non'
                ),
                'defaut' => $config['md_dots']
            )
        ),
        array(
            'saisie' => 'radio',
            'options' => array(
                'nom' => 'md_pauseondotshover',
                'explication' => _T('slider:champ_pauseondotshover_explication'),
                'label' => _T('slider:champ_pauseondotshover_label'),
                'li_class' => 'md',
                'datas' => array(
                    'true' => 'oui',
                    'false' => 'non'
                ),
                'defaut' => $config['md_pauseondotshover']
            )
        ),
        // Tablette
        array('saisie' => 'input',
            'options' => array(
                'nom' => 'sm_breakpoint',
                'explication' => _T('slider:champ_sm_breakpoint_explication'),
                'label' => _T('slider:champ_breakpoint_label'),
                'li_class' => 'sm',
                'defaut' => $config['sm_breakpoint']
            )
        ),
        array('saisie' => 'radio',
            'options' => array(
                'nom' => 'sm_accessibility',
                'explication' => _T('slider:champ_accessibility_explication'),
                'label' => _T('slider:champ_accessibility_label'),
                'li_class' => 'sm',
                'datas' => array(
                    'true' => 'oui',
                    'false' => 'non'
                ),
                'defaut' => $config['sm_accessibility']
            )
        ),
        array(
            'saisie' => 'radio',
            'options' => array(
                'nom' => 'sm_adaptiveheight',
                'label' => _T('slick:charger'),
                'explication' => _T('slider:champ_adaptiveheight_explication'),
                'label' => _T('slider:champ_adaptiveheight_label'),
                'li_class' => 'sm',
                'datas' => array(
                    'true' => 'oui',
                    'false' => 'non'
                ),
                'defaut' => $config['sm_adaptiveheight']
            )
        ),
        array(
            'saisie' => 'radio',
            'options' => array(
                'nom' => 'sm_autoplay',
                'explication' => _T('slider:champ_autoplay_explication'),
                'label' => _T('slider:champ_autoplay_label'),
                'li_class' => 'sm',
                'datas' => array(
                    'true' => 'oui',
                    'false' => 'non'
                ),
                'defaut' => $config['sm_autoplay']
            )
        ),
        array(
            'saisie' => 'input',
            'options' => array(
                'nom' => 'sm_autoplayspeed',
                'explication' => _T('slider:champ_autoplayspeed_explication'),
                'label' => _T('slider:champ_autoplayspeed_label'),
                'li_class' => 'sm',
                'defaut' => $config['sm_autoplayspeed'],
                'afficher_si' => '@sm_autoplay@=="true"'
            )
        ),
        array(
            'saisie' => 'input',
            'options' => array(
                'nom' => 'sm_slidestoshow',
                'explication' => _T('slider:champ_slidestoshow_explication'),
                'label' => _T('slider:champ_slidestoshow_label'),
                'li_class' => 'sm',
                'defaut' => $config['sm_slidestoshow']
            )
        ),
        array(
            'saisie' => 'input',
            'options' => array(
                'nom' => 'sm_slidestoscroll',
                'explication' => _T('slider:champ_slidestoscroll_explication'),
                'label' => _T('slider:champ_slidestoscroll_label'),
                'li_class' => 'sm',
                'defaut' => $config['sm_slidestoscroll']
            )
        ),
        array(
            'saisie' => 'radio',
            'options' => array(
                'nom' => 'sm_centermode',
                'explication' => _T('slider:champ_centermode_explication'),
                'label' => _T('slider:champ_centermode_label'),
                'li_class' => 'sm',
                'datas' => array(
                    'true' => 'oui',
                    'false' => 'non'
                ),
                'defaut' => $config['sm_centermode']
            )
        ),
        array(
            'saisie' => 'radio',
            'options' => array(
                'nom' => 'sm_fade',
                'explication' => _T('slider:champ_fade_explication'),
                'label' => _T('slider:champ_fade_label'),
                'li_class' => 'sm',
                'datas' => array(
                    'true' => 'Fondu',
                    'false' => 'Translation'
                ),
                'defaut' => $config['sm_fade']
            )
        ),
        array(
            'saisie' => 'radio',
            'options' => array(
                'nom' => 'sm_vertical',
                'explication' => _T('slider:champ_vertical_explication'),
                'label' => _T('slider:champ_vertical_label'),
                'li_class' => 'sm',
                'datas' => array(
                    'true' => 'Vertical',
                    'false' => 'Horizontal'
                ),
                'defaut' => $config['sm_vertical'],
                'afficher_si' => '@sm_fade@=="false"'
            )
        ),
        array(
            'saisie' => 'input',
            'options' => array(
                'nom' => 'sm_speed',
                'explication' => _T('slider:champ_speed_explication'),
                'label' => _T('slider:champ_speed_label'),
                'li_class' => 'sm',
                'defaut' => $config['sm_speed']
            )
        ),
        array(
            'saisie' => 'radio',
            'options' => array(
                'nom' => 'sm_arrows',
                'explication' => _T('slider:champ_arrows_explication'),
                'label' => _T('slider:champ_arrows_label'),
                'li_class' => 'sm',
                'datas' => array(
                    'true' => 'oui',
                    'false' => 'non'
                ),
                'defaut' => $config['sm_arrows']
            )
        ),
        array(
            'saisie' => 'radio',
            'options' => array(
                'nom' => 'sm_dots',
                'explication' => _T('slider:champ_dots_explication'),
                'label' => _T('slider:champ_dots_label'),
                'li_class' => 'sm',
                'datas' => array(
                    'true' => 'oui',
                    'false' => 'non'
                ),
                'defaut' => $config['sm_dots']
            )
        ),
        array(
            'saisie' => 'radio',
            'options' => array(
                'nom' => 'sm_pauseondotshover',
                'explication' => _T('slider:champ_pauseondotshover_explication'),
                'label' => _T('slider:champ_pauseondotshover_label'),
                'li_class' => 'sm',
                'datas' => array(
                    'true' => 'oui',
                    'false' => 'non'
                ),
                'defaut' => $config['sm_pauseondotshover']
            )
        ),
        // Mobile
        array('saisie' => 'radio',
            'options' => array(
                'nom' => 'xs_accessibility',
                'explication' => _T('slider:champ_accessibility_explication'),
                'label' => _T('slider:champ_accessibility_label'),
                'li_class' => 'xs',
                'datas' => array(
                    'true' => 'oui',
                    'false' => 'non'
                ),
                'defaut' => $config['xs_accessibility']
            )
        ),
        array(
            'saisie' => 'radio',
            'options' => array(
                'nom' => 'xs_adaptiveheight',
                'label' => _T('slick:charger'),
                'explication' => _T('slider:champ_adaptiveheight_explication'),
                'label' => _T('slider:champ_adaptiveheight_label'),
                'li_class' => 'xs',
                'datas' => array(
                    'true' => 'oui',
                    'false' => 'non'
                ),
                'defaut' => $config['xs_adaptiveheight']
            )
        ),
        array(
            'saisie' => 'radio',
            'options' => array(
                'nom' => 'xs_autoplay',
                'explication' => _T('slider:champ_autoplay_explication'),
                'label' => _T('slider:champ_autoplay_label'),
                'li_class' => 'xs',
                'datas' => array(
                    'true' => 'oui',
                    'false' => 'non'
                ),
                'defaut' => $config['xs_autoplay']
            )
        ),
        array(
            'saisie' => 'input',
            'options' => array(
                'nom' => 'xs_autoplayspeed',
                'explication' => _T('slider:champ_autoplayspeed_explication'),
                'label' => _T('slider:champ_autoplayspeed_label'),
                'li_class' => 'xs',
                'defaut' => $config['xs_autoplayspeed'],
                'afficher_si' => '@xs_autoplay@=="true"'
            )
        ),
        array(
            'saisie' => 'input',
            'options' => array(
                'nom' => 'xs_slidestoshow',
                'explication' => _T('slider:champ_slidestoshow_explication'),
                'label' => _T('slider:champ_slidestoshow_label'),
                'li_class' => 'xs',
                'defaut' => $config['xs_slidestoshow']
            )
        ),
        array(
            'saisie' => 'input',
            'options' => array(
                'nom' => 'xs_slidestoscroll',
                'explication' => _T('slider:champ_slidestoscroll_explication'),
                'label' => _T('slider:champ_slidestoscroll_label'),
                'li_class' => 'xs',
                'defaut' => $config['xs_slidestoscroll']
            )
        ),
        array(
            'saisie' => 'radio',
            'options' => array(
                'nom' => 'xs_centermode',
                'explication' => _T('slider:champ_centermode_explication'),
                'label' => _T('slider:champ_centermode_label'),
                'li_class' => 'xs',
                'datas' => array(
                    'true' => 'oui',
                    'false' => 'non'
                ),
                'defaut' => $config['xs_centermode']
            )
        ),
        array(
            'saisie' => 'radio',
            'options' => array(
                'nom' => 'xs_fade',
                'explication' => _T('slider:champ_fade_explication'),
                'label' => _T('slider:champ_fade_label'),
                'li_class' => 'xs',
                'datas' => array(
                    'true' => 'Fondu',
                    'false' => 'Translation'
                ),
                'defaut' => $config['xs_fade']
            )
        ),
        array(
            'saisie' => 'radio',
            'options' => array(
                'nom' => 'xs_vertical',
                'explication' => _T('slider:champ_vertical_explication'),
                'label' => _T('slider:champ_vertical_label'),
                'li_class' => 'xs',
                'datas' => array(
                    'true' => 'Vertical',
                    'false' => 'Horizontal'
                ),
                'defaut' => $config['xs_vertical'],
                'afficher_si' => '@xs_fade@=="false"'
            )
        ),
        array(
            'saisie' => 'input',
            'options' => array(
                'nom' => 'xs_speed',
                'explication' => _T('slider:champ_speed_explication'),
                'label' => _T('slider:champ_speed_label'),
                'li_class' => 'xs',
                'defaut' => $config['xs_speed']
            )
        ),
        array(
            'saisie' => 'radio',
            'options' => array(
                'nom' => 'xs_arrows',
                'explication' => _T('slider:champ_arrows_explication'),
                'label' => _T('slider:champ_arrows_label'),
                'li_class' => 'xs',
                'datas' => array(
                    'true' => 'oui',
                    'false' => 'non'
                ),
                'defaut' => $config['xs_arrows']
            )
        ),
        array(
            'saisie' => 'radio',
            'options' => array(
                'nom' => 'xs_dots',
                'explication' => _T('slider:champ_dots_explication'),
                'label' => _T('slider:champ_dots_label'),
                'li_class' => 'xs',
                'datas' => array(
                    'true' => 'oui',
                    'false' => 'non'
                ),
                'defaut' => $config['xs_dots']
            )
        ),
        array(
            'saisie' => 'radio',
            'options' => array(
                'nom' => 'xs_pauseondotshover',
                'explication' => _T('slider:champ_pauseondotshover_explication'),
                'label' => _T('slider:champ_pauseondotshover_label'),
                'li_class' => 'xs',
                'datas' => array(
                    'true' => 'oui',
                    'false' => 'non'
                ),
                'defaut' => $config['xs_pauseondotshover']
            )
        )
    );

    return $saisies;
}

 ?>