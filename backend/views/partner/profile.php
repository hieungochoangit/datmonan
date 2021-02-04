<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
    <li class="breadcrumb-item active" aria-current="page">chi tiết</li>
  </ol>
</nav>

<table class="table table-bordered my-3">
	<tr>
		<td width="150">Tên</td>
		<td><?php echo $detail['partner_name'] ?></td>
	</tr>
	<tr>
		<td>Ảnh đại diện</td>
		<td><img width="120" src="<?php echo $detail['partner_thumbnail'] ?>" alt=""></td>
	</tr>
	<tr>
		<td>Mô tả ngắn</td>
		<td><?php echo $detail['partner_desc'] ?></td>
	</tr>
	<tr>
		<td>Trạng thái</td>
		<td>
			<?php 
				if ($detail['partner_status'] == 0) {
					echo 'Hiện';
				} else {
					echo 'Ẩn';
				}
			?>
		</td>
	</tr>
	<tr>
		<td>Ngày tạo</td>
		<td><?php echo $detail['partner_created_at'] ?></td>
	</tr>
</table>

<a href="http://localhost/datmonan/backend/index.php?controller=partner&action=detail" class="btn btn-warning">Quay lại</a>
<a href="http://localhost/datmonan/backend/index.php?controller=partner&action=update&id=<?php echo $detail['id'] ?>" class="btn btn-danger">Chỉnh sửa</a>
<a href="http://localhost/datmonan/backend/index.php?controller=partner&action=product&id=<?php echo $detail['id'] ?>" class="btn btn-success">Xem danh sách món ăn</a>