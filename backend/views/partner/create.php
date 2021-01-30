<h1>Thêm mới gian hàng</h1>

<form action="" method="POST" enctype="multipart/form-data">
	<div class="div form-group">
		<label for="">Tên gian hàng</label>
		<input name="name" type="text" class="form-control">
	</div>
	<div class="div form-group">
		<label for="">Ảnh đại diện</label>
		<input name="thumbnail" type="file" class="form-control">
	</div>
	<div class="div form-group">
		<label for="">Trạng thái</label>
		<select name="status" id="" class="form-control">
			<option value="0">Hiện</option>
			<option value="1">Ẩn</option>
		</select>
	</div>
	<div class="div form-group">
		<button name="submit" type="submit" class="btn btn-success">Thêm</button>
	</div>
</form>

<h2 style="color: red"><?php echo isset($error) ? $error : '' ?></h2>