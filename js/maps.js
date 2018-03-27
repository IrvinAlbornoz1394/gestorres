var map;
var marker;
function initMap() {
    var uluru = {lat: 21.0127021, lng: -89.692326};
    map = new google.maps.Map(document.getElementById('map'), {
      zoom: 12,
      center: uluru
    });
}
function initMap_editar() {
    var uluru = {lat: 21.0127021, lng: -89.692326};
    map = new google.maps.Map(document.getElementById('map_edit'), {
      zoom: 16,
      center: uluru
    });
}

    function set_marker(){
        var col = $('#id_colonia_gestion option:selected').text();
        var calle = $('.calle').val();
        var num = $('.num_ext').val();
        console.log(col);
        console.log(calle);
        console.log(num);
        var url = 'https://maps.googleapis.com/maps/api/geocode/json?address=calle'+calle+','+num+'+'+col+',yucatan&key=AIzaSyBn5leYbE_WFaLGF7yCiYXSBVNUZz02qZ4';
        console.log(url);
        $.ajax({
            url: url,
            dataType:'json',
            success:function(json){
                console.log(json);
                var location = json.results[0].geometry.location;
                marker = new google.maps.Marker({
                    draggable: true,
                    title:"Arrastrame al punto deseado",
                    position: location,
                    map: map
                });
                get_position(marker);
                google.maps.event.addListener(marker, 'dragend', function() {
                    get_position(marker);
                });
                map.setZoom(16);
                map.setCenter(location);
            },
            error:function(error){
                console.log(error);
            }
        });
    }

    function get_position(marker){
        var markerLatLng = marker.getPosition();
        $(".lat_map").val(markerLatLng.lat());
        $(".lng_map").val(markerLatLng.lng());
    }

    function set_ubicacion(){
            deleteMarkers();
            $.when(deleteMarkers()).then(set_marker());
        };