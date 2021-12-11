<!-- Header desktop -->
<div class="container-menu-desktop" style="height:70px">
	<div class="wrap-menu-desktop" style="background-color:white">
		<nav class="limiter-menu-desktop container" style="background-color:white">
			
			<!-- Logo desktop -->		
			<a href="home" class="logo">
				<img src="assets/images/icons/logo.png" alt="IMG-LOGO">
			</a>

			<!-- Menu desktop -->
			<div class="menu-desktop" style="margin-left:500px">
				<ul class="main-menu">
					<li class="<?php if($page=='home'){echo 'active-menu';} ?>">
						<a href="home">Home</a>
					</li>
					<li class="<?php if($page=='menu'){echo 'active-menu';} ?>">
						<a href="menu">Menu</a>
					</li>
					<li class="<?php if($page=='promo'){echo 'active-menu';} ?>">
						<a href="promo">Promo</a>
					</li>
					<li class="<?php if($page=='store'){echo 'active-menu';} ?>">
						<a href="store">Store Location</a>
					</li>
					<li class="<?php if($page=='about'){echo 'active-menu';} ?>">
						<a href="about">About</a>
					</li>
				</ul>
			</div>

		</nav>
	</div>	
</div>

<!-- Header Mobile -->
<div class="wrap-header-mobile">
	<!-- Logo moblie -->		
	<div class="logo-mobile">
		<a href="home"><img src="assets/images/icons/logo.png" alt="IMG-LOGO"></a>
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
	<ul class="main-menu-m">
		<li>
			<a href="home">Home</a>
		</li>
		<li>
			<a href="menu">Menu</a>
		</li>
		<li>
			<a href="promo">Promo</a>
		</li>
		<li>
			<a href="store">Store Location</a>
		</li>
		<li>
			<a href="about">About</a>
		</li>
	</ul>
</div>