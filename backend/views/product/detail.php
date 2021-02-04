<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
    <li class="breadcrumb-item" aria-current="page">chi tiết sản phẩm</li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo $product['product_name'] ?></li>
  </ol>
</nav>

<table class="table table-bordered my-3">
	<tr>
		<td width="150">Tên sản phẩm</td>
		<td><?php echo $product['product_name'] ?></td>
	</tr>
	<tr>
		<td>Ảnh sản phẩm</td>
		<td><img width="80" src="<?php echo $product['product_thumbnail'] ?>" alt=""></td>
	</tr>
	<tr>
		<td>Giá sản phẩm</td>
		<td><?php echo $product['product_price'] ?></td>
	</tr>
	<tr>
		<td>Giá khuyến mãi</td>
		<td><?php echo $product['product_sale_price'] ?></td>
	</tr>
	<tr>
		<td>Trạng thái</td>
		<td>
			<?php 
				if ($product['product_status'] == 0) {
					echo 'Hiện';
				} else {
					echo 'Ẩn';
				}
			?>
		</td>
	</tr>
	<tr>
		<td>Danh mục</td>
		<td>
			<?php echo $product['category_name'] ?>
		</td>
	</tr>
	<tr>
		<td>Cửa hàng</td>
		<td>
			<?php echo $product['partner_name'] ?>
		</td>
	</tr>
	<tr>
		<td>Ngày tạo</td>
		<td>
			<?php echo $product['product_created_at'] ?>
		</td>
	</tr>
</table>

<a href="http://localhost/datmonan/backend/index.php?controller=product" class="btn btn-warning">Quay lại</a>
<a href="http://localhost/datmonan/backend/index.php?controller=product&action=update&id=<?php echo $product['id'] ?>" class="btn btn-danger">Chỉnh sửa</a>