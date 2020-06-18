 <!--Start breadcrumb Section  -->
 <section id="default-breadcrumb">
      <div class="breadcrumb-opacity"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="default-breadcrumb-title text-center">
              <h4>Contact Us</h4>
              <ul class="breadcrumb-list">
                <li><a href="<?= base_url(); ?>">Home</a></li>
                <li class="active">Contact Us</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End breadcrumb Section -->

    <?php if( $this->session->flashdata('flash') ) : ?>
    <div class="container">
    <div class="row mt-5 text-center">
        <div class="col-md-12">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            Pesan <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        </div>
    </div>
    </div>
    <?php endif ?>

    <!-- Address area -->
    <div id="address-section" class="section-bg-white  pt-100  pb-100">
      <div class="container">
        <!-- Start Row -->
        <div class="row">
          <!--  Address Col -->
          <div class="col-lg-4 col-md-4 text-center">
           <div class="contact-address">
             <span><i class="flaticon-phone"></i></span>
             <span>Phone</span>
             <p>0266-231096</p>
             <p>081574589380</p>
           </div>
          </div>
          <!--  Address Col -->
          <!--  Address Col -->
          <div class="col-lg-4 col-md-4 text-center responsive-320">
           <div class="contact-address">
             <span><i class="flaticon-mail"></i></span>
             <span>Email</span>
             <p>primamixutama@yahoo.com</p>
           </div>
          </div>
          <!--  Address Col -->
          <!--  Address Col -->
          <div class="col-lg-4 col-md-4 text-center responsive-320">
           <div class="contact-address">
             <span><i class="flaticon-pin"></i></span>
             <span>Alamat</span>
             <p>Jl.Cemerlang Cijambe Pakojaan No. 148 </p>
             <p>Kel.sukakarya Kec.Warudoyong</p>
             <p>Kota Sukabumi Jawa Barat</p>
           </div>
          </div>
          <!--  Address Col -->
        </div>
        <!-- End Row -->
      </div>
    </div>
    <!-- Address area -->

    <!-- Contact Area Section -->
      <section id="contact-area" class="section-bg-white  pt-100  pb-100">
        <div class="container">
          <div class="row pb-50">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="contact-title text-center">
                <h1>Tinggalkan Pesan</h1>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-12 col-md-12">


              <!-- Start Form -->
              <form method="post" action="<?=base_url();?>contact/saveKontak">
   <div class="form-horizontal contact-form">
                  <div class="form-row">
                    <div class="form-group col-md-4 mb-3" id="name-field">
                      <input type="text" class="form-control" id="form-name" name="nama" placeholder="Nama" required="required" >
                    </div>
                    <div class="form-group col-md-4 mb-3" id="subject-field">
                      <input type="text" class="form-control" id="form-subject" name="subject" placeholder="Subject"  required="required">
                    </div>
                    <div class="form-group col-md-4 mb-3" id="email-field">
                       <input type="email" class="form-control" id="form-email" name="email" placeholder="Email"  required="required">
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="col-sm-12">
                    <div class="form-group" id="message-field">
                       <textarea class="form-control" rows="6" id="form-message" name="pesan" placeholder="Pesan"  required="required"></textarea>
                      
                    </div>
                  </div>
                </div>

                <div class="col-sm-12 text-center">
                    <input type="submit" class="contact-submit-btn" value="Submit" name="submit">
                  </div>
  </form>
               <!-- End Form -->
            </div>
          </div>
        </div>   
    </section>
    <!-- Contact Area Section -->
