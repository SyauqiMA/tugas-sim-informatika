<template>
	<!-- Item Carousel Section Begin -->
	<section class="women-banner spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 mt-5 text-left">
					<h4>Produk Minggu ini</h4>
					<carousel class="product-slider" :items="4" :nav="false" :autoplay="true" :loop="true" :margin="25" :dots="false">
						<div class="product-item" v-for="itemProduct in JSON.parse(products)" v-bind:key="itemProduct.id">
							<div class="pi-pic">
								<img :src="itemProduct.photos[0].photo" alt="" />
								<ul>
									<li class="w-icon active">
										<a href="#" @click="saveKeranjang(productDetail.id, productDetail.photos[0].photo, productDetail.name, productDetail.price)"><i class="icon_bag_alt"></i></a>
									</li>
									<li class="quick-view">
										<router-link v-bind:to="'/product/' + itemProduct.id">+ Quick View</router-link>
									</li>
								</ul>
							</div>
							<div class="pi-text">
								<div class="catagory-name">{{ itemProduct.category.name }}</div>
								<router-link v-bind:to="'/product/' + itemProduct.id">
									<h5>{{ itemProduct.name }}</h5>
								</router-link>
								<div class="product-price">RP {{ itemProduct.price }}</div>
							</div>
						</div>
					</carousel>
				</div>
			</div>
		</div>
	</section>
	<!-- Item Carousel Section End -->
</template>

<script>
import carousel from "vue-owl-carousel";
import axios from "axios";

export default {
	name: "ItemCarousel",
	components: { carousel },
	data() {
		return {
			products: [],
		};
	},
	mounted() {
		axios
			.get("/api/products")
			.then((response) => {
				this.products = JSON.stringify(response.data.data);
				console.log(this.products);
			})
			.catch((err) => console.log(err));
	},
};
</script>
