<div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Gambar Barang</h3>

                <div class="card-tools">
                  
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
								<?php 
								if ($this->session->flashdata('pesan')) {
									echo '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Success!</h5>';
									echo $this->session->flashdata('pesan');
									echo '</div>';
								}
								
								?>
                <table id="example1" class="table table-bordered table-responsive-lg">
					<thead class="text-center">
						<tr>
							<th>No</th>
							<th>Nama Barang</th>
							<th>Cover</th>
							<th>Jumlah</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=1; foreach ($gambarbarang as $key => $value) { ?>
						<tr>
							<td><?php echo $no++ ?></td>
							<td><?php echo $value->nama_barang ?></td>
							<td class="text-center"><img src="<?php echo base_url('assets/gambar/'. $value->gambar) ?>" width="100px"></td>
							<td class="text-center"><span class='badge bg-primary'><?php echo $value->total_gambar ?></span></td>
							<td class="text-center">
								<a href="<?php echo base_url('gambarbarang/add/'.$value->id_barang) ?>" class="btn btn-success btn-sm"><i class="fas fa-plus"></i> Add Gambar</a>
							</td>
						</tr>
						<?php } ?>
					
					</tbody>
				</table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
