var popupSettings = {
    margin: [10, 10, 10, 10],
    padding: 0,
    wrapCSS: 'my-fancybox',
    titlePosition: 'inside',
    helpers: {
         overlay: {
                locked: false
         },
         title : {
            type : 'inside'
        }
    }
};

$(document).ready(function() {
    
           
	// fancybox
	
	$('.fancybox').fancybox({
		padding: 0,
		openEffect: 'elastic',
		openSpeed: 250,
		closeEffect: 'elastic',
		closeSpeed: 250,
		closeClick: true,
		wrapCSS: 'my-fancybox',
		titlePosition: 'inside',
		helpers: {
		     overlay: {
		            locked: false
		     },
		     title : {
	            type : 'inside'
	        }
		}
 		
	});
		
	if(typeof $.fancybox.defaults != 'undefined'){
		$.extend($.fancybox.defaults.tpl, {
		    error    : '<p class="fancybox-error">Запрошенный контент не может быть загружен.<br>Пожалйста, попробуйте еще раз позже.</p>',
		    closeBtn : '<a title="Закрыть" class="fancybox-item fancybox-close" href="javascript:;"></a>',
		    next     : '<a title="Следующий" class="fancybox-nav fancybox-next" href="javascript:;"><span></span></a>',
		    prev     : '<a title="Предыдущий" class="fancybox-nav fancybox-prev" href="javascript:;"><span></span></a>'
		});
	}
	
	$('.js__popUp').fancybox(popupSettings);
	
    //validation 
   
    jQuery.extend(jQuery.validator.messages, {
        email: null,
        tel: null,
        required: null
    });
    
    $('.js__call-request').each(function(){
        $(this).validate();
    });
    
    //mask
    
    $('.phone-field').mask('+7 (999)999-99-99');

    // map
    
    (function initialize() {
        
        var styles = 
        [{
            "stylers" : [{
                "saturation" : -90
            }, {
                "gamma" : 0.81
            }, {
                "lightness" : 10
            }, {
                "hue" : "#0077ff"
            }]
        }];
        
        var styledMap = new google.maps.StyledMapType(styles,
            {name: "Styled Map"});
                    
        var myLatlng = new google.maps.LatLng(55.729306, 37.609170);
        var myOptions = {
            zoom: 17,
            center: myLatlng,
            mapTypeId: ['google.maps.MapTypeId.ROADMAP', 'map_style'],
            scrollwheel: false,
            disableDefaultUI: true
        };
        var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
        
        map.mapTypes.set('map_style', styledMap);
        map.setMapTypeId('map_style');
                
        var contentString = 
            '<div id="map-content">' +
                '<div class="map__inner">' +
                    '<div class="map__title">Владелец:</div>' +
                    '<div class="map__text">Моисеев Максим</div>' +
                    '<div class="map__text">artde@inbo.ru</div>' +
                    '<div class="map__phone">+7(985) 762-00-05</div>' +
                '</div>' +
            '</div>';
        
        var infowindow = new google.maps.InfoWindow({
            content: contentString,
            position: myLatlng
        });
        
        infowindow.open(map);

    })();
    
});
