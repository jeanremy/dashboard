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
