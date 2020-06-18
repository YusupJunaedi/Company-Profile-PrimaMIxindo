<script src="<?= base_url(); ?>assets/tinymce/js/tinymce/tinymce.dev.js"></script>
<script src="<?= base_url(); ?>assets/tinymce/js/tinymce/plugins/table/plugin.dev.js"></script>
<script src="<?= base_url(); ?>assets/tinymce/js/tinymce/plugins/paste/plugin.dev.js"></script>
<script src="<?= base_url(); ?>assets/tinymce/js/tinymce/plugins/spellchecker/plugin.dev.js"></script>
<script>
	tinymce.init({
		selector: "textarea",
		theme: "modern",
		plugins: [
			"advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
			"searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
			"save table contextmenu directionality emoticons template paste textcolor importcss"
		],
		content_css: "css/development.css",
		add_unload_trigger: false,

		toolbar1: "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons table",
		toolbar2: "custompanelbutton textbutton spellchecker",

		image_advtab: true,

		style_formats: [
			{title: 'Bold text', format: 'h1'},
			{title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
			{title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
			{title: 'Example 1', inline: 'span', classes: 'example1'},
			{title: 'Example 2', inline: 'span', classes: 'example2'},
			{title: 'Table styles'},
			{title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
		],

		template_replace_values : {
			username : "Jack Black"
		},

		template_preview_replace_values : {
			username : "Preview user name"
		},

		//file_browser_callback: function() {},

		templates: [ 
			{title: 'Some title 1', description: 'Some desc 1', content: '<strong class="red">My content: {$username}</strong>'}, 
			{title: 'Some title 2', description: 'Some desc 2', url: 'development.html'} 
		],

		setup: function(ed) {
			ed.addButton('custompanelbutton', {
				type: 'panelbutton',
				text: 'Panel',
				panel: {
					type: 'form',
					items: [
						{type: 'button', text: 'Ok'},
						{type: 'button', text: 'Cancel'}
					]
				}
			});

			ed.addButton('textbutton', {
				type: 'button',
				text: 'Text'
			});
		},

		spellchecker_callback: function(method, words, callback) {
			if (method == "spellcheck") {
				var suggestions = {};

				for (var i = 0; i < words.length; i++) {
					suggestions[words[i]] = ["First", "second"];
				}

				callback(suggestions);
			}
		}
	});
</script>
<style>
*:focus {
	outline: 1px solid red !important;
}
</style>

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
                                        <?php
                                        if( $status == 'new' ){
                                            echo 'Tambah Data Testimoni';
                                        } else {
                                            echo 'Edit Data Testimoni';
                                        }

                                        ?>
                                    </h3>
                                </div>
                              
                                
                                <div class="box-footer">
                                        
                                         <!-- template form -->

                            <form action="<?php echo base_url();?>admin_testimoni/save" enctype="multipart/form-data" method="POST">
                                    	<div class="form-group">
                                        <input type="hidden" name="id" value="<?=$id?>" />
                                        <input type="hidden" name="status" value="<?=$status?>" />
                                        <label>Nama</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </div>
                                            <input type="text" class="form-control" name="nama" value="<?=$nama ?>"/>
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->

                                    <div class="form-group">
                                        <label>Isi</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-align-center"></i>
                                            </div>
                                            <textarea name="isi" cols="30" rows="10"><?=$isi?></textarea>
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->

                                    <div class="form-group">
                                        <label>Photo</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-file-o"></i>
                                            </div>
                                           <input type="file" class="btn btn-primary" name="photo" required="" value="<?=$photo?>">
                                        </div><!-- /.input group -->
                                        <p>* type file berupa JPG/PNG dan ukuran gambar 361px x 445px</p>
                                    </div><!-- /.form group -->

                                    <div class="form-group">
                                        <label>Jabatan</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-credit-card"></i>
                                            </div>
                                            <input type="text" class="form-control" name="jabatan" value="<?=$nama ?>"/>
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->

                                    


                                    <div class="box-footer">
                           				 <button type="submit" class="btn btn-warning btn-block btn-sm">
                                         	<?php
                                       			 if($status == 'new'){
													echo "Simpan Testimoni";
														}
												else{
													echo "Update Testimoni";
														}
											?>
                                         </button>
                            		 </div>

                            </form> 

                                    
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
