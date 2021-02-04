<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
    <li class="breadcrumb-item active" aria-current="page">danh sách</li>
  </ol>
</nav>

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
				<td><a href="http://localhost/datmonan/backend/index.php?controller=product&action=detail&id=<?php echo $product['id'] ?>"><?php echo $product['product_name'] ?></a></td>
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