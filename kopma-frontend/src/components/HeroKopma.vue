<template>
    <!-- Hero Section Begin -->
    <section class="hero-section">
        <carousel class="hero-items" :items="1" :nav="false" :autoplay="true">
            <div class="single-hero-items set-bg" style="background-image: url('/img/hero-promo-1.png'); background-size: cover; background-repeat: no-repeat; background-position: center">
                <div class="container">
                    <div class="row">
                        <div class="ml-5 col-lg-5">
                            <!-- <span>Bag,kids</span> -->
                            <h1>Promo Setiap Hari</h1>
                            <p>
                                Hanya di Minimarket Online KOPMA UIN SUKA <br />
                                Promo terbatas. Buruan daftar!
                            </p>
                            <a href="#" class="primary-btn">Login/Register</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-hero-items set-bg" style="background-image: url('/img/hero-promo-2.png'); background-size: cover; background-repeat: no-repeat; background-position: center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <a href="#" class="primary-btn">Login/Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </carousel>
    </section>
    <!-- Hero Section End -->
</template>

<script>
import carousel from "vue-owl-carousel";

export default {
    name: "HeroKopma",
    components: {
        carousel,
    },
};
</script>
