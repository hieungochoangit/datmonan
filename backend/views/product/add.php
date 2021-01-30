<h1>Thêm sản phẩm</h1>

<div class="row">
	<div class="col-md-5">
		<form action="">
			<div class="form-group">
				<label for="">Tên sản phẩm</label>
				<input type="text" class="form-control">
			</div>
			<div class="form-group">
				<label for="">Ảnh sản phẩm</label>
				<input type="file" class="form-control">
			</div>
			<div class="form-group">
				<label for="">Giá sản phẩm</label>
				<input type="text" class="form-control">
			</div>
			<div class="form-group">
				<label for="">Giá đã giảm</label>
				<input type="text" class="form-control">
			</div>
			<div class="form-group">
				<label for="">Mô tả sản phẩm</label>
				<textarea name="" class="form-control"></textarea>
			</div>
			<div class="form-group">
				<label for="">Danh mục</label>
				<select name="" id="" class="form-control">
					<?php foreach($cateList as $category) : ?>
						<option value="<?php echo $category['id'] ?>"><?php echo $category['category_name'] ?></option>
					<?php endforeach ?>
				</select>
			</div>
			<div class="form-group">
				<label for="">Cửa hàng</label>
				<select name="" id="" class="form-control">
					<?php foreach($storeList as $store) : ?>
						<option value="<?php echo $store['id'] ?>"><?php echo $store['partner_name'] ?></option>
					<?php endforeach ?>
				</select>
			</div>
			<div class="form-group">
				<button class="btn btn-success">Thêm</button>
			</div>
		</form>
	</div>
</div>