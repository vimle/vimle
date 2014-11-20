/*
	Author: Grant Imbo (@grantimbo)
	Author URI: http://grantimbo.com
*/

(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		var vimle = {

			/*-----------------------------------------------------
			    Variables
			-----------------------------------------------------*/

			htmlDom : $('html'),
			htmlBody : $('html, body'),
			careerBtn : $('button'),
			careerContent : $('.career-content'),
			careerModal : $('.career-modal'),
			chStaff : $('.ch-staff'),
			phStaff : $('.ph-staff'),
			usStaff : $('.us-staff'),
			toTop : $('.toTop'),


			/*-----------------------------------------------------
				Init
			-----------------------------------------------------*/

			init : function() {
				vimle.svg();
				vimle.careerModalFunc();
				vimle.contactModalFunc();
				vimle.staffFunc();
				vimle.slideFunc();
				vimle.menuFunc();
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
					console.log('Career Modal Opened!');

					var current = $(this).data('career'),
						careerCont = vimle.careerModal.find("[data-career-content='" + current + "']");

					vimle.careerContent.hide();
					careerCont.show();
					vimle.careerModal.fadeIn(300);

				});

				$('[data-button="career-close"]').on('click', function() {
					console.log('Career Modal Closed!');
					vimle.careerContent.hide();
					vimle.careerModal.fadeOut(300);
				});
			},



			contactModalFunc : function() {

				$('<a class="mClose" data-button="contact-close"></a>').appendTo('.contact-form-modal .wpcf7 form');

				$('[data-button="contact-open"]').on('click', function() {

					console.log('Contact Form Modal Opened!');
					$('.contact-form-modal').fadeIn(300);

				});

				$('[data-button="contact-close"]').on('click', function() {

					console.log('Contact Form Modal Closed!');
					$('.contact-form-modal').fadeOut(300);

				});
			},


			staffFunc : function() {

				vimle.phStaff.hide();
				vimle.chStaff.hide();
				$('[data-staff="us"]').addClass("active");

				$('[data-button="staff-select"]').on('click', function() {
					var current = $(this).data('staff');

					$('[data-button="staff-select"]').removeClass("active");
					$(this).addClass("active");

					vimle.phStaff.hide();
					vimle.chStaff.hide();
					vimle.usStaff.hide();

					if ( current=='ph') {
						vimle.phStaff.fadeIn(300);
						console.log('Philippine Staff Selected.');

					} else if ( current=='ch') {
						vimle.chStaff.fadeIn(300);
						console.log('China Staff Selected.');

					} else if ( current=='us') {
						vimle.usStaff.fadeIn(300);
						console.log('U.S Staff Selected.');

					};

				});
			},

			slideFunc : function() {

			
				$('[data-button="learn-more"]').on('click', function() {
				    vimle.htmlBody.animate({
				        scrollTop: $("#about").offset().top
				    }, 1000);
				});

				$(window).on('scroll', function() {
				    if ($(this).scrollTop() > 500) {
				        vimle.toTop.fadeIn();
				    } else {
				        vimle.toTop.fadeOut();
				    }
				});

				vimle.toTop.on('click', function() {
					console.log('Back To Top!')
					vimle.htmlBody.animate({
				        scrollTop: vimle.htmlDom.offset().top
				    }, 1000);
				});

			},


			menuFunc : function() {

				$('li.careers-section a').on('click', function() {
					vimle.htmlBody.animate({
				        scrollTop: $("#careers").offset().top
				    }, 1000);
				});

				$('li.staff-section a').on('click', function() {
					vimle.htmlBody.animate({
				        scrollTop: $("#staff").offset().top
				    }, 1000);
				});

				$('li.contact-section a').on('click', function() {

					console.log('Contact Form Modal Opened!');
					$('.contact-form-modal').fadeIn(300);

				});
			},

		};

		vimle.init();
		console.log('Author : Grant Imbo / grantimbo.com')
		
	});
	
})(jQuery, this);
