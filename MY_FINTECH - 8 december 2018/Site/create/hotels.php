<?php include "../header.php" ?>

<div class="columns is-gapless">
    <div class="column  has-background-info sidebar">
        <nav class="navbar is-primary">
            <div class="navbar-brand">
                <a class="navbar-item" href="/">
                    MOTU
                </a>
                <a role="button" class="navbar-burger burger nav-toggle" aria-label="menu" aria-expanded="false" data-target="navbar-menu">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>
            <div id="navbar-menu" class="navbar-menu nav-menu">
                <div class="navbar-start">
                    <a class="navbar-item" href="/profile">
                        <img src="/img/photo.png" width="30" height="30">
                        <p class="navbar-item">
                            Михаил Петров
                        </p>
                    </a>
                </div>
                <div class="navbar-end">
                    <a class="navbar-item" href="/create.php">
                        <i class="fas fa-chevron-left"></i> Назад
                    </a>
                </div>
            </div>
        </nav>
        <div class="container is-fluid">
            <p class="title">
                Гостиницы:
            </p>
            <div class="tile notification is-link">
                Демократ
            </div>
            <div class="tile notification is-link">
                Park Inn Прибалтийская
            </div>
            <div class="tile notification is-link">
                Россия
            </div>
            <div class="tile notification is-link">
                Бристоль
            </div>
            <div class="tile notification is-link">
                Отель Москва
            </div>
        </div>
        <footer class="footer has-background-info">
            <div class="content has-text-centered">
                <p>
                    <i class="fa fa-copyright"></i> MOTU | 2019 Все права защищены
                </p>
            </div>
        </footer>
    </div>
    <div class="column is-8">
        <div id="map" class="map-sticky" />
        <script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v2.3.0/mapbox-gl-geocoder.min.js'></script>
        <link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v2.3.0/mapbox-gl-geocoder.css' type='text/css' />
        <script>
            mapboxgl.accessToken = 'pk.eyJ1IjoicG9kbzFza2lpIiwiYSI6ImNqcGJsOWVybTI1bGgzcG40NHB0aHplYWMifQ.8kU5QIltsf_U1WCwhthmXA';

            var geocoder = new MapboxGeocoder({
                accessToken: mapboxgl.accessToken
            });

            var map = new mapboxgl.Map({
                container: 'map',
                style: 'mapbox://styles/mapbox/light-v9',
                center: [30.300640, 59.935851],
                zoom: 12
            });

            map.on("load", function() {
                map.loadImage("https://playground24.ru/img/hotel.png", function(error, image) {
                    if (error) throw error;
                    map.addImage("marker_hotel", image);
                    map.addLayer({
                        id: "hotel_1",
                        type: "symbol",
                        source: {
                            type: "geojson",
                            data: {
                                type: "FeatureCollection",
                                features: [{
                                    "type": "Feature",
                                    "geometry": {
                                        "type": "Point",
                                        "coordinates": [30.366474, 59.930364]
                                    },
                                }]
                            }
                        },
                        layout: {
                            "icon-image": "marker_hotel",
                        }
                    });
                });
                map.loadImage("https://playground24.ru/img/hotel.png", function(error, image) {
                    if (error) throw error;
                    map.addImage("marker_hotel", image);
                    map.addLayer({
                        id: "hotel_2",
                        type: "symbol",
                        source: {
                            type: "geojson",
                            data: {
                                type: "FeatureCollection",
                                features: [{
                                    "type": "Feature",
                                    "geometry": {
                                        "type": "Point",
                                        "coordinates": [30.215601, 59.938763]
                                    },
                                }]
                            }
                        },
                        layout: {
                            "icon-image": "marker_hotel",
                        }
                    });
                });
                map.loadImage("https://playground24.ru/img/hotel.png", function(error, image) {
                    if (error) throw error;
                    map.addImage("marker_hotel", image);
                    map.addLayer({
                        id: "hotel_3",
                        type: "symbol",
                        source: {
                            type: "geojson",
                            data: {
                                type: "FeatureCollection",
                                features: [{
                                    "type": "Feature",
                                    "geometry": {
                                        "type": "Point",
                                        "coordinates": [30.315220, 59.868926]
                                    },
                                }]
                            }
                        },
                        layout: {
                            "icon-image": "marker_hotel",
                        }
                    });
                });
                map.loadImage("https://playground24.ru/img/hotel.png", function(error, image) {
                    if (error) throw error;
                    map.addImage("marker_hotel", image);
                    map.addLayer({
                        id: "hotel_4",
                        type: "symbol",
                        source: {
                            type: "geojson",
                            data: {
                                type: "FeatureCollection",
                                features: [{
                                    "type": "Feature",
                                    "geometry": {
                                        "type": "Point",
                                        "coordinates": [30.340506, 59.909055]
                                    },
                                }]
                            }
                        },
                        layout: {
                            "icon-image": "marker_hotel",
                        }
                    });
                });
                map.loadImage("https://playground24.ru/img/hotel.png", function(error, image) {
                    if (error) throw error;
                    map.addImage("marker_hotel", image);
                    map.addLayer({
                        id: "hotel_5",
                        type: "symbol",
                        source: {
                            type: "geojson",
                            data: {
                                type: "FeatureCollection",
                                features: [{
                                    "type": "Feature",
                                    "geometry": {
                                        "type": "Point",
                                        "coordinates": [30.386570, 59.924679]
                                    },
                                }]
                            }
                        },
                        layout: {
                            "icon-image": "marker_hotel",
                        }
                    });
                });
            });

        </script>
    </div>
</div>

<?php include "../footer.php" ?>
