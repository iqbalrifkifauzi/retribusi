<div class="row-fluid">
					<div class="span12">
						
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption"><i class="icon-reorder"></i>Edit APK</div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									
								</div>
							</div>
							<div class="portlet-body form">
								
								<div id="form_sample_2" class="form-horizontal">
								
									<?php echo form_open_multipart('ga/apk_update/','class="form-horizontal"'); ?>
									<input type="hidden" name='id_apk' value="<?php echo $id_apk;?>"> 
									
									<div class="control-group">
										<label class="control-label">Nama APK</label>
										<div class="controls">
											<input type="text" name="nama_apk" id="nama_apk" class="span6 m-wrap" value="<?php echo $nama_apk;?>" />
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">harga</label>
										<div class="controls">
											<input type="text" name="harga" id="harga" class="span6 m-wrap" value="<?php echo $harga;?>" />
										</div>
									</div>

									

									<div class="form-actions">
										<button type="submit" id="simpan" class="btn green"><i class="icon-ok"></i> Update</button>
										<a href="<?php echo base_url();?>ga/apk" class="btn white"><i class="icon-long-arrow-left"></i> Kembali</a>
										
									</div>
									<?php echo form_close(); ?>
								</div>
								
							</div>
						</div>
						
					</div>
				</div>


