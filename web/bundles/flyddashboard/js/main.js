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

		/* Menu Toggler */
		$('#menu--toggle').on('click', function(e) {
			e.preventDefault();
			e.stopPropagation();
			$('body').toggleClass('deploy');
		});

		/* User menu */
		$('.user__name').on('click', function(e) {
			e.preventDefault();
			e.stopPropagation();
			$('.user__menu').toggleClass('deploy');
		});
		$(document).on('click', function() {
			$('.user__menu').removeClass('deploy');
		});

		$('.menu > li').on('click', function(e) {
			$(this).siblings().find('.submenu').slideUp();
			$('.submenu', this).slideToggle();
		});

	});

})();