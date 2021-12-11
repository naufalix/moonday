		
	<!-- Slider -->
	<section class="section-slide">
		<div class="container wrap-slick1">
			<div class="slick1">
				<div class="item-slick1" style="background-image: url(assets/images/slide1.jpg);">
				</div>

				<div class="item-slick1" style="background-image: url(assets/images/slide2.jpg);">
				</div>

				<div class="item-slick1" style="background-image: url(assets/images/slide3.jpg);">
				</div>
			</div>
		</div>
	</section>


	<!-- about us -->
	<div class="bg0 p-t-140">
		<div class="container">
			<div class="p-b-50">
				<h3 class="ltext-102 cl5 p-b-20 txt-center">
					Story of Moonday
				</h3>
				<p class="stext-102 txt-center">
					Moonday is a non-realistic coffee shop that is used for company profile website project.<br>
					This non-realistic coffee shop was made by the end of october by group 1 of class SI 3C.<br>
					Moonday insired by the beauty of the moon night, and also the madness of monday.<br>
					No one likes monday. But with moonday coffee, your mondays will be as bright as the moon in the night sky.<br>
					Moonday to lighten up your mondays! Wanna know <a href="index.php?page=about">more about us</a>?
				</p>
			</div>
		</div>
	</div>


	<!-- Product -->
	<section class="bg0 p-t-140 p-b-100">
		<div class="container">
			<div class="">
				<h3 class="ltext-102 cl5">
					Moonday's Menu
				</h3>
			</div>

			<div class="flex-w flex-sb-m p-b-32">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10">
					<p class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5">Freshly picked by moondays</p>
				</div>
			</div>

			<div class="row isotope-grid">
				<?php
					$topmenu = [20,19,11,14];
					foreach ($topmenu as $id_menu) {
						$row		= $menu->tampil_id($id_menu);
						$nama       = $row['nama'];
                        $deskripsi  = $row['deskripsi'];
                        $id_varian  = $row['id_varian'];
                        $foto       = $row['foto'];
                        if (empty($foto)) {$foto="default.png";}
                        $nv         = $varian->tampil_id($id_varian)["varian"]
				?>
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="assets/images/menu/<?= $foto ?>" alt="IMG-PRODUCT">
							<a href="#" onclick="detail(<?= $id_menu ?>)" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								View Detail
							</a>
							<p id="<?= $id_menu ?>" class="d-none"><?php echo $nama.'|'.$deskripsi.'|'.$nv.'|'.$foto ?></p>
						</div>
						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<p class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									<?= $nama ?>
								</p>
								<span class="stext-105 cl3"><?= $nv ?></span>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>

			<!-- Load more -->
			<div class="flex-c-m flex-w w-full p-t-25">
				<a href="index.php?page=menu" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
					More Menu
				</a>
			</div>
		</div>
	</section>

	<!-- quotes -->
	<div class="p-t-60 p-b-100">
		<p class="mtext-106 txt-center">
			"Coffee is a cup of hope in a world full of chaos and mondays"
		</p>
	</div>
	

	<!-- Promo and Store Location -->
	<div class="sec-banner bg0 p-t-50 p-b-140">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
					<!-- Block1 -->
					<div class="block1 wrap-pic-w">
						<img src="assets/images/promo.jpg" alt="IMG-BANNER">

						<a href="index.php?page=promo" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									Promo
								</span>

								<span class="block1-info stext-102 trans-04">
									Special for Promotion lovers!
								</span>
							</div>

							<div class="block1-txt-child2 p-b-4 trans-05">
								<div class="block1-link stext-101 cl0 trans-09">
									More Promo
								</div>
							</div>
						</a>
					</div>
				</div>

				<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
					<!-- Block1 -->
					<div class="block1 wrap-pic-w">
						<img src="assets/images/store.jpg" alt="IMG-BANNER">

						<a href="index.php?page=store" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									Store
								</span>

								<span class="block1-info stext-102 trans-04">
									Go check our location!
								</span>
							</div>

							<div class="block1-txt-child2 p-b-4 trans-05">
								<div class="block1-link stext-101 cl0 trans-09">
									More Store
								</div>
							</div>
						</a>
					</div>
				</div>

				<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
					<!-- Block1 -->
					<div class="block1 wrap-pic-w">
						<img src="assets/images/about.jpg" alt="IMG-BANNER">

						<a href="index.php?page=about" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									About Us
								</span>

								<span class="block1-info stext-102 trans-04">
									Aren't you curious about moonday?
								</span>
							</div>

							<div class="block1-txt-child2 p-b-4 trans-05">
								<div class="block1-link stext-101 cl0 trans-09">
									More About Us
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="wrap-modal1 js-modal1 p-t-60 p-b-20">
		<div class="overlay-modal1 js-hide-modal1"></div>
		<div class="container" style="width:900px">
			<div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
				<button class="how-pos3 hov3 trans-04 js-hide-modal1">
					<img src="assets/images/icons/icon-close.png" alt="CLOSE">
				</button>
				<div class="row">
					<div class="col-md-6 col-lg-5 p-b-30">
						<div class="p-l-25 p-r-30 p-lr-0-lg">
							<div class="wrap-slick3 flex-sb flex-w">
								<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>
								<div class="slick3 gallery-lb" style="width:300px">
									<div class="item-slick3">
										<div class="wrap-pic-w pos-relative">
											<img id="df" src="assets/images/menu/strawberry bubble tea.jpg" alt="IMG-PRODUCT" style="width:300px">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-6 p-b-30">
						<div class="p-r-20 p-t-5 p-lr-0-lg">
							<h4   id="dm" class="ltext-105 cl2 js-name-detail p-b-5">Strawberry Bubble Tea</h4>
							<span id="dv" class="mtext-104 cl2">Coffee</span>
							<p    id="dd" class="stext-102 cl3 p-t-23">Description</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		function detail(id){
            var data = (document.getElementById(id).textContent).split("|");
            document.getElementById("dm").textContent = data[0];
            document.getElementById("dv").textContent = data[2];
            document.getElementById("dd").textContent = data[1];
            document.getElementById("df").src = "assets/images/menu/"+data[3];
        }
	</script>