<!doctype html>
<html lang="en">
<head>

<meta charset="UTF-8">
<title>Motor</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic,300italic,300&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/zabuto_calendar.css">
<link rel="stylesheet" href="css/flexslider.css">
<link rel="stylesheet" href="css/jquery.fancybox.css">
<link rel="stylesheet" href="css/ion.rangeSlider.css">
<link rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/media.css">


<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<![endif]-->

</head>
<body>



<!-- Header - start -->
<div class="header">

	<!-- Navmenu Mobile Toggle Button -->
	<a href="#" class="header-menutoggle" id="header-menutoggle">Menu</a>

	<div class="header-info">

		<!-- Personal Menu -->
		<div class="header-personal">
			<a href="#" class="header-gopersonal"></a>
			<ul>
				<li>
					<a href="message.html">Messages <span>12</span></a>
				</li>
				<li>
					<a href="#">Bookmarks <span>6</span></a>
				</li>
				<li>
					<a href="cart.html">Shopping Cart <span>5</span></a>
				</li>
				<li class="header-order">
					<a href="orders.html">Order Status</a>
				</li>
				<li>
					<a href="#">Settings</a>
				</li>
				<li>
					<a href="#">Log out</a>
				</li>
			</ul>
		</div>

		<!-- Small Cart -->
		<a href="cart.html" class="header-cart">
			<div class="header-cart-inner">
				<p class="header-cart-count">
					<img src="img/cart.png" alt="">
					<span>3</span>
				</p>
				<p class="header-cart-summ">$300</p>
			</div>
		</a>

		<a href="#" class="header-compare"></a>
		<a href="#" class="header-favorites"></a>

		<!-- Search Form -->
		<a href="#" class="header-searchbtn" id="header-searchbtn"></a>
		<form action="#" class="header-search" id="header-search">
			<input type="text" placeholder="Search parts or vehicles">
			<button type="submit"><i class="fa fa-search"></i></button>
		</form>

	</div>

	<!-- Logotype -->
	<p class="header-logo">
		<a href="index.html"><img src="img/logo.png" alt=""></a>
	</p>

	<!-- Navmenu - start -->
	<nav id="top-menu">
		<ul>
			<li>
				<a href="../index.html">Home</a>
			</li>
	</nav>
	<!-- Navmenu - end -->

</div>
<!-- Header - end -->

<!-- Main Content - start -->
<main>

<!-- Breadcrumbs -->
<div class="b-crumbs-wrap">
	<div class="cont b-crumbs">
		<ul>
			<li>
				<a href="index.html">Vespa</a>
			</li>
			<li>
				<a href="catalog.html">Catalog</a>
			</li>
			<li>
				<span>Main Parts</span>
			</li>
		</ul>
		<div class="b-crumbs-menu">
			<a id="b-crumbs-menu" href="#"></a>
			<ul class="b-crumbs-menulist">
				<li><a href="catalog.html">Catalog: List Mode</a></li>
				<li><a href="catalog-gallery.html">Catalog: Gallery Mode</a></li>
			</ul>
		</div>
	</div>
</div>

<div class="cont maincont">

<h1><span>Main parts</span></h1>
<p class="section-count">4535 ITEMS</p>
<span class="maincont-line1 maincont-line12"></span>
<span class="maincont-line2 maincont-line22"></span>

<!-- Catalog Sections -->
<ul class="cont-sections">
	<li class="active">
		<a href="#">All</a>
	</li>
	<li>
		<a href="#">Suspensions</a>
	</li>
	<li>
		<a href="#">Breaks</a>
	</li>
	<li>
		<a href="#">Light</a>
	</li>
	<li>
		<a href="#">Wheels</a>
	</li>
	<li>
		<a href="#">Utility</a>
	</li>
</ul>

<!-- Catalog Filter - start -->
<div class="section-top">
	<a href="#" class="section-menu-btn" id="section-menu-btn">Catalog</a>
	<div class="section-view">
		<p>View</p>
		<div class="dropdown-wrap">
			<p class="dropdown-title section-view-ttl">List</p>
			<ul class="dropdown-list">
				<li class="active">
					<a href="catalog.html">List</a>
				</li>
				<li>
					<a href="catalog-gallery.html">Gallery</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="section-sort">
		<p>Sort</p>
		<div class="dropdown-wrap">
			<p class="dropdown-title section-sort-ttl">Price: highest first</p>
			<ul class="dropdown-list">
				<li class="active">
					<a href="#">Price: highest first</a>
				</li>
				<li>
					<a href="#">Price: lowest first</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="section-prices">
		<div class="dropdown-wrap dropdown-wrap-range">
			<p id="range_cost_ttl" class="dropdown-title section-prices-ttl">$100 - $10000</p>
			<ul class="dropdown-list">
				<li>
					<input type="text" id="range_cost" value="">
				</li>
			</ul>
		</div>
	</div>
	<div class="section-shipping">
		<input checked="checked" type="checkbox" id="section-shipping">
		<label for="section-shipping">Free Shipping</label>
	</div>
	<div class="section-menu-wrap" id="section-menu-wrap">
		<div class="section-menu">
			<p class="section-menu-ttl">Main Parts</p>
			<ul class="section-menu-list">
				<li><a href="#">Engines</a></li>
				<li><a href="#">Brakes & Clutch</a></li>
				<li><a href="#">Handlebars & Grips</a></li>
				<li><a href="#">Chains & Sprockets</a></li>
				<li><a href="#">Electrical</a></li>
				<li><a href="#">Filters</a></li>
				<li><a href="#">Levers</a></li>
				<li><a href="#">Tires</a></li>
			</ul>
		</div>
		<div class="section-menu">
			<p class="section-menu-ttl">Clothing</p>
			<ul class="section-menu-list">
				<li><a href="#">Gloves</a></li>
				<li><a href="#">Goggles</a></li>
				<li><a href="#">Helmets</a></li>
				<li><a href="#">Jackets</a></li>
				<li><a href="#">Pants</a></li>
				<li><a href="#">Casual Wear</a></li>
				<li><a href="#">Protective Gear</a></li>
			</ul>
		</div>
		<div class="section-menu">
			<p class="section-menu-ttl">Brands</p>
			<ul class="section-menu-list">
				<li><a href="#">EdgeDesign</a></li>
				<li><a href="#">Storm</a></li>
				<li><a href="#">BestWorks</a></li>
				<li><a href="#">HarleyStore</a></li>
				<li><a href="#">GoodTires</a></li>
				<li><a href="#">EngineMasters</a></li>
				<li><a href="#">EnMonsters</a></li>
			</ul>
		</div>
		<div class="section-menu">
			<p class="section-menu-ttl">Accessories</p>
			<ul class="section-menu-list">
				<li><a href="#">Battery Chargers</a></li>
				<li><a href="#">Electrical</a></li>
				<li><a href="#">Tools</a></li>
				<li><a href="#">Tie Downs</a></li>
			</ul>
		</div>
		<div class="section-menu">
			<p class="section-menu-ttl">Maintenance</p>
			<ul class="section-menu-list">
				<li><a href="#">Repair Instruments</a></li>
				<li><a href="#">Brakes & Clutch Parts</a></li>
				<li><a href="#">Cleaners & Chemicals</a></li>
				<li><a href="#">Spark Plugs</a></li>
			</ul>
		</div>
	</div>
</div>
<!-- Catalog Filter - end -->

<!-- Catalog Items - start -->
<div class="section-list">
	<div class="sectls">
		<a href="product.html" class="sectls-img">
			<img src="img/a.jpg" alt="">
		</a>
		<div class="sectls-cont">
			<div class="sectls-ttl-wrap">
				<p><a href="#">Wheels</a></p>
				<h3><a href="product.html">Velg Racing GScooter Ring 12 Depan For Vespa Sprint/Primavera/GT/Lx/S</a></h3>
			</div>
			<div class="sectls-price-wrap">
				<p>Price</p>
				<p class="sectls-price">Rp 1.300.000</p>
			</div>
			<div class="sectls-qnt-wrap">
				<p>Quantity</p>
				<p class="qnt-wrap sectls-qnt">
					<a href="#" class="qnt-minus sectls-minus">-</a>
					<input type="text" value="1">
					<a href="#" class="qnt-plus sectls-plus">+</a>
				</p>
			</div>
		</div>
		<div class="sectls-info">
			<div class="sectls-rating-wrap">
				<p class="sectls-rating">
					<i class="fa fa-star-o" title="5"></i><i class="fa fa-star-o" title="4"></i><i class="fa fa-star-o" title="3"></i><i class="fa fa-star-o" title="2"></i><i class="fa fa-star-o" title="1"></i>
				</p>
				<p><span class="sectls-rating-count">89</span> reviews</p>
			</div>
			<p class="sectls-id">id 5376445</p>
			<p class="sectls-add">
				<a href="#">Add to cart</a>
			</p>
			<p class="sectls-favorites">
				<a href="#"></a>
			</p>
			<p class="sectls-compare">
				<a href="#"></a>
			</p>
		</div>
	</div>
	<div class="sectls">
		<a href="product.html" class="sectls-img">
			<img src="img/b.jpg" alt="">
		</a>
		<div class="sectls-cont">
			<div class="sectls-ttl-wrap">
				<p><a href="#">Suspensions</a></p>
				<h3><a href="product.html">Shockbreaker Depan Yss Mono X-Pro For Vespa Lx/S</a></h3>
			</div>
			<div class="sectls-price-wrap">
				<p>Price</p>
				<p class="sectls-price">Rp 2.000.000</p>
			</div>
			<div class="sectls-qnt-wrap">
				<p>Quantity</p>
				<p class="qnt-wrap sectls-qnt">
					<a href="#" class="qnt-minus sectls-minus">-</a>
					<input type="text" value="1">
					<a href="#" class="qnt-plus sectls-plus">+</a>
				</p>
			</div>
		</div>
		<div class="sectls-info">
			<div class="sectls-rating-wrap">
				<p class="sectls-rating">
					<i class="fa fa-star-o" title="5"></i><i class="fa fa-star-o" title="4"></i><i class="fa fa-star-o" title="3"></i><i class="fa fa-star-o" title="2"></i><i class="fa fa-star-o" title="1"></i>
				</p>
				<p><span class="sectls-rating-count">9</span> reviews</p>
			</div>
			<p class="sectls-id">id 2346745</p>
			<p class="sectls-add">
				<span>Not available</span>
			</p>
			<p class="sectls-favorites">
				<a href="#"></a>
			</p>
			<p class="sectls-compare">
				<a href="#"></a>
			</p>
		</div>
	</div>
	<div class="sectls">
		<a href="product.html" class="sectls-img">
			<img src="img/c.jpg" alt="">
		</a>
		<div class="sectls-cont">
			<div class="sectls-ttl-wrap">
				<p><a href="#">Exhaust</a></p>
				<h3><a href="product.html">Racing Exhaust Tecnigas Gp4 For Vespa Sprint/Primavera/Lx/S/Lxv</a></h3>
			</div>
			<div class="sectls-price-wrap">
				<p>Price</p>
				<p class="sectls-price">Rp 3.000.000</p>
			</div>
			<div class="sectls-qnt-wrap">
				<p>Quantity</p>
				<p class="qnt-wrap sectls-qnt">
					<a href="#" class="qnt-minus sectls-minus">-</a>
					<input type="text" value="1">
					<a href="#" class="qnt-plus sectls-plus">+</a>
				</p>
			</div>
		</div>
		<div class="sectls-info">
			<div class="sectls-rating-wrap">
				<p class="sectls-rating">
					<i class="fa fa-star-o" title="5"></i><i class="fa fa-star-o" title="4"></i><i class="fa fa-star-o" title="3"></i><i class="fa fa-star-o" title="2"></i><i class="fa fa-star-o" title="1"></i>
				</p>
				<p><span class="sectls-rating-count">377</span> reviews</p>
			</div>
			<p class="sectls-id">id 4574567</p>
			<p class="sectls-add">
				<a href="#">Add to cart</a>
			</p>
			<p class="sectls-favorites">
				<a href="#"></a>
			</p>
			<p class="sectls-compare">
				<a href="#"></a>
			</p>
		</div>
	</div>
	<div class="sectls">
		<a href="product.html" class="sectls-img">
			<img src="img/d.jpg" alt="">
		</a>
		<div class="sectls-cont">
			<div class="sectls-ttl-wrap">
				<p><a href="#">Tires</a></p>
				<h3><a href="product.html">Ban Pirelli SL60 120/80-12 & 130/80-12 For Vespa Sprint/Primavera/GTS</a></h3>
			</div>
			<div class="sectls-price-wrap">
				<p>Price</p>
				<p class="sectls-price">Rp 1.250.000</p>
			</div>
			<div class="sectls-qnt-wrap">
				<p>Quantity</p>
				<p class="qnt-wrap sectls-qnt">
					<a href="#" class="qnt-minus sectls-minus">-</a>
					<input type="text" value="1">
					<a href="#" class="qnt-plus sectls-plus">+</a>
				</p>
			</div>
		</div>
		<div class="sectls-info">
			<div class="sectls-rating-wrap">
				<p class="sectls-rating">
					<i class="fa fa-star-o" title="5"></i><i class="fa fa-star-o" title="4"></i><i class="fa fa-star-o" title="3"></i><i class="fa fa-star-o" title="2"></i><i class="fa fa-star-o" title="1"></i>
				</p>
				<p><span class="sectls-rating-count">75</span> reviews</p>
			</div>
			<p class="sectls-id">id 5398235</p>
			<p class="sectls-add">
				<a href="#">Add to cart</a>
			</p>
			<p class="sectls-favorites">
				<a href="#"></a>
			</p>
			<p class="sectls-compare">
				<a href="#"></a>
			</p>
		</div>
	</div>
	<div class="sectls">
		<a href="product.html" class="sectls-img">
			<img src="img/e.jpg" alt="">
		</a>
		<div class="sectls-cont">
			<div class="sectls-ttl-wrap">
				<p><a href="#">Lights</a></p>
				<h3><a href="product.html">SIP LED List Headlamp Black Vespa Sprint 3v/Iget/Abs</a></h3>
			</div>
			<div class="sectls-price-wrap">
				<p>Price</p>
				<p class="sectls-price">Rp 1.500.000</p>
			</div>
			<div class="sectls-qnt-wrap">
				<p>Quantity</p>
				<p class="qnt-wrap sectls-qnt">
					<a href="#" class="qnt-minus sectls-minus">-</a>
					<input type="text" value="1">
					<a href="#" class="qnt-plus sectls-plus">+</a>
				</p>
			</div>
		</div>
		<div class="sectls-info">
			<div class="sectls-rating-wrap">
				<p class="sectls-rating">
					<i class="fa fa-star-o" title="5"></i><i class="fa fa-star-o" title="4"></i><i class="fa fa-star-o" title="3"></i><i class="fa fa-star-o" title="2"></i><i class="fa fa-star-o" title="1"></i>
				</p>
				<p><span class="sectls-rating-count">23</span> reviews</p>
			</div>
			<p class="sectls-id">id 3498235</p>
			<p class="sectls-add">
				<a href="#">Add to cart</a>
			</p>
			<p class="sectls-favorites">
				<a href="#"></a>
			</p>
			<p class="sectls-compare">
				<a href="#"></a>
			</p>
		</div>
	</div>
	<div class="sectls">
		<a href="product.html" class="sectls-img">
			<img src="img/f.jpg" alt="">
		</a>
		<div class="sectls-cont">
			<div class="sectls-ttl-wrap">
				<p><a href="#">Battery</a></p>
				<h3><a href="product.html">Aki Motor Maxshield MTX7 For Vespa Sprint/Primavera/Lx/S/Lxv/GTS</a></h3>
			</div>
			<div class="sectls-price-wrap">
				<p>Price</p>
				<p class="sectls-price">Rp 350.000</p>
			</div>
			<div class="sectls-qnt-wrap">
				<p>Quantity</p>
				<p class="qnt-wrap sectls-qnt">
					<a href="#" class="qnt-minus sectls-minus">-</a>
					<input type="text" value="1">
					<a href="#" class="qnt-plus sectls-plus">+</a>
				</p>
			</div>
		</div>
		<div class="sectls-info">
			<div class="sectls-rating-wrap">
				<p class="sectls-rating">
					<i class="fa fa-star-o" title="5"></i><i class="fa fa-star-o" title="4"></i><i class="fa fa-star-o" title="3"></i><i class="fa fa-star-o" title="2"></i><i class="fa fa-star-o" title="1"></i>
				</p>
				<p><span class="sectls-rating-count">89</span> reviews</p>
			</div>
			<p class="sectls-id">id 5376445</p>
			<p class="sectls-add">
				<a href="#">Add to cart</a>
			</p>
			<p class="sectls-favorites">
				<a href="#"></a>
			</p>
			<p class="sectls-compare">
				<a href="#"></a>
			</p>
		</div>
	</div>
	<div class="sectls">
		<a href="product.html" class="sectls-img">
			<img src="img/h.jpg" alt="">
		</a>
		<div class="sectls-cont">
			<div class="sectls-ttl-wrap">
				<p><a href="#">Breaks</a></p>
				<h3><a href="product.html">Discbreake Polini Abs 5 Hole For Vespa Sprint/Primavera/Lx/S/Lxv</a></h3>
			</div>
			<div class="sectls-price-wrap">
				<p>Price</p>
				<p class="sectls-price">Rp 2.100.000</p>
			</div>
			<div class="sectls-qnt-wrap">
				<p>Quantity</p>
				<p class="qnt-wrap sectls-qnt">
					<a href="#" class="qnt-minus sectls-minus">-</a>
					<input type="text" value="1">
					<a href="#" class="qnt-plus sectls-plus">+</a>
				</p>
			</div>
		</div>
		<div class="sectls-info">
			<div class="sectls-rating-wrap">
				<p class="sectls-rating">
					<i class="fa fa-star-o" title="5"></i><i class="fa fa-star-o" title="4"></i><i class="fa fa-star-o" title="3"></i><i class="fa fa-star-o" title="2"></i><i class="fa fa-star-o" title="1"></i>
				</p>
				<p><span class="sectls-rating-count">9</span> reviews</p>
			</div>
			<p class="sectls-id">id 2346745</p>
			<p class="sectls-add">
				<a href="#">Add to cart</a>
			</p>
			<p class="sectls-favorites">
				<a href="#"></a>
			</p>
			<p class="sectls-compare">
				<a href="#"></a>
			</p>
		</div>
	</div>
	<div class="sectls">
		<a href="product.html" class="sectls-img">
			<img src="img/g.jpg" alt="">
		</a>
		<div class="sectls-cont">
			<div class="sectls-ttl-wrap">
				<p><a href="#">Filter</a></p>
				<h3><a href="product.html">Filter Oli Polini For Vespa Sprint/Prima/Lx/S/Lxv</a></h3>
			</div>
			<div class="sectls-price-wrap">
				<p>Price</p>
				<p class="sectls-price">Rp 270.000</p>
			</div>
			<div class="sectls-qnt-wrap">
				<p>Quantity</p>
				<p class="qnt-wrap sectls-qnt">
					<a href="#" class="qnt-minus sectls-minus">-</a>
					<input type="text" value="1">
					<a href="#" class="qnt-plus sectls-plus">+</a>
				</p>
			</div>
		</div>
		<div class="sectls-info">
			<div class="sectls-rating-wrap">
				<p class="sectls-rating">
					<i class="fa fa-star-o" title="5"></i><i class="fa fa-star-o" title="4"></i><i class="fa fa-star-o" title="3"></i><i class="fa fa-star-o" title="2"></i><i class="fa fa-star-o" title="1"></i>
				</p>
				<p><span class="sectls-rating-count">377</span> reviews</p>
			</div>
			<p class="sectls-id">id 4574567</p>
			<p class="sectls-add">
				<a href="#">Add to cart</a>
			</p>
			<p class="sectls-favorites">
				<a href="#"></a>
			</p>
			<p class="sectls-compare">
				<a href="#"></a>
			</p>
		</div>
	</div>
</div>
<!-- Catalog Items - end -->

<!-- Pagination -->
<ul class="pager">
	<li>
		<a href="#">1</a>
	</li>
	<li class="dots">
		<a href="#">...</a>
	</li>
	<li>
		<a href="#">1</a>
	</li>
	<li class="active">
		<a href="#">2</a>
	</li>
	<li>
		<a href="#">3</a>
	</li>
	<li>
		<a href="#">4</a>
	</li>
	<li>
		<a href="#">5</a>
	</li>
	<li class="dots">
		<a href="#">...</a>
	</li>
	<li>
		<a href="#">12</a>
	</li>
</ul>

</div>

<!-- Get a Special Deals -->
<div class="getspec-wrap">
	<div class="cont getspec">
		<div class="getspec-cont">
			<h3>Best Seller</h3>
			<p>New Vespuci parts</p>
			<form action="#">
				<input type="text" placeholder="Email address">
				<input type="submit" value="Get a special deals">
			</form>
		</div>
		<a href="#" class="getspec-img">
			<img src="img/i.jpg" alt="">
		</a>
	</div>
</div>

</main>
<!-- Main Content - end -->


<!-- Footer - start -->
<footer class="footer">
	<div class="cont footer-top">

		<!-- Footer Menu -->
		<div class="footer-menu">
			<p>Company</p>
			<ul>
				<li><a href="#">Shipping</a></li>
				<li><a href="#">Careers</a></li>
				<li><a href="#">About us</a></li>
			</ul>
		</div>
		<div class="footer-menu">
			<p>Information</p>
			<ul>
				<li><a href="#">Affiliate Program</a></li>
				<li><a href="#">Privacy Policy</a></li>
				<li><a href="#">Site Map</a></li>
				<li><a href="#">Search Terms</a></li>
			</ul>
		</div>
		<div class="footer-menu">
			<p>Account & Orders</p>
			<ul>
				<li><a href="#">My Account</a></li>
				<li><a href="#">My Garage</a></li>
				<li><a href="#">Shopping Cart</a></li>
				<li><a href="#">Order Status</a></li>
			</ul>
		</div>

		<div class="footer-info">
			<p class="footer-msg">Our online support is available <a class="callback" href="form.html">Send us a message</a></p>
			<ul class="footer-social">
				<li>
					<a rel="nofollow" target="" href="#">
						<i class="fa fa-facebook"></i>
					</a>
				</li>
				<li>
					<a rel="nofollow" target="" href="#">
						<i class="fa fa-youtube-play"></i>
					</a>
				</li>
				<li>
					<a rel="nofollow" target="" href="#">
						<i class="fa fa-twitter"></i>
					</a>
				</li>
			</ul>
			<form action="#" class="form-validate">
				<input data-required="text" data-required-email="email" type="text" placeholder="Email address" name="email1">
				<input type="submit" value="Subscribe">
			</form>
		</div>

	</div>
	<div class="copyright">
		<p class="cont">© 2021 Vespuci All Right Reserved</p>
	</div>
</footer>
<!-- Footer - end -->

</div>

<script src="js/jquery-1.12.3.min.js"></script>
<script src="js/fancybox/fancybox.js"></script>
<script src="js/fancybox/helpers/jquery.fancybox-thumbs.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
<script src="js/masonry.pkgd.min.js"></script>

<script src="js/ion.rangeSlider.min.js"></script>

<script src="js/main.js"></script>

</body>
</html>