	<!-- Header -->
	<?php
	if (isset($_GET["action"])) {
	?>
		<header class="header-v4">
		<?php
	} else { ?>
			<header>
			<?php }
			?>
			<!-- Header desktop -->
			<div class="container-menu-desktop fix-menu-desktop" style="box-shadow: 0 0px 3px 0px rgba(0,0,0,0.2); -moz-box-shadow: 0 0px 3px 0px rgba(0,0,0,0.2); -webkit-box-shadow: 0 0px 3px 0px rgba(0,0,0,0.2); -o-box-shadow: 0 0px 3px 0px rgba(0,0,0,0.2); -ms-box-shadow: 0 0px 3px 0px rgba(0,0,0,0.2);">
				<!-- Topbar -->
				<div class="top-bar">
					<div class="content-topbar flex-sb-m h-full container">
						<div class="left-top-bar">
							Free shipping for standard order over $100
						</div>
					</div>
				</div>

				<div class="wrap-menu-desktop">
					<nav class="limiter-menu-desktop container">

						<!-- Logo desktop -->
						<a href="/" class="logo">
							<img src="assets/images/icons/logo-01.svg" alt="IMG-LOGO">
						</a>

						<!-- Menu desktop -->
						<div class="menu-desktop">
							<ul class="main-menu">
								<li>
									<a href="?action=product" method="GET">Shop</a>
								</li>

								<li class="label1" data-label1="hot">
									<a href="?action=shoping-cart" method="GET">Features</a>
								</li>

								<li>
									<a href="?action=blog" method="GET">Blog</a>
								</li>

								<li>
									<a href="?action=about-us" method="GET">About Us</a>
								</li>

								<li>
									<a href="?action=contact" method="GET">Contact</a>
								</li>
							</ul>
						</div>

						<!-- Icon header -->
						<div class="wrap-icon-header flex-w flex-r-m">
							<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
								<i class="zmdi zmdi-search"></i>
							</div>

							<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="2">
								<i class="zmdi zmdi-shopping-cart"></i>
							</div>

							<a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="0" data-bs-toggle="modal" data-bs-target="#registerModal">
								<i class="zmdi zmdi-account"></i>
							</a>
						</div>
					</nav>
				</div>
			</div>

			<!-- Header Mobile -->
			<div class="wrap-header-mobile">
				<!-- Logo moblie -->
				<div class="logo-mobile">
					<a href="index.html"><img src="images/icons/logo-01.png" alt="IMG-LOGO"></a>
				</div>

				<!-- Icon header -->
				<div class="wrap-icon-header flex-w flex-r-m m-r-15">
					<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
						<i class="zmdi zmdi-search"></i>
					</div>

					<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="2">
						<i class="zmdi zmdi-shopping-cart"></i>
					</div>

					<a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
						<i class="zmdi zmdi-favorite-outline"></i>
					</a>
				</div>

				<!-- Button show menu -->
				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>


			<!-- Menu Mobile -->
			<div class="menu-mobile">
				<ul class="topbar-mobile">
					<li>
						<div class="left-top-bar">
							Free shipping for standard order over $100
						</div>
					</li>

					<li>
						<div class="right-top-bar flex-w h-full">
							<a href="#" class="flex-c-m p-lr-10 trans-04">
								Help & FAQs
							</a>

							<a href="#" class="flex-c-m p-lr-10 trans-04">
								My Account
							</a>

							<a href="#" class="flex-c-m p-lr-10 trans-04">
								EN
							</a>

							<a href="#" class="flex-c-m p-lr-10 trans-04">
								USD
							</a>
						</div>
					</li>
				</ul>

				<ul class="main-menu-m">

					<li>
						<a href="product.html">Shop</a>
					</li>

					<li>
						<a href="shoping-cart.html" class="label1 rs1" data-label1="hot">Features</a>
					</li>

					<li>
						<a href="blog.html">Blog</a>
					</li>

					<li>
						<a href="about.html">About</a>
					</li>

					<li>
						<a href="contact.html">Contact</a>
					</li>
				</ul>
			</div>


			<!-- Modal Search -->
			<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
				<div class="container-search-header">
					<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
						<img src="assets/images/icons/icon-close2.png" alt="CLOSE">
					</button>

					<form class="wrap-search-header flex-w p-l-15">
						<button class="flex-c-m trans-04">
							<i class="zmdi zmdi-search"></i>
						</button>
						<input class="plh3" type="text" name="search" placeholder="Search">
					</form>
				</div>
			</div>


			<!-- Cart -->
			<div class="wrap-header-cart js-panel-cart">
				<div class="s-full js-hide-cart"></div>

				<div class="header-cart flex-col-l p-l-65 p-r-25">
					<div class="header-cart-title flex-w flex-sb-m p-b-8">
						<span class="mtext-103 cl2">
							Your Cart
						</span>

						<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
							<i class="zmdi zmdi-close"></i>
						</div>
					</div>

					<div class="header-cart-content flex-w js-pscroll">
						<ul class="header-cart-wrapitem w-full">
							<li class="header-cart-item flex-w flex-t m-b-12">
								<div class="header-cart-item-img">
									<img src="assets/images/item-cart-01.jpg" alt="IMG">
								</div>

								<div class="header-cart-item-txt p-t-8">
									<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
										White Shirt Pleat
									</a>

									<span class="header-cart-item-info">
										1 x $19.00
									</span>
								</div>
							</li>

							<li class="header-cart-item flex-w flex-t m-b-12">
								<div class="header-cart-item-img">
									<img src="assets/images/item-cart-02.jpg" alt="IMG">
								</div>

								<div class="header-cart-item-txt p-t-8">
									<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
										Converse All Star
									</a>

									<span class="header-cart-item-info">
										1 x $39.00
									</span>
								</div>
							</li>

							<li class="header-cart-item flex-w flex-t m-b-12">
								<div class="header-cart-item-img">
									<img src="assets/images/item-cart-03.jpg" alt="IMG">
								</div>

								<div class="header-cart-item-txt p-t-8">
									<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
										Nixon Porter Leather
									</a>

									<span class="header-cart-item-info">
										1 x $17.00
									</span>
								</div>
							</li>
						</ul>

						<div class="w-full">
							<div class="header-cart-total w-full p-tb-40">
								Total: $75.00
							</div>

							<div class="header-cart-buttons flex-w w-full">
								<a href="?action=shoping-cart" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
									View Cart
								</a>

								<a href="?action=shoping-cart" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
									Check Out
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Modal -->
			<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true" style="align-items: center;">
				<div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
					<div class="modal-content">
						<div class="modal-header">
							<div class="modal-title">
								<ul class="nav nav-tabs" id="myTab" role="tablist">
									<li class="nav-item" role="presentation">
										<button class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Login</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link " id="register-tab" data-bs-toggle="tab" data-bs-target="#register-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Register</button>
									</li>
								</ul>
							</div>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade show active" id="login-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
								<form action="<?php echo getUrl("login.php") ?>" method="POST">
									<div class="modal-body">
										<div class="row">
											<div class="col-12">
												<div class="form-group">
													<label for="">Email</label>
													<input type="email" required tabindex="3" class="form-control" id="loginEmail" name="loginEmail">
												</div>

												<div class="form-group">
													<label for="">Password</label>
													<div class="input-group">
														<input type="password" class="form-control" id="loginPassword" name="loginPassword">
														<button type="button" data-input="loginPassword" data-button="toggleLoginPassword" class="input-group-text btn btn-outline-secondary" id="toggleLoginPassword">
															<i class="fa-solid fa-eye"></i>
														</button>
													</div>
												</div>
											</div>

										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
										<button type="submit" class="btn btn-primary">Login</button>
									</div>
								</form>
							</div>
							<div class="tab-pane fade" id="register-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
								<form action="<?php echo getUrl("register.php") ?>" method="post">
									<div class="modal-body">
										<div class="row">
											<div class="col-6">
												<div class="form-group">
													<label for="">First Name</label>
													<input type="text" required tabindex="1" class="form-control" id="first_name" name="first_name">
												</div>
												<div class="form-group">
													<label for="">Email</label>
													<input type="email" required tabindex="3" class="form-control" id="email" name="registerEmail">
												</div>
											</div>
											<div class="col-6">
												<div class="form-group">
													<label for="">Last Name</label>
													<input type="text" required tabindex="2" class="form-control" id="last_name" name="last_name">
												</div>
												<div class="form-group">
													<label for="">Password</label>
													<div class="input-group">
														<input type="password" class="form-control" id="registerPassword" name="registerPassword">
														<button type="button" data-input="registerPassword" data-button="toggleRegisterPassword" class="input-group-text btn btn-outline-secondary" id="toggleRegisterPassword">
															<i class="fa-solid fa-eye"></i>
														</button>
													</div>
												</div>
											</div>
											<div class="col-6">
												<div class="form-group">
													<label for="">Phone</label>
													<input type="text" required tabindex="1" class="form-control" id="phone" name="phone">
												</div>
											</div>

											<div class="form-group" style="position: relative; display:flex">
												<div style="align-items: center; display: flex">
													<input type="checkbox" required id="term_condition">
												</div>
												<div>
													<label for="term_condition" style="margin-bottom: 0rem; margin-left: 3px">
														I've read Term & Condition
													</label>
												</div>
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
										<button type="submit" class="btn btn-primary">Register</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			</header>
				<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

	<!-- Modal1 -->
	<div class="wrap-modal1 js-modal1 p-t-60 p-b-20">
		<div class="overlay-modal1 js-hide-modal1"></div>

		<div class="container">
			<div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
				<button class="how-pos3 hov3 trans-04 js-hide-modal1">
					<img src="assets/images/icons/icon-close.png" alt="CLOSE">
				</button>

				<div class="row">
					<div class="col-md-6 col-lg-7 p-b-30">
						<div class="p-l-25 p-r-30 p-lr-0-lg">
							<div class="wrap-slick3 flex-sb flex-w">
								<div class="wrap-slick3-dots"></div>
								<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

								<div class="slick3 gallery-lb">
									<div class="item-slick3" data-thumb="assets/images/product-detail-01.jpg">
										<div class="wrap-pic-w pos-relative">
											<img src="assets/images/product-detail-01.jpg" alt="IMG-PRODUCT">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="assets/images/product-detail-01.jpg">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>

									<div class="item-slick3" data-thumb="assets/images/product-detail-02.jpg">
										<div class="wrap-pic-w pos-relative">
											<img src="assets/images/product-detail-02.jpg" alt="IMG-PRODUCT">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="assets/images/product-detail-02.jpg">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>

									<div class="item-slick3" data-thumb="assets/images/product-detail-03.jpg">
										<div class="wrap-pic-w pos-relative">
											<img src="assets/images/product-detail-03.jpg" alt="IMG-PRODUCT">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="assets/images/product-detail-03.jpg">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-6 col-lg-5 p-b-30">
						<div class="p-r-50 p-t-5 p-lr-0-lg">
							<h4 class="mtext-105 cl2 js-name-detail p-b-14">
								Lightweight Jacket
							</h4>

							<span class="mtext-106 cl2">
								$58.79
							</span>

							<p class="stext-102 cl3 p-t-23">
								Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.
							</p>
							
							<!--  -->
							<div class="p-t-33">
								<div class="flex-w flex-r-m p-b-10">
									<div class="size-203 flex-c-m respon6">
										Size
									</div>

									<div class="size-204 respon6-next">
										<div class="rs1-select2 bor8 bg0">
											<select class="js-select2" name="time">
												<option>Choose an option</option>
												<option>Size S</option>
												<option>Size M</option>
												<option>Size L</option>
												<option>Size XL</option>
											</select>
											<div class="dropDownSelect2"></div>
										</div>
									</div>
								</div>

								<div class="flex-w flex-r-m p-b-10">
									<div class="size-203 flex-c-m respon6">
										Color
									</div>

									<div class="size-204 respon6-next">
										<div class="rs1-select2 bor8 bg0">
											<select class="js-select2" name="time">
												<option>Choose an option</option>
												<option>Red</option>
												<option>Blue</option>
												<option>White</option>
												<option>Grey</option>
											</select>
											<div class="dropDownSelect2"></div>
										</div>
									</div>
								</div>

								<div class="flex-w flex-r-m p-b-10">
									<div class="size-204 flex-w flex-m respon6-next">
										<div class="wrap-num-product flex-w m-r-20 m-tb-10">
											<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-minus"></i>
											</div>

											<input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1">

											<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-plus"></i>
											</div>
										</div>

										<button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
											Add to cart
										</button>
									</div>
								</div>	
							</div>

							<!--  -->
							<div class="flex-w flex-m p-l-100 p-t-40 respon7">
								<div class="flex-m bor9 p-r-10 m-r-11">
									<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100" data-tooltip="Add to Wishlist">
										<i class="zmdi zmdi-favorite"></i>
									</a>
								</div>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
									<i class="fa fa-facebook"></i>
								</a>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
									<i class="fa fa-twitter"></i>
								</a>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus">
									<i class="fa fa-google-plus"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
