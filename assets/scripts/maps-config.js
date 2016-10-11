/**
 * Created by Ttek on 20/03/15.
 */

function initialize() {
    var mapCanvas = document.getElementById('map-office');
    var position = {
        'france': new google.maps.LatLng(48.844269,2.383038, 2.383038,17),
        'belgique': new google.maps.LatLng(50.8250846, 4.4002753, 4.4002753,17),
        'italie': new google.maps.LatLng(45.4553016, 9.1865395, 9.1865395,17),
        'portugal': new google.maps.LatLng(38.7275351, -9.1415242, -9.1415242,17),
        'espagne': new google.maps.LatLng(40.4191821, -3.6937858, -3.6937858,18),
        'usa': new google.maps.LatLng(37.7825688,-122.4111482, -122.4111482,17),
        'bresil': new google.maps.LatLng(-22.9055107,-43.1814659, -43.1814659,15)
    };
    var	main_color = '#007CC1',
    saturation_value= -50,
    brightness_value= 25;
    var mapOptions = {
        center: position.france,
        zoom: 15,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        featureType: "administrative.locality",

    styles: [
    {
    //set saturation for the labels on the map
    elementType: "labels",
    stylers: [
    {saturation: saturation_value}
]
},
                {	//poi stands for point of interest - don't show these lables on the map
                    featureType: "poi",
                    elementType: "labels",
                    stylers: [
                    {visibility: "off"}
]
},
                {
                    //don't show highways lables on the map
                    featureType: 'road.highway',
                    elementType: 'labels',
                    stylers: [
                    {visibility: "off"}
]
},
                {
                    //don't show local road lables on the map
                    featureType: "road.local",
                    elementType: "labels.icon",
                    stylers: [
                    {visibility: "off"}
]
},
                {
                    //don't show arterial road lables on the map
                    featureType: "road.arterial",
                    elementType: "labels.icon",
                    stylers: [
                    {visibility: "off"}
]
},
                {
                    //don't show road lables on the map
                    featureType: "road",
                    elementType: "geometry.stroke",
                    stylers: [
                    {visibility: "off"}
]
},
//style different elements on the map
                {
                    featureType: "transit",
                    elementType: "geometry.fill",
                    stylers: [
                    { hue: main_color },
                        { visibility: "on" },
                        { lightness: brightness_value },
                        { saturation: saturation_value }
]
},
                {
                    featureType: "poi",
                    elementType: "geometry.fill",
                    stylers: [
                    { hue: main_color },
                        { visibility: "on" },
                        { lightness: brightness_value },
                        { saturation: saturation_value }
]
},
                {
                    featureType: "poi.government",
                    elementType: "geometry.fill",
                    stylers: [
                    { hue: main_color },
                        { visibility: "on" },
                        { lightness: brightness_value },
                        { saturation: saturation_value }
]
},
                {
                    featureType: "poi.sport_complex",
                    elementType: "geometry.fill",
                    stylers: [
                    { hue: main_color },
                        { visibility: "on" },
                        { lightness: brightness_value },
                        { saturation: saturation_value }
]
},
                {
                    featureType: "poi.attraction",
                    elementType: "geometry.fill",
                    stylers: [
                    { hue: main_color },
                        { visibility: "on" },
                        { lightness: brightness_value },
                        { saturation: saturation_value }
]
},
                {
                    featureType: "poi.business",
                    elementType: "geometry.fill",
                    stylers: [
                    { hue: main_color },
                        { visibility: "on" },
                        { lightness: brightness_value },
                        { saturation: saturation_value }
]
},
                {
                    featureType: "transit",
                    elementType: "geometry.fill",
                    stylers: [
                    { hue: main_color },
                        { visibility: "on" },
                        { lightness: brightness_value },
                        { saturation: saturation_value }
]
},
                {
                    featureType: "transit.station",
                    elementType: "geometry.fill",
                    stylers: [
                    { hue: main_color },
                        { visibility: "on" },
                        { lightness: brightness_value },
                        { saturation: saturation_value }
]
},
                {
                    featureType: "landscape",
                    stylers: [
                    { hue: main_color },
                        { visibility: "on" },
                        { lightness: brightness_value },
                        { saturation: saturation_value }
]

},
                {
                    featureType: "road",
                    elementType: "geometry.fill",
                    stylers: [
                    { hue: main_color },
                        { visibility: "on" },
                        { lightness: brightness_value },
                        { saturation: saturation_value }
]
},
                {
                    featureType: "road.highway",
                    elementType: "geometry.fill",
                    stylers: [
                    { hue: main_color },
                        { visibility: "on" },
                        { lightness: brightness_value },
                        { saturation: saturation_value }
]
},
                {
                    featureType: "water",
                    elementType: "geometry",
                    stylers: [
                    { hue: main_color },
                        { visibility: "on" },
                        { lightness: brightness_value },
                        { saturation: saturation_value }
]
}
]
}

    var map = new google.maps.Map(mapCanvas, mapOptions)

    var iconBase = '../hipay/wp-content/themes/hipay-theme/library/img/';
    var marker = new google.maps.Marker({
        position: map.getCenter(),
        map: map,
        icon: iconBase + 'pin.svg',
        animation: google.maps.Animation.DROP
    });

    var infowindow = {
        'franceinfo': new google.maps.InfoWindow({
            content:
                "<div id='france-info-map'>" +
                    '<h3>France</h3>' +
                    '<p>6 Place du Colonel Bourgoin<br>75012 PARIS</p>' +
                '</div>'
        }),
        'belgiqueinfo': new google.maps.InfoWindow({
            content:
                "<div id='belgique-info-map'>" +
                    "<h3>Belgique</h3>" +
                    '<p>Avenue des Volontaires 19<br>1160 Auderghem</p>' +
                '</div>'
        }),
        'italieinfo': new google.maps.InfoWindow({
            content:
                "<div id='italie-info-map'>" +
                    "<h3>Italia</h3>" +
                    '<p>Via Cosimo del Fante, 4<br>20122 Milano</p>' +
                    '</div>'
        }),
        'portugalinfo': new google.maps.InfoWindow({
            content:
                "<div id='portugal-info-map'>" +
                    "<h3>Portugal</h3>" +
                    '<p>Rua Joaquim Bonifácio, 21 – 3º<br>P-1150-195 Lisboa</p>' +
                '</div>'
        }),
        'espagneinfo': new google.maps.InfoWindow({
            content:
                "<div id='espagne-info-map'>" +
                    "<h3>España</h3>" +
                    '<p>Alcalá, 21. Planta 1<br>28014- Madrid</p>' +
                '</div>'
        }),
        'usainfo': new google.maps.InfoWindow({
            content:
                "<div id='usa-info-map'>" +
                    "<h3>USA</h3>" +
                    '<p>25 Taylor Street<br>San Francisco</p>' +
                '</div>'
        }),
        'bresilinfo': new google.maps.InfoWindow({
            content:
                "<div id='bresil-info-map'>" +
                    "<h3>Brasil</h3>" +
                    '<p>v. Rio Branco<br>99 – 21 andar-parte<br>Centro, Rio de Janeiro/RJ</p>' +
                '</div>'
        })
    }

    var currentInfoWindow = null;
    if (currentInfoWindow != null) {
        currentInfoWindow.close();
    }
    currentInfoWindow = infowindow.franceinfo;
    infowindow.franceinfo.open(map,marker);

    document.getElementById('map-france').onclick=function(){
        var france = position.france;
        map.setCenter(france);
        map.setZoom(15);
        marker.setPosition(map.getCenter());
        marker.setAnimation(google.maps.Animation.DROP);
        if (currentInfoWindow != null) {
            currentInfoWindow.close();
        }
        currentInfoWindow = infowindow.franceinfo;
        infowindow.franceinfo.open(map,marker);
    };
    document.getElementById('map-belgique').onclick=function(){
        var mapPosition = position.belgique;
        map.setCenter(mapPosition);
        marker.setPosition(map.getCenter());
        marker.setAnimation(google.maps.Animation.DROP);
        if (currentInfoWindow != null) {
            currentInfoWindow.close();
        }
        currentInfoWindow = infowindow.belgiqueinfo;
        infowindow.belgiqueinfo.open(map,marker);
    };
    document.getElementById('map-italie').onclick=function(){
        var mapPosition = position.italie;
        map.setCenter(mapPosition);
        marker.setPosition(map.getCenter());
        marker.setAnimation(google.maps.Animation.DROP);
        if (currentInfoWindow != null) {
            currentInfoWindow.close();
        }
        currentInfoWindow = infowindow.italieinfo;
        infowindow.italieinfo.open(map,marker);
    };
    document.getElementById('map-portugal').onclick=function(){
        var mapPosition = position.portugal;
        map.setCenter(mapPosition);
        marker.setPosition(map.getCenter());
        marker.setAnimation(google.maps.Animation.DROP);
        if (currentInfoWindow != null) {
            currentInfoWindow.close();
        }
        currentInfoWindow = infowindow.portugalinfo;
        infowindow.portugalinfo.open(map,marker);
    };
    document.getElementById('map-espagne').onclick=function(){
        var mapPosition = position.espagne;
        map.setCenter(mapPosition);
        marker.setPosition(map.getCenter());
        marker.setAnimation(google.maps.Animation.DROP);
        if (currentInfoWindow != null) {
            currentInfoWindow.close();
        }
        currentInfoWindow = infowindow.espagneinfo;
        infowindow.espagneinfo.open(map,marker);
    };
    document.getElementById('map-usa').onclick=function(){
        var mapPosition = position.usa;
        map.setCenter(mapPosition);
        marker.setPosition(map.getCenter());
        marker.setAnimation(google.maps.Animation.DROP);
        if (currentInfoWindow != null) {
            currentInfoWindow.close();
        }
        currentInfoWindow = infowindow.usainfo;
        infowindow.usainfo.open(map,marker);
    };
    document.getElementById('map-bresil').onclick=function(){
        var mapPosition = position.bresil;
        map.setCenter(mapPosition);
        marker.setPosition(map.getCenter());
        marker.setAnimation(google.maps.Animation.DROP);
        if (currentInfoWindow != null) {
            currentInfoWindow.close();
        }
        currentInfoWindow = infowindow.bresilinfo;
        infowindow.bresilinfo.open(map,marker);
    };
}
google.maps.event.addDomListener(window, 'load', initialize);