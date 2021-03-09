<div class="col-md-12">
	<!-- general form elements disabled -->
	<div class="card card-primary">
		<div class="card-header">
			<h3 class="card-title">Form Add Barang</h3>
		</div>
		<!-- /.card-header -->
		<div class="card-body">
			<?php
			// Notification Form Null
			echo validation_errors('<div class="alert alert-warning alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h5><i class="icon fas fa-info"></i> ', '</h5></div>');

			// Notification upload failed
			if (isset($error_upload)) {
				echo '<div class="alert alert-warning alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h5><i class="icon fas fa-info"></i>' . $error_upload . '</h5></div>';
			}

			echo form_open_multipart('barang/edit/' . $barang->id_barang) ?>
			<div class="form-group">
				<label>Nama Barang</label>
				<input name="nama_barang" class="form-control" placeholder="Nama Barang" value="<?php echo $barang->nama_barang ?>">
			</div>
			<div class="row">
				<div class="col-sm-4">
					<!-- text input -->
					<div class="form-group">
						<label>Kategori</label>
						<select name="id_kategori" class="form-control">
							<option value="<?php echo $barang->id_kategori ?>"> <?php echo $barang->nama_kategori ?></option>
							<?php foreach ($kategori as $key => $value) { ?>
								<option value="<?php echo $value->id_kategori ?>"><?php echo $value->nama_kategori ?></option>
							<?php } ?>
						</select>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label>Harga</label>
						<input name="harga" class="form-control" placeholder="Harga Barang" value="<?php echo $barang->harga ?>">
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label>Berat(Gr)</label>
						<input name="berat" class="form-control" placeholder="Harga Barang" value="<?php echo $barang->berat ?>">
					</div>
				</div>
			</div>

			<div class="form-group">
				<label>Deskripsi</label>
				<textarea name="deskripsi" class="form-control" rows="5" placeholder="Deskripsi Barang"><?php echo $barang->deskripsi ?></textarea>
			</div>

			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<label>Ganti Gambar</label>
						<input type="file" name="gambar" id="preview_gambar" class="form-control">
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<img src="<?php echo base_url('assets/gambar/' . $barang->gambar) ?>" id="gambar_load" width="300px" class="img-thumbnail" alt="">
					</div>
				</div>
			</div>


			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-sm">Simpan</button>
				<a href="<?php echo base_url('barang') ?>" class="btn btn-danger btn-sm">Kembali</a>
			</div>

			<?php echo form_close() ?>
		</div>
	</div>
</div>

<script>
	function BacaGambar(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e) {
				$('#gambar_load').attr('src', e.target.result);
			}
			reader.readAsDataURL(input.files[0]);
		}
	}

	$('#preview_gambar').change(function() {
		BacaGambar(this);
	});
</script>
