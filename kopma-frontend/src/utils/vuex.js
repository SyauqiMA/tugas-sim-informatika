import Vue from "vue";
import Vuex from "vuex";
import axios from "axios";

Vue.use(Vuex);

const store = new Vuex.Store({
    state: {
        user: localStorage.getItem("user") || null,
        token: localStorage.getItem("access_token") || null,
    },
    getters: {
        user(state) {
            return state.user;
        },
        loggedIn(state) {
            return state.token !== null;
        },
    },
    actions: {
        logout(context) {
            if (context.getters.loggedIn) {
                return new Promise((resolve, reject) => {
                    axios
                        .post("/api/logout")
                        .then((response) => {
                            localStorage.removeItem("access_token");
                            localStorage.removeItem("user");
                            context.commit("logout");
                            resolve(response);
                            // console.log(response);
                        })
                        .catch((error) => {
                            localStorage.removeItem("access_token");
                            localStorage.removeItem("user");
                            context.commit("logout");
                            reject(error);
                        });
                });
            }
        },
        login(context, dataLogin) {
            return new Promise((resolve, reject) => {
                axios
                    .post("/api/auth/login", {
                        email: dataLogin.email,
                        password: dataLogin.password,
                    })
                    .then((response) => {
                        const token = response.data.access_token;
                        const user = JSON.stringify(response.data.user);

                        localStorage.setItem("access_token", token);
                        localStorage.setItem("user", JSON.parse(user));
                        context.commit("login", token);
                        context.commit("user", JSON.parse(user));
                        resolve(response);
                        // console.log(response);
                    })
                    .catch((error) => {
                        console.log(error);
                        reject(error);
                    });
            });
        },
    },
    mutations: {
        user(state, user) {
            state.user = user;
        },
        login(state, token) {
            state.token = token;
        },
        logout(state) {
            state.user = null;
            state.token = null;
        },
    },
});

export default store;
