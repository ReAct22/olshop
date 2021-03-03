<!-- Navbar -->
<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="<?php echo base_url() ?>" class="navbar-brand">
        <i class="fas fa-store text-primary"></i>
        <span class="brand-text font-weight-light"><b>Toko Online</b></span>
      </a>
      
      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="<?php echo base_url() ?>" class="nav-link">Home</a>
          </li>
						<?php $kategori = $this->m_home->get_all_data_kategori() ?>
					<li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Kategori</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
								<?php foreach ($kategori as $key => $value) { ?>

									<li><a href="<?php echo base_url('home/kategori/'.$value->id_kategori) ?>" class="dropdown-item"><?php echo $value->nama_kategori ?></a></li>

							<?php	} ?>
              

            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">Contact</a>
          </li>
					
         
        </ul>


      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
		<!-- Messages Dropdown User -->
		<li class="nav-item">
			<div class="image">
						<a class="nav-link" data-toggle="dropdown" href="#">
						<span class="brand-text font-weight-light">Pelanggan</span>
					<img src="<?php echo base_url() ?>template/dist/img/user1-128x128.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
						style="opacity: .8">
				</a>
			<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
	  </li>
	  <!-- End Dropdown User -->
	  <!-- Dropdown untuk Cart -->
		<?php 
		$keranjang = $this->cart->contents(); 
		$jml_item = 0;
		foreach ($keranjang as $key => $value) {
			$jml_item = $jml_item + $value['qty'];
		}
		?>
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fas fa-shopping-cart"></i>
            <span class="badge badge-danger navbar-badge"><?php echo $jml_item ?></span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <div class="dropdown-divider"></div>
              <!-- Barang Start -->
							<?php foreach ($keranjang as $key => $value) { 
								$barang = $this->m_home->detail_barang($value['id']);
								?>	
							<a href="#" class="dropdown-item">						
              <div class="media">
                <img src="<?php echo base_url('assets/gambar/'.$barang->gambar) ?>" alt="User Avatar" class="img-size-50 mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    <?php echo $value['name'] ?>
                  </h3>
                  <p class="text-sm"><?php echo $value['qty'] ?> x Rp. <?php echo number_format($value['price'],0) ?></p>
                  <p class="text-sm text-muted"><i class="fa fa-calculator"></i> Rp. <?php echo $this->cart->format_number($value['subtotal']); ?></p>
                </div>
              </div>
							</a>
							<div class="dropdown-divider"></div>
					<?php	} ?>
              <!-- Barang End -->
						<a href="#" class="dropdown-item">						
              <div class="media">
                <div class="media-body">
								<tr>
									<td colspan="2"> </td>
									<td class="right"><strong>Total:</strong></td>
									<td class="right">Rp. <?php echo $this->cart->format_number($this->cart->total()); ?></td>
								</tr>
              	 </div>
							</div>
							</a>

						<div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">View Cart</a>
            <a href="#" class="dropdown-item dropdown-footer">Checkout</a>
          </div>
        </li>
        <!-- End Dropdown Cart -->
        
        
      </ul>
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> <?php echo $title ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Toko Online</a></li>
              <li class="breadcrumb-item"><a href="#"><?php echo $title ?></a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
	<!-- /.content-header -->

	<!-- Main content -->
    <div class="content">
      <div class="container">
