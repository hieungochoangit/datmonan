<section class="popular-foods padding-tb style-2">
    <div class="container">
        <div class="section-wrapper">
			<div class="row">
				<?php foreach($products as $product) : ?>
				<div class="col-xl-4 col-md-6 col-12">
					<div class="p-food-item">
						<div class="p-food-inner">
							<div class="p-food-thumb">
								<img src="<?php echo $product['product_thumbnail'] ?>" alt="p-food">
								<span><?php echo number_format($product['product_price']) ?> VNĐ</span>
							</div>
							<div class="p-food-content">
								<div style="width: 100px;" class="p-food-author">
									<a href="#"><img src="<?php echo $product['partner_thumbnail'] ?>" alt="food-author"></a>
								</div>
								<h6><a href="http://localhost/datmonan/frontend/index.php?controller=product&action=detail&id=<?php echo $product['id']; ?>"><?php echo $product['product_name'] ?></a></h6>
								<div class="p-food-group">
									<span>Cửa hàng: </span>
									<a href="#"><?php echo $product['partner_name'] ?></a>
								</div>
								<ul class="del-time">
									<li>
										<i class="fas fa-plus"></i>
										<div class="time-tooltip">
											<div class="time-tooltip-holder">
												<span class="tooltip-label">Thêm vào giỏ hàng</span>
												<span class="tooltip-info">Món ăn sẽ gửi đến bạn thời gian sớm nhất.</span>
											</div>
										</div>
									</li>
									<li>
										<i class="icofont-stopwatch"></i>
										<div class="time-tooltip">
											<div class="time-tooltip-holder">
												<span class="tooltip-label">Comming Soon!</span>
												<span class="tooltip-info">...</span>
											</div>
										</div>
									</li>
								</ul>
								<div class="p-food-footer">
									<div class="left">
										<div class="rating">
											<i class="icofont-star"></i>
											<i class="icofont-star"></i>
											<i class="icofont-star"></i>
											<i class="icofont-star"></i>
											<i class="icofont-star"></i>
										</div>
									</div>
									<div class="right"><i class="icofont-home"></i>6th Avenue New York</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php endforeach ?>
				<div class="col-xl-4 col-md-6 col-12">
					<div class="p-food-item">
						<div class="p-food-inner">
							<div class="p-food-thumb">
								<img src="assets/images/popular-food/02.jpg" alt="p-food">
								<span>$20 - $30</span>
							</div>
							<div class="p-food-content">
								<div class="p-food-author">
									<a href="#"><img src="assets/images/chef/author/02.jpg" alt="food-author"></a>
								</div>
								<h6><a href="#">Meat Lovers</a></h6>
								<div class="p-food-group">
									<span>Type of food :</span>
									<a href="#">Beef Roast</a>
									<a href="#">Pizza</a>
									<a href="#">Stakes</a>
								</div>
								<ul class="del-time">
									<li>
										<i class="icofont-cycling-alt"></i>
										<div class="time-tooltip">
											<div class="time-tooltip-holder">
												<span class="tooltip-label">Delivery time</span>
												<span class="tooltip-info">Your order will be delivered in 20 minutes.</span>
											</div>
										</div>
									</li>
									<li>
										<i class="icofont-stopwatch"></i>
										<div class="time-tooltip">
											<div class="time-tooltip-holder">
												<span class="tooltip-label">Pickup time</span>
												<span class="tooltip-info">You can pickup order in 20 minutes.</span>
											</div>
										</div>
									</li>
								</ul>
								<div class="p-food-footer">
									<div class="left">
										<div class="rating">
											<i class="icofont-star"></i>
											<i class="icofont-star"></i>
											<i class="icofont-star"></i>
											<i class="icofont-star"></i>
											<i class="icofont-star"></i>
										</div>
									</div>
									<div class="right"><i class="icofont-home"></i>6th Avenue New York</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-md-6 col-12">
					<div class="p-food-item">
						<div class="p-food-inner">
							<div class="p-food-thumb">
								<img src="assets/images/popular-food/03.jpg" alt="p-food">
								<span>$20 - $30</span>
							</div>
							<div class="p-food-content">
								<div class="p-food-author">
									<a href="#"><img src="assets/images/chef/author/03.jpg" alt="food-author"></a>
								</div>
								<h6><a href="#">Subway</a></h6>
								<div class="p-food-group">
									<span>Type of food :</span>
									<a href="#">Beef Roast</a>
									<a href="#">Pizza</a>
									<a href="#">Stakes</a>
								</div>
								<ul class="del-time">
									<li>
										<i class="icofont-cycling-alt"></i>
										<div class="time-tooltip">
											<div class="time-tooltip-holder">
												<span class="tooltip-label">Delivery time</span>
												<span class="tooltip-info">Your order will be delivered in 20 minutes.</span>
											</div>
										</div>
									</li>
									<li>
										<i class="icofont-stopwatch"></i>
										<div class="time-tooltip">
											<div class="time-tooltip-holder">
												<span class="tooltip-label">Pickup time</span>
												<span class="tooltip-info">You can pickup order in 20 minutes.</span>
											</div>
										</div>
									</li>
								</ul>
								<div class="p-food-footer">
									<div class="left">
										<div class="rating">
											<i class="icofont-star"></i>
											<i class="icofont-star"></i>
											<i class="icofont-star"></i>
											<i class="icofont-star"></i>
											<i class="icofont-star"></i>
										</div>
									</div>
									<div class="right"><i class="icofont-home"></i>6th Avenue New York</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-md-6 col-12">
					<div class="p-food-item">
						<div class="p-food-inner">
							<div class="p-food-thumb">
								<img src="assets/images/popular-food/04.jpg" alt="p-food">
								<span>$20 - $30</span>
							</div>
							<div class="p-food-content">
								<div class="p-food-author">
									<a href="#"><img src="assets/images/chef/author/04.jpg" alt="food-author"></a>
								</div>
								<h6><a href="#">Hardee’s</a></h6>
								<div class="p-food-group">
									<span>Type of food :</span>
									<a href="#">Beef Roast</a>
									<a href="#">Pizza</a>
									<a href="#">Stakes</a>
								</div>
								<ul class="del-time">
									<li>
										<i class="icofont-cycling-alt"></i>
										<div class="time-tooltip">
											<div class="time-tooltip-holder">
												<span class="tooltip-label">Delivery time</span>
												<span class="tooltip-info">Your order will be delivered in 20 minutes.</span>
											</div>
										</div>
									</li>
									<li>
										<i class="icofont-stopwatch"></i>
										<div class="time-tooltip">
											<div class="time-tooltip-holder">
												<span class="tooltip-label">Pickup time</span>
												<span class="tooltip-info">You can pickup order in 20 minutes.</span>
											</div>
										</div>
									</li>
								</ul>
								<div class="p-food-footer">
									<div class="left">
										<div class="rating">
											<i class="icofont-star"></i>
											<i class="icofont-star"></i>
											<i class="icofont-star"></i>
											<i class="icofont-star"></i>
											<i class="icofont-star"></i>
										</div>
									</div>
									<div class="right"><i class="icofont-home"></i>6th Avenue New York</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-md-6 col-12">
					<div class="p-food-item">
						<div class="p-food-inner">
							<div class="p-food-thumb">
								<img src="assets/images/popular-food/05.jpg" alt="p-food">
								<span>$20 - $30</span>
							</div>
							<div class="p-food-content">
								<div class="p-food-author">
									<a href="#"><img src="assets/images/chef/author/05.jpg" alt="food-author"></a>
								</div>
								<h6><a href="#">Nando’s</a></h6>
								<div class="p-food-group">
									<span>Type of food :</span>
									<a href="#">Beef Roast</a>
									<a href="#">Pizza</a>
									<a href="#">Stakes</a>
								</div>
								<ul class="del-time">
									<li>
										<i class="icofont-cycling-alt"></i>
										<div class="time-tooltip">
											<div class="time-tooltip-holder">
												<span class="tooltip-label">Delivery time</span>
												<span class="tooltip-info">Your order will be delivered in 20 minutes.</span>
											</div>
										</div>
									</li>
									<li>
										<i class="icofont-stopwatch"></i>
										<div class="time-tooltip">
											<div class="time-tooltip-holder">
												<span class="tooltip-label">Pickup time</span>
												<span class="tooltip-info">You can pickup order in 20 minutes.</span>
											</div>
										</div>
									</li>
								</ul>
								<div class="p-food-footer">
									<div class="left">
										<div class="rating">
											<i class="icofont-star"></i>
											<i class="icofont-star"></i>
											<i class="icofont-star"></i>
											<i class="icofont-star"></i>
											<i class="icofont-star"></i>
										</div>
									</div>
									<div class="right"><i class="icofont-home"></i>6th Avenue New York</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-md-6 col-12">
					<div class="p-food-item">
						<div class="p-food-inner">
							<div class="p-food-thumb">
								<img src="assets/images/popular-food/06.jpg" alt="p-food">
								<span>$20 - $30</span>
							</div>
							<div class="p-food-content">
								<div class="p-food-author">
									<a href="#"><img src="assets/images/chef/author/06.jpg" alt="food-author"></a>
								</div>
								<h6><a href="#">Pizza Hut</a></h6>
								<div class="p-food-group">
									<span>Type of food :</span>
									<a href="#">Beef Roast</a>
									<a href="#">Pizza</a>
									<a href="#">Stakes</a>
								</div>
								<ul class="del-time">
									<li>
										<i class="icofont-cycling-alt"></i>
										<div class="time-tooltip">
											<div class="time-tooltip-holder">
												<span class="tooltip-label">Delivery time</span>
												<span class="tooltip-info">Your order will be delivered in 20 minutes.</span>
											</div>
										</div>
									</li>
									<li>
										<i class="icofont-stopwatch"></i>
										<div class="time-tooltip">
											<div class="time-tooltip-holder">
												<span class="tooltip-label">Pickup time</span>
												<span class="tooltip-info">You can pickup order in 20 minutes.</span>
											</div>
										</div>
									</li>
								</ul>
								<div class="p-food-footer">
									<div class="left">
										<div class="rating">
											<i class="icofont-star"></i>
											<i class="icofont-star"></i>
											<i class="icofont-star"></i>
											<i class="icofont-star"></i>
											<i class="icofont-star"></i>
										</div>
									</div>
									<div class="right"><i class="icofont-home"></i>6th Avenue New York</div>
								</div>
							</div>
						</div>
					</div>
                </div>
                <div class="col-xl-4 col-md-6 col-12">
					<div class="p-food-item">
						<div class="p-food-inner">
							<div class="p-food-thumb">
								<img src="assets/images/popular-food/01.jpg" alt="p-food">
								<span>$20 - $30</span>
							</div>
							<div class="p-food-content">
								<div class="p-food-author">
									<a href="#"><img src="assets/images/chef/author/01.jpg" alt="food-author"></a>
								</div>
								<h6><a href="#">Dragon Express</a></h6>
								<div class="p-food-group">
									<span>Type of food :</span>
									<a href="#">Beef Roast</a>
									<a href="#">Pizza</a>
									<a href="#">Stakes</a>
								</div>
								<ul class="del-time">
									<li>
										<i class="icofont-cycling-alt"></i>
										<div class="time-tooltip">
											<div class="time-tooltip-holder">
												<span class="tooltip-label">Delivery time</span>
												<span class="tooltip-info">Your order will be delivered in 20 minutes.</span>
											</div>
										</div>
									</li>
									<li>
										<i class="icofont-stopwatch"></i>
										<div class="time-tooltip">
											<div class="time-tooltip-holder">
												<span class="tooltip-label">Pickup time</span>
												<span class="tooltip-info">You can pickup order in 20 minutes.</span>
											</div>
										</div>
									</li>
								</ul>
								<div class="p-food-footer">
									<div class="left">
										<div class="rating">
											<i class="icofont-star"></i>
											<i class="icofont-star"></i>
											<i class="icofont-star"></i>
											<i class="icofont-star"></i>
											<i class="icofont-star"></i>
										</div>
									</div>
									<div class="right"><i class="icofont-home"></i>6th Avenue New York</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-md-6 col-12">
					<div class="p-food-item">
						<div class="p-food-inner">
							<div class="p-food-thumb">
								<img src="assets/images/popular-food/02.jpg" alt="p-food">
								<span>$20 - $30</span>
							</div>
							<div class="p-food-content">
								<div class="p-food-author">
									<a href="#"><img src="assets/images/chef/author/02.jpg" alt="food-author"></a>
								</div>
								<h6><a href="#">Meat Lovers</a></h6>
								<div class="p-food-group">
									<span>Type of food :</span>
									<a href="#">Beef Roast</a>
									<a href="#">Pizza</a>
									<a href="#">Stakes</a>
								</div>
								<ul class="del-time">
									<li>
										<i class="icofont-cycling-alt"></i>
										<div class="time-tooltip">
											<div class="time-tooltip-holder">
												<span class="tooltip-label">Delivery time</span>
												<span class="tooltip-info">Your order will be delivered in 20 minutes.</span>
											</div>
										</div>
									</li>
									<li>
										<i class="icofont-stopwatch"></i>
										<div class="time-tooltip">
											<div class="time-tooltip-holder">
												<span class="tooltip-label">Pickup time</span>
												<span class="tooltip-info">You can pickup order in 20 minutes.</span>
											</div>
										</div>
									</li>
								</ul>
								<div class="p-food-footer">
									<div class="left">
										<div class="rating">
											<i class="icofont-star"></i>
											<i class="icofont-star"></i>
											<i class="icofont-star"></i>
											<i class="icofont-star"></i>
											<i class="icofont-star"></i>
										</div>
									</div>
									<div class="right"><i class="icofont-home"></i>6th Avenue New York</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-md-6 col-12">
					<div class="p-food-item">
						<div class="p-food-inner">
							<div class="p-food-thumb">
								<img src="assets/images/popular-food/03.jpg" alt="p-food">
								<span>$20 - $30</span>
							</div>
							<div class="p-food-content">
								<div class="p-food-author">
									<a href="#"><img src="assets/images/chef/author/03.jpg" alt="food-author"></a>
								</div>
								<h6><a href="#">Subway</a></h6>
								<div class="p-food-group">
									<span>Type of food :</span>
									<a href="#">Beef Roast</a>
									<a href="#">Pizza</a>
									<a href="#">Stakes</a>
								</div>
								<ul class="del-time">
									<li>
										<i class="icofont-cycling-alt"></i>
										<div class="time-tooltip">
											<div class="time-tooltip-holder">
												<span class="tooltip-label">Delivery time</span>
												<span class="tooltip-info">Your order will be delivered in 20 minutes.</span>
											</div>
										</div>
									</li>
									<li>
										<i class="icofont-stopwatch"></i>
										<div class="time-tooltip">
											<div class="time-tooltip-holder">
												<span class="tooltip-label">Pickup time</span>
												<span class="tooltip-info">You can pickup order in 20 minutes.</span>
											</div>
										</div>
									</li>
								</ul>
								<div class="p-food-footer">
									<div class="left">
										<div class="rating">
											<i class="icofont-star"></i>
											<i class="icofont-star"></i>
											<i class="icofont-star"></i>
											<i class="icofont-star"></i>
											<i class="icofont-star"></i>
										</div>
									</div>
									<div class="right"><i class="icofont-home"></i>6th Avenue New York</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-md-6 col-12">
					<div class="p-food-item">
						<div class="p-food-inner">
							<div class="p-food-thumb">
								<img src="assets/images/popular-food/04.jpg" alt="p-food">
								<span>$20 - $30</span>
							</div>
							<div class="p-food-content">
								<div class="p-food-author">
									<a href="#"><img src="assets/images/chef/author/04.jpg" alt="food-author"></a>
								</div>
								<h6><a href="#">Hardee’s</a></h6>
								<div class="p-food-group">
									<span>Type of food :</span>
									<a href="#">Beef Roast</a>
									<a href="#">Pizza</a>
									<a href="#">Stakes</a>
								</div>
								<ul class="del-time">
									<li>
										<i class="icofont-cycling-alt"></i>
										<div class="time-tooltip">
											<div class="time-tooltip-holder">
												<span class="tooltip-label">Delivery time</span>
												<span class="tooltip-info">Your order will be delivered in 20 minutes.</span>
											</div>
										</div>
									</li>
									<li>
										<i class="icofont-stopwatch"></i>
										<div class="time-tooltip">
											<div class="time-tooltip-holder">
												<span class="tooltip-label">Pickup time</span>
												<span class="tooltip-info">You can pickup order in 20 minutes.</span>
											</div>
										</div>
									</li>
								</ul>
								<div class="p-food-footer">
									<div class="left">
										<div class="rating">
											<i class="icofont-star"></i>
											<i class="icofont-star"></i>
											<i class="icofont-star"></i>
											<i class="icofont-star"></i>
											<i class="icofont-star"></i>
										</div>
									</div>
									<div class="right"><i class="icofont-home"></i>6th Avenue New York</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-md-6 col-12">
					<div class="p-food-item">
						<div class="p-food-inner">
							<div class="p-food-thumb">
								<img src="assets/images/popular-food/05.jpg" alt="p-food">
								<span>$20 - $30</span>
							</div>
							<div class="p-food-content">
								<div class="p-food-author">
									<a href="#"><img src="assets/images/chef/author/05.jpg" alt="food-author"></a>
								</div>
								<h6><a href="#">Nando’s</a></h6>
								<div class="p-food-group">
									<span>Type of food :</span>
									<a href="#">Beef Roast</a>
									<a href="#">Pizza</a>
									<a href="#">Stakes</a>
								</div>
								<ul class="del-time">
									<li>
										<i class="icofont-cycling-alt"></i>
										<div class="time-tooltip">
											<div class="time-tooltip-holder">
												<span class="tooltip-label">Delivery time</span>
												<span class="tooltip-info">Your order will be delivered in 20 minutes.</span>
											</div>
										</div>
									</li>
									<li>
										<i class="icofont-stopwatch"></i>
										<div class="time-tooltip">
											<div class="time-tooltip-holder">
												<span class="tooltip-label">Pickup time</span>
												<span class="tooltip-info">You can pickup order in 20 minutes.</span>
											</div>
										</div>
									</li>
								</ul>
								<div class="p-food-footer">
									<div class="left">
										<div class="rating">
											<i class="icofont-star"></i>
											<i class="icofont-star"></i>
											<i class="icofont-star"></i>
											<i class="icofont-star"></i>
											<i class="icofont-star"></i>
										</div>
									</div>
									<div class="right"><i class="icofont-home"></i>6th Avenue New York</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
</section>