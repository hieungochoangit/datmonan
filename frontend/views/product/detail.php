
<!-- Blog Page Section Start Here -->
<div class="blog-section blog-single recepi-single padding-tb bg-body">
    <div class="container">
        <div class="section-wrapper">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-12">
                    <article>
                        <div class="post-item">
                            <div class="post-inner">
                                <div class="post-thumb">
                                    <img style="width: 100%" src="<?php echo $product['product_thumbnail'] ?>" alt="shop-single">
                                </div>
                                <div class="post-content">
                                    <div class="meta-tag">
                                        <div class="categori">
                                            <a href="#"><?php echo $product['category_name'] ?></a>
                                        </div>
                                        <div class="rating">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <span>(5.5)</span>
                                        </div>
                                    </div>
                                    <h4><?php echo $product['product_name'] ?></h4>
                                    <div class="meta-post">
                                        <ul>
                                            <li>
                                                <i class="icofont-clock-time"></i>
                                                <a href="#" class="date">Thời gian nấu : 10 min</a>
                                            </li>
                                            <li>
                                                <i class="icofont-signal"></i>
                                                <a href="#" class="skill">Đơn vị : Suất</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <form action="">
                                        <input style="width: 10%;" type="number" class="form-control">
                                        <button type="submit" class="food-btn border-0"><span>Thêm vào giỏ</span></button>
                                    </form>

                                    <p><?php echo $product['product_desc'] ?></p>
                                </div>
                            </div>
                        </div>

                        <div class="product">
                            <h4 class="title-border">Món ăn liên quan</h4>
                            <div class="section-wrapper">
                                <div class="row no-gutters">
                                    <?php foreach($products as $product) : ?>
                                    <div class="col-xl-3 col-md-6 col-12">
                                        <div class="product-item">
                                            <div class="product-thumb">
                                                <img src="<?php echo $product['product_thumbnail'] ?>" alt="food-product">
                                            </div>
                                            <div class="product-content">
                                                <h6><a href="http://localhost/datmonan/frontend/index.php?controller=product&action=detail&id=<?php echo $product['id'] ?>"><?php echo $product['product_name'] ?></a></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach ?>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-md-7 col-12">
                    <aside>
                        <div class="widget widget-author">
                            <div class="widget-header">
                                <h5><?php echo $partner['partner_name'] ?></h5>
                            </div>
                            <div class="widget-wrapper">
                                <div class="admin-thumb">
                                    <img src="<?php echo $partner['partner_thumbnail'] ?>" alt="author">
                                </div>
                                <div class="admin-content">
                                    <p><?php echo $partner['partner_desc'] ?></p>
                                    <div class="scocial-media">
                                        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
                                        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
                                        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
                                        <a href="#" class="vimeo"><i class="icofont-vimeo"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="widget recipe-categori">
                            <div class="widget-header">
                                <h5>Danh mục phổ biến</h5>
                            </div>
                            <div class="widget-wrapper section-wrapper">
                                <div class="row justify-content-center no-gutters">
                                    <?php foreach($cateList as $category) : ?>
                                    <div class="col-6">
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
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog Page Section Ending Here -->


<!-- Newsletter Section Start Here -->
<div class="news-letter">
    <div class="container">
        <div class="section-wrapper">
            <div class="news-title">
                <h3>Đăng ký nhận thông tin</h3>
            </div>
            <div class="news-form">
                <form action="https://www.foxcoders.com/">
                    <label>
                        <input type="email" name="email" placeholder="Nhập thông tin email...">
                    </label>
                    <input type="submit" name="submit" value="Đăng ký">
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Newsletter Section Ending Here -->
