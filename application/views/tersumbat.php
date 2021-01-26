<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Directing Template">
    <meta name="keywords" content="Directing, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Limbungan | Baru</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css" type="text/css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.4.3/css/ol.css" type="text/css">
    <style>
        .map {
            height: 400px;
            width: 100%;
        }
    </style>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style1.css">
    <script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.4.3/build/ol.js"></script>

</head>

<body>

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- Header Section Begin -->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="<?= site_url('home/index') ?>"><img src="<?php echo base_url() ?>assets/img/location.png" alt="">
                            <font face="Montserrat " color="red" size="6">Limbungan </font>
                            <font face="Montserrat" color="white" size="6">Baru </font>
                        </a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li><a href=<?= site_url('home/index') ?>>Home</a></li>
                                <li class="active"><a href=<?= site_url('home/listing') ?>>Map</a></li>
                                <li><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href=<?= site_url('home/about') ?>>About</a></li>
                                        <li><a href=<?= site_url('home/contact') ?>>Contact</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-area set-bg" data-setbg="<?php echo base_url() ?>assets/img/breadcrumb/breadcrumb-normal.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">

                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Map Begin -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>MAP Titik Tersumbat</h2>
                    <p>Limbungan Baru</p>
                    <br>
                    <a href="<?= site_url('home/drainase') ?>" class="btn btn-primary">Map Drainase</a>
                    <a href="<?= site_url('home/banjir') ?>" class="btn btn-primary">Map Titik Banjir</a>
                    <a href="<?= site_url('home/tersumbat') ?>" class="btn btn-primary">Map Titik Tersumbat</a>
                    <div class="navbar">
                        <div class="navbar-inner">
                            <div class="container">
                                <ul class="nav">
                                    <li class="dropdown" id="accountmenu"><br>
                                        <a class="btn btn-success  dropdown-toggle" data-toggle="dropdown" href="#">Filter Jalan<b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="<?= site_url('home/ampera') ?>" class="btn btn-success">Jl. Ampera</a></li>
                                            <li><a class="dropdown-item" href="<?= site_url('home/harapan') ?>" class="btn btn-success">Jl. Harapan</a></li>
                                            <li><a class="dropdown-item" href="<?= site_url('home/harmonis') ?>" class="btn btn-success">Jl. Harmonis</a></li>
                                            <li><a class="dropdown-item" href="<?= site_url('home/pembangunan') ?>" class="btn btn-success">Jl. Pembangunan</a></li>
                                            <li><a class="dropdown-item" href="<?= site_url('home/sekolah') ?>" class="btn btn-success">Jl. Sekolah</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript" src="js/jquery-latest.js"></script>
                    <script type="text/javascript" src="js/bootstrap.js"></script>
                    <script type="text/javascript">
                        $(document).ready(function() {
                            $('.dropdown-toggle').dropdown();
                        });
                    </script>
                </div>
                <div class="contact__map">
                    <div id="map" class="map"></div>

                    <div id="popup" class="ol-popup">
                        <a href="#" id="popup-closer" class="ol-popup-closer"></a>
                        <div id="popup-content"></div>
                    </div>

                    <script type="text/javascript">
                        var vectorLayer = new ol.layer.Vector({
                            source: new ol.source.Vector({
                                format: new ol.format.GeoJSON(),
                                url: '<?php echo base_url() ?>assets/data/Drainase.json' //url ini digunakan untuk mengambil data drainase
                            }),
                            style: new ol.style.Style({
                                image: new ol.style.Icon(({
                                    anchor: [0.5, 46],
                                    anchorXUnits: 'fraticon',
                                    anchorYUnits: 'pixels',
                                    src: '<?php echo base_url() ?>assets/icon/placeholder.png' //merupakan tampilan gambar petunjuk location
                                }))
                            })
                        });

                        var vectorLayer2 = new ol.layer.Vector({
                            source: new ol.source.Vector({
                                format: new ol.format.GeoJSON(),
                                url: '<?php echo base_url() ?>assets/data/Banjir.json' //digunakan untuk mengambil data banjir
                            }),
                            style: new ol.style.Style({
                                image: new ol.style.Icon(({
                                    anchor: [0.5, 46],
                                    anchorXUnits: 'fraticon',
                                    anchorYUnits: 'pixels',
                                    src: '<?php echo base_url() ?>assets/icon/placeholder-2.png' //merupakan tampilan gambar petunjuk location
                                }))
                            })
                        });

                        var vectorLayer3 = new ol.layer.Vector({
                            source: new ol.source.Vector({
                                format: new ol.format.GeoJSON(),
                                url: '<?php echo base_url() ?>assets/data/Tersumbat.json' //digunakan untuk mengambil data tersumbat
                            }),
                            style: new ol.style.Style({
                                image: new ol.style.Icon(({
                                    anchor: [0.5, 46],
                                    anchorXUnits: 'fraticon',
                                    anchorYUnits: 'pixels',
                                    src: '<?php echo base_url() ?>assets/icon/placeholder-3.png' //merupakan tampilan gambar petunjuk location
                                }))
                            })
                        });

                        var vectorLayer4 = new ol.layer.Vector({
                            source: new ol.source.Vector({
                                format: new ol.format.GeoJSON(),
                                url: '<?php echo base_url() ?>assets/data/Polyline_Jalan.json' //digunakan untuk mengambil data yang telah dibuat polygon.
                            }),
                        });

                        var vectorLayer5 = new ol.layer.Vector({
                            source: new ol.source.Vector({
                                format: new ol.format.GeoJSON(),
                                url: '<?php echo base_url() ?>assets/data/Polygon.json' //digunakan untuk mengambil data yang telah dibuat polygon.
                            }),
                        });


                        var map = new ol.Map({
                            target: 'map',
                            layers: [
                                new ol.layer.Tile({
                                    source: new ol.source.OSM()
                                }), vectorLayer4,
                                vectorLayer3 //digunakan untuk menampilkan hasil
                            ],
                            view: new ol.View({
                                center: ol.proj.fromLonLat([101.438309,
                                    0.510440
                                ]), //untuk menentukan titik koordinat awal peta riau
                                zoom: 10 //bisa digunakan untuk menzoom sampai 10 kali
                            })
                        });
                    </script>

                    <script type="text/javascript">
                        var container = document.getElementById('popup'); //digunakan untuk membuat popup nya
                        content_element = document.getElementById('popup-content'), //disini untuk menampilkan popup
                            closer = document.getElementById(
                                'popup-closer'); //dan yang ini untuk menutup kembali popupnya

                        closer.onclick = function() { //untuk tempat titik kliknya
                            overlay.setPosition(undefined); //dan disini penempatan posisinya
                            closer.blur(); //membuat tampilan popup blur
                            return false;
                        };

                        var overlay = new ol.Overlay({ //membuat overlay yang baru
                            element: container,
                            autoPan: true,
                            offset: [0, -10]
                        });

                        map.addOverlay(overlay);
                        var fullscreen = new ol.control.FullScreen(); //untuk menampilkan map dengan layar penuh
                        map.addControl(fullscreen);

                        map.on('click', function(evt) {
                            var feature = map.forEachFeatureAtPixel(evt.pixel,
                                function(feature, layer) {
                                    return feature;
                                });

                            if (feature) { // untuk cek feature jalan atau tidak
                                var geometry = feature.getGeometry(); //untuk mendapatkan titik geometri
                                var coord = geometry.getCoordinates(); //untuk mendapatkan titik koordinat

                                var content = '<h5><strong>Nama Jalan : ' + feature.get('Nama_Jalan_Tersumbat') + '</strong></h5>'; //untuk menampilkan Nama Jalan yang diambil dari variabel Nama_Jalan_Tersumbat

                                content_element.innerHTML = content;
                                overlay.setPosition(coord);

                                console.info(feature.getProperties());
                            }
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
    <!-- Map End -->


    <!-- Js Plugins -->
    <script src="<?php echo base_url() ?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.nice-select.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery-ui.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.nicescroll.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.barfiller.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.slicknav.js"></script>
    <script src="<?php echo base_url() ?>assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/main.js"></script>
</body>

</html>