<template>
    <div class="loginKopma">
        <div class="register-login-section spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 offset-lg-3">
                        <div class="card o-hidden border-0 shadow-lg my-5">
                            <div class="card-body p-5">
                                <router-link to="/"> <img src="img/logo_kopma.jpg" alt="" /></router-link>
                                <div class="login-form text-left">
                                    <h2>Masuk</h2>
                                    <div class="switch-login">
                                        Belum punya akun?
                                        <router-link to="/daftar" class="or-login">Daftar</router-link>
                                    </div>
                                    <div class="row justify-content-between">
                                        <div class="col-lg-6 col-sm 12">
                                            <a class="site-btn btn-google"><i class="fa fa-google mr-2"></i>Masuk dengan Google</a>
                                        </div>
                                        <div class="col-lg-6 col-sm 12">
                                            <a class="site-btn btn-facebook"><i class="fa fa-facebook mr-3"></i>Masuk dengan Facebook</a>
                                        </div>
                                    </div>
                                    <div class="login-separator">
                                        <h6><span>or</span></h6>
                                    </div>
                                    <form @submit.prevent="handleSubmit">
                                        <div class="group-input">
                                            <label for="email">Email</label>
                                            <input type="email" id="email" v-model="email" required />
                                        </div>
                                        <div class="group-input">
                                            <label for="password">Password</label>
                                            <input type="password" id="password" v-model="password" required />
                                        </div>
                                        <button type="submit" class="site-btn login-btn">Masuk</button>
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
// import axios from "axios";

export default {
    name: "LoginKopma",
    components: {
        FooterKopma,
    },
    data() {
        return {
            email: "",
            password: "",
        };
    },
    methods: {
        handleSubmit() {
            // const response = await axios.post("/api/auth/login", {
            //     email: this.email,
            //     password: this.password,
            // });
            // localStorage.setItem("token", response.data.access_token);
            // localStorage.setItem("user", JSON.stringify(response.data.user));
            // this.$store.dispatch("user", JSON.stringify(response.data.user));
            this.$store
                .dispatch("login", {
                    email: this.email,
                    password: this.password,
                })
                .then((response) => {
                    this.$router.push("/");
                });
        },
    },
};
</script>
