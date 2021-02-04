<h1>Danh sách thành viên</h1>

<table class="table table-bordered mt-3">
	<thead>
		<tr>
			<td width="50">ID</td>
			<td>Email</td>
			<td>Vai trò</td>
			<td width="300">Ngày tạo</td>
			<td width="90"></td>
		</tr>
	</thead>
	<tbody>
		<?php foreach($users as $user) : ?>
			<tr>
				<td><?php echo $user['id'] ?></td>
				<td><?php echo $user['user_email'] ?></td>
				<td><?php echo $user['role_name'] ?></td>
				<td><?php echo $user['user_created_at'] ?></td>
				<td>
					<a title="xem" href=""><i class="far fa-eye"></i></a>
					<a title="sửa" href="http://localhost/datmonan/backend/index.php?controller=partner&action=edit&id=<?php echo $user['id'] ?>"><i class="far fa-edit"></i></a>
					<a title="xóa" href=""><i class="far fa-trash-alt"></i></a>
				</td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>