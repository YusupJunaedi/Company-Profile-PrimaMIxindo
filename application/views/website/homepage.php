
<!-- Home Slider Two Start-->
<section id="main-slider-3">
          <div id="slider-three" class="owl-carousel owl-theme">
        <?php foreach( $sliderhome as $sh ) : ?>
           <!-- Slider Item -->
            <div class="item">
              <div class="intro-content-3">
                  <div class="slider-images">
                      <img src="<?= base_url(); ?>assets/file/slider/<?= $sh['gambar']; ?>" alt="Slider Two">
                  </div>
                  <div class="slider-content">
                      <div class="display-table">
                          <div class="display-table-cell">
                              <div class="container">
                                  <div class="row">
                                      <div class="col-md-12">
                                          <!-- layer 1 -->
                                          <div class="layer-1-3-slide-3 align-center">
                                              <h1 class="title2"><?= $sh['judul']; ?></h1>
                                          </div>
                                          <!-- layer 2 -->
                                          <div class="layer-1-3-slide-3 align-center">
                                              <p><?= $sh['isi']; ?></p>
                                          </div>
                                          <!-- layer 3 -->
                                          <div class="layer-1-3-slide-3 align-center">
                                            <a href="#" class="rep-btn-3 left-btn" >Contact</a>

                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
            </div> <!-- Slider Item -->
            <?php endforeach ?>
          </div>
      </section>
    <!-- Home Slider End-->



    <!-- Quick look Section -->
    <section id="quick-look-area" class="section-bg-white pt-145  pb-100">
        <div class="container">
          <div class="row">
            <!-- Start Col -->
            <div class="quck-look text-center col-lg-4 col-md-4">
              <div class="quick-look-section">
                <div class="quick-look-item">
                 <div class="quick-icon">
                   <span><i class="flaticon-global"></i></span>
                 </div>
                  <h2><?= $keunggulan[0]['judul']; ?></h2>
                  <p><?= $keunggulan[0]['isi']; ?></p>
                </div>
              </div>
            </div>
            <!-- End Col -->
            <!-- Start Col -->
            <div class="quck-look text-center col-lg-4 col-md-4 responsive-320">
              <div class="quick-look-section">
                <div class="quick-look-item">
                 <div class="quick-icon">
                   <span><i class="flaticon-team"></i></span>
                 </div>
                  <h2><?= $keunggulan[1]['judul']; ?></h2>
                  <p><?= $keunggulan[1]['isi']; ?></p>
                </div>
              </div>
            </div>
            <!-- End Col -->
            <!-- Start Col -->
            <div class="quck-look text-center col-lg-4 col-md-4 responsive-320">
              <div class="quick-look-section">
                <div class="quick-look-item">
                 <div class="quick-icon">
                   <span><i class="flaticon-agreement"></i></span>
                 </div>
                  <h2><?= $keunggulan[2]['judul']; ?></h2>
                  <p><?= $keunggulan[2]['isi']; ?></p>
                </div>
              </div>
            </div>
            <!-- End Col -->
          </div>
        </div>
      </section>
    <!-- Quick look Section -->




    <!-- About Us -->
    <section id="about-us" class="section-bg-gray  pt-100  pb-100">
        <div class="container">
          <!-- Start Row -->
          <div class="row">
            <!-- Start Col -->
            <div class="col-lg-6 col-md-12">
              <div class="about-us-left">
                <h2><?= $profile['judul']; ?></h2>
                <p><?= word_limiter( $profile['isi'], 60); ?></p>
                <a href="<?= base_url(); ?>profile">Selengkapnya <span><i class="icofont-long-arrow-right"></i></span></a>
              </div>
            </div>
            <!-- End Col -->
            <!-- Start Col -->
            <div class="col-lg-6 col-md-12   responsive-320 responsive-pt-50">
              <div class="about-us-right">
                <img src="assets/file/img/gambarprm.jpg" alt="Image">
              </div>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>
      </section>
    <!-- About Us -->





    <section id="pricing-plane" class="section-bg-gray  pt-100  pb-100">
    <div class="container">
      <!-- Start Row -->
      <div class="row">
        <div class="section-default-title text-center col-12">
          <h2>Pricing Plan</h2>
          <p>Kami menawarkan beberapa paket pekerjaan di antaranya</p>
        </div>
      </div>
      <!-- End Row -->
      <!-- Start Row -->
      <div class="row pt-50">
        <?php foreach( $pricing as $p ) : ?>
        <div class="col-lg-4 col-md-4">
            <div class="pricing-table section-bg-white text-center">
                <ul>
                    <li> <span class="price-title"><?= $p['nama_paket'] ?></span></li>
                    <li><span class="price-sub"><?= $p['judul'] ?></span> </li>
                    
                    <?= $p['isi'] ?>

                    <li class="pricing-details"> <span class="pricing-price">Rp.<?= $p['harga'] ?>/m2 </span> </li>
                </ul>
            </div>
            <!--pricing-table-->
        </div>
      <?php endforeach ?>
      </div>
      <div class="row">
      <!-- Start Row -->
      <div class="col-lg-12 col-md-12 text-center mt-5">
      <a class="btn reptro-price-btn btn-success" href="<?= base_url(); ?>services">Lihat Selengkapnya..</a>
      </div>
    </div>
  </section>
  <!-- Pricing Plane -->




  <!-- Happy Clients Area -->
  <div id="counter-area"  class="hidden">
      <div class="counter-bg-opacity"></div>
      <div class="container">
        <!-- Start Row -->
        <div class="row pt-100">
          <!-- Counter Item -->
          <div class=" col-lg-3 col-md-6 tab-space-30 m-space-20">
            <div class="conter-item text-center">
                <span><i class="flaticon-emoji"></i></span>
                <div class="counter" data-count="<?= $reputasi['happy'] ?>">0</div>
                <p>Happy Customers</p>
            </div>
          </div>
          <!-- Counter Item -->
          <!-- Counter Item -->
          <div class=" col-lg-3 col-md-6 tab-space-30 m-space-20">
            <div class="conter-item text-center">
                <span><i class="flaticon-medal"></i></span>
                <div class="counter" data-count="<?= $reputasi['project'] ?>">0</div>
                <p>Project Completed</p>
            </div>
          </div>
          <!-- Counter Item -->
          <!-- Counter Item -->
          <div class=" col-lg-3 col-md-6 m-space-20">
            <div class="conter-item text-center">
                <span><i class="flaticon-like"></i></span>
                <div class="counter" data-count="<?= $reputasi['positive'] ?>">0</div>
                <p>Positive Review</p>
            </div>
          </div>
          <!-- Counter Item -->
          <!-- Counter Item -->
          <div class=" col-lg-3 col-md-6">
            <div class="conter-item text-center">
                  <span><i class="flaticon-team"></i></span>
                  <div class="counter" data-count="<?= $reputasi['followers'] ?>">0</div>
                  <p>Followers</p>
            </div>
          </div>
          <!-- Counter Item -->
        </div>
        <!-- End Row -->
      </div>
    </div>
   <!-- Happy Clients Area -->

    <!-- For Mobile and Small Devices Section -->
    <div id="moble-device-section" class=" pt-100  pb-100">
      <div class="container">
         <!--  Start Row -->
         <div class="row">
            <!-- Start Col -->
            <div class="col-lg-12 col-md-12 ">
              <div class="row pt-85 tab-space-30">
                <div class="col-sm-6 m-space-20">
                  <div class="conter-item text-center">
                    <span><i class="flaticon-medal"></i></span>
                    <div class="counter" data-count="<?= $reputasi['project'] ?>">0</div>
                    <p>Project Completed</p>
                  </div>
                </div>
                <div class="col-sm-6 m-space-20">
                  <div class="conter-item text-center">
                <span><i class="flaticon-emoji"></i></span>
                <div class="counter" data-count="<?= $reputasi['happy'] ?>">0</div>
                <p>Happy Customers</p>
                  </div>
                </div>

              </div><!--  End Row -->
              <div class="row pt-85 ">

                <div class="col-sm-6 pt-3 m-space-20">
                  <div class="conter-item text-center">
                    <span><i class="flaticon-like"></i></span>
                    <div class="counter" data-count="<?= $reputasi['positive'] ?>">0</div>
                    <p>Positive Review</p>
                  </div>
                </div>
                <div class="col-sm-6 pt-3">
                  <div class="conter-item text-center">
                    <span><i class="flaticon-team"></i></span>
                    <div class="counter" data-count="<?= $reputasi['followers'] ?>">0</div>
                    <p>Followers</p>
                  </div>
                </div>

              </div><!--  End Row -->

            </div>
            <!-- End Col -->
         </div>
         <!--  End Row -->
      </div>
    </div>
    <!-- For Mobile and Small Devices Section -->





     <!--  Testimonial Area -->
     <div class="testimonial-area">
      <div class="container right-position">
        <!-- Start Row -->
        <div class="row testimoni">
          <!-- Start Col -->
            <div class="col-12 p-md-0">
              <div id="testimonial" class="owl-carousel owl-theme">
                  <?php foreach( $testimoni as $t ) : ?>
                <div class="item">
                  <div class="client-info-area">
                    <div class="client-area">
                      <div class="client-photo p-md-0 col-lg-4 col-md-12 float-left">
                        <img src="assets/file/testimoni/<?= $t['photo']; ?>" alt="Image">
                      </div>

                      <div class="client-info p-md-0  col-lg-8 col-md-12 float-right">
                        <p><?= $t['isi']; ?></p>
                        <span><strong>- <?= $t['nama']; ?></strong></span>
                        <p><?= $t['jabatan']; ?></p>
                      </div>
                    </div>

                  </div>
                </div>
                <?php endforeach; ?>
              </div> 
            </div>
          <!-- Start Col -->

        </div>
        <!-- End Row -->
      </div>
    </div>
   <!--  Testimonial Area -->



   <!--  All Team Member -->
   <section id="team-member-area" class="pt-300 pb-140">
      <div class="container">
        <!-- Start Row -->
        <div class="row">
          <div class="section-default-title text-center col-12">
            <h2>Team Member</h2>
          </div>
        </div>
        <!-- End Row -->
        <!-- Start Row -->
        <div class="row pt-50">
         <!--  Start Col -->
         <?php foreach( $pegawai as $p ) : ?>
          <div class="col-lg-3 col-md-3 mt-5">
            <div class="team-item">
              <div class="team-thumb">
                <img src="assets/file/pegawai/<?= $p['photo'] ?>" alt="Image">
              </div>
              <div class="team-info-caption text-center">
                <h4><?= $p['nama'] ?></h4>
                <p><?= $p['jabatan'] ?></p>
              </div>
            </div>
          </div><!--  End Col -->
<?php endforeach ?>

        </div>
        <!-- End Row -->
      </div>
    </section>
   <!--  All Team Member -->


