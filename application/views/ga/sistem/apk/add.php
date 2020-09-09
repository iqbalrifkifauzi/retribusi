<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN VALIDATION STATES-->
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption"><i class="icon-reorder"></i>Add APK</div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									
								</div>
							</div>
							<div class="portlet-body form">
								<!-- BEGIN FORM-->
								<?php if(validation_errors()) { ?>
								<div class="alert alert-block alert-error">
								  <button type="button" class="close" data-dismiss="alert">×</button>
									<?php echo validation_errors(); ?>
								</div>
								<?php 
								} 
								?>

								<div id="form_sample_2" class="form-horizontal">
								
									<?php echo form_open_multipart('ga/apk_simpan/','class="form-horizontal"'); ?>
									
									<div class="control-group">
										<label class="control-label">Nama Apk</label>
										<div class="controls">
											<input type="text" name="nama_apk" id="nama_apk" class="span6 m-wrap" placeholder="Nama APK..." />
										</div>
									</div>

									<div class="control-group">
										<label class="control-label">Harga</label>
										<div class="controls">
										<input type="text" name="harga" id="harga" class="span6 m-wrap" placeholder="harga" />
										</div>
									</div>
									
									
									
									<div class="form-actions">
										<button type="submit" id="simpan" class="btn green"><i class="icon-ok"></i> Simpan</button>
										<a href="<?php echo base_url();?>ga/apk" class="btn white"><i class="icon-long-arrow-left"></i> Kembali</a>
										
									</div>
									<?php echo form_close(); ?>
								</div>
								
							</div>
						</div>
						
					</div>
				</div>


<script type="text/javascript">
	$(document).ready(function(){

		$('#nama_apk').focus();

	});
</script>