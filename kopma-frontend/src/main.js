import Vue from "vue";
import App from "./App.vue";
import router from "./router";
import "./utils/axios";
import store from "./utils/vuex";

Vue.config.productionTip = false;

router.beforeEach((to, from, next) => {
    if (to.matched.some((record) => record.meta.requiresAuth)) {
        // this route requires auth, check if logged in
        // if not, redirect to login page.
        if (!store.getters.loggedIn) {
            next({
                path: "/login",
            });
        } else {
            next();
        }
    } else if (to.matched.some((record) => record.meta.requiresVisitor)) {
        // this route requires visitor, check if logged in
        // if not, redirect to home.
        if (store.getters.loggedIn) {
            next({
                path: "/",
            });
        } else {
            next();
        }
    } else {
        next(); // make sure to always call next()!
    }
});

new Vue({
    router,
    store,
    render: (h) => h(App),
}).$mount("#app");
