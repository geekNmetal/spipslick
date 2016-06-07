(function ($) {
    jQuery.fn.spipslick_selection_add = function () {
        selection = $('#champ_selection').attr('value');

        if (selection === '') {
            selection = [];
        }else{
            selection = selection.split(',');
        }

        jQuery('input[name^="rubart"]').each(function () {
            val = $(this).attr('value');
            if (jQuery.inArray(val, selection) === -1) {
                selection.push(val);
            }
        });

        jQuery('#documents_joints .item').each(function () {
            val = $(this).attr('id');
            var id_doc = val.substring(val.lastIndexOf('doc') + 3);
            val = 'document|' + id_doc;

            if (jQuery.inArray(val, selection) === -1) {
                selection.push(val);
            }
        });

        $('#champ_selection').attr('value', selection);
    };


    jQuery.fn.spipslick_selection_remove = function () {

        selection = $('#champ_selection').attr('value').split(',');
        newSelection = new Array();

        jQuery('input[name^="rubart"]').each(function () {
            val = $(this).attr('value');
            if (jQuery.inArray(val, newSelection) === -1) {
                newSelection.push(val);
            }
        });

        jQuery('#documents_joints .item').each(function () {
            val = $(this).attr('id');
            var id_doc = val.substring(val.lastIndexOf('doc') + 3);
            val = 'document|' + id_doc;

            if (jQuery.inArray(val, newSelection) === -1) {
                newSelection.push(val);
            }
        });

        toSave = new Array();
        $.each(selection, function (k, v) {
            if (jQuery.inArray(v, newSelection) !== -1) {
                toSave.push(v);
            }
        });

        $('#champ_selection').attr('value', toSave);
    };

})(jQuery);
