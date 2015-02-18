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
			console.log($text);
    		$(this).text($text === "+" ? "-":"+");
		});




	});

})();