import Vue from "vue";
import VueRouter from "vue-router";

import AppFeatures from "@/js/pages/AppFeatures";

Vue.use(VueRouter);

const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/",
            name: "appFeatures",
            component: AppFeatures
        }
    ]
});

export default router;