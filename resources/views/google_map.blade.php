<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>قالب Nextable - قالب مدیریتی نکستیبل</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/media/image/favicon.png') }}">

    <!-- Theme Color -->
    <meta name="theme-color" content="#5867dd">

    <!-- Plugin styles -->
    <link rel="stylesheet" href="{{ asset('vendors/bundle.css') }}" type="text/css">

    <!-- App styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}" type="text/css">
</head>

<body>
    @include('template.page_loader');
    @include('template.sidebar_user_profile');
    @include('template.sidebar_settings');
    @include('template.navigation');
    @include('template.header');
    <!-- begin::main content -->
    <main class="main-content">

        <div class="row">
            <div class="col-xl-6 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">پیش فرض</h6>
                        <div id="default-map" style="height: 400px"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">نقشه خاکستری</h6>
                        <div id="simple-map" style="height: 400px"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h6 class="card-title">نشانگر نقشه</h6>
                <div id="map-marker" style="height: 400px"></div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h6 class="card-title">خدمات مسیریابی</h6>
                <div id="floating-panel">
                    <form class="form-inline m-b-20">
                        <div class="form-group mr-3">
                            <label class="p-r-10 col-form-label">شروع</label>
                            <select class="form-control" id="start">
                                <option value="chicago, il">شیراز</option>
                                <option value="st louis, mo">تبریز</option>
                                <option value="joplin, mo">تهران</option>
                                <option value="oklahoma city, ok">لورم ایپسوم متن</option>
                                <option value="amarillo, tx">لورم ایپسوم</option>
                                <option value="gallup, nm">لورم ایپسوم</option>
                                <option value="flagstaff, az">لورم ایپسوم متن</option>
                                <option value="winona, az">لورم ایپسوم</option>
                                <option value="kingman, az">لورم ایپسوم</option>
                                <option value="barstow, ca">لورم ایپسوم</option>
                                <option value="san bernardino, ca">لورم ایپسوم متن</option>
                                <option value="los angeles, ca">اصفهان</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="p-r-10 pl-sm-3 col-form-label">پایان</label>
                            <select class="form-control" id="end">
                                <option value="chicago, il">شیراز</option>
                                <option value="st louis, mo">تبریز</option>
                                <option value="joplin, mo">تهران</option>
                                <option value="oklahoma city, ok">لورم ایپسوم متن</option>
                                <option value="amarillo, tx">لورم ایپسوم</option>
                                <option value="gallup, nm">لورم ایپسوم</option>
                                <option value="flagstaff, az">لورم ایپسوم متن</option>
                                <option value="winona, az">لورم ایپسوم</option>
                                <option value="kingman, az">لورم ایپسوم</option>
                                <option value="barstow, ca">لورم ایپسوم</option>
                                <option value="san bernardino, ca">لورم ایپسوم متن</option>
                                <option value="los angeles, ca">اصفهان</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div id="directions-simple" style="height: 400px"></div>
            </div>
        </div>

    </main>
    <!-- end::main content -->

    <!-- Plugin scripts -->
    <script src="{{ asset('vendors/bundle.js') }}"></script>

    <script>
        var style = [{
                "elementType": "geometry",
                "stylers": [{
                    "color": "#f5f5f5"
                }]
            },
            {
                "elementType": "labels.icon",
                "stylers": [{
                    "visibility": "off"
                }]
            },
            {
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#616161"
                }]
            },
            {
                "elementType": "labels.text.stroke",
                "stylers": [{
                    "color": "#f5f5f5"
                }]
            },
            {
                "featureType": "administrative.land_parcel",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#bdbdbd"
                }]
            },
            {
                "featureType": "poi",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#eeeeee"
                }]
            },
            {
                "featureType": "poi",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#757575"
                }]
            },
            {
                "featureType": "poi.park",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#e5e5e5"
                }]
            },
            {
                "featureType": "poi.park",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#9e9e9e"
                }]
            },
            {
                "featureType": "road",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#ffffff"
                }]
            },
            {
                "featureType": "road.arterial",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#757575"
                }]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#dadada"
                }]
            },
            {
                "featureType": "road.highway",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#616161"
                }]
            },
            {
                "featureType": "road.local",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#9e9e9e"
                }]
            },
            {
                "featureType": "transit.line",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#e5e5e5"
                }]
            },
            {
                "featureType": "transit.station",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#eeeeee"
                }]
            },
            {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#c9c9c9"
                }]
            },
            {
                "featureType": "water",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#9e9e9e"
                }]
            }
        ];

        function initialize() {
            defaultMap();
            simpleMap();
            mapMarker();
            directionsSimple();
        }

        function defaultMap() {
            var map;
            map = new google.maps.Map(document.getElementById('default-map'), {
                center: {
                    lat: -34.397,
                    lng: 150.644
                },
                zoom: 8
            });
        }

        function simpleMap() {
            var map;
            map = new google.maps.Map(document.getElementById('simple-map'), {
                center: {
                    lat: -34.397,
                    lng: 150.644
                },
                zoom: 8,
                styles: style
            });
        }

        function mapMarker() {
            var myLatLng = {
                lat: -25.363,
                lng: 131.044
            };

            var map = new google.maps.Map(document.getElementById('map-marker'), {
                zoom: 4,
                center: myLatLng,
                styles: style
            });

            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: 'Hello World!'
            });
        }

        function directionsSimple() {
            var directionsService = new google.maps.DirectionsService;
            var directionsDisplay = new google.maps.DirectionsRenderer;
            var map = new google.maps.Map(document.getElementById('directions-simple'), {
                zoom: 7,
                center: {
                    lat: 41.85,
                    lng: -87.65
                },
                styles: style
            });
            directionsDisplay.setMap(map);

            var onChangeHandler = function() {
                calculateAndDisplayRoute(directionsService, directionsDisplay);
            };
            document.getElementById('start').addEventListener('change', onChangeHandler);
            document.getElementById('end').addEventListener('change', onChangeHandler);
        }

        function calculateAndDisplayRoute(directionsService, directionsDisplay) {
            directionsService.route({
                origin: document.getElementById('start').value,
                destination: document.getElementById('end').value,
                travelMode: 'DRIVING'
            }, function(response, status) {
                if (status === 'OK') {
                    directionsDisplay.setDirections(response);
                } else {
                    window.alert('Directions request failed due to ' + status);
                }
            });
        }
    </script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAEn4c_T1rFt7ltf_oNavnjND8dDPm4KQs&amp;language=fa&amp;callback=initialize"
        async defer></script>

    <!-- App scripts -->
    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>
