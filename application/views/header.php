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
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
</head>

<body>
    <!-- Page Preloder -->
    <div id=" preloder">
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
                                <li class="active"><a href=<?= site_url('home/index') ?>>Home</a></li>
                                <li class="active"><a href=<?= site_url('home/listing') ?>>Map</a></li>
                                <li class="active"><a href="#">Pages</a>
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