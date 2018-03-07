// This example displays an address form, using the autocomplete feature
// of the Google Places API to help users fill in the information.

// This example requires the Places library. Include the libraries=places
// parameter when you first load the API. For example:
// <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
var myLatlng = {lat: 46.453223, lng: 30.730854}; // start coor  46.453223, 30.730854
var distance=null;
var placeSearch, autocomplete;
var componentForm = {
    street_number: 'short_name',
    route: 'long_name',
    locality: 'long_name',
    administrative_area_level_1: 'short_name',
    country: 'long_name',
    postal_code: 'short_name'
};
//var  id_place_form_list=['objects-country','objects-sity','objects-state','objects-zip','objects-street'];
var  id_place_form_list=['inputext_7','inputext_8','inputext_5','inputext_6','inputext_7'];
function initAutocomplete() {
    // Create the autocomplete object, restricting the search to geographical
    // location types.
    autocomplete = new google.maps.places.Autocomplete(
        /** @type {!HTMLInputElement} */(document.getElementById('address_text')),
        {types: ['geocode']});

    // When the user selects an address from the dropdown, populate the address
    // fields in the form.
    autocomplete.addListener('place_changed', fillInAddress);

    initMap();

}
function clear_el(el_id) {
    document.getElementById(el_id).value = '';
    document.getElementById(el_id).disabled = false;
}
function fillInAddress() {
    // Get the place details from the autocomplete object.
    var place = autocomplete.getPlace();
    var gm_lat = place.geometry.location.lat(),
        gm_lng = place.geometry.location.lng();

    fill_inputs_coordinate(gm_lat,gm_lng);
    // clear_el('objects-lat'); clear_el('objects-lng');
    // document.getElementById('objects-lat').value = gm_lat; document.getElementById('objects-lng').value = gm_lng;

    for (var component in componentForm) {
        clear_el(component);
    }
    id_place_form_list.forEach(function(item) {
        clear_el(item);
    });

    //clear_el('objects-district');
    clear_el('inputext_8'); // id поля района

    // change place on map
    var geolocate = new google.maps.LatLng(gm_lat, gm_lng);
    marker.setPosition(geolocate);
    map.setCenter(geolocate);

    // Get each component of the address from the place details
    // and fill the corresponding field on the form.
    for (var i = 0; i < place.address_components.length; i++) {
        var addressType = place.address_components[i].types[0];
         //console.log(place.address_components)
       //  console.log(place.address_components[i].types)

        if (place.address_components) {
            address = [
                (place.address_components[0] && place.address_components[0].short_name || ''),
                (place.address_components[1] && place.address_components[1].short_name || ''),
                (place.address_components[2] && place.address_components[2].short_name || '')
            ].join(' ');
            a1=place.address_components[0] && place.address_components[0].short_name ;
            a2=place.address_components[1] && place.address_components[1].short_name ;
            a3=place.address_components[2] && place.address_components[2].short_name ;

            if(typeof a1 != "undefined" && typeof a2 != "undefined" && typeof a3 != "undefined"){  // если есть район нужно еще проверять a2 район
                console.log([a1,a2,a3]);
               // document.getElementById('objects-district').value = a2;
                document.getElementById('inputext_8').value = a2;
            }

        }

        if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
            fill_input_place(place.address_components[i].types[0],val);
          //  console.log([place.address_components[i].types[0],val])
          //   switch(place.address_components[i].types[0]) {
          //       case 'country':
          //           document.getElementById('objects-country').value = val;
          //           break;
          //       case 'locality':
          //           document.getElementById('objects-sity').value = val;
          //           break;
          //       case 'administrative_area_level_1':
          //           document.getElementById('objects-state').value = val;
          //           break;
          //       case 'postal_code':
          //           document.getElementById('objects-zip').value = val;
          //           break;
          //
          //   }

        }


    }





}


function fill_input_place(sw,val) {
    switch(sw) {
        case 'country':
            document.getElementById('objects-country').value = val;
            break;
        case 'locality':
            document.getElementById('objects-sity').value = val;
            break;
        case 'administrative_area_level_1':
            document.getElementById('objects-state').value = val;
            break;
        case 'postal_code':
            document.getElementById('objects-zip').value = val;
            break;
        case 'route':
            document.getElementById('inputext_7').value = val;
            break;


    }
}

// Bias the autocomplete object to the user's geographical location,
// as supplied by the browser's 'navigator.geolocation' object.
function geolocate() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
                center: geolocation,
                radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
        });
    }
}

var map,marker,geocoder;
function initMap() {

    geocoder = new google.maps.Geocoder();
    map = new google.maps.Map(document.getElementById('map'), {
        zoom: 12,
        center: myLatlng
    });


    var pinImage = new google.maps.MarkerImage("http://www.googlemapsmarkers.com/v1/B/009900/");
     marker_main = new google.maps.Marker({
        position: myLatlng,
        map: map,
         icon: pinImage,
        title: 'Babooshka'
    });
    marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        title: 'Click to zoom'
    });

    var contentString = '<div id="content_google_map">'+
        '<div id="siteNotice">'+
        '</div>'+
        '<h3 id="firstHeading" class="firstHeading">Кафе Babooshka</h3>'+
        '<div id="bodyContent">'+
        '<p><b>Lorem</b>' +
        'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto enim fuga inventore iure nisi provident quae quod rerum sit veritatis. Accusantium ad consequatur eveniet exercitationem ipsa nostrum repudiandae sapiente veniam?</p>'+
        '<p>Attribution: Uluru, <a href="https://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">'+
        '</div>'+
        '</div>';
    var pinImage = new google.maps.MarkerImage("http://www.googlemapsmarkers.com/v1/009900/");
    var infowindow = new google.maps.InfoWindow({
        content: contentString,
        maxWidth: 320
    });
    marker_main.addListener('click', function() {
        infowindow.open(map, marker_main);
    });

    map.addListener('center_changed', function() {
    });

    map.addListener('click', function(e) {
        infowindow.close();
        // change place on map
        marker.setPosition(e.latLng);
        fill_inputs_coordinate(e.latLng.lat(),e.latLng.lng());
        codeLatLng(e.latLng.lat(),e.latLng.lng());

    });
    marker.addListener('click', function() {
        map.setZoom(8);
        map.setCenter(marker.getPosition());
    });
}

function fill_inputs_coordinate(lat,lng) {
    clear_el('objects-lat'); clear_el('objects-lng');
    document.getElementById('objects-lat').value = lat; document.getElementById('objects-lng').value = lng;
}




function initialize() {
    geocoder = new google.maps.Geocoder();
}

function codeLatLng(lat, lng) {
    var latlng = new google.maps.LatLng(lat, lng);
     distance = google.maps.geometry.spherical.computeDistanceBetween(new google.maps.LatLng(myLatlng.lat, myLatlng.lng),latlng);
    console.log(distance);
    dvizh.cart.changeInputValue();
    dvizh.cart.renderCart();

    geocoder.geocode({
        'latLng': latlng
    }, function (results, status) {
        if (status === google.maps.GeocoderStatus.OK) {
            if (results[1]) {
                console.log(results[1]);
                document.getElementById('address_text').value = results[1].formatted_address;

                console.log(results[1].address_components);
                id_place_form_list.forEach(function(item) {
                    clear_el(item);
                });
                results[1].address_components.forEach(function (e,i) {
                    // ["political", "sublocality", "sublocality_level_1"]
                    a1=e.types[0];
                    a2=e.types[1];
                    a3=e.types[2];
                    if(typeof a1 != "undefined" && typeof a2 != "undefined" && typeof a3 != "undefined"){  // если есть район нужно еще проверять a2 район

                       if(a1=="political" && a2=="sublocality" && a3=="sublocality_level_1"){

                           //document.getElementById('objects-district').value = e.long_name;
                           document.getElementById('inputext_8').value = e.long_name;

                       }
                    }


                    fill_input_place(e.types[0],e.long_name);

                });


            } else {
                console.log('No results found');
            }
        } else {
            console.log('Geocoder failed due to: ' + status);
        }
    });
}

//google.maps.event.addDomListener(window, 'load', initialize);