
<!-- Recipes Categories Section Start Here -->
<section class="recipe-categori padding-tb home-3 bg-body pb-0 mb-3">
    <div class="container">
        <div class="section-header style-2">
            <h4>Danh mục sản phẩm</h4>
            <a href="#" class="text-btn">Xem tất cả<i class="icofont-rounded-double-right"></i></a>
        </div>
        <div class="section-wrapper">
            <div class="row justify-content-center">
                <?php foreach($cateList as $category) : ?>
                <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                    <div class="recipe-item">
                        <div class="recipe-thumb">
                            <img src="<?php echo $category['category_thumbnail'] ?>" alt="food-recipe">
                        </div>
                        <div class="recipe-content">
                            <a href="http://localhost/datmonan/frontend/index.php?controller=category&action=detail&id=<?php echo $category['id'] ?>"><?php echo $category['category_name'] ?></a>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
            </div>
        </div>
    </div>
</section>
<!-- Recipes Categories Section Ending Here -->

<!-- Recipes Categories Section Start Here -->
<section class="recipe-categori padding-tb home-3 bg-body pb-0 mb-3">
    <div class="container">
        <div class="section-header style-2">
            <h4>Danh sách cửa hàng</h4>
            <a href="#" class="text-btn">Xem tất cả<i class="icofont-rounded-double-right"></i></a>
        </div>
        <div class="section-wrapper">
            <div class="row justify-content-center">
                <?php foreach($storeList as $store) : ?>
                <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                    <div class="recipe-item">
                        <div style="height: 120px;" class="recipe-thumb">
                            <img src="<?php echo $store['partner_thumbnail'] ?>" alt="food-recipe">
                        </div>
                        <div class="recipe-content">
                            <a href="http://localhost/datmonan/frontend/index.php?controller=partner&action=product&id=<?php echo $store['id']; ?>"><?php echo $store['partner_name'] ?></a>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
            </div>
        </div>
    </div>
</section>
<!-- Recipes Categories Section Ending Here -->
		