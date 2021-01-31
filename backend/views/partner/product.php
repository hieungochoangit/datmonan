<h1>Danh sách sản phẩm cửa hàng</h1>

<table class="table table-bordered my-4">
	<thead>
		<tr>
			<td>ID</td>
			<td>Tên món ăn</td>
			<td>Ảnh đại diện</td>
			<td>Giá</td>
			<td>Giá km</td>
			<td>Mô tả</td>
			<td>Danh mục</td>
			<td>Ngày tạo</td>
			<td></td>
		</tr>
	</thead>
	<tbody>
		<?php foreach($products as $product) : ?>
			<tr>
				<td><?php echo $product['id'] ?></td>
				<td>T<?php echo $product['product_name'] ?></td>
				<td><img width="80" src="<?php echo $product['product_thumbnail'] ?>" alt=""></td>
				<td><?php echo $product['product_price'] ?></td>
				<td><?php echo $product['product_sale_price'] ?></td>
				<td><?php echo $product['product_desc'] ?></td>
				<td><?php echo $product['category_name'] ?></td>
				<td><?php echo $product['product_created_at'] ?></td>
				<td>xem</td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>