<template>
    <div class="detail-pesanan">
        <HeaderKopma />
        <!-- Breadcrumb Section Begin -->
        <div class="breacrumb-section text-left">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-text product-more">
                            <router-link to="/"><i class="fa fa-home"></i> Home</router-link>
                            <router-link to="/pesanansaya">Pesanan Saya</router-link>
                            <span>Detail Pesanan</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Section Begin -->
        <div class="my-detail-order">
            <div class="container">
                <div class="mt-4 mb-4 text-left">
                    <h4>Pesanan #M23091</h4>
                </div>
                <div class="row">
                    <div class="description-order col-lg-10 col-sm-12 text-left">
                        <h5>Transaksi ID: M23091</h5>
                        <p>15 Desember 2021 | 17:28:55 WIB</p>
                        <div class="info-pengiriman mt-4">
                            <h6>Informasi Pengiriman</h6>
                            <table class="mt-3">
                                <tbody>
                                    <tr>
                                        <td>Nama Penerima</td>
                                        <td>:</td>
                                        <td>Muhammad Ramadhan</td>
                                    </tr>
                                    <tr>
                                        <td>Alamat Pengiriman</td>
                                        <td>:</td>
                                        <td>Kos Damai, Jalan Untung Suropati Blok Z no 3, Kec. Gondokusuman, Kel. Demangan, D.I.Yogyakarta</td>
                                    </tr>
                                    <tr>
                                        <td>Nomor Ponsel</td>
                                        <td>:</td>
                                        <td>082255972698</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="order-status delivery col-lg-2 col-sm-12">
                        <i class="icon_clock"></i>
                        <span>Dalam Pengiriman</span>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="order-items col-lg-12 text-left detail-order-table">
                        <h6>Informasi Barang</h6>
                        <table class="mt-3">
                            <tbody>
                                <tr>
                                    <td class="cart-pic">
                                        <img src="img/products/susu.jpg" />
                                    </td>
                                    <td class="cart-title text-center">
                                        <h5>Ultra Milk Full Cream 1L</h5>
                                    </td>
                                    <td class="p-price">Rp 2.700 <span>Rp 2.900</span></td>
                                    <td class="p-quantity">x10</td>
                                    <td class="total-price">x10</td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="mt-3 table-price-summary">
                            <tbody>
                                <tr>
                                    <td>Subtotal</td>
                                    <td>x10</td>
                                </tr>
                                <tr>
                                    <td>Ongkir</td>
                                    <td>x10</td>
                                </tr>
                                <tr>
                                    <td class="detail-order-total">Total</td>
                                    <td class="total-price">x10</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <FooterKopma />
    </div>
</template>

<script>
import HeaderKopma from "@/components/HeaderKopma.vue";
import FooterKopma from "@/components/FooterKopma.vue";

export default {
    name: "DetailPesanan",
    components: {
        HeaderKopma,
        FooterKopma,
    },
};
</script>
