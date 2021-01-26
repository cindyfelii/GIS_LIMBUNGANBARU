<!-- Hero Section Begin -->
<section class="hero set-bg" data-setbg="<?php echo base_url() ?>assets/img/hero/danau.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="hero__text">
                    <div class="section-title">
                        <h2>Selamat Datang</h2>
                        <font color="black" size="3">Di website Limbungan Baru, disini kami akan menyampaikan
                            informasi mengenai titik drainase, titik banjir dan titik tersumbat</font>
                    </div>
                    <div class="hero__search__form">
                        <form action="<?= site_url('home/listing') ?>">
                            <input type="text" placeholder="Search...">
                            <div class="select__option">
                                <select>
                                    <option value="">Choose Categories</option>
                                    <option value="">Drainase</option>
                                    <option value="">Titik Banjir</option>
                                    <option value="">Titik Tersumbat</option>
                                </select>
                            </div>
                            <div class="select__option">
                                <select>
                                    <option value="">Choose Location</option>
                                    <option value="">Limbungan</option>
                                    <option value="">Limbungan Baru</option>
                                </select>
                            </div>
                            <button type="submit">Explore Now</button>
                        </form>
                    </div>
                    <ul class="hero__categories__tags">
                        <li><a href="<?= site_url('home/banjir') ?>"><img src="<?php echo base_url() ?>assets/img/hero/cat-1.png" alt=""> Banjir</a></li>
                        <li><a href="<?= site_url('home/drainase') ?>"><img src="<?php echo base_url() ?>assets/img/hero/cat-2.png" alt=""> Drainase</a></li>
                        <li><a href="<?= site_url('home/tersumbat') ?>"><img src="<?php echo base_url() ?>assets/img/hero/cat-3.png" alt=""> Tersumbat</a></li>
                        <li><a href="<?= site_url('home/listing') ?>"><img src="<?php echo base_url() ?>assets/img/hero/cat-6.png" alt=""> All Categories</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Most Search Section Begin -->
<section class="most-search spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Detail Informasi Galeri</h2>
                    <p>Drainase, Banjir dan Tersumbat</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="most__search__tab">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">
                                <span class="flaticon-017-croissant"></span>
                                All
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">
                                <span class="flaticon-039-fork"></span>
                                Drainase
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">
                                <span class="flaticon-030-kebab"></span>
                                Banjir
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-4" role="tab">
                                <span class="flaticon-032-food-truck"></span>
                                Tersumbat
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane active" id="tabs-1" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="listing__item">
                                    <div class="listing__item__pic set-bg" data-setbg="<?php echo base_url() ?>assets/img/harapan.jpg">
                                        <div class="listing__item__pic__btns">
                                            <a href="#"><span class="icon_zoom-in_alt"></span></a>
                                            <a href="#"><span class="icon_heart_alt"></span></a>
                                        </div>
                                    </div>
                                    <div class="listing__item__text">
                                        <div class="listing__item__text__inside">
                                            <h5>Jl. Harapan</h5>
                                            <ul>
                                                <li><span class="icon_pin_alt"></span>Kondisi : Sedang</li>
                                                <li><span class="icon_pin_alt"></span>Bahan : Batu</li>
                                            </ul>
                                        </div>
                                        <div class="listing__item__text__info">
                                            <div class="listing__item__text__info__left">
                                                <img src="<?php echo base_url() ?>assets/img/listing/list_icon-6.png" alt="">
                                                <span>Drainase</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="listing__item">
                                    <div class="listing__item__pic set-bg" data-setbg="<?php echo base_url() ?>assets/img/tersumbat-harapan2.jpg">
                                        <div class="listing__item__pic__btns">
                                            <a href="#"><span class="icon_zoom-in_alt"></span></a>
                                            <a href="#"><span class="icon_heart_alt"></span></a>
                                        </div>
                                    </div>
                                    <div class="listing__item__text">
                                        <div class="listing__item__text__inside">
                                            <h5>Jl. Harapan</h5>
                                            <ul>
                                                <li><span class="icon_pin_alt"></span> Parit disini tersumbat oleh rumput dan sampah sehingga parit jadi kering.</li>
                                            </ul>
                                        </div>
                                        <div class="listing__item__text__info">
                                            <div class="listing__item__text__info__left">
                                                <img src="<?php echo base_url() ?>assets/img/listing/list_icon-2.png" alt="">
                                                <span>Tersumbat</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="listing__item">
                                    <div class="listing__item__pic set-bg" data-setbg="<?php echo base_url() ?>assets/img/ampera.jpg">
                                        <div class="listing__item__pic__btns">
                                            <a href="#"><span class="icon_zoom-in_alt"></span></a>
                                            <a href="#"><span class="icon_heart_alt"></span></a>
                                        </div>
                                    </div>
                                    <div class="listing__item__text">
                                        <div class="listing__item__text__inside">
                                            <h5>Jl Ampera</h5>
                                            <ul>
                                                <li><span class="icon_pin_alt"></span>Kondisi : Bagus</li>
                                                <li><span class="icon_pin_alt"></span>Bahan : Batu</li>
                                            </ul>
                                        </div>
                                        <div class="listing__item__text__info">
                                            <div class="listing__item__text__info__left">
                                                <img src="<?php echo base_url() ?>assets/img/listing/list_icon-6.png" alt="">
                                                <span>Draianse</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="listing__item">
                                    <div class="listing__item__pic set-bg" data-setbg="<?php echo base_url() ?>assets/img/sekolah.jpg">
                                        <div class="listing__item__pic__btns">
                                            <a href="#"><span class="icon_zoom-in_alt"></span></a>
                                            <a href="#"><span class="icon_heart_alt"></span></a>
                                        </div>
                                    </div>
                                    <div class="listing__item__text">
                                        <div class="listing__item__text__inside">
                                            <h5>Jl. Sekolah</h5>
                                            <ul>
                                                <li><span class="icon_pin_alt"></span>Kondisi : Sedang</li>
                                                <li><span class="icon_pin_alt"></span>Bahan : Batu</li>
                                            </ul>
                                        </div>
                                        <div class="listing__item__text__info">
                                            <div class="listing__item__text__info__left">
                                                <img src="<?php echo base_url() ?>assets/img/listing/list_icon-6.png" alt="">
                                                <span>Drainase</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="listing__item">
                                    <div class="listing__item__pic set-bg" data-setbg="<?php echo base_url() ?>assets/img/banjir-harapan.jpg">
                                        <div class="listing__item__pic__btns">
                                            <a href="#"><span class="icon_zoom-in_alt"></span></a>
                                            <a href="#"><span class="icon_heart_alt"></span></a>
                                        </div>
                                    </div>
                                    <div class="listing__item__text">
                                        <div class="listing__item__text__inside">
                                            <h5>Jl. Harapan</h5>
                                            <ul>
                                                <li><span class="icon_pin_alt"></span>Kondisi Kerusakan : Sedang</li>
                                                <li><span class="icon_pin_alt"></span>Terlihat genangan air.</li>
                                            </ul>
                                        </div>
                                        <div class="listing__item__text__info">
                                            <div class="listing__item__text__info__left">
                                                <img src="<?php echo base_url() ?>assets/img/listing/list_icon-5.png" alt="">
                                                <span>Banjir</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="listing__item">
                                    <div class="listing__item__pic set-bg" data-setbg="<?php echo base_url() ?>assets/img/pembangunan.jpg">
                                        <div class="listing__item__pic__btns">
                                            <a href="#"><span class="icon_zoom-in_alt"></span></a>
                                            <a href="#"><span class="icon_heart_alt"></span></a>
                                        </div>
                                    </div>
                                    <div class="listing__item__text">
                                        <div class="listing__item__text__inside">
                                            <h5>Jl. Pembangunan</h5>
                                            <ul>
                                                <li><span class="icon_pin_alt"></span>Kondisi : Sedang</li>
                                                <li><span class="icon_pin_alt"></span>Bahan : Batu</li>
                                            </ul>
                                        </div>
                                        <div class="listing__item__text__info">
                                            <div class="listing__item__text__info__left">
                                                <img src="<?php echo base_url() ?>assets/img/listing/list_icon-6.png" alt="">
                                                <span>Draianse</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="listing__item">
                                    <div class="listing__item__pic set-bg" data-setbg="<?php echo base_url() ?>assets/img/tersumbat-harapan.jpeg">
                                        <div class="listing__item__pic__btns">
                                            <a href="#"><span class="icon_zoom-in_alt"></span></a>
                                            <a href="#"><span class="icon_heart_alt"></span></a>
                                        </div>
                                    </div>
                                    <div class="listing__item__text">
                                        <div class="listing__item__text__inside">
                                            <h5>Jl. Harapan</h5>
                                            <ul>
                                                <li><span class="icon_pin_alt"></span> Parit disini digenangi oleh rerumputan.</li>
                                            </ul>
                                        </div>
                                        <div class="listing__item__text__info">
                                            <div class="listing__item__text__info__left">
                                                <img src="<?php echo base_url() ?>assets/img/listing/list_icon-2.png" alt="">
                                                <span>Tersumbat</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="listing__item">
                                    <div class="listing__item__pic set-bg" data-setbg="<?php echo base_url() ?>assets/img/harmonis.jpg">
                                        <div class="listing__item__pic__btns">
                                            <a href="#"><span class="icon_zoom-in_alt"></span></a>
                                            <a href="#"><span class="icon_heart_alt"></span></a>
                                        </div>
                                    </div>
                                    <div class="listing__item__text">
                                        <div class="listing__item__text__inside">
                                            <h5>Jl. Harmonis</h5>
                                            <ul>
                                                <li><span class="icon_pin_alt"></span>Kondisi : Sedang</li>
                                                <li><span class="icon_pin_alt"></span>Bahan : Batu</li>
                                            </ul>
                                        </div>
                                        <div class="listing__item__text__info">
                                            <div class="listing__item__text__info__left">
                                                <img src="<?php echo base_url() ?>assets/img/listing/list_icon-6.png" alt="">
                                                <span>Draianse</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="listing__item">
                                    <div class="listing__item__pic set-bg" data-setbg="<?php echo base_url() ?>assets/img/tersumbat-harapan3.jpeg">
                                        <div class="listing__item__pic__btns">
                                            <a href="#"><span class="icon_zoom-in_alt"></span></a>
                                            <a href="#"><span class="icon_heart_alt"></span></a>
                                        </div>
                                    </div>
                                    <div class="listing__item__text">
                                        <div class="listing__item__text__inside">
                                            <h5>Jl. Harapan</h5>
                                            <ul>
                                                <li><span class="icon_pin_alt"></span> Parit disini tersumbat karena genangan sampah dan tertutup oleh rumput.</li>
                                            </ul>
                                        </div>
                                        <div class="listing__item__text__info">
                                            <div class="listing__item__text__info__left">
                                                <img src="<?php echo base_url() ?>assets/img/listing/list_icon-2.png" alt="">
                                                <span>Tersumbat</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="listing__item">
                                    <div class="listing__item__pic set-bg" data-setbg="<?php echo base_url() ?>assets/img/tersumbat-ampera.jpeg">
                                        <div class="listing__item__pic__btns">
                                            <a href="#"><span class="icon_zoom-in_alt"></span></a>
                                            <a href="#"><span class="icon_heart_alt"></span></a>
                                        </div>
                                    </div>
                                    <div class="listing__item__text">
                                        <div class="listing__item__text__inside">
                                            <h5>Jl. Ampera</h5>
                                            <ul>
                                                <li><span class="icon_pin_alt"></span> Parit disini digenangi rerumputan panjang dan membuat parit tersumbat.</li>
                                            </ul>
                                        </div>
                                        <div class="listing__item__text__info">
                                            <div class="listing__item__text__info__left">
                                                <img src="<?php echo base_url() ?>assets/img/listing/list_icon-2.png" alt="">
                                                <span>Tersumbat</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="listing__item">
                                    <div class="listing__item__pic set-bg" data-setbg="<?php echo base_url() ?>assets/img/banjir-harmonis.png">
                                        <div class="listing__item__pic__btns">
                                            <a href="#"><span class="icon_zoom-in_alt"></span></a>
                                            <a href="#"><span class="icon_heart_alt"></span></a>
                                        </div>
                                    </div>
                                    <div class="listing__item__text">
                                        <div class="listing__item__text__inside">
                                            <h5>Jl. Harmonis</h5>
                                            <ul>
                                                <li><span class="icon_pin_alt"></span>Kondisi Kerusakan : Sedang</li>
                                                <li><span class="icon_pin_alt"></span>Terlihat genangan air.</li>
                                            </ul>
                                        </div>
                                        <div class="listing__item__text__info">
                                            <div class="listing__item__text__info__left">
                                                <img src="<?php echo base_url() ?>assets/img/listing/list_icon-5.png" alt="">
                                                <span>Banjir</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tabs-2" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="listing__item">
                                    <div class="listing__item__pic set-bg" data-setbg="<?php echo base_url() ?>assets/img/harapan.jpg">
                                        <div class="listing__item__pic__btns">
                                            <a href="#"><span class="icon_zoom-in_alt"></span></a>
                                            <a href="#"><span class="icon_heart_alt"></span></a>
                                        </div>
                                    </div>
                                    <div class="listing__item__text">
                                        <div class="listing__item__text__inside">
                                            <h5>Jl. Harapan</h5>
                                            <ul>
                                                <li><span class="icon_pin_alt"></span>Kondisi : Sedang</li>
                                                <li><span class="icon_pin_alt"></span>Bahan : Batu</li>
                                            </ul>
                                        </div>
                                        <div class="listing__item__text__info">
                                            <div class="listing__item__text__info__left">
                                                <img src="<?php echo base_url() ?>assets/img/listing/list_icon-6.png" alt="">
                                                <span>Drainase</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="listing__item">
                                    <div class="listing__item__pic set-bg" data-setbg="<?php echo base_url() ?>assets/img/harmonis.jpg">
                                        <div class="listing__item__pic__btns">
                                            <a href="#"><span class="icon_zoom-in_alt"></span></a>
                                            <a href="#"><span class="icon_heart_alt"></span></a>
                                        </div>
                                    </div>
                                    <div class="listing__item__text">
                                        <div class="listing__item__text__inside">
                                            <h5>Jl. Harmonis</h5>
                                            <ul>
                                                <li><span class="icon_pin_alt"></span>Kondisi : Sedang</li>
                                                <li><span class="icon_pin_alt"></span>Bahan : Batu</li>
                                            </ul>
                                        </div>
                                        <div class="listing__item__text__info">
                                            <div class="listing__item__text__info__left">
                                                <img src="<?php echo base_url() ?>assets/img/listing/list_icon-6.png" alt="">
                                                <span>Drainase</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="listing__item">
                                    <div class="listing__item__pic set-bg" data-setbg="<?php echo base_url() ?>assets/img/pembangunan.jpg">
                                        <div class="listing__item__pic__btns">
                                            <a href="#"><span class="icon_zoom-in_alt"></span></a>
                                            <a href="#"><span class="icon_heart_alt"></span></a>
                                        </div>
                                    </div>
                                    <div class="listing__item__text">
                                        <div class="listing__item__text__inside">
                                            <h5>Jl. Pembangunan</h5>
                                            <ul>
                                                <li><span class="icon_pin_alt"></span>Kondisi : Sedang</li>
                                                <li><span class="icon_pin_alt"></span>Bahan : Batu</li>
                                            </ul>
                                        </div>
                                        <div class="listing__item__text__info">
                                            <div class="listing__item__text__info__left">
                                                <img src="<?php echo base_url() ?>assets/img/listing/list_icon-6.png" alt="">
                                                <span>Drainase</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="listing__item">
                                    <div class="listing__item__pic set-bg" data-setbg="<?php echo base_url() ?>assets/img/ampera.jpg">
                                        <div class="listing__item__pic__btns">
                                            <a href="#"><span class="icon_zoom-in_alt"></span></a>
                                            <a href="#"><span class="icon_heart_alt"></span></a>
                                        </div>
                                    </div>
                                    <div class="listing__item__text">
                                        <div class="listing__item__text__inside">
                                            <h5>Jl. Ampera</h5>
                                            <ul>
                                                <li><span class="icon_pin_alt"></span>Kondisi : Bagus</li>
                                                <li><span class="icon_pin_alt"></span>Bahan : Batu</li>
                                            </ul>
                                        </div>
                                        <div class="listing__item__text__info">
                                            <div class="listing__item__text__info__left">
                                                <img src="<?php echo base_url() ?>assets/img/listing/list_icon-6.png" alt="">
                                                <span>Draianse</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="listing__item">
                                    <div class="listing__item__pic set-bg" data-setbg="<?php echo base_url() ?>assets/img/sekolah.jpg">
                                        <div class="listing__item__pic__btns">
                                            <a href="#"><span class="icon_zoom-in_alt"></span></a>
                                            <a href="#"><span class="icon_heart_alt"></span></a>
                                        </div>
                                    </div>
                                    <div class="listing__item__text">
                                        <div class="listing__item__text__inside">
                                            <h5>Jl. Sekolah</h5>
                                            <ul>
                                                <li><span class="icon_pin_alt"></span>Kondisi : Sedang</li>
                                                <li><span class="icon_pin_alt"></span>Bahan : Batu</li>
                                            </ul>
                                        </div>
                                        <div class="listing__item__text__info">
                                            <div class="listing__item__text__info__left">
                                                <img src="<?php echo base_url() ?>assets/img/listing/list_icon-6.png" alt="">
                                                <span>Drainase</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tabs-3" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="listing__item">
                                    <div class="listing__item__pic set-bg" data-setbg="<?php echo base_url() ?>assets/img/banjir-harapan.jpg">
                                        <div class="listing__item__pic__btns">
                                            <a href="#"><span class="icon_zoom-in_alt"></span></a>
                                            <a href="#"><span class="icon_heart_alt"></span></a>
                                        </div>
                                    </div>
                                    <div class="listing__item__text">
                                        <div class="listing__item__text__inside">
                                            <h5>Jl. Harapan</h5>
                                            <ul>
                                                <li><span class="icon_pin_alt"></span>Kondisi Kerusakan : Sedang</li>
                                                <li><span class="icon_pin_alt"></span>Terlihat genangan air.</li>
                                            </ul>
                                        </div>
                                        <div class="listing__item__text__info">
                                            <div class="listing__item__text__info__left">
                                                <img src="<?php echo base_url() ?>assets/img/listing/list_icon-5.png" alt="">
                                                <span>Banjir</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="listing__item">
                                    <div class="listing__item__pic set-bg" data-setbg="<?php echo base_url() ?>assets/img/banjir-harmonis.png">
                                        <div class="listing__item__pic__btns">
                                            <a href="#"><span class="icon_zoom-in_alt"></span></a>
                                            <a href="#"><span class="icon_heart_alt"></span></a>
                                        </div>
                                    </div>
                                    <div class="listing__item__text">
                                        <div class="listing__item__text__inside">
                                            <h5>Jl. Harmonis</h5>
                                            <ul>
                                                <li><span class="icon_pin_alt"></span>Kondisi Kerusakan : Sedang</li>
                                                <li><span class="icon_pin_alt"></span>Terlihat genangan air.</li>
                                            </ul>
                                        </div>
                                        <div class="listing__item__text__info">
                                            <div class="listing__item__text__info__left">
                                                <img src="<?php echo base_url() ?>assets/img/listing/list_icon-5.png" alt="">
                                                <span>Banjir</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tabs-4" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="listing__item">
                                    <div class="listing__item__pic set-bg" data-setbg="<?php echo base_url() ?>assets/img/tersumbat-ampera.jpeg">
                                        <div class="listing__item__pic__btns">
                                            <a href="#"><span class="icon_zoom-in_alt"></span></a>
                                            <a href="#"><span class="icon_heart_alt"></span></a>
                                        </div>
                                    </div>
                                    <div class="listing__item__text">
                                        <div class="listing__item__text__inside">
                                            <h5>Jl. Ampera</h5>
                                            <ul>
                                                <li><span class="icon_pin_alt"></span> Parit disini digenangi rerumputan panjang dan membuat parit tersumbat.</li>
                                            </ul>
                                        </div>
                                        <div class="listing__item__text__info">
                                            <div class="listing__item__text__info__left">
                                                <img src="<?php echo base_url() ?>assets/img/listing/list_icon-2.png" alt="">
                                                <span>Tersumbat</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="listing__item">
                                    <div class="listing__item__pic set-bg" data-setbg="<?php echo base_url() ?>assets/img/tersumbat-harapan.jpeg">
                                        <div class="listing__item__pic__btns">
                                            <a href="#"><span class="icon_zoom-in_alt"></span></a>
                                            <a href="#"><span class="icon_heart_alt"></span></a>
                                        </div>
                                    </div>
                                    <div class="listing__item__text">
                                        <div class="listing__item__text__inside">
                                            <h5>Jl. Harapan</h5>
                                            <ul>
                                                <li><span class="icon_pin_alt"></span> Parit disini tersumbat oleh rumput dan sampah sehingga parit jadi kering.</li>
                                            </ul>
                                        </div>
                                        <div class="listing__item__text__info">
                                            <div class="listing__item__text__info__left">
                                                <img src="<?php echo base_url() ?>assets/img/listing/list_icon-2.png" alt="">
                                                <span>Tersumbat</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="listing__item">
                                    <div class="listing__item__pic set-bg" data-setbg="<?php echo base_url() ?>assets/img/tersumbat-harapan2.jpg">
                                        <div class="listing__item__pic__btns">
                                            <a href="#"><span class="icon_zoom-in_alt"></span></a>
                                            <a href="#"><span class="icon_heart_alt"></span></a>
                                        </div>
                                    </div>
                                    <div class="listing__item__text">
                                        <div class="listing__item__text__inside">
                                            <h5>Jl. Harapan</h5>
                                            <ul>
                                                <li><span class="icon_pin_alt"></span> Parit disini digenangi sampah yang mengakibatkan tersumbat.</li>
                                            </ul>
                                        </div>
                                        <div class="listing__item__text__info">
                                            <div class="listing__item__text__info__left">
                                                <img src="<?php echo base_url() ?>assets/img/listing/list_icon-2.png" alt="">
                                                <span>Tersumbat</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="listing__item">
                                    <div class="listing__item__pic set-bg" data-setbg="<?php echo base_url() ?>assets/img/tersumbat-harapan3.jpeg">
                                        <div class="listing__item__pic__btns">
                                            <a href="#"><span class="icon_zoom-in_alt"></span></a>
                                            <a href="#"><span class="icon_heart_alt"></span></a>
                                        </div>
                                    </div>
                                    <div class="listing__item__text">
                                        <div class="listing__item__text__inside">
                                            <h5>Jl. Harapan</h5>
                                            <ul>
                                                <li><span class="icon_pin_alt"></span> Parit disini tersumbat karena genangan sampah dan tertutup oleh rumput.</li>
                                            </ul>
                                        </div>
                                        <div class="listing__item__text__info">
                                            <div class="listing__item__text__info__left">
                                                <img src="<?php echo base_url() ?>assets/img/listing/list_icon-2.png" alt="">
                                                <span>Tersumbat</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Most Search Section End -->

<!-- Testimonial Section Begin -->
<section class="testimonial spad set-bg" data-setbg="<?php echo base_url() ?>assets/img/laut3.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>PROJEK SISTEM INFORMASI GEOGRAFIS</h2>
                    <p>KELOMPOK 3</p>
                </div>
                <div class="testimonial__slider owl-carousel">
                    <div class="testimonial__item" data-hash="review-1">
                        <p>"Tetaplah hidup dijalan yang berliku-liku ini."</p>
                        <div class="testimonial__item__author">
                            <a href="#review-3"><img src="<?php echo base_url() ?>assets/img/arew.jpeg" alt=""></a>
                            <a href="#review-1" class="active"><img src="<?php echo base_url() ?>assets/img/wayu.jpeg" alt=""></a>
                            <a href="#review-2"><img src="<?php echo base_url() ?>assets/img/cindy.jpg" alt=""></a>
                        </div>
                        <div class="testimonial__item__author__text">
                            <h5>M. Wahyu Kurniawan</h5>
                        </div>
                        <span>1855301001</span>
                    </div>
                    <div class="testimonial__item" data-hash="review-2">
                        <p>"Kalau mimpimu belum tercapai, jangan pernah mengubah mimpinya, tapi ubahlah strateginya."</p>
                        <div class="testimonial__item__author">
                            <a href="#review-1"><img src="<?php echo base_url() ?>assets/img/wayu.jpeg" alt=""></a>
                            <a href="#review-2" class="active"><img src="<?php echo base_url() ?>assets/img/cindy.jpg" alt=""></a>
                            <a href="#review-3"><img src="<?php echo base_url() ?>assets/img/arew.jpeg" alt=""></a>
                        </div>
                        <div class="testimonial__item__author__text">
                            <h5>Cindy Felicia</h5>
                        </div>
                        <span>1855301009</span>
                    </div>
                    <div class="testimonial__item" data-hash="review-3">
                        <p>"Jika kamu punya muka 1 syukuri karna muka 2 itu mengerikan seperti syaiton"</p>
                        <div class="testimonial__item__author">
                            <a href="#review-2"><img src="<?php echo base_url() ?>assets/img/cindy.jpg" alt=""></a>
                            <a href="#review-3" class="active"><img src="<?php echo base_url() ?>assets/img/arew.jpeg" alt=""></a>
                            <a href="#review-1"><img src="<?php echo base_url() ?>assets/img/wayu.jpeg" alt=""></a>
                        </div>
                        <div class="testimonial__item__author__text">
                            <h5>M. Rasyid</h5>
                        </div>
                        <span>1855301005</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- Testimonial Section End -->