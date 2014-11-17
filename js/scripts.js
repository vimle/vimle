(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		var vimle = {

			/*-----------------------------------------------------
			    Variables
			-----------------------------------------------------*/

			htmlDom : $('html'),
			careerBtn : $('button'),
			careerContent : $('.career-content'),
			careerModal : $('.career-modal'),
			chStaff : $('.ch-staff'),
			phStaff : $('.ph-staff'),
			usStaff : $('.us-staff'),


			/*-----------------------------------------------------
				Init
			-----------------------------------------------------*/

			init : function() {
				vimle.svg();
				vimle.careerModalFunc();
				vimle.contactModalFunc();
				vimle.staffFunc();
			},
			
			/*-----------------------------------------------------
			    Functions
			-----------------------------------------------------*/

			// SVG fallback
			svg : function() {
				if (!Modernizr.svg) {
					var imgs = document.getElementsByTagName('img');
					for (var i = 0; i < imgs.length; i++) {
						if (/.*\.svg$/.test(imgs[i].src)) {
							imgs[i].src = imgs[i].src.slice(0, -3) + 'png';
						}
					}
				};
			},

			careerModalFunc : function() {

				$('[data-button="career"]').on('click', function() {
					console.log('Career Opening Clicked!');

					var current = $(this).data('career'),
						careerCont = vimle.careerModal.find("[data-career-content='" + current + "']");

					vimle.careerContent.hide();
					careerCont.show();
					vimle.careerModal.fadeIn(300);

				});

				$('[data-button="career-close"]').on('click', function() {
					vimle.careerContent.hide();
					vimle.careerModal.fadeOut(300);
				});
			},



			contactModalFunc : function() {

				$('<a class="mClose" data-button="contact-close"></a>').appendTo('.wpcf7 form');

				$('[data-button="contact-open"]').on('click', function() {
					console.log('Contact Form Modal!');

					$('.wpcf7').fadeIn(300);

				});

				$('[data-button="contact-close"]').on('click', function() {
					$('.wpcf7').fadeOut(300);
				});
			},


			staffFunc : function() {

				vimle.chStaff.hide();
				vimle.usStaff.hide();

				$('[data-button="staff-select"]').on('click', function() {
					var current = $(this).data('staff');

					vimle.phStaff.hide();
					vimle.chStaff.hide();
					vimle.usStaff.hide();

					if ( current=='ph') {
						vimle.phStaff.fadeIn(300);

					} else if ( current=='ch') {
						vimle.chStaff.fadeIn(300);

					} else if ( current=='us') {
						vimle.usStaff.fadeIn(300);

					};

				});
			},

		};

		vimle.init();
		
	});
	
})(jQuery, this);
