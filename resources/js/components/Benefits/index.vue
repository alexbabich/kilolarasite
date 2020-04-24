<template>
    <div class="df-gray-bg">
        <div class="container">
            <h3 class="df-block-title text-center" v-if="this.title">{{ this.title }}</h3>
            <div class="df-block-text" v-html="this.description" v-if="this.description"></div>
            <div class="row justify-content-around" v-if="this.dataArray">
                <item 
                    v-for="(item, index) in dataArray" 
                    :key="index"
                    :title="item.title"
                    :description="item.description"
                    :logo="item.logo"
                />
            </div>
        </div>
    </div>
</template>

<script>
import Item from "./Item";
export default {
    name: "Benefits",
    components: {
        Item
    },
    props: {
        dataArray: {
            type: Array,
            default: () => []
        },
        title: {
            type: String,
            default: ""
        },
        description: {
            type: String,
            default: ""
        }
    },
};
</script>

<style lang="scss" scoped>
    .df-gray-bg {
        padding: 40px 0 0;
    }
</style>
