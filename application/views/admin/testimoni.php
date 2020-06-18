<aside class="right-side">
<section class="col-lg-10 connectedSortable">
                            <!-- Map box -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <!-- tools box -->
                                    <div class="pull-right box-tools">                                        
                                        <button class="btn btn-primary btn-sm pull-right" data-widget='collapse' data-toggle="tooltip" title="Collapse" style="margin-right: 5px;"><i class="fa fa-minus"></i></button>
                                    </div><!-- /. tools -->

                                    <i class="fa fa-thumbs-up"></i>
                                    <h3 class="box-title">
                                        Data Testimoni
                                    </h3>
                                </div>
                              
                                
                                <div class="box-footer">
                                <a href="<?= base_url(); ?>admin_testimoni/tambah" class="btn btn-primary"><i class="fa fa-plus-circle"> Tambah Testimoni</i></a>
                                    <br><br>
                                <?= $this->session->flashdata('save_testimoni'); ?>
                                <table class="table table-bordered">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Isi</th>
                                        <th>Jabatan</th>
                                        <th>Photo</th>
                                        <th colspan="2">Aksi</th>
                                    </tr>
                                    <?php
                                        $no = 1;
                                        foreach( $testimoni as $t ) :
                                    ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $t['nama'] ?></td>
                                        <td><?= $t['isi'] ?></td>
                                        <td><?= $t['jabatan'] ?></td>
                                        <td><img src="<?= base_url(); ?>assets/file/testimoni/<?= $t['photo'] ?>" alt="Photo" width = "50px"></td>
                                        <td><a href="<?php echo base_url();?>admin_testimoni/edit/<?=$t['id']?>"><button class="btn bg-blue btn-block btn-circle"><i class="fa fa-edit"></i></button></a></td>
                                        <td><a onclick="return confirm('Yakin ingin menghapus Testimoni ini...?')" href="<?php echo base_url();?>admin_testimoni/hapus/<?=$t['id']?>"><button class="btn bg-red btn-block btn-circle"><i class="fa fa-trash-o"></i></button></a></td>
                                    </tr>
                                    <?php endforeach ?>
                                </table>


                                </div>
                            </div>
                            <!-- /.box -->









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
