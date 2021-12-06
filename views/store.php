
	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92 m-t-80" style="background-image: url('assets/images/bg2.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
			Stores Location
		</h2>
	</section>	
	
	<!-- Product -->
	<div class="bg0 m-t-30 p-b-140">
		<div class="container">
			<div class="flex-w flex-sb-m p-b-42">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10">
					<button class="mtext-101 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
						All Stores
					</button>
					<?php foreach($kota->tampil() as $row) { $kot = $row['kota']; ?>
					<button class="mtext-101 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".<?= $kot  ?>">
						<?= $kot  ?>
					</button>
					<?php } ?>
				</div>
			</div>

			<div class="row isotope-grid">
				<?php
                    foreach($data_store as $row) {
                        $id_store   = $row['id_store'];
                        $nama       = $row['nama'];
                        $alamat     = $row['alamat'];
                        $id_kota    = $row['id_kota'];
                        $lokasi     = $row['lokasi'];
                        $nk         = $kota->tampil_id($id_kota)["kota"]
                ?>

				<div class="col-sm-6 col-md-4 col-lg-5 p-b-20 m-b-50 m-l-80 isotope-item" style="border: 2px solid peru">
					<!-- Block2 -->
					<div class="block2">

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<span class="mtext-112 p-b-6">
									Moonday Jatiwaringin
								</span>

								<span class="stext-105 cl3">
									Jl. Raya Jatiwaringin No. 20, Cipinang Melayu Kecamatan Makassar, Jakarta
								</span>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-5 p-b-20 m-b-50 m-l-80 isotope-item" style="border: 2px solid peru">
					<!-- Block2 -->
					<div class="block2">

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<span class="mtext-112 p-b-6">
									Moonday Town Square Malang
								</span>

								<span class="stext-105 cl3">
									Town Square Malang lt. 2 Jl. Veteran, Penanggungan, Kota Malang
								</span>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-5 p-b-20 m-b-50 m-l-80 isotope-item" style="border: 2px solid peru">
					<!-- Block2 -->
					<div class="block2">

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<span class="mtext-112 p-b-6">
									Moonday Lowokwaru
								</span>

								<span class="stext-105 cl3">
									Jl. Bunga Camalia No. 1, Lowokwaru, Kota Malang
								</span>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-5 p-b-20 m-b-50 m-l-80 isotope-item" style="border: 2px solid peru">
					<!-- Block2 -->
					<div class="block2">

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<span class="mtext-112 p-b-6">
									Moonday PVJ Bandung
								</span>

								<span class="stext-105 cl3">
									Paris Van Java lt. 3 Jl. Sukajadi Cipedes, Bandung
								</span>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-5 p-b-20 m-b-50 m-l-80 isotope-item" style="border: 2px solid peru">
					<!-- Block2 -->
					<div class="block2">

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<span class="mtext-112 p-b-6">
									Moonday TSM Bandung
								</span>

								<span class="stext-105 cl3">
									Trans Studio Bandung lt. 2 Jl. Gatot Subroto, Cibangkong, Batununggal, Bandung
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>	
