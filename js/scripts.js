(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		var vimle = {

			/*-----------------------------------------------------
			    Variables
			-----------------------------------------------------*/

			htmlDom : $('html'),
			careerBtn : $('button'),


			/*-----------------------------------------------------
				Init
			-----------------------------------------------------*/

			init : function() {
				vimle.svg();
				vimle.registrationForm();
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

			registrationForm : function() {
				vimle.careerBtn.on('click', function(e){
					e.preventDefault();
					console.log(($(this).data('modal')));
				});

			},

			modalHide : function() {
				$(document).on('click', function(e){
			        var container = $(".modal-contents");

			        // if the target of the click isn't the container... nor a descendant of the container
			        if (!container.is(e.target) && container.has(e.target).length === 0){
			            $('.modal').fadeOut(300);
			            vimle.siteBody.css('overflow-y','visible');
			        };
			    });
			}

		};

		vimle.init();
		
	});
	
})(jQuery, this);
