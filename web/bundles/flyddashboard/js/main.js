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
			$('body').toggleClass('deploy');
		});

		/* Menu lis */
		var $menulis = $('.menu > .subs'),
			$submenus = $('.submenu');
		$submenus.hide();

		$menulis.on('click', function() {
			console.log('click');
			$(this).siblings().removeClass('show');
			$(this).siblings().find('.submenu').slideUp();
			$(this).toggleClass('show');
			$('.submenu', this).slideToggle();
		});

		/* User menu */
		$('.user__name').on('click', function(e) {
			e.preventDefault();
			$('.user__menu').toggleClass('deploy');
		});



	});

})();