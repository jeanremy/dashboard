(function() {

	jQuery(document).ready(function($) {

		/****************************
			Variables
		****************************/
		var winHeight 		= $(window).height(),
			winWidth 		= $(window).width();

		function setSize() {
			//$('#aside').height(winHeight+'px');			
		}

		

		// Set title container to 100% height			
		(window.resize = function() {
			setSize();
		})();

		$('.notice .close').on('click', function(e) {
			e.preventDefault();
			console.log('click');
			$(this).parent().fadeIn(200).remove();
		});

		// more buttons
		$('.btn--add').next().hide();
		$('.btn--add').on('click', function(e){
			e.preventDefault();
			var $this = $(this);
			$this.next().fadeToggle();
			$text = $(this).text();
    		$(this).text($text === "+" ? "-":"+");
		});

		// Add items
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

})();