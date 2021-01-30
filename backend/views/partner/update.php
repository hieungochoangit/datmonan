<h1>Chỉnh sửa gian hàng</h1>

<form action="" method="POST" enctype="multipart/form-data">
	<div class="div form-group">
		<label for="">Tên gian hàng</label>
		<input name="name" value="<?php echo $detail['partner_name'] ?>" type="text" class="form-control">
	</div>
	<div class="div form-group">
		<label for="">Ảnh đại diện</label>
		<input name="thumbnail" type="file" class="form-control">
		<img width="120" src="<?php echo $detail['partner_thumbnail'] ?>" alt="">
	</div>
	<div class="div form-group">
		<label for="">Giới thiệu ngắn</label>
		<textarea name="desc" id="" cols="30" rows="10" class="form-control"><?php echo $detail['partner_desc'] ?></textarea>
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