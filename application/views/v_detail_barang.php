<!-- Default box -->
<div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <h3 class="d-inline-block d-sm-none"><?php echo $barang->nama_barang ?></h3>
              <div class="col-12">
                <img src="<?php echo base_url('assets/gambar/'.$barang->gambar) ?>" class="product-image" alt="Product Image">
              </div>
              <div class="col-12 product-image-thumbs">
                <div class="product-image-thumb active"><img src="<?php echo base_url('assets/gambar/'.$barang->gambar) ?>" alt="Product Image"></div>
								<?php foreach ($gambar as $key => $value) { ?>
									<div class="product-image-thumb" ><img src="<?php echo base_url('assets/gambarbarang/'.$value->gambar) ?>" alt="Product Image"></div>
								<?php } ?>
                
              </div> 
            </div>
            <div class="col-12 col-sm-6">
              <h3 class="my-3"><?php echo $barang->nama_barang ?></h3>
							<h5><?php echo $barang->nama_kategori ?></h5>
							<hr>
              <p><?php echo $barang->deskripsi ?></p>

              <hr>
              
              <div class="bg-gray py-2 px-3 mt-4">
                <h2 class="mb-0">
                  RP. <?php echo number_format($barang->harga,0) ?>
                </h2>
              </div>
						<hr>
              <div class="mt-4">
                <div class="btn btn-primary btn-lg btn-flat">
                  <i class="fas fa-cart-plus fa-lg mr-2"></i> 
                  Add to Cart
                </div>
              </div>

              <div class="mt-4 product-share">
                <a href="#" class="text-gray">
                  <i class="fab fa-facebook-square fa-2x"></i>
                </a>
                <a href="#" class="text-gray">
                  <i class="fab fa-twitter-square fa-2x"></i>
                </a>
                <a href="#" class="text-gray">
                  <i class="fas fa-envelope-square fa-2x"></i>
                </a>
                <a href="#" class="text-gray">
                  <i class="fas fa-rss-square fa-2x"></i>
                </a>
              </div>

            </div>
          </div>
         
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() ?>template/dist/js/demo.js"></script>
