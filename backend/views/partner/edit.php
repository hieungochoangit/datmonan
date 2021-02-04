<h1>Partner</h1>

<table class="table table-bordered my-3">
	<tr>
		<td width="160">Email</td>
		<td><?php echo $user['user_email'] ?></td>
	</tr>
	<tr>
		<td>Ngày đăng ký</td>
		<td><?php echo $user['user_created_at'] ?></td>
	</tr>
	<tr>
		<td>Vai trò</td>
		<td>	
			<?php  
				switch ($user['role_id']) {
					case 1:
						echo 'Admin';
						break;
					case 2:
						echo 'Partner';
						break;
					default:
						echo 'Người dùng';
						break;
				}
			?>
			<a href="http://localhost/datmonan/backend/index.php?controller=partner&action=role&id=<?php echo $user['id'] ?>">chỉnh sửa</a>
		</td>
	</tr>
</table>

<a href="http://localhost/datmonan/backend/index.php?controller=partner" class="btn btn-danger">Quay lại</a>