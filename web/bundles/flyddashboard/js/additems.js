$(document).ready(function() {


	// more buttons
	$('.btn--add').next().hide();
	$('.btn--add').on('click', function(e){
		e.preventDefault();
		var $this = $(this);
		$this.next().toggle();
	});

	$(document).on('submit', '#flyd_dashboardbundle_address, #flyd_dashboardbundle_contact, #flyd_dashboardbundle_need', function(e){
		e.preventDefault();
		var $this = $(this);
			loadItem($this);
	});

	function loadItem($this) {
		var $parentBloc = $this.parent().parent().parent();

		$.ajax({
		  url:            $this.attr('action'),
		  type:           $this.attr('method'),
		  data: $this.serialize(),
		  beforeSend: function(data) {
			console.log('beforsend');
		  },
		  success: function(data) {
			if(data['code'] == 200) {
				$parentBloc.find('.bloc > h2 + .row').append(data['response']);
				$parentBloc.find('.bloc input, .bloc select, .bloc textarea').val('');
			}
			else {
			  $parentBloc.parent().find('.bloc > h2 + .row').prepend('erreur');
			}
		  },
		  error: function(jqXHR, textStatus, errorThrown) {
			console.log(errorThrown);
		  }
		});

	}


	$(document).on('click', '.remove', function(e){
	  e.preventDefault();
	  var $this = $(this),
		  $parentBloc = $this.parent();
	  $.ajax({
		url:            $this.attr('href'),
		type:           "POST",
		data: {
		  element_id: $this.attr('data-id')
		},
		beforeSend: function(data) {
		  console.log('beforsend');
		},
		success: function(data) {
		  if(data['code'] == 200) {
			$parentBloc.fadeOut(400).remove();
		  }
		  else {
			console.log(data['response']);
		  }
		},
		error: function(jqXHR, textStatus, errorThrown) {
		  console.log('error');
		}
	 });
	});


});
