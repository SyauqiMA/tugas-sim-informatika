<template>
	<div class="home">
		<HeaderKopma />
		<HeroKopma />
		<ItemCarousel />
		<FooterKopma />
	</div>
</template>

<script>
// @ is an alias to /src
import HeaderKopma from "@/components/HeaderKopma.vue";
import HeroKopma from "@/components/HeroKopma.vue";
import ItemCarousel from "@/components/ItemCarousel.vue";
import FooterKopma from "@/components/FooterKopma.vue";

export default {
	name: "Home",
	components: {
		HeaderKopma,
		HeroKopma,
		ItemCarousel,
		FooterKopma,
	},
};
</script>
