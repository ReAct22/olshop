<div class="card card-solid">
	<div class="card-body pb-0">
		<div class="row ">
			<div class="col-sm-12 ">
				<?php echo form_open('belanja/update'); ?>

				<table class="table" cellpadding="6" cellspacing="1" style="width:100%">

					<tr>
						<th width="100px">QTY</th>
						<th>Nama Barang</th>
						<th style="text-align:right">Harga</th>
						<th style="text-align:right">Sub-Total</th>
						<th style="text-align:center">Berat</th>
						<th>Action</th>
					</tr>

					<?php $i = 1; ?>

					<?php
					$total_berat = 0;
					foreach ($this->cart->contents() as $items) {
						$barang = $this->m_home->detail_barang($items['id']);
						$berat = $items['qty'] * $barang->berat;

						$total_berat = $total_berat + $berat;
					?>
						<tr>
							<td>
								<?php echo form_input(array(
									'name' => $i . '[qty]',
									'value' => $items['qty'],
									'maxlength' => '3',
									'min' => '0',
									'size' => '5',
									'type' => 'number',
									'class' => 'form-control'
								));
								?>
							</td>
							<td><?php echo $items['name']; ?></td>
							<td style="text-align:right">Rp.<?php echo $this->cart->format_number($items['price']); ?></td>
							<td style="text-align:right">Rp.<?php echo $this->cart->format_number($items['subtotal']); ?></td>
							<td class="text-center"><?php echo $berat ?> Gram</td>
							<td class="text-center">
								<a href="<?php echo base_url('belanja/delete/' . $items['rowid']) ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
							</td>
						</tr>

						<?php $i++; ?>

					<?php }; ?>

					<tr>
						<td class="right">
							<h3>Total</h3>
						</td>
						<td class="right">
							<h3>Rp.<?php echo $this->cart->format_number($this->cart->total()); ?></h3>
						</td>
						<th>Tota Berat: <?php echo $total_berat ?> Gram</th>
						<td></td>
						<td></td>
						<td></td>
					</tr>


				</table>

				<div class="row">
					<div class="col-sm-4">
						<button type="submit" class="btn btn-primary btn-flat"><i class="fas fa-save"></i> Update Cart</button>
						<a href="<?php echo base_url('belanja/cekout') ?>" class="btn btn-success btn-flat"><i class="fas fa-check-square"></i> Checkout</a>
						<a href="<?php echo base_url('belanja/clear') ?>" class="btn btn-danger btn-flat"><i class="fas fa-recycle"></i> Clear Cart</a>
					</div>
				</div>
				<?php form_close(); ?>
				<br>
			</div>
		</div>
	</div>
</div>
