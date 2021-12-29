<template>
	<!-- Header Section Begin -->
	<header class="header-section">
		<div class="container">
			<div class="inner-header">
				<div class="row">
					<!-- Logo -->
					<div class="col-lg-2 col-md-2">
						<div class="logo">
							<router-link to="/">
								<img src="img/logo_kopma.png" alt="" />
							</router-link>
						</div>
					</div>
					<!-- Kategori & Search -->
					<div class="col-lg-7 col-md-7">
						<div class="advanced-search">
							<div class="category-menu">
								<button type="button" class="category-btn">Kategori</button>
								<div class="dropdown-category">
									<div class="container mt-4 mb-5">
										<h4>Kategori</h4>
										<div class="row mt-4">
											<div class="col-lg-3 col-md-6 col-sm-12 p-3">
												<h5 class="mb-3">Makanan dan Minuman</h5>
												<a href="">Kopi</a><a href="">Mie Instan</a><a href="">Minyak Goreng</a><a href="">Roti</a><a href="">Susu</a><a href="">Yogurt</a>
											</div>
											<div class="col-lg-3 col-md-6 col-sm-12 p-3">
												<h5 class="mb-3">Produk Kecantikan</h5>
												<a href="">Kosmetik</a><a href="">Perawatan Badan</a><a href="">Perawatan Rambut</a><a href="">Perawatan Wajah</a>
											</div>
											<div class="col-lg-3 col-md-6 col-sm-12 p-3">
												<h5 class="mb-3">Kebutuhan Rumah</h5>
												<a href="">Deterjen</a><a href="">Obat Nyamuk</a><a href="">Tisu</a><a href="">Pembersih Lantai</a><a href="">Pewangi Ruangan</a><a href="">Sabun Cuci Piring</a>
											</div>
											<div class="col-lg-3 col-md-6 col-sm-12 p-3">
												<h5 class="mb-3">Kesehatan</h5>
												<a href="">Antiseptik dan Sanitas</a><a href="">Masker</a><a href="">Vitamin</a><a href="">Obat Luar</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="input-group">
								<input type="text" placeholder="Beli apa hari ini?" />
								<button type="button" id="searchBtn" aria-label="Cari" title="Cari Produk">
									<i class="ti-search"></i>
								</button>
							</div>
						</div>
					</div>
					<!-- Cart & account -->
					<div class="col-lg-3 text-right col-md-3">
						<ul v-if="user" class="nav-right">
							<li class="cart-icon">
								<a href="#">
									<i class="icon_bag_alt"></i>
									<span>2</span>
								</a>
								<div class="cart-hover">
									<div class="select-items">
										<table>
											<tbody>
												<tr>
													<td class="si-pic">
														<img src="img/select-product-1.jpg" alt="" />
													</td>
													<td class="si-text">
														<div class="product-selected">
															<p><b>Rp 16.000</b> x 1</p>
															<h6>Ultra Milk Full Cream 1L</h6>
														</div>
													</td>
													<td class="si-close">
														<i class="ti-close"></i>
													</td>
												</tr>
												<tr>
													<td class="si-pic">
														<img src="img/select-product-2.jpg" alt="" />
													</td>
													<td class="si-text">
														<div class="product-selected">
															<p><b>Rp 2.300</b> x 3</p>
															<h6>Indomie Goreng</h6>
														</div>
													</td>
													<td class="si-close">
														<i class="ti-close"></i>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="select-total">
										<span>total:</span>
										<h5><b>Rp 22.900</b></h5>
									</div>
									<div class="select-button">
										<a href="shopping-cart.html" class="primary-btn checkout-btn">CHECK OUT</a>
									</div>
								</div>
							</li>
							<li class="profile-nav">
								<div class="profile">
									<img src="img/profile.png" alt="Gambar Profile" class="profile-pic" />
									<span>{{ user.name }}</span>
								</div>
								<div class="profile-hover">
									<div class="profile-menu">
										<router-link to="/profile">Profil</router-link>
										<router-link to="/pesanansaya">Pesanan Saya</router-link>
									</div>
									<div class="select-button">
										<a href="javascript:void(0)" @click="handleClick" class="primary-btn logout-btn">Log Out</a>
									</div>
								</div>
							</li>
						</ul>
						<ul v-if="!user" class="nav-right">
							<router-link to="/login" class="belanja-lagi">Login/Register</router-link>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Header End -->
</template>

<script>
import axios from "axios";
import { mapGetters } from "vuex";

export default {
	name: "HeaderKopma",
	methods: {
		async handleClick() {
			await axios.post("/api/logout");
			localStorage.removeItem("token");
			localStorage.removeItem("user");
			this.$store.dispatch("user", null);
			this.$router.push("/");
		},
	},
	computed: {
		...mapGetters(["user"]),
	},
};
</script>
