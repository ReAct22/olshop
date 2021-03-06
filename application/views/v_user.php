<div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data user</h3>

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
							<th>Nama User</th>
							<th>Username</th>
							<th>Password</th>
							<th>Level</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody class="text-center">
						<?php 
						$no = 1;
						foreach ($user as $key => $value) {
						?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $value->nama_user ?></td>
							<td><?php echo $value->username ?></td>
							<td><?php echo $value->password ?></td>
							<td><?php 
							if($value->level_user == 1){
								echo "<span class='badge bg-primary'>Admin</span>";
							}else{
								echo "<span class='badge bg-success'>User</span>";
							}
							?></td>
							<td>
								<button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit<?php echo $value->id_user; ?>"><i class="fas fa-edit"></i></button>
								<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?php echo $value->id_user; ?>"><i class="fas fa-trash"></i></button>
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
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add User</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
			<?php 
			echo form_open('user/add'); 
			?>

				<div class="form-group">
                    <label>Nama User</label>
                    <input type="text" name="nama_user" class="form-control" placeholder="Nama User" required>
                </div>

				<div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Username" required>
                </div>

				<div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="password" required>
                </div>

				<div class="form-group">
                    <label>Level User</label>
                    <select name="level_user" class="form-control" id="">
						<option value="1" selected>Admin</option>
						<option value="2">User</option>
					</select>
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

			<?php	foreach ($user as $key => $value) {?>
<!-- Edit form -->
			<div class="modal fade" id="edit<?php echo $value->id_user; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit <?php echo $value->nama_user ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
			<?php 
			echo form_open('user/edit/'.$value->id_user); 
			?>

				<div class="form-group">
                    <label>Nama User</label>
                    <input type="text" name="nama_user" value="<?php echo $value->nama_user; ?>" class="form-control" placeholder="Nama User" required>
                </div>

				<div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" value="<?php echo $value->username; ?>" class="form-control" placeholder="Username" required>
                </div>

				<div class="form-group">
                    <label>Password</label>
                    <input type="password" value="<?php echo $value->password; ?>" name="password" class="form-control" placeholder="password" required>
                </div>

				<div class="form-group">
                    <label>Level User</label>
                    <select name="level_user" class="form-control" id="">
						<option value="1" <?php if($value->level_user==1){echo 'selected';} ?>>Admin</option>
						<option value="2" <?php if($value->level_user==2){echo 'selected';} ?>>User</option>
					</select>
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

						<?php	foreach ($user as $key => $value) {?>
<!-- Delete form -->
			<div class="modal fade" id="delete<?php echo $value->id_user; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Delete <?php echo $value->nama_user ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">


						<h5>Apakah Anda yakin Ingin menghapus Data ini ...?</h5>
			
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <a href="<?php echo base_url('user/delete/'.$value->id_user) ?>" class="btn btn-primary">Delete</a>
            </div>
		
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
			<!-- /.modal -->
						<?php }?>

