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
			let user = JSON.parse(state.user);
			return user;
		},
		loggedIn(state) {
			return state.token !== null;
		},
	},
	actions: {
		logout(context) {
			if (context.getters.loggedIn) {
				axios.defaults.headers.common["Authorization"] = "Bearer " + context.state.token;
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
						const user = response.data.user;
						console.log(user);

						localStorage.setItem("access_token", token);
						localStorage.setItem("user", JSON.stringify(user));
						context.commit("login", token);
						context.commit("user", JSON.stringify(user));
						resolve(response);
						// console.log(response);
					})
					.catch((error) => {
						console.log(error);
						reject(error);
					});
			});
		},
		register(context, dataRegister) {
			return new Promise((resolve, reject) => {
				axios
					.post("/api/auth/register", {
						name: dataRegister.name,
						email: dataRegister.email,
						password: dataRegister.password,
					})
					.then((response) => {
						resolve(response);
					})
					.catch((error) => {
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
