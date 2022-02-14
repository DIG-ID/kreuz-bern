<?php if ( is_page_template( array( 'page-attractions.php', 'page-contacts.php' ) ) ) : ?>

<style type="text/css">
.acf-map {
    width: 100%;
    border: #ccc solid 1px;
}

.acf-map.map-attractions{height: 630px;}
.acf-map.map-contacts {height: 630px;}

.acf-map img {
   max-width: inherit !important;
}
</style>
<script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCB2RShyxiN7xPsQy1QI_SbqXXjW5p08S0"></script>
<script defer type="text/javascript">
(function( $ ) {

/**
 * initMap
 *
 * Renders a Google Map onto the selected jQuery element
 *
 * @date    22/10/19
 * @since   5.8.6
 *
 * @param   jQuery $el The jQuery element.
 * @return  object The map instance.
 */
function initMap( $el ) {

    // Find marker elements within map.
    var $markers = $el.find('.marker');

    var styles = [
      {
          "featureType": "administrative",
          "elementType": "labels.text.fill",
          "stylers": [
              {
                  "color": "#444444"
              }
          ]
      },
      {
          "featureType": "landscape",
          "elementType": "all",
          "stylers": [
              {
                  "color": "#f2f2f2"
              }
          ]
      },
      {
          "featureType": "poi",
          "elementType": "all",
          "stylers": [
              {
                  "visibility": "off"
              }
          ]
      },
      {
          "featureType": "road",
          "elementType": "all",
          "stylers": [
              {
                  "saturation": -100
              },
              {
                  "lightness": 45
              }
          ]
      },
      {
          "featureType": "road.highway",
          "elementType": "all",
          "stylers": [
              {
                  "visibility": "simplified"
              }
          ]
      },
      {
          "featureType": "road.arterial",
          "elementType": "labels.icon",
          "stylers": [
              {
                  "visibility": "off"
              }
          ]
      },
      {
          "featureType": "transit",
          "elementType": "all",
          "stylers": [
              {
                  "visibility": "off"
              }
          ]
      },
      {
          "featureType": "water",
          "elementType": "all",
          "stylers": [
              {
                  "color": "#aeaeae"
              },
              {
                  "visibility": "on"
              }
          ]
      }
    ]

    // Create gerenic map.
    var mapArgs = {
        zoom        : $el.data('zoom') || 16,
        styles: styles,
        mapTypeId   : google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map( $el[0], mapArgs );

    // Add markers.
    map.markers = [];
    $markers.each(function(){
        initMarker( $(this), map );
    });

    // Center map based on markers.
    centerMap( map );

    // Return map instance.
    return map;
}

/**
 * initMarker
 *
 * Creates a marker for the given jQuery element and map.
 *
 * @date    22/10/19
 * @since   5.8.6
 *
 * @param   jQuery $el The jQuery element.
 * @param   object The map instance.
 * @return  object The marker instance.
 */
function initMarker( $marker, map ) {

    // Get position from marker.
    var lat = $marker.data('lat');
    var lng = $marker.data('lng');
    var latLng = {
        lat: parseFloat( lat ),
        lng: parseFloat( lng )
    };

    // Create marker instance.
    var marker = new google.maps.Marker({
        position : latLng,
        map: map,
        icon: {
          url: "<?php home_url(); ?>/wp-content/uploads/2022/02/kreuz_hotel_bern_mapmarker.png",
        }
    });

    // Append to reference for later use.
    map.markers.push( marker );

    // If marker contains HTML, add it to an infoWindow.
    if( $marker.html() ){

        // Create info window.
        var infowindow = new google.maps.InfoWindow({
            content: $marker.html()
        });

        // Show info window when marker is clicked.
        google.maps.event.addListener(marker, 'click', function() {
            infowindow.open( map, marker );
        });
    }
}

/**
 * centerMap
 *
 * Centers the map showing all markers in view.
 *
 * @date    22/10/19
 * @since   5.8.6
 *
 * @param   object The map instance.
 * @return  void
 */
function centerMap( map ) {

    // Create map boundaries from all map markers.
    var bounds = new google.maps.LatLngBounds();
    map.markers.forEach(function( marker ){
        bounds.extend({
            lat: marker.position.lat(),
            lng: marker.position.lng()
        });
    });

    // Case: Single marker.
    if( map.markers.length == 1 ){
        map.setCenter( bounds.getCenter() );

    // Case: Multiple markers.
    } else{
        map.fitBounds( bounds );
    }
}

// Render maps on page load.
$(document).ready(function(){
    $('.acf-map').each(function(){
        var map = initMap( $(this) );
    });
});

})(jQuery);

/*Open menu script*/
function menuMobile() {
  var x = document.getElementById("opener__menu");
  if (x.style.display === "block") {
    x.style.display = "none";
    x.classList.toggle("closed");
    x.classList.toggle("open");
  } else {
    x.style.display = "block";
    x.classList.toggle("open");
    x.classList.toggle("closed");
  }
}

(function( $ ) {
  $("#opener").click(function () {
    if ($("#opener__menu").hasClass("open")) {
      $(".icon-bar").css({'transition' : 'all .2s linear','width' : '22px','border-radius' : '5px'});
      $(".icon-bar:nth-child(1)").css({'transform' : 'translate(0,0) rotate(-45deg) scalex(1.3)','transition' : 'all .2s linear'});
      $(".icon-bar:nth-child(2)").css({'transition' : 'all .05s linear','height' : '0'});
      $(".icon-bar:nth-child(3)").css('transform', 'translate(0,-6px) rotate(45deg) scalex(1.3)');
      $("#opener").css('padding-top','20px');
    }else {
      $(".icon-bar").css({'transition' : 'all .2s linear','width' : '22px','border-radius' : '0px'});
      $(".icon-bar:nth-child(1)").css({'transform' : 'unset','transition' : 'all .2s linear'});
      $(".icon-bar:nth-child(2)").css({'transition' : 'all .05s linear','height' : '2px'});
      $(".icon-bar:nth-child(3)").css('transform', 'unset');
      $("#opener").css('padding-top','11px');
    }
  });
})(jQuery);

</script>
<?php endif;
