<template>
	<div class="success">
		<div class="d-flex success-checkout align-items-center justify-content-center">
			<div class="col col-lg-4 text-center">
				<img src="img/success-buy.png" alt="" width="294" />
				<h3 class="mt-4">Terima Kasih Sudah Melakukan Pembayaran!</h3>
				<p class="mt-2">Silakan tunggu update terbaru dari kami via email yang sudah Anda daftarkan sebelumnya. Barang akan segera dikirim ke alamatmu.</p>
				<router-link to="/pesanansaya" class="primary-btn pd-cart mt-3">Lihat Pesanan Saya</router-link>
			</div>
		</div>
	</div>
</template>

<script>
export default {
	name: "SuccessPage",
};
</script>
