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
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="cart-table">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th class="p-name text-center">Product Name</th>
                                                <th>Price</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="cart-pic first-row">
                                                    <img src="img/products/susu.jpg" />
                                                </td>
                                                <td class="cart-title first-row text-center">
                                                    <h5>Ultra Milk Full Cream 1L</h5>
                                                </td>
                                                <td class="p-price first-row">Rp 16.000 x 1</td>
                                                <td class="delete-item">
                                                    <a href="#"><i class="material-icons"> close </i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="cart-pic first-row">
                                                    <img src="img/products/mie.jpg" />
                                                </td>
                                                <td class="cart-title first-row text-center">
                                                    <h5>Indomie Goreng</h5>
                                                </td>
                                                <td class="p-price first-row">Rp 2.300 x 3</td>
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
                                <div class="proceed-checkout">
                                    <ul>
                                        <li class="subtotal">ID Transaction <span>#SH12000</span></li>
                                        <li class="subtotal mt-3">Subtotal <span>Rp 22.900</span></li>
                                        <li class="subtotal mt-3">Ongkir <span>RP 7.000</span></li>
                                        <li class="subtotal mt-3">Total Biaya <span>Rp 29.900</span></li>
                                        <li class="subtotal mt-3">Bank Transfer <span>Mandiri</span></li>
                                        <li class="subtotal mt-3">No. Rekening <span>2208 1996 1403</span></li>
                                        <li class="subtotal mt-3">Nama Penerima <span>Shayna</span></li>
                                    </ul>
                                    <router-link to="/success" class="proceed-btn">I ALREADY PAID</router-link>
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

export default {
    name: "ShoppingCart",
    components: {
        HeaderKopmaCart,
        FooterKopma,
    },
};
</script>
