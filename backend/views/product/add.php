<h1>Thêm sản phẩm</h1>

<form action="" method="POST" enctype="multipart/form-data">
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label for="">Tên sản phẩm</label>
				<input name="name" type="text" class="form-control">
			</div>
			<div class="form-group">
				<label for="">Ảnh sản phẩm</label>
				<input name="thumbnail" type="file" class="form-control">
			</div>
			<div class="form-group">
				<label for="">Giá sản phẩm</label>
				<input name="price" type="text" class="form-control">
			</div>
			<div class="form-group">
				<label for="">Giá đã giảm</label>
				<input name="sale" type="text" class="form-control">
			</div>
			<div class="form-group">
				<label for="">Mô tả sản phẩm</label>
				<textarea name="desc" class="form-control"></textarea>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label for="">Trạng thái</label>
				<select name="status" id="" class="form-control">
					<option value="0">Hiện</option>
					<option value="1">Ẩn</option>
				</select>
			</div>
			<div class="form-group">
				<label for="">Danh mục</label>
				<select name="category" id="" class="form-control">
					<?php foreach($cateList as $category) : ?>
						<option value="<?php echo $category['id'] ?>"><?php echo $category['category_name'] ?></option>
					<?php endforeach ?>
				</select>
			</div>
			<div class="form-group">
				<label for="">Cửa hàng</label>
				<select name="store" id="" class="form-control">
					<?php foreach($storeList as $store) : ?>
						<option value="<?php echo $store['id'] ?>"><?php echo $store['partner_name'] ?></option>
					<?php endforeach ?>
				</select>
			</div>
			<div class="form-group">
				<button name="submit" type="submit" class="btn btn-success">Thêm</button>
			</div>
		</div>
	</div>
</form>
<h2 style="color: red"><?php echo isset($error) ? $error : '' ?></h2>
