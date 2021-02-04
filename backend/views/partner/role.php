<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
    <li class="breadcrumb-item active" aria-current="page">cập nhập vai trò</li>
  </ol>
</nav>

<form action="" method="POST">
	<select name="role" id="">
		<?php foreach($roles as $role) : ?>
			<option value="<?php echo $role['id'] ?>"><?php echo $role['role_name'] ?></option>
		<?php endforeach ?>
	</select>
	<button type="submit" name="submit" class="btn btn-success">Cập nhập</button>
</form>