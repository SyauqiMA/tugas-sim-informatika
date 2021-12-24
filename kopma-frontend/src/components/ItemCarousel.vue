<template>
    <!-- Item Carousel Section Begin -->
    <section class="women-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 mt-5 text-left">
                    <h4>Promo Minggu ini</h4>
                    <carousel class="product-slider" :items="4" :nav="false" :autoplay="true" :loop="true" :margin="25" :dots="false">
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="img/products/hit.jpg" alt="" />
                                <ul>
                                    <li class="w-icon active">
                                        <a href="#"><i class="icon_bag_alt"></i></a>
                                    </li>
                                    <li class="quick-view"><a href="product.html">+ Quick View</a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Obat Nyamuk</div>
                                <a href="#">
                                    <h5>HIT Orange 350ml</h5>
                                </a>
                                <div class="product-price">
                                    Rp 24.000
                                    <span>Rp 25.500</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="img/products/minyak.jpg" alt="" />
                                <ul>
                                    <li class="w-icon active">
                                        <a href="#"><i class="icon_bag_alt"></i></a>
                                    </li>
                                    <li class="quick-view"><a href="#">+ Quick View</a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Minyak Goreng</div>
                                <a href="#">
                                    <h5>Filma Minyak Goreng 2L</h5>
                                </a>
                                <div class="product-price">Rp 27.000</div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="img/products/susu.jpg" alt="" />
                                <ul>
                                    <li class="w-icon active">
                                        <a href="#"><i class="icon_bag_alt"></i></a>
                                    </li>
                                    <li class="quick-view"><a href="#">+ Quick View</a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Susu</div>
                                <a href="#">
                                    <h5>Ultra Milk Full Cream 1L</h5>
                                </a>
                                <div class="product-price">
                                    Rp 16.000
                                    <span>Rp 16.500</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="img/products/mie.jpg" alt="" />
                                <ul>
                                    <li class="w-icon active">
                                        <a href="#"><i class="icon_bag_alt"></i></a>
                                    </li>
                                    <li class="quick-view">
                                        <router-link to="/product">+ Quick View</router-link>
                                    </li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Mie Instan</div>
                                <router-link to="/product">
                                    <a href="#">
                                        <h5>Indomie Goreng</h5>
                                    </a>
                                </router-link>
                                <div class="product-price">
                                    RP 2.300
                                    <span>Rp 2.700</span>
                                </div>
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

export default {
    name: "ItemCarousel",
    components: { carousel },
};
</script>
