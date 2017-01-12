function initMap(){
    var styles = [{
      stylers: [
        { saturation: -100 }
      ]
    }];

    var styledMap = new google.maps.StyledMapType(styles, {name: "Styled Map"});

    jQuery('.map').each(function(i,map){

        var $map = jQuery(map);

        var id = $map.attr('id');

        var center = {
            lat: parseFloat($map.data('center-latitude')),
            lng: parseFloat($map.data('center-longitude'))
        };

        var googleMap = new google.maps.Map(document.getElementById(id), {
            zoom: parseInt($map.data('zoom')),
            center: center,
            scrollwheel: false,
            disableDefaultUI: true,
            mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
        });

        googleMap.mapTypes.set('map_style', styledMap);
        googleMap.setMapTypeId('map_style');

        var markersInfo = JSON.parse($map.data('markers'));

        jQuery.each(markersInfo, function(i, markerInfo){
            var marker = getMarker(markerInfo, googleMap);
        });

    });
}

function getMarker(markerInfo, map){
    var center = {
            lat: parseFloat(markerInfo.latitude),
            lng: parseFloat(markerInfo.longitude)
        };
    return new google.maps.Marker({
            position: center,
            icon: markerInfo.icon,
            map: map
        });
}

var TopImageLoader = function($component){

    this.$component = $component;
    this.$imageHolder = this.$component.find('.top-img-section__background');
    this.images = {
        small: this.$imageHolder.data('image-small'),
        big: this.$imageHolder.data('image-big')
    };

};

TopImageLoader.prototype.loadImage = function(screenSize){

    this.$imageHolder.html('');

    var that = this;

    var $image;

    if(screenSize == 'BIG'){
        $image = jQuery('<img src="'+ this.images.big +'" />');
    }else{
        $image = jQuery('<img src="'+ this.images.small +'" />');
    }

    $image.css({display: 'none'});

    $image.load(function(){
        that.$imageHolder.append($image);
        $image.fadeIn();
    });

};


jQuery(function() {
    var topImageModule = new TopImageLoader(jQuery('.top-img-section'));
    //console.log(topImageModule);


        topImageModule.loadImage('BIG');


});
