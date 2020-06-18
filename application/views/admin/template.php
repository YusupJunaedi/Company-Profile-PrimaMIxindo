<aside class="right-side">
<section class="col-lg-8 connectedSortable">
                            <!-- Map box -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <!-- tools box -->
                                    <div class="pull-right box-tools">                                        
                                        <button class="btn btn-primary btn-sm pull-right" data-widget='collapse' data-toggle="tooltip" title="Collapse" style="margin-right: 5px;"><i class="fa fa-minus"></i></button>
                                    </div><!-- /. tools -->

                                    <i class="fa fa-map-marker"></i>
                                    <h3 class="box-title">
                                        Data Slider
                                    </h3>
                                </div>
                              
                                
                                <div class="box-footer">
                                <a href="" class="btn btn-primary"><i class="fa fa-plus-circle"> Tambah Menu</i></a>
                                    <br><br>
                                </div>
                            </div>
                            <!-- /.box -->


                            <!-- template form -->

                            <form action="<?php echo base_url();?>admin_keunggulan/save" enctype="multipart/form-data" method="POST">
                                    	<div class="form-group">
                                        <input type="hidden" name="id" value="<?=$id?>" />
                                        <label>Judul</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-bookmark"></i>
                                            </div>
                                            <input type="text" class="form-control" name="judul" value="<?=$judul ?>"/>
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->

                                    <div class="form-group">
                                        <label>Gambar</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-file-o"></i>
                                            </div>
                                           <input type="file" class="btn btn-primary" name="gambar" required="">
                                        </div><!-- /.input group -->
                                        <p>* type file berupa JPG/PNG dan ukuran gambar 1920px x 700px</p>
                                    </div><!-- /.form group -->


                                    <div class="box-footer">
                           				 <button type="submit" class="btn btn-warning btn-block btn-sm">
                                         	<?php
                                       			 if($status == 'new'){
													echo "Simpan Slider";
														}
												else{
													echo "Update Slider";
														}
											?>
                                         </button>
                            		 </div>

                            </form> 

                            <!-- template set_flashdata -->
                            $this->session->set_flashdata("save_keunggulan", "<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><b>Sukses!</b> Keunggulan Berhasil Di Update</div>");

                            <!-- template tombol edit dan hapus -->
                            <td align="center"><a href="<?= base_url() ?>profile" class="btn  btn-warning" target="_blank"><i class="fa  fa-align-center"></i> <span> Lihat Isi Profile</span></button></td>
                            <td><a href="<?php echo base_url();?>admin_slider/edit/<?=$s['id']?>"><button class="btn bg-blue btn-block btn-circle"><i class="fa fa-edit"></i></button></a></td>
                            <td><a onclick="return confirm('Yakin ingin menghapus Slider ini...?')" href="<?php echo base_url();?>admin_slider/hapus/<?=$s['id']?>"><button class="btn bg-red btn-block btn-circle"><i class="fa fa-trash-o"></i></button></a></td>
                           




        <!-- jQuery 2.0.2 -->
        <script src="<?= base_url(); ?>assets/admin/js/jquery.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="<?= base_url(); ?>assets/admin/js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="<?= base_url(); ?>assets/admin/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="<?= base_url(); ?>assets/admin/js/plugins/morris/morris.min.js" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="<?= base_url(); ?>assets/admin/js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="<?= base_url(); ?>assets/admin/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
        <script src="<?= base_url(); ?>assets/admin/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <!-- fullCalendar -->
        <script src="<?= base_url(); ?>assets/admin/js/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="<?= base_url(); ?>assets/admin/js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="<?= base_url(); ?>assets/admin/js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="<?= base_url(); ?>assets/admin/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="<?= base_url(); ?>assets/admin/js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <script src="<?= base_url(); ?>assets/admin/js/AdminLTE/app.js" type="text/javascript"></script>
        
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="<?= base_url(); ?>assets/admin/js/AdminLTE/dashboard.js" type="text/javascript"></script>        

    </body>
</html>
