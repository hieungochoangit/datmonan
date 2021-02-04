<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
    <li class="breadcrumb-item active" aria-current="page">Thêm mới</li>
  </ol>
</nav>

<div class="row">
	<div class="col-md-5">
		<form action="" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label for="">Tên danh mục</label>
				<input type="text" name="name" class="form-control">
			</div>
			<div class="form-group">
				<label for="">Ảnh đại diện</label>
				<input type="file" name="thumbnail" class="form-control">
			</div>
			<div class="form-group">
				<label for="">Trạng thái</label>
				<select name="status" id="" class="form-control">
					<option value="0">Hiện</option>
					<option value="1">Ẩn</option>
				</select>
			</div>
			<div class="form-group">
				<button type="submit" name="submit" class="btn btn-success">Thêm</button>
			</div>
		</form>
	</div>
</div>
<h2 style="color: red"><?php echo isset($error) ? $error : '' ?></h2>