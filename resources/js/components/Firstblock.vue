<template>
    <div class="df-top-block">
        <div class="container">
            <div class="df-left-side">
                <div class="df-logo-header">
                    <svg-vue icon="logo" />
                </div>
                <h2 class="df-title-block" v-html="this.title"></h2>
                <div class="df-text-description" v-html="this.text" v-if="this.text"></div>
                <df-button
                    v-if="isShowButton"
                    :title="'start quiz'"
                    :colorstyle="'red'"
                    @click="startQuiz('start quiz')"
                />
                <div class="df-navigation-link">
                    <p class="df-linsk-title">Download the app</p>
                    <div class="df-market-links">
                        <router-link to="#" tag="a" class="df-appstore"></router-link>
                        <router-link to="#" tag="a" class="df-playmarket"></router-link>
                    </div>
                </div>
            </div>
        </div>
        <div class="df-top-block-img" :style="this.background | bgImage"></div>
        <img :src="this.background | srcImage" alt="header image" class="df-top-img" />
    </div>
</template>

<script>
export default {
    name: "Firstblock",
    components: {
        'df-button': () => import(
            '@/js/molecules/DFButton'
        )
    },
    methods: {
        startQuiz(data) {
            console.log(data)
        }
    },
    props: {
        isShowButton: {
            type: Boolean,
            default: true
        },
        title: {
            type: String,
            default: ""
        },
        text: {
            type: String,
            default: ""
        },
        background: {
            type: String,
            default: ""
        },
        bgColor: {
            type: String,
            default: "#0099CC"
        }
    },
    filters: {
        bgImage: function (value) {
            return 'background-image: url(/images/'+ value +'.png);';
        },
        srcImage: function (value) {
            return '../images/'+ value +'.png';
        }
    }
};
</script>