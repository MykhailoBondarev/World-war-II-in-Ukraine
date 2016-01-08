$(document).ready(function(){
	var lb_wrapper = document.getElementById("outerImageContainer");
	var lb_img = document.getElementById("lightboxImage");
	var page_bean = $(".page");
	if ($(page_bean).length) {
		if ($(page_bean).hasClass('page-id-130')) {
			jQuery.colorbox.remove();
			jQuery("#vystavka").find('a').colorbox({
				width: '100%',
				innerWidth: '100%',
				scalePhotos: false
			});
		}
	}
		$("#search-btn").click(
		function(){
			$("header").toggleClass("navbar-grad","navbar");		
			$(".search-box").toggle("fast");		
		}	
		);
		$('.go_down').click(function(){
		   $("#slider").fadeIn();
	       $("footer").fadeIn();
	       $('html, body').animate({scrollTop:$('#slider').scrollTop() + 450}, 3000);        
	       var video = document.getElementById("main_page_video");
				 if (!video.paused) {video.pause();}
		});

		$('#maki-btn').click(function(){
			location.href='/maky-pamyati/';
		});

		$("#menu-btn").click(
			function(){					
				$(".menu-wrap").show("fast");
				$("#menu-btn").css("opacity","0");
				$("#menu-close").fadeIn();	
				var video = document.getElementById("main_page_video");
				 if ($("body").hasClass("home") && (typeof(video) !== 'undefined') && !video.paused) {video.pause();}
			}
		);		
		$("#menu-close").click(
			function(){
				$(".menu-wrap").hide("fast");	
				$("#menu-btn").css("opacity","1");
				$("#menu-close").fadeOut();	
				var video = document.getElementById("main_page_video");
				 if ($("body").hasClass("home") && (typeof(video) !== 'undefined') && video.paused) {video.play();}			
			}
		);

		$('#mute-btn').click(function(){
				var video = document.getElementById("main_page_video");
				 if (video.muted == true) {
			        video.muted = false;
			        $('#mute-btn').removeClass('unmute-btn').addClass('mute-btn');
			      } else {
			        video.muted = true;
			        $('#mute-btn').removeClass('mute-btn').addClass('unmute-btn');
			      }
		});

});



