<a href="http://localhost/datmonan/backend/index.php?controller=category&action=add" class="btn btn-success mb-3">Thêm danh mục</a>

<table class="table table-bordered">
	<thead>
		<tr>
			<td>ID</td>
			<td>Tên danh mục</td>
			<td>Ảnh đại diện</td>
			<td>Trạng thái</td>
			<td>Ngày tạo</td>
			<td width="100"></td>
		</tr>
	</thead>
	<tbody>
		<?php foreach($cateList as $cate) : ?>
			<tr>
				<td><?php echo $cate['id'] ?></td>
				<td><?php echo $cate['category_name'] ?></td>
				<td><img width="120" src="<?php echo $cate['category_thumbnail'] ?>" alt=""></td>
				<td>
					<?php 
						if ($cate['category_status'] == 0) {
							echo 'Hiện';
						} else {
							echo 'Ẩn';
						}
					 ?>
				</td>
				<td><?php echo $cate['category_created_at'] ?></td>
				<td>
					<a title="xem" href="http://localhost/datmonan/backend/index.php?controller=category&action=detail&id=<?php echo $cate['id'] ?>"><i class="far fa-eye"></i></a>
					<a title="sửa" href="http://localhost/datmonan/backend/index.php?controller=category&action=update&id=<?php echo $cate['id'] ?>"><i class="far fa-edit"></i></a>
					<a title="xóa" href=""><i class="far fa-trash-alt"></i></a>
				</td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>