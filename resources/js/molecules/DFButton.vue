<template>
    <button
        :class="['df-button', this.colorstyle, this.className]"
        @click="clickButton"
    >
        <svg-vue v-if="this.svgIcon" :icon="this.svgIcon" />
        {{ this.title }}
    </button>
</template>

<script>
export default {
    name: "DFButton",
    props: {
        title: {
            type: String,
            default: ""
        },
        colorstyle: {
            type: String,
            default: ""
        },
        className: {
            type: String,
            default: ""
        },
        svgIcon: {
            type: String,
            default: ""
        }
    },
    methods: {
        clickButton() {
            this.$emit("click");
        }
    }
};
</script>