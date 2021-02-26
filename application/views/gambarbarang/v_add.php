<div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Gambar Barang: <?php echo $barang->nama_barang ?></h3>

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

<?php 
				// Notification Form Null
				echo validation_errors('<div class="alert alert-warning alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h5><i class="icon fas fa-info"></i> ','</h5></div>');

				// Notification upload failed
				if (isset($error_upload)) {
					echo '<div class="alert alert-warning alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h5><i class="icon fas fa-info"></i>'.$error_upload.'</h5></div>';
				}
				
				echo form_open_multipart('gambarbarang/add/'. $barang->id_barang) ?> 
			<div class="row">
				<div class="col-sm-4">
					<div class="form-group">
                        <label>Ket Gambar</label>
                        <input name="ket" class="form-control" placeholder="Ket Gambar" value="<?php set_value('ket') ?>">
                    </div>
				</div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Gambar Barang</label>
                    <input type="file" name="gambar" id="preview_gambar" class="form-control" required>
                </div>
			</div>
			<div class="col-sm-4">
                <div class="form-group">
                    <img src="<?php echo base_url('assets/gambar/no_foto.png') ?>" id="gambar_load" width="200px" class="img-thumbnail"  alt="">
                </div>
            </div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-sm">Simpan</button>
				<a href="<?php echo base_url('gambarbarang') ?>" class="btn btn-danger btn-sm">Kembali</a>
            </div>

		</div>
				<?php echo form_close() ?>

				<hr>
				<div class="row">
				<?php foreach ($gambar as $key => $value) { ?>
					<div class="col-sm-3">
						<div class="form-group">
							<img src="<?php echo base_url('assets/gambarbarang/'.$value->gambar) ?>" id="gambar_load" width="250px" height="200px" class="img-thumbnail"  alt="">
						</div>
						<p for="">Ket: <?php echo $value->ket ?></p>
						<button data-toggle="modal" data-target="#delete<?php echo $value->id_gambar; ?>" class="btn btn-danger btn-xs btn-block"><i class="fas fa-trash"></i> Delete</button>
					</div>
				<?php } ?>
					
				</div>


            </div>
            <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>

		<?php	foreach ($gambar as $key => $value) {?>
<!-- Delete form -->
			<div class="modal fade" id="delete<?php echo $value->id_gambar; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Delete <?php echo $value->ket ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

			<div class="form-group text-center">
				<img src="<?php echo base_url('assets/gambarbarang/'.$value->gambar) ?>"
				 id="gambar_load" width="250px" height="200px" class="img-thumbnail"  alt="">
			</div>
			<h5>Apakah Anda yakin Ingin menghapus Gambar ini ...?</h5>
			
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <a href="<?php echo base_url('gambarbarang/delete/'. $value->id_barang. '/' .$value->id_gambar) ?>" class="btn btn-primary">Delete</a>
            </div>
		
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
			<!-- /.modal -->
						<?php }?>


		<script>
	function BacaGambar(input){
		if(input.files && input.files[0]){
			var reader = new FileReader();
			reader.onload = function(e){
				$('#gambar_load').attr('src',e.target.result);
			}
			reader.readAsDataURL(input.files[0]);
		}
	}

	$('#preview_gambar').change(function(){
		BacaGambar(this);
	});
</script>

