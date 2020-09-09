<div class="row-fluid">
					<div class="span12">
						
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption"><i class="icon-reorder"></i>Edit Kecamatan</div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									
								</div>
							</div>
							<div class="portlet-body form">
								
								<div id="form_sample_2" class="form-horizontal">
								
									<?php echo form_open_multipart('ga/kecamatan_update/','class="form-horizontal"'); ?>
									<input type="hidden" name='id_kecamatan' value="<?php echo $id_kecamatan;?>"> 
									
									<div class="control-group">
										<label class="control-label">Nama Kecamatan</label>
										<div class="controls">
										<input jenis="text" name="nama_kecamatan" id="nama_kecamatan" class="span6 m-wrap" value="<?php echo $nama_ga_master_jenis;?>" />
									</div>

									

									<div class="form-actions">
										<button jenis="submit" id="simpan" class="btn green"><i class="icon-ok"></i> Update</button>
										<a href="<?php echo base_url();?>ga/kecamatan" class="btn white"><i class="icon-long-arrow-left"></i> Kembali</a>
										
									</div>
									<?php echo form_close(); ?>
								</div>
								
							</div>
						</div>
						
					</div>
				</div>


