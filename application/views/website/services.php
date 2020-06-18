<!--Start breadcrumb Section  -->
<section id="default-breadcrumb">
      <div class="breadcrumb-opacity"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="default-breadcrumb-title text-center">
              <h4>Services</h4>
              <ul class="breadcrumb-list">
                <li><a href="<?= base_url(); ?>">Home</a></li>
                <li class="active"><a href="<?= base_url(); ?>services">Services</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End breadcrumb Section -->




    <section id="pricing-plane" class="section-bg-gray  pt-100  pb-100">
    <div class="container">
      <!-- Start Row -->
      <div class="row">
        <div class="section-default-title text-center col-12">
          <h2>HARGA HOTMIX</h2>
          <p>PT.PRIMA MIXINDO UTAMA</p>
        </div>
      </div>
      <!-- End Row -->
      <!-- Start Row -->
      <div class="row pt-50">
        <?php foreach( $pricing as $p ) : ?>
        <div class="col-lg-4 col-md-4 mt-5">
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
      <a class="btn reptro-price-btn btn-success" href="<?= base_url(); ?>pesanan">Form Pemesanan</a>
      </div>
    </div>
  </section>
  <!-- Pricing Plane -->

<div class="container mr-5">
  <label for="">Catatan :</label>
  <ol>
      <li>Harga diatas adalah LOKO AMP, belum termasuk biaya:</li>
      <ul>
          <li>* Ongkos angkut disesuaikan dengan lokasi pekerjaan.</li>
          <li>* Mobilisasi alat-alat berat Rp. 15.000.000,-</li>
      </ul>
      <li>Harga tidak mengikat, dapat berubah jika ada kenaikan harga BBM, Aspal dan Material terkait.</li>
      <li>Harga tidak termasuk PPN.</li>
  </ol>
  <div class="row">
    <div class="col-sm-12 ml-5">
        <img src="<?= base_url(); ?>assets/file/img/logo.png" alt="">
    </div>
  </div>
  <br><br>
</div>
