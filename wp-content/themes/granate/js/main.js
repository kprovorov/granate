jQuery(function($) {
	jQuery(document).ready(function($) {

		//autoheight
		$(function() {
		    $('.js-auto-height').matchHeight();
		});

		//datepiker
		$( function() {
		    $( "#datepicker" ).datepicker();
		  } );

		//open text
		(function(){
			$(".open-bottom").click(function(event) {
				event.preventDefault();
				$(".text-wrap__p").toggleClass('open');
			});
		})();
		// sliders
		(function(){
			var swiperTop = new Swiper('.swiper-container', {
		        pagination: '.swiper-pagination',
		        paginationClickable: true,
		        speed: 1000,
		        autoplay: 5000
		    });
		    var swiper = new Swiper('.swiper-container-certificate', {
		        pagination: '.swiper-pagination',
		        slidesPerView: 2,
		        paginationClickable: true,
		        spaceBetween: 30,
		        freeMode: true
		    });
		    var swiperEquipment = new Swiper('.swiper-container-equipment', {
		        pagination: '.swiper-pagination',
		        paginationClickable: true
		    });
		    var swiperEquipment = new Swiper('.swiper-container-equipment', {
		        pagination: '.swiper-pagination',
		        slidesPerView: 3,
		        paginationClickable: true,
		        spaceBetween: 30,
		        nextButton: '.swiper-button-next',
        		prevButton: '.swiper-button-prev'
		    });
		     var swiper = new Swiper('.swiper-container-new-equipment', {
		        pagination: '.swiper-pagination',
		        slidesPerView: 3,
		        paginationClickable: true,
		        spaceBetween: 30
		    });
		})();

		(function(){
			googlemap();
			//map
			function googlemap(){
			  var isDraggable = 'ontouchstart' in document.documentElement ? false : true;
			  var mapOptions = {
			      zoom: 13,
			      draggable: isDraggable,
			      panControl: true,
			      center: new google.maps.LatLng($('#map').data('lat'), $('#map').data('lng')),
			      zoomControl: true,
			      scaleControl: true,
			      scrollwheel: false,
			      shortSwipes: false,
			      longSwipes: true,
			      streetViewControl: false,
			      longSwipesRatio: 2.9,
			      threshold: 100,
			      mapTypeControl: false,
			      zoomControlOptions  : {
			          position    : google.maps.ControlPosition.LEFT_CENTER,
			      },
			      mapTypeId: google.maps.MapTypeId.ROADMAP
			    };
			    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
			    var beachMarker = new google.maps.Marker({
			        position: new google.maps.LatLng($('#map').data('lat'), $('#map').data('lng')),
			        map: map
			    });
			};
		})();

	});

});
