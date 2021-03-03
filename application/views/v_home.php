<div class="card-body">
     <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
       <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>					
         </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                  <img class="d-block w-100" src="<?php echo base_url() ?>assets/slider1.jpg" alt="First slide">
               </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="<?php echo base_url() ?>assets/slider2.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="<?php echo base_url() ?>assets/slider3.jpg" alt="Third slide">
											</div>
										<div class="carousel-item">
                      <img class="d-block w-100" src="<?php echo base_url() ?>assets/slider4.jpg" alt="Third slide">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
							</div>



	<div class="card card-solid">
        <div class="card-body pb-0">
          <div class="row ">
					<?php foreach ($barang as $key => $value) { ?>
		 			 <div class="col-sm-4">
						<?php 
							echo form_open('belanja/add');
							echo form_hidden('id', $value->id_barang);
							echo form_hidden('qty', 1);
							echo form_hidden('price', $value->harga);
							echo form_hidden('name', $value->nama_barang);
							echo form_hidden('redirect_page',str_replace('index.php/', '', current_url()));
						?>
              <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
								<h2 class="lead"><b><?php echo $value->nama_barang ?></b></h2>
								<p class="text-muted text-sm"><b>Kategori: </b><?php echo $value->nama_kategori ?> </p>
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-12 text-center">
                      <img src="<?php echo base_url('assets/gambar/'.$value->gambar) ?>" alt="" width="300px" height="250px">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
								<div class="row">
								<div class="col-sm-6">
								<div class="text-left">
								<h4><span class="badge" style="background-color: #8EC5FC; color: #fff;">RP. <?php echo number_format($value->harga, 0) ?></span> </h4>
								</div>
								</div>
								<div class="col-sm-6">
								<div class="text-right">
                    <a href="<?php echo base_url('home/detail_barang/'.$value->id_barang) ?>" 
										class="btn btn-sm btn-success">
                      <i class="fas fa-eye"></i>
                    </a>
                    <button type="submit" class="btn btn-sm btn-primary swalDefaultSuccess">
                      <i class="fas fa-cart-plus"></i> ADD
                    </button>
                  </div>
								</div>
								</div>
                </div>
              </div>
							<?php 
								echo form_close();
							?>
            </div>
						<?php } ?>
				</div>
			</div>
		</div>

<!-- SweetAlert2 -->
<script src="<?php echo base_url() ?>template/plugins/sweetalert2/sweetalert2.min.js"></script>
	<script type="text/javascript">
  $(function() {
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });

    $('.swalDefaultSuccess').click(function() {
      Toast.fire({
        icon: 'success',
        title: 'Barang berhasil dimasukin keranjang.'
      })
		});
  });
</script>
