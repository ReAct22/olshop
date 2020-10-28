<div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Kategori</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add"><i class="fas fa-plus"></i>Add</button>
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
							<th>Nama Kategori</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						$no = 1;
						foreach ($kategori as $key => $value) {
						?>
						<tr>
							<td class="text-center"><?php echo $no++; ?></td>
							<td><?php echo $value->nama_kategori ?></td>
							<td class="text-center">
								<button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit<?php echo $value->id_kategori; ?>"><i class="fas fa-edit"></i></button>
								<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?php echo $value->id_kategori; ?>"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
							<?php
							}
							?>
					</tbody>
				</table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

		  <div class="modal fade" id="add">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Kategori</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
			<?php 
			echo form_open('Kategori/add'); 
			?>

				<div class="form-group">
                    <label>Nama Kategori</label>
                    <input type="text" name="nama_kategori" class="form-control" placeholder="Nama Kategori" required>
                </div>
			
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
			<?php echo form_close(); ?>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
			<!-- /.modal -->

			<?php	foreach ($kategori as $key => $value) {?>
<!-- Edit form -->
			<div class="modal fade" id="edit<?php echo $value->id_kategori; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit <?php echo $value->nama_kategori ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
			<?php 
			echo form_open('kategori/edit/'.$value->id_kategori); 
			?>

				<div class="form-group">
                    <label>Nama kategori</label>
                    <input type="text" name="nama_kategori" value="<?php echo $value->nama_kategori; ?>" class="form-control" placeholder="Nama User" required>
                </div>

            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
			<?php echo form_close(); ?>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
			<!-- /.modal -->
						<?php }?>

						<?php	foreach ($kategori as $key => $value) {?>
<!-- Delete form -->
			<div class="modal fade" id="delete<?php echo $value->id_kategori; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Delete <?php echo $value->nama_kategori ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">


						<h5>Apakah Anda yakin Ingin menghapus Data ini ...?</h5>
			
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <a href="<?php echo base_url('kategori/delete/'.$value->id_kategori) ?>" class="btn btn-primary">Delete</a>
            </div>
		
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
			<!-- /.modal -->
						<?php }?>


