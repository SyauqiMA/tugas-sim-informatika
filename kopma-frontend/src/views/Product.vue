<template>
    <div class="product">
        <HeaderKopma />
        <!-- Breadcrumb Section Begin -->
        <div class="breacrumb-section text-left">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-text product-more">
                            <router-link to="/"><i class="fa fa-home"></i> Home</router-link>
                            <span>Detail</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Section Begin -->

        <!-- Product Shop Section Begin -->
        <section class="product-shop spad page-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="product-pic-zoom">
                                    <img class="product-big-img" src="img/products/mie.jpg" alt="" />
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="product-details text-left">
                                    <div class="pd-title">
                                        <span>Mie Instan</span>
                                        <h3>Indomie Goreng</h3>
                                    </div>
                                    <div class="pd-desc">
                                        <p>
                                            KOMPOSISI : Tepung terigu, minyak sayur, tepung tapioka, garam, pemantap (nabati dan natrium tripolifosfat), pengatur keasaman, mineral (zat besi), pewarna (tartrazin CI 19140), antioksidan
                                            (TBHQ).
                                        </p>
                                        <h4>Rp 2.300</h4>
                                    </div>
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <button v-on:click="current_qty == 1 ? (current_qty -= 0) : (current_qty -= 1)" class="qtybtn dec">-</button>

                                            <input type="number" id="quantity" step="1" min="1" max="50" name="quantity" :value="current_qty" title="Qty" size="2" placeholder inputmode="numeric" />

                                            <button v-on:click="current_qty == 50 ? (current_qty += 0) : (current_qty += 1)" class="qtybtn">+</button>
                                        </div>
                                        <a href="shopping-cart.html" class="primary-btn pd-cart">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr />
            </div>
        </section>
        <!-- Product Shop Section End -->
        <RelatedProducts />
        <FooterKopma />
    </div>
</template>

<script>
import HeaderKopma from "@/components/HeaderKopma.vue";
import FooterKopma from "@/components/FooterKopma.vue";
import RelatedProducts from "@/components/RelatedProducts.vue";

export default {
    name: "Product",
    components: {
        HeaderKopma,
        FooterKopma,
        RelatedProducts,
    },
    data() {
        return {
            current_qty: 1,
        };
    },
};
</script>
