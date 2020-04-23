import "./bootstrap";
import Vue from "vue";
import SvgVue from 'svg-vue';

// Route info for Vue Router
import Routes from "@/js/routes.js";

// Components file
import App from "@/js/views/App";

Vue.use(SvgVue);

const app = new Vue({
    el: "#app",
    router: Routes,
    render: h => h(App),
})

export default app;