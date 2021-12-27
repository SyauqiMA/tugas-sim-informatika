<template>
    <div class="registerKopma">
        <div class="register-login-section spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 offset-lg-3">
                        <div class="card o-hidden border-0 shadow-lg my-5">
                            <div class="card-body p-5">
                                <router-link to="/"> <img src="img/logo_kopma.jpg" alt="" /></router-link>
                                <div class="register-form text-left">
                                    <h2>Daftar</h2>
                                    <div class="switch-login">
                                        Sudah punya akun?
                                        <router-link to="/login" class="or-login">Masuk</router-link>
                                    </div>
                                    <div class="row justify-content-between">
                                        <div class="col-lg-6 col-sm 12">
                                            <a class="site-btn btn-google"><i class="fa fa-google mr-2"></i>Daftar dengan Google</a>
                                        </div>
                                        <div class="col-lg-6 col-sm 12">
                                            <a class="site-btn btn-facebook"><i class="fa fa-facebook mr-3"></i>Daftar dengan Facebook</a>
                                        </div>
                                    </div>
                                    <div class="register-separator">
                                        <h6><span>or</span></h6>
                                    </div>
                                    <form action="">
                                        <div class="group-input">
                                            <label for="username">Email</label>
                                            <input type="text" id="username" />
                                        </div>
                                        <div class="group-input">
                                            <label for="pass">Password</label>
                                            <input type="text" id="pass" />
                                        </div>
                                        <div class="group-input">
                                            <label for="con-pass">Konfirmasi Password *</label>
                                            <input type="text" id="con-pass" />
                                        </div>
                                        <button type="submit" class="site-btn register-btn">Daftar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <FooterKopma />
    </div>
</template>

<script>
import FooterKopma from "@/components/FooterKopma.vue";

export default {
    name: "RegisterKopma",
    components: {
        FooterKopma,
    },
};
</script>
