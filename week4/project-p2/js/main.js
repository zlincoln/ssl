(function($){
	$(document).ready(function(){
		$('[data-open-edit]').on('click', function(){
			$modal = $('#edit-modal'),
			$panel = $(this).parents('.panel'),
			data = $panel.data('contact');

			$.each(data, function(key, value){
				$modal.find('[name="'+key+'"]').val(value);
			});

			$modal.modal('show');
		})
	})
})(jQuery);