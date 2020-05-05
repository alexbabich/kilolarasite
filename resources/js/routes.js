import Vue from "vue";
import VueRouter from "vue-router";

import AppFeatures from "@/js/pages/AppFeatures";
import WelcomeToApp from "@/js/pages/WelcomeToApp";
import Upsell from "@/js/pages/Upsell";

Vue.use(VueRouter);

const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/",
            name: "appFeatures",
            component: AppFeatures
        },
        {
            path: "/welcomeapp",
            name: "welcomeApp",
            component: WelcomeToApp
        },
        {
            path: "/upsell",
            name: "upsell",
            component: Upsell
        }
    ]
});

export default router;