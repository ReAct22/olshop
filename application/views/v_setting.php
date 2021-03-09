<div class="col-md-12">
	<!-- general form elements disabled -->
	<div class="card card-primary">
		<div class="card-header">
			<h3 class="card-title">Setting Website</h3>
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
			echo form_open('admin/setting'); ?>

			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<label>Provinsi</label>
						<select name="provinsi" class="form-control" id=""></select>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<label for="">Kota</label>
						<select name="kota" class="form-control" id="">
							<option value="<?php echo $setting->lokasi ?>"><?php echo $setting->lokasi ?></option>
						</select>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<label for="">Nama Toko</label>
						<input type="text" name="nama_toko" value="<?php echo $setting->nama_toko ?>" class="form-control" required>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<label for="">No Telpon</label>
						<input type="text" name="no_telpon" class="form-control" value="<?php echo $setting->no_telpon ?>" required>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="form-group">
					<label for="">Alamat Toko</label>
					<input type="text" name="alamat_toko" class="form-control" value="<?php echo $setting->alamat_toko ?>" required>
				</div>
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-sm">Simpan</button>
				<a href="<?php echo base_url('admin') ?>" class="btn btn-danger btn-sm">Kembali</a>
			</div>


			<?php echo form_close() ?>
		</div>
	</div>
</div>

<script>
	$(document).ready(function() {
		//Masukan Data Select Provinsi
		$.ajax({
			type: "POST",
			url: "<?php echo base_url('rajaongkir/provinsi') ?>",
			success: function(hasil_provinsi) {
				// console.log(hasil_provinsi);
				$("select[name='provinsi']").html(hasil_provinsi);
			}
		});
		// Masukan Data Select Kota
		$("select[name=provinsi]").on("change", function() {
			var id_provinsi_terpilih = $("option:selected", this).attr("id_provinsi");
			$.ajax({
				type: "POST",
				url: "<?php echo base_url('rajaongkir/kota') ?>",
				data: 'id_provinsi=' + id_provinsi_terpilih,
				success: function(hasil_kota) {
					$("select[name='kota']").html(hasil_kota);
				}
			});
		});
	});
</script>
