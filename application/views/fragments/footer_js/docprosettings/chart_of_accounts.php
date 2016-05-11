<script>
	$(document).ready(function(){
		$('#chart-of-accounts-table').DataTable({
			columnDefs: [{targets: [0, 1, 3, 5, 7, 9, 11, 13, 15], width: '1px'},
						 {targets: [2, 4, 6, 8, 10, 12, 14, 16], width: '200px'},
						],
			scrollX: true,
		});
		
		$('#add').click(function(){
			$('#add-modal').modal('show');
		});
		
		$('#chart-of-accounts-table').on('click', '.edit', function(){
			$('#edit-modal').modal('show');
		});
		
		$('#chart-of-accounts-table').on('click', '.update', function(){
			$('#update-modal').modal('show');
		});
		
		//Codes Here!
	
	
	
		initButtonPrevention();
	});
	
	var initButtonPrevention = function(){
		jQuery.fn.preventDoubleSubmission = function() {
			if($(this)[0].checkValidity()){
				$(this).on('submit',function(e){
					var $form = $(this);
					if ($form.data('submitted') === true) {
						e.preventDefault();
					} else {
						$form.data('submitted', true);
					}
				});
				return this;
			}
		};
		
		$('form').preventDoubleSubmission();
	}
</script>
