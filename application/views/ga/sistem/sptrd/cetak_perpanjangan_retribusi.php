<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN EXAMPLE TABLE PORTLET-->
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption"><i class="icon-edit"></i>Perpanjang Retribusi</div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									
								</div>
							</div>
							<div class="portlet-body">
								<div class="table-toolbar">
									
									
										
									
								</div>
								<table border="1px;">
									<thead>
										<tr>
											<th>No</th>
											<th>IMB</th>
											<th>Nominal Retribusi</th>
											<th>Nama Pemilik</th>
											<th>Alamat</th>
											<th>Tahun Pendataan</th>
											<th>Berlaku S/d</th>
											
											
											
										</tr>
									</thead>
									<tbody>
										<?php
										$no=1;
										if ($data_stnk->num_rows()>0) {
											foreach ($data_stnk->result_array() as $tampil) { ?>
										<tr >
											<td><?php echo $no;?></td>
											<td><?php echo $tampil['imb'];?></td>
											<td><?php echo $tampil['nominal'];?></td>
											<td><?php echo $tampil['nama_pemilik'];?></td>
											<td><?php echo $tampil['alamat'];?></td>
											<td><?php echo $tampil['tahun_pendataan'];?></td>
											<td><?php echo $tampil['berlaku_sampai'];?></td>

											
											
										</tr>
										<?php
										$no++;
										}
										}
										
										else { ?>
										<tr>
											<td colspan="7">No Result Data</td>
										</tr>
										<?php

										}
										?>
										
									</tbody>
								</table>
							</div>
						</div>
						
					</div>
				</div>

				


				<?php
									foreach ($data_total_nominal_pajak->result_array() as $tampil) {
										$total  = $tampil['total'];
									}

									?>
									
										
										 	<span>Total Nominal Pembayaran Retribusi = <?php echo $total;?></span>
										 	<br>
										 	Tanggal Cetak = <?php echo date('Y-m-d'); ?>


