(function() {

    tinymce.PluginManager.add('pushortcodes', function( editor )
    {
        var shortcodeValues = [];
        jQuery.each(shortcodes_button, function(i)
        {
            shortcodeValues.push({text: shortcodes_button[i], value:i});
            console.log(i);
        });

        editor.addButton('pushortcodes', {
            type: 'listbox',
            text: 'Funzioni arosedesign',
            onselect: function(e) {
                var v = e.control._value;

                tinyMCE.activeEditor.selection.setContent( '[wce_code id='+v+']' );
            },
            values: shortcodeValues
        });
    });
})();