<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1 class="my-3">Chi tiết đơn hàng <?php echo $order['order_code'] ?></h1>
			<table class="table table-bordered">
				<tr>
					<td width="150">Tên người nhận</td>
					<td><?php echo $order['order_name'] ?></td>
				</tr>
				<tr>
					<td width="150">Địa chỉ giao hàng</td>
					<td><?php echo $order['order_address'] ?></td>
				</tr>
				<tr>
					<td width="150">Số điện thoại</td>
					<td><?php echo $order['order_phone'] ?></td>
				</tr>
				<tr>
					<td width="150">Giá</td>
					<td><?php echo number_format($order['order_price']) ?></td>
				</tr>
				<tr>
					<td width="150">Số lượng sản phẩm</td>
					<td>
						<table>
							<thead>
								<tr>
									<td>Tên sản phẩm</td>
									<td>Ảnh</td>
									<td>Số lượng</td>
									<td>Giá</td>
									<td>Tổng cộng</td>
								</tr>
							</thead>
							<tbody>
								<?php foreach($products as $product) : ?>
									<tr>
										<td><?php echo $product['o_product_name'] ?></td>
										<td><img width="50" src="<?php echo $product['o_product_thumbnail'] ?>" alt=""></td>
										<td><?php echo $product['o_product_quantity'] ?></td>
										<td><?php echo number_format($product['o_product_price']) ?></td>
										<td><?php echo number_format($product['o_product_quantity'] * $product['o_product_price']) ?></td>
									</tr>
								<?php endforeach ?>
									<tr>
										<td>Tổng cộng</td>
										<td></td>
										<td></td>
										<td></td>
										<td><?php echo number_format($order['order_price']) ?></td>
									</tr>
							</tbody>
						</table>
					</td>
				</tr>
				<tr>
					<td width="150">Ghi chú</td>
					<td><?php echo $order['order_note'] ?></td>
				</tr>
				<tr>
					<td width="150">Ngày đặt hàng</td>
					<td><?php echo $order['order_created_at'] ?></td>
				</tr>
				<tr>
					<td width="150">Trạng thái</td>
					<td><?php 

						if ($order['order_status'] == 0) {
							echo '<span class="badge badge-warning">Mới đặt hàng</span>';
						} else if ($order['order_status'] == 1) {
							echo '<span class="badge badge-info">Đang giao hàng</span>';
						} else if ($order['order_status'] == 2) {
							echo '<span class="badge badge-primary">Đã giao hàng</span>';
						} else {
							echo '<span class="badge badge-dark">Hủy</span>';
						}

					?></td>
				</tr>
			</table>

			<a href="http://localhost/datmonan/frontend/index.php?controller=order" class="btn btn-warning mb-2">Quay lại</a>
		</div>
	</div>
</div>