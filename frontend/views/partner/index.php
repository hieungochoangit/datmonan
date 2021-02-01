<div class="container py-5">
    <div class="row justify-content-center">
    <div class="col-xl-8 col-12">
        <article>
            <div class="shop-product-wrap grid row">
                <?php foreach($products as $product) : ?>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img src="<?php echo $product['product_thumbnail'] ?>" alt="shope">
                            <div class="product-action-link">
                                <a onclick="addToCart(<?php echo $product['id'] ?>);"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <h6><a href="http://localhost/datmonan/frontend/index.php?controller=product&action=detail&id=<?php echo $product['id'] ?>"><?php echo $product['product_name'] ?></a></h6>
                            <h6><?php echo number_format($product['product_price']) ?> VNĐ</h6>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
            
            <div class="paginations">
                <ul class="d-flex flex-wrap justify-content-center">
                    <li>
                        <a href="#">1</a>
                    </li>
                    <li class="d-none d-sm-block">
                        <a href="#">2</a>
                    </li>
                    <li class="d-none d-sm-block">
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a class="dot">...</a>
                    </li>
                    <li class="d-none d-sm-block">
                        <a href="#">9</a>
                    </li>
                    <li class="d-none d-sm-block">
                        <a href="#">10</a>
                    </li>
                    <li>
                        <a href="#">11</a>
                    </li>
                </ul>
            </div>
        </article>
    </div>
    <div class="col-xl-4 col-md-7 col-12">
        <aside>
            <div class="popular-chef-widget">
                <div class="widget widget-search">
                    <div class="search-wrapper">
                        <input type="text" name="s" placeholder="Your Search...">
                        <button type="submit"><i class="icofont-search-2"></i></button>
                    </div>
                </div>
            </div>
        </aside>
    </div>
</div>
</div>