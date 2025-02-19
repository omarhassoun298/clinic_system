CKEDITOR.plugins.add('opencart', {
	init: function(editor) {
		editor.addCommand('RaoulBeta', {
			exec: function(editor) {
				$('#modal-image').remove();

				$.ajax({
					url: 'index.php?route=common/filemanager&user_token=' + getURLVar('user_token') + '&ckeditor=' + editor.name,
					dataType: 'html',
					success: function(html) {
						$('body').append(html);

						$('#modal-image').modal('show');
					}
				});
			}
		});

		editor.ui.addButton('RaoulBeta', {
			label: 'RaoulBeta',
			command: 'RaoulBeta',
			icon: this.path + 'images/icon.png'
		});
	}
});
