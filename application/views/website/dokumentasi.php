 <!--Start breadcrumb Section  -->
 <section id="default-breadcrumb">
      <div class="breadcrumb-opacity"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="default-breadcrumb-title text-center">
              <h4>Daftar Dokumentasi</h4>
              <ul class="breadcrumb-list">
                <li><a href="<?= base_url(); ?>">Home</a></li>
                <li class="active"><a href="<?= base_url(); ?>dokumentasi">Dokumentasi</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End breadcrumb Section -->

 <!--  Main Project  -->
  <section id="main-project" class="section-bg-white  pt-100  pb-100">
    <div class="container">
        <!--  Start Row -->
        <div class="row grid">
            <?php foreach( $album as $a ) : ?>
          <div class="col-lg-4 col-md-12 single-content business tech grid-item">
            <div class="project-item">
              <figure>
                <img src="<?= base_url(); ?>assets/file/album/<?= $a['sampul_album'] ?>" alt="Img">
                <div class="caption">
                  <div class="blur"></div>
                  <div class="project-captions">
                    <h4><?= $a['nama_album'] ?></h4>
                    <a class="info btn btn-warning" href="<?= base_url(); ?>dokumentasi/dokumentasi_detail/<?= $a['id'] ?>">Lihat Dokumentasi <span><i class="icofont icofont-long-arrow-right btn-danger"></i></span></a>
                  </div>
                </div>
              </figure>
              <h4 class="text-center"><?= $a['nama_album'] ?></h4>
            </div>
          </div>
          <?php endforeach ?>
        </div>
       <!--  End Row -->
    </div>
  </section>
 <!--  Main Project  -->