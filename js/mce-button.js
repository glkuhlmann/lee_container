(function() {
	tinymce.PluginManager.add('my_mce_button', function( editor, url ) {
		editor.addButton('my_mce_button', {
			//text: 'New Button',
			text: false,
			icon: 'my-mce-icon',
			onclick: function(e) {
				console.log(editor.selection.getContent());
				editor.insertContent('<span style="color:red;">' + editor.selection.getContent() + '</span>');
			}
		});
	});

})();


