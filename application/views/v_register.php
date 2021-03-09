<div class="row">
	<div class="col-sm-4"></div>
	<div class="col-sm-4">
		<div class="register-box">
			<div class="card">
				<div class="card-body register-card-body">
					<p class="login-box-msg">Register a new Account</p>
					<?php
					echo validation_errors('<div class="alert alert-warning alert-dismissible">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
<h5><i class="icon fas fa-exclamation-triangle"></i> Alert!</h5>', '</div>');

					if ($this->session->flashdata('pesan')) {

						echo '<div class="alert alert-success alert-dismissible">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<h5><i class="icon fas fa-check"></i> Success!</h5>';
						echo $this->session->flashdata('pesan');
						echo '</div>';
					}

					echo form_open('pelanggan/register'); ?>
					<div class="input-group mb-3">
						<input type="text" name="nama_pelanggan" value="<?php echo set_value('nama_pelanggan') ?>" class="form-control" placeholder="Name User">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-user"></span>
							</div>
						</div>
					</div>
					<div class="input-group mb-3">
						<input type="email" name="email" value="<?php echo set_value('email') ?>" class="form-control" placeholder="E-mail">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-envelope"></span>
							</div>
						</div>
					</div>
					<div class="input-group mb-3">
						<input type="password" name="password" value="<?php echo set_value('password') ?>" class="form-control" placeholder="Password">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-lock"></span>
							</div>
						</div>
					</div>
					<div class="input-group mb-3">
						<input type="password" name="ulangi_password" value="<?php echo set_value('ulangi_password') ?>" class="form-control" placeholder="Retype password">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-lock"></span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-8">
						</div>
						<!-- /.col -->
						<div class="col-4">
							<button type="submit" class="btn btn-primary btn-block">Register</button>
						</div>
						<!-- /.col -->
					</div>
					<?php echo form_close() ?>

					<!-- <div class="social-auth-links text-center">
						<p>- OR -</p>
						<a href="#" class="btn btn-block btn-primary">
							<i class="fab fa-facebook mr-2"></i>
							Sign up using Facebook
						</a>
						<a href="#" class="btn btn-block btn-danger">
							<i class="fab fa-google-plus mr-2"></i>
							Sign up using Google+
						</a>
					</div> -->

					<a href="<?php echo base_url('pelanggan/login') ?>" class="text-center">I already have a Account</a>
				</div>
				<!-- /.form-box -->
			</div><!-- /.card -->
		</div>
	</div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
