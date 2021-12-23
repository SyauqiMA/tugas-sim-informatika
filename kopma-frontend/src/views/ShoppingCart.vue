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
        <section class="shopping-cart spad">
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
                                            <tr v-for="item in items" v-bind:key="item.id">
                                                <td class="cart-pic first-row">
                                                    <img :src="item.gambar" />
                                                </td>
                                                <td class="cart-title first-row text-center">
                                                    <h5>{{ item.name }}</h5>
                                                </td>
                                                <td class="p-price first-row">{{ formatRupiah(item.harga) }}</td>
                                                <td class="qua-col">
                                                    <div class="pro-qty">
                                                        <button v-on:click="item.jumlah == 1 ? (item.jumlah -= 0) : (item.jumlah -= 1)" class="qtybtn dec">-</button>

                                                        <input type="number" id="quantity" step="1" min="1" max="50" name="quantity" :value="item.jumlah" title="Qty" size="2" placeholder inputmode="numeric" />

                                                        <button v-on:click="item.jumlah == 50 ? (item.jumlah += 0) : (item.jumlah += 1)" class="qtybtn">+</button>
                                                    </div>
                                                </td>
                                                <td class="p-price">{{ formatRupiah(item.jumlah * item.harga) }}</td>
                                                <td class="delete-item">
                                                    <a href="#"><i class="material-icons"> close </i></a>
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
                this.items.forEach((item) => {
                    total += item.harga * item.jumlah;
                });
                return total;
            },
        };
    },
    methods: {
        formatRupiah(angka) {
            return "Rp " + angka.toString().replace(/(\d)(?=(\d{3})+(?:\.\d+)?$)/g, "$1.");
        },
    },
};
</script>
