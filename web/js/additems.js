$(document).ready(function() {




	$(document).on('submit', '#flyd_dashboardbundle_address, #flyd_dashboardbundle_contact, #flyd_dashboardbundle_need', function(e){
		e.preventDefault();
		$(this).addItems({
			emptyForm: true
		});
	});

	$(document).on('submit', '#add_supplier, #add_user', function(e){
		e.preventDefault();
		$(this).addItems({
			emptyForm: false
		});
	});



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
		console.log(data);
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


(function ( $ ) {
 
 	$.fn.addItems = function( options ) {
		// Default options

	    var parentContainer = this.parent().parent().parent();

		$.ajax({
			url:            this.attr('action'),
			type:           this.attr('method'),
			data: this.serialize(),
			beforeSend: function(data) {
			},
			success: function(data) {	
			if(data.code == 200) {
				parentContainer.find('.bloc > h2 + .row').append(data.response);
				if(options.emptyForm === true) {
					parentContainer.find('.bloc input, .bloc select, .bloc textarea').val('');
				} else {
					parentContainer.find(':selected').remove();
				}
			}
			else {
				if(options.emptyForm === false) {
					alert('Erreur');
				} else {
					parentContainer.parent().find('.bloc > h2 + .row').prepend('erreur');
				}
			}
			},
			error: function(jqXHR, textStatus, errorThrown) {
				console.log(errorThrown);
			}
		});

    	return this;
    };
 
}( jQuery ));
