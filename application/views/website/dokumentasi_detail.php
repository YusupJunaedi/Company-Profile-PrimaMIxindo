 <!--Start breadcrumb Section  -->
 <section id="default-breadcrumb">
      <div class="breadcrumb-opacity"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="default-breadcrumb-title text-center">
              <h4>Dokumentasi</h4>
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
            <?php foreach( $album_detail as $ad ) : ?>
          <div class="col-lg-4 col-md-12 single-content tech grid-item">
            <div class="project-item">
              <figure>
                <img src="<?= base_url(); ?>assets/file/dokumentasi/<?= $ad['photo'] ?>" alt="Img"> 
              </figure>
              <h4 class="text-center"><?= $ad['judul'] ?></h4>
            </div>
          </div>
          <?php endforeach ?>         
        </div>
        <br><br><br><br>
       <!--  End Row -->
    </div>
  </section>
 <!--  Main Project  -->
 