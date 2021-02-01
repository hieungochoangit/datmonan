<h1>Gian hàng của bạn</h1>

<a class="btn btn-success btn-sm my-3" href="http://localhost/datmonan/backend/index.php?controller=partner&action=create">Thêm gian hàng mới</a>
<a class="btn btn-success btn-sm my-3" href="http://localhost/datmonan/backend/index.php?controller=product&action=add">Thêm sản phẩm</a>

<div class="row">
	<?php foreach($store as $detail) : ?>
	<div class="col-md-4">
		<div class="card">
	        <img class="card-img-top" src="<?php echo $detail['partner_thumbnail'] ?>" alt="Card image cap">
	        <div class="card-body">
	            <h4 class="card-title mb-3"><a href="http://localhost/datmonan/backend/index.php?controller=partner&action=profile&id=<?php echo $detail['id'] ?>"><?php echo $detail['partner_name'] ?></a></h4>
	            <a href="http://localhost/datmonan/backend/index.php?controller=partner&action=delete&id=<?php echo $detail['id'] ?>">xóa</a>
	            <p class="card-text"><?php echo $detail['partner_desc'] ?></p>
	        </div>
	    </div>
	</div>
	<?php endforeach ?>
</div>