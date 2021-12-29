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
                                    <form @submit.prevent="handleSubmit">
                                        <div class="group-input">
                                            <label for="username">Nama</label>
                                            <input type="text" id="username" v-model="nama" required />
                                        </div>
                                        <div class="group-input">
                                            <label for="email">Email</label>
                                            <input type="email" id="email" v-model="email" required />
                                        </div>
                                        <div class="group-input">
                                            <label for="password">Password</label>
                                            <input type="password" id="password" v-model="password" required />
                                        </div>
                                        <div class="group-input">
                                            <label for="con-password">Konfirmasi Password</label>
                                            <input type="password" id="con-password" v-model="password_conf" @input="checkPassword" required />
                                            <div>{{ message }}</div>
                                        </div>
                                        <button type="submit" class="site-btn register-btn" :disabled="!isSame">Daftar</button>
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
import axios from "axios";

export default {
    name: "RegisterKopma",
    components: {
        FooterKopma,
    },
    data() {
        return {
            nama: "",
            email: "",
            password: "",
            password_conf: "",
            message: "",
            isSame: false,
        };
    },
    methods: {
        async handleSubmit() {
            await axios.post("/api/auth/register", {
                name: this.nama,
                email: this.email,
                password: this.password,
            });

            this.$router.push("/login");
        },
        checkPassword() {
            let password = this.password;
            let password_conf = this.password_conf;

            if (password.length != 0) {
                if (password == password_conf) {
                    this.message = "Password Sama";
                    this.isSame = true;
                } else {
                    this.message = "Password Belum Sama";
                    this.isSame = false;
                }
            }
        },
    },
};
</script>
