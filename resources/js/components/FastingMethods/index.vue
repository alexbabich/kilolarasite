<template>
    <div class="df-white-bg df-block-wrapper">
        <h3 class="df-block-title text-center" v-if="this.title">{{ this.title }}</h3>
        <div class="df-fasting-items row justify-content-around" v-if="this.dataArray">
            <item
                v-for="(item, index) in dataArray" 
                :key="index"
                :title="item.title"
                :description="item.description"
                :logo="item.logo"
            />
        </div>
    </div>
</template>

<script>
import Item from "./Item";
export default {
    name: "FastingMethods",
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
        }
    }
};
</script>

<style lang="scss" scoped>
    .df-block-wrapper {
        padding-bottom: 0;
        padding-right: 15px;
        padding-left: 15px;
    }
</style>
