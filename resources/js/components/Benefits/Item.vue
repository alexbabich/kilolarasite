<template>
    <div class="container df-item-wrapper">
        <div class="df-logo-wrapper" v-if="this.logo">
            <svg-vue :icon="this.logo" />
        </div>
        <p class="df-title" v-if="this.title">{{ this.title }}</p>
        <div class="df-benefits-items" v-if="this.description">
            {{ this.description }}
        </div>
        <router-link to="#" class="df-link-more">Read more</router-link>
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