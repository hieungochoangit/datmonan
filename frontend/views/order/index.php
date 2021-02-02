<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1 class="my-3">Đơn hàng của bạn</h1>
			<table class="table table-bordered">
				<thead>
					<tr>
						<td>Mã đơn hàng</td>
						<td>Người nhận hàng</td>
						<td>Địa chỉ giao hàng</td>
						<td>Số điện thoại</td>
						<td>Ghi chú</td>
						<td>Giá</td>
						<td>Ngày đặt hàng</td>
						<td>Trạng thái</td>
					</tr>
				</thead>
				<tbody>
					<?php foreach($orders as $order) : ?>
						<tr>
							<td><a href="http://localhost/datmonan/frontend/index.php?controller=order&action=detail&id=<?php echo $order['id'] ?>"><?php echo $order['order_code'] ?></a></td>
							<td><?php echo $order['order_name'] ?></td>
							<td><?php echo $order['order_address'] ?></td>
							<td><?php echo $order['order_phone'] ?></td>
							<td><?php echo $order['order_note'] ?></td>
							<td><?php echo number_format($order['order_price']) ?></td>
							<td><?php echo $order['order_created_at'] ?></td>
							<td>
								<?php 

									if ($order['order_status'] == 0) {
										echo '<span class="badge badge-warning">Mới đặt hàng</span>';
									} else if ($order['order_status'] == 1) {
										echo '<span class="badge badge-info">Đang giao hàng</span>';
									} else if ($order['order_status'] == 2) {
										echo '<span class="badge badge-primary">Đã giao hàng</span>';
									} else {
										echo '<span class="badge badge-dark">Hủy</span>';
									}

								?>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>