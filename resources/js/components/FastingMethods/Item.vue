<template>
    <div class="df-fasting-item">
        <div class="container">
            <div class="df-item-image" v-if="this.logo">
                <svg-vue :icon="this.logo" />
            </div>
            <div class="df-item-text-wrapper">
                <p class="df-item-title" v-if="this.title">{{ this.title }}</p>
                <div class="df-item-text" v-html="this.description" v-if="this.description"></div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Item",
    props: {
        title: {
            type: String,
            default: ""
        },
        description: {
            type: String,
            default: ""
        },
        logo: {
            type: String,
            default: ""
        }
    }
};
</script>