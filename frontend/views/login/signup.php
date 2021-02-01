<div class="container py-5">
	<a href="http://localhost/datmonan/frontend/index.php?controller=login&action=login">Nếu đã có tài khoản thì bấm vào đây để đăng nhập.</a>
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<form action="" method="POST" class="my-3">
				<div class="form-group">
					<label for="">Email</label>
					<input name="email" type="text" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Mật khẩu</label>
					<input name="password" type="password" class="form-control">
				</div>
				<div class="form-group">
					<button name="submit" type="submit" class="food-btn style-2"><span>Đăng ký</span></button>
				</div>
			</form>
			<h3><?php echo isset($error) ? $error : ''; ?></h3>
		</div>
	</div>
</div>