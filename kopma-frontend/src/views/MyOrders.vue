<template>
    <div class="pesanan-saya">
        <HeaderKopma />
        <!-- Breadcrumb Section Begin -->
        <div class="breacrumb-section text-left">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-text product-more">
                            <router-link to="/"><i class="fa fa-home"></i> Home</router-link>
                            <span>Pesanan Saya</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Section Begin -->

        <section class="my-orders">
            <div class="container">
                <div class="mt-4 mb-4 text-left">
                    <h4>Pesanan Saya</h4>
                </div>
                <div class="row no-gutters">
                    <div class="an-order col-lg-12 mt-3 mb-3 border">
                        <a href=""
                            ><div class="row no-gutters justify-content-start text-left">
                                <div class="col-lg-9 col-sm-12 py-4 px-5">
                                    <div class="description-order">
                                        <h5>Transaksi ID: M23091</h5>
                                        <p>15 Desember 2021 | 17:28:55 WIB</p>
                                    </div>
                                    <div class="order-preview mt-3">
                                        <div class="row no-gutters">
                                            <div class="col-md-2 col-sm-12">
                                                <img src="img/products/mie.jpg" alt="mie" />
                                            </div>
                                            <div class="col-md-2 col-sm-12">
                                                <img src="img/products/minyak.jpg" alt="mie" />
                                            </div>
                                            <div class="col-md-2 col-sm-12">
                                                <img src="img/products/susu.jpg" alt="mie" />
                                            </div>
                                            <div class="col-md-2 col-sm-12 more">
                                                <span>+2 lainnya</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-status delivery col-lg-3 col-sm-12 p-3">
                                    <i class="icon_clock"></i>
                                    <span>Dalam Pengiriman</span>
                                </div>
                            </div></a
                        >
                    </div>
                    <div class="an-order col-lg-12 mt-3 mb-3 border">
                        <a href=""
                            ><div class="row no-gutters justify-content-start text-left">
                                <div class="col-lg-9 col-sm-12 py-4 px-5">
                                    <div class="description-order">
                                        <h5>Transaksi ID: M23091</h5>
                                        <p>15 Desember 2021 | 17:28:55 WIB</p>
                                    </div>
                                    <div class="order-preview mt-3">
                                        <div class="row no-gutters">
                                            <div class="col-md-2 col-sm-12">
                                                <img src="img/products/mie.jpg" alt="mie" />
                                            </div>
                                            <div class="col-md-2 col-sm-12">
                                                <img src="img/products/hit.jpg" alt="mie" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-status finished col-lg-3 col-sm-12 p-3">
                                    <i class="icon_check_alt"></i>
                                    <span>Sudah Diterima</span>
                                </div>
                            </div></a
                        >
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
    name: "PesananSaya",
    components: {
        HeaderKopma,
        FooterKopma,
    },
};
</script>
