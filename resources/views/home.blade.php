@extends('layouts.app')
@section('title', 'Trang chủ')
@section('main')
		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="#">TRANG CHỦ</a></li>
						<li><a href="#">KHUYẾN MÃI</a></li>
						<li><a href="#">ỐP LƯNG</a></li>
                        <li><a href="#">KÍNH CƯỜNG LỰC</a></li>
						<li><a href="#">DÂY SẠC - CỦ SẠC</a></li>
						<li><a href="#">SẠC DỰ PHÒNG</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="{{ asset('img/shop01.png')}}" alt="">
							</div>
							<div class="shop-body">
								<h3>Ốp lưng<br>sành điệu</h3>
								<a href="#" class="cta-btn">Xem ngay <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="{{ asset('img/shop03.png')}}" alt="">
							</div>
							<div class="shop-body">
								<h3>Sạc dự phòng<br>giá tốt</h3>
								<a href="#" class="cta-btn">Xem ngay <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="{{ asset('img/shop02.png')}}" alt="">
							</div>
							<div class="shop-body">
								<h3>Cường lực<br>siêu bền</h3>
								<a href="#" class="cta-btn">Xem ngay <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Sản phẩm mới</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab1">Ốp lưng</a></li>
									<li><a data-toggle="tab" href="#tab1">Cường lực</a></li>
									<li><a data-toggle="tab" href="#tab1">Dây sạc, củ sạc</a></li>
									<li><a data-toggle="tab" href="#tab1">Sạc dự phòng</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="{{ asset('img/product01.png')}}" alt="">
												<div class="product-label">
													<span class="sale">-30%</span>
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">#tendanhmuc</p>
												<h3 class="product-name"><a href="#">#tenSP</a></h3>
												<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">thêm vào <br> DS yêu thích</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">xem nhanh</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="{{ asset('img/product02.png')}}" alt="">
												<div class="product-label">
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">#tendanhmuc</p>
												<h3 class="product-name"><a href="#">#tenSP</a></h3>
												<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">thêm vào <br> DS yêu thích</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">xem nhanh</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="{{ asset('img/product03.png')}}" alt="">
												<div class="product-label">
													<span class="sale">-30%</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">#tendanhmuc</p>
												<h3 class="product-name"><a href="#">#tenSP</a></h3>
												<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
												<div class="product-rating">
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">thêm vào <br> DS yêu thích</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">xem nhanh</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="{{ asset('img/product04.png')}}" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">#tendanhmuc</p>
												<h3 class="product-name"><a href="#">#tenSP</a></h3>
												<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">thêm vào <br> DS yêu thích</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">xem nhanh</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="{{ asset('img/product05.png')}}" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">#tendanhmuc</p>
												<h3 class="product-name"><a href="#">#tenSP</a></h3>
												<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">thêm vào <br> DS yêu thích</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">xem nhanh</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</button>
											</div>
										</div>
										<!-- /product -->
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- HOT DEAL SECTION -->
		<div id="hot-deal" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="hot-deal">
							<ul class="hot-deal-countdown">
								<li>
									<div>
										<h3>02</h3>
										<span>Ngày</span>
									</div>
								</li>
								<li>
									<div>
										<h3>10</h3>
										<span>Giờ</span>
									</div>
								</li>
								<li>
									<div>
										<h3>34</h3>
										<span>Phút</span>
									</div>
								</li>
								<li>
									<div>
										<h3>60</h3>
										<span>Giây</span> 
                                        <!-- cai nay phai sua cho tg dem nguoc -->
									</div>
								</li>
							</ul>
							<h2 class="text-uppercase">deal sốc tuần này</h2>
							<p>giảm giá đến 50%</p>
							<a class="primary-btn cta-btn" href="#">mua ngay</a>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /HOT DEAL SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Bán chạy</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab2">Ốp lưng</a></li>
									<li><a data-toggle="tab" href="#tab2">Cường lực</a></li>
									<li><a data-toggle="tab" href="#tab2">Dây sạc, củ sạc</a></li>
									<li><a data-toggle="tab" href="#tab2">Sạc dự phòng</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab2" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-2">
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="{{ asset('img/product06.png')}}" alt="">
												<div class="product-label">
													<span class="sale">-30%</span>
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">#tendanhmuc</p>
												<h3 class="product-name"><a href="#">#tenSP</a></h3>
												<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">thêm vào <br> DS yêu thích</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">xem nhanh</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="{{ asset('img/product07.png')}}" alt="">
												<div class="product-label">
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">#tendanhmuc</p>
												<h3 class="product-name"><a href="#">#tenSP</a></h3>
												<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">thêm vào <br> DS yêu thích</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">xem nhanh</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="{{ asset('img/product08.png')}}" alt="">
												<div class="product-label">
													<span class="sale">-30%</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">#tendanhmuc</p>
												<h3 class="product-name"><a href="#">#tenSP</a></h3>
												<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
												<div class="product-rating">
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">thêm vào <br> DS yêu thích</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">xem nhanh</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="{{ asset('img/product09.png')}}" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">#tendanhmuc</p>
												<h3 class="product-name"><a href="#">#tenSP</a></h3>
												<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">thêm vào <br> DS yêu thích</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">xem nhanh</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="{{ asset('img/product01.png')}}" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">#tendanhmuc</p>
												<h3 class="product-name"><a href="#">#tenSP</a></h3>
												<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">thêm vào <br> DS yêu thích</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">xem nhanh</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</button>
											</div>
										</div>
										<!-- /product -->
									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Đề xuất</h4>
							<div class="section-nav">
								<div id="slick-nav-3" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-3">
							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{ asset('img/product07.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">#tendanhmuc</p>
										<h3 class="product-name"><a href="#">#tenSP</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{ asset('img/product08.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">#tendanhmuc</p>
										<h3 class="product-name"><a href="#">#tenSP</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{ asset('img/product09.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">#tendanhmuc</p>
										<h3 class="product-name"><a href="#">#tenSP</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>

							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{ asset('img/product01.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">#tendanhmuc</p>
										<h3 class="product-name"><a href="#">#tenSP</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{ asset('img/product02.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">#tendanhmuc</p>
										<h3 class="product-name"><a href="#">#tenSP</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{ asset('img/product03.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">#tendanhmuc</p>
										<h3 class="product-name"><a href="#">#tenSP</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>
						</div>
					</div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Đề xuất</h4>
							<div class="section-nav">
								<div id="slick-nav-4" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-4">
							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{ asset('img/product04.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">#tendanhmuc</p>
										<h3 class="product-name"><a href="#">#tenSP</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{ asset('img/product05.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">#tendanhmuc</p>
										<h3 class="product-name"><a href="#">#tenSP</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{ asset('img/product06.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">#tendanhmuc</p>
										<h3 class="product-name"><a href="#">#tenSP</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>

							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{ asset('img/product07.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">#tendanhmuc</p>
										<h3 class="product-name"><a href="#">#tenSP</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{ asset('img/product08.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">#tendanhmuc</p>
										<h3 class="product-name"><a href="#">#tenSP</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{ asset('img/product09.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">#tendanhmuc</p>
										<h3 class="product-name"><a href="#">#tenSP</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>
						</div>
					</div>

					<div class="clearfix visible-sm visible-xs"></div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Đề xuất</h4>
							<div class="section-nav">
								<div id="slick-nav-5" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-5">
							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{ asset('img/product01.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">#tendanhmuc</p>
										<h3 class="product-name"><a href="#">#tenSP</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{ asset('img/product02.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">#tendanhmuc</p>
										<h3 class="product-name"><a href="#">#tenSP</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{ asset('img/product03.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">#tendanhmuc</p>
										<h3 class="product-name"><a href="#">#tenSP</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>

							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{ asset('img/product04.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">#tendanhmuc</p>
										<h3 class="product-name"><a href="#">#tenSP</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{ asset('img/product05.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">#tendanhmuc</p>
										<h3 class="product-name"><a href="#">#tenSP</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{ asset('img/product06.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">#tendanhmuc</p>
										<h3 class="product-name"><a href="#">#tenSP</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>
						</div>
					</div>

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- NEWSLETTER -->
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="newsletter">
							<p>Đăng ký để nhận những <strong>THÔNG BÁO MỚI NHẤT</strong> của chúng tôi!</p>
							<form>
								<input class="input" type="email" placeholder="Email">
								<button class="newsletter-btn"><i class="fa fa-envelope"></i> Đăng ký</button>
							</form>
							<ul class="newsletter-follow">
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-pinterest"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /NEWSLETTER -->

		<!-- FOOTER -->
		
@endsection
