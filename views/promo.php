
	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92 m-t-80" style="background-image: url('assets/images/bg1.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
			Promotions
		</h2>
	</section>	
	
	
	

			<div class="row isotope-grid">
				<?php
                   foreach($data_promo as $row) {
					$id_promo = $row['id_promo'];
					$nama     = $row['nama'];
					$id_menu  = $row['id_menu'];
					$start    = $row['start'];
					$end      = $row['end'];
					$foto     = $row['foto'];
					if (empty($foto)) {$foto="default.png";}
					$nm       = $menu->tampil_id($id_menu)["nama"]
                ?>
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item <?= $nv ?>">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="assets/images/promo/<?= $foto ?>" alt="Img-<?= $nama ?>">
							<a href="#" onclick="detail(<?= $id_promo ?>)" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								View Detail
							</a>
							<p id="<?= $id_promo ?>" class="d-none"><?php echo $nama.'|'.$nm.'|'.$start.'|'.$end.'|'.$foto ?></p>
						</div>
						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<p class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									<?= $nama ?>
								</p>
								<span class="stext-105 cl3"><?= date_format(date_create($start),"d F Y") ?></span>-<span class="stext-105 cl3"><?= date_format(date_create($end),"d F Y") ?></span>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
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
											<img id="df" src="assets/images/promo" alt="IMG-PRODUCT" style="width:300px">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-6 p-b-30">
						<div class="p-r-20 p-t-5 p-lr-0-lg">
							<h4   id="dm" class="ltext-105 cl2 js-name-detail p-b-5">Nama</h4>
							<span id="dv" class="mtext-104 cl2">Americano</span>
							<p    id="aa" class="stext-102 cl3 p-t-23">Awal</p>
							<p    id="ak" class="stext-102 cl3 p-t-23">Akhir</p>
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
            document.getElementById("dv").textContent = data[1];
            document.getElementById("aa").textContent = data[2];
			document.getElementById("ak").textContent = data[3];
            document.getElementById("df").src = "assets/images/promo/"+data[4];
        }
	</script>
