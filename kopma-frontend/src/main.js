import Vue from "vue";
import App from "./App.vue";
import router from "./router";
import "./utils/axios";
import store from "./utils/vuex";

Vue.config.productionTip = false;

new Vue({
	router,
	store,
	render: (h) => h(App),
}).$mount("#app");
