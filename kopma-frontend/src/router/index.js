import Vue from "vue";
import VueRouter from "vue-router";
import Home from "../views/Home.vue";
import Product from "../views/Product.vue";
import ShoppingCart from "../views/ShoppingCart.vue";
import SuccessPage from "../views/Success.vue";
import ProductSearch from "../views/ProductSearch.vue";
import Login from "../views/Login.vue";
import Register from "../views/Register.vue";
import MyOrders from "../views/MyOrders.vue";
import DetailPesanan from "../views/DetailPesanan.vue";

Vue.use(VueRouter);

const routes = [
    {
        path: "/",
        name: "Home",
        component: Home,
    },
    {
        path: "/about",
        name: "About",
        // route level code-splitting
        // this generates a separate chunk (about.[hash].js) for this route
        // which is lazy-loaded when the route is visited.
        component: () => import(/* webpackChunkName: "about" */ "../views/About.vue"),
    },
    {
        path: "/product",
        name: "Product",
        component: Product,
    },
    {
        path: "/shoppingcart",
        name: "ShoppingCart",
        component: ShoppingCart,
    },
    {
        path: "/success",
        name: "SuccessPage",
        component: SuccessPage,
    },
    {
        path: "/productsearch",
        name: "ProductSearch",
        component: ProductSearch,
    },
    {
        path: "/login",
        name: "Login",
        component: Login,
    },
    {
        path: "/daftar",
        name: "Register",
        component: Register,
    },
    {
        path: "/pesanansaya",
        name: "PesananSaya",
        component: MyOrders,
    },
    {
        path: "/detailpesanan",
        name: "DetailPesanan",
        component: DetailPesanan,
    },
];

const router = new VueRouter({
    routes,
});

export default router;
