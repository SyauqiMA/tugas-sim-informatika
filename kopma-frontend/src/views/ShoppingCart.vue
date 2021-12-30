<template>
	<div class="shoppingCart">
		<HeaderKopmaCart />
		<!-- Breadcrumb Section Begin -->
		<div class="breacrumb-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-left">
						<div class="breadcrumb-text product-more">
							<router-link to="/"><i class="fa fa-home"></i> Home</router-link>
							<span>Shopping Cart</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Breadcrumb Section Begin -->

		<!-- Shopping Cart Section Begin -->
		<section class="shopping-cart">
			<div class="container">
				<div class="mt-4 mb-4 text-left">
					<h4>Keranjang Belanja</h4>
				</div>
				<div class="row">
					<div class="col-lg-8">
						<div class="row">
							<div class="col-lg-12">
								<div class="cart-table">
									<table>
										<tbody>
											<tr v-for="item in keranjangBelanja" v-bind:key="item.id">
												<td class="cart-pic first-row">
													<img :src="item.photo" />
												</td>
												<td class="cart-title first-row text-center">
													<h5>{{ item.name }}</h5>
												</td>
												<td class="p-price first-row">{{ formatRupiah(item.price) }}</td>
												<td class="qua-col">
													<div class="pro-qty">
														<button v-on:click="item.quantity == 1 ? (item.quantity -= 0) : (item.quantity -= 1)" class="qtybtn dec">-</button>

														<input type="number" id="quantity" step="1" min="1" max="50" name="quantity" :value="item.quantity" title="Qty" size="2" placeholder inputmode="numeric" />

														<button v-on:click="item.quantity == 50 ? (item.quantity += 0) : (item.quantity += 1)" class="qtybtn">+</button>
													</div>
												</td>
												<td class="p-price">{{ formatRupiah(item.quantity * item.price) }}</td>
												<td class="delete-item">
													<a href="javascript:void(0)" @click="removeItem(keranjangBelanja.index)"><i class="material-icons"> close </i></a>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="row">
							<div class="col-lg-12">
								<div class="proceed-checkout text-left">
									<ul>
										<li class="subtotal mt-3">
											Subtotal <span>{{ formatRupiah(Total()) }}</span>
										</li>
										<li class="subtotal mt-3">
											Ongkir <span>{{ formatRupiah(ongkir) }}</span>
										</li>
										<li class="subtotal mt-3">
											Total Biaya <span>{{ formatRupiah(Total() + ongkir) }}</span>
										</li>
										<li class="subtotal mt-3">Pembayaran <span>COD</span></li>
									</ul>
									<router-link to="/success" class="proceed-btn">Konfirmasi Pesanan</router-link>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Shopping Cart Section End -->

		<FooterKopma />
	</div>
</template>

<script>
import HeaderKopmaCart from "@/components/HeaderKopmaCart.vue";
import FooterKopma from "@/components/FooterKopma.vue";

const products = [
	{ id: 1, name: "Ultra Milk Full Cream 1L", harga: 16000, jumlah: 1, gambar: "img/products/susu.jpg" },
	{ id: 2, name: "Indomie Goreng", harga: 2300, jumlah: 1, gambar: "img/products/mie.jpg" },
	{ id: 3, name: "Filma Minyak Goreng 2L", harga: 27000, jumlah: 1, gambar: "img/products/minyak.jpg" },
];

export default {
	name: "ShoppingCart",
	components: {
		HeaderKopmaCart,
		FooterKopma,
	},
	data: function () {
		return {
			items: products,
			ongkir: 7000,
			Total() {
				let total = 0;
				this.keranjangBelanja.forEach((item) => {
					total += item.price * item.quantity;
				});
				return total;
			},
			keranjangBelanja: [],
		};
	},
	methods: {
		formatRupiah(angka) {
			return "Rp " + angka.toString().replace(/(\d)(?=(\d{3})+(?:\.\d+)?$)/g, "$1.");
		},
		handleClick() {
			this.$store.dispatch("logout").then((response) => {
				this.$router.push("/");
			});
		},
		removeItem(index) {
			this.keranjangBelanja.splice(index, 1);
			const parsed = JSON.stringify(this.keranjangBelanja);
			localStorage.setItem("keranjangBelanja", parsed);
		},
	},
	mounted() {
		if (localStorage.getItem("keranjangBelanja")) {
			try {
				this.keranjangBelanja = JSON.parse(localStorage.getItem("keranjangBelanja"));
			} catch (e) {
				localStorage.removeItem("keranjangBelanja");
			}
		}
	},
};
</script>
