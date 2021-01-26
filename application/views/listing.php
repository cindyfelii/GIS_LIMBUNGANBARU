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
          <div class="mw-100">
              <div class="section-title">
                  <h2>MAP</h2>
                  <p>Limbungan Baru</p><br>
                  <a href="<?= site_url('home/drainase') ?>" class="btn btn-primary">Map Drainase</a>
                  <a href="<?= site_url('home/banjir') ?>" class="btn btn-primary">Map Titik Banjir</a>
                  <a href="<?= site_url('home/tersumbat') ?>" class="btn btn-primary">Map Titik Tersumbat</a>
                  <div class="navbar">
                      <div class="navbar-inner">
                          <li class="container">
                              <ul class="nav">
                                  <div class="dropdown" id="accountmenu"><br>
                                      <a class="btn btn-success  dropdown-toggle" data-toggle="dropdown" href="#">Filter Jalan<b class="caret"></b></a>
                                      <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="<?= site_url('home/ampera') ?>" class="btn btn-success">Jl. Ampera</a></li>
                                          <li><a class="dropdown-item" href="<?= site_url('home/harapan') ?>" class="btn btn-success">Jl. Harapan</a></li>
                                          <li><a class="dropdown-item" href="<?= site_url('home/harmonis') ?>" class="btn btn-success">Jl. Harmonis</a></li>
                                          <li><a class="dropdown-item" href="<?= site_url('home/pembangunan') ?>" class="btn btn-success">Jl. Pembangunan</a></li>
                                          <li><a class="dropdown-item" href="<?= site_url('home/sekolah') ?>" class="btn btn-success">Jl. Sekolah</a></li>
                                      </ul>
                                  </div>
                              </ul>
                          </li>
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
          </div>
          <div class="justify">
              <div class="card" style="width: 130.5rem;">
                  <div class="card-body">
                      <h3 class="card-title" align="center">Keterangan</h3>
                  </div>
                  <ul class="list-group list-group-flush">
                      <li class="list-group-item">Drainase &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<img src="<?php echo base_url() ?>assets/icon/placeholder.png" alt=""></li>
                      <li class="list-group-item">Banjir &nbsp;&nbsp;&nbsp;&nbsp;
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="<?php echo base_url() ?>assets/icon/placeholder-2.png" alt="">
                      </li>
                      <li class="list-group-item">Tersumbat &nbsp;&nbsp;&nbsp;&nbsp; <img src="<?php echo base_url() ?>assets/icon/placeholder-3.png" alt="">
                      </li>
                  </ul>
              </div>
              <div class="contact__map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7979.248686157278!2d101.43519067653342!3d0.5649867266861731!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5ac9c758f27fb%3A0xa0a8e2e328360c55!2sLimbungan%20Baru%2C%20Rumbai%20Pesisir%2C%20Pekanbaru%20City%2C%20Riau!5e0!3m2!1sen!2sid!4v1610290145176!5m2!1sen!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> <br>
              </div>
          </div>

      </div>
  </div>
  </div>



  <!-- Map End -->