<template>
    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <router-link to="/">
                                <img src="img/logo_kopma.png" alt="" />
                            </router-link>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="advanced-search">
                            <button type="button" class="category-btn">Kategori</button>
                            <div class="input-group">
                                <input type="text" placeholder="Beli apa hari ini?" />
                                <button type="button" id="searchBtn" aria-label="Cari" title="Cari Produk">
                                    <i class="ti-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 text-right col-md-3">
                        <ul class="nav-right">
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
                                    <span>Ramadhan</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->
</template>

<script>
export default {
    name: "HeaderKopma",
};
</script>
