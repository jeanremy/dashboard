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
						parentContainer.find('.bloc input[type!=hidden], .bloc textarea').val('');
					} else {
						parentContainer.find(':selected').remove();
					}
				}
				else {
					console.log(JSON.parse(data.response));
				}
			},
			error: function(jqXHR, textStatus, errorThrown) {
				console.log(errorThrown);
			}
		});

    	return this;
    };
 
}( jQuery ));
