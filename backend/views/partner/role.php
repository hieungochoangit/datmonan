<h1>Cập nhập vai trò</h1>

<form action="" method="POST">
	<select name="role" id="">
		<?php foreach($roles as $role) : ?>
			<option value="<?php echo $role['id'] ?>"><?php echo $role['role_name'] ?></option>
		<?php endforeach ?>
	</select>
	<button type="submit" name="submit" class="btn btn-success">Cập nhập</button>
</form>