<div class="row-fluid">
					<div class="span12">
						
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption"><i class="icon-reorder"></i>UPDATE TAHUN SPTRD</div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									
								</div>
							</div>
							<div class="portlet-body form">
								
								<div id="form_sample_2" class="form-horizontal">
								
									<?php echo form_open('ga/ganti_tahun_update/','class="form-horizontal"'); ?>
									<input type="hidden" name='id_sptrd' value="<?php echo $id_sptrd;?>"> 
									
									
									<div class="control-group">
										<label class="control-label">Nama Perusahaan</label>
										<div class="controls">
											<input type="text" name="nama_perusahaan" id="nama_perusahaan" class="span6 m-wrap" value="<?php echo $nama_perusahaan;?>" readonly="true"/>
										</div>
									</div>

									<div class="control-group">
										<label class="control-label">Nama Pemilik</label>
										<div class="controls">
											<input type="text" name="nama_pemilik" id="nama_pemilik" class="span6 m-wrap" value="<?php echo $nama_pemilik;?>" readonly="true"/>
										</div>
									</div>

									<div class="control-group">
										<label class="control-label">Imb</label>
										<div class="controls">
											<input type="text" name="imb" id="imb" class="span6 m-wrap" value="<?php echo $imb;?>" readonly="true"/>
										</div>
									</div>
									
									<div class="control-group">
										<label class="control-label">Alamat</label>
										<div class="controls">
											<textarea class="span12 wysihtml5 m-wrap" rows="6" name="alamat" id="alamat" value="<?php echo $alamat;?>" readonly="true"><?php echo $alamat;?></textarea>
											
										</div>
									</div>

									

									<div class="control-group">
										<label class="control-label">Apk</label>
										<div class="controls">
											<input type="text" name="retri" id="retri" class="span6 m-wrap" value="<?php echo $nama_apk;?>" readonly="true"/>
										</div>
									</div>

									<div class="control-group">
										<label class="control-label">Kecamatan</label>
										<div class="controls">
											<input type="text" name="kec" id="kec" class="span6 m-wrap" value="<?php echo $nama_kecamatan;?>" readonly="true"/>
										</div>
									</div>

						

									<div class="control-group">
										<label class="control-label">Berlaku Sampai</label>
										<div class="controls">
											<div class="input-append date date-picker"  data-date-format="yyyy-mm-dd" data-date-viewmode="years">
												<input  class="m-wrap m-ctrl-medium date-picker" name="berlaku_sampai"  type="text"  id="berlaku_sampai" value="<?php echo $berlaku_sampai;?>"  data-date="<?php echo date ('Y-m-d');?>" data-date-format="yyyy-mm-dd" > 
             									<span class="add-on"><i class="icon-calendar"></i></span>
											</div>
										</div>
									</div>
									
									<div class="form-actions">
										<button type="submit" id="simpan" class="btn green"><i class="icon-ok"></i> Update</button>
										<a href="<?php echo base_url();?>ga/ganti_tahun" class="btn white"><i class="icon-long-arrow-left"></i> Kembali</a>
										
									</div>
									<?php echo form_close(); ?>
								</div>
								
							</div>
						</div>
						
					</div>
				</div>


