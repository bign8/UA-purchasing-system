<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><%= grunt.config.get('pkg.name') %></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- for Bootstrap -->
	<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet" />
	<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>

	<!-- for Angular -->
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.0-rc.3/angular.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.0-rc.3/angular-route.js"></script>

	<!-- for Angular ui -->
	<script src="//angular-ui.github.io/bootstrap/ui-bootstrap-0.6.0.js"></script>
	<script src="//angular-ui.github.io/bootstrap/ui-bootstrap-tpls-0.6.0.js"></script>

	<!-- for app -->
	<script src="<%= grunt.config.get('pkg.name') %>.js"></script>
	<script>
		Array.prototype.unique = function() { // thanks: http://stackoverflow.com/a/1584377
		    var a = this.concat();
		    for(var i=0; i<a.length; ++i)
		    	for(var j=i+1; j<a.length; ++j)
		    		if(a[i] === a[j])
		    			a.splice(j--, 1);
		    return a;
		};

		var phpCart = <?php session_start();echo json_encode($_SESSION['cart']); $_SESSION['cart']=array(/*empty php cart*/); ?>; // grab cart from php session
		var activeCart = JSON.parse(localStorage.getItem('azUAcart') || '[]'); // grab localStorage cart
		var newCart = phpCart.concat( activeCart ).unique(); // join the two
		localStorage.setItem('azUAcart', JSON.stringify(newCart)); // re-assign to localStorage

	</script>
</head>
<body>
	<div ng-app="myApp" class="container">
		<div class="header" ng-controller="HeadCtrl">
			<div class="pull-right"><a href="#/cart">Cart <span class="badge">{{myCart.len()}}</span></a></div>

			<div class="page-header">
				<h1>{{myPage.getTitle()}} <small>{{myPage.getSubTitle()}}</small></h1>
			</div>

			<div class="navbar" role="navigation">
				<div class="navbar-inner">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<a class="brand" href="#/">Upstream Academy Shop</a>

					<!-- Everything you want hidden at 940px or less, place within here -->
					<div class="nav-collapse collapse navbar-responsive-collapse">
						<!-- .nav, .navbar-search, .navbar-form, etc -->

						<ul class="nav">
							<li ng-class="{active: breadcrumbs.onPage('products')}"><a href="#/products">Products</a></li>
							<li ng-class="{active: breadcrumbs.onPage('cart')}"><a href="#/cart">Shopping Cart</a></li>
							<!-- <li ng-class="{active: breadcrumbs.onPage('purchases')}" ng-show="security.isAuthenticated()"><a href="#/purchases">Past Products</a></li> -->
						</ul>

						<ul class="nav pull-right">
							<li><a href="#/payment">Make A Payment</a></li>
							<li><login-toolbar class="visible-desktop"></login-toolbar></li>
						</ul>

					</div>
				</div>
			</div>

			<ul class="breadcrumb">
				<li><a  href="#/">home</a></li>
				<li ng-repeat="breadcrumb in breadcrumbs.getAll()">
					<span class="divider">/</span>  
					<ng-switch on="$last">
						<span ng-switch-when="true">{{breadcrumb.name}}</span>
						<span ng-switch-default><a href="{{breadcrumb.path}}">{{breadcrumb.name}}</a></span>
					</ng-switch>
				</li>
			</ul>
		</div>
		<ng-view>Loading Application...</ng-view>
		<!-- <div class="footer">
			<p>Copyright NOW</p>
		</div> -->
	</div>
</body>
</html>