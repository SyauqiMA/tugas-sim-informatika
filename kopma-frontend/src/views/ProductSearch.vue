<template>
    <div class="productsearch">
        <HeaderKopma />
        <!-- Breadcrumb Section Begin -->
        <div class="breacrumb-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-left">
                        <div class="breadcrumb-text product-more">
                            <router-link to="/"><i class="fa fa-home"></i> Home</router-link>
                            <span>Pencarian Produk</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Section Begin -->
        <section class="product-shop spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 order-1 order-lg-2">
                        <div class="title-search mt-4 mb-4">
                            <div class="row">
                                <div class="text-left col-lg-6 col-sm-12">
                                    <h4>
                                        Hasil Pencarian | <span>{{ keyword }}</span>
                                    </h4>
                                </div>
                                <div class="text-right col-lg-6 col-sm-12">
                                    <h6>12 Produk ditemukan</h6>
                                </div>
                            </div>
                        </div>
                        <div class="product-list">
                            <div class="row">
                                <div class="col-lg-3 col-sm-4">
                                    <div class="product-item">
                                        <div class="pi-pic">
                                            <img src="img/products/mie.jpg" alt="" />
                                            <div class="sale pp-sale">Promo</div>
                                            <ul>
                                                <li class="w-icon active">
                                                    <a href="#"><i class="icon_bag_alt"></i></a>
                                                </li>
                                                <li class="quick-view"><a href="product.html">+ Quick View</a></li>
                                            </ul>
                                        </div>
                                        <div class="pi-text">
                                            <div class="catagory-name">Mie Instan</div>
                                            <a href="#">
                                                <h5>Indomie Goreng</h5>
                                            </a>
                                            <div class="product-price">
                                                Rp 2.300
                                                <span>Rp 2.500</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-4">
                                    <div class="product-item">
                                        <div class="pi-pic">
                                            <img src="img/produk-serupa-1.jpg" alt="" />
                                            <div class="sale pp-sale">Promo</div>
                                            <ul>
                                                <li class="w-icon active">
                                                    <a href="#"><i class="icon_bag_alt"></i></a>
                                                </li>
                                                <li class="quick-view"><a href="#">+ Quick View</a></li>
                                            </ul>
                                        </div>
                                        <div class="pi-text">
                                            <div class="catagory-name">Mie Instan</div>
                                            <a href="#">
                                                <h5>Indomie Seblak Hot Jeletot</h5>
                                            </a>
                                            <div class="product-price">
                                                Rp 2.700
                                                <span>Rp 2.900</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-4">
                                    <div class="product-item">
                                        <div class="pi-pic">
                                            <img src="img/produk-serupa-2.jpg" alt="" />
                                            <div class="sale pp-sale">Promo</div>
                                            <ul>
                                                <li class="w-icon active">
                                                    <a href="#"><i class="icon_bag_alt"></i></a>
                                                </li>
                                                <li class="quick-view"><a href="#">+ Quick View</a></li>
                                            </ul>
                                        </div>
                                        <div class="pi-text">
                                            <div class="catagory-name">Mie Instan</div>
                                            <a href="#">
                                                <h5>Indomie Ayam Bawang</h5>
                                            </a>
                                            <div class="product-price">
                                                Rp 2.500
                                                <span>Rp 2.900</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-4">
                                    <div class="product-item">
                                        <div class="pi-pic">
                                            <img src="img/produk-serupa-3.jpg" alt="" />
                                            <div class="sale pp-sale">Promo</div>
                                            <ul>
                                                <li class="w-icon active">
                                                    <a href="#"><i class="icon_bag_alt"></i></a>
                                                </li>
                                                <li class="quick-view"><a href="#">+ Quick View</a></li>
                                            </ul>
                                        </div>
                                        <div class="pi-text">
                                            <div class="catagory-name">Mie Instan</div>
                                            <a href="#">
                                                <h5>Indomie Mi Goreng Aceh</h5>
                                            </a>
                                            <div class="product-price">
                                                Rp 2.300
                                                <span>Rp 2.700</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-4">
                                    <div class="product-item">
                                        <div class="pi-pic">
                                            <img src="img/produk-serupa-4.jpg" alt="" />
                                            <div class="sale pp-sale">Promo</div>
                                            <ul>
                                                <li class="w-icon active">
                                                    <a href="#"><i class="icon_bag_alt"></i></a>
                                                </li>
                                                <li class="quick-view"><a href="#">+ Quick View</a></li>
                                            </ul>
                                        </div>
                                        <div class="pi-text">
                                            <div class="catagory-name">Mie Instan</div>
                                            <a href="#">
                                                <h5>Indomie Soto Mie</h5>
                                            </a>
                                            <div class="product-price">
                                                Rp 2.300
                                                <span>Rp 2.700</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <FooterKopma />
    </div>
</template>

<script>
import HeaderKopma from "@/components/HeaderKopma.vue";
import FooterKopma from "@/components/FooterKopma.vue";

export default {
    name: "ProductSearch",
    components: {
        HeaderKopma,
        FooterKopma,
    },
    data() {
        return {
            keyword: this.$route.params.product,
        };
    },
};
</script>
