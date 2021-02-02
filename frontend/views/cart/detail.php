
<!-- Shop Cart Page Section start here -->		            
<div class="shop-cart padding-tb">
    <div class="container">
        <div class="section-wrapper">
            <div class="cart-top">
                <table id="cart-list">
                    <thead>
                        <tr>
                            <th>Sản phẩm</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Tổng cộng</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($_SESSION['cart'] as $id => $item) : ?>
                        <tr>
                            <td class="product-item">
                                <div class="p-thumb">
                                    <a href="http://localhost/datmonan/frontend/index.php?controller=product&action=detail&id=<?php echo $id ?>"><img src="<?php echo $item['thumbnail'] ?>" alt="product"></a>
                                </div>
                                <div class="p-content">
                                    <a href="http://localhost/datmonan/frontend/index.php?controller=product&action=detail&id=<?php echo $id ?>"><?php echo $item['name'] ?></a>
                                </div>
                            </td>
                            <td><?php echo number_format($item['price']) ?></td>
                            <td>
                                <div class="cart-plus-minus">
                                    <div class="dec qtybutton">-</div>
                                    <input class="cart-plus-minus-box" onchange="updateCart(<?php echo $id ?>);" type="text" id="quantity_<?php echo $id ?>" name="qtybutton_<?php echo $id ?>" value="<?php echo $item['quantity'] ?>">
                                    <div class="inc qtybutton">+</div>
                                </div>
                            </td>
                            <td><?php echo number_format($item['price'] * $item['quantity']) ?> VNĐ</td>
                            <td>
                                <a onclick="del(<?php echo $id ?>);" href="http://localhost/datmonan/frontend/index.php?controller=cart&action=delete&id=<?php echo $id ?>"><img src="assets/images/shop/del.png" alt="product"></a>
                            </td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
            <div class="cart-bottom">
                <div class="cart-checkout-box">
                    <div class="coupon">
                        <input type="text" name="coupon" placeholder="Mã giảm giá..." class="cart-page-input-text">
                        <input type="submit" value="Sử dụng">
                    </div>
                    <div class="cart-checkout">
                        <input type="submit" value="Cập nhập">
                        <input type="submit" value="Xóa giỏ hàng">
                    </div>
                </div>
                <div class="shiping-box">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="calculate-shiping">
                                <h4>Thông tin nhận hàng</h4>
                                <div class="outline-select">
                                    <div class="form-group">
                                        <input type="text" placeholder="Địa chỉ nhận hàng..." name="s" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Số điện thoại..." name="s" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Ghi chú cho cửa hàng..." name="s" class="form-control">
                                    </div>
                                </div>
                                <button type="submit" class="food-btn"><span>Đặt hàng</span></button>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="cart-overview">
                                <h4>Tổng cộng</h4>
                                <ul>
                                    <li>
                                        <span class="pull-left">
                                            Giá
                                        </span>
                                        <p class="pull-right">
                                            <?php 

                                            $total = 0;
                                            foreach ($_SESSION['cart'] as $key => $value) {
                                                $total += $value['price'] * $value['quantity'];
                                            }
                                            echo number_format($total) . ' VNĐ';

                                            ?>
                                        </p>
                                    </li>
                                    <li>
                                        <span class="pull-left">Phí ship</span>
                                        <p class="pull-right">Free Shipping</p>
                                    </li>
                                    <li>
                                        <span class="pull-left">Tổng cộng</span>
                                        <p class="pull-right"><?php echo number_format($total) . ' VNĐ'; ?></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Shop Cart Page Section ending here -->