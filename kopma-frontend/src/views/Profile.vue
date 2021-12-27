<template>
    <div class="profile">
        <HeaderKopma />
        <!-- Breadcrumb Section Begin -->
        <div class="breacrumb-section text-left">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-text product-more">
                            <router-link to="/"><i class="fa fa-home"></i> Home</router-link>
                            <span>Profil</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Section Begin -->
        <div class="my-profile">
            <div class="container">
                <div class="mt-4 mb-4 text-left">
                    <h4>Profil</h4>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-left">
                        <h6 class="mt-3">Informasi Akun</h6>
                        <form action="">
                            <table class="account-information-table mt-3">
                                <tbody>
                                    <tr>
                                        <td>Nama</td>
                                        <td>
                                            <input type="text" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Lahir</td>
                                        <td><input type="date" /></td>
                                    </tr>
                                    <tr>
                                        <td>Jenis Kelamin</td>
                                        <td>
                                            <input type="radio" id="laki-laki" name="jenisKelamin" value="laki-laki" style="vertical-align: middle" />
                                            <label for="laki-laki">Laki-laki</label>
                                            <input type="radio" id="perempuan" name="jenisKelamin" value="perempuan" class="ml-5" style="vertical-align: middle" />
                                            <label for="perempuan">Perempuan</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nomor Ponsel</td>
                                        <td><input type="text" /></td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>muhammad.r2000@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>Kata Sandi</td>
                                        <td><input type="password" /></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><button class="primary-btn save-btn">SIMPAN</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                    <div class="col-lg-12 text-left mt-5">
                        <h6 class="mt-3">Informasi Pengiriman</h6>
                        <form action="">
                            <table class="account-information-table mt-3">
                                <tbody>
                                    <tr>
                                        <td>Nama Penerima</td>
                                        <td>
                                            <input type="text" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td><input type="text" /></td>
                                    </tr>
                                    <tr>
                                        <td>Nomor Ponsel</td>
                                        <td><input type="text" /></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><button class="primary-btn save-btn">SIMPAN</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
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
    name: "Profile",
    components: {
        HeaderKopma,
        FooterKopma,
    },
};
</script>
