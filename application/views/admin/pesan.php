<aside class="right-side">
<section class="col-lg-12 connectedSortable">
                            <!-- Map box -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <!-- tools box -->
                                    <div class="pull-right box-tools">                                        
                                        <button class="btn btn-primary btn-sm pull-right" data-widget='collapse' data-toggle="tooltip" title="Collapse" style="margin-right: 5px;"><i class="fa fa-minus"></i></button>
                                    </div><!-- /. tools -->

                                    <i class="fa fa-envelope"></i>
                                    <h3 class="box-title">
                                        Data Pesan Masuk
                                    </h3>
                                </div>
                              
                                
                                <div class="box-footer">

                                <?= $this->session->flashdata('save_pesan'); ?>

                                    <table class="table table-bordered">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Subject</th>
                                            <th>Email</th>
                                            <th>Pesan</th>
                                            <th>Tanggal</th>
                                            <th>Aksi</th>
                                        </tr>
                                        <?php
                                            $no = 1;
                                            foreach( $pesan as $p ):
                                        ?>
                                        <tr>
                                            <td align="center"><?= $no++ ?></td>
                                            <td><?= $p['nama'] ?></td>
                                            <td><?= $p['subject'] ?></td>
                                            <td><?= $p['email'] ?></td>
                                            <td><?= $p['pesan'] ?></td>
                                            <td><?= $p['date'] ?></td>
                                            <td align="center"><a onclick="return confirm('Yakin ingin menghapus Pesan ini...?')" href="<?php echo base_url();?>admin_pesan/hapus/<?=$p['id']?>"><button class="btn bg-red btn-block btn-circle"><i class="fa fa-trash-o"></i></button></a></td>
                                        </tr>
                                        <?php endforeach ?>
                                    </table>

                                </div>
                            </div>
                            <!-- /.box -->









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
