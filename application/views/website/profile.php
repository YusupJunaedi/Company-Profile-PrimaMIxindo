<!--Start breadcrumb Section  -->
<section id="default-breadcrumb">
      <div class="breadcrumb-opacity"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="default-breadcrumb-title text-center">
              <h4>Profile</h4>
              <ul class="breadcrumb-list">
                <li><a href="<?= base_url(); ?>">Home</a></li>
                <li class="active"><a href="#">Profile</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End breadcrumb Section -->

    
 <!-- Single Blog Post Section -->
 <section id="blog-section"  class="section-bg-white  pt-100  pb-100">
      <div class="container">
        <div class="row">
           <!--Full Post-->
           <div class="col-lg-12 col-md-12 col-sm-12 col-12">
             <!--Full Post-->
             <div class="single-post-detail">
                  <div class="post-details-img mb-5">
                      <img src="<?= base_url(); ?>assets/file/img/logo.png" alt="">
                  </div>
                  <h2><?= $profile['judul'] ?></h2>
      
                  <p><?= $profile['isi'] ?></p>
</div>
 
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


            <!--Blog Details Right Sidebar Ends-->
           </div>

        </div>
      </div>
    </section>
    <!-- Single Blog Post Section -->