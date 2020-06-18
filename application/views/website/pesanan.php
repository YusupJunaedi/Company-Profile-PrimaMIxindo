<!--Start breadcrumb Section  -->
<section id="default-breadcrumb">
      <div class="breadcrumb-opacity"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="default-breadcrumb-title text-center">
              <h4>Pemesanan</h4>
              <ul class="breadcrumb-list">
                <li><a href="<?= base_url(); ?>">Home</a></li>
                <li class="active">Pesan</li>
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
            Pesanan Berhasil <strong><?= $this->session->flashdata('flash'); ?></strong>, Harap tunggu balasan dari admin 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        </div>
    </div>
    </div>
    <?php endif ?>

    <!-- Contact Area Section -->
    <section id="contact-area" class="section-bg-white  pt-100  pb-100">
        <div class="container">
          <div class="row pb-50">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="contact-title text-center">
                <h1>Form Pemesanan</h1>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-12 col-md-12">


              <!-- Start Form -->
              <form method="post" action="<?=base_url();?>pesanan/save">
   <div class="form-horizontal contact-form">
                  <div class="form-row">
                    <div class="form-group col-md-4 mb-3" id="name-field">
                      <input type="text" class="form-control" id="form-name" name="nama" placeholder="Nama" required="required" >
                    </div>
                    <div class="form-group col-md-4 mb-3" id="email-field">
                       <input type="email" class="form-control" id="form-email" name="email" placeholder="Email"  required="required">
                    </div>
                    <div class="form-group col-md-4 mb-3" id="email-field">
                       <input type="text" class="form-control" id="form-email" name="tlp" placeholder="No Tlp"  required="required">
                    </div>
                    <div class="form-group col-md-4 mb-3" id="subject-field"></div>
                    <div class="form-group col-md-4 mb-3" id="subject-field">
                        <select name="paket" id="paket" class="form-control">
                            <option value="">--Pilih Paket--</option>
                           <?php foreach ($paket as $p) : ?>
                            <option value="<?= $p['nama_paket'] ?>"><?= $p['nama_paket'] ?></option>
                            <?php endforeach ?>
                        </select>
                    <div class="form-group col-md-4 mb-3" id="subject-field"></div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="col-sm-12">
                    <div class="form-group" id="message-field">
                       <textarea class="form-control" rows="6" id="form-message" name="pesan" placeholder="catatan"  required="required"></textarea>
                      
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