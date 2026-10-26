/*------------------------------------
	Theme Name: Health Kare
	Start Date : 
	End Date : 
	Last change: 
	Version: 1.0
	Assigned to:
	Primary use:
---------------------------------------*/
/*	
	
	* Document Scroll		
		
	* Document Ready
		- Mission Section
		- Consultation Section
		- Welcome Section
		- Testimonial Section
		- Responsive Caret
		- Google Map
		- Scrolling Navigation
		- Add Easing Effect
		- Search
		- Rev Slider
		- Client Carousel
		- Blog Client Carousel
		- Department Carousel
		- Team Carousel
		- Video Section
		- Gallery Section
		- Counter Section
		- Date Picker
		- Contact Map
		- Quick Contact Form

	* Window Load
		- Site Loader
*/

(function($) {

	"use strict"
	
	/* - Mission Section */
	function mission_img() {
		var width = $(window).width();
		var mission_section_height = $(".mission-section").height();
		var mission_content_height = $(".mission-details").height();
		var mission_image = $( ".mission-img" );
		var mission_img = mission_image.attr("data-image");
		if ( width >= 992 ) {
			mission_image.removeAttr("style");
			$( ".mission-img img" ).remove();
			mission_image.css({"background-image":"url('" + mission_img + "')","height": mission_section_height });
		} else {
			mission_image.removeAttr("style");
			$( ".mission-img img" ).remove();
			mission_image.append("<img src='"+ mission_img +"' />")
		}
	}
	
	/* - Consultation Section */
	function consultation_img() {
		var width = $(window).width();
		var consultation_section_height = $(".consultation-section").height();
		var consultation_content_height = $(".consultation-img-right").height();
		var consultation_image = $( ".consultation-img" );
		var consultation_img = consultation_image.attr("data-image"); 
		if ( width >= 992 ) {
			consultation_image.removeAttr("style");
			$( ".consultation-img img" ).remove();
			consultation_image.css({"background-image":"url('" + consultation_img + "')","height": consultation_section_height });
		} else {
			consultation_image.removeAttr("style");
			$( ".consultation-img img" ).remove();
			consultation_image.append("<img src='"+ consultation_img +"' />")
		}
	}
	
	/* - Welcome Section */
	function welcome_img() {
		var width = $(window).width();
		var welcome_section_height = $(".welcome-section").height();
		var welcome_content_height = $(".welcome-details").height();
		var welcome_image = $( ".welcome-img" );
		var welcome_img = welcome_image.attr("data-image");
		
		if ( width >= 992 ) {
			welcome_image.removeAttr("style");
			$( ".welcome-img img" ).remove();
			welcome_image.css({"background-image":"url('" + welcome_img + "')","height": welcome_section_height });
		} else {
			welcome_image.removeAttr("style");
			$( ".welcome-img img" ).remove();
			welcome_image.append("<img src='"+ welcome_img +"' />")
		}
	}
	
	/* - Testimonial Section */
	function testimonial_img() {
		var width = $(window).width();
		var testimonial_section_height = $(".testimonial-section3").height();
		var testimonial_content_height = $(".testimonial-left-img").height();
		var testimonial_image = $( ".testimonial-right-img" );

		if ( width >= 992 ) {
			testimonial_image.removeAttr("style");
			$( ".testimonial-right-img img" ).remove();
			var testimonial_img = $(".testimonial-right-img .testi-img").attr("data-image");
			testimonial_image.css({"height": testimonial_section_height });
			$( ".testimonial-right-img .testi-img" ).css({"background-image":"url('" + testimonial_img + "')","height": testimonial_section_height });
		} else {
			testimonial_image.removeAttr("style");
			$( ".testimonial-right-img .testi-img" ).removeAttr("style");
			$( ".testimonial-right-img img" ).remove();
			var testimonial_img = $(".testimonial-right-img .testi-img").attr("data-image");
			$( ".testimonial-right-img .testi-img" ).append("<img src='"+ testimonial_img +"' />");
		}
	}
	
	/* - Menu Switch * */
	function menu_switch(){
		var width = $(window).width();
		if( width > 991 ) {
			$(".menu-switch > a").on("click", function() {
				$(".ownavigation .navbar-nav").toggleClass("menu-open")
			});
		} else {
			$(".ownavigation .navbar-nav").removeClass("menu-open");
		}
	}
	
	/* - Responsive Caret* */
	function menu_dropdown_open(){
		var width = $(window).width();
		if($(".ownavigation .nav li.ddl-active").length ) {
			if( width > 991 ) {
					$(".ownavigation .nav > li").removeClass("ddl-active");
					$(".ownavigation .nav li .dropdown-menu").removeAttr("style");
				}
		} else {
			$(".ownavigation .nav li .dropdown-menu").removeAttr("style");
		}
	}
	
	/* + Expand Panel Resize * */
	function panel_resize(){
		var width = $(window).width();
		if( width > 991 ) {
			if($(".header_s #slidepanel").length ) {
				$(".header_s #slidepanel").removeAttr("style");
			}
		}
	}
	
	/* - Google Map* */
	function initialize(obj) {
		var lat = $("#"+obj).attr("data-lat");
        var lng = $("#"+obj).attr("data-lng");
		var contentString = $("#"+obj).attr("data-string");
		var myLatlng = new google.maps.LatLng(lat,lng);
		var map, marker, infowindow;
		var image = "assets/images/marker.png";
		var zoomLevel = parseInt($("#"+obj).attr("data-zoom") ,10);		
		var styles = [{"featureType":"landscape","stylers":[{"saturation":" "},{"lightness":" "},{"visibility":"on"}]},{"featureType":"poi","stylers":[{"saturation":" "},{"lightness":" "},{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"saturation":" "},{"visibility":"simplified"}]},{"featureType":"road.arterial","stylers":[{"saturation":" "},{"lightness":" "},{"visibility":"on"}]},{"featureType":"road.local","stylers":[{"saturation":" "},{"lightness":" "},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":" "},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":" "},{"saturation":" "}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":" "},{"saturation":" "}]}]
		var styledMap = new google.maps.StyledMapType(styles,{name: "Styled Map"});	
		
		var mapOptions = {
			zoom: zoomLevel,
			disableDefaultUI: true,
			center: myLatlng,
            scrollwheel: false,
			mapTypeControlOptions: {
            mapTypeIds: [google.maps.MapTypeId.ROADMAP, "map_style"]
			}
		}
		
		map = new google.maps.Map(document.getElementById(obj), mapOptions);	
		
		map.mapTypes.set("map_style", styledMap);
		map.setMapTypeId("map_style");
		
		infowindow = new google.maps.InfoWindow({
			content: contentString
		});      
	    
        marker = new google.maps.Marker({
			position: myLatlng,
			map: map,
			icon: image
		});

		google.maps.event.addListener(marker, "click", function() {
			infowindow.open(map,marker);
		});	
	}
	
	function sticky_menu() {
		var menu_scroll = $('header[class*="header_s"]').offset().top;
		var scroll_top = $(window).scrollTop();
		
		if ( scroll_top > menu_scroll ) {
			$(".header_s .ownavigation").addClass("navbar-fixed-top animated fadeInDown");
		} else {
			$(".header_s .ownavigation").removeClass("navbar-fixed-top animated fadeInDown"); 
		}
	}
	
	/* ## Document Ready - Handler for .ready() called */
	$(document).ready(function($) {

		/* - Scrolling Navigation* */
		var width	=	$(window).width();
		var height	=	$(window).height();
		
		/* - Set Sticky Menu* */
		if( $(".header_s .ownavigation").length ) {
			sticky_menu();
		}
		
		$('.navbar-nav li a[href*="#"]:not([href="#"]), .site-logo a[href*="#"]:not([href="#"])').on("click", function(e) {
	
			var $anchor = $(this);
			
			$("html, body").stop().animate({ scrollTop: $($anchor.attr("href")).offset().top - 49 }, 1500, "easeInOutExpo");
			
			e.preventDefault();
		});

		/* - Responsive Caret* */
		$(".ddl-switch").on("click", function() {
			var li = $(this).parent();
			if ( li.hasClass("ddl-active") || li.find(".ddl-active").length !== 0 || li.find(".dropdown-menu").is(":visible") ) {
				li.removeClass("ddl-active");
				li.children().find(".ddl-active").removeClass("ddl-active");
				li.children(".dropdown-menu").slideUp();
			}
			else {
				li.addClass("ddl-active");
				li.children(".dropdown-menu").slideDown();
			}
		});
		
		/* - Expand Panel * */
		$("#slideit").on ("click", function() {
			$("#slidepanel").slideDown(1000);
			$("html").animate({ scrollTop: 0 }, 1000);
		});	

		/* Collapse Panel * */
		$("#closeit").on("click", function() {
			$("#slidepanel").slideUp("slow");
			$("html").animate({ scrollTop: 0 }, 1000);
		});	
		
		/* Switch buttons from "Log In | Register" to "Close Panel" on click * */
		$("#toggle a").on("click", function() {
			$("#toggle a").toggle();
		});	
		
		/* - Color Switcher */
		if( $('#choose_color').length ) {

			 var tem_color = $("#color" );

			 $("#default").on("click", function() {
				tem_color.attr("href","assets/css/color-schemes/default.css");
				return false;
			});
			
			$("#red" ).on("click", function() {
				tem_color.attr("href","assets/css/color-schemes/red.css");
				return false;
			});
			
			$("#skyblue").on("click", function() {
				tem_color.attr("href","assets/css/color-schemes/skyblue.css");
				return false;
			});
			
			$("#orange").on("click", function() {
				tem_color.attr("href","assets/css/color-schemes/orange.css");
				return false;
			});
			
			$("#coral" ).on("click", function() {
				tem_color.attr("href","assets/css/color-schemes/coral.css");
				return false;
			});

			$("#cyan" ).on("click", function() {
				tem_color.attr("href","assets/css/color-schemes/cyan.css");
				return false;
			});

			$("#khaki" ).on("click", function() {
				tem_color.attr("href","assets/css/color-schemes/khaki.css");
				return false;
			});

			$("#pink" ).on("click", function() {
				tem_color.attr("href","assets/css/color-schemes/pink.css");
				return false;
			});

			$("#slateblue" ).on("click", function() {
				tem_color.attr("href","assets/css/color-schemes/slateblue.css");
				return false;
			});

			$("#gold" ).on("click", function() {
				tem_color.attr("href","assets/css/color-schemes/gold.css");
				return false;
			});
			
			// picker buttton
			$(".picker_close").on("click", function() {
				$("#choose_view").removeClass("position");
				$("#choose_color").toggleClass("position");
			});
		}
		
		$(".color-switcher-block li a").on("click", function() {
		  $(".color-switcher-block li").removeClass("active");
			$(this).parent().addClass("active");
		});	
		
		/* - Menu Switch */
		if($(".menu-switch").length){
			menu_switch();
		}
		
		panel_resize();
		
		/* - Search* */
		if($(".search-box").length){
			$("#search").on("click", function(){
				$(".search-box").addClass("active")
			});
			$(".search-box span").on("click", function(){
				$(".search-box").removeClass("active")
			});
		}
		
		/* - Rev Slider */
		if($(".slider-section").length){
			$("#home-slider1").revolution({
				sliderType:"standard",
				sliderLayout:"auto",
				delay:6000,
				navigation: {
					bullets: {
						enable:true,
						style:"zeus",
						hide_onleave:false,						
						direction:"horizontal",
						h_align:"center",
						v_align:"bottom",
						h_offset:0,
						v_offset:33,
						space:10,
						tmp:''
					}
				},
				responsiveLevels:[1920,1024,768,480],
				gridwidth:[1257,1024,768,480],
				gridheight:[780,640,600,480],
			});
			
			$("#home-slider2").revolution({
				sliderType:"standard",
				sliderLayout:"auto",
				delay:6000,
				navigation: {
					bullets: {
						enable:true,
						style:"zeus",
						hide_onleave:false,						
						direction:"horizontal",
						h_align:"center",
						v_align:"bottom",
						h_offset:0,
						v_offset:33,
						space:10,
						tmp:''
					}
				},
				responsiveLevels:[1920,1024,768,480],
				gridwidth:[1920,1024,768,480],
				gridheight:[780,700,600,480],
			});
			
			$("#home-slider3").revolution({
				sliderType:"standard",
				sliderLayout:"auto",
				delay:6000,
				navigation: {
					arrows:{
						enable:true,
						style:"uranus"
					}
				},
				responsiveLevels:[1920,1024,768,480],
				gridwidth:[1920,1024,768,480],
				gridheight:[970,780,600,480],
			});
		}
		
		/* - Client Carousel */
		if( $(".clients-carousel").length ) {
			$(".clients-carousel").owlCarousel({
				loop: true,
				margin: 0,
				nav: false,
				dots: false,
				autoplay: false,
				responsive:{
					0:{
						items: 1
					},
					500:{
						items: 2
					},
					600:{
						items: 3
					},
					1000:{
						items: 6
					}
				}
			});
		}
		
		/* - Blog Client Carousel */
		if( $(".blog-clients-carousel").length ) {
			$(".blog-clients-carousel").owlCarousel({
				loop: true,
				margin: 0,
				nav: false,
				dots: false,
				autoplay: false,
				responsive:{
					0:{
						items: 1
					},
					500:{
						items: 2
					},
					600:{
						items: 3
					},
					1000:{
						items: 3
					}
				}
			});
		}
		
		/* - Client Carousel */
		if( $(".clients-carousel").length ) {
			$(".clients-carousel").owlCarousel({
				loop: true,
				margin: 0,
				nav: false,
				dots: false,
				autoplay: false,
				responsive:{
					0:{
						items: 1
					},
					500:{
						items: 2
					},
					600:{
						items: 3
					},
					1000:{
						items: 6
					}
				}
			});
		}
		
		/* - Department Carousel */
		if( $(".department-carousel").length ) {
			$(".department-carousel").owlCarousel({
				loop: true,
				margin: 0,
				nav: true,
				dots: false,
				autoplay: true,
				responsive:{
					0:{
						items: 1
					},
					500:{
						items: 2
					},
					600:{
						items: 2
					},
					1000:{
						items: 3
					}
				}
			});
		}
		
		/* - Team Carousel */
		if( $(".team-carousel").length ) {
			$(".team-carousel").owlCarousel({
				loop: true,
				margin: 0,
				nav: false,
				dots: false,
				autoplay: false,
				responsive:{
					0:{
						items: 1
					},
					480:{
						items: 2
					},
					767:{
						items: 3
					},
					768:{
						items: 2
					},
					/* 991:{
						items: 2
					}, */
					1000:{
						items: 3
					}
				}
			});
			/* - Custom Navigation Events */
			$(".next").on("click",function(){
				$(".team-carousel").owlCarousel().trigger("next.owl.carousel");
			});
			$(".prev").on("click",function(){
				$(".team-carousel").owlCarousel().trigger("prev.owl.carousel");
			});
		}
		
		/* - Video Section */
		if( $(".video-section").length ){
			$(".video-section a").magnificPopup({
				disableOn: 700,
				type: "iframe",
				mainClass: "mfp-fade",
				removalDelay: 160,
				preloader: false,
				fixedContentPos: false
			});
		}
		
		/* - Gallery Section */		
		if( $(".content-image-block").length ){
			$(".content-block-hover").magnificPopup({
				delegate: "a.zoom-in",
				type: "image",
				tLoading: "Loading image #%curr%...",
				mainClass: "mfp-img-mobile",
				gallery: {
					enabled: true,
					navigateByImgClick: false,
					preload: [0,1] // Will preload 0 - before current, and 1 after the current image
				},
				image: {
					tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',				
				}
			});
		}
		
		/* - Counter Section */
		if($(".counter-section").length) {
			$(".counter-section").each(function ()
			{
				var $this = $(this);
				var myVal = $(this).data("value");

				$this.appear(function()
				{		
					var statistics_item_count = 0;
					var statistics_count = 0;					
					statistics_item_count = $( "[id*='statistics_count-']" ).length;
					
					for(var i=1; i<=statistics_item_count; i++)
					{
						statistics_count = $( "[id*='statistics_count-"+i+"']" ).attr( "data-statistics_percent" );
						$("[id*='statistics_count-"+i+"']").animateNumber({ number: statistics_count }, 4000);
					}				
				});
			});
		}
		
		/* - Mission Section */
		mission_img();
		
		/* - Consultation Section */
		consultation_img();
		
		/* - Welcome Section */
		welcome_img();
		
		/* - Testimonial Section */
		testimonial_img();
		
		/* - Date Picker */
		if( $("#datetimepicker1").length ) {
			$('#datetimepicker1 input').datepicker({ });
		}
		
		/* - Contact Map* */
		if($("#map-canvas-contact").length===1){
			initialize("map-canvas-contact");
		}
		
		/* - Quick Contact Form* */
		$( "#btn_submit" ).on( "click", function(event) {
		  event.preventDefault();
		  var mydata = $("form").serialize();
			$.ajax({
				type: "POST",
				dataType: "json",
				url: "contact.php",
				data: mydata,
				success: function(data) {
					var alert_msg = $("#alert-msg");
					if( data["type"] == "error" ){
						alert_msg.html(data["msg"]);
						alert_msg.removeClass("alert-msg-success");
						alert_msg.addClass("alert-msg-failure");
						alert_msg.show();
					} else {
						alert_msg.html(data["msg"]);
						alert_msg.addClass("alert-msg-success");
						alert_msg.removeClass("alert-msg-failure");					
						$("#input_name").val("");
						$("#input_phone").val("");
						$("#input_email").val("");												
						$("#input_subject").val("");																								
						$("#textarea_message").val("");
						alert_msg.show();			
					}			
				},
				error: function(xhr, textStatus, errorThrown) {
					alert(textStatus);
				}
			});
		});
		
	});	/* - Document Ready /- */
	
	/* Event - Window Scroll */
	$(window).on("scroll",function() {
		/* - Set Sticky Menu* */
		if( $(".header_s .ownavigation").length ) {
			sticky_menu();
		}
	});
	
	$( window ).on("resize",function() {
		
		var width	=	$(window).width();
		var height	=	$(window).height();
		
		/* - Expand Panel Resize */
		panel_resize();
		
		/* - Mission Section */
		mission_img();
		
		/* - Consultation Section */
		consultation_img();
		
		/* - Welcome Section */
		welcome_img();
		
		/* - Testimonial Section */
		testimonial_img();
		
		/* - Menu Switch */
		if($(".menu-switch").length){
			menu_switch();
		}
		
	});
	
	/* ## Window Load - Handler for .load() called */
	$(window).on("load",function() {
		/* - Site Loader* */
		if ( !$("html").is(".ie6, .ie7, .ie8") ) {
			$("#site-loader").delay(1000).fadeOut("slow");
		}
		else {
			$("#site-loader").css("display","none");
		}
		
		/* - Gallery Section */	
		if( $(".portfolio-list").length ) {
			var $container = $(".portfolio-list");
			$container.isotope({
			  itemSelector: ".portfolio-list > li",
			  gutter: 0,
			  transitionDuration: "0.5s"
			});

			$("#filters a").on("click",function(){
				$("#filters a").removeClass("active");
				$(this).addClass("active");
				var selector = $(this).attr("data-filter");
				$container.isotope({ filter: selector });		
				return false;
			});
		}
		
	});

})(jQuery);