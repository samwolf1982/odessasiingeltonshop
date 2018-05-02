(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.12';
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));


function initMapp() {
    var uluru = {lat: 46.418591, lng: 30.663267};
    var mapOptions = {
        zoom: 10.75,
        center: uluru
    }
    var map = new google.maps.Map(document.getElementById('widget_map'), mapOptions);

    console.log(312312);
}

initMapp();

